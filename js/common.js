function fnWinInfo() {
  window.scrY = $(window).scrollTop();
  window.scrX = $(window).scrollLeft();
  window.winH = $(window).innerHeight();
  window.winW = $(window).innerWidth();
} //fnWinInfo

fnWinInfo();
$(window)
  .scroll(function () {
    fnWinInfo();
  })
  .resize(function () {
    fnWinInfo();
  }); //windowEvt


window.isMobile = false;
window.filter = "win16|win32|win64|mac";
if (navigator.platform) {
  isMobile = filter.indexOf(navigator.platform.toLowerCase()) < 0;
}