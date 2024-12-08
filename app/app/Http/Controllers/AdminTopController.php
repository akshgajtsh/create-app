<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTopController extends Controller
{
    public function index(){
        return view('admin.admintop');
        dd(auth('admin')->user());
    }
}
