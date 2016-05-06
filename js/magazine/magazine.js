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

    $('.boldMovesBox').on('click',function(e) {
        if($(e.target).hasClass('boldMovesBox-title') || $(e.target).parents('.boldMovesBox-title').length) {
            e.preventDefault();
        }
        if($(window).width()<1024) {
            if(!$(this).hasClass('engaged') && !$(e.target).hasClass('boldMovesBox-link')) {
                $(this).toggleClass('engaged');
            } else if($(e.target).hasClass('close-boldMovesBox') || $(e.target).hasClass('close-boldMovesBox-x')) {
                e.preventDefault();
                $(this).closest('.boldMovesBox').removeClass('engaged');
            }
        }
    });

    initCaptionTrigger();

    $(".magazine-feature_title").fitText(1.4, { minFontSize: '48px', maxFontSize: '80px' });
    $(".magazine-feature_sub").fitText(2, { minFontSize: '14px', maxFontSize: '22px' });
    $(".mag-articles_title").fitText(1, { minFontSize: '34px', maxFontSize: '52px' });

    //force resize for fitText bug
    
    setTimeout(function(){ $(window).resize(); }, 1000);
});