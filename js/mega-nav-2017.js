/* drop-accordion */

function hideAllMegaMenu() {
    $(".inmenu--primary-nav--mega-trigger").removeClass('selected');
    $(".active-megamenu").addClass('hide-accessible-1160').removeClass('active-megamenu');
}

function showMegaMenu(megaIndex) {
    var $megaNav = $("a[data-mega-menu-id='"+megaIndex+"']");
    var $megaMenu = $("div[data-mega-menu-id='"+megaIndex+"']");
    //console.log($megaMenu.hasClass('hide-accessible-1160'));

    $megaNav.addClass('selected');

    if($megaMenu.hasClass('hide-accessible-1160')) {
        $megaMenu.removeClass('hide-accessible-1160').addClass('active-megamenu');
    }
}

function hideMegaMenu(megaIndex) {
    var $megaNav = $("a[data-mega-menu-id='"+megaIndex+"']");
    var $megaMenu = $("div[data-mega-menu-id='"+megaIndex+"']");

    $megaNav.removeClass('selected');
    $megaMenu.addClass('hide-accessible-1160');
    hideAllMegaMenu();
}

/* reset the menu if window resized from desktop to mobile */
$(window).resize(function(){
    if($(window).width()<1160 && $('body').attr('data-mobile-menu-reset')!='true') {
        $('body').attr('data-mobile-menu-reset','true');
        $('#mp-pusher').removeClass('mp-pushed').attr('style','');
        $('.mp-level').attr('style','');
        $('.mp-level-overlay').removeClass('mp-level-overlay');
    }
    if($(window).width()>=1160 && $('body').attr('data-mobile-menu-reset')=='true') {
        $('body').attr('data-mobile-menu-reset','false');
    }
});

$(document).ready(function() {

    /* clear search */

    function clearSearch($searchInput, $clearEl) {
        $searchInput.val('').focusout();
    }

    var $searchInput = $('#search-form-query1');
    var $clearEl = $('.inmenu--search_desktop-close');

    $('.inmenu--search_desktop-close').on('click', function(e) {
        e.preventDefault();
        clearSearch($searchInput, $clearEl);
    });

    /* mega-menu smart-hover */
    /* https://stackoverflow.com/questions/7846040/jquery-how-to-detect-mouse-is-not-over-a-and-b */
    /* https://stackoverflow.com/a/7846253/4292876 */
    /* http://jsfiddle.net/manseuk/StUvz/ */

    var megaCache = [];
    var megaTriggerCache = [];
    var megaIndex = 0;
    var megaFlag = megaTriggerFlag = false;
    var triggerHideTimer, triggerShowTimer;

    var megaCount = 0;
    $('.inmenu--primary-nav--mega-nav').each(function() {
        $(this).attr('data-mega-menu-id',megaCount++);
    });
    megaCount = 0
    $('.inmenu--primary-nav--mega-trigger').each(function() {
        $(this).attr('data-mega-menu-id',megaCount++);
    });

    $(document.body).on('mouseenter','.inmenu--primary-nav--mega-trigger',function(){
        if($(window).width()>=1160) {
            megaIndex = $(this).attr('data-mega-menu-id');
            megaTriggerCache[megaIndex] = true;
            

            triggerShowTimer = setTimeout(function(){
                //console.log(megaIndex);
                //console.log(megaTriggerCache[megaIndex]);
                if(megaTriggerCache[megaIndex]) {
                    //console.log('hey!');
                    //console.log('hiding all');
                    hideAllMegaMenu();
                    //console.log('showing '+megaIndex);
                    showMegaMenu(megaIndex);
                }
            },500);
        }
    });

    $(document.body).on('mouseleave','.inmenu--primary-nav--mega-trigger',function(){
        if($(window).width()>=1160) {
            megaIndex = $(this).attr('data-mega-menu-id');
            megaTriggerCache[megaIndex] = false;
            //console.log($(this));
            //console.log(megaIndex);

            //console.log('clearing then setting triggerHideTimer');
            clearTimeout(triggerHideTimer);
            triggerHideTimer = setTimeout(function(){
                //console.log(megaIndex);
                $.each(megaTriggerCache, function() {
                    //console.log(this.valueOf());
                    //console.log(Boolean(this));
                    if(this.valueOf()) {
                        megaTriggerFlag = true;
                        return false;
                    }
                });

                //console.log(megaIndex);
                if(!megaTriggerFlag) {
                    //console.log('hiding '+megaIndex);
                    hideMegaMenu(megaIndex);
                }
                megaTriggerFlag = false;
            },500);
        }
    });

    $(document.body).on('mouseenter','.inmenu--primary-nav--mega-nav',function(){
        if($(window).width()>=1160) {
            megaIndex = $(this).attr('data-mega-menu-id');
            megaCache[megaIndex] = true;
            //console.log('clearing triggerHideTimer and triggerShowTimer');
            clearTimeout(triggerHideTimer);
            clearTimeout(triggerShowTimer);
        }
    });

    $(document.body).on('mouseleave','.inmenu--primary-nav--mega-nav',function(){
        if($(window).width()>=1160) {
            megaIndex = $(this).attr('data-mega-menu-id');
            megaCache[megaIndex] = false;
            //console.log($(this));
            //console.log(megaIndex);

            setTimeout(function(){
                //console.log(megaIndex);
                $.each(megaCache, function() {
                    //console.log(this.valueOf());
                    //console.log(Boolean(this));
                    if(this.valueOf()) {
                        megaFlag = true;
                        return false;
                    }
                });

                //console.log(megaIndex);
                if(!megaFlag) {
                    //console.log('hey!');
                    hideMegaMenu(megaIndex);
                }
                megaFlag = false;
            },500);
        }
    });

    $(document.body).on('click',function() {
        //console.log('got a click!');
        if($(".inmenu--primary-nav--mega-trigger").hasClass('selected')) {
            //console.log('hiding all mega menu');
            hideAllMegaMenu();
        }
    });

    /*
        $('.inmenu--primary-nav--mega-trigger').mouseenter(function(e) {

            if($(window).width()>=1160) {
                megaIndex = $(this).attr('data-mega-menu-id');
                hideAllMegaMenu();
                showMegaMenu(megaIndex);
            }
            
        }).mouseleave(function(e) {

            if($(window).width()>=1160) {

                

            }
            
        });
    */
    $('.inmenu--logins-link').mouseenter(function() {

        if($(window).width()>=1160) {

            dropNav = $(this).closest('.inmenu--logins').find('.mp-level');

            if($(dropNav).hasClass('hide-accessible-1160')) {
                $(dropNav).removeClass('hide-accessible-1160').addClass('active-megamenu');
            }
        }

    });

    $('.primary-nav_logobar, .mp-menu .search-container input[type="text"]').mouseenter(function() {
        $('.inmenu--logins').find('.mp-level').addClass('hide-accessible-1160');
    });

});