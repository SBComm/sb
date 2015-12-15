$(document).ready(function() {
	initAlumni();
});

function flipCard($trigger) {
	var $bookItem = $trigger.closest('.alumni-book');
	var $card = $bookItem.find('.authors__book__flip__card');

	$card.toggleClass('flip');
}

var initAlumni = function() {
	//initialize books slider
	$('.alumni-books-slider').slick({
		dots: true,
		arrows: true,
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		draggable: false
	});

	//books flip
	$('.flip-card').on('click',function(e) {
		e.preventDefault();
		flipCard($(this));
	});

	//flickr gallery for chapters pages
	if($('.flickr-gallery').length) {
		var flickrSetId = $('.event-gallery').attr('data-flickr-id');
		if(flickrSetId==='' || flickrSetId=='null' || flickrSetId===null || flickrSetId==='0') {
			flickrSetId = '72157649295457517';
		}
		makeFlickrGallery(flickrSetId);
	}

	//Continue Reading Trigger
	$('.continue-reading-trigger').on('click', function(e) {
		e.preventDefault();
		var dataTarget = $(this).attr('data-target');
		console.log(dataTarget);
		var $text;
		if(dataTarget=='' || typeof(dataTarget)==='undefined') {
			$text = $(this).parent().find('.continue-reading-target');
		} else {
			$text = $(dataTarget);
		}
		$(this).remove();
		toggleAccessible($text);
	});

};