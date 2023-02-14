$(function () {
  function fnstyle() {
    $(`.work-section`).each(function () {
      t = $(this).offset().top; // 객체와 윈도우탑의 거리
      if (scrY >= t - winH * 0.9 && scrY <= t - winH * -0.05 ) {
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
}); //ready
