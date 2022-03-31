<!doctype html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
  <?php $title = "新規ユーザー登録" ?>
  <?php require_once "../common/head.php"; ?>
  <link href="../css/page.css" rel="stylesheet" type="text/css">
</head>

<body>
  <?php require_once "../common/bodyTag.php"; ?>
  <header>
    <div class="header-contents">
      <h1>ボルダリング部</h1>
      <h2>新規ログイン登録</h2>
    </div><!-- /.header-contents -->
  </header>
  <div class="main-wrapper">
    <section>
      <h2>ユーザー登録</h2>
      <form method="POST" action="newUser.php">
        <li>
          <label>
            <input type="text" name="id" placeholder="IDネーム">
          </label><span class="must">※必須</span>
        </li>
        <li>
          <label>
            <input type="text" name="pw" placeholder="パスワード">
          </label><span class="must">※必須</span>
        </li>
        <li><input type="submit" value="登録する"></li>
      </form>

      <div class="blank3"></div>
      <span class="tolog"><a href="top.php">ログイン画面へ</a></span><br>
    </section>
  </div>
</body>

</html>