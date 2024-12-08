<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;


class CreateEmployeeController extends Controller
{
    public function showEmployeeregister()
    {
        return view('admin.register');
    }

    public function createEmployee(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'base' => $request['base'],
            'join_date' => $request['join_date'],
        ]);
        return redirect()->route('admin.admintop');
    }
}
