<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use Illuminate\Http\Request;
use App\Message;
use App\Botresponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\ErrorHandler\Debug;


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

        //$keyword = $request->input('message');
        $keyword = $request->input('keyword');
        $botResponse = Botresponse::where('keyword', $keyword)->first();
        if ($botResponse) {
            $message = Message::create([
                'user_id' => Auth::id(),
                'body' => $botResponse->reply,
                'botresponse_id' => $botResponse->id,
                'created_at' => now(),
            ]);
        };

        $bot =  [
            'reply' => $botResponse->reply,
            'keyword' => $keyword,
            'link' => $botResponse->link,
        ];

        event(new MessageSent($bot));
    }
}
