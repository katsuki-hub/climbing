<?php
session_start();

$error_mg = "";
if (isset($_POST["login"])) {
  if ($_POST["userID"] == "noboru" && $_POST["userPW"] == "2022") {
    $_SESSION["userID"] = $_POST["userID"];
    $login_index = "../index.php";
    header("Location:{$login_index}");
    exit();
  }
  $error_mg = "ID か パスワードに間違いがあります。<br>もう一度入力してください！！";
}

?>

<!doctype html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
  <?php $title = "ログイン画面" ?>
  <?php require_once "../common/head.php"; ?>
</head>

<body>
  <?php require_once "../common/bodyTag.php"; ?>
  <header>
    <div class="header-contents">
      <h1>ログイン画面</h1>
      <h2>ボルダリング部</h2>
    </div><!-- /.header-contents -->
  </header>

  <div class="main-wrapper">
    <?php
    if ($error_mg) {
      echo '<span class="error_mg">', $error_mg, '</span>';
    }
    ?>

    <form action="top.php" method="POST">
      <li><label>
          <span class="log">ログインID：</span><input type="text" name="userID">
        </label></li>
      <li><label>
          <span class="log">パスワード：</span><input type="text" name="userPW">
        </label></li>
      <li><input type="submit" value="ログイン" name="login"></li>
    </form>

    <div class="blank3"></div>
    <span class="tolog"><a href="userForm.php">ログイン登録はこちらから</a></span><br>
    <small class="log">※しばらくしたら登録画面を消します<br></small>
  </div>
</body>

</html>