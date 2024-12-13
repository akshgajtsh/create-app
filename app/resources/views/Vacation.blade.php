<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>有給費申請フォーム</title>
</head>

<body>
    <form action="{{ route('submit.transport') }}" method="POST">
        @csrf
        <div>
            <label class="col-md-4 col-form-label text-md-right" for="vacation_month">有給取得月</label>
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
            <label class="col-md-4 col-form-label text-md-right" for="vacation_start">有給取得開始日</label>
            <div class="col-md-6">
                <input type="date" id="vacation_start" name="vacation_start" class="form-control" required>
            </div>
        </div>

        <div>
            <label class="col-md-4 col-form-label text-md-right" for="vacation_end">有給取得終了日</label>
            <div class="col-md-6">
                <input type="date" id="vacation_end" name="vacation_end" class="form-control" required>
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
            <label class="col-md-4 col-form-label text-md-right" for="vacation_days">有給取得日数</label>
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
            <input type="text" class="col-md-4 col-form-label text-md-right" name="vacation_reason" />
        </div>

        <button type="submit">送信</button>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </form>
</body>

</html>