$(function () {
  var t;
  function fnstyle() {
    t = $(".work1-section").offset().top;
    if (scrY >= t) {
      $('.work1').addClass('active')
    }else{
      $('.work1').removeClass('active')
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
