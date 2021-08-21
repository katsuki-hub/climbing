
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
    } else {
      $(this).removeClass("smooth");
    }
  });
}
$(window).scroll(function () {
  smoothAnime();
});