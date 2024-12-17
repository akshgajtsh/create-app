<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use Dotenv\Validator;
use Illuminate\Support\Facades\Hash;

class AdminRegisterController extends Controller
{
    public function ShowAdminregister()
    {
        return view('admin.admin-register');
    }

    public function Adminregister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:8|confirmed',
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.login')->with('success', '管理者アカウントが作成されました。');
    }
}
