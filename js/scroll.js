$(function () {
  //사용하지 않는 내용 삭제 
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
    if (target === 11) {
      target = 10;
    }
    if (target === 10) {
      $(".scr-section9").attr("data-n", "10");
    } else {
      $(".scr-section9").attr("data-n", "9");
    }
    /* 스크롤이동명령어 */
    $("body,html").stop().animate({ scrollTop: $(".scr-section" + target + "-scr").offset().top});

    return false
  }); //bind


}); //read