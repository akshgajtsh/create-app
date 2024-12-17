<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>有給費申請フォーム</title>
</head>

<body>
    <nav class="navbar navbar-light bg-dark shadow-sm">
        <a class="navbar-brand text-white" href="{{ route('home') }}">PORTAL SITE</a>
    </nav>
    <h1 class="text-center mt-3">有休取消申請</h1>
    <div class="container d-flex justify-content-center">
        <form action="{{ route('submit.vacationcancel') }}" method="POST">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @csrf
            <div>
                <label class="mt-3">希望取消日</label>
                <select name="vacation_id" class="form-control mt-2">
                    <option selected>選択してください</option>
                    @foreach($vacationcancel as $canceldays)
                    <option value="{{ $canceldays->id}}">
                        取消開始日：{{$canceldays->vacation_start}} - 終了日：{{$canceldays->vacation_end}}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label mt-3">取下げ理由</label>
                <input class="form-control" type="text" name="cancel_reason">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">備考・詳細</label>
                <textarea class="form-control" rows="3" name="comment"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">送信</button>
            </div>
        </form>
    </div>
</body>

</html>