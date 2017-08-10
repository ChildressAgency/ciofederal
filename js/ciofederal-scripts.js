jQuery(document).ready(function($){
  $('.scroller').on('click', function(e){
    e.preventDefault;
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }    
  }); 

  if(typeof $.fn.fullpage == 'function'){
    $('#hp-main').fullpage({
      responsiveHeight:600,
      verticalCentered:false,
      slideSelector:'.fullpage-slide',
      //paddingTop:'71px'
    });
  }
});