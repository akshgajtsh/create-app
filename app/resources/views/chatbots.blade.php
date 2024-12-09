@extends('layouts.app')

@section('content')
<div id="message_area">

</div>
<div>
    <textarea id="message" class="border border-primary" rows="5" cols="100"></textarea>
    <button id="submit">送信</button>
</div>
<script src="{{ asset('app/resources/js/chat.js') }}"></script>
@endsection