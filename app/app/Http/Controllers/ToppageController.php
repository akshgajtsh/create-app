<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ToppageController extends Controller
{
    public function index()
    {
        return view('home', []);
    }
}
