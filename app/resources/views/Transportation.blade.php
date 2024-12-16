<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>交通費申請フォーム</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(function() {
            const btn_clone = $('#btn-clone'); //追加ボタン
            const btn_remove = $('#btn-remove'); //削除ボタン

            if ($('.text').length < 2) {
                btn_remove.hide();
            }
            //追加ボタン
            btn_clone.click(function() {
                var text = $('.text').last();
                text
                    .clone() //欄クローン
                    .val('')
                    .insertAfter(text);

                if ($('.text').length >= 2) {
                    $(btn_remove).show();
                }

            });

            //削除ボタン
            btn_remove.click(function() {
                $('.text')
                    .last()
                    .remove();
                if ($('.text').length < 2) {
                    btn_remove.hide();
                }
            });
        });
    </script>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('home') }}">PORTAL SITE</a>
    </nav>
    <h1>交通費申請</h1>
    <form action="{{ route('submit.transport') }}" method="POST">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @csrf
        <div class="row justify-content-center">
            <div>
                <label class="col-md-4 col-form-label text-md-right" for="transportation_month">交通費使用月</label>
                <select name="transportation_month" class="form-control w-25 p-3">
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
                <label class="col-md-4 col-form-label text-md-right" for="work_days">出勤日数</label>
                <input type="text" class="col-md-4 col-form-label form-control text-md-right w-25 p-3" name="work_days" />
            </div>
            <div>
                <label class="col-md-4 col-form-label text-md-right" for="transportation_confirm">定期券購入確認</label>
                <select name="transportation_confirm" class="form-control w-25 p-3">
                    <option selected>選択してください</option>
                    <option value="1">1ヶ月購入</option>
                    <option value="3">3ヶ月購入</option>
                    <option value="6">6ヶ月購入</option>
                </select>
            </div>
            <div>
                <label class="col-md-4 col-form-label text-md-right" for="transportation_cost">交通費</label>
                <input type="text" class="col-md-4 col-form-label form-control text-md-right w-25 p-3" name="transportation_cost" />
            </div>
            <div>
                <label class="col-md-4 col-form-label text-md-right" for="transportation_section">通勤区間</label>
                <div>
                    <input type="text" name="start_section" class="form-control mb-5 w-25 p-3" placeholder="出発駅" />
                </div>
                <input type="text" name="via_section[]" class="text form-control w-25 p-3" placeholder="経由駅" />
                <div class="mb-5">
                    <button type="button" id="btn-clone" class="mt-2">追加</button>
                    <button type="button" id="btn-remove" class="mt-2">削除</button>
                </div>
                <input type="text" name="end_section" class="form-control w-25 p-3" placeholder="目的地" />
            </div>
        </div>
        <button type="submit" class="mt-5">送信</button>
    </form>
</body>

</html>