$(function(){
  function fnactive() {
    $(`.contact-section .contact-container ,.about-section .about-profile`).each(function () {
      var offset = $(this).offset().top// 객체와 윈도우탑의 거리
      var innerH = $(this).innerHeight()
      if (
        (scrY >= offset - winH * 0.1 + innerH) -
        (scrY >= offset - winH * 0.9)
        ) {
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