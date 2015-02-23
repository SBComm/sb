function hasFlexbox() {
	return ($('html').hasClass('flexbox'));
}

function hasNoFlexbox() {
	return ($('html').hasClass('no-flexbox'));
}

function setContainerHeight(numColumns) {
	var $containerEl = 	$('#department_list');
	var itemHeight = 	$containerEl.find('li:first-child').height();
	var numItems = 		$containerEl.children('li:visible').length;
	var newContainerHeight = ((numItems * itemHeight) / numColumns) + itemHeight;
	$containerEl.height(newContainerHeight);
}

$(window).load(function(){
	if(hasFlexbox() || !hasNoFlexbox()) {
		var ww = $(window).width();
		if(ww>=768 && ww<960) {
			setContainerHeight(2);
		} else if(ww>=960) {
			setContainerHeight(3);
		}
	} else {
		$('#department_list').css('height','auto, !important');
	}

	$(".sticky").sticky({ topSpacing: 0 });
});
$(window).resize(function(){
	if(hasFlexbox() || !hasNoFlexbox()) {
		var ww = $(window).width();
		if(ww>=768 && ww<960) {
			setContainerHeight(2);
		} else if(ww>=960) {
			setContainerHeight(3);
		}
	}
});



$(document).ready(function() {
	if(hasFlexbox() || !hasNoFlexbox()) {
		$(".text-filter").change(function() {
	    	var ww = $(window).width();
	    	if(ww>=768 && ww<960) {
				setContainerHeight(2);
			} else if(ww>=960) {
				setContainerHeight(3);
			}
	    });
	}

	$('.nivo-lightbox-summer-form').nivoLightbox({
		afterShowLightbox: function(lightbox) {
			var searchParams = ['keywords','department','course_level','location','SBC','DEC'];
			var searchValues = [];
			for(var i=0; i<searchParams.length; i++) {
				if($.urlParam(searchParams[i])!=0 && $.urlParam(searchParams[i])!='' && $.urlParam(searchParams[i])!=null) {
					searchValues[searchParams[i]] = decodeURIComponent($.urlParam(searchParams[i]));
				} else {
					searchValues[searchParams[i]] = '';
				}
			}
			var keywordValue = decodeURIComponent($.urlParam('keywords'));

			$('.course-search-form input[name="keywords"]').val(searchValues.keywords);
			$('.course-search-form select[name="department"]').val(searchValues.department);
			$('.course-search-form select[name="course_level"]').val(searchValues.course_level);
			$('.course-search-form select[name="location"]').val(searchValues.location);
			$('.course-search-form select[name="SBC"]').val(searchValues.SBC);
			$('.course-search-form select[name="DEC"]').val(searchValues.DEC);
		}
	});

});