<?php
if (empty($_POST["memo"])) {
  //POSTされた値がないとき入力ページへリダイレクト
  $url = "https://climber2022.site/#board";
  header("Location:" . $url);
  exit();
}

date_default_timezone_set('Asia/Tokyo');
$memo = $_POST["memo"];
$date = date("Y/n/j G:i:s", time());
$writedata = "________________\n" . $date . "\n" . $memo . "\n";
$filename = "../data/comment.txt";
try {
  $fileobj = new SplFileObject($filename, "a+b");
} catch (Exception $e) {
  echo '<span class="error">エラーがありました</span>';
  echo $e->getMessage();
  exit();
}

$fileobj->flock(LOCK_EX); // 排他ロック
$result = $fileobj->fwrite($writedata); //メモを追記
$fileobj->flock(LOCK_UN); //アンロック

//メモを読むページへリダイレクト
$url = "https://climber2022.site/#board";
header("Location:" . $url);
exit();
