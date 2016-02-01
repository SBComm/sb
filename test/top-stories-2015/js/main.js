String.prototype.trimToLength = function(m) {
  return (this.length > m) 
    ? jQuery.trim(this).substring(0, m).split(" ").slice(0, -1).join(" ") + "..."
    : this;
};

function calcHeight(item,header) {
	var newHeight = item.height() * 2;
	//console.log(newHeight);
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

function setContentHeight(ww,$openOverlay) {
	var $imgBox = $openOverlay.find('.img-box'),
	    $contentBox = $openOverlay.find('.content-box'),
	    $buttonBox = $openOverlay.find('.story-footer');

	/*console.log($imgBox);
	//console.log($contentBox);
	//console.log($buttonBox);*/

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

	//logginh
	//console.log(imgBoxHeight);
	//console.log(contentBoxHeight);
	//console.log(buttonBoxHeight);
	//console.log(' ');

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
		//height:auto
		//$contentBox.height('auto');
		
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
		storyImageURL : $overlayContent.attr('data-story-img-url')
	};

	storyData.storySlug = storyData.storyTitle.replace(/\s+/g, '-').toLowerCase();
	storyData.storyDesc = $overlayContent.find('.story').text().trimToLength(150);

	return storyData;
}

function setMetaTags(storyData) {
	$("meta[property='og\\:title']").attr("content", storyData.storyTitle);
	$("meta[property='og\\:description']").attr("content", storyData.storyDesc);
	$("meta[property='og\\:url']").attr("content", storyData.storyURL);
	$("meta[property='og\\:image']").attr("content", storyData.storyImageURL);
}

function setTwitterURL($overlayContent) {
	var tweetHref = 'http://twitter.com/share?text=Check this out! "'+getStoryData($overlayContent).storyTitle+'"&amp;url='+getStoryData($overlayContent).storyURL;
	console.log(tweetHref);



	$overlayContent.find('.twitter-share-trigger').attr('href',tweetHref);
}

$(document).ready(function(){

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
		//console.log(storyID);
		//console.log('toggle...');
		
		var storyData;

		if($overlay.hasClass('open')) {

			$overlay.removeClass('open');
			$overlay.addClass('close');
			//console.log('triggered...');
			var onEndTransitionFn = function( ev ) {
				//console.log('onEndTransitionFn...');
				if(support.transitions) {
					//console.log('support.transitions...');
					//console.log(ev);
					////console.log(ev.propertyName);
					//if( ev.propertyName !== 'visibility' ) return;
					//console.log('unbinding...');
					//console.log($(this));
					$(this).unbind( transEndEventName, onEndTransitionFn );
				}
				//console.log('removing class...');
				$('body').removeClass('disable-scroll');
				$overlay.removeClass('close');
				//console.log('done...');
			};
			if(support.transitions) {
				//console.log(transEndEventName);
				$overlay.on(transEndEventName, onEndTransitionFn);
			}
			else {
				onEndTransitionFn();
			}
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

			//setMetaTags(storyData);

			setTwitterURL($overlayContent);

			console.log(storyData.storyTitle);
			console.log(storyData.storySlug);
			console.log(storyData.storyURL);
			console.log(storyData.storyImageURL);
			console.log(storyData.storyDesc);

			var gaSlug = '/'+storyData.storySlug;

			//send GA pageview
			/*
			ga('set', {
				page: gaSlug,
				title: storyTitle
			});
			ga('send', 'pageview');
			*/
		}

		//console.log(getCurrrentStoryId());
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

	/* social share */

	$('.facebook-share-trigger').on('click',function() {
		var storyURL = getStoryData(getOpenOverlay()).storyURL;
		console.log(storyURL);

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