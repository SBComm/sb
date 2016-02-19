/* replace UrlChars */
function setUrlCharsBack(string) {
  string = replaceAll(string, ' ', '-');
  string = replaceAll(string, '&', 'and');
  return string;
}

$(document).ready(function() {

	var profileName = $('.bio-overlay').attr('data-name');
	setNewTitle(addGenericTitle(profileName));

	$('.filters').on( 'click', 'button', function() { 
		//Mod showing class
		$('.filters button').each(function() {
			$(this).removeClass('selected');
		});
		$(this).addClass('selected');

		//Do the filter
		var filterValue = $( this ).attr('data-filter');

		var newURL = 'category/' + setUrlCharsBack(filterValue);

		window.location = newURL;
	});

	$('.overlay-control.category').on('click',function(e) {
		e.preventDefault();
		if($(window).width()>=960) {
			$('body').scrollTo( '120%', 800 );
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
	
});