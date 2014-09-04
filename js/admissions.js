/* drop-accordion */

function hideAllDropNav() {
    $("nav.drop-nav").removeClass('open').addClass('hide-accessible');
}

function hideDropNav(id) {
    var $dropNav = $("nav.drop-nav[data-drop-nav-id='" + id + "']");
    //$("nav.drop-nav[data-drop-nav-id='" + id + "']").addClass('hide-accessible');

    $dropNav.fadeIn(0,function(){
      $dropNav.removeClass('open')
        .fadeOut('fast',function() {
            $dropNav.addClass('hide-accessible')
        });
    });
}

function showDropNav(id) {
    var $dropNav = $("nav.drop-nav[data-drop-nav-id='" + id + "']");
    //dropNav.removeClass('hide-accessible');

    $dropNav.fadeOut(0,function(){
      $dropNav.removeClass('hide-accessible').addClass('open')
        .fadeIn('fast');
    });
}

$(document).ready(function() {

    var dropNavId,
        dropNav,
        subNavLi;

    $('.close-the-drop-nav').click(function(event) {
        $('.main-nav-list li').removeClass('selected');
        dropNavId = $(this).closest('.drop-nav').data('drop-nav-id');
        hideDropNav(dropNavId);
    });

    $('.main-nav-list li a').click(function(event) {

        dropNavId = $(this).data('drop-nav-id');

        if(dropNavId>0) {
            event.preventDefault();

            dropNav = $("nav.drop-nav[data-drop-nav-id='" + dropNavId + "']");
            subNavLi = $(this).closest('li');

            console.log(dropNavId);
            console.log(dropNav);
            console.log(subNavLi);

            if($(dropNav).hasClass('open')) {
                console.log('open');
                $(subNavLi).removeClass('selected');
                hideDropNav(dropNavId);
            } else {
                console.log('closed');
                $('.main-nav-list li').removeClass('selected');
                hideAllDropNav();
                $(subNavLi).addClass('selected');
                showDropNav(dropNavId);
            }
        }

    });

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
/*

    $('.main-nav-list li a').click(function(event) {
        $('.main-nav-list li').removeClass('selected');
        $(this).closest('li').toggleClass('selected');
        event.preventDefault();
        dropNavId = $(this).data('drop-nav-id');
        dropNav = "nav.drop-nav[data-drop-nav-id='" + dropNavId + "']";
        dropNav = $(dropNav);
        $('nav.drop-nav').hide();
        dropNav.fadeToggle();
    });
*/
