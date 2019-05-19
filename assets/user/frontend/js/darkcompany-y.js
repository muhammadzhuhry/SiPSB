/*===================================
              NAVBAR
===================================*/

$(document).ready(function(){
  $(window).scroll(function () {
        if ($(window).scrollTop() > 600) {
            $(".navbar").css("background-color","#000000");
        } else {
            $(".navbar").css("background-color","rgba(0, 0, 0, 0.3)");
        }
  });
});

/*===================================
              CAROUSEL
===================================*/

$('.carousel').carousel({
    pause: "false"
});

/*===================================
              PORTFOLIO
===================================*/

$(function() {

    var selectedClass = "";
    $(".filter").click(function(){ 

      selectedClass = $(this).attr("data-rel"); 
      $("#portfolio-content").fadeTo(100, 0.1);
      $("#portfolio-content div").not("."+selectedClass).fadeOut().removeClass('scale-anm');

      setTimeout(function() {
        $("."+selectedClass).fadeIn().addClass('scale-anm');
        $("#portfolio-content").fadeTo(300, 1);
      }, 300); 
    
    });

    $('.simplefilter li').click(function() {
        $(this).siblings('li').removeClass('active');
        $(this).addClass('active');
    });

});

/*===================================
               Magnific
===================================*/

$(document).ready(function() {
  $('.portfolio-wrapper').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function(item) {
        return item.el.attr('title') + '<small>This image Designed by Freepik</small>';
      }
    }
  });
});