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
		console.log(storyID);
		//console.log('toggle...');

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

			$('.overlay-wrapper').hide();

			$overlayContent = $('.overlay-wrapper[data-story-id="'+storyID+'"]');
			$overlayContent.show();
			$('body').addClass('disable-scroll');
			$overlay.addClass('open');
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
	});


});