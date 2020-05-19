require('./bootstrap');
require('../../node_modules/slick-carousel/slick/slick');


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

    const welcomeTextWrapper = document.querySelector('.welcome-text-wrapper');
    const welcomeImageWrapper = document.querySelector('.welcome-image-wrapper');

    if (welcomeTextWrapper) {
      welcomeTextWrapper.classList.add('animated', 'fadeInLeft', 'showElement');
    }
    if (welcomeImageWrapper) {
      welcomeImageWrapper.classList.add('animated', 'fadeInRight', 'showElement');
    }
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

          if ($(this).hasClass('hideElement')) {
            $(this).addClass('animated fadeIn');
            $(this).addClass('showElement');
          }
        }
      });

      $('.whyus-image-wrapper').each(function () {
        if (isScrolledIntoView(this) === true) {
          $(this).addClass('animated fadeInLeft');
          $(this).addClass('showElement');
        }
      });

      $('.whyus-content-wrapper').each(function () {
        if (isScrolledIntoView(this) === true) {
          $(this).addClass('animated fadeInRight');
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
          $(this).addClass('animated fadeInLeft');
          $(this).addClass('showElement');
        }
      });

      $('.ourwork-content-notebook').each(function () {
        if (isScrolledIntoView(this) === true) {
          $(this).addClass('animated fadeInRight');
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


/* --------------------------*/
// Handle checkbox in contact form
/* --------------------------*/

const policyLabel = document.getElementById('policyLabel');
const policyCheckbox = document.getElementById('policy');

if (policyLabel) {
  policyLabel.addEventListener('click', handleCheckbox);
}

if (policyCheckbox) {
  policyCheckbox.addEventListener('click', handleCheckbox);
}

function handleCheckbox() {

  let checkboxStatus = document.getElementById('policy').checked;

  if (checkboxStatus == false) {
    checkboxStatus = true;
  } else {
    checkboxStatus = false;
  }
}


// =================================
// Upload files in contact form
// =================================

// File number
$('#fileInput').change(function () {
  var reader = new FileReader();
  reader.onload = (e) => {
    $('#fileBtn').css('color', '#469dc9');
    var filename = $('#fileInput').val().replace(/C:\\fakepath\\/i, '')
    $('#fileBtn').html(filename);

    $('#fileBtn2').css('visibility', 'visible');
  }
  reader.readAsDataURL(this.files[0]);
});


// =================================
// Contact form tooltips: copy/change text
// =================================

const mailBtn = document.getElementById('mailBtn');

if (mailBtn) {
  mailBtn.addEventListener('click', () => {
    document.execCommand("copy");
  });

  mailBtn.addEventListener("copy", (event) => {
    event.preventDefault();
    if (event.clipboardData) {
      event.clipboardData.setData("text/plain", 'hello@pixels.group');
      let mailTooltipText = document.querySelector('.mailTooltipText');
      mailTooltipText.innerHTML = 'Copied!'
    }
  });

  mailBtn.addEventListener('mouseleave', () => {
    let mailTooltipText = document.querySelector('.mailTooltipText');
    mailTooltipText.innerHTML = 'Copy'
  });
}


// =================================
// Upload files in estimate form
// =================================

$('#uploadFilesInput').change(function () {
  var reader = new FileReader();
  reader.onload = (e) => {
    var files = $('#uploadFilesInput').prop("files");
    var filesArray = Array.from(files);
    $('#uploadFilesBtn').addClass('button-success');

    for (var i = 0; i < filesArray.length; i++) {
      $('#inputText').html('Uploaded files: ');
      $('#uploadedFileNames').append(filesArray[i].name + ', ');
    }

  }
  reader.readAsDataURL(this.files[0]);
});


// =================================
// Estimate form, handle services
// =================================

let services = [...document.querySelectorAll('.estimate-services-single')];

services.forEach((el) => {
  el.addEventListener('click', () => {
    let checkbox = el.getElementsByTagName('input')[0];
    if (checkbox.checked == true) {
      checkbox.checked = false;
      el.classList.remove('selectedService');
    } else {
      checkbox.checked = true;
      el.classList.add('selectedService');
    }
  });
});

