<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function showAdminlogin()
    {
        return view('admin.login');
    }

    public function Adminlogin(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.admintop')->with([
                'login_msg' => 'ログインしました。',
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session();
        $request->regenerateToken();

        return redirect()->route('admin.login');
    }
}
