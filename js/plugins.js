// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

/* From http://codepen.io/micahgodbolt/pen/FgqLc */
/* Thanks to CSS Tricks for pointing out this bit of jQuery
http://css-tricks.com/equal-height-blocks-in-rows/
It's been modified into a function called at page load and then each time the page is resized. One large modification was to remove the set height before each new calculation. */

equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
 $(container).each(function() {

   $el = $(this);
   $($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

/* From http://www.jquery4u.com/snippets/url-parameters-jquery/ */
/* Usage:
   $('#city').val(decodeURIComponent($.urlParam('city')));
*/

$.urlParam = function(name){
    var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null){
       return null;
    }
    else{
       return results[1] || 0;
    }
};

function RegexTest(value, type) {
  var pattern;
  if(type=="url") {
    pattern = /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/;
    if(value.match(pattern)) {
      return true;
    } else {
      return false;
    }
  }
};

/* drop-accordion */
var initializeAccordion = function() {
  var accordionContent;
  $('.drop-accordion .tab').on('click',function() {
    $accordionContent = $(this).closest('.item').find('.content');
    console.log($accordionContent);
    $openTab = $(this).closest('.drop-accordion').find('.open').closest('.item').find('.tab');
    console.log($openTab);
    if($accordionContent.hasClass('hide-accessible')) {
      $(this).addClass('active');
      $accordionContent.slideUp(0,function(){
        $accordionContent.removeClass('hide-accessible').addClass('open')
          .slideDown('fast');
        $openTab.click();
      });

    } else {
      $(this).removeClass('active');
      $accordionContent.slideUp('fast',function(){
        $accordionContent.addClass('hide-accessible').removeClass('open')
          .slideDown(0);
      });

    }

  });
};

initializeAccordion();

/* Add commas to thousands */
/* from http://anthonybush.com/projects/jquery_fast_live_filter/demo/ */

function addCommas(num) {
  num = String(num);
  var rgx = /(\d+)(\d{3})/;
  while (rgx.test(num)) {
    num = num.replace(rgx, '$1' + ',' + '$2');
  }
  return num;
}

/* Replace chars */
/* From http://stackoverflow.com/questions/1144783/replacing-all-occurrences-of-a-string-in-javascript */
function escapeRegExp(string) {
  return string.replace(/([.*+?^=!:${}()|\[\]\/\\])/g, "\\$1");
}
function replaceAll(string, find, replace) {
  return string.replace(new RegExp(escapeRegExp(find), 'g'), replace);
}


/* Flickr gallery */

//adapted from http://www.lovelldsouza.com/webdev/flickr-to-website/
function makeFlickrGallery(setId) {
  var URL = "https://api.flickr.com/services/rest/" + // Call API
    "?method=flickr.photosets.getPhotos" +  // Get photo from a photoset. http://www.flickr.com/services/api/flickr.photosets.getPhotos.htm
    "&api_key=0e78a7e20cc2ea3a5456c04ce7deb2b1" +  // API key. Get one here: http://www.flickr.com/services/apps/create/apply/
    "&photoset_id=" + setId +  // The set ID.
    "&privacy_filter=1" +  // 1 signifies all public photos.
    "&per_page=40" + // For the sake of this example I am limiting it to 20 photos.
    "&format=json&nojsoncallback=1";  // Er, nothing much to explain here.

  // See the API in action here: http://www.flickr.com/services/api/explore/flickr.photosets.getPhotos
  $.getJSON(URL, function(data){
    $.each(data.photoset.photo, function(i, item){
      // Creating the image URL. Info: http://www.flickr.com/services/api/misc.urls.html
      var src_start = "http://farm" + item.farm + ".static.flickr.com/" + item.server + "/" + item.id + "_" + item.secret;
      var img_thumb_src = src_start + "_q.jpg";
      var img_large_src = src_start + "_b.jpg";

      var img_html = '<a class="item nivo-lightbox" href="'+ img_large_src +'" data-lightbox-gallery="event-gallery">';
      img_html += '<img src="' + img_thumb_src + '" />';
      img_html += '</a>';

      $(img_html).appendTo("#the-carousel");
    });
  }).done(function() {
    // Create the Carousel
      var owl = $("#the-carousel");
        owl.owlCarousel({
          itemsCustom: [[0,2],[480,2],[600,3],[840,4],[960,3],[1024,4]],
            autoPlay: false,
            navigation : true, // Show next and prev buttons
            slideSpeed : 800,
            paginationSpeed : 400
        });
        $('.owl-prev-3').on('click', function() {
            owl.trigger('owl.prev');
        });
        $('.owl-next-3').on('click', function() {
            owl.trigger('owl.next');
        });

        // Initiate the Lightbox
        $('.nivo-lightbox').nivoLightbox();
  }).fail(function() {
        //fallback to a link to the gallery
    var button_html = '<a class="cta cta-outline clearfix arrow-after view-gallery" href="https://www.flickr.com/photos/sbuadvancement/sets/72157649295457517/" target="_blank">View Gallery</a>';
        $('.carousel-wrapper').after(button_html);
  });
}