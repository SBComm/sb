/* add userAgent to html data attr */
var doc = document.documentElement;
doc.setAttribute('data-useragent', navigator.userAgent);

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

function toggleAccessible(element) {
	if(element.hasClass('open')) {
        element.fadeIn(0,function(){
	    	element.removeClass('open').fadeOut(200,function() {
	            element.addClass('hide-accessible').fadeIn(0);
	        });
	    });
    } else {
        element.fadeOut(0,function(){
	    	element.removeClass('hide-accessible').addClass('open').fadeIn(350);
	    });
    }
}

function toggleAccessibleSlide(element) {
	if(element.hasClass('open')) {
        element.fadeIn(0,function(){
          element.removeClass('open')
            .slideUp('fast',function() {
                element.addClass('hide-accessible').fadeIn('fast');
            });
        });
    } else {
        element.fadeOut(0,function(){
          element.removeClass('hide-accessible').addClass('open')
            .slideDown('fast');
        });
    }
}

function scrollToTop(scrollToClass) {
	$('body').scrollTo( scrollToClass, 500, {
		easing:'easeOutQuad', 
		axis: 'y'
	} );
}

function setPageMetaTags(newTitle, newDesc, newURL, newImageURL, includeOgTags) {
	$("title").text(newTitle);
	$("meta[name='description']").attr("content", newDesc);
	if(includeOgTags) {
		$("meta[property='og\\:title']").attr("content", newTitle);
		$("meta[property='og\\:description']").attr("content", newDesc);
		$("meta[property='og\\:url']").attr("content", newURL);
		$("meta[property='og\\:image']").attr("content", newImageURL);
	}
}

function setTwitterURL(twitterTitle,twitterUrl,$twitterLink) {
	var tweetHref = 'http://twitter.com/share?url='+twitterUrl;
	$twitterLink.attr('href',tweetHref);
}

function pageHasCarousel() {
	var carouselIDs = [
							"#the-carousel-1",
							"#the-carousel-2",
							"#the-carousel-3",
							"#the-carousel-4"
						 ];
	$(carouselIDs).each(function(index,id) {
		if($(id).length){
			//console.log(id);
		}
	});
}

function hasFlexbox() {
	return ($('html').hasClass('flexbox'));
}

function hasNoFlexbox() {
	return ($('html').hasClass('no-flexbox'));
}

function setContainerHeight(numColumns, flexList) {
	var $containerEl = 	flexList;
	var totalHeight = 	0;
	$containerEl.children('li').each(function() {
		totalHeight += $(this).outerHeight();
		//console.log(totalHeight);
	});
		var numItems = 		$containerEl.children('li:visible').length;
	totalHeight = (totalHeight / numColumns) + (1.7 * (totalHeight / numItems)); //add the average height of an li for extra margin
	$containerEl.height(totalHeight);
}

function initializeFlexList(eventType) {
	if(hasFlexbox() || !hasNoFlexbox()) {
		var ww = $(window).width();
		$('ul[class^="flex-list"]').each(function() {
			var thisList = $(this);
			if(thisList.hasClass('flex-list-2')) {
				if(ww>=768) {
					setContainerHeight(2, thisList);
				} else {
					setContainerHeight(1, thisList);
				}	
			} else if(thisList.hasClass('flex-list-3')) {
				if(ww>=768 && ww<960) {
					setContainerHeight(2, thisList);
				} else if(ww>=960) {
					setContainerHeight(3, thisList);
				} else {
					setContainerHeight(1, thisList);
				}
			} else if(thisList.hasClass('flex-list-4')) {
				if(ww>=560 && ww<768) {
					setContainerHeight(2, thisList);
				} else if(ww>=768 && ww<960) {
					setContainerHeight(3, thisList);
				} else if(ww>=960) {
					setContainerHeight(4, thisList);
				} else {
					setContainerHeight(1, thisList);
				}
			}
		});
	}
	if(eventType=='load') {
		if(!(hasFlexbox() || !hasNoFlexbox())) {
			$('*[class^="flex-list"]').css('height','auto, !important');
		}
	}
}

$(window).load(function(){
	initializeFlexList('load');
	$(".sticky").sticky({ topSpacing: 0 });
});

$(window).resize(function(){
	initializeFlexList('resize');
});

function doBreadcrumbs() {
	var crumbContainerWidth = 0;
	$('.breadcrumbs__crumb').each(function() {
		crumbContainerWidth += $(this).outerWidth();
	});
	crumbContainerWidth = crumbContainerWidth + 5; //pad it for rounding
	$('.breadcrumbs__wrapper').width(crumbContainerWidth);
}

/* reset height of .more-nav to prevent padding jump on slideDown() */
var $moreNav = $('.header-container .more-nav-v3');
//var moreNavHeight = $moreNav.height();
/*$moreNav.hide().css('height',0);*/

var $audienceNav = $('.audience-nav');

/* ready! */

$(document).ready(function() {
	initReady();
});

var initReady = function() {

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

	/* global hashchange function with smooth scroll */
	$('a[href^="#"], a.smooth-scroll-hash').on('click',function(event) {
		var target = $(this).attr('href');
		target = target.substring(target.indexOf('#'));
		var isTrigger = $(this).hasClass('is-trigger');
		var isGallery = $(this).hasClass('nivo-lightbox');
		var triggerRole = $(this).attr('data-trigger-role');
		var disableHistoryState = $(this).attr('data-disable-history-state');
		var offset = $(this).attr('data-offset')=='true' ? true : false;
		var offsetTop = parseInt($(this).attr('data-offset-top'));
		var offsetBreakpointStart = $(this).attr('data-offset-breakpoint-start') ? parseInt($(this).attr('data-offset-breakpoint-start')) : 0;
		var isScroll = ($(this).data('scroll') != false);
		/*
		console.log(isTrigger);
		console.log(triggerRole);
		console.log(disableHistoryState);
		console.log(offset);
		console.log(offsetTop);
		console.log(offsetBreakpointStart);
		console.log($(window).width() >= offsetBreakpointStart);
		*/
		if($(target).length && target.length>1 && !isTrigger && !isGallery && isScroll) {
			/*event.preventDefault();
		    var hash = target.substring(1); //strip off the #
		    if(disableHistoryState != 'true') {
		    	window.location.hash = "view-"+hash;
		    }*/

		    if(triggerRole == 'show-content') {
		    	$('#tabbed-nav-content li').removeClass('open');
		    	$(target).addClass('open');
		    	$('#tabbed-nav li').removeClass('selected');
		    	$(this).closest('li').addClass('selected');
	    		$('body').scrollTo($(target), 400, {
			    	axis: 'y'
			    });
		    } /*else if(offset) {
		    	if(offsetTop && ($(window).width() >= offsetBreakpointStart)) {
		    		$('body').scrollTo($(target), 400, {
				    	axis: 'y',
				    	offset: {
				    		top: offsetTop
				    	}
				    });
				    $(target).focus();
		    	} else  {
			    	$('body').scrollTo($(target), 400, {
				    	axis: 'y'
				    });
				    $(target).focus();
				}
		    } else {
		    	$('body').scrollTo($(target), 400, {
			    	axis: 'y'
			    });
			    $(target).focus();
		    }*/

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
			if ( $audienceNav.is( ":visible" ) && $moreNav.hasClass('hide-accessible') ) {
				//console.log('audienceNav:visible and moreNav:hidden');
				$('.audience-trigger').click();
			}
		}

		$(this).toggleClass('selected');
		if ( $moreNav.hasClass('hide-accessible') ) {
			$(this).find('.fa-caret-right').addClass('fa-caret-up').removeClass('fa-caret-right');
			toggleAccessibleSlide($moreNav)
		} else {
			$(this).find('.fa-caret-up').removeClass('fa-caret-up').addClass('fa-caret-right');
			toggleAccessibleSlide($moreNav)
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
        $sectionNav = $(this).parent().next('.section-nav');

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
				var searchUrl = "https://www.stonybrook.edu/search/?q="+queryString;
				event.preventDefault();
				event.stopPropagation();
				inputEl.val('').focusout();
				window.open(searchUrl, '_self');
			}
		}
		$('.inmenu--logins').find('.mp-level').addClass('hide-accessible-1160');
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
					var searchUrl = "https://www.stonybrook.edu/search/?q="+queryString;
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

	// To top trigger
	// See footer-scripts.js for totop listener
	$('.to-top-trigger').on('click',function(event) {
		event.preventDefault();
		var scrollToClass = '0px';
		var scrollToTarget = $(this).attr('data-scroll-to-target');
		
		if (typeof scrollToTarget != 'undefined') {
			scrollToClass = scrollToTarget;
		}
		scrollToTop(scrollToClass);
	});

	// Popstate back triggeer
	$('.popstate-back-trigger').on('click',function(event) {
		if(Modernizr.history) {
			event.preventDefault();
	    	history.back();
	    }
	});

	// Make Space and Enter activate the role='button' click handler
    $("[role='button']").keydown(function(event) {
        if(event.which==13) {
            $(this).click();
        }
    });

    $('.caption-snippet__text__button').on('click',function() {
    	var $c = $(this).closest('.caption-snippet');
    	$c.find('.caption-snippet__text').hide();
    	$c.find('.caption-snippet__caption').removeClass('hide-accessible');
    });

	/* Partial Print */
	$('.partial-print-trigger').on('click',function(event) {
		event.preventDefault();
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

	/* map overlay */
	$('.map-container-full--remove-overlay').on('click',function() {
		$(this).closest('.map-container-full--disable-zoom-overlay').remove();
	});
	$('.map-container-full--show-options').on('click',function() {
		$(this).hide().closest('.map-container-full--disable-zoom-overlay').addClass('map-container-full--disable-zoom-overlay_grey-background').find('.map-container-full--button-options').fadeIn(1000);
	});

	$('.do-live-filter-search-term').on('click',function() {

		var dataFilterID = $(this).closest('.key-icons').attr('data-filter-input-id');

		if(dataFilterID==undefined) {
			$('#live-filter-search').val($(this).attr('data-live-filter-term')).change();
			$('.do-live-filter-search-term').removeClass('selected');
			$(this).addClass('selected');
		} else {
			var $inputFilterEl = $('#'+dataFilterID);
			console.log($inputFilterEl);
			$inputFilterEl.val($(this).attr('data-live-filter-term')).change();
			$('.do-live-filter-search-term').removeClass('selected');
			$(this).addClass('selected');
		}

	});

	/* Accessibility override for keyboard on lightboxes */
	// on enter press, open the URL, don't use the lightbox
	$(document.body).on('keydown',function(e) {
		var $focusedEl = $(':focus');
        console.log($focusedEl);
        if( e.keyCode == 13 && $focusedEl.hasClass('nivo-lightbox') && $focusedEl.attr('data-lightbox-gallery')=='full-width-popup-gallery' ) {
            var newURL = $focusedEl.attr('href');
            window.open(newURL, '_self');
        }
	});
};