<?php
$backURL = "userForm.php";
$loginURL = "top.php";
//接続パラメーター
$user = 'LAA1192529';
$password = 'katsu4426';
$dbName = 'LAA1192529-tool';
$host = 'mysql202.phy.lolipop.lan';
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
?>

<?php
require_once("../common/es.php");
$id = es($_POST['id'], ENT_QUOTES);
$pw = es($_POST['pw'], ENT_QUOTES);

$error = [];
if (!isset($_POST['id']) || ($_POST['id'] === "")) {
  $error[] = "名前が未入力です";
}
if (!isset($_POST['pw']) || ($_POST['pw'] === "")) {
  $error[] = "パスワードが未入力です";
}

if (count($error) > 0) {
  echo '<ol class="error">';
  foreach ($error as $value) {
    echo "<li>", $value, "</li>";
  }
  echo "</ol>";
  echo "<HR>";
  echo "<a href=", $backURL, ">戻る</a>";
  exit();
}
?>

<!doctype html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
  <?php $title = "ユーザー登録" ?>
  <?php require_once "../common/head.php"; ?>
</head>

<body>
  <?php require_once "../common/bodyTag.php"; ?>
  <header>
    <div class="header-contents">
      <h1>新規ユーザー登録</h1>
      <h2>ログイン用</h2>
    </div><!-- /.header-contents -->
  </header>

  <?php
  try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO userdata (id, pw) VALUES (:id, :pw)";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(':id', $id, PDO::PARAM_STR);
    $stm->bindValue('pw', $pw, PDO::PARAM_STR);

    if ($stm->execute()) {
      $stm->execute();
    } else {
      echo '<span class="error">追加エラーがあります！</span>';
    };
  } catch (Exception $e) {
    echo '<span class="error">エラーがありました</span><br>';
    echo $e->getMessage();
  }
  ?>
  <hr>
  <p><a href="<?php echo $loginURL ?>">ログイン画面へ</a></p>
</body>

</html>