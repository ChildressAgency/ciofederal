jQuery(document).ready(function($){
  if(typeof $.fn.fullpage == 'function'){
    $('#hp-main').fullpage({
      responsiveHeight:600,
      verticalCentered:false,
      slideSelector:'.fullpage-slide',
      afterRender: function(){
        $('#sectionCarousel.carousel').carousel();
      }
    });

    $(document).on('click', '.scroller', function(){
      $.fn.fullpage.moveSectionDown();
    });
  }

  $('.caption-content').on('show.bs.collapse', function(){
    $('.caption-content.in').collapse('hide');
  });
});