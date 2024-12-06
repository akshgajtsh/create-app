@extends('layouts.app')

@section('content')
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>-->

<table class="table text-center text-secondary">
    <thead>
        <tr>
            <th scope=" col">名前</th>
            <th scope="col">入社日</th>
            <th scope="col">次回有給取得可能日</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">{{ $user->name }}</th>
            <td>{{ $user->join_date }}</td>
            <td>{{ $nextvacationdate }}</td>
        </tr>
    </tbody>
</table>

<div class="container">
    <div class="row mt-5">
        <div class="col-sm">
            <div class="card">
                <img src="{{ asset('images/477 (1).png') }}" class="card-img-top" alt="交通費申請">
                <div class="card-body">
                    <h5 class="card-title">交通費申請</h5>
                    <p class="card-text">交通費申請はこちらからお願いいたします。</p>
                    <a href="#" class="btn btn-primary">申請フォーム</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card">
                <img src="{{ asset('images/940.png') }}" class="card-img-top" alt="有給申請">
                <div class="card-body">
                    <h5 class="card-title">有給申請</h5>
                    <p class="card-text">有給申請はこちらからお願いいたします。</p>
                    <a href="#" class="btn btn-primary">申請フォーム</a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card">
                <img src="{{ asset('images/218.png') }}" class="card-img-top" alt="有給取消">
                <div class="card-body">
                    <h5 class="card-title">有給取消費申請</h5>
                    <p class="card-text">有給取消申請はこちらからお願いいたします。</p>
                    <a href="#" class="btn btn-primary">申請フォーム</a>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="row mt-5 mb-5">
        <div class="card w-50 text-center">
            <div class="col-12 d-flex justify-content">
                <div class="card-body">
                    <p class="card-text">各種申請の他に勤怠関係の報告<br>年末調整のご質問はこちら！</p>
                    <a href="#" class="btn btn-primary">CHAT BOT</a>
                </div>
            </div>
        </div>
    </div>-->
    <div class="row mt-5">
        <div class="col-12 d-flex justify-content-center">
            <div class="card w-50 text-center">
                <div class="card-body">
                    <p class="card-text">各種申請の他に勤怠関係の報告<br>年末調整のご質問はこちら！</p>
                    <a href="#" class="btn btn-primary">CHAT BOT</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection