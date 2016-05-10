function setFeatureHeight() {
    var $header = $('.mag-head');
    var $feature = $('.magazine-feature');
    var headerHeight = $header.outerHeight();
    var wh = $(window).height();
    var newHeight = (wh - headerHeight);
    $feature.outerHeight(newHeight);
}

function initCaptionTrigger() {
    $('.mag-gallery_images_caption_view-trigger').on('click',function(e) {
        var $caption = $(this).closest('.mag-gallery_images_caption');
        var $label = $caption.find('.mag-gallery_images_caption_view-trigger span');
        $label.text() == 'View' ? $label.text('Hide') : $label.text('View');
        $caption.toggleClass('mag-gallery_images_caption--show');
    });
}

//set header height
// header-height = wh - mag-head
$(window).load(function(){
    setFeatureHeight();
});
$(window).resize(function(){
    setFeatureHeight();
});

$(document).ready(function() {

    $('.grid-item a').on('click',function(e) {
        if(Modernizr.touch) {
            var $gridItem = $(this).closest('.grid-item');
            var hoverClass = "grid-item--hover-state-show-on-mobile";
            if(!$gridItem.hasClass(hoverClass)) {
                e.preventDefault();
                $gridItem.addClass(hoverClass);
            } else if ($(e.target).hasClass('grid-item_close-overlay') || $(e.target).hasClass('grid-item_close-overlay_x')) {
                e.preventDefault();
                $gridItem.removeClass(hoverClass);
            }
        }
    });

    $('.mag-article_view-gallery').on('click',function(e) {
        e.preventDefault();
        $('.mag-article_gallery .nivo-lightbox:first-child').trigger('click');
    });

    $('.mag-article_watch-video').on('click',function(e) {
        e.preventDefault();
        $('.mag-article_gallery .nivo-lightbox.gallery-video-lightbox').trigger('click');
    });

    $('.mag-article_view-illustration').on('click',function(e) {
        e.preventDefault();
        $('.mag-article_gallery .nivo-lightbox.gallery-illustration-lightbox').trigger('click');
    });

    initCaptionTrigger();

    $(".magazine-feature_title").fitText(1.4, { minFontSize: '48px', maxFontSize: '80px' });
    $(".magazine-feature_sub").fitText(2, { minFontSize: '14px', maxFontSize: '22px' });
    $(".mag-articles_title").fitText(1, { minFontSize: '34px', maxFontSize: '52px' });

    //force resize for fitText bug
    
    setTimeout(function(){
        $(window).resize();
        if(window.location.hash=='#stories') {
            if($(window).width() >= 1320) {
                $('body').scrollTo($('#stories'), 0, {
                    axis: 'y',
                    offset: {
                        top: -124
                    }
                });
            } else {
                $('body').scrollTo($('#stories'), 0, {
                    axis: 'y'
                });
            }
        }
    }, 500);

    if($(window).width() < 768) {
        setTimeout(function(){
            $('#mag-article-container .trigger').trigger('click');
        }, 550);
    }

    var newTitle, newDesc, newURL, newImageURL, includeOgTags, $metaDiv;
    $metaDiv = $('#meta-override');
    newTitle = $metaDiv.attr('data-title');
    newDesc = $metaDiv.attr('data-description');
    newURL = $metaDiv.attr('data-url');
    newImageURL = $metaDiv.attr('data-image');
    includeOgTags = true;

    var $facebookLink = $('.facebook-share-trigger');

    //disable here, doing in PHP
    //setPageMetaTags(newTitle, newDesc, newURL, newImageURL, includeOgTags);

    var twitterTitle = 'Check out this story on Stony Brook MAGAZINE: '+newTitle;
    var $twitterLink = $('.twitter-share-trigger');
    setTwitterURL(twitterTitle,newURL,$twitterLink);

    $facebookLink.on('click',function() {
        FB.ui({
            method: 'share',
            href: newURL,
        }, function(response){
            var $fbTrigger = $('.facebook-share-trigger');
            $fbTrigger.addClass('submitted').attr('disabled','disabled');
        });
    });

    $twitterLink.on('click',function(e) {
        window.open(this.href, "Share on Twitter", "width=600, height=600");
        var $tweetTrigger = $('.twitter-share-trigger');
        $tweetTrigger.addClass('submitted');
        return false;
    });

    
});