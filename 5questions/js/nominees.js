function lightboxOverlayShowing() {
	return $('.nivo-lightbox-open').hasClass('nivo-lightbox-open');
}

function getData(item,name) {
	var val = $(item).attr('data-'+name);
	if(val=='null' || val==null || val=='0' || val==undefined || val=='undefined') {
		val = '';
	}
	return val;
}

function swapLinksAndRestore(endorseLink) {
	var generalTrigger = $('.general-trigger');
	var defaultForm = generalTrigger.attr('href');
	var endorsementLink = endorseLink;
	generalTrigger.attr('href',endorsementLink);
	generalTrigger.trigger('click');
	generalTrigger.attr('href',defaultForm);
}

function buildEndorsementLink(item) {
	var data = [];

	data.firstName = getData(item,'first-name');
	data.lastName = getData(item,'last-name');
	data.year = getData(item,'year');
	data.jobTitle = getData(item,'title');
	data.degree = getData(item,'degree');
	data.company = getData(item,'company');
	data.email = getData(item,'email');
	data.phone = getData(item,'phone');
	data.city = getData(item,'city');
	data.state = getData(item,'state');
	data.twitter = getData(item,'twitter');
	data.linkedIn = getData(item,'linkedIn');

	// using the nomination form
	// var googleFormURL = 'docs.google.com/forms/d/1G4APbIALnQK89Rg6mj1nhCEHL9CMDaHp0jxCc4PlIc8/viewform?embedded=true&entry.1750113902='+data.firstName+'&entry.302513069='+data.lastName+'&entry.1722712809='+data.email+'&entry.742003228='+data.phone+'&entry.1696164260='+data.city+'&entry.897161715='+data.state+'&entry.1573771008='+data.twitter+'&entry.728073651='+data.linkedIn+'&entry.2124566736='+data.year+'&entry.2112525588='+data.jobTitle+'&entry.1222121122='+data.company+'&entry.1156276868=&entry.1584969496=&entry.1584641440=&entry.22730974=&entry.635487955=&entry.564426065&entry.1718075822&entry.1935365989&entry.1446380076&entry.1631478625&entry.1579956015&entry.1875423579';

	//using a separate endorsement form
	var googleFormURL = 'https://docs.google.com/forms/d/1G4APbIALnQK89Rg6mj1nhCEHL9CMDaHp0jxCc4PlIc8/viewform?entry.1750113902='+data.firstName+'&entry.302513069='+data.lastName+'&entry.2124566736='+data.year+'&entry.695181444='+data.degree+'&entry.2112525588='+data.jobTitle+'&entry.1222121122='+data.company+'&entry.1584641440&entry.564426065&entry.1718075822&entry.1935365989&entry.1446380076&entry.1579956015&entry.1875423579';

	return googleFormURL;
}

$(document).ready(function() {

	//if the page is loaded with a hash in URL
	var hash = window.location.hash;
	if(hash!=='' && hash!='null' && hash!==null && hash!=='0' && hash!=='*') {
		var urlPath = hash.substring(1,hash.length);
		var useOffset = 0;
		if($(window).width()>=960) {
			useOffset = $('header').outerHeight();
		} else {
			useOffset = $('.mobile-nav-bar').outerHeight();
		}

		$('body').scrollTo( hash, 800, {
			axis:'y',
			easing: 'easeOutQuart',
			offset: -useOffset
		});
	} else {
		$('body').scrollTo( '0', 0 );
	}

	$('.nivo-lightbox').nivoLightbox({
		afterShowLightbox: function(lightbox) {
			if(!($('.after-done-with-form').length)) {
				$('.nivo-lightbox-close').after('<a style="display: none" class="after-done-with-form">After you\'ve clicked submit on the form above, <br />click here to go back</a>');
				$('.after-done-with-form').fadeIn(30000,'easeInExpo');
				$('.after-done-with-form').on('click',function() {
					$('.nivo-lightbox-close').trigger('click');
				});
			}
		},
		beforeHideLightbox: function() {
			$('body').scrollTo( '0', 0 );
		}
	});

	$('.endorse-trigger').on('click',function(e) {
		e.preventDefault();
		var dataItem = $(this).closest('tr');
		var endorsementLink = buildEndorsementLink(dataItem);
		swapLinksAndRestore(endorsementLink);
		$(this).replaceWith('<span class="plusone">+1</span> Thanks for <a class="endorse-link" href="'+endorsementLink+'" target="_blank">endorsing</a>!</span>');
	});

	$('.endorse-link').on('click',function(e) {
		swapLinksAndRestore($(this).attr('href'));
	});

});