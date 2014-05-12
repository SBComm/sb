//Josh Palmeri
//2014.03.26

/* From http://codepen.io/micahgodbolt/pen/FgqLc */
/* Thanks to CSS Tricks for pointing out this bit of jQuery
http://css-tricks.com/equal-height-blocks-in-rows/
It's been modified into a function called at page load and then each time the page is resized.
One large modification was to remove the set height before each new calculation. */

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

$( document ).ready(function() {
	equalheight('li.social-other-item');

	$(".bottom-fade").mouseenter( function(e) {
		$(this).find('.sbu-cta').addClass('active');
	});
	$(".bottom-fade").mouseleave( function(e) {
		$(this).find('.sbu-cta').removeClass('active');
	});
    $(".bottom-fade").on('click', function(e) {
		$(".dcsns").removeClass('shorten');
		$(".bottom-fade").remove();
	});
});

$(window).load(function() {
	$('#media-column_1').addClass('equal-height-col');
	$('#media-column_2').addClass('equal-height-col');
	equalheight('.equal-height-col');
});


$(window).resize(function(){
	equalheight('li.social-other-item');
});
