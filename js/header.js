$(function(){
  function fnHeaderFixed(){
    if(scrY>=10){
      $('header').addClass('active')
    } else{
      $('header').removeClass('active')
    }
  }//fn

  fnHeaderFixed()
  $(window).scroll(function(){
    fnHeaderFixed()
  }).resize(function(){
    fnHeaderFixed()
  })//window end
})//ready