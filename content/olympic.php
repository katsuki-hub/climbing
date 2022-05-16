<?php require_once("../common/session.php"); ?>

<!doctype html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
  <?php $title = "2021オリンピックリザルト" ?>
  <?php require_once "../common/head.php"; ?>
</head>

<body onselectstart="return false;" onmousedown="return false;" oncontextmenu="return false;">
  <?php require_once "../common/bodyTag.php"; ?>
  <header>
    <div class="header-contents">
      <h1>2021オリンピック</h1>
      <h2>結果リザルト</h2>
    </div><!-- /.header-contents -->

    <!-- グローバルナビ -->
    <nav>
      <ul>
        <li><a href="../index.php">HOME</a></li>
        <li><a href="movie.php">動画一覧</a></li>
        <li><a href="picture.php">ピクチャ</a></li>
      </ul>
    </nav>
  </header>
  <!-- パンくずリスト -->
  <div id="bread">
    <ol>
      <li><a href="../index.php">HOME</a></li>
      <li><a href="olympic.php">オリンピック</a></li>
    </ol>
  </div><!-- /bread -->

  <div class="main-wrapper">
    <section>
      <div class="newsimgpc">
        <div class="newsimg">
          <div class="news">
            <h2>2021東京オリンピック</h2>
            <div class="blank2"></div>
            <!-- 顔写真 -->
            <h3>決勝出場男子選手</h3>
            <div class="face">
              <div class="col4">
                <img src="../images/face/mikeru.jpg">
                <p>ミカエル・マウェム</p>
              </div>
              <div class="col4">
                <img src="../images/face/narasaki.jpg">
                <p>楢崎　智亜</p>
              </div>
              <div class="col4">
                <img src="../images/face/korin.jpg">
                <p>コリン・ダフィー</p>
              </div>
              <div class="col4">
                <img src="../images/face/yakopu.jpg">
                <p>ヤコブ・シューベルト</p>
              </div>
              <div class="col4">
                <img src="../images/face/adamu.jpg">
                <p>アダム・オンドラ</p>
              </div>
              <div class="col4">
                <img src="../images/face/aruberuto.jpg">
                <p>アルベルト・ヒネスロペス</p>
              </div>
              <div class="col4">
                <img src="../images/face/pasa.jpg">
                <p>バッサ・マウェム</p>
              </div>
              <div class="col4">
                <img src="../images/face/nasanieru.jpg">
                <p>ナサニエル・コールマン</p>
              </div>
            </div>
            <!-- 男子予選 -->
            <h3>スポーツクライミング男子複合予選リザルト</h3>
            <table border="1">
              <tr bgcolor="pink">
                <th>順位</th>
                <th>選手</th>
                <th>代表国</th>
                <th>スピード</th>
                <th>ボルダリング</th>
                <th>リード</th>
                <th>記録</th>
              </tr>
              <tr class="td" id="mq1"></tr>
              <tr class="td" id="mq2"></tr>
              <tr class="td" id="mq3"></tr>
              <tr class="td" id="mq4"></tr>
              <tr class="td" id="mq5"></tr>
              <tr class="td" id="mq6"></tr>
              <tr class="td" id="mq7"></tr>
              <tr class="td" id="mq8"></tr>
            </table>
            <!-- 男子決勝 -->
            <h3>スポーツクライミング男子複合決勝リザルト</h3>
            <table border="1">
              <tr bgcolor="pink">
                <th>順位</th>
                <th>選手</th>
                <th>代表国</th>
                <th>スピード</th>
                <th>ボルダリング</th>
                <th>リード</th>
                <th>記録</th>
              </tr>
              <tr class="td" id="mf1" bgcolor="#DBB400"></tr>
              <tr class="td" id="mf2" bgcolor="#C9CACA"></tr>
              <tr class="td" id="mf3" bgcolor="#C08D5E"></tr>
              <tr class="td" id="mf4"></tr>
              <tr class="td" id="mf5"></tr>
              <tr class="td" id="mf6"></tr>
              <tr class="td" id="mf7"></tr>
              <tr class="td" id="mf8"></tr>
            </table>

            <div class="blank"></div>
          </div>
        </div>
        <!-- 女子複合 -->
        <div class="newsimg2">
          <div class="news">
            <div class="blank2"></div>
            <!-- 顔写真 -->
            <h3>決勝出場女子選手</h3>
            <div class="face">
              <div class="col4">
                <img src="../images/face/yanya.jpg">
                <p>ヤンヤ・ガンブレット</p>
              </div>
              <div class="col4">
                <img src="../images/face/so.jpg">
                <p>ソ・チェヒョン</p>
              </div>
              <div class="col4">
                <img src="../images/face/nonaka.jpg">
                <p>野中　生萌</p>
              </div>
              <div class="col4">
                <img src="../images/face/noguti.jpg">
                <p>野口　啓代</p>
              </div>
              <div class="col4">
                <img src="../images/face/burukku.jpg">
                <p>ブルック・ラバトゥ</p>
              </div>
              <div class="col4">
                <img src="../images/face/jecika.jpg">
                <p>ジェシカ・ピルツ</p>
              </div>
              <div class="col4">
                <img src="../images/face/arecsandora.jpg">
                <p>アレクサンドラ・ミロスラフ</p>
              </div>
              <div class="col4">
                <img src="../images/face/anuku.jpg">
                <p>アヌーク・ジョベール</p>
              </div>
            </div>
            <!-- 女子予選 -->
            <h3>スポーツクライミング女子複合予選リザルト</h3>
            <table border="1">
              <tr bgcolor="pink">
                <th>順位</th>
                <th>選手</th>
                <th>代表国</th>
                <th>スピード</th>
                <th>ボルダリング</th>
                <th>リード</th>
                <th>記録</th>
              </tr>
              <tr class="td" id="wq1"></tr>
              <tr class="td" id="wq2"></tr>
              <tr class="td" id="wq3"></tr>
              <tr class="td" id="wq4"></tr>
              <tr class="td" id="wq5"></tr>
              <tr class="td" id="wq6"></tr>
              <tr class="td" id="wq7"></tr>
              <tr class="td" id="wq8"></tr>
            </table>
            <!-- 女子決勝-->
            <h3>スポーツクライミング女子複合決勝リザルト</h3>
            <table border="1">
              <tr bgcolor="pink">
                <th>順位</th>
                <th>選手</th>
                <th>代表国</th>
                <th>スピード</th>
                <th>ボルダリング</th>
                <th>リード</th>
                <th>記録</th>
              </tr>
              <tr class="td" id="wf1" bgcolor="#DBB400"></tr>
              <tr class="td" id="wf2" bgcolor="#C9CACA"></tr>
              <tr class="td" id="wf3" bgcolor="#C08D5E"></tr>
              <tr class="td" id="wf4"></tr>
              <tr class="td" id="wf5"></tr>
              <tr class="td" id="wf6"></tr>
              <tr class="td" id="wf7"></tr>
              <tr class="td" id="wf8"></tr>
            </table>
            <div class="blank"></div>
          </div>
        </div>
      </div>
    </section>
  </div><!-- /.main-wrapper -->
  <footer><small>&copy; 2021 ボルダリング部</small></footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="../scripts/record.js"></script>
</body>

</html>