<?php require_once("common/session.php"); ?>

<!doctype html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKLQ3MH');
  </script>
  <!-- End Google Tag Manager -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <meta name=”robots” content=”noindex”>
  <title>ボルダリング部</title>
  <meta name="description" content="ボルダリング部の活動映像集ページです！">
  <link href="css/climb.css?v=20220515" rel="stylesheet" type="text/css">
  <link href="css/calendar.css" rel="stylesheet" type="text/css">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="192x192" href="android-touch-icon.png">
  <meta property="og:title" content="ボルダリング部">
  <meta property="og:type" content="website">
  <meta property="og:description" content="活動内容とその動画を見ることが出来ます">
  <meta property="og:url" content="https://climbing.katsumaru.blog">
  <meta property="og:site_name" content="ボルダリング部">
  <meta property="og:image" content="https://climbing.katsumaru.blog/images/bb.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="ボルダリング部">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="manifest" href="manifest.json">
  <script>
    if ('serviceWorker' in navigator) {
      navigator.serviceWorker.register('sw.js')
        .then((reg) => {
          console.log('Service worker registered.', reg);
        });
    }
  </script>
</head>

<body onselectstart="return false;" oncontextmenu="return false;">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKLQ3MH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header>
    <div class="header-contents">
      <h1>ボルダリング部</h1>
      <h2>動画視聴ができますよ！！</h2>
    </div><!-- /.header-contents -->

    <!-- グローバルナビ -->
    <nav>
      <ul>
        <li><a class="current" href="index.php">HOME</a></li>
        <li><a href="content/movie.php">動画一覧</a></li>
        <li><a href="content/picture.php">ピクチャ</a></li>
      </ul>
    </nav>

  </header>
  <div class="tv">
    <video src="topvideo.mp4" poster="images/topvideo.jpg" autoplay muted loop playsinline width="100%" controlsList="nodownload" oncontextmenu="return false"></video>
  </div>

  <div class="main-wrapper">
    <!-- NEWS -->
    <section>
      <h2>NEWS</h2>
      <div class="newstab">
        <ul class="tab">
          <li><a href="#new">お知らせ</a></li>
          <li><a href="#kadai">課題写真</a></li>
        </ul>

        <div id="new" class="area">
          <ul>
            <li>【5月3日】95度・110度 ホールドチェンジ</li>
            <li>【4月12日】スラブ＆垂壁 ホールドチェンジ</li>
            <li>【3月15日】1Fマンスリー課題10本更新</li>
            <li>【3月9日】Overhung Master Session vol.4</li>
            <li>【2月2日】95度・110度 ホールドチェンジ</li>
            <li>【1月7日】スラブ・垂壁 ホールドチェンジ</li>
            <li><a href="content/olympic.php">オリンピック2021 リザルト</a></li>
          </ul>
        </div><!-- /area -->


        <div id="kadai" class="area">
          <ul>
            <li><a href="dojo/3-2.php">3月2週目の道場課題の写真はこちら！</a></li>
            <li><a href="dojo/3-1.php">3月1週目の道場課題の写真はこちら！</a></li>
          </ul>
        </div><!-- /area -->
      </div><!-- /newstab -->
    </section><!-- /news -->
    <div class="blank3"></div>
    <!-- 新着動画 -->
    <section>
      <h2>新着動画</h2>
      <div class="column">
        <div class="v2">
          <h3>マンスリー8番</h3>
          <a href="video/b22.mp4"><img class="video smoothTrigger" src="images/b22.jpg" alt="マンスリー8番"></a>
        </div>

        <div class="v2">
          <h3>ゴールした？</h3>
          <a href="video/b21.mp4"><img class="video smoothTrigger" src="images/b21.jpg" alt="ゴールした？"></a>
        </div>
      </div>

      <div class="column">
        <div class="v2">
          <h3>3級スラブ課題</h3>
          <a href="video/b20.mp4"><img class="video smoothTrigger" src="images/b20.jpg" alt="3級スラブ課題"></a>
        </div>

        <div class="v2">
          <h3>休日のボルダリング</h3>
          <a href="video/b19.mp4"><img class="video smoothTrigger" src="images/b19.jpg" alt="休日のボルダリング"></a>
        </div>
      </div>

      <div class="column">
        <div class="v2">
          <h3>3級垂壁課題</h3>
          <a href="video/b18.mp4"><img class="video smoothTrigger" src="images/b18.jpg" alt="3級垂壁課題"></a>
        </div>

        <div class="v2">
          <h3>3月2週の道場課題その2</h3>
          <a href="video/b17.mp4"><img class="video smoothTrigger" src="images/b17.jpg" alt="3月2週の道場課題その2"></a>
        </div>
      </div>

      <!-- 過去動画ボタン -->
      <a class="more" href="content/movie.php">
        <span class="more-bottom"></span>
        <span class="more-top"><span>過去動画へ</span></span>
      </a>
    </section>
    <div class="blank3"></div>

    <?php
    require_once("common/es.php");
    ?>

    <section id="board">
      <h2>掲示板</h2>

      <form method="POST" action="content/writeMemo.php">
        <ul>
          <li>
            <textarea name="memo" cols="40" rows="8" maxlength="200" placeholder="コメント入力"></textarea>
          </li>
          <li><input type="submit" value="送信する"></li>
        </ul>
      </form>

      <?php
      $line_num = 100; // 表示する行数

      $contents = file('data/comment.txt', FILE_IGNORE_NEW_LINES);

      $start_index = count($contents) - $line_num;
      if ($start_index < 0) {
        $start_index = 0;
      }
      ?>

      <div class="comment">
        <?php
        $filename = "data/comment.txt";
        try {
          $fileobj = new SplFileObject($filename, "rb");
          $fileobj->seek($start_index);
        } catch (Exception $e) {
          echo '<span class="error">エラーがありました</span>';
          echo $e->getMessage();
          exit();
        }

        $fileobj->flock(LOCK_SH);
        $readdata = $fileobj->fread($fileobj->getSize());
        $fileobj->flock(LOCK_UN);

        if (!($readdata === FALSE)) {
          $readdata = es($readdata);
          $readdata_br = nl2br($readdata, false);
          echo $readdata_br;
        } else {
          echo '<span class="error">ファイルを読み込めませんでした</span>';
        }
        ?>
        <div class="relo"><a href="https://climber2022.site/#board"><button type="button">リロード</button></a></div>
      </div>
    </section>

    <div class="blank3"></div>

    <section>
      <h2>活動写真</h2>
      <div class="img">
        <div>
          <img src="images/picture/0801.jpg" id="bigimg">
        </div>
        <ul>
          <li><img src="images/picture/0801.jpg" class="thumb" data-image="images/picture/0801.jpg"></li>
          <li><img src="images/picture/0802.jpg" class="thumb" data-image="images/picture/0802.jpg"></li>
          <li><img src="images/picture/0803.jpg" class="thumb" data-image="images/picture/0803.jpg"></li>
          <li><img src="images/picture/0804.jpg" class="thumb" data-image="images/picture/0804.jpg"></li>
          <li><img src="images/picture/0805.jpg" class="thumb" data-image="images/picture/0805.jpg"></li>
          <li><img src="images/picture/0601.jpg" class="thumb" data-image="images/picture/0601.jpg"></li>
          <li><img src="images/picture/0602.jpg" class="thumb" data-image="images/picture/0602.jpg"></li>
          <li><img src="images/picture/0603.jpg" class="thumb" data-image="images/picture/0603.jpg"></li>
          <li><img src="images/picture/0604.jpg" class="thumb" data-image="images/picture/0604.jpg"></li>
          <li><img src="images/picture/0605.jpg" class="thumb" data-image="images/picture/0605.jpg"></li>
        </ul>
      </div><br><br>
      <!-- 過去動画ボタン -->
      <a class="more" href="content/picture.php">
        <span class="more-bottom"></span>
        <span class="more-top"><span>ピクチャへ</span></span>
      </a>
    </section>

    <div class="blank3"></div>

    <section>
      <h1 data-en="Schedule">スケジュール</h1>
      <!-- カレンダー -->
      <div id="calendar"></div>
      <!-- カウントダウン -->
      <div class="frame">
        <p style="font-size: 16px; color: rgb(0, 77, 100); ">2022年も残り</p>
        <p class="timer">あと<span id="day"></span>日<span id="hour"></span>時間<span id="min"></span>分<span id="sec"></span>秒</p>
      </div>
    </section>
    <div class="blank3"></div>
    <section class="link">
      <h2>ボルダリングジム</h2>
      <ul class="gim">
        <li><a href="https://mono-climbing.com/">モノクライミング</a>
          <a href="https://www.instagram.com/monoclimbing2014/"><img src="images/Instagram_AppIcon_Aug2017.png" alt="Instagram"></a>
        </li>

        <li><a href="http://familywall-fukuoka.com/">ファミリーウォール</a>
          <a href="https://www.instagram.com/familywallfukuoka/"><img src="images/Instagram_AppIcon_Aug2017.png" alt="Instagram"></a>
        </li>

        <li><a href="https://barehands.biz/">Bare Hands</a>
          <a href="https://www.instagram.com/barehands.climbing/"><img src="images/Instagram_AppIcon_Aug2017.png" alt="Instagram"></a>
        </li>

        <li><a href="http://www.hoa-hoa.com/">ホアホア</a>
          <a href="https://www.instagram.com/boulderinggymhoahoa_o/"><img src="images/Instagram_AppIcon_Aug2017.png" alt="Instagram"></a>
        </li>
        <li><a href="https://thewallboulderinggym.jp/">The Wall</a>
          <a href="https://www.instagram.com/thewallboulderinggym/"><img src="images/Instagram_AppIcon_Aug2017.png" alt="Instagram"></a>
        </li>

        <li><a href="https://www.session.ne.jp/atwall/">AT WALL</a>
          <a href="https://www.instagram.com/climbingatwall/"><img src="images/Instagram_AppIcon_Aug2017.png" alt="Instagram"></a>
        </li>

        <li><a href="https://www.sunwall.jp/">SUN WALL</a>
          <a href="https://www.instagram.com/sun.wall/"><img src="images/Instagram_AppIcon_Aug2017.png" alt="Instagram"></a>
        </li>

        <li><a href="https://www.escapecandc.jp/">ESCAPE</a>
          <a href="https://www.instagram.com/escape_candc/"><img src="images/Instagram_AppIcon_Aug2017.png" alt="Instagram"></a>
        </li>

        <li><a href="https://climbing-od.com/">CLIMBING OD</a>
          <a href="https://www.instagram.com/climbing_od_kokura/"><img src="images/Instagram_AppIcon_Aug2017.png" alt="Instagram"></a>
        </li>

        <li><a href="http://ziprockclimbing.com/">ジップロック</a>
          <a href="https://www.instagram.com/ziprockclimbing/"><img src="images/Instagram_AppIcon_Aug2017.png" alt="Instagram"></a>
        </li>

        <li><a href="https://attic-climbing.mystrikingly.com/">ATTIC CLIMBING</a>
          <a href="https://www.instagram.com/atticclimbing/"><img src="images/Instagram_AppIcon_Aug2017.png" alt="Instagram"></a>
        </li>

        <li><a href="https://ecole-climbing.com/">ECOLE</a>
          <a href="https://www.facebook.com/ecole.climbing"><img src="images/f_logo_RGB-Hex-Blue_512.png" alt="facebook"></a>
        </li>

        <li><a href="https://stump-climbing.com/">STUMP</a>
          <a href="https://www.instagram.com/stumpclimbing/"><img src="images/Instagram_AppIcon_Aug2017.png" alt="instagram"></a>
        </li>

        <li><a href="https://bravoclimbing.com/shop_fukuoka-nishi.html">ブラボー福岡西</a>
          <a href="https://www.instagram.com/bravoclimbing.nishi/"><img src="images/Instagram_AppIcon_Aug2017.png" alt="instagram"></a>
        </li>

        <li><a href="https://bravoclimbing.com/">ブラボー福岡天神</a>
          <a href="https://www.instagram.com/bravoclimbing/"><img src="images/Instagram_AppIcon_Aug2017.png" alt="instagram"></a>
        </li>

        <li><a href="http://www.climbingspot-impact.com/">インパクト</a>
          <a href="https://www.facebook.com/iMpACtclimbing"><img src="images/f_logo_RGB-Hex-Blue_512.png" alt="facebook"></a>
        </li>

        <li><a href="https://www.favourclimbing.com/">Favour-climbing</a>
          <a href="https://www.instagram.com/favourclimbing/"><img src="images/Instagram_AppIcon_Aug2017.png" alt="instagram"></a>
        </li>

        <li><a href="https://kurume.joywallclimbing.com/">JOYWALL</a>
          <a href="https://www.facebook.com/%E3%82%AF%E3%83%A9%E3%82%A4%E3%83%9F%E3%83%B3%E3%82%B0%E3%82%B8%E3%83%A0joywall-216426238516811/"><img src="images/f_logo_RGB-Hex-Blue_512.png" alt="facebook"></a>
        </li>

        <li><a href="http://fukuoka-westside-climbing-myway.com/">MYWAY</a>
          <a href="https://www.instagram.com/mywayclimbing/"><img src="images/Instagram_AppIcon_Aug2017.png" alt="instagram"></a>
        </li>
      </ul>
    </section>

  </div><!-- /.main-wrapper -->
  <footer>
    <a href="log/logout.php" class="log">ログアウトする</a><br>
    <small>&copy; 2021 ボルダリング部</small>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="scripts/countdown.js"></script>
  <script src="scripts/calendar.js"></script>
  <script src="scripts/event.js?v=20210921"></script>
  <script src="scripts/images.js?v=20210921"></script>
</body>

</html>