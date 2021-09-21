/*=====================
写真タブ
=====================*/
var thumbs = document.querySelectorAll(".thumb");
for (var i = 0; i < thumbs.length; i++) {
  thumbs[i].onclick = function () {
    document.getElementById("bigimg").src = this.dataset.image;
  };
}

var thumbs = document.querySelectorAll(".thumb2");
for (var i = 0; i < thumbs.length; i++) {
  thumbs[i].onclick = function () {
    document.getElementById("bigimg2").src = this.dataset.image;
  };
}


/*=====================
にゅ～ん
=====================*/
function smoothAnime() {
  $(".smoothTrigger").each(function () {
    var elemPos = $(this).offset().top - 50;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass("smooth");
    }
  });
}
$(window).scroll(function () {
  smoothAnime();
});

/*=====================
タブリスト
=====================*/
function GethashID(hashIDName) {
  if (hashIDName) {
    $('.tab li').find('a').each(function () {
      var idName = $(this).attr('href');
      if (idName == hashIDName) {
        var parentElm = $(this).parent();
        $('.tab li').removeClass("active");
        $(parentElm).addClass("active");
        $(".area").removeClass("is-active");
        $(hashIDName).addClass("is-active");
      }
    });
  }
}

$('.tab a').on('click', function () {
  var idName = $(this).attr('href');
  GethashID(idName);
  return false;
});

$(window).on('load', function () {
  $('.tab li:first-of-type').addClass("active");
  $('.area:first-of-type').addClass("is-active");
  var hashName = location.hash;
  GethashID(hashName);
});

// 上記の動きをページが読み込まれたらすぐに動かす
$(window).on('load', function () {
  $('.tab li:first-of-type').addClass("active"); //最初のliにactiveクラスを追加
  $('.area:first-of-type').addClass("is-active"); //最初の.areaにis-activeクラスを追加
  var hashName = location.hash; //リンク元の指定されたURLのハッシュタグを取得
  GethashID(hashName);//設定したタブの読み込み
});