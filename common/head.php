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
  })(window, document, 'script', 'dataLayer', 'GTM-KFRHHVG');
</script>
<!-- End Google Tag Manager -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="x-ua-compatible" content="IE=edge">
<meta name=”robots” content=”noindex”>
<title><?= $title ?></title>
<meta name="description" content="ボルダリング部の活動映像集ページです！">
<link href="../css/climb.css?v=20210921" rel="stylesheet" type="text/css">
<link rel="icon" type="image/x-icon" href="../favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="192x192" href="../android-touch-icon.png">
<meta property="og:title" content="ボルダリング部">
<meta property="og:type" content="website">
<meta property="og:description" content="活動内容とその動画を見ることが出来ます">
<meta property="og:url" content="https://climbing.katsumaru.blog">
<meta property="og:site_name" content="ボルダリング部">
<meta property="og:image" content="https://climbing.katsumaru.blog/images/bb.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="ボルダリング部">
<link rel="apple-touch-icon" href="../apple-touch-icon.png">
<link rel="manifest" href="../manifest.json">
<script>
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('sw.js')
      .then((reg) => {
        console.log('Service worker registered.', reg);
      });
  }
</script>