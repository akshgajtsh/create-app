<h1>管理者登録</h1>

@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST" action="{{ route('admin.register') }}">
    @csrf
    <div>
        <label>名前:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
    </div>
    <div>
        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
    </div>
    <div>
        <label>パスワード:</label>
        <input type="password" name="password" required>
    </div>
    <div>
        <label>パスワード（確認用）:</label>
        <input type="password" name="password_confirmation" required>
    </div>
    <button type="submit">登録</button>
</form>