<?php

namespace App\Http\Controllers;

use App\Mail\TransportationMail as MailTransportationMail;
use Carbon\Carbon;
use App\Mail\TransportationMail;
use App\Transportation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class TransportationController extends Controller
{
    public function index()
    {
        return view('Transportation');
    }

    public function transportationform(Request $request)
    {
        //dd($request->all()); // リクエストデータを表示
        /*$request->validate([
            'transportation_month' => 'required|integer|between:1,12',
            'work_days' => 'required|integer|min:1',
            'transportation_confirm' => 'required',
            'transportation_cost' => 'required|numeric|min:1',
            'transportation_section' => 'required|array|min:1', // 配列であることを保証
            'transportation_section' => 'required|string|max:255', // 各要素が文字列
        ]);*/

        $transportation = Transportation::create([
            'user_id' => Auth::id(),
            'transportation_month' => $request['transportation_month'],
            'work_days' => $request['work_days'],
            'transportation_confirm' => $request['transportation_confirm'],
            'transportation_cost' => $request['transportation_cost'],
            'start_section' => $request['start_section'],
            'end_section' => $request['end_section'],
            'via_section' => implode(', ', $request['via_section']),
        ]);

        Mail::to('xiaolinkeigi309@gmail.com')->send(new TransportationMail($transportation));
        return redirect()->back()->with('success', '交通費申請が送信されました。');
    }
}
