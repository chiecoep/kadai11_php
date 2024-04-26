<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
//1. POSTデータ取得
$name  = $_POST['name'];
$email    = $_POST['email'];
$subject    = $_POST['subject'];
$message    = $_POST['message'];

include("funcs.php");
$pdo = db_conn();

$sql = "INSERT INTO gs_mail(id, name, email, subject, message, indate)VALUES(NULL, :name, :email, :subject, :message, NOW() );";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name',    $name,    PDO::PARAM_STR); 
$stmt->bindValue(':email',   $email,   PDO::PARAM_STR);  
$stmt->bindValue(':subject', $subject, PDO::PARAM_STR);
$stmt->bindValue(':message', $message, PDO::PARAM_STR);
$status = $stmt->execute();

// 自動返信メール(お客様へ)
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$header = null;
$auto_reply_subject = null;
$auto_reply_text = null;
date_default_timezone_set('Asia/Tokyo');

// ヘッダー情報を設定
$header = "MIME-Version: 1.0\n";
$header .= "From: BMstudio <bms.saito@gmail.com>\n";
$header .= "Reply-To:BMstudio サイトウチエ<bms.saito@gmail.com>\n"; 

// 件名を設定
$auto_reply_subject = '【自動返信】お問い合わせありがとうございます。';

// 本文を設定
$auto_reply_text = "" . "\n";
$auto_reply_text .= "$name" . "様" . "\n\n";
$auto_reply_text .= "登録完了しました。" . "\n";
$auto_reply_text .= "より多くの案件を受け取るために" . 'https://freddy.sakura.ne.jp/kadai10/4_1login.php' .  "よりログインし、情報を追加してください。" . "\n\n";
$auto_reply_text .= "hogehoge。";

// メール送信
mb_send_mail( $_POST['email'], $auto_reply_subject, $auto_reply_text, $header);


// *****************************
// 自動返信メール(自分へ）
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$header = null;
$auto_reply_subject = null;
$auto_reply_text = null;
date_default_timezone_set('Asia/Tokyo');

// ヘッダー情報を設定
$header = "MIME-Version: 1.0\n";
$header .= "From: BMstudio<bms.saito@gmail.com>\n";
$header .= "Reply-To: BMstudio サイトウチエ <bms.saito@gmail.com>\n"; 

// 件名を設定
$auto_reply_subject = '【HP問い合わせ】'.$name.'様から問い合わせがありました。';

// 本文を設定
$auto_reply_text  = "*注意*Gs課題のテストメールです" . "\n";
$auto_reply_text .= "ご担当者様" . "\n\n";
$auto_reply_text .= "ログインID" . "$name". "様から登録がありました。" . "\n";
$auto_reply_text .= "対応をお願いいたします。". 'https://freddy.sakura.ne.jp/kadai10/13_manager_login.php'  . "\n\n";
$auto_reply_text .= "hogehoge。";

// メール送信
mb_send_mail('bms.saito@gmail.com', $auto_reply_subject, $auto_reply_text, $header);

//４．データ登録処理後
if ($status == false) {
     sql_error($stmt);
} else {
    redirect("index.php");
}


?>