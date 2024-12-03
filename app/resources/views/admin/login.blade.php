<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1></h1>
        @error('login')
        <div class="alert alert-danger">
            &#x26A0; {{ $message }}
        </div>
        @enderror
        <div class="card text-center">
            <div class="card-header">
                管理者ログイン画面
            </div>
            <div class="card-body">
                <form method="POST" action="/admin/login">
                    @csrf
                    <label class="mt-3">ユーザーID</label>
                    <input type="text" name="userid" class="form-control">
                    <label class="mt-3">パスワード</label>
                    <input class="form-control" type="password" name="password">
                    <button class="btn btn-primary mt-5" type="submit">ログイン</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>