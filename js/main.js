/* fix for search-container position */
/* since the y-position of the .site-nav or the .sub-nav can vary due to possibility of double-lined site titles
// 1) get the height of the above .header-container */

var timeoutID;
var searchContainer = $('.search-container');
var configuredSearch = false;

function setSearchPosition() {
	timeoutID = window.setTimeout(configureSearchPosition, 750);
}

function configureSearchPosition() {
	if(configuredSearch) {
		searchContainer.removeClass('set-top-0');
		return;
	}

	var headerContainer = $('.header-container');
	var headerContainerHeight = headerContainer.height();
	
	//formula is top = h - 2h - 2
	searchContainerTop = headerContainerHeight - (headerContainerHeight * 2) - 2;
	var cssFriendlyTop = searchContainerTop + "px";

	searchContainer.css( { top : cssFriendlyTop } );

	configuredSearch = true;
}

function resetSearchPosition() {
	searchContainer.addClass('set-top-0');
}

function clearSearchPositionTimer() {
	window.clearTimeout(timeoutID);
}

/* reset height of .more-nav to prevent padding jump on slideDown() */
var $moreNav = $('.more-nav');
//var moreNavHeight = $moreNav.height();
/*$moreNav.hide().css('height',0);*/

var $audienceNav = $('.audience-nav');

/* ready! */

$(document).ready(function() {

	if($(window).width()>=1022) {
		setSearchPosition();
	}

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

	/* nav */
	$('.more-trigger').on('click',function(){
		//console.log('clicked more-trigger');

		if($(window).width()>=1008) {
			if ( $audienceNav.is( ":visible" ) && $moreNav.is( ":hidden" ) ) {
				console.log('audienceNav:visible and moreNav:hidden');
				$('.audience-trigger').click();
			}
		}

		if ( $moreNav.is( ":hidden" ) ) {
			$moreNav.slideDown();
			//$moreNav.show().animate({ height : moreNavHeight }, { duration: 600 });
			$(this).addClass('selected');
		} else {
			$moreNav.slideUp();
			/*$moreNav.animate({ height: 0 }, { duration: 600, complete: function () {
		        $moreNav.hide();
		      } 
		    });*/
			$(this).removeClass('selected');
		}
	});

	$('.audience-trigger').on('click',function(){
//console.log('clicked audience-trigger');
		if($(window).width()>=1008) {
			if ( $moreNav.is( ":visible" ) && $audienceNav.is( ":hidden" ) ) {
				//console.log('audienceNav:hidden and moreNav:visible');
				$('.more-trigger').click();
			}
		}

		if ( $audienceNav.is( ":hidden" ) ) {
			$(this).find('.fa-caret-right').addClass('fa-caret-up').removeClass('fa-caret-right');
			$(this).closest('li').prev().addClass('before-selected');
			$audienceNav.slideDown();
			$(this).addClass('selected');
		} else {
			$(this).find('.fa-caret-up').removeClass('fa-caret-up').addClass('fa-caret-right');
			$audienceNav.slideUp();
			$(this).removeClass('selected');
		}
	});

	$('.menu-trigger').on('click',function(event){
		$(this).toggleClass('selected');
		var icon = $(this).find('.icon');
		if ( $('.main-nav-list').is( ":hidden" ) ) {
			$('.main-nav-list').slideDown();
			icon.removeClass('fa-bars');
			icon.addClass('fa-times');
		} else {
			$('.main-nav-list').slideUp();
			icon.removeClass('fa-times');
			icon.addClass('fa-bars');
		}
	});

	$('input[type="text"]').on('focus',function() {
		$(this).addClass('focus');
	}).on('focusout',function() {
		if($(this).val().length == 0) {
			$(this).removeClass('focus');
		}
	});

	$('.search-container button').on('click',function(event) {
		var inputEl = $(this).closest('.search-container').find('input');
		if($(inputEl).val().length == 0) {
			event.preventDefault();
			inputEl.focus();
		} else {
		   var queryString = inputEl.val();
		   var searchUrl = "http://www.stonybrook.edu/search/?q="+queryString;
		   inputEl.val('').focusout();
	       window.open(searchUrl, '_self');
		}
	});

	$('.search-container input').keypress(function(event) {
		if (event.keyCode == 13) {
			var inputEl = $(this);
			if($(inputEl).val().length == 0) {
				event.preventDefault();
				inputEl.focus();
			} else {
			   var queryString = inputEl.val();
			   var searchUrl = "http://www.stonybrook.edu/search/?q="+queryString;
		       event.preventDefault();
		       event.stopPropagation();
		       inputEl.val('').focusout();
		       window.open(searchUrl, '_self');
			}
		}
	});

	/* Eco dev */
	$('.show-center-info').click(function(event) {
		event.preventDefault();
		$('.center-info').slideToggle();
		$(this).toggleClass('selected');
	});

});