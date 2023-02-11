$(function(){
  function fnactive() {
    $(`.contact-section .contact-container ,.about-section .about-profile`).each(function () {
      t = $(this).offset().top// 객체와 윈도우탑의 거리
      if (scrY >= t - winH * 0.9 && scrY <= t - winH * 0.05) {
        $(this).addClass('active')
      } else {
        $(this).removeClass('active')
      }
    })//each
  }//fn1
  
  fnactive()
    $(window).resize(function () {
      fnactive()
    }).scroll(function () {
      fnactive()
    })
})//ready