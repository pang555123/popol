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

  $('.menu button').click(function () {
    var target = $(this).attr('data-n')
    //스크롤이동명령어
    $('body,html').stop().animate({ 'scrollTop': $('.scr-section' + target+ '-scr').offset().top })
    //active
    $('.scr-section'+target).addClass('active')
  })//click


  function fnScrollSpy() {
    var offset1 = $(".scr-section1").offset().top - 2;
    var offset2 = $(".scr-section2").offset().top - 2;
    var offset3 = $(".scr-section3").offset().top - 2;
    var offset4 = $(".scr-section9").offset().top - 2;
    var current;
    if (scrY < offset2) {
      //1
      current = 1;
    } else if (scrY >= offset2 && scrY < offset3) {
      //2
      current = 2;
    } else if (scrY >= offset3 && scrY < offset4) {
      //3
      current = 3;
    }else {
      //4
      current = 4;
    } //if
  
    //btn-active
    $('.menu button').removeClass('active')
    $(`.scr-spy${current}`).addClass('active')
  } //fn
  fnScrollSpy()
  $(window).resize(function(){
    fnScrollSpy()
  }).scroll(function () {
    fnScrollSpy()
  })//win event

}); //read