$(document).ready(function() {

	/* totop scroller */
	var didScroll = false;
 
	$(window).scroll(function() {
	    didScroll = true;
	});
	 
	setInterval(function() {
	    if ( didScroll ) {
	        didScroll = false;
			if ($(this).scrollTop() > 100) {
				$('#totop').removeClass('invisible');
			} else {
				$('#totop').addClass('invisible');
			}
	    }
	}, 1250);

	$('#totop').on('click',function(event) {
		$('body').scrollTo( '0px', 1000, {easing:'easeOutQuad'} );
	});

	/* nav */
	$('.more-trigger').on('click',function(){

		if($(window).width()>=1022) {
			if ( $('.audience-nav').is( ":visible" ) && $('.more-nav').is( ":hidden" ) ) {
				$('.audience-trigger').click();
			}
		}

		if ( $('.more-nav').is( ":hidden" ) ) {
			$('.more-nav').slideDown();
			$(this).addClass('selected');
		} else {
			$('.more-nav').slideUp();
			$(this).removeClass('selected');
		}
	});

	$('.audience-trigger').on('click',function(){

		if($(window).width()>=1022) {
			if ( $('.more-nav').is( ":visible" ) && $('.audience-nav').is( ":hidden" ) ) {
				$('.more-trigger').click();
			}
		}

		if ( $('.audience-nav').is( ":hidden" ) ) {
			$(this).find('.fa-caret-right').addClass('rotate-left90');
			$(this).closest('li').prev().addClass('before-selected');
			$('.audience-nav').slideDown();
			$(this).addClass('selected');
		} else {
			$(this).find('.fa-caret-right').removeClass('rotate-left90');
			$('.audience-nav').slideUp();
			$(this).removeClass('selected');
		}
	});

	$('.menu-trigger').on('click',function(event){
		$(this).toggleClass('selected');
		var icon = $(this).find('.icon');
		if ( $('.main-nav-list').is( ":hidden" ) ) {
			$('.main-nav-list').slideDown();
			icon.removeClass('fa-bars');
			icon.addClass('fa-times');
		} else {
			$('.main-nav-list').slideUp();
			icon.removeClass('fa-times');
			icon.addClass('fa-bars');
		}
	});

	$('input[type="text"]').on('focus',function() {
		$(this).addClass('focus');
	}).on('focusout',function() {
		if($(this).val().length == 0) {
			$(this).removeClass('focus');
		}
	});

	$('.search-container button').on('click',function(event) {
		var inputEl = $(this).closest('.search-container').find('input');
		if($(inputEl).val().length == 0) {
			event.preventDefault();
			inputEl.focus();
		} else {
		   var queryString = inputEl.val();
		   var searchUrl = "http://search.stonybrook.edu/search?proxyreload=1&client=default_frontend&proxystylesheet=default_frontend&site=default_collection&col=sb&ht=0&qp=&qs=&q="
				+ queryString + "&submit.x=0&submit.y=0&submit=%BB&searchType=0";
		   inputEl.val('').focusout();
	       window.open(searchUrl, '_blank');
		}
	});

	$('.search-container input').keypress(function(event) {
		if (event.keyCode == 13) {
			var inputEl = $(this);
			if($(inputEl).val().length == 0) {
				event.preventDefault();
				inputEl.focus();
			} else {
			   var queryString = inputEl.val();
			   var searchUrl = "http://search.stonybrook.edu/search?proxyreload=1&client=default_frontend&proxystylesheet=default_frontend&site=default_collection&col=sb&ht=0&qp=&qs=&q="
					+ queryString + "&submit.x=0&submit.y=0&submit=%BB&searchType=0";
		       event.preventDefault();
		       event.stopPropagation();
		       inputEl.val('').focusout();
		       window.open(searchUrl, '_blank');
			}
		}
	});

});