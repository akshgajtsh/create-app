<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use Illuminate\Http\Request;
use App\Massege;
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
        $message = new Massege();
        $message->message = $request->message;
        $message->user_id = Auth::id();
        $message->save();

        //イベント発動
        //新しいメッセージをpusherに
        event(new MessageSent([$message, Auth::user()]));
    }

    //最初にアクセスした時、全メッセージを返す
    public function allmessage()
    {
        return Massege::with('user')->get();
    }
}
