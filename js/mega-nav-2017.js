/* drop-accordion */

function hideAllMegaMenu() {
    $(".inmenu--primary-nav--mega-trigger").removeClass('selected');
    $(".active-megamenu").addClass('hide-accessible-1160').removeClass('active-megamenu');
    $('.inmenu--desktop-nav-link').trigger('focusout');
    clearActiveMegaMenuID();
}

function switchNavFocus($megaNav,megaIndex) {
    var $currentFocused = getFocusedMegaMenuLink();
    var currentFocusedIndex = getMegaMenuIdFromEl($currentFocused);

    if(currentFocusedIndex !== megaIndex) {
        //console.log($megaNav);
        //$megaNav.focus();
        $currentFocused.blur();
    }
}

function showMegaMenu(megaIndex) {
    var $megaNav = $("a[data-mega-menu-id='"+megaIndex+"']");
    var $megaMenu = $("div[data-mega-menu-id='"+megaIndex+"']");
    //console.log($megaMenu.hasClass('hide-accessible-1160'));

    //aria "close" the rest of the drop navs
    $('a[data-mega-menu-id]').attr('aria-expanded','false');
    $('div[data-mega-menu-id] .inmenu--desktop-nav').attr('aria-expanded','false').attr('aria-hidden','true');

    $megaNav.addClass('selected').attr('aria-expanded','true');

    if($megaMenu.hasClass('hide-accessible-1160')) {
        $megaMenu.removeClass('hide-accessible-1160').addClass('active-megamenu').find('.inmenu--desktop-nav').attr('aria-expanded','true').attr('aria-hidden','false');
    }

    switchNavFocus($megaNav,megaIndex);

    $('body').attr('data-active-mega-menu',megaIndex);
}

function hideMegaMenu(megaIndex,boolClearFocus) {
    var $megaNav = $("a[data-mega-menu-id='"+megaIndex+"']");
    var $megaMenu = $("div[data-mega-menu-id='"+megaIndex+"']");

    $megaNav.removeClass('selected').attr('aria-expanded','false');
    $megaMenu.addClass('hide-accessible-1160').find('.inmenu--desktop-nav').attr('aria-expanded','false').attr('aria-hidden','true');
    hideAllMegaMenu();

    clearActiveMegaMenuID();

    //console.log(boolClearFocus);
    if(boolClearFocus!==false) {
        var $currentFocused = getFocusedMegaMenuLink();
        //console.log($currentFocused);
        $currentFocused.blur();
    }
}

function hideActiveMegaMenu(boolClearFocus) {
    hideMegaMenu(getActiveMegaMenuID(),boolClearFocus);
}

function getActiveMegaMenuID() {
    return $('body').attr('data-active-mega-menu');
}

function getActiveMegaMenuLink() {
    return $("a[data-mega-menu-id='"+getActiveMegaMenuID()+"']");
}

function getMegaMenuLinkByID(linkID) {
    return $("a[data-mega-menu-id='"+linkID+"']");
}

function clearActiveMegaMenuID() {
    $('body').attr('data-active-mega-menu','');
}

function getFocusedMegaMenuLink() {
    return $("a[data-mega-menu-id]:focus");
}

function megaMenuIsShowing() {
    return getActiveMegaMenuID() >= 0 && getActiveMegaMenuID() !== '' ? true : false;
}

function getParentMegaMenuID($childEl) {
    return $childEl.closest('.inmenu--primary-nav--mega-nav').attr('data-mega-menu-id');
}

function getMegaMenuIdFromEl($linkEl) {
    return $linkEl.attr('data-mega-menu-id');
}

function tabNextElement($currEl) {
    var currTab = parseInt($currEl.attr('tabindex'));
    for(var i = currTab; i <= 9999; i++) {
        var nextIndex = i + 1;
        var $nextTab = $('a[tabindex="'+nextIndex+'"]');
        if($nextTab.length) {
            $nextTab.focus();
            break;
        } else if(i == 9999) {
            $('#main-site-content').focus();
            break;
        }
    }
}

function tabPrevElement($currEl) {
    var currTab = parseInt($currEl.attr('tabindex'));
    for(var i = currTab; i > -1; i--) {
        var prevIndex = i - 1;
        //console.log($('a[tabindex="'+prevIndex+'"]'));
        var $prevTab = $('a[tabindex="'+prevIndex+'"]');
        if($prevTab.length) {
            $prevTab.focus();
            break;
        }
    }
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

    var megaCache = [false, false, false, false, false, false, false, false, false, false];
    var megaTriggerCache = [false, false, false, false, false, false, false, false, false, false];
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

    var showMegaMenuOnEnter = function($menuTrigger, speed) {
        if($(window).width()>=1160) {

            //if the currently focused nav item is not equal to the curently hovered nav item
                //then lose focus off the currently focused nav item and focus the currently hovered nav item


            megaIndex = getMegaMenuIdFromEl($menuTrigger);
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
            },speed);
        }
    };

    var hideMegaMenuOnLeave = function($menuTrigger, speed) {
        if($(window).width()>=1160) {
            megaIndex = $menuTrigger.attr('data-mega-menu-id');
            megaTriggerCache[megaIndex] = false;
            //console.log($(this));
            //console.log(megaIndex);

            //console.log('clearing then setting triggerHideTimer');
            clearTimeout(triggerHideTimer);
            triggerHideTimer = setTimeout(function(){
                //console.log(megaIndex);
                $.each(megaTriggerCache, function() {
                    //console.log(this);
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
            },speed);
        }
    };

    //keyboard focus

    $(document.body).on('focusin','.inmenu--primary-nav--link',function(){
        // change this to let the element focus, then listen for enter and show the drop nav when event code = 13
        //reevaluate the taborder of links, if this will work with current nav build

        //if this link has a mega menu, show it
            //if not, hide all mega menu
            hideAllMegaMenu();
        
    });

    // on focus in link within previous mega menu,
        // if the current mega menu shown is not the same as the mega menu for this link,
            //show the new mega menu
    $(document.body).on('focusin','.inmenu--desktop-nav_related-links a:last-child',function(){
        var parentMenu = getParentMegaMenuID($(this));
        var currentMenu = getActiveMegaMenuID();
        //console.log(parentMenu);
        //console.log(currentMenu);
        if(getParentMegaMenuID($(this)) != getActiveMegaMenuID()) {
            hideAllMegaMenu();
            showMegaMenu(parentMenu);
        }
    });

    $(document.body).on('focusin','.inmenu--primary-nav--mega-trigger',function(){
        //showMegaMenuOnEnter($(this), 0);
        hideAllMegaMenu();
    });

    $(document.body).on('keydown',function(e) {
        var $focusedEl = $(':focus');
        //console.log($focusedEl);

        //right and left
            //if focused element is one of the main nav links
                //if right, send focus to the next nav link
                //if left, send focus to the prev nav link
            //if focused element is one of the links within the mega menu's main ul's
                //currIndex = get the nth index of the link within its current ul
                //if right
                    //if there is a ul.next()
                        //get the length of the ul (how many li's are in the ul)
                            //if currIndex > ul.length, focus ul.next() li:last-child
                            //else, focus the link with the same index in ul.next()

                //if right
                    //if there is a ul.prev()
                        //get the length of the ul (how many li's are in the ul)
                            //if currIndex > ul.length, focus ul.prev() li:last-child
                            //else, focus the link with the same index in ul.prev()

            //if focused element is one of the links within the mega menu's related links
                //left and right trigger default next and prev focus

        
        if( $focusedEl.hasClass('inmenu--desktop-nav-link') ) { //if focused on a main nav item
            if (e.keyCode == 37 || (e.shiftKey && e.keyCode == 9)) { //left or shift+tab
                e.preventDefault();
                var $prevLink = $focusedEl.closest('li.inmenu--primary-nav').prev('li.inmenu--primary-nav').find('.inmenu--desktop-nav-link');
                //console.log($prevLink);
                $prevLink.focus();
            } else if (e.keyCode == 39 || e.keyCode == 9) { //right or tab
                e.preventDefault();
                //console.log($focusedEl.closest('li').is('.inmenu--primary-nav:last'));
                if(e.keyCode == 9 && $focusedEl.closest('li').is('.inmenu--primary-nav:last')) {
                    var $lastLink = $focusedEl.closest('li').find('.inmenu--desktop-nav_related-links a:last-of-type');
                    tabNextElement($lastLink);
                    //console.log($nextLink);
                } else {
                    var $nextLink = $focusedEl.closest('li.inmenu--primary-nav').next('li.inmenu--primary-nav').find('.inmenu--desktop-nav-link');
                    $nextLink.focus();
                }
            } else if (e.keyCode == 38) { //up
                e.preventDefault();
                if(megaMenuIsShowing()) {
                    hideActiveMegaMenu(false);
                }
            } else if (e.keyCode == 40) { //down
                e.preventDefault();
                //console.log(megaMenuIsShowing());
                //console.log(getMegaMenuIdFromEl($focusedEl));
                if(!megaMenuIsShowing()) {
                    showMegaMenu(getMegaMenuIdFromEl($focusedEl));
                } else if(megaMenuIsShowing()) {
                    //select the first link
                    $('.active-megamenu .inmenu--desktop-only ul:first-child li:nth-child(1) a').focus();
                }
            } else if (e.keyCode == 13) { //enter
                var newURL = $focusedEl.attr('href');
                window.open(newURL, '_self');
            }
        } 
        else if( $focusedEl.closest('.inmenu--desktop-nav').length ) { //if focused within a mega menu
            var $thisParentListItem = $focusedEl.closest('li');
            var $thisParentList = $thisParentListItem.closest('ul');
            var $prevList = $thisParentList.prev('ul');
            var $nextList = $thisParentList.next('ul');
            var prevListCount = $prevList.children('li').length;
            var nextListCount = $nextList.children('li').length;
            var currListItemIndex = $thisParentListItem.index() + 1;
            var goToIndex = 0;

            if (e.keyCode == 39) { //right
                e.preventDefault();
                if($focusedEl.closest('.inmenu--desktop-nav_related-links').length) { //if within related links
                    tabNextElement($focusedEl);
                } else if($nextList.length) { //if regular nav links
                    goToIndex = (nextListCount < currListItemIndex ? nextListCount : currListItemIndex);
                    $nextList.find('li:nth-child('+goToIndex+') a').focus();
                }
            } else if (e.keyCode == 37) { //left
                e.preventDefault();
                if($focusedEl.closest('.inmenu--desktop-nav_related-links').length) { //if within related links
                    tabPrevElement($focusedEl);
                } else if($prevList.length) { //if regular nav links
                    goToIndex = (prevListCount < currListItemIndex ? prevListCount : currListItemIndex);
                    $prevList.find('li:nth-child('+goToIndex+') a').focus();
                }
            } else if (e.keyCode == 38) { //up
                e.preventDefault();
                if($focusedEl.is('.active-megamenu .inmenu--desktop-only ul:first-child li:nth-child(1) a')) { //if we're on the first link
                    getActiveMegaMenuLink().focus();
                } else {
                    tabPrevElement($focusedEl);
                }
            } else if (e.keyCode == 40) { //down
                e.preventDefault();
                tabNextElement($focusedEl);
            } else if (e.keyCode == 27) { //esc
                getActiveMegaMenuLink().focus();
            }
        } else if (e.keyCode == 27) { //esc, fallback for entire page
            hideAllMegaMenu();
        }
                

            //if focused element is one of the links within the mega menu's related links
                //left and right trigger default next and prev focus

        //up (38) and down (40)
            //if down
                //send focus down to the next tabindex (tab next)
            //if up
                //if focused element is one of the main nav links
                    //hide the mega menu if it is showing (?)
                //if focused element is one of the links within the mega menu
                    //send focus up to the previous tabindex (tab next)

    });

    //mouse

    $(document.body).on('mouseenter','.inmenu--primary-nav--mega-trigger',function(){
        showMegaMenuOnEnter($(this), 500);
    });

    $(document.body).on('mouseleave','.inmenu--primary-nav--mega-trigger',function(){
        hideMegaMenuOnLeave($(this), 500);
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

    var showLoginMenuDropdown = function($loginButton) {
        if($(window).width()>=1160) {

            dropNav = $loginButton.closest('.inmenu--logins').find('.mp-level');

            if($(dropNav).hasClass('hide-accessible-1160')) {
                $(dropNav).removeClass('hide-accessible-1160').addClass('active-megamenu');
            }
        }
    };

    $('.inmenu--logins-link').mouseenter(function() {
        //console.log(showLoginMenuDropdown);
        showLoginMenuDropdown($(this));
    });

    $('.inmenu--logins-link').on('focus', function() {
        //console.log(showLoginMenuDropdown);
        showLoginMenuDropdown($(this));
    });

    $('.primary-nav_logobar, .mp-menu .search-container input[type="text"]').mouseenter(function() {
        $('.inmenu--logins').find('.mp-level').addClass('hide-accessible-1160');
    });

});