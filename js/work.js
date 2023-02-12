$(function () {
  var t;
  function fnstyle() {
    t = $(".work-section").offset().top;
    if (scrY >= t) {
      $(".work1 .bg-main").addClass("active");
    } else{
      $(".work1 .bg-main").removeClass("active");
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
