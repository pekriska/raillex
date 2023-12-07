$ = jQuery.noConflict(true);

$(document).ready( function () {

var breakpoint = 950;

if ($(document).width() <= breakpoint){
  $("#primary-menu").css("display","none");

}

  $('.menu-toggle').click(function(e) {
    e.preventDefault();

      if ($('#primary-menu').is(":visible") ) {
        $('.menu-toggle').removeClass("is-active");
        $('#primary-menu').stop(true,true).slideUp(400);
        
      } else {
        $('.menu-toggle').addClass("is-active");
        $('#primary-menu').stop(true,true).slideDown(400); 
      }
      
    });


  sizeOfScreen = $(window).width();

  $(window).resize(function () {
    
    if ($(document).width() > breakpoint){
      $("#primary-menu").css("display","flex");
		}else{
      $("#primary-menu").css("display","none");
      $('.menu-toggle').removeClass("is-active");
    }

		sizeOfScreen = $(window).width();
  });

});
