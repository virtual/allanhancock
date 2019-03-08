$(function () {

  var buttonPrev = "<button type='button' aria-label='Previous' class='slick-prev pull-left'><span class='button-left' aria-hidden='true'></span></button>";
  var buttonNext = "<button type='button' aria-label='Next' class='slick-next pull-right'><span class='button-right' aria-hidden='true'></span></button>";
  
  // Default settings for slick-silder class only (no other class)
  $('.slick-slider').each(function () {
      var $this = $(this);
      var $auto = true;
      if ($(this).hasClass('autoplayfalse')) {
        $auto = false;
      }
      // IF { has 'simple-slickslider' with additional classes } 
      // OR { it ONLY has class 'slick-slider' with NO other classes } 
      // if (($this.hasClass('simple-slickslider')) || ($this.attr("class").split(' ').length === 1)) {
        $this.slick({
          autoplaySpeed: 5000,
          autoplay: $auto,  // option: true or false
          infinite: true,
          dots: true,
          prevArrow: buttonPrev,
          nextArrow: buttonNext, 
          swipe: true, 
          slide: '.slide',

          responsive: [  {
            breakpoint: 480,
            settings: {
              dots: false,
              arrows: false 
            }
          }] 
        });
      // }
  });
});