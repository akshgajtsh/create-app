@extends('layouts.chat')

@section('content')
<div class="chat-container row justify-content-center mt-5">
    <div id="message_area">
    </div>
</div>

</div>
<div class="fixed-bottom mb-5">
    <div id="chat-buttons">
        <div class="user-message d-flex justify-content-around">
            <button class="chat-button btn btn-primary" data-keyword="勤怠報告">勤怠報告</button>
            <button class="chat-button btn btn-primary" data-keyword="欠勤・遅刻・早退">欠勤・遅刻・早退</button>
            <button class="chat-button btn btn-primary" data-keyword="連絡済">連絡済</button>
            <button class="chat-button btn btn-primary" data-keyword="未連絡">未連絡</button>
            <button class="chat-button btn btn-primary" data-keyword="年末調整">年末調整</button>
        </div>
    </div>
</div>
<script src="/js/app.js"></script>
<script src="{{asset('js/chat.js')}}"></script>
@endsection