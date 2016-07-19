/* custom: get site to search from URL */
var siteToSearch = $.urlParam('site');
var siteSearchMessage, googleInputCode, googleResultsCode, searchInputValue;

if(siteToSearch!=null &&siteToSearch!=0 &&siteToSearch!='') {

    //replace any double- or single-encoded characters
    siteToSearch = siteToSearch.replace(/%252F/g, "/");
    siteToSearch = siteToSearch.replace(/%253A/g, "/");
    siteToSearch = siteToSearch.replace(/%3A/g, ":");
    siteToSearch = siteToSearch.replace(/%2F/g, "/");

	if(RegexTest(siteToSearch,'url')) {

    	siteToSearch = decodeURIComponent(siteToSearch);

    	googleInputCode = '<gcse:searchbox as_sitesearch="'+siteToSearch+'"></gcse:searchbox>';
    	googleResultsCode = '<gcse:searchresults as_sitesearch="'+siteToSearch+'"></gcse:searchresults>';

    	if(siteToSearch.indexOf('http')<0) {
    		siteToSearch = '//' + siteToSearch;
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
var cx = '003611762686162733431:3nlcacoyxzc';
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
    var defaultMessage = $('.search-default-message');
    //console.log(peopleInputVal);
    if(peopleInputVal!='') {
        if(defaultMessage.length) {
            $(defaultMessage).remove();
        }
        peopleQuery = '?name_string='+peopleInputVal+'&status=Any';
        peopleLink = peopleSrc + peopleQuery;
        peopleFrame = $('#people-frame');
        peopleFrame.attr('src',peopleLink);
        peopleFrame.iFrameResize({});
        /*peopleFrame.iFrameResize({log:true});*/
    }
    
}

/* Set placeholder on the Google Search input element */
$(document).ready(function() {

    //if there is a value for url parameter 'name', use it on people search
    var queryParam = $.urlParam('q');

    if(queryParam!=null &&queryParam!=0 &&queryParam!='') {
        $('.site-input input').val(queryParam);
        doPeopleSearch($('.site-input input').val());
    } else {
        $('.site-input input').focus();
    }


    var defaultMessage = $('.search-default-message');
    var queryTerm = $.urlParam('q');

    if(queryTerm!=''&&queryTerm!=0&&queryTerm!=null) {
        defaultMessage.remove();
    } else {
        defaultMessage.delay(4500).fadeOut(2200);   
    }

	function doesExist(el) {
    	if(el.length) {
			return true;
    	}
    	return false;
    }

    function getSearchTarget() {
    	var searchInputValue = $('input.gsc-input').val();
    	var searchHref = "//www.stonybrook.edu/search/"; //update link;

    	if(searchInputValue!=null && searchInputValue!='') {
    		searchHref += "?q="+searchInputValue;
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
                var queryTerm = $.urlParam('q');
                if(queryTerm==''||queryTerm==null) {
                    $(cseSearchEl).focus();
                }
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
        if(keycode == '13'){
            doPeopleSearch($(this).val());
        }
    });

    $('#people-search-btn').click(function() {
        doPeopleSearch($('.site-input input').val());
    });

    //$('#people-frame').iFrameResize({});

    //intercept links for people and pages, append the current search term querystring, then do search
    $('.search-pages-link a').click(function(e){
        e.preventDefault();
        var goToHref = $(this).attr('href');
        var queryTerm = $('.site-input input').val();
        if(queryTerm!=''&&queryTerm!=null) {
            goToHref += '?q=' + queryTerm;
        }
        window.location.href = goToHref;
    });

    $('.search-people-link a').click(function(e){
        e.preventDefault();
        var goToHref = $(this).attr('href');
        var queryTerm = $('input.gsc-input').val();
        if(queryTerm!=''&&queryTerm!=null) {
            goToHref += '?q=' + queryTerm;
        }
        window.location.href = goToHref;
    });

});