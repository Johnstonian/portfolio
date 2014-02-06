$(function() {
  $('.startBtn').click( function (event) {
    event.preventDefault();
    $(window).scrollTo("#article-section", 800);
  });
});


$(document).load($(window).bind("resize", throttle(resizeBackground, 1000)));

function resizeBackground() {
  console.log("you resized me");

  viewportHeight = $(window).height();
  viewportWidth = $(window).width();

  //set .stars height and width
  $('.starImg').css( "height", viewportHeight+"px");
  $('.starImg').css( "width", viewportWidth+"px");

  //console.log("new height: " + viewportHeight + " | new width: " + viewportWidth);

  console.log("start height" + $('.start').height());
  console.log("ryan height" + $('.ryan').height());

  var startHeight = 60;
  var logoHeight = $('.ryan').height();
  var padding = 32;
  var extraSpace;

  // figure out how much height is left for the ship to fill the space
  var shipHeight = viewportHeight - startHeight - logoHeight - padding;

  console.log("shipHeight: " + shipHeight);

  if(shipHeight > 398) {
  	extraSpace = shipHeight - 398;
  	shipHeight = 398;
  	$('.logo-holder').css( "margin-top", extraSpace/2+"px");
  	console.log("extraSpace: " + extraSpace);
  } else {
  	$('.logo-holder').css( "margin-top", 0);
  }

  $('.intro').css( "height", viewportHeight+"px");

  $('.lasers').css( "height", shipHeight+"px");

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