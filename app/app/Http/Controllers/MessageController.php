<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSent;
use App\Message;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        return view('chatbots');
    }

    public function sendMessage(Request $request)
    {
        $message = Message::create([
            'user_id' => Auth::id(), // 現在のユーザーID
            'body' => $request['body'],
            'botresponse_id' => $request->id,
        ]);
        $message = $request->input('message');
        event(new MessageSent($message, Auth::user()));
        return response()->jason(['message' => 'Message sent successfully']);
    }
}
