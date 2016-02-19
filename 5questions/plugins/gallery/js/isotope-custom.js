// Josh Palmeri
// Using jQuery isotope example as starting point
// Custom js for isotope gallery

$( function() {
  // init Isotope
  var $container = $('.isotope').imagesLoaded( function() {
    $container.isotope({
      itemSelector: '.gallery-item',
      getSortData: {
        name: '.name',
        category: '[data-category]',
        weight: function( itemElem ) {
          var weight = $( itemElem ).find('.weight').text();
          return parseFloat( weight.replace( /[\(\)]/g, '') );
        }	
      }
    });
  });

	// bind filter button click
	$('.filters').on( 'click', 'button', function() {
		var filterValue = $( this ).attr('data-filter');
		$container.isotope({ filter: filterValue });
	});

  // bind sort button click
  $('#sorts').on( 'click', 'button', function() {
    var sortByValue = $(this).attr('data-sort-by');
    $container.isotope({ sortBy: sortByValue });
  });
  
  // change is-checked class on buttons
  $('.button-sub-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'button', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $( this ).addClass('is-checked');
      var newText = $( this ).text();
      $('.button-sub-group').removeClass('active');
      if(newText) {
      	var $thisShowAllButton = $buttonGroup.closest('.button-group').find('.gallery-show-all');
      	$thisShowAllButton.text(newText);			      	
      }
    });
  });

	$('.gallery-show-all').on('click',function() {

		$('.gallery-show-all').each(function() {
			$(this).text($(this).attr('data-button-default'));
		});

		$('button.is-checked').removeClass('is-checked');
		$('button.default').addClass('is-checked');

		if($(this).closest('.button-group').find('.button-sub-group').hasClass('active')) {
			$('.button-sub-group.active').removeClass('active');
		} else {
			$('.button-sub-group.active').removeClass('active');
			$(this).closest('.button-group').find('.button-sub-group').addClass('active');
		}
		
	});

	$('.show-all-media').on('click',function() {

		$('.gallery-show-all').each(function() {
			$(this).text($(this).attr('data-button-default'));
		});

		$('button.is-checked').removeClass('is-checked');
		$('button.default').addClass('is-checked');

		$container.isotope({ filter: '*' });
	});
});