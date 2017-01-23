$('.nav-trigger').on("click",function(){
  $('nav').toggleClass('open-nav');
  if ($('nav').hasClass( "open-nav" ) ) {
    $('html').css('overflow-y', 'hidden');
  }
  else{
    $('html').css('overflow-y', 'auto');
  }

});
