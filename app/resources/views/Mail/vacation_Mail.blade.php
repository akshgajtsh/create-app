<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>有休申請のお知らせ</title>
</head>

<body>
    <h1>有休申請内容</h1>
    <p>月：{{ $vacationdata['vacation_month'] }}月</p>
    <p>有休取得開始日：{{ $vacationdata['vacation_start'] }}</p>
    <p>有休終了日：{{ $vacationdata['vacation_end'] }}</p>
    <p>半休取得：{{ $vacationdata['half_vacation'] }}</p>
    <p>有給取得日数：{{ $vacationdata['vacation_days'] }}</p>
    <p>取得理由：{{ $vacationdata['vacation_reason'] }}</p>
    <p>派遣先確認：{{ $vacationdata['clientcheck'] }}</p>
    <p>備考：{{ $vacationdata['comment'] }}</p>
    <p>ご確認をお願いいたします。</p>
</body>

</html>