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
        $('.mag-article_gallery .nivo-lightbox:last-child').trigger('click');
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

    
});