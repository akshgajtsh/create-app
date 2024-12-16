<?php

namespace App\Http\Controllers;

use App\Mail\VacationCancelMail;
use App\Vacation;
use App\Vacation_cancel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CreateCancel;

class vacationCancelController extends Controller
{
    public function index()
    {
        //$vacationcancel = Vacation_cancel::with('vacation')->find($vacationId);

        $vacationcancel = Vacation::where('user_id', auth()->id())->get([
            'id',
            'vacation_start',
            'vacation_end'
        ]);
        //dd($vacationcancel);
        return view('vacationcancel', compact('vacationcancel'));
    }

    public function vacationcancelsubmit(CreateCancel $request)
    {

        $vacations = Vacation::find($request['vacation_id']);

        $cancel = Vacation_cancel::create([
            'user_id' => Auth::id(),
            'vacation_start' => $vacations->vacation_start,
            'vacation_end' =>  $vacations->vacation_end,
            'vacation_id' => $request['vacation_id'],
            'cancel_reason' => $request['cancel_reason'],
            'comment' => $request['comment'],
        ]);

        Mail::to('xiaolinkeigi309@gmail.com')->send(new VacationCancelMail($cancel));
        return redirect()->back()->with('success', '有休取消申請が送信されました。');
    }
}
