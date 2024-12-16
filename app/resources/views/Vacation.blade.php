@extends('layouts.form')

@section('content')
<h1>有休申請</h1>
<form action="{{ route('submit.vacation') }}" method="POST">
    @csrf

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
                <input type="date" id="vacation_start" name="vacation_start" class="form-control" required>
            </div>
        </div>

        <div>
            <label class="col-md-4 col-form-label text-md-right" for="vacation_end">有休取得終了日</label>
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
            <input type="text" class="col-md-4 col-form-label text-md-right" name="vacation_reason" />
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="clientcheck" id="clientcheck" value="派遣先確認済み" checked>
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

@endsection