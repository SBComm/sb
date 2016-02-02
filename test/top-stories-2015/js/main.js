String.prototype.trimToLength = function(m) {
  return (this.length > m) 
    ? jQuery.trim(this).substring(0, m).split(" ").slice(0, -1).join(" ") + "..."
    : this;
};

$.urlParam = function(name){
    var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null){
       return null;
    }
    else{
       return results[1] || 0;
    }
};

function calcHeight(item,header) {
	var newHeight = (item.height() * 2) - 0.5; //shave off a teeny bit for pixel glitch
	header.height(newHeight);
	header.css('max-height',newHeight);
}

function getItem(windowWidth) {
	var item;
	if(windowWidth>800) {
		item = $('.calc-height');
	} else {
		item = $('.calc-height > img');
	}
	return item;
}

function getOpenOverlay() {
	return $('.overlay-wrapper').not(':hidden');
}

function getCurrrentStoryId() {
	var $overlay = getOpenOverlay();
	return $overlay.attr('data-story-id');
}

function getStoryOverlayBySlug(slug) {
	return $('.overlay-wrapper[data-story-slug="'+slug+'"]');
}

function getStoryIdBySlug(slug) {
	return getStoryOverlayBySlug(slug).attr('data-story-id');
}

function getStoryTriggerByID(storyID) {
	return $('.trigger-overlay[data-story-id="'+storyID+'"]');
}

function getStorySlug() {
	return $('body').attr('data-story-slug');
}

function getCurrentStorySlug() {
	var currentURL = $(location).attr('href');
	var n = currentURL.lastIndexOf('/');
	var storySlug = currentURL.substring(n + 1);
	return storySlug;
}

function setContentHeight(ww,$openOverlay) {
	var $imgBox = $openOverlay.find('.img-box'),
	    $contentBox = $openOverlay.find('.content-box'),
	    $buttonBox = $openOverlay.find('.story-footer');

	calcContentHeight(ww,$imgBox,$contentBox,$buttonBox);
}

function calcContentHeight(ww,$imgBox,$contentBox,$buttonBox) {

	var imgBoxHeightDefault = 120;

	//reset heights
	$imgBox.height(imgBoxHeightDefault);
	$contentBox.height('auto');
	$buttonBox.height('auto');

	//get natural heights
	var imgBoxHeight = $imgBox.outerHeight();
	var contentBoxHeight = $contentBox.outerHeight();
	var buttonBoxHeight = $buttonBox.outerHeight();

	//calculate height of 3 sections combined
	var totalHeight = imgBoxHeight + contentBoxHeight + buttonBoxHeight;
	var windowHeight = $(window).height();

	var newContentBoxHeight, difference;

	if(totalHeight<windowHeight && ww<1200) {
		//do resize
		difference = windowHeight - totalHeight;
		newContentBoxHeight = contentBoxHeight + difference;
		$imgBox.height(imgBoxHeightDefault);
		$contentBox.height(newContentBoxHeight);
	} else if (ww>=1200) {
		
		totalHeight = contentBoxHeight + buttonBoxHeight;
		
		if(totalHeight<windowHeight) {
			newContentBoxHeight = windowHeight - buttonBoxHeight;
			$contentBox.height(newContentBoxHeight);
			$imgBox.height(newContentBoxHeight);
		} else {
			$contentBox.height('auto');
			$imgBox.height($contentBox.outerHeight());
		}
		
	}
}

function getStoryData($overlayContent) {

	var storyData = {
		storyTitle : 	$overlayContent.attr('data-story-title'),
		storyURL : 		$overlayContent.attr('data-story-url'),
		storyImageURL : $overlayContent.attr('data-story-img-url'),
		storySlug : 	$overlayContent.attr('data-story-slug'),
		storyDesc : 	$overlayContent.find('.story').text().trimToLength(150)
	};

	return storyData;
}

function setMetaTags(storyData,isDefault) {
	var newTitle, newDesc, newURL, newImageURL;
	if(isDefault) {
		newTitle = 'Top 15 Stories of 2015 | Stony Brook University';
		newDesc = 'The top 15 stories and news headlines of 2015 from Stony Brook University have made an impact on Long Island, New York and the world.';
		newURL = 'http://stonybrook.edu/top15/';
		newImageURL = 'http://mobile.cc.stonybrook.edu/sb/top-stories-2015/img/header/stony-brook-top-15-stories-of-2015-masthead-1600.jpg';
	} else {
		newTitle = storyData.storyTitle + ' | Stony Brook University';
		newDesc = storyData.storyDesc;
		newURL = storyData.storyURL;
		newImageURL = storyData.storyImageURL;
	}
	$("title").text(newTitle);
	$("meta[name='description']").attr("content", newDesc);

	$("meta[property='og\\:title']").attr("content", newTitle);
	$("meta[property='og\\:description']").attr("content", newDesc);
	$("meta[property='og\\:url']").attr("content", newURL);
	$("meta[property='og\\:image']").attr("content", newImageURL);
}

function setTwitterURL($overlayContent) {
	var tweetHref = 'http://twitter.com/share?text=Check this out! "'+getStoryData($overlayContent).storyTitle+'"&amp;url='+getStoryData($overlayContent).storyURL;
	$overlayContent.find('.twitter-share-trigger').attr('href',tweetHref);
}

function pushHistoryState(newTitle,linkHref) {
	if(Modernizr.history) {
		history.pushState(null, newTitle, linkHref);
	}
}

function popHistoryState() {
	var currentURL = $(location).attr('href');
	var currentStorySlug = getStorySlug();
	var storyTrigger = getStoryTriggerByID(getStoryIdBySlug(currentStorySlug));
	if(currentURL.match(/top-stories-2015\/$/) || currentURL.match(/top-stories-2015$/)) {
		//if the overlay is open, close it
		if($('.overlay').hasClass('open')) {
			storyTrigger.trigger('click');
		}
	} else {
		getStoryOverlayBySlug(currentStorySlug).attr('data-push-state','false');
		storyTrigger.trigger('click');
	}
}

if(Modernizr.history) {
	window.addEventListener("popstate", function(e) {
		$(document).ready(function(){
			popHistoryState();
		});
	});
}

$(document).ready(function(){

	var siteURL = '/sb/test/top-stories-2015/';

	// attach fastclick
	FastClick.attach(document.body);
	
	var $triggerBttn = $('#trigger-overlay-btn'),
		$triggerBox = $('.trigger-overlay'),
		$overlay = $('.overlay'),
		$closeBttn = $('button.overlay-close');
		transEndEventNames = {
			'WebkitTransition': 'webkitTransitionEnd',
			'MozTransition': 'transitionend',
			'OTransition': 'oTransitionEnd',
			'msTransition': 'MSTransitionEnd',
			'transition': 'transitionend'
		},
		transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
		support = { transitions : Modernizr.csstransitions };

	function toggleOverlay(storyID) {
		
		var storyData;

		if($overlay.hasClass('open')) {
			$overlay.removeClass('open');
			$overlay.addClass('close');

			var onEndTransitionFn = function( ev ) {
				if(support.transitions) {
					//if( ev.propertyName !== 'visibility' ) return;
					$(this).unbind( transEndEventName, onEndTransitionFn );
				}

				$('body').removeClass('disable-scroll');
				$overlay.removeClass('close');
			};

			if(support.transitions) {
				$overlay.on(transEndEventName, onEndTransitionFn);
			} else {
				onEndTransitionFn();
			}

			history.pushState(null, null, siteURL);
			setMetaTags(storyData,true);
		}
		else if( !$overlay.hasClass('close') ) {

			//reset the open overlay-wrapper to be hidden
			$('.overlay-wrapper').hide();

			$overlayContent = $('.overlay-wrapper[data-story-id="'+storyID+'"]');
			$overlayContent.show();
			$('body').addClass('disable-scroll');
			$overlay.addClass('open');

			setContentHeight(ww,getOpenOverlay());

			storyData = getStoryData($overlayContent);

			setMetaTags(storyData,false);

			setTwitterURL($overlayContent);

			var linkHref = siteURL + storyData.storySlug;

			if($overlayContent.attr('data-push-state')!='false') {
				pushHistoryState(storyData.storyTitle,linkHref);
			} else {
				$overlayContent.attr('data-push-state','true');
			}

			$('body').attr('data-story-slug',storyData.storySlug);

			var gaSlug = '/'+storyData.storySlug;

			$(window).trigger('resize');

			//send GA pageview
			ga('set', {
				page: gaSlug,
				title: storyData.storyTitle
			});
			ga('send', 'pageview');
		}
	}

	$triggerBttn.on('click',function() {
		var storyID = '1';
		toggleOverlay(storyID);
	});

	$triggerBox.on('click',function() {
		var storyID = $(this).attr('data-story-id');
		toggleOverlay(storyID);
	});


	$closeBttn.on('click',function() {
		var storyID = $(this).closest('.overlay').attr('data-story-id');
		toggleOverlay(storyID);
	});

	/* calc header height */

	var header = $('.header-image-wraper');
	var ww;

	$(window).load(function(){
		ww = $(window).width();
		calcHeight(getItem(ww),header);
	});
	$(window).resize(function(){
		ww = $(window).width();
		calcHeight(getItem(ww),header);
		var $openOverlay = getOpenOverlay();
		setContentHeight(ww,$openOverlay);
	});

	/* default story URL */

	var defaultStorySlug = getStorySlug();
	var defaultStoryID, defaultStoryTrigger;
	//console.log(defaultStorySlug);
	if(defaultStorySlug) {
		defaultStoryID = getStoryIdBySlug(decodeURIComponent(defaultStorySlug));
		//console.log(defaultStoryID);
		toggleOverlay(defaultStoryID);

		ww = $(window).width();
		calcHeight(getItem(ww),header);
		var $openOverlay = getOpenOverlay();
		setContentHeight(ww,$openOverlay);
	}

	/* social share */

	$('.facebook-share-trigger').on('click',function() {
		var storyURL = getStoryData(getOpenOverlay()).storyURL;
		//console.log(storyURL);

		FB.ui({
			method: 'share',
			href: storyURL,
		}, function(response){
			var $fbTrigger = getOpenOverlay().find('.facebook-share-trigger');
			$fbTrigger.addClass('submitted').attr('disabled','disabled');
		});
	});

	$('.twitter-share-trigger').on('click',function(e) {
		window.open(this.href, "Share on Twitter", "width=600, height=600");
		var $tweetTrigger = getOpenOverlay().find('.twitter-share-trigger');
		$tweetTrigger.addClass('submitted');
    	return false;
	});

	$('.story-read-trigger').on('click',function(e) {
		window.open(this.href, "Read on SBU", "width=960, height=750");
    	return false;
	});


});