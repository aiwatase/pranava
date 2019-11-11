<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="robots" content="index,follow" />
  <title>大阪 八尾の少人数制ヨガ教室 | Pranava Yoga+ Ayurveda.</title>
  <!-- viewportはスマホサイトでのサイトの見え方を決めるための重要な概念 -->
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <!-- CSSファイルの読み込み *viewportがある場合は必ずviewportファイルより下に読み込む-->
  <link rel="stylesheet" type="text/css" href="css/stylesheet.min.css">
</head>
<body>

<?php
$field_name = $_POST['name'];
$field_furigana = $_POST['furigana'];
$field_email = $_POST['email'];
$field_inquiry = $_POST['inquiry'];
$mail_to = 'aiwatase701@gmail.com'; //（**送信先のメールアドレスを入力）
$subject = 'Message from a site visitor '.$field_name;
$body_message = 'From: '.$field_name."\n";
$body_message .= 'Furigana: '.$field_furigana"\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_inquiry;
$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";
$mail_status = mail($mail_to, $subject, $body_message, $headers);
if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        window.location = 'contact.html';//（※送信後に移動するページ）
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        alert('メッセージ送信に失敗しました。こちらのメールアドレスへお問い合わせください。test@gmail.com');//（※自分のメールアドレス）
        window.location = 'index.html';//（※送信失敗後に移動するページ）
    </script>
<?php
}
?>

</body>
</html>
