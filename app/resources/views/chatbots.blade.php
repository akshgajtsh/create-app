<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>PORTAL SITE</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light mb-5">
        <a class="navbar-brand" href="#">PORTAL SITE</a>
    </nav>

    <div class="chat-container row justify-content-center mb-5">
        <div class="card">
            <div class="card-header">Comment</div>
            <div class="card-body chat-card mb-5">
                <div id="message_area">
                </div>
            </div>
        </div>
    </div>
    <div id="chat-buttons">
        <button class="chat-button" data-keyword="勤怠報告">勤怠報告</button>
        <button class="chat-button" data-keyword="欠勤・遅刻・早退">欠勤・遅刻・早退</button>
        <button class="chat-button" data-keyword="連絡済">連絡済</button>
        <button class="chat-button" data-keyword="未連絡">未連絡</button>
        <button class="chat-button" data-keyword="年末調整">年末調整</button>
        <a href="{{ route('home')}}">TOPページへ</a>
    </div>
    <script src="/js/app.js"></script>
    <script src="{{asset('js/chat.js')}}"></script>
</body>

</html>