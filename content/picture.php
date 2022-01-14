<!doctype html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
  <?php $title = "活動写真" ?>
  <?php require_once "../common/head.php"; ?>
  <style>
    section img {
      max-width: 100%;
    }

    .img {
      text-align: center;
      margin: 0 auto;
      width: 100%;
    }

    .img ul {
      overflow: hidden;
      margin: 0;
      padding: 0;

      list-style-type: none;
    }

    .img li {
      float: left;
      margin-right: 1%;
      width: 19%;
    }
  </style>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KFRHHVG" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header>
    <div class="header-contents">
      <h1>ピクチャの一覧</h1>
      <h2>活動写真</h2>
    </div><!-- /.header-contents -->

    <!-- グローバルナビ -->
    <nav>
      <ul>
        <li><a href="../index.php">HOME</a></li>
        <li><a href="movie.php">動画一覧</a></li>
        <li><a class="current" href="picture.php">ピクチャ</a></li>
      </ul>
    </nav>
  </header>
  <!-- パンくずリスト -->
  <div id="bread">
    <ol>
      <li><a href="../index.php">HOME</a></li>
      <li><a href="picture.php">ピクチャ</a></li>
    </ol>
  </div>
  <div class="main-wrapper">
    <article>
      <section>
        <h2>写真一覧</h2>

        <h3>Barehandsへ</h3>
        <!-- 写真 -->
        <div class="img">
          <div>
            <img src="../images/picture/0801.jpg" id="bigimg2">
          </div>
          <ul>
            <li><img src="../images/picture/0801.jpg" class="thumb2" data-image="../images/picture/0801.jpg"></li>
            <li><img src="../images/picture/0802.jpg" class="thumb2" data-image="../images/picture/0802.jpg"></li>
            <li><img src="../images/picture/0803.jpg" class="thumb2" data-image="../images/picture/0803.jpg"></li>
            <li><img src="../images/picture/0804.jpg" class="thumb2" data-image="../images/picture/0804.jpg"></li>
            <li><img src="../images/picture/0805.jpg" class="thumb2" data-image="../images/picture/0805.jpg"></li>
          </ul>
        </div>
        <div class="blank3"></div>
        <h3>2021年 夏</h3>
        <!-- 写真 -->
        <div class="img">
          <div>
            <img src="../images/picture/0601.jpg" id="bigimg">
          </div>
          <ul>
            <li><img src="../images/picture/0601.jpg" class="thumb" data-image="../images/picture/0601.jpg"></li>
            <li><img src="../images/picture/0602.jpg" class="thumb" data-image="../images/picture/0602.jpg"></li>
            <li><img src="../images/picture/0603.jpg" class="thumb" data-image="../images/picture/0603.jpg"></li>
            <li><img src="../images/picture/0604.jpg" class="thumb" data-image="../images/picture/0604.jpg"></li>
            <li><img src="../images/picture/0605.jpg" class="thumb" data-image="../images/picture/0605.jpg"></li>
          </ul>
        </div>
        <div class="blank3"></div>
      </section>
    </article>
  </div><!-- /.main-wrapper -->
  <footer><small>&copy; 2021 ボルダリング部</small></footer>
  <script src="../scripts/images.js"></script>
</body>

</html>