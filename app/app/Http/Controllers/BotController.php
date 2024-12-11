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

    //最初にアクセスした時、全メッセージを返す
    public function allmessage()
    {
        $messages = Message::with('botResponse')->latest()->get();
        return response()->json($messages);
    }

    //新しいメッセージが来たとき
    public function newmessage(Request $request)
    {
        $keyword = $request->input('message');
        $botResponse = Botresponse::where('keyword', $keyword)->first();

        if ($botResponse) {
            $message = Message::create([
                'body' => $botResponse->reply,
                'botresponse_id' => $botResponse->id,
                'created_at' => now(),
            ]);
        }

        event(new MessageSent($message));

        return response()->json([
            'status' => 'success',
            'reply' => $botResponse->reply,
            'link' => $botResponse->link,
        ]);

        /*$message = new Message();
        $message->message = $request->message;
        $message->user_id = Auth::id();
        $message->save();

        //イベント発動
        //新しいメッセージをpusherに
        event(new MessageSent([$message, Auth::user()]));*/
        return response()->json(['status' => 'error', 'message' => '該当する応答は見つかりません。']);
    }
}
