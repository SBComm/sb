$(document).ready(function() {

    //view more comparisons

    $('.cost-comparison .view-more').click(function(event) {
        $(this).remove();
        var $moreComparisons = $('.more-comparisons');
        $moreComparisons.fadeOut(0,function(){
            $moreComparisons.removeClass('hide-accessible').addClass('open')
                .fadeIn('fast');
        });
    });


});