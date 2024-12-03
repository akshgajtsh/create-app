<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
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
        /*// バリデーション
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'admin_code' => ['required', 'string', 'in:SECRET_ADMIN_CODE'], // 管理者専用コード
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }*/

        // 管理者登録
        Admin::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('admin.login')->with('success', '管理者登録が完了しました。');
    }
}
