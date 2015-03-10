/* fix for search-container position */
/* since the y-position of the .site-nav or the .sub-nav can vary due to possibility of double-lined site titles
// 1) get the height of the above .header-container */

var timeoutID;
var searchContainer = $('.search-container.default');
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
		console.log(1);
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

	/* global hashchange function with smooth scroll */
	$('a[href^="#"]').on('click',function(event) {
		var target = $(this).attr('href');
		if(target.length>1) {
			event.preventDefault();
		    var hash = target.substring(1); //strip off the #
		    //console.log(hash);
		    window.location.hash = "view-"+hash;

		    if($(this).data('trigger-role') == 'show-content') {
		    	$('#tabbed-nav-content li').removeClass('open');
		    	$(target).addClass('open');
		    	$('#tabbed-nav li').removeClass('selected');
		    	$(this).closest('li').addClass('selected');
		    	if($(this).data('trigger-scope') == 'desktop' && $(window).width()<1022) {
		    		$('body').scrollTo($(target), 800, {
				    	axis: 'y'
				    });
		    	}
		    } else {
		    	$('body').scrollTo($(target), 800, {
			    	axis: 'y'
			    });
		    }


		}
	});

	//on load, scroll to hash section
	//strip off the #view-
    var hash = window.location.hash.substring(6);
    if(hash!='') {
    	//get the element that has data-hash value of hash in URL
	    hashElement = $('[href="#'+hash+'"]');

	    $(hashElement).click();
    }

    //on hashchange, click the hash target
	$(function () {
	  var hashElement;
	  $(window).bind('hashchange', function () {
	    //get the element that has data-hash value of hash in URL
    	hash = window.location.hash.substring(6);
	    hashElement = $('[href="#'+hash+'"]');
	    $(hashElement).click();
	  });
	});

	/* nav */
	$('.more-trigger').on('click',function(){
		//console.log('clicked more-trigger');

		if($(window).width()>=1008) {
			if ( $audienceNav.is( ":visible" ) && $moreNav.is( ":hidden" ) ) {
				//console.log('audienceNav:visible and moreNav:hidden');
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
		$mainNavList = $('.main-nav-list');

        if($mainNavList.hasClass('open')) {
			icon.removeClass('fa-times');
			icon.addClass('fa-bars');
            $mainNavList.fadeIn(0,function(){
		      $mainNavList.removeClass('open')
		        .slideUp('fast',function() {
		            $mainNavList.addClass('hide-accessible-mobile').fadeIn('fast');
		        });
		    });
        } else {
			icon.removeClass('fa-bars');
			icon.addClass('fa-times');
            $mainNavList.fadeOut(0,function(){
		      $mainNavList.removeClass('hide-accessible-mobile').addClass('open')
		        .slideDown('fast');
		    });
        }

	});

    // section subnav

    $('.section-nav-trigger a').on('click',function(event){
        event.preventDefault();
        $(this).toggleClass('active');
        $sectionNav = $('.section-nav');

        if($sectionNav.hasClass('open')) {
            $sectionNav.fadeIn(0,function(){
              $sectionNav.removeClass('open')
                .slideUp('fast',function() {
                    $sectionNav.addClass('hide-accessible-mobile-960').fadeIn('fast');
                });
            });
        } else {
            $sectionNav.fadeOut(0,function(){
              $sectionNav.removeClass('hide-accessible-mobile-960').addClass('open')
                .slideDown('fast');
            });
        }

    });

    // Get the text of the currently selected section nav and update the dropdown
    if($('.section-nav .selected').length) {
    	$('.section-nav-trigger a').text($('.section-nav .selected').text());
    }

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
			if(!($(inputEl).hasClass('vasearch'))) {
				var queryString = inputEl.val();
				var searchUrl = "http://www.stonybrook.edu/search/?q="+queryString;
				event.preventDefault();
				event.stopPropagation();
				inputEl.val('').focusout();
				window.open(searchUrl, '_self');
			}
		}
	});

	$('.search-container input').keypress(function(event) {
		if (event.keyCode == 13) {
			var inputEl = $(this);
			if($(inputEl).val().length == 0) {
				event.preventDefault();
				inputEl.focus();
			} else {
				if(!($(inputEl).hasClass('vasearch'))) {
					var queryString = inputEl.val();
					var searchUrl = "http://www.stonybrook.edu/search/?q="+queryString;
					event.preventDefault();
					event.stopPropagation();
					inputEl.val('').focusout();
					window.open(searchUrl, '_self');
				}
			}
		}
	});

	/* Scalable use of accordion-style slideUp/slideDown with hide-accessible */

	var triggerEl, triggerTarget, triggerClass;

	$('[data-accordion-trigger="true"]').on('click',function(event){
		$triggerEl = $(this);
		$triggerTarget = $('.' + $triggerEl.data('target'));
		screenSize = $triggerEl.data('screen-size');

		if(screenSize=='mobile') {
	        if($(window).width()>=1022) {
	            return false;
	        }
	    }

        if($triggerTarget.hasClass('open')) {
            $triggerTarget.fadeIn(0,function(){
              $triggerEl.removeClass('open');
		      $triggerTarget.removeClass('open')
		        .slideUp('fast',function() {
		            $triggerTarget.addClass('hide-accessible-mobile').fadeIn('fast');
		        });
		    });
        } else {
            $triggerTarget.fadeOut(0,function(){
              $triggerEl.addClass('open');
		      $triggerTarget.removeClass('hide-accessible-mobile').addClass('open')
		        .slideDown('fast');
		    });
		    $('body').scrollTo( $triggerEl, 200, {axis: 'y'} );
        }

	});

	/* Partial Print */

	$('.partial-print-trigger').on('click',function() {
		var printTarget = $(this).attr('data-partial-print-target');
		$(this).closest(printTarget).addClass('partial-print-target');
		$('body').addClass('hide-for-print');
		window.print();
		$(this).closest(printTarget).removeClass('partial-print-target');
		$('body').removeClass('hide-for-print');
		
	});

	/* Proofing */
	$('#proofing-message .close-proofing-message').on('click',function() {
		$('#proofing-message').slideUp(400);

	});
	$('#alert-message .close-alert-message').on('click',function() {
		$('#alert-message').slideUp(400);
	});
	/* Eco dev */
	$('.show-center-info').click(function(event) {
		event.preventDefault();
		$('.center-info').slideToggle();
		$(this).toggleClass('selected');
	});
});