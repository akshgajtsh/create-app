<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        //アカウント一覧画面
        $users = User::orderBy('id', 'name', 'join_data')->get();
        return view('admin.index', compact('users'));
    }

    public function edit($id)
    {
        //編集画面
        $user = User::find($id);
        return view('admin.edit', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->update($request->all());
        
    }
}
