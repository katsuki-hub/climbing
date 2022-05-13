<?php
session_start();

if ($_COOKIE['userID'] != '') {
  $_POST['userID'] = $_COOKIE['userID'];
  $_POST['userPW'] = $_COOKIE['userPW'];
  $_POST['save'] = $_COOKIE['on'];
}

if (!empty($_POST)) {
  if ($_POST["userID"] == "noboru" && $_POST["userPW"] == "2022") {
    $_SESSION["userID"] = $_POST["userID"];
    $login_index = "../index.php";
    header("Location:{$login_index}");
    exit();
  }
}

$error_mg = "";
if (isset($_POST["login"])) {
  if ($_POST["userID"] == "noboru" && $_POST["userPW"] == "2022") {
    $_SESSION["userID"] = $_POST["userID"];
    if ($_POST['save'] == 'on') {
      setcookie('userID', $_POST['userID'], time() + 60 * 60 * 24);
      setcookie('userPW', $_POST['userPW'], time() + 60 * 60 * 24);
    }
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
          <span class="log">ログインID</span><br><input type="text" name="userID">
        </label></li>
      <li><label>
          <span class="log">パスワード</span><br><input type="number" name="userPW">
        </label></li>
      <li><label>
          <span class="log">ログイン情報保存</span><br><input type="checkbox" value="on" name="save">
        </label></li>
      <li><input type="submit" value="ログイン" name="login"></li>
    </form>
  </div>
</body>

</html>