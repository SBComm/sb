// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

/* From http://codepen.io/micahgodbolt/pen/FgqLc */
/* Thanks to CSS Tricks for pointing out this bit of jQuery
http://css-tricks.com/equal-height-blocks-in-rows/
It's been modified into a function called at page load and then each time the page is resized. One large modification was to remove the set height before each new calculation. */

equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
 $(container).each(function() {

   $el = $(this);
   $($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

/* From http://www.jquery4u.com/snippets/url-parameters-jquery/ */
/* Usage:
   $('#city').val(decodeURIComponent($.urlParam('city')));
*/

$.urlParam = function(name){
    var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null){
       return null;
    }
    else{
       return results[1] || 0;
    }
}

/* Replace chars */
/* From http://stackoverflow.com/questions/1144783/replacing-all-occurrences-of-a-string-in-javascript */
function escapeRegExp(string) {
  return string.replace(/([.*+?^=!:${}()|\[\]\/\\])/g, "\\$1");
}
function replaceAll(string, find, replace) {
  return string.replace(new RegExp(escapeRegExp(find), 'g'), replace);
}

/* to-top smooth scroll link */

$(document).ready(function() {

  /* totop scroller */
  var didScroll = false;
 
  $(window).scroll(function() {
      didScroll = true;
  });
   
  setInterval(function() {
      if ( didScroll ) {
          didScroll = false;
      if ($(this).scrollTop() > 100) {
        $('#totop').removeClass('invisible');
      } else {
        $('#totop').addClass('invisible');
      }
      }
  }, 1250);

  $('#totop').on('click',function(event) {
    $('body').scrollTo( '0px', 1000, {easing:'easeOutQuad'} );
  });

  //do the JS

});

/* Digits Only Input */

$(".digits").keydown(function(event) {
  // Allow only backspace and delete
  if ( event.keyCode == 46 || event.keyCode == 8 ) {
  // let it happen, don't do anything
  }
  else if (event.keyCode < 48 || event.keyCode > 57 ) {
    event.preventDefault(); 
  }
});

/* String includes */
/* From https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/includes */

if (!String.prototype.includes) {
  String.prototype.includes = function(search, start) {
    'use strict';
    if (typeof start !== 'number') {
      start = 0;
    }
    
    if (start + search.length > this.length) {
      return false;
    } else {
      return this.indexOf(search, start) !== -1;
    }
  };
}