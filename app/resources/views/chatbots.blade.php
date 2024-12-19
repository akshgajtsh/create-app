@extends('layouts.chat')

@section('content')
<div class="d-flex justify-content-around">
    <div class="alert alert-primary w-50 text-center" role="alert">
        こんにちは！PORTAL SITE チャットボットです！<br>こちらでは年末調整や勤怠報告等のご質問にお答えいたします！
    </div>
</div>
<div class="chat-container row justify-content-center mt-5">
    <div id="message_area">
    </div>
</div>

</div>
<footer class="user-message fixed-bottom">
    <div id="chat-buttons">
        <div class="d-flex justify-content-around">
            <div class="chat-button">
                <button class=" btn btn-primary" data-keyword="勤怠報告">勤怠報告</button>
            </div>
            <div class="chat-button">
                <button class=" btn btn-primary" data-keyword="欠勤・遅刻・早退">欠勤・遅刻・早退</button>
            </div>
            <div class="chat-button">
                <button class=" btn btn-primary" data-keyword="連絡済">連絡済</button>
            </div>
            <div class="chat-button">
                <button class=" btn btn-primary" data-keyword="未連絡">未連絡</button>
            </div>
            <div class="chat-button">
                <button class=" btn btn-primary" data-keyword="年末調整">年末調整</button>
            </div>
        </div>
    </div>
</footer>
<script src="/js/app.js"></script>
<script src="{{asset('js/chat.js')}}"></script>
@endsection