require('./bootstrap');
require('../../node_modules/slick-carousel/slick/slick');

/* --------------------------*/
// Animations
/* --------------------------*/
// require('./animate');


/* --------------------------*/
// Pge Loader
/* --------------------------*/
require('./loader');


$(document).ready(function () {

  /* --------------------------*/
  // Testimonials Sliders
  /* --------------------------*/
  $('.testimonials-sliders').slick({
    infinite: true,
    centerMode: true,
    centerPadding: '0',
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 600
  });

  /* --------------------------*/
  // Smooth Scrolling
  /* --------------------------*/
  $("a").on('click', function (event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function () {

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }
  });


  /* --------------------------*/
  // Animate CSS
  /* --------------------------*/

  if ($(window).width() > 1050) {
    document.querySelector('.welcome-text-wrapper').classList.add('animated', 'bounceInLeft', 'showElement');
    document.querySelector('.welcome-image-wrapper').classList.add('animated', 'bounceInRight', 'showElement');
  }

  // Check if element is scrolled into view
  function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height() - 100;

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    // return (elemTop >= docViewTop);
  }

  // If element is scrolled into view, fade it in
  $(window).scroll(function () {

    if ($(window).width() > 1050) {

      $('.title-wrapper').each(function () {
        if (isScrolledIntoView(this) === true) {
          $(this).addClass('animated fadeIn');
          $(this).addClass('showElement');
        }
      });

      $('.whyus-image-wrapper').each(function () {
        if (isScrolledIntoView(this) === true) {
          $(this).addClass('animated bounceInLeft');
          $(this).addClass('showElement');
        }
      });

      $('.whyus-content-wrapper').each(function () {
        if (isScrolledIntoView(this) === true) {
          $(this).addClass('animated bounceInRight');
          $(this).addClass('showElement');
        }
      });

      $('.services-content').each(function () {
        if (isScrolledIntoView(this) === true) {
          $(this).addClass('animated fadeIn');
          $(this).addClass('showElement');
        }
      });

      $('.ourwork-content-image').each(function () {
        if (isScrolledIntoView(this) === true) {
          $(this).addClass('animated fadeIn');
          $(this).addClass('showElement');
        }
      });

      $('.ourwork-content-info').each(function () {
        if (isScrolledIntoView(this) === true) {
          $(this).addClass('animated bounceInLeft');
          $(this).addClass('showElement');
        }
      });

      $('.ourwork-content-notebook').each(function () {
        if (isScrolledIntoView(this) === true) {
          $(this).addClass('animated bounceInRight');
          $(this).addClass('showElement');
        }
      });

      $('.article-wrapper').each(function () {
        if (isScrolledIntoView(this) === true) {
          $(this).addClass('animated fadeIn');
          $(this).addClass('showElement');
        }
      });
    }

  });

});

/* --------------------------*/
// Stop Transitions When Loading Page
/* --------------------------*/

$(window).on('load', function () {
  $("body").removeClass("preload");
});

