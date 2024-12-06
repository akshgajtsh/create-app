<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ToppageController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $joindate = Carbon::parse($user->join_date);
        $nextvacation = $joindate->addMonth(6);
        while ($nextvacation->isPast()) {
            $nextvacation->addYear();
        }
        //$user->next_vacation_date = $nextvacation->toDateString();
        $nextvacationdate = $nextvacation->toDateString();
        return view('home', compact('user', 'nextvacationdate'));

        // 認証済みのユーザー情報を取得
        /*$user = Auth::user();

        // 入社日から次回有給取得可能日を計算
        *$joindate = Carbon::parse($user->join_date);
        $nextvacation = $joindate->addMonth(6);

        while ($nextvacation->isPast()) {
            $nextvacation->addYear();
        }

        // 計算結果をビューに渡す
        $nextVacationDate = $nextvacation->toDateString();

        return view('home', compact('user', 'nextVacationDate'));*/
    }
}
