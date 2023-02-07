$(function () {
  /* 첫페이지 주소검사 */
  var url = location.href; //현재주소
  var domain = location.protocol + "//" + location.hostname + "/"; //도메인
  var target;

  /* 섹션별 휠이벤트 */
  var headerH;
  function fnHeaderHeight() {
    if (matchMedia("(min-width:1200px)").matches) {
      //미디어쿼리 여부에따라 달라짐
      headerH = 0;
    } else {
      headerH = 0;
    }
  } //fn
  fnHeaderHeight();
  $(window).resize(function () {
    fnHeaderHeight();
  }); //resize
  /* 섹션별 휠이벤트 */
  var isWheel = true;
  $(".scr-section").bind("mousewheel", function (e) {
    if (!isWheel) return false;
    isWheel = false;
    setTimeout(function () {
      isWheel = true;
    }, 800);

    window.smoothScroll = false;
    var delta = e.originalEvent.wheelDelta / -120;
    var current = parseInt($(this).attr("data-n"));
    var target = delta + current;
    if (target === 0) {
      target = 1;
    }
    if (target === 9) {
      target = 8;
    }
    if (target === 8) {
      $(".scr-section9").attr("data-n", "9");
      var footerH = $("footer").innerHeight();
    } else {
      $(".scr-section9").attr("data-n", "8");
      $(".scr-section").css({ transform: `translateY(0px)` });
    }
    /* 스크롤이동명령어 */
    $("body,html").stop().animate({scrollTop: $(".scr-section" + target + "-scr").offset().top - headerH});

    return false
  }); //bind

fnScrollSpy()
$(window).resize(function(){
  fnScrollSpy()
}).scroll(function () {
  fnScrollSpy()
})//win event


}); //read