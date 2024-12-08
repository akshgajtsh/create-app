<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>管理者トップページ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-light bg-success">
        <a class="navbar-brand text-white">PORTAL SITE</a>
        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn btn-light my-2 my-sm-0">ログアウト</button>
        </form>
    </nav>
    <div class="jumbotron text-center">
        <h1 class="display-4 mt-5 mb-5">管理者トップページ</h1>
        <a href="{{route('admin.employeeregister')}}" class="btn btn-primary">従業員アカウント作成</a>
        <button type="button" class="btn btn-info">ユーザー確認画面</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>