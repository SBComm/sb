function getNavItem(index) {
	return $('.main-nav li:nth-child('+index+') a');
}

function highlightNavItem(item) {
	$('.main-nav li a.selected').removeClass('selected');
	item.addClass('selected');
}

function doSmoothScroll(location,speed,urlPath) {

	var useOffset = 0;
	if($(window).width()>=960) {
		useOffset = $('header').outerHeight();
	} else {
		useOffset = $('.mobile-nav-bar').outerHeight();
	}

	$('body').scrollTo( location, speed, {
		axis:'y',
		easing: 'easeOutQuart',
		offset: -useOffset
	});
	if(Modernizr.history && urlPath) {
		history.pushState(null, null, urlPath);
	}
}

if(Modernizr.history) {
	window.addEventListener("popstate", function(e) {
		var theURL = window.location.href;
		//if URL contains people/ show the overlay with the last loaded information
		if(theURL.indexOf('people/') > -1) {
			showItem(overlayContainer);
		} else if(theURL.indexOf('?category=') > -1) { //else if 
			var filterValue = decodeURIComponent($.urlParam('category'));
			console.log(filterValue);
			var $container = $('.isotope');
			if(filterValue=='*') {
				$container.isotope({ filter: ':not(.show-all-trigger)' });
			} else {
				$container.isotope({ filter: function() {
					var category = $(this).attr('data-category');
					console.log(category);
					// return true to show, false to hide
					if(filterValue==category || category=="Show All") {
						return true;
					} else {
						return false;
					}
				}
				});
			}
			$('body').scrollTo( '0%', 400 );
		}
	});
}

var backgroundVideo = $('.background-video');
var fortyLogo = $('.marquee-logo-desktop');
var videoShowing = false;
var donePlaying = false;
var showQuote;
var checkPlayPosition;
var fadeInVideo;

function playTheVideo() {
	if(backgroundVideo.length) {
		var currentPlayTime = document.getElementById('forty-video').currentTime;
		console.log(donePlaying);
		if(!videoShowing && currentPlayTime > 0.1) {
			backgroundVideo.fadeIn(1000);
			videoShowing = true;
		} else if(videoShowing && currentPlayTime > 27) {
			backgroundVideo.fadeOut(1500);
			donePlaying = true;
			fortyLogo.removeClass('rotate-this');
			clearInterval(checkPlayPosition);
			showQuote = setInterval(showTheQuote,4000);
		} else if(videoShowing && currentPlayTime > 10) {
			fortyLogo.addClass('rotate-this');
		} 
	}
}

function doFadeInVideo() {
	backgroundVideo.fadeIn(3000);
	clearInterval(fadeInVideo);
}

function showTheQuote() {
	$('.quote').fadeIn(3000);
	clearInterval(showQuote);
	fadeInVideo = setInterval(doFadeInVideo,3000);
}

$(document).ready(function() {

	// Set up event gallery
	var flickrSetId = $('.event-gallery').attr('data-flickr-id');
	if(flickrSetId==='' || flickrSetId=='null' || flickrSetId===null || flickrSetId==='0') {
		flickrSetId = '72157649295457517';
	}
	getImgs(flickrSetId);

	/* navigation waypoints */
	var $archiveNav = $('.archive-nav');
	var $header = $('header');
	var headerOffset = $header.outerHeight();
	var navOffset = headerOffset + $archiveNav.outerHeight();

	//if the page is loaded with a hash in URL
	var hash = window.location.hash;
	if(hash!=='' && hash!='null' && hash!==null && hash!=='0' && hash!=='*') {
		var urlPath = hash.substring(1,hash.length);
		doSmoothScroll(hash,200,urlPath);
	}

	// scrollto hashtags
	$('[data-scroll-to="true"]').on('click',function(event) {
		event.preventDefault();
		var dataTarget = $(this).attr('href');
		var urlPath = dataTarget.substring(1,dataTarget.length);
		var dataSpeed = 800;
		doSmoothScroll(dataTarget,dataSpeed,urlPath);
		$(this).blur();
	});

	/* background video */
	if($(window).width()>=960 && Modernizr.history) {
		checkPlayPosition = setInterval(playTheVideo,100);
	}

	$('.stop-video-trigger').on('click',function() {
		if($(window).width()>=960 && backgroundVideo.is(':visible') && Modernizr.history) {
			fortyLogo.removeClass('rotate-this');
			clearInterval(checkPlayPosition);
			backgroundVideo.remove();
		}
	});

	/* quote */
	$('.close-quote').on('click',function(e) {
		e.preventDefault();
		$('.quote').fadeOut(1000);
	});

	/* waypoints */
	var theVideo = $('#forty-video');

	var waypoints = $('.honorees-grid-promo').waypoint({
		handler: function(direction) {
			if(direction=='down') {
				//console.log('Enter triggered with direction ' + direction);
				if(!($archiveNav.hasClass('hover'))) {
					//toggleElementDesktop($archiveNav);
				}
				if($(window).width()>=960 && theVideo.length && Modernizr.history) {
					theVideo.get(0).pause();
				}
			}
		},
		offset: headerOffset
	});

	waypoints = $('.honorees-grid-promo').waypoint({
		handler: function(direction) {
			if(direction=='up') {
				//console.log('Enter triggered with direction ' + direction);
				if(!($archiveNav.hasClass('hover'))) {
					//toggleElementDesktop($archiveNav);
				}
				if($(window).width()>=960 && theVideo.length && Modernizr.history) {
					theVideo.get(0).play();
				}
			}
		},
		offset: headerOffset
	});

	$header.mouseenter(function() {
		//$archiveNav.addClass('hover');

		if(!($archiveNav.hasClass('open'))) {
			//accessibleShowDesktop($archiveNav);
		}
	});

	$header.mouseleave(function() {
		//$archiveNav.removeClass('hover');

		var windowPosition = $(window).scrollTop();
		var gridPosition = $('.marquee').outerHeight();

		if($archiveNav.hasClass('open') && (windowPosition > gridPosition)) {
			//accessibleHideDesktop($archiveNav);
		}
	});

	/* overlay waypoints */
	var $elementToStickOver = $('.honorees-grid-promo');
	var $elementTopToRemoveSticky = $('.marquee');
	var $elementBottomToRemoveSticky = $('.attend-the-event');
	var $overlayControls = $('.overlay-controls');
	var $categoryNav = $('.category-nav-sticky');

	//stick the overlay controls
	/*
	var waypoints = $elementToStickOver.waypoint({
		handler: function(direction) {
			$elementToStick.addClass('stuck');
		},
		offset: function() {
			if($(window).width()>=960) {
				var offsetHeight = $('header').outerHeight();
			} else {
				var offsetHeight = $('.mobile-nav-bar').outerHeight();
			}
			console.log(offsetHeight);
			return offsetHeight;
		}
	});
	*/

	var inview = new Waypoint.Inview({
		element: $('.honorees-grid-promo')[0],
		enter: function(direction) {
			//top of target hits bottom
			if(direction=='down') {
				$overlayControls.removeClass('stuck');
			} else {
				$overlayControls.addClass('stuck');
			}
			//console.log('Enter triggered with direction ' + direction);
		},
		entered: function(direction) {
			//bottom of target hits bottom
			if(direction=='down') {
				$overlayControls.addClass('stuck');
				$categoryNav.removeClass('stuck');
			} else {
				$overlayControls.removeClass('stuck');
				/*$categoryNav.removeClass('stuck');*/
			}
			//console.log('Entered triggered with direction ' + direction);
		},
		exit: function(direction) {
			//top of target hits top
			if(direction=='down') {
				$overlayControls.addClass('stuck');
				$categoryNav.addClass('stuck');
			} else {
				$categoryNav.addClass('stuck');
			}
			//console.log('Exit triggered with direction ' + direction);
		},
		exited: function(direction) {
			//bottom of target hits top
			if(direction=='down') {
				$overlayControls.removeClass('stuck');
			} else {
				$categoryNav.removeClass('stuck');
			}
			//console.log('Exited triggered with direction ' + direction);
		}
	});

	//unstick the overlay controls 
	/*
	var waypoints = $elementTopToRemoveSticky.waypoint({
		handler: function(direction) {
			$elementToStick.removeClass('stuck');
		},
		offset: 'bottom-in-view'
	});
	var waypoints = $elementBottomToRemoveSticky.waypoint({
		handler: function(direction) {
			$elementToStick.removeClass('stuck');
		},
		offset: function() {
			if($(window).width()>=960) {
				var offsetHeight = $('header').outerHeight();
			} else {
				var offsetHeight = $('.mobile-nav-bar').outerHeight();
			}
			console.log(offsetHeight);
			return offsetHeight;
		}
	});
	*/

	var navItem_honorees = getNavItem(1);
	var section_honorees_top = $('.honorees-grid-promo');
	var section_honorees_bottom = $('.tweet-this');

	inview = new Waypoint.Inview({
		element: section_honorees_top,
		exit: function(direction) {
			//top of target hits top
			if(direction=='down') {
				highlightNavItem(navItem_honorees);
			}
		}
	});

	inview = new Waypoint.Inview({
		element: section_honorees_bottom,
		exit: function(direction) {
			//bottom of target hits bottom
			if(direction=='up') {
				highlightNavItem(navItem_honorees);
			}
		}
	});

	navItem_attend = getNavItem(2);
	section_attend = $('.attend-the-event');

	inview = new Waypoint.Inview({
		element: section_attend,
		exit: function(direction) {
			//top of target hits top
			if(direction=='down') {
				highlightNavItem(navItem_attend);
			} else {
				highlightNavItem(navItem_attend);
			}
		}
	});

	navItem_nominate = getNavItem(3);
	section_nominate = $('#nomination');

	inview = new Waypoint.Inview({
		element: section_nominate,
		exit: function(direction) {
			//top of target hits top
			if(direction=='down') {
				highlightNavItem(navItem_nominate);
			} else {
				highlightNavItem(navItem_nominate);
			}
		}
	});

	navItem_news = getNavItem(4);
	section_news = $('#news');

	inview = new Waypoint.Inview({
		element: section_news,
		exit: function(direction) {
			//top of target hits top
			if(direction=='down') {
				highlightNavItem(navItem_news);
			} else {
				highlightNavItem(navItem_news);
			}
		}
	});

	navItem_contact = getNavItem(5);
	section_contact = $('#contact');

	inview = new Waypoint.Inview({
		element: section_contact,
		entered: function(direction) {
			//top of target hits top
			if(direction=='down') {
			console.log('Entered triggered with direction ' + direction);
				highlightNavItem(navItem_contact);
			}
		}
	});

	//see if there is a scroll element passed in the URL
	var queryScroll = decodeURIComponent($.urlParam('scroll'));

	if(queryScroll!=='' && queryScroll!='null' && queryScroll!==null && queryScroll!=='0' && queryScroll!=='*') {
		queryScroll = '#'+queryScroll;
		window.location.href = queryScroll;
	}

});