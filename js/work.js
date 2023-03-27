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

  $(`.link button`).click(function(e){
    var n = $(this).attr('data-n')
    $(`.work${n}-section .planning`).addClass('active')
    $('body').css({overflow:'hidden'})
  })
  $(`.planning .wrap button`).click(function(e){
    $('.planning').removeClass('active');
    
  })
}); //ready
