<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use Illuminate\Http\Request;
use App\Message;
use App\Botresponse;
use Illuminate\Support\Facades\Auth;

class BotController extends Controller
{
    //チャット画面を表示
    public function index()
    {
        return view('chatbots');
    }
    //新しいメッセージが来たとき
    public function newmessage(Request $request)
    {
        dd($request->all());
        $keyword = $request->input('message');
        //$keyword = $request->input('keyword');
        $botResponse = Botresponse::where('keyword', $keyword)->first();

        if ($botResponse) {
            $message = Message::create([
                'body' => $botResponse->reply,
                'botresponse_id' => $botResponse->id,
                'created_at' => now(),
            ]);
        }

        event(new MessageSent($message));
        dd($message);
        return response()->json([
            'status' => 'success',
            'reply' => $botResponse->reply,
            'link' => $botResponse->link,
        ]);

        return response()->json(['status' => 'error', 'message' => '該当する応答は見つかりません。']);
    }
}
