//adapted from http://www.lovelldsouza.com/webdev/flickr-to-website/
function getImgs(setId) {
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
        	itemsCustom: [[0,2],[480,2],[600,3],[840,4],[960,5],[1140,6],[1440,7],[1700,8]],
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