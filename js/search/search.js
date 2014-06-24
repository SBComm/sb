/* custom: get site to search from URL */
var siteToSearch = $.urlParam('site');
var siteSearchMessage, googleInputCode, googleResultsCode, searchInputValue;

if(siteToSearch!=null &&siteToSearch!=0 &&siteToSearch!='') {
	if(RegexTest(siteToSearch,'url')) {

    	siteToSearch = decodeURIComponent(siteToSearch);
    	googleInputCode = '<gcse:searchbox as_sitesearch="'+siteToSearch+'"></gcse:searchbox>';
    	googleResultsCode = '<gcse:searchresults as_sitesearch="'+siteToSearch+'"></gcse:searchresults>';

    	if(siteToSearch.indexOf('http')<0) {
    		siteToSearch = 'http://' + siteToSearch;
    	}

    	$('#cse-search-input').html(googleInputCode);
    	$('#cse-search-results').html(googleResultsCode);

    	siteSearchMessage  = '<span class="site-search-message">You are currently searching: <a href="'+siteToSearch+'">' + siteToSearch + '</a></span>';
    	siteSearchMessage += '<span role="link" id="search-all-link">Search all of stonybrook.edu</span>'; 

    	$('#site-search-message').html(siteSearchMessage);

	}
}

/* Google Custom Search init */
(function() {
var cx = '005124310102344715141:zer6ki_efgi';
var gcse = document.createElement('script');
gcse.type = 'text/javascript';
gcse.async = true;
gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
    '//www.google.com/cse/cse.js?cx=' + cx;
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(gcse, s);
})();

/* people search */
function doPeopleSearch(peopleInputVal) {

    var peopleSrc      = 'http://adam.cc.sunysb.edu/acc/new-dirsearch.cgi';
    var peopleQuery, peopleFrame, peopleInputVal, peopleLink;
    console.log(peopleInputVal);
    if(peopleInputVal!='') {
        peopleQuery = '?name_string='+peopleInputVal+'&status=Any';
        peopleLink = peopleSrc + peopleQuery;
        peopleFrame = $('#people-frame');
        peopleFrame.attr('src',peopleLink);
        peopleFrame.iFrameResize({});
    }
    
}

/* Set placeholder on the Google Search input element */
$(document).ready(function() {

	function doesExist(el) {
    	if(el.length) {
			return true;
    	}
    	return false;
    }

    function getSearchTarget() {
    	var searchInputValue = $('input.gsc-input').val();
    	var searchHref = "search"; //update link;
		console.log('val: '+searchInputValue);

    	if(searchInputValue!=null && searchInputValue!='') {
    		searchHref += "?search="+searchInputValue;
    	}

    	return searchHref;
    }

    function setPlaceholder(el) {
    	cseSearchEl = $('input.gsc-input');
    	if(doesExist(el)) {
    		el.attr('placeholder','Search the website...');
    	} else {
    		
    		setTimeout( function() { 
    			setPlaceholder(cseSearchEl);
    		}, 500);
    	}
    }
	
	var cseSearchEl = $('input.gsc-input');
    setPlaceholder(cseSearchEl);

    $('#search-all-link').click(function() {
    	window.location.href = getSearchTarget();

    });

    $('.site-input input').keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        console.log(keycode);
        if(keycode == '13'){
            doPeopleSearch($(this).val());
        }
    });

    $('#people-search-btn').click(function() {
        doPeopleSearch($('.site-input input').val());
    });

    $('#people-frame').iFrameResize({});

});