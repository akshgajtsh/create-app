<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>交通費申請のお知らせ</title>
</head>

<body>
    <h1>交通費申請内容</h1>
    <p>月：{{ $data['transportation_month'] }}月</p>
    <p>出勤日数：{{ $data['work_days'] }}</p>
    <p>定期券購入確認：{{ $data['transportation_confirm'] }}ヶ月購入</p>
    <p>交通費：{{ $data['transportation_cost'] }}円</p>
    <p>通勤区間</p>
    <p>出発駅：{{ $data['start_section'] }}</p>
    <p>経由駅：{{ $data['via_section'] }}</p>
    <p>目的地：{{ $data['end_section'] }}</p>
    <p>ご確認をお願いいたします。</p>
</body>

</html>