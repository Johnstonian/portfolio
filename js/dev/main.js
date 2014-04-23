// replace .svg with .png
if(!Modernizr.svg) {
  $('img[src*="svg"]').attr('src', function() {
    return $(this).attr('src').replace('.svg', '.png');
  });
}

// // setup responsive nav
var nav = responsiveNav(".nav-collapse", {
  insert: "before"
  });

$(function() { // document ready!

  var header = $('.header');

  // handle start button click
  $('.startBtn').click( function(e) {
    e.preventDefault();
    $(window).scrollTo("#article-section", 800, {
      onAfter:function() {
        $(header).addClass('show-header');
      },
      axis: 'y'
    });
  });

  // handle nav item clicks
  $('.header  a').click( function(e) {
    e.preventDefault();

    var $this = this.hash;

    // disable waypoint events
    $('.section').waypoint('disable');

    $(window).scrollTo( $this, 800, {
      onAfter: function() {
        $('.section').waypoint('enable');
      },
      axis: 'y'
    } );

    // move header menu off screen if Logo is clicked
    if( $this == '#intro-section' ) {
      // hide header bar
      $(header).removeClass('show-header');
    }
  });

  // handle switching of logo image on hover
  $(".logo-header").hover(
    function() {
        $(this).find('img').attr("src", "images/logo_title.png");
    },
    function() {
        $(this).find('img').attr("src", "images/logo_name.png");
    }
  );

  // close mobile menu if nav item clicked
  $('.nav li a').click( function(e) {
    if( $(".nav-collapse").hasClass("opened") ) {
      nav.toggle();
    }
    $('.nav li a').removeClass('nav-active');
    $(this).addClass('nav-active');
  });

  // setup waypoints to toggle active nav states
  $('.section').waypoint( function(direction) {
    var that = this;

    if( !$(that).hasClass('skillset') && !$(that).hasClass('hobbies') && !$(that).hasClass('intro')) {

      // show navigation if not at top of page
      if( !$(header).hasClass('show-header') ) {
        $(header).addClass('show-header');
      }

      // remove nav-active class from navigation
      $('.nav li a').removeClass('nav-active');

      // add the appropriate nav-active item to the corresponding anchor tag
      if( $(that).hasClass('articles') ) {
        $('.nav-articles').find('a').addClass('nav-active');
      } else if( $(that).hasClass('about') ){
        $('.nav-about').find('a').addClass('nav-active');
      } else if( $(that).hasClass('projects') ){
        $('.nav-work').find('a').addClass('nav-active');
      } else if( $(that).hasClass('contact') ){
        $('.nav-contact').find('a').addClass('nav-active');
      } else if( $(that).hasClass('testimonials') ){
        $('.nav-testimonials').find('a').addClass('nav-active');
      }
    }
  });

  // remove header nav if scrolling to intro section
  $('.intro').waypoint( function(direction) {
      $(header).removeClass('show-header');
    }, { offset: '-50%' }
  );

  var formMessageShown = false;
  // handle ajax form request

  function hasFormValidation() {
    return (typeof document.createElement( 'input' ).checkValidity == 'function');
  };

  
  $('#sendBtn').click(function(e) {

    //e.preventDefault();

    //check if html5 validation is available
    if( !hasFormValidation() ) {
      // doesn't cut the mustard, default to jquery validation

      $('#contactForm').validate({
        rules : {
          "fullname" : {
            required : true
          },
          "email" : {
            required : true,
            email : true
          },
          "message" : {
            required : true
          }
        },
        messages: {
           fullname: "A valid name is needed",
           email: "A valid email is needed.",
           message: "A comment or question is needed."
        }, 
        errorContainer: "#errorContainer",
        errorLabelContainer: "#errors",
        wrapper: "li",
        submitHandler: function(form) {
          sendForm();
        }
      });

    } else {

      // make sure form passes html5 validation
      if( $("form")[0].checkValidity() ) {

        sendForm();
        
        return false;
      } // end validity check
    }
    
  });

  function sendForm() {

    var btn = $('#sendBtn');

    btn.after("<progress class='progress'>Sending...</progress>");

    if( formMessageShown )
      $('.form-messaging').hide();

    btn.prop('disabled', true);

    var fullname = $("input#fullname").val();
    var email = $("input#email").val();
    var message = $("textarea#message").val();
    var dataString = 'formSubmitted=true&fullname='+ fullname + '&email=' + email + '&message=' + message;

    var request = $.ajax({
      type: "POST",
      url: 'contact.php',
      data: dataString,
      dataType: 'html'
    });


    request.done(function(msg) {
      $('.progress').hide();
      if( !formMessageShown ) {
        btn.after("<span class='form-messaging'>Thank you for your message!</span>");
        formMessageShown = true;
      }
      //$('.form-messaging').fadeIn().css('display', 'block');
      $('.form-messaging').css('display', 'block');

      $('#contactForm').find(':input:not(:disabled)').prop('disabled',true);
      //$('#contactForm')[0].reset();

    });

    request.fail(function( jqXHR, textStatus ) {

      $('.progress').hide();
      if( !formMessageShown ) {
        btn.after("<span class='form-messaging error-message'>My apologies, there was a problem. Please try sending again.</span>");
        formMessageShown = true;
      }
      
      //$('.form-messaging').fadeIn().css('display', 'block');
      $('.form-messaging').css('display', 'block');
      btn.prop('disabled', false);
    });

  }

}); // end jQuery ready


/* add html5 form validation fallback for browsers like Safari and mobile Sarafi
* http://blueashes.com/2013/web-development/html5-form-validation-fallback/
*/
function hasHtml5Validation () {
  return typeof document.createElement('input').checkValidity === 'function';
}

if (hasHtml5Validation()) {
  $('.validate-form').submit(function (e) {
    if (!this.checkValidity()) {
      e.preventDefault();
      $(this).addClass('invalid');
    } else {
      $(this).removeClass('invalid');
    }
  });
}



// handle intro section resizing based on browser window size
$(document).load($(window).bind("resize", throttle(resizeBackground, 1000)));

function resizeBackground() {

  viewportHeight = $(window).height();
  viewportWidth = $(window).width();

  //set .stars height and width
  $('.starImg').css( "height", viewportHeight+"px");
  $('.starImg').css( "width", viewportWidth+"px");

  var startHeight = 60;
  var logoHeight = $('.ryan').height();
  var padding = 42;
  var extraSpace;

  // figure out how much height is left for the ship to fill the space
  var shipHeight = viewportHeight - startHeight - logoHeight - padding;

  if(shipHeight > 398) {
  	extraSpace = shipHeight - 398;
  	shipHeight = 398;
  	$('.logo-holder').css( "margin-top", extraSpace/2+"px");
  } else {
  	$('.logo-holder').css( "margin-top", 0);
  }

  $('.intro').css( "height", viewportHeight+"px");

  $('.ship-and-lasers').css( "height", shipHeight+"px");

};

function throttle(func, wait, options) {
  var context, args, result;
  var timeout = null;
  var previous = 0;
  options || (options = {});
  var later = function() {
    previous = options.leading === false ? 0 : new Date;
    timeout = null;
    result = func.apply(context, args)
  };
  return function() {
    var now = new Date;
    if (!previous && options.leading === false) previous = now;
    var remaining = wait - (now - previous);
    context = this;
    args = arguments;
    if (remaining <= 0) {
      clearTimeout(timeout);
      timeout = null;
      previous = now;
      result = func.apply(context, args)
    } else if (!timeout && options.trailing !== false) {
      timeout = setTimeout(later, remaining)
    }
    return result
  }
};

resizeBackground();

// catch console.log if not acceptable by browser (example: IE8)
// http://stackoverflow.com/questions/690251/what-happened-to-console-log-in-ie8/14246240#14246240
(function (fallback) {    

    fallback = fallback || function () { };

    // function to trap most of the console functions from the FireBug Console API. 
    var trap = function () {
        // create an Array from the arguments Object           
        var args = Array.prototype.slice.call(arguments);
        // console.raw captures the raw args, without converting toString
        console.raw.push(args);
        var message = args.join(' ');
        console.messages.push(message);
        fallback(message);
    };

    // redefine console
    if (typeof console === 'undefined') {
        console = {
            messages: [],
            raw: [],
            dump: function() { return console.messages.join('\n'); },
            log: trap,
            debug: trap,
            info: trap,
            warn: trap,
            error: trap,
            assert: trap,
            clear: function() { 
                  console.messages.length = 0; 
                  console.row.length = 0 ;
            },
            dir: trap,
            dirxml: trap,
            trace: trap,
            group: trap,
            groupCollapsed: trap,
            groupEnd: trap,
            time: trap,
            timeEnd: trap,
            timeStamp: trap,
            profile: trap,
            profileEnd: trap,
            count: trap,
            exception: trap,
            table: trap
        };
    }

})(null);
