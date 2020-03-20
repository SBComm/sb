$('#live-filter-search').keypress(function(event) {
	if (event.keyCode == 13) {

		$('body').scrollTo( $('#live-filter-list'), 0, {axis: 'y', offset: -200} );
	}
});



$('.clear-filter').click(function() {
	$('body').scrollTo( $('#live-filter-list'), 0, {axis: 'y', offset: -200} );
});

$(document).ready(function() {
	if(hasFlexbox() || !hasNoFlexbox()) {
		$(".text-filter").change(function() {
	    	initializeFlexList('resize');
	    });
	}

	$('.nivo-lightbox-summer-form').nivoLightbox({
		afterShowLightbox: function(lightbox) {
			var searchParams = ['keywords','department','course_level','location','session_code','SBC','DEC'];
			var searchValues = [];
			for(var i=0; i<searchParams.length; i++) {
				if($.urlParam(searchParams[i])!=0 && $.urlParam(searchParams[i])!='' && $.urlParam(searchParams[i])!=null) {
					searchValues[searchParams[i]] = decodeURIComponent($.urlParam(searchParams[i]));
				} else {
					searchValues[searchParams[i]] = '';
				}
			}

			var keywordValue = searchValues.keywords;
			keywordValue = keywordValue.replace('+',' ');


			$('.course-search-form input[name="keywords"]').val(keywordValue);
			$('.course-search-form select[name="department"]').val(searchValues.department);
			$('.course-search-form select[name="course_level"]').val(searchValues.course_level);
			$('.course-search-form select[name="location"]').val(searchValues.location);
			$('.course-search-form select[name="session_code"]').val(searchValues.session_code);
			$('.course-search-form select[name="SBC"]').val(searchValues.SBC);
			$('.course-search-form select[name="DEC"]').val(searchValues.DEC);

			$('.nivo-lightbox-overlay .course-search-form select, .nivo-lightbox-overlay .course-search-form input').each(function() {
				if($(this).val()!='') {
					$(this).addClass('active-data-filter');
				}
			});
		}
	});

	  $(".trigger_popup_fricc").click(function(event){
	  	var id = $(this).attr('id');
	  	var idtotarget = '#'+id+' .hover_bkgr_fricc';
       	$(idtotarget).show();
    });
    $('.hover_bkgr_fricc').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
    $('.popupCloseButton').click(function(){
        $('.hover_bkgr_fricc').hide();
    });



});