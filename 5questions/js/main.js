var $body = $('body');

function makeClass(className) {
	return '.'+className;
}
function makeId(className) {
	return '#'+className;
}

function accessibleShow($element) {
	$element.fadeOut(0,function(){
    	$element.removeClass('hide-accessible').addClass('open')
        .slideDown('fast');
    });
}

function accessibleHide($element) {
	$element.fadeIn(0,function(){
		$element.removeClass('open')
		.slideUp('fast',function() {
		    $element.addClass('hide-accessible').fadeIn('fast');
		});
	});
}

function accessibleShowDesktop($element) {
	if($(window).width()>=960) {
		$element.fadeOut(0,function(){
	    	$element.removeClass('hide-accessible-desktop').addClass('open')
	        .slideDown('fast');
	    });
	}
}

function accessibleHideDesktop($element) {
	if($(window).width()>=960) {
		$element.fadeIn(0,function(){
			$element.removeClass('open')
			.slideUp('fast',function() {
			    $element.addClass('hide-accessible-desktop').fadeIn('fast');
			});
		});
	}
}

function toggleElement($element) {
	if($(window).width()>=960) {
		if($element.hasClass('open')) {
			accessibleHide($element);
		} else {
			accessibleShow($element);
		}
	}
}

function toggleElementDesktop($element) {
	if($(window).width()>=960) {
		if($element.hasClass('open')) {
			accessibleHideDesktop($element);
		} else {
			accessibleShowDesktop($element);
		}
	}
}

function appendNextAndPrevNavigation(item) {
	var thisIndex = Number(item.attr('data-index'));
	var totalItems = 0;
	$('a.honoree-box').each(function() {
		totalItems = totalItems + 1;
	});
	//console.log(thisIndex);
	var prevIndex = thisIndex - 1;
	if(prevIndex>0) {
		var prevItem = $('a.honoree-box[data-index="'+prevIndex+'"]');
		var prevItemDetails = [];
		prevItemDetails.firstName = prevItem.attr('data-first-name');
		prevItemDetails.lastName = prevItem.attr('data-last-name');
		//console.log(prevItemDetails);

		var prevLinkHTML = '<a href="." class="back pagination-trigger" role="button" aria-label="View previous biography for '+prevItemDetails.firstName+' <br>'+prevItemDetails.lastName+'" data-direction="back" tabindex="0">';
		prevLinkHTML += '<span class="label icon-before">Previous</span>';
		prevLinkHTML += '<span class="name">'+prevItemDetails.firstName+' <br>'+prevItemDetails.lastName+'</span>';
		prevLinkHTML += '</a>';

		$('.pagination-wrapper').append(prevLinkHTML);
	} else {
		prevIndex = false;
	}

	var nextIndex = thisIndex + 1;
	if(nextIndex<=totalItems) {
		var nextItem = $('a.honoree-box[data-index="'+nextIndex+'"]');
		var nextItemDetails = [];
		nextItemDetails.firstName = nextItem.attr('data-first-name');
		nextItemDetails.lastName = nextItem.attr('data-last-name');
		//console.log(nextItemDetails);

		var nextLinkHTML = '<a href="." class="next pagination-trigger" role="button" aria-label="View nect biography for '+nextItemDetails.firstName+' <br>'+nextItemDetails.lastName+'" data-direction="next" tabindex="0">';
		nextLinkHTML += '<span class="label icon-before">Next</span>';
		nextLinkHTML += '<span class="name">'+nextItemDetails.firstName+' <br>'+nextItemDetails.lastName+'</span>';
		nextLinkHTML += '</a>';

		$('.pagination-wrapper').append(nextLinkHTML);
	} else {
		nextIndex = false;
	}

	setPaginationListeners(prevIndex,nextIndex);
	
}

function setPaginationListeners(prevIndex, nextIndex) {
	$('.pagination-trigger').on('click',function(e) {
		e.preventDefault();
		var direction = $(this).attr('data-direction');
		if(direction=='back') {
			clickHonoreeBoxByIndex(prevIndex);
		} else if(direction=='next') {
			clickHonoreeBoxByIndex(nextIndex);
		}
	});
}

function clickHonoreeBoxByIndex(index) {
	$('a.honoree-box[data-index="'+index+'"]').trigger('click');
}

function clickHonoreeBoxByName(name) {
	$('a.honoree-box[data-filename="'+name+'"]').trigger('click');
}

function showItem(item) {
	item.addClass('show');
}

function closeItem(item) {
	item.removeClass('show');
}

function bodyScroll(type) {
	if(type=='disable-mobile') {
		$body.addClass('disable-scroll-mobile');
	} else {
		$body.removeClass('disable-scroll-mobile');
	}
}

function getNewTitle(item) {
	var firstName = item.attr('data-first-name');
	var lastName = item.attr('data-last-name');
	var newTitle = firstName + " " + lastName;
	return addGenericTitle(newTitle);
}

function addGenericTitle(title) {
	return ("5 Questions With " + title);
}

function setNewTitle(newTitle) {
	document.title = newTitle;
}

$(document).ready(function() {

	/* mobile nav */

	var $mobileTriggerIcon = $('.mobile-nav-trigger .icon');
	var $mobileTrigger     = $('.mobile-nav-trigger');
	var $mainNav	       = $('.main-nav-list');
	var $mainNavLink	   = $('.main-nav-list a');
	var dataTarget;

	$mobileTrigger.on('click',function(event) {
		event.preventDefault();
		$mainNav.toggleClass('show');
		$mobileTriggerIcon.toggleClass('sbuicon-menu7').toggleClass('sbuicon-cross2');
	});

	$mainNavLink.on('click',function() {
		if($(window).width()<960) {
			$mobileTrigger.trigger('click');
		}
	});

	$('.social-share-link').on('click',function(e) {
		e.preventDefault();
		window.open(this.getAttribute('href'), 'newwindow', 'width=650, height=550');
	});

	$('.social-share-link-larger').on('click',function(e) {
		e.preventDefault();
		window.open(this.getAttribute('href'), 'newwindow', 'width=950, height=750');
	});

	$('.submit-nom').on('click',function(e) {
		e.preventDefault();
		$('#totop').trigger('click');
	});

});