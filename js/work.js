$(function () {
  var t;
  function fnstyle() {
    t = $(".work1-section").offset().top;
    if (scry >= t) {
      
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
