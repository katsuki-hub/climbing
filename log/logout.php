<?php
session_start();
$_SESSION = array();
session_destroy();
?>

<!doctype html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
  <?php $title = "ログアウト" ?>
  <?php require_once "../common/head.php"; ?>
</head>

<body>
  <?php require_once "../common/bodyTag.php"; ?>
  <header>
    <div class="header-contents">
      <h1>ボルダリング部</h1>
      <h2>ログアウト</h2>
    </div><!-- /.header-contents -->
  </header>
  <div class="main-wrapper">
    <h2>ログアウトしました！</h2>
    <div class="blank3"></div>
    <p><a href="top.php" class="log">ログインページに戻る</a></p>
  </div>
</body>

</html>