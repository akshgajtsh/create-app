@extends('layouts.admin')

@section('content')
<div class="container">
    <!--<div class="card">
        <h5 class="card-header">従業員情報編集</h5>
        <div class="card-body">
            <form action="{{ route('user.update', $user) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">名前</label>
                    <input type="text" class="form-control" value="{{ old('name', $user->name)}}" />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">メールアドレス</label>
                    <input type="email" class="form-control" value="{{ old('name', $user->email)}}" />
                </div>

                <div class="mb-3">
                    <label for="inputPassword5" class="form-label">変更後パスワード</label>
                    <input type="password" id="inputPassword5" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="password-confirm" class="col-form-label">パスワード確認</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                </div>
            </form>
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-primary">更新</button>
            </div>
        </div>
    </div>-->
    <div class="container">
        <h1>従業員情報編集</h1>

        <form action="{{ route('user.update', $user) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- 名前 -->
            <div class="form-group">
                <label for="name">名前</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
            </div>

            <!-- メールアドレス -->
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
            </div>

            <!-- パスワード -->
            <div class="form-group">
                <label for="password">パスワード (任意)</label>
                <input type="password" name="password" class="form-control">
            </div>

            <!-- パスワード確認 -->
            <div class="form-group">
                <label for="password_confirmation">パスワード確認</label>
                <input type="password" name="password_confirmation" class="form-control">
            </div>

            <!-- 送信ボタン -->
            <button type="submit" class="btn btn-primary">更新する</button>
            <a href="{{ route('user.index') }}" class="btn btn-primary ">戻る</a>
    </div>
    @endsection