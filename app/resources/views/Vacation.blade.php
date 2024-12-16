<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>交通費申請フォーム</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-light bg-dark shadow-sm">
        <a class="navbar-brand text-white" href="{{ route('home') }}">PORTAL SITE</a>
    </nav>
    <h1 class="text-center mt-3">有休申請</h1>
    <div class="container d-flex justify-content-center">
        <div class="w-50">
            <form action="{{ route('submit.vacation') }}" method="POST">
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div>
                    <label class="col-md-4 col-form-label text-md-right" for="vacation_month">有休取得月</label>
                    <select name="vacation_month" class="form-control">
                        <option selected>選択してください</option>
                        <option value="1">1月</option>
                        <option value="2">2月</option>
                        <option value="3">3月</option>
                        <option value="4">4月</option>
                        <option value="5">5月</option>
                        <option value="6">6月</option>
                        <option value="7">7月</option>
                        <option value="8">8月</option>
                        <option value="9">9月</option>
                        <option value="10">10月</option>
                        <option value="11">11月</option>
                        <option value="12">12月</option>
                    </select>
                </div>

                <div>
                    <label class="col-md-4 col-form-label text-md-right" for="vacation_start">有休取得開始日</label>
                    <div class="col-md-6">
                        <input type="date" id="vacation_start" name="vacation_start" class="form-control">
                    </div>
                </div>

                <div>
                    <label class="col-md-4 col-form-label text-md-right" for="vacation_end">有休取得終了日</label>
                    <div class="col-md-6">
                        <input type="date" id="vacation_end" name="vacation_end" class="form-control">
                    </div>
                </div>

                <div>
                    <label class="col-md-4 col-form-label text-md-right" for="half_vacation">半休取得</label>
                    <select name="half_vacation" class="form-control">
                        <option selected>選択してください</option>
                        <option value="半休あり">半休取得有り</option>
                        <option value="半休なし">半休取得無し</option>
                    </select>
                </div>

                <div>
                    <label class="col-md-4 col-form-label text-md-right" for="vacation_days">有休取得日数</label>
                    <select name="vacation_days" class="form-control">
                        <option selected>選択してください</option>
                        <option value="0.5">0.5</option>
                        <option value="1">1</option>
                        <option value="1.5">1.5</option>
                        <option value="2">2</option>
                        <option value="2.5">2.5</option>
                        <option value="3">3</option>
                        <option value="3.5">3.5</option>
                        <option value="4">4</option>
                        <option value="4.5">4.5</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div>
                    <label class="col-md-4 col-form-label text-md-right" for="vacation_reason">取得理由</label>
                    <input type="text" class="form-control" name="vacation_reason" />
                </div>
                <div class="mt-2">派遣先確認</div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="clientcheck" id="clientcheck" value="派遣先確認済み">
                    <label class="form-check-label" for="clientcheck">
                        派遣先へ取得確認済み
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="clientcheck" id="clientcheck" value="派遣先確未確認">
                    <label class="form-check-label" for="clientcheck">
                        派遣先へ取得未確認
                    </label>
                </div>

                <div class="mb-3">
                    <label for="comment" class="form-label">備考</label>
                    <textarea class="form-control" id="comment" rows="3" name="comment"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">送信</button>
                </div>
            </form>
        </div>
    </div>
</body>