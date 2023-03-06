$(function () {
  function fnstyle() {
    $(`.work-section`).each(function () {
      t = $(this).offset().top; // 객체와 윈도우탑의 거리
      if (scrY >= t - winH * 0.98 && scrY <= t - winH * -1) {
        $(this).addClass("active");
      } else {
        $(this).removeClass("active");
      }
    }); //each
  } //fn1

  fnstyle();
  $(window)
    .resize(function () {
      fnstyle();
    })
    .scroll(function () {
      fnstyle();
    });

    function nonscr() {
      $('.body').on('scroll touchmove mousewheel', function(e) {
        e.preventDefault();
        e.stopPropagation();
        return false;
      });
    }
    function scr(){
      $('.body').off('scroll touchmove mousewheel')
    }
  $(`.link button`).click(function(e){
    e.preventDefault();
    $(`body`).addClass('non-scroll')
    $('.planning').fadeIn(300);
    nonscr()
  })
  $(`.planning .wrap button`).click(function(e){
    e.preventDefault();
    $(`body`).removeClass('non-scroll')
    $('.planning').fadeOut(100);
    scr()
  })
}); //ready
