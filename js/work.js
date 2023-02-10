$(function () {
  var t;
  function fnstyle() {
    t = $(".work1-section").offset().top;
    if (scrY >= t) {
      $('.work1 .bg-main').addClass('active')
      $('.work1-section::after').addClass('active')
    }else{
      $('.work1 .bg-main').removeClass('active')
    }
  } //fn

  fnstyle();
  $(window)
    .resize(function () {
      fnstyle();
    })
    .scroll(function () {
      fnstyle();
    }); //window event
}); //ready
