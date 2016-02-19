$(document).ready(function() {

	/* navigation waypoints */

	var $archiveNav = $('.archive-nav');
	var $header = $('header');

	var headerOffset = $header.outerHeight();
	var navOffset = headerOffset + $archiveNav.outerHeight();

	var waypoints = $('.honorees-grid').waypoint({
		handler: function(direction) {
			if(direction=='down') {
				//console.log('Enter triggered with direction ' + direction);
				if(!($archiveNav.hasClass('hover'))) {
					//toggleElementDesktop($archiveNav);
					$header.toggleClass('showing-all');
				}
			}
		},
		offset: headerOffset
	});

	waypoints = $('.honorees-grid').waypoint({
		handler: function(direction) {
			if(direction=='up') {
				//console.log('Enter triggered with direction ' + direction);
				if(!($archiveNav.hasClass('hover'))) {
					//toggleElementDesktop($archiveNav);
					$header.toggleClass('showing-all');
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

	var $elementToStickOver = $('.bio-overlay');
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
			//console.log(offsetHeight);
			return offsetHeight;
		}
	});
	*/

	var inview = new Waypoint.Inview({
		element: $('.bio-overlay')[0],
		enter: function(direction) {
			//top of target hits bottom
			if(direction=='down') {
				$overlayControls.removeClass('stuck');
				$categoryNav.addClass('stuck');
			} else {
				$overlayControls.addClass('stuck');
			}
			//console.log('Enter triggered with direction ' + direction);
		},
		entered: function(direction) {
			//bottom of target hits bottom
			if(direction=='down') {
				$overlayControls.addClass('stuck');
				//$categoryNav.removeClass('stuck');
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
			//console.log(offsetHeight);
			return offsetHeight;
		}
	});
	*/
});