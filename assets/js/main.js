(function($) {
  "use strict";
  
  // menu
  $('.bar').click(function(){
    $('.mobile-menu').toggleClass('menu-active');
  });


  // owlCarousel
  $(".detail-slider").owlCarousel({
    loop: true,
    margin: 0,
    items: 1,
    navText: [
      '<i class="fal fa-angle-left"></i>',
      '<i class="fal fa-angle-right"></i>'
    ],
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 1, 
      },
      767: {
        items: 1
      },
      992: {
        items: 1
      }
    }
  });
  $(".depart-slider").owlCarousel({
    loop: true,
    margin: 0,
    items: 1,
    navText: [
      '<i class="fal fa-angle-left"></i>',
      '<i class="fal fa-angle-right"></i>'
    ],
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 1, 
      },
      767: {
        items: 1
      },
      992: {
        items: 1
      }
    }
  });
 
})(jQuery);
