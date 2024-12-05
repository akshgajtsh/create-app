<!--<h1>管理者登録</h1>

@if($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $message)
    <p>{{ $message }}</p>
    @endforeach
</div>
@endif

<form method="POST" action="{{ route('admin.register') }}">
    @csrf
    <div>
        <label>名前:</label>
        <input type="text" name="name" value="{{ old('name') }}">
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
</form>-->

<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('admin.admintop') }}">PORTAL SITE</a>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">管理者ログイン画面</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.register') }}">
                            @csrf
                            <div>
                                <label>名前:</label>
                                <input type="text" name="name" value="{{ old('name') }}" required class="form-control">
                            </div>
                            <div>
                                <label>Email:</label>
                                <input type="email" name="email" value="{{ old('email') }}" required class="form-control">
                            </div>
                            <div>
                                <label>パスワード:</label>
                                <input type="password" name="password" required class="form-control">
                            </div>
                            <div>
                                <label>パスワード（確認用）:</label>
                                <input type="password" name="password_confirmation" required class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">登録</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>