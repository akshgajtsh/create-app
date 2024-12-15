<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>有休申請のお知らせ</title>
</head>

<body>
    <h1>有休取消申請内容</h1>
    <p>取消開始日：{{ $canceldata['vacation_start'] }}</p>
    <p>取消終了日：{{ $canceldata['vacation_end'] }}</p>
    <p>取下げ理由：{{ $canceldata['cancel_reason'] }}</p>
    <p>備考：{{ $canceldata['comment'] }}</p>
    <p>ご確認をお願いいたします。</p>
</body>

</html>