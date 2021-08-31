/**
* Template Name: 
* Template URL: 
* Author: 
* License: 
*/
/* Header Js*/
function openNav() {
  document.getElementById("sidenav").style.width = "50%";
}

function closeNav() {
  document.getElementById("sidenav").style.width = "0";
}

/*Js*/

!(function($) {
  "use strict";


  // jQuery counterUp
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000
  });



  // News Owl Carousel
  $('.owl-carousel').owlCarousel({
    autoplay: true,
    loop:true,
    margin:10,
    items: 1
  });

  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });



})(jQuery);