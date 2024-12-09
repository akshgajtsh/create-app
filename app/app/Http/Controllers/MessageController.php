<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSent;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index(){
        return view('chatbots');
    }

    public function sendMessage(Request $request){
        $message = $request->input('message');
        event(new MessageSent($message,Auth::user()));
        return response()->jason(['message' => 'Message sent successfully']);
    }
}
