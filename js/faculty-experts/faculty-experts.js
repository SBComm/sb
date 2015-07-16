$('#live-filter-search').keypress(function(event) {
	if (event.keyCode == 13) {
		$('body').scrollTo( $('.list-experts'), 100, {axis: 'y'} );
	}
});

$(window).load(function() {
	if($(window).width()>=640) {
		equalheight('.faculty-list li');
	} else {
		$('.faculty-list li').css('height','auto');
	}
	});
	$(window).resize(function(){
		if($(window).width()>=640) {
		equalheight('.faculty-list li');
	} else {
		$('.faculty-list li').css('height','auto');
	}
});

var expertsSearchOverlay = $('.search-experts-inside');

function runSearch(keyword,popState) {
	var liveFilterInput = $('.faculty-list .text-filter');
	var searchFormInput = $('.search-form input');
	var filterWrapper   = $('.filter-wrapper');

	filterWrapper.removeClass('hidden');
	if(expertsSearchOverlay.hasClass('open')) {
		toggleAccessible(expertsSearchOverlay);
	}
	liveFilterInput.val(keyword);
	var evt = jQuery.Event("keydown");
	evt.which = 13;
	liveFilterInput.trigger(evt);
	$('body').scrollTo( $('.faculty-list'), 500, {axis: 'y'} );
	var newKeyword = replaceAll(keyword, ' ', '+');
	var theURL = 'faculty-experts/results/?view='+ getViewType() +'&keyword='+ newKeyword;
	if(Modernizr.history && popState) {
    	history.pushState(null, null, theURL);
    }
}

function getViewType() {
	var qView = $.urlParam('view');
    if(qView===null||qView==='null'||qView===0||qView==='0'||qView==='') {
		qView = 'list';
    }
    return qView;
}

function getKeyword() {
	var qKeyword = decodeURIComponent($.urlParam('keyword'));
    if(qKeyword===null||qKeyword==='null'||qKeyword===0||qKeyword==='0'||qKeyword==='') {
    	qKeyword = '';
    }
    qKeyword = replaceAll(qKeyword, '+', ' ');
    return qKeyword;
}

if(Modernizr.history) {
	window.addEventListener("popstate", function(e) {
		if(qKeyword===null||qKeyword==='null'||qKeyword===0||qKeyword==='0'||qKeyword==='') {

		} else {
			runSearch(getKeyword(),false);
		}
	});
}

var $containerEl = 	$('.browse-choices .list-page');

function setContainerHeight(numColumns) {
	var itemHeight = 	$containerEl.find('a:first-child').outerHeight(true);
	var numItems = 		$containerEl.children('a:visible').length;
	var newContainerHeight = ((numItems * itemHeight) / numColumns) + itemHeight;
	$containerEl.height(newContainerHeight);
}

$(window).load(function(){
	if($('.browse-choices .list-page').length) {
		if(hasFlexbox() || !hasNoFlexbox()) {
			var ww = $(window).width();
			if(ww>=770 && ww<960) {
				setContainerHeight(2);
			} else if(ww>=960) {
				setContainerHeight(3);
			}
		} else {
			$('.browse-choices .list-page').height('auto');
		}
	}
});

$(window).resize(function(){
	if($('.browse-choices .list-page').length) {
		if(hasFlexbox() || !hasNoFlexbox()) {
			var ww = $(window).width();
			if(ww>=770 && ww<960) {
				setContainerHeight(2);
			} else if(ww>=960) {
				setContainerHeight(3);
			} else {
				$('.browse-choices .list-page').height('auto');
			}
		}
	}
});

$(document).ready(function() {

	var theURL = window.location.href;

	//profile script
	if ($('.profile').length) {
		//if URL contains faculty-directory/profile/ or faculty-experts/profile/ hide unappropriate data
		if ($('.profile').attr('data-faculty-not-found') != 'true') {
			if(theURL.indexOf('faculty-directory/profile/') > -1) {
				$('.hide-on-faculty-directory').remove();
			} else if(theURL.indexOf('faculty-experts/profile/') > -1) {
				/* if not an expert, redirect to custom 404 */
				if ($('.profile').attr('data-faculty-type') != 'expert') {
					var newURL = 'faculty-experts/profile/not-found';
					window.location = newURL;
				} else {
					$('.hide-on-faculty-experts').remove();
				}
			}
		}

		var isUsefulString = function (p_string) { return jQuery.trim(p_string) != "" && (typeof p_string == "string" || typeof p_string == "number"); };

		//format publications
		//Example: 
		if($('.fac-publications-section').length) {

			var getPubData = function (data_label, context_element) {
				return $('[data-label="'+data_label+'"]', context_element).text();
			};

			var publicationList = $('.fac-publications-section ol');
			var newSectionHTML = '';
			var newItemHTML = '';
			var authorType;
			var publicationType;
			var superTitle;
			var subTitle;
			var publisher;
			var publicationStatus;
			var year;
			var month;
			var day;
			var volume;
			var issue;
            var pages;

			$('.fac-publications-section ol li').each(function() {

				newItemHTML = '';

				authorType			= getPubData('author-type',$(this));
				publicationType 	= getPubData('publication-type',$(this));
				superTitle			= getPubData('super-title',$(this));
				subTitle			= getPubData('sub-title',$(this));
				publisher			= getPubData('publisher',$(this));
				publicationStatus 	= getPubData('publication-status',$(this));
				year				= getPubData('year',$(this));
				month				= getPubData('month',$(this));
				day					= getPubData('day',$(this));
				volume				= getPubData('volume',$(this));
				issue				= getPubData('issue',$(this));
	            pages				= getPubData('pages',$(this));

				switch (publicationType) {
		            case "Article":
	                case "Article - Peer Reviewed Author":
	                case "Article - Peer Reviewed Co-Author":
	                {
	                	// https://owl.english.purdue.edu/owl/resource/747/07/
                        // Author(s). "Title of Article." <i>Title of Journal Volume</i>. Issue (Year): pages. Medium of publication.
                        // "Quantum fluctuations of one-dimensional free fermions and Fisher-Hartwig formula for Toeplitz determinants." Journal of Physics A: Mathematical and Theoretical 44.48 (2011): 485001.
                        
                        newItemHTML = '<li class="publication-article">';

                        if (isUsefulString(subTitle)) {

                            newItemHTML += '"'+subTitle+'." ';

                        }
                        if (isUsefulString(superTitle)) {

                        	newItemHTML += '<em>'+superTitle+'</em> ';

                        	if (isUsefulString(volume)) {
                        		newItemHTML += volume;
                        		if (isUsefulString(issue)) {
	                        		newItemHTML += '.'+issue+' ';
	                        	}
                        	}
                            
                            if (isUsefulString(year)) {
                                newItemHTML += '('+year+')';
                            }
                            
                        }
                        if (isUsefulString(pages)) {
                            newItemHTML += ': '+pages+'.';
                        }

                        newItemHTML += '</li>';
                        newSectionHTML += newItemHTML;
	                	
	                	break;
	                }
		            case "Book":
		            case "Book - Author":
		            case "Book - Co-Author":
		            case "Book - Editor":
		            case "Book - Chapter Peer Reviewed":
		            default:
		            {

		            	newItemHTML = '<li class="publication-book">';

		            	if (isUsefulString(subTitle)) {

                            newItemHTML += '"'+subTitle+'." ';

                        }

                        if (isUsefulString(superTitle)) {

                        	newItemHTML += '<em>'+superTitle+'.</em> ';

                        }

                        if (isUsefulString(publisher) && isUsefulString(year)) {
                        	newItemHTML += publisher+', '+year+'. ';
                        } else if (isUsefulString(publisher)) {
                        	newItemHTML += publisher+'. ';
                        } else if (isUsefulString(year)) {
                        	newItemHTML += year+'. ';
                        }

                        newItemHTML += '</li>';
                        newSectionHTML += newItemHTML;
                        
                        break;
		            }
		        }

			});

			publicationList.html(newSectionHTML);

		}
	}
	

	var liveFilterInput = $('.faculty-list .text-filter');
	var searchFormInput = $('.search-form input');
	var filterWrapper   = $('.filter-wrapper');

	$(".sticky").sticky({ topSpacing: 0 });
	if($('#live-filter-search-list').length) {
		$('#live-filter-search-list').fastLiveFilter('table.tablesaw tbody', {
			callback: function(total) { 
				$('table.tablesaw tr').removeClass('show');
				$('table.tablesaw tr:visible').addClass('show');
				$('table.tablesaw').attr('data-showing',total);
			}
		});
	}
	if($('#live-filter-search-grid').length) {
		$('#live-filter-search-grid').fastLiveFilter('ul.faculty-list', {
			callback: function(total) { 
				$('ul.faculty-list li').removeClass('show');
				$('ul.faculty-list li:visible').addClass('show');
				$('.faculty-list').attr('data-showing',total);
			}
		});
	}

	$('.close-search-overlay, .show-search-overlay').on('click',function(e) {
		e.preventDefault();
		toggleAccessible(expertsSearchOverlay);
		if($(this).hasClass('show-search-overlay')) {
			if($(window).width()>=960) {
				$('.search-form input').focus();
			}
		} else {
			$('body').scrollTo( $('.list-experts'), 300, {axis: 'y'} );
		}
	});
    
    $(".text-filter").blur(function() {
      if($(this).val()=='') {
        $(".clear-filter").addClass("hide").addClass("hide-accessible");
      }
    });

    $(".clear-filter").on('click',function() {
		var e = $.Event("keypress");
		e.keyCode = 13; // 13 for enter
		$(".text-filter").val('').keydown();
		// keydown triggers LiveFilter
		$(".clear-filter").addClass("hide").addClass("hide-accessible");
		$('body').scrollTo( $('.list-experts'), 300, {axis: 'y'} );
		var theURL = 'faculty-experts/results/?view='+ getViewType() +'&keyword=';
		if(Modernizr.history) {
			history.pushState(null, null, theURL);
		}
    });

    $(".text-filter").change(function() {
      if($(this).val()!='') {
        $(".clear-filter").removeClass("hide").removeClass("hide-accessible");
        $('.filter-status').html('Showing <span class="filterTotal"></span> results for <em class="search-term">' + $(this).val() + '</em>');
      } else {
        $(".clear-filter").addClass("hide").addClass("hide-accessible");
        $('.filter-status').html('');
      }
    });

	$('.search-form').on('submit',function(e) {
		if($('.initial-search-text').is(':visible')) {
			$('.initial-search-text').hide();
		}
		e.preventDefault();
		var keyword = searchFormInput.val();
		runSearch(keyword,true);
	});

	$('.new-search').on('click', function() {
		$('.clear-filter').trigger('click');
		searchFormInput.val('');
	});

	$('.clear-search-trigger').on('click',function(e) {
		e.preventDefault();
		$('.clear-filter').trigger('click');
		$('body').scrollTo( $('.list-experts'), 500, {axis: 'y'} );
	});

	$('.run-search').on('click',function(e) {
		e.preventDefault();
		runSearch($(this).text(),true);
	});

	if($('.faculty-name-container').length) {
		if($(window).width()>=640) {
			$('.faculty-name-container').text($('.faculty-name').text());
		} else {
			$('.faculty-name-container').html('<em class="fa fa-user icon"></em>');
		}
	}

	//if there is a value for url parameter 'name', use it on people search
    var qKeyword = getKeyword();

    if(qKeyword!==null &&qKeyword!==0 &&qKeyword!=='') {
    	$('.initial-search-text').hide();
    	qKeyword = replaceAll(qKeyword, '+', ' ');
    	liveFilterInput.val(qKeyword);
    	filterWrapper.removeClass('hidden');
		var evt = jQuery.Event("keydown");
		evt.which = 13;
		liveFilterInput.trigger(evt);
		$('body').scrollTo( $('.list-experts'), 500, {axis: 'y'} );
    }

    $('.toggle-view a').on('click',function(e) {
    	e.preventDefault();
    	var newURL = $(this).attr('href') + '&keyword=' + getKeyword();
    	window.location = newURL;
    });

});