<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ToppageController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        return redirect()->route('login');
        $joindate = Carbon::parse($user->join_date);
        $nextvacation = $joindate->addMonth(6);
        while ($nextvacation->isPast()) {
            $nextvacation->addYear();
        }
        $user->next_vacation_date = $nextvacation->toDateString();
        return view('home', compact('user'));
    }
}
