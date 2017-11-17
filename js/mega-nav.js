/* drop-accordion */

function hideAllDropNav() {
    $("nav.drop-nav").removeClass('open').addClass('hide-accessible');
    $('.main-nav-list li').removeClass('active');
}

function hideDropNav(id) {
    var $dropNav = $("nav.drop-nav[data-drop-nav-id='" + id + "']");
    //$("nav.drop-nav[data-drop-nav-id='" + id + "']").addClass('hide-accessible').fadeIn('fast');

    $dropNav.fadeIn(0,function(){
      $dropNav.removeClass('open')
        .fadeOut('fast',function() {
            $dropNav.addClass('hide-accessible').fadeIn('fast');
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
        $('.main-nav-list li').removeClass('active');
        dropNavId = $(this).closest('.drop-nav').data('drop-nav-id');
        hideDropNav(dropNavId);
    });

    $('.main-nav-list li a').click(function(event) {

        dropNavId = $(this).data('drop-nav-id');

        if(dropNavId>0) {
            event.preventDefault();

            dropNav = $("nav.drop-nav[data-drop-nav-id='" + dropNavId + "']");
            subNavLi = $(this).closest('li');

            if($(dropNav).hasClass('open')) {
                //$(subNavLi).removeClass('active');
                //hideDropNav(dropNavId);
            } else {
                $('.main-nav-list li').removeClass('active');
                hideAllDropNav();
                $(subNavLi).addClass('active');
                showDropNav(dropNavId);
            }
        }

    });

    $('.main-nav-list--show-on-hover li a').mouseenter(function(e) {
        dropNavId = $(this).data('drop-nav-id');

        if(dropNavId>0 && $(window).width()>=1022) {

            dropNav = $("nav.drop-nav[data-drop-nav-id='" + dropNavId + "']");

            if($(dropNav).hasClass('hide-accessible')) {
                $(this).trigger('click');
            }
        }
        
    });

    $(document.body).on('focusin','.main-nav-list li a',function(){
        console.log($(this));
        // change this to let the element focus, then listen for enter and show the drop nav when event code = 13
        //reevaluate the taborder of links, if this will work with current nav build

        //if this link has a mega menu, show it
            //if not, hide all mega menu
            var dropNavId = $(this).attr('data-drop-nav-id');

            dropNav = $("nav.drop-nav[data-drop-nav-id='" + dropNavId + "']");

            if($(dropNav).hasClass('hide-accessible')) {
                $(this).trigger('click');
            } else {
                hideAllDropNav();
            }
        
    });

    $(document.body).on('focusin','nav.drop-nav a',function(){

        var dropNavId = $(this).closest('nav.drop-nav').attr('data-drop-nav-id');
        console.log(dropNavId);

        dropNav = $("nav.drop-nav[data-drop-nav-id='" + dropNavId + "']");
        if($(dropNav).hasClass('hide-accessible')) {
            hideAllDropNav();
            showDropNav(dropNavId);
        }

    });

    $(document.body).on('focusin','.quick-nav a',function(){
        if($("nav.drop-nav").hasClass('open')) {
            hideAllDropNav();
        }
    });


});