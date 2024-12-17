<?php

namespace App\Http\Controllers;

use App\Mail\TransportationMail as MailTransportationMail;
use Carbon\Carbon;
use App\Mail\TransportationMail;
use App\Transportation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CreateData;

class TransportationController extends Controller
{
    public function index()
    {
        return view('Transportation');
    }

    public function transportationform(CreateData $request)
    {
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
        return redirect()->route('transport.create')->with('success', '交通費申請が送信されました。');
    }
}
