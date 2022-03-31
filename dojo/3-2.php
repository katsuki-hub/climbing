<?php require_once("../common/session.php"); ?>

<!doctype html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
  <?php $title = "3月2週の道場課題" ?>
  <?php require_once "../common/head.php"; ?>
  <style>
    img {
      width: 94%;
      margin: 30px auto;
    }
  </style>
</head>

<body>
  <?php require_once "../common/bodyTag.php"; ?>
  <header>
    <div class="header-contents">
      <h1>3月2週の道場課題</h1>
      <h2>課題写真！！</h2>
    </div><!-- /.header-contents -->

    <!-- グローバルナビ -->
    <nav>
      <ul>
        <li><a href="../index.php">HOME</a></li>
        <li><a href="../content/movie.php">動画一覧</a></li>
        <li><a href="../content/picture.php">ピクチャ</a></li>
      </ul>
    </nav>
  </header>
  <!-- パンくずリスト -->
  <div id="bread">
    <ol>
      <li><a href="../index.php">HOME</a></li>
      <li><a href="../picture.html">ピクチャ</a></li>
    </ol>
  </div>
  <div class="main-video">
    <article>
      <section>
        <h2>3月2週の道場課題</h2>
        <div style="text-align: center">
          <img src="../images/dojo/202203-2/1.jpg" alt="道場課題">
          <img src="../images/dojo/202203-2/2.jpg" alt="道場課題">
          <img src="../images/dojo/202203-2/3.jpg" alt="道場課題">
          <img src="../images/dojo/202203-2/4.jpg" alt="道場課題">
        </div>
      </section>
    </article>
  </div><!-- /.main-wrapper -->
  <footer><small>&copy; 2022 ボルダリング部</small></footer>
</body>

</html>