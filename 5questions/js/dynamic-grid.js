var promoContentVisible = true;

/* replace UrlChars */
function setUrlChars(string) {
  string = replaceAll(string, '-', ' ');
  string = replaceAll(string, 'and', '&');
  return string;
}

/* replace UrlChars */
function setUrlCharsBack(string) {
  string = replaceAll(string, ' ', '-');
  string = replaceAll(string, '&', 'and');
  return string;
}

/* replace UrlChars */
function replaceUrlChars(string) {
  string = replaceAll(string, '%20', '-');
  string = replaceAll(string, '%26', 'and');
  return string;
}

function setCategoryLabels(categoryLabel) {
	categoryLabel = categoryLabel=='*' ? 'The Interviews' : categoryLabel;
	$('.honorees-grid > h2 .text').text(categoryLabel);
	$('.show-all-trigger .category').text(categoryLabel);
}

function getHonoreeByFilename(filename) {
	return $('.honoree-box[data-filename="'+filename+'"]');
}

function getBioData(item) {
	if(promoContentVisible) {
		hidePromoContent();
	}
	showItem($('.loader'));
	var filename = item.attr('data-filename');
	var fileExt = 'php';
	var linkHref = item.attr('href');

	var theURL = 'profile.php/?name=' + filename;

	var newTitle = getNewTitle(item);

	var theItemToLoad = theURL + ' .bio-overlay > *';
	var overlayContainer = $('.bio-overlay');
	var result = overlayContainer.load(theItemToLoad, function(response, status, xhr) {
		if ( status == "error" ) {
			//console.log('Error: ' + xhr.status + " " + xhr.statusText );
		} else {
			showItem(overlayContainer);
			bodyScroll('disable-mobile');
			setBioContainerHeight();
			$('body').scrollTo( '0%', 500 );
			setUpListeners();
			setUpWaypoints();
			appendNextAndPrevNavigation(item);
			if(Modernizr.history) {
				history.pushState(null, newTitle, linkHref);
			}
			setNewTitle(newTitle);
			//ga('send', 'pageview', location.pathname);
		}
		closeItem($('.loader'));
	});
}

function hidePromoContent() {
	$('.all-promo-content').css('display','none');
	promoContentVisible = false;
}

function popstateBioDataByName(name) {
	var honoreeBox = $('a.honoree-box[data-filename="'+name+'"]');
	var linkHref = honoreeBox.attr('href');
	var theURL = 'profile.php/?name=' + name;

	var newTitle = getNewTitle(honoreeBox);

	var theItemToLoad = theURL + ' .bio-overlay > *';
	var overlayContainer = $('.bio-overlay');
	var result = overlayContainer.load(theItemToLoad, function(response, status, xhr) {
		if ( status == "error" ) {
			//console.log('Error: ' + xhr.status + " " + xhr.statusText );
		} else {
			showItem(overlayContainer);
			bodyScroll('disable-mobile');
			setBioContainerHeight();
			$('body').scrollTo( '0%', 50 );
			setUpListeners();
			setUpWaypoints();
			appendNextAndPrevNavigation(honoreeBox);
			setNewTitle(newTitle);
			//ga('send', 'pageview', location.pathname);
		}
		closeItem($('.loader'));
	});
}

function setUpListeners() {
	//back button to close overlay
	$('.overlay-control.back').on('click',function(e) {
		e.preventDefault();
		//unser and reset video frame source to stop video play
		var currentVideoFrame = $('.bio-overlay .video-wrapper iframe');
		var currentVideoFrameSrc = currentVideoFrame.attr('src');
		currentVideoFrame.attr('src','');
		currentVideoFrame.attr('src',currentVideoFrameSrc);
		//close overlay
		closeItem($('.bio-overlay'));
		bodyScroll();
		var category = ($('.overlay-controls h3').attr('data-category'));
	    var theURL = '';
	    if(Modernizr.history) {
	    	history.pushState(null, null, theURL);
			setNewTitle('5 Questions With | Stony Brook University');
	    }
	});

	$('.overlay-control.category').on('click',function(e) {
		e.preventDefault();
		if($(window).width()>=960) {
			$('body').scrollTo( '120%', 400 );
			$('.category-nav').addClass('hover');
		} else {
			showItem($('.category-nav'));
			showItem($('.category-nav .close'));
		}
	});

	$('.category-nav').mouseenter(function() {
		if($(this).hasClass('hover')) {
			$(this).removeClass('hover');
		}
	});

	$('.overlay-controls h3').on('click', function() { 
		var thisCategory = $(this).attr('data-category');
		$('.filters button[data-filter="'+thisCategory+'"]').trigger('click');
	});

	$('.category-nav h3').on('click',function() {
		if($(window).width()<960) {
			showItem($('.category-nav'));
			showItem($('.category-nav .close'));
			bodyScroll('disable-mobile');
		}
	});

	$('.category-nav .close').on('click',function(e) {
		e.preventDefault();
		closeItem($('.category-nav'));
		closeItem($('.category-nav .close'));
		bodyScroll();
	});

	$('.back-button-trigger').on('click',function(e) {
		if(Modernizr.history) {
			e.preventDefault();
			history.back();
		}
	});

	$('.filters').on( 'click', 'button', function() { 
		if(promoContentVisible) {
			hidePromoContent();
		}
		var newTitle = $(this).attr('data-filter');
		setNewTitle(addGenericTitle(newTitle));
		//ga('send', 'pageview', location.pathname);
	});

	$('.overlay .social-share a').on('click',function() {
		window.open(this.href, "Share", "width=600, height=600");
	});

	$('.nivo-lightbox').nivoLightbox();
}

function setBioContainerHeight() {
	var bioOverlay = $('.bio-overlay');
	var totalHeight = 0;
	$('.bio-overlay > div').each(function() {
		totalHeight = totalHeight + $(this).outerHeight();
	});
	totalHeight = totalHeight + 120;
	//bioOverlay.css('min-height',totalHeight+'px');
}

if(Modernizr.history) {
	window.addEventListener("popstate", function(e) {
		var $container = $('.isotope');
		overlayContainer = $('.bio-overlay');
		var isOverlayShowing = overlayContainer.hasClass('show');
		var theURL = window.location.href;
		var thisName, catIndex;
		//if URL contains people/ show the overlay with the last loaded information
		if(theURL.indexOf('?people') > -1) {
			thisName = decodeURIComponent($.urlParam('name'));
			popstateBioDataByName(thisName);
			showItem(overlayContainer);
			bodyScroll('disable-mobile');
			setBioContainerHeight();
			setNewTitle(addGenericTitle(getNewTitle(getHonoreeByFilename(thisName))));
		} else if(theURL.indexOf('/people') > -1) {
			catIndex = theURL.indexOf('/people') + 8;
			thisName = theURL.substring(catIndex, theURL.length);
			//console.log(thisName);
			popstateBioDataByName(thisName);
			showItem(overlayContainer);
			bodyScroll('disable-mobile');
			setBioContainerHeight();
			setNewTitle(addGenericTitle(getNewTitle(getHonoreeByFilename(thisName))));
		} else if(theURL.indexOf('/category') > -1) {
			catIndex = theURL.indexOf('/category') + 10;
			var filterValue = theURL.substring(catIndex, theURL.length);
			filterValue = setUrlChars(filterValue);
			if(filterValue=='*') {
				$container.isotope({ filter: ':not(.show-all-trigger)' });
				setNewTitle('5 Questions With | Stony Brook University');
			} else {
				$container.isotope({ filter: function() {
					var category = $(this).attr('data-category');
					// return true to show, false to hide
					if(filterValue==category || category=="Show All") {
						return true;
					} else {
						return false;
					}
				}
				});
				setNewTitle(addGenericTitle(filterValue));
			}
			$('body').scrollTo( '0%', 400 );
			setCategoryLabels(filterValue);
			if(isOverlayShowing) {
		    	closeItem(overlayContainer);
				bodyScroll();
		    }
			//ga('send', 'pageview', location.pathname);
		} else {
			$container.isotope({ filter: ':not(.show-all-trigger)' });
			closeItem(overlayContainer);
			bodyScroll();
			setNewTitle('5 Questions With | Stony Brook University');
		}

	});
}

function setUpWaypoints() {
	var $overlayControls = $('.overlay-controls');
	var inview = new Waypoint.Inview({
		element: $('.bio-overlay')[0],
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
			} else {
			}
			//console.log('Exit triggered with direction ' + direction);
		},
		exited: function(direction) {
			//bottom of target hits top
			if(direction=='down') {
				$overlayControls.removeClass('stuck');
			} else {
			}
			//console.log('Exited triggered with direction ' + direction);
		}
	});
}

$(document).ready(function() {

	//Application script for viewing bio data
	$honoreeTrigger = $('.honoree-box');
	$overlayContainer = $('.bio-overlay');

	$honoreeTrigger.on('click', function(e) {
		if(!($(this).hasClass('show-all-trigger'))) {
			e.preventDefault();
			getBioData($(this));
		}
	});

	setUpListeners();

});

// Custom js for isotope gallery

$(window).load(function(){

	var defaultFilter;

    //see if there is a category passed in the URL
	var defaultCategory;
	var theURL = window.location.href;

	if(theURL.indexOf('/category') > -1) {
		if(promoContentVisible) {
			hidePromoContent();
		}
		var catIndex = theURL.indexOf('/category') + 10;
		var filterValue = theURL.substring(catIndex, theURL.length);
		filterValue = setUrlChars(filterValue);
		defaultCategory = filterValue;
		var newTitle = filterValue == '*' ? '5 Questions With | Stony Brook University' : filterValue;
		setNewTitle(addGenericTitle(newTitle));

	} else {
		defaultCategory = $.urlParam('category');
	}

	if(defaultCategory!=='' && defaultCategory!='null' && defaultCategory!==null && defaultCategory!=='0' && defaultCategory!=='*') {

		defaultCategory = setUrlChars(defaultCategory);

		var theCategoryButton = $('.filters button[data-filter="'+defaultCategory+'"]');

		if(theCategoryButton.length) {

			//Set the filter
			defaultFilter = function() {
				var category = $(this).attr('data-category');
				// return true to show, false to hide
				if(defaultCategory==category || category=="Show All") {
					return true;
				} else {
					return false;
				}
			};

			setCategoryLabels(replaceUrlChars(defaultCategory));

			//Mod showing class
			$('.filters button').each(function() {
				$(this).removeClass('selected');
			});
			theCategoryButton.addClass('selected');

		}

	} else {

		defaultFilter = ':not(.show-all-trigger)';

	}

	if(!ie || ie > 8) {
	  	// init Isotope
		var $container = $('.isotope').imagesLoaded( function() {
		    $container.isotope({
		    	layoutMode: 'fitRows',
				itemSelector: '.honoree-box',
				transformsEnabled: false,
				getSortData: {
					name: '.name',
					category: '[data-category]'
				},
				filter: defaultFilter
			});
	    });

	    $('.show-all-trigger').on( 'click', function() {
	    	$('.filters .show-all').trigger('click');
	    });

		// bind filter button click
		$('.filters').on( 'click', 'button', function() { 
			//Mod showing class
			$('.filters button').each(function() {
				$(this).removeClass('selected');
			});
			$(this).addClass('selected');
			
			//Update the current category text
			var filterText = $( this ).text();
			$('.show-all-trigger .category').text(filterText);

			//Do the filter
			var filterValue = $( this ).attr('data-filter');
			//console.log(filterValue);
			if(filterValue=='*') {
				$container.isotope({ filter: ':not(.show-all-trigger)' });
			} else {
				$container.isotope({ filter: function() {
					var category = $(this).attr('data-category');
					// return true to show, false to hide
					if(category.includes(filterValue) || category=="Show All") {
						return true;
					} else {
						return false;
					}
				}
				});
			}
			$('body').scrollTo( '0%', 400 );
			setCategoryLabels(filterValue);


			//if mobile, hide the category menu
			if($(window).width()<960) {
				closeItem($('.category-nav'));
				closeItem($('.category-nav .close'));
			}

			//if overlay showing, trigger the overlay close
			overlayContainer = $('.bio-overlay');
			var isOverlayShowing = overlayContainer.hasClass('show');
		    if(isOverlayShowing) {
		    	closeItem(overlayContainer);
		    	bodyScroll();
		    }
		    var year = $('.category-nav .close').attr('href');
		    var theURL = 'category/' + setUrlCharsBack(filterValue);
		    if(Modernizr.history) {
		    	history.pushState(null, null, theURL);
		    }
		});

		$('.trending-filters').on( 'click', 'a', function(e) { 
			e.preventDefault();
			var text = $(this).text();
			$('.filters button[data-filter="'+text+'"]').trigger('click');
		});

	} else {
		$('.category-nav').css('display','none');
	}

	// trigger resize event to fix faux black borders
	$('.isotope').isotope();

});