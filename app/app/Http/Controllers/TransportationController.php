<?php

namespace App\Http\Controllers;

use App\TransportationMail;
use App\Transportation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class TransportationController extends Controller
{
    public function index()
    {
        return view('Transportation');
    }

    public function transportationform(Request $request)
    {
        dd($request->all()); // リクエストデータを表示
        $request->validate([
            'transportation_month' => 'required|integer|between:1,12',
            'work_days' => 'required|integer|min:1',
            'transportation_confirm' => 'required|integer|in:1,3,6',
            'transportation_cost' => 'required|numeric|min:1',
            'transportation_section' => 'required|array|min:1', // 配列であることを保証
            'transportation_section' => 'required|string|max:255', // 各要素が文字列
        ]);
        dd($validated); // バリデーション通過後のデータを確認

        try {
            $transportation = Transportation::create([
                'user_id' => Auth::id(),
                'transportation_month' => $request['transportation_month'],
                'work_days' => $request['work_days'],
                'transportation_confirm' => $request['transportation_confirm'],
                'transportation_cost' => $request['transportation_cost'],
                'transportation_section' => implode(', ', $request['transportation_section']),
            ]);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return redirect()->back()->with('error', 'エラーが発生しました');
        }
        /*Transportation::create([
            'user_id' => Auth::id(),
            'transportation_month' => $request['transportation_month'],
            'work_days' => $request['work_days'],
            'transportation_confirm' => $request['transportation_confirm'],
            'transportation_cost' => $request['transportation_cost'],
            'transportation_section' => implode(', ', $request['transportation_section']),
        ]);*/

        return redirect()->back()->with('success', '交通費申請を送信しました。');
    }
}
