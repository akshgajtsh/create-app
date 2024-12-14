<?php

namespace App\Http\Controllers;

use App\Vacation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\VacationMail;
use Illuminate\Support\Facades\Mail;

class vacationController extends Controller
{
    public function index()
    {
        return view('Vacation');
    }

    public function vacationsubmit(Request $request)
    {
        $vacation = Vacation::create([
            'user_id' => Auth::id(),
            'vacation_month' => $request['vacation_month'],
            'vacation_start' => $request['vacation_start'],
            'vacation_end' => $request['vacation_end'],
            'half_vacation' => $request['half_vacation'],
            'vacation_days' => $request['vacation_days'],
            'vacation_reason' => $request['vacation_reason'],
            'clientcheck' => $request['clientcheck'],
            'comment' => $request['comment'],
        ]);

        Mail::to('xiaolinkeigi309@gmail.com')->send(new VacationMail($vacation));
        return redirect()->back()->with('success', '有休申請が送信されました。');
    }
}
