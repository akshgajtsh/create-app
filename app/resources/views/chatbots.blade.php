<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Todos</title>
</head>

<body>
    <div id="message_area">

    </div>
    <div>
        <textarea id="message" rows="5" cols="100"></textarea>
        <button id="submit">送信</button>
    </div>

    <script src="/js/app.js"></script>
    <script src="{{mix('js/chat.js')}}"></script>
</body>

</html>