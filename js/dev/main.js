$(function() {
  // handle start button click
  $('.startBtn').click( function(e) {
    e.preventDefault();
    $(window).scrollTo("#article-section", 800, {
      onAfter:function() {
        $('.header').fadeIn();
      }
    });
  });

  // handle nav item clicks
  $('.header a').click( function(e) {
    e.preventDefault();

    var $this = this.hash;

    $(window).scrollTo($this, 800, { offset: {top: -50} } );

    if( $this == '#intro-section' ) {
      // hide header bar
      $('.header').fadeOut();
    }
  });
});


$(document).load($(window).bind("resize", throttle(resizeBackground, 1000)));

function resizeBackground() {
  //console.log("you resized me");

  viewportHeight = $(window).height();
  viewportWidth = $(window).width();

  //set .stars height and width
  $('.starImg').css( "height", viewportHeight+"px");
  $('.starImg').css( "width", viewportWidth+"px");

  //console.log("new height: " + viewportHeight + " | new width: " + viewportWidth);

  //console.log("start height" + $('.start').height());
  //console.log("ryan height" + $('.ryan').height());

  var startHeight = 60;
  var logoHeight = $('.ryan').height();
  var padding = 32;
  var extraSpace;

  // figure out how much height is left for the ship to fill the space
  var shipHeight = viewportHeight - startHeight - logoHeight - padding;

  //console.log("shipHeight: " + shipHeight);

  if(shipHeight > 398) {
  	extraSpace = shipHeight - 398;
  	shipHeight = 398;
  	$('.logo-holder').css( "margin-top", extraSpace/2+"px");
  	//console.log("extraSpace: " + extraSpace);
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
