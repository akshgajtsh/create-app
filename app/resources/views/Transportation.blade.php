<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>交通費申請フォーム</title>
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
    <form action="{{ route('submit.transport') }}" method="POST">
        @csrf
        <div>
            <label class="col-md-4 col-form-label text-md-right" for="transportation_month">交通費使用月</label>
            <select name="transportation_month" class="form-control">
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
            <input type="text" class="col-md-4 col-form-label text-md-right" name="work_days" />
        </div>
        <div>
            <label class="col-md-4 col-form-label text-md-right" for="transportation_confirm">定期券購入確認</label>
            <select name="transportation_confirm" class="form-control">
                <option selected>選択してください</option>
                <option value="1ヶ月">1ヶ月購入</option>
                <option value="3ヶ月">3ヶ月購入</option>
                <option value="6ヶ月">6ヶ月購入</option>
            </select>
        </div>
        <div>
            <label class="col-md-4 col-form-label text-md-right" for="transportation_cost">交通費</label>
            <input type="text" class="col-md-4 col-form-label text-md-right" name="transportation_cost" />
        </div>
        <div>
            <label class="col-md-4 col-form-label text-md-right" for="transportation_section">通勤区間</label>
            <input type="text" name="transportation_section[]" class="text" />
            <div>
                <button type="button" id="btn-clone">追加</button>
                <button type="button" id="btn-remove">削除</button>
            </div>
        </div>
        <button type="submit">送信</button>
    </form>
</body>

</html>