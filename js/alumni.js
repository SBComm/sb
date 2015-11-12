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

	$('.flip-card').on('click',function(e) {
		e.preventDefault();
		flipCard($(this));
	});

};