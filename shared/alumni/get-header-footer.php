<!--
//
// Author: Josh Palmeri
// Date:   December 9, 2015
//
/////////////////////////////////////
//
// This file is a working space for the alumni template uloaded to Blackbaud
// There are four sections:
//    1) Head Code
//         - Styles
//    2) Site Navigation (static)
//         - Logo
//         - Site Header
//         - Main Nav
//    3) Site Footer (static)
//         - Links
//         - Full footer
//         - Footerbar
//    4) Selected Nav Option (optional)
//         - Defines selected nav item
//              1 = GET CONNECTED
//              2 = GET INFORMED
//              3 = GET PERKS
//              4 = GIVE BACK
//              5 = STAY IN TOUCH
//    5) Footer Scripts
//         - jQuery listeners
//         - AJAX request for live header and footer to replace static versions of (2) and (3)
// 
//
-->



<!--
//    1) Head Code
//         - Styles
-->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link href="//www.stonybrook.edu/css/vendor/normalize.min.css" rel="stylesheet">
<link href="//www.stonybrook.edu/css/main.css" rel="stylesheet">
<link href="//www.stonybrook.edu/css/nav.css" rel="stylesheet">
<link href="//www.stonybrook.edu/css/second-level.css" rel="stylesheet">
<link href="//www.stonybrook.edu/css/second-level/alumni.css" rel="stylesheet">
<link href="//www.stonybrook.edu/css/second-level/alumni-inside.css" rel="stylesheet">
<link href="//www.stonybrook.edu/css/shared/blackbaud-advancement.css" rel="stylesheet">
<link href="//www.stonybrook.edu/css/shared/active-data-calendar.css" rel="stylesheet">
<link href="//www.stonybrook.edu/css/elements/cd-dropdown/cd-dropdown.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
<link href="//www.stonybrook.edu/css/elements/to-top-link/to-top.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/8b09d344-baa0-42a8-bbac-175ff46c86d5.css">
<link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/ee71ef3e-a7f1-47dd-8ae1-4ae6bec02b30.css"/>










<!--
//    2) Site Navigation (static)
//         - Logo
//         - Site Header
//         - Main Nav
-->
<div id="static-header-code">

    <div class="sbu-wrapper clearfix">
        <div class="sbu-sub-wrapper">

            <div class="header-container">
                <div class="nav-elements-container">
                    <!-- <quick-nav> -->
                    <nav id="header" class="quick-nav clearfix" data-search-style="default">
                        <div class="quick-nav-wrapper">
                            <ul class="no-pad-wrapper border-box clearfix">
                                <li>
                                    <a href="alumni/stay-in-touch">
                                        <i class="icon fa fa-university clearfix"></i>
                                        <span class="label clearfix">Alumni Association</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="alumni/stay-in-touch/alumni-relations">
                                        <i class="icon fa fa-graduation-cap clearfix"></i>
                                        <span class="label clearfix">Alumni Relations <span class="hide-accessible-mobile">Office</span></span>
                                    </a>
                                </li>
                                <li class="for-info">
                                    <a href="alumni/stay-in-touch/contact" class="clearfix">
                                        <i class="icon fa fa-paper-plane clearfix"></i>
                                        <span class="label clearfix">Contact</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                         <a href="#" class="give-flag persistent-flag">
                              <span class="hide-accessible">Give Now!</span>
                              <img src="//www.stonybrook.edu/img/buttons/give-now-flag.png">
                         </a>
                    </nav>
                    <!-- </quick-nav> -->
                </div>
                <!-- <logo-container> -->
                <div class="logo-container page-cat-sub clearfix border-box">
                    <header class="no-pad-wrapper">
                        <div class="logo-wrapper">
                            <div class="logo"><a href="http://www.stonybrook.edu/"><img src="//www.stonybrook.edu/img/stony-brook-university-logo.jpg"></a></div>
                            <h1 class="site-name serif"><a href="alumni">Alumni</a></h1>
                        </div>
                    </header>
                </div>
                <!-- </logo-container> -->
            </div>

            <div class="main-nav-container clearfix">
                <!-- <site-nav> -->
                <nav class="sub-nav big-n-bold border-box clearfix">
                    <div class="no-pad-wrapper clearfix">
                        <div class="menu-trigger border-box clearfix"><i class="icon fa fa-bars"></i></div>
                        <ul class="main-nav-list border-box hide-accessible-mobile clearfix">
                            <li class="clearfix no-dropdown desktop">
                                <a href="alumni" class="clearfix">
                                    <span class="label clearfix"><i class="icon fa fa-home"></i><span class="hide-accessible">Home</span></span>
                                </a>
                            </li>
                            <li class="clearfix larger">
                                <a href="alumni/events-and-reunions" class="clearfix" data-drop-nav-id="1">
                                    <span class="label clearfix">Get Connected</span>
                                </a>
                            </li>
                            <li class="clearfix larger">
                                <a href="alumni/news-and-spotlight" class="clearfix" data-drop-nav-id="2">
                                    <span class="label clearfix">Get Informed</span>
                                </a>
                            </li>
                            <li class="clearfix larger">
                                <a href="alumni/perks" class="clearfix" data-drop-nav-id="3">
                                    <span class="label clearfix">Get Perks</span>
                                </a>
                            </li>
                            <li class="clearfix larger">
                                <a href="alumni/give-back" class="clearfix" data-drop-nav-id="4">
                                    <span class="label clearfix">Give Back</span>
                                </a>
                            </li>
                            <li class="clearfix larger">
                                <a href="alumni/stay-in-touch" class="clearfix" data-drop-nav-id="5">
                                    <span class="label clearfix">Stay In Touch</span>
                                </a>
                            </li>
                        </ul>
                        <div class="search-container default clearfix border-box" style="top: -115px;">
                            <!--<form name="site-search" class="search-wrapper" action="https://www.stonybrook.edu/search/?" method="get">
                                <input type="text" id="search-form-query1" name="q" title="Search" value="" class="populate" size="30" placeholder="Search...">
                                <button type="submit" class="btn btn-success" id="search-form-submit1" alt="Do search">
                                    <i class="icon fa fa-search"></i>
                                </button>
                            </form>-->
                        </div>
                    </div>
                </nav>

                <nav class="drop-nav border-box clearfix hide-accessible" data-drop-nav-id="1">
                    <div class="drop-nav-heading clearfix">
                        <a href="alumni/events-and-reunions">Get Connected</a>
                        <span class="icon fa fa-times drop-nav-close close-the-drop-nav"></span>
                    </div>
                    <div class="no-pad-wrapper sub-links-wrapper clearfix">
                        <ul class="drop-nav-list border-box clearfix">
                            <li class="" data-li-order="01">
                                <a href="alumni/events-and-reunions" class="clearfix">
                                    <span class="label clearfix">Events &amp; Reunions</span>
                                </a>
                            </li>
                            <li class="" data-li-order="02">
                                <a href="alumni/chapters" class="clearfix">
                                    <span class="label clearfix">Chapters</span>
                                </a>
                            </li>
                            <li class="" data-li-order="03">
                                <a href="alumni/hsc-alums" class="clearfix">
                                    <span class="label clearfix">HSC Alums</span>
                                </a>
                            </li>
                            <li class="" data-li-order="04">
                                <a href="alumni/students" class="clearfix">
                                    <span class="label clearfix">Students</span>
                                </a>
                            </li>
                            <li class="" data-li-order="05">
                                <a href="alumni/recent-grads" class="clearfix">
                                    <span class="label clearfix">Recent Grads</span>
                                </a>
                            </li>
                            <li></li>
                        </ul>
                        <div class="mega-blurb">
                            Get connected with fellow alums at one of our networking events, reunions, or career workshops!
                        </div>
                        <div class="mega-img">
                            <img src="//www.stonybrook.edu/img/alumni/nav/get-connected-diag.png">
                        </div>
                    </div>
                    <div class="close-drop-nav close-the-drop-nav">
                        <span aria-role="button">Close Menu</span>
                    </div>
                </nav>

                <nav class="drop-nav border-box clearfix hide-accessible" data-drop-nav-id="2">
                    <div class="drop-nav-heading clearfix">
                        <a href="alumni/news-and-spotlight">Get Informed</a>
                        <span class="icon fa fa-times drop-nav-close close-the-drop-nav"></span>
                    </div>
                    <div class="no-pad-wrapper sub-links-wrapper clearfix">
                        <ul class="drop-nav-list border-box clearfix">
                            <li class="" data-li-order="01">
                                <a href="alumni/news-and-spotlight#news" class="clearfix">
                                    <span class="label clearfix">News</span>
                                </a>
                            </li>
                            <li class="" data-li-order="02">
                                <a href="alumni/news-and-spotlight#spotlight" class="clearfix">
                                    <span class="label clearfix">Spotlight</span>
                                </a>
                            </li>
                            <li class="" data-li-order="03">
                                <a href="alumni/news-and-spotlight/authors" class="clearfix">
                                    <span class="label clearfix">Authors</span>
                                </a>
                            </li>
                            <li></li>
                        </ul>
                        <div class="mega-blurb">
                            Learn how your alma mater is making a global impact as alumni are changing our world for the better.
                        </div>
                        <div class="mega-img">
                            <img src="//www.stonybrook.edu/img/alumni/nav/get-informed-2-diag.png">
                        </div>
                    </div>
                    <div class="close-drop-nav close-the-drop-nav">
                        <span aria-role="button">Close Menu</span>
                    </div>
                </nav>

                <nav class="drop-nav border-box clearfix hide-accessible" data-drop-nav-id="3">
                    <div class="drop-nav-heading clearfix">
                        <a href="alumni/perks">Get Perks</a>
                        <span class="icon fa fa-times drop-nav-close close-the-drop-nav"></span>
                    </div>
                    <div class="no-pad-wrapper sub-links-wrapper clearfix">
                        <ul class="drop-nav-list border-box clearfix">
                            <li class="" data-li-order="01">
                                <a href="alumni/perks" class="clearfix">
                                    <span class="label clearfix">Perks</span>
                                </a>
                            </li>
                            <li class="" data-li-order="02">
                                <a href="alumni/perks/lifelong-learning" class="clearfix">
                                    <span class="label clearfix">Lifelong Learning</span>
                                </a>
                            </li>
                            <li class="" data-li-order="03">
                                <a href="alumni/perks/spirit-and-pride" class="clearfix">
                                    <span class="label clearfix">SBU Pride</span>
                                </a>
                            </li>
                            <li class="" data-li-order="04">
                                <a href="alumni/perks#email-for-life" class="clearfix">
                                    <span class="label clearfix">Email for Life</span>
                                </a>
                            </li>
                            <li></li>
                        </ul>
                        <div class="mega-blurb">
                            Browse the wide selection of exclusive perks and discounts that are available to you as a Stony Brook alum!
                        </div>
                        <div class="mega-img">
                            <img src="//www.stonybrook.edu/img/alumni/nav/get-perks-diag.png">
                        </div>
                    </div>
                    <div class="close-drop-nav close-the-drop-nav">
                        <span aria-role="button">Close Menu</span>
                    </div>
                </nav>

                <nav class="drop-nav border-box clearfix hide-accessible" data-drop-nav-id="4">
                    <div class="drop-nav-heading clearfix">
                        <a href="alumni/give-back">Give Back</a>
                        <span class="icon fa fa-times drop-nav-close close-the-drop-nav"></span>
                    </div>
                    <div class="no-pad-wrapper sub-links-wrapper clearfix">
                        <ul class="drop-nav-list border-box clearfix">
                            <li class="" data-li-order="01">
                                <a href="alumni/give-back" class="clearfix">
                                    <span class="label clearfix">Volunteer</span>
                                </a>
                            </li>
                            <li class="" data-li-order="02">
                                <a href="http://stonybrook.edu/give" class="clearfix" target="_blank">
                                    <span class="label clearfix">Give</span>
                                </a>
                            </li>
                            <li></li>
                        </ul>
                        <div class="mega-blurb">
                            Join the growing community of alumni who are making a difference at Stony Brook.
                        </div>
                        <div class="mega-img">
                            <img src="//www.stonybrook.edu/img/alumni/nav/give-back-diag.png">
                        </div>
                    </div>
                    <div class="close-drop-nav close-the-drop-nav">
                        <span aria-role="button">Close Menu</span>
                    </div>
                </nav>

                <nav class="drop-nav border-box clearfix hide-accessible" data-drop-nav-id="5">
                    <div class="drop-nav-heading clearfix">
                        <a href="alumni/stay-in-touch">Stay In Touch</a>
                        <span class="icon fa fa-times drop-nav-close close-the-drop-nav"></span>
                    </div>
                    <div class="no-pad-wrapper sub-links-wrapper clearfix">
                        <ul class="drop-nav-list border-box clearfix">
                            <li class="" data-li-order="01">
                                <a href="alumni/stay-in-touch" class="clearfix">
                                    <span class="label clearfix">Alumni Association</span>
                                </a>
                            </li>
                            <li class="" data-li-order="02">
                                <a href="alumni/stay-in-touch/alumni-relations" class="clearfix">
                                    <span class="label clearfix">Alumni Relations</span>
                                </a>
                            </li>
                            <li class="" data-li-order="03">
                                <a href="alumni/form/send-us-your-news" class="clearfix">
                                    <span class="label clearfix">Send us Your News</span>
                                </a>
                            </li>
                            <li class="" data-li-order="04">
                                <a href="alumni/stay-in-touch/alumni-relations" class="clearfix">
                                    <span class="label clearfix">Contact</span>
                                </a>
                            </li>
                            <li class="" data-li-order="05">
                                <a href="alumni/stay-in-touch/visiting-sbu" class="clearfix">
                                    <span class="label clearfix">Visit</span>
                                </a>
                            </li>
                            <li></li>
                        </ul>
                        <div class="mega-blurb">
                            We're here to help you maintain a life long and meaningful relationship with Stony Brook University.
                        </div>
                        <div class="mega-img">
                            <img src="//www.stonybrook.edu/img/alumni/nav/stay-in-touch-diag.png">
                        </div>
                    </div>
                    <div class="close-drop-nav close-the-drop-nav">
                        <span aria-role="button">Close Menu</span>
                    </div>
                </nav>                  <!-- </site-nav> -->
            </div>

        </div>
    </div>
 </div>












<!--
//    3) Site Footer (static)
//         - Links
//         - Full footer
//         - Footerbar
-->
<div id="static-footer-code">

    <section class="campaign-banner campaign-banner--on-red fixed-background clearfix">
        <div class="campaign-banner__wrapper border-box clearfix">
            <span class="campaign-banner__logo-text hide-accessible">The Campaign for Stony Brook</span>
            <img class="campaign-banner__logo-image campaign-banner__logo-image--desktop" src="//www.stonybrook.edu/img/branding/logo/the-campaign-for-stony-brook--on-red--landscape.png" alt="The Campaign for Stony Brook logo" />
            <img class="campaign-banner__logo-image campaign-banner__logo-image--mobile" src="//www.stonybrook.edu/img/branding/logo/the-campaign-for-stony-brook--on-red--portrait.png" alt="The Campaign for Stony Brook logo" />
            <span class="campaign-banner__tagline">Together we go far beyond.</span>
            <a class="campaign__button campaign-banner__button" href="http://stonybrook.edu/campaign/">Join Us</a>
        </div>
    </section>

    <div class="sbu-wrapper clearfix">
        <div class="sbu-sub-wrapper">

            <footer class="site-footer clearfix">
                <nav class="wrapper">
                     <div class="clearfix">
                        <div class="col img-col">
                            <img src="//www.stonybrook.edu/img/logo/alumni-association-white-187.png" alt="Logo for Stony Brook University Alumni Association">
                        </div>
                        <div class="col link-col clearfix">
                           <div class="links">
                                <h4><a href="alumni/events-and-reunions">Get Connected</a></h4>
                                <a href="alumni/events-and-reunions">Events &amp; Reunions</a>
                                <a href="alumni/chapters">Chapters</a>
                                <a href="alumni/hsc-alums">HSC Alums</a>
                                <a href="alumni/students">Students</a>
                                <a href="alumni/recent-grads">Recent Grads</a>
                           </div>
                           <div class="links">
                                <h4><a href="alumni/news-and-spotlight">Get Informed</a></h4>
                                <a href="alumni/news-and-spotlight#news">News</a>
                                <a href="alumni/news-and-spotlight#spotlight">Alumni Spotlight</a>
                                <a href="alumni/news-and-spotlight/authors">Authors</a>
                           </div>
                           <div class="links">
                                <h4><a href="alumni/perks">Get Perks</a></h4>
                                <a href="alumni/perks">Perks</a>
                                <a href="alumni/perks/lifelong-learning">Lifelong Learning</a>
                                <a href="alumni/perks/spirit-and-pride">SBU Pride</a>
                                <a href="alumni/perks#email-for-life">Email for Life</a>
                           </div>
                           <div class="links">
                                <h4><a href="alumni/give-back">Give Back</a></h4>
                                <a href="alumni/give-back">Volunteer</a>
                                <a href="http://stonybrook.edu/give">Make a Gift</a>
                           </div>
                           <div class="links">
                                <h4><a href="alumni/stay-in-touch">Stay In Touch</a></h4>
                                <a href="alumni/stay-in-touch/">Alumni Association</a>
                                <a href="alumni/stay-in-touch/alumni-relations">Alumni Relations Office</a>
                                <a href="alumni/form/send-us-your-news">Send us Your News</a>
                                <a href="alumni/stay-in-touch/contact">Contact</a>
                                <a href="alumni/stay-in-touch/visiting-sbu">Visit</a>
                           </div>
                        </div>
                     </div>
                </nav>
            </footer>

        </div>
    </div>

</div>





<!--
//    4) Selected Nav Option (optional)
//         - Defines selected nav item
//              1 = GET CONNECTED
//              2 = GET INFORMED
//              3 = GET PERKS
//              4 = GIVE BACK
//              5 = STAY IN TOUCH
-->
<script type="text/javascript">
    var selectedNavItemIndex = 0;
</script>








<!--
//    5) Footer Scripts
//         - jQuery listeners
//         - AJAX request for live header and footer to replace static versions of (2) and (3)
-->

<!-- START for testing, include jquery from alumni site-->
<script src="//alumniandfriends.stonybrook.edu/Client/Scripts/jquery/1.7.2/jquery.min.js"></script>
<!-- END for testing, include jquery from alumni site-->

<script src="//www.stonybrook.edu/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="//www.stonybrook.edu/js/cd-dropdown/jquery.dropdown.js"></script>
<script src="//www.stonybrook.edu/js/vendor/jquery.sticky.js"></script>
<script src="//www.stonybrook.edu/js/vendor/jquery.scrollTo.min.js"></script>
<script src="//www.stonybrook.edu/js/vendor/jquery.easing.1.3.js"></script>
<script src="//www.stonybrook.edu/js/vendor/jquery.easing.compatibility.js"></script>
<script src="//www.stonybrook.edu/js/vendor/jquery.scrollTo.min.js"></script>
<script src="//www.stonybrook.edu/js/vendor/jquery.localScroll.min.js"></script>
<script src="//www.stonybrook.edu/js/vendor/jquery.ba-bbq.js"></script>
<script src="//www.stonybrook.edu/js/vendor/jquery.motio.js"></script>
<script src="//www.stonybrook.edu/js/vendor/jquery.tooltipster.min.js"></script>
<script src="//www.stonybrook.edu/js/plugins.js"></script>
<script src="//www.stonybrook.edu/js/main.js"></script>
<script src="//www.stonybrook.edu/js/mega-nav.js"></script>
<script src="//www.stonybrook.edu/js/vendor/fastclick.js"></script>

<script type="text/javascript">

    var initSBListeners = function() {
        $( function() {
            $( '#cd-dropdown' ).dropdown( {
                gutter : 0
            } );
        });
        //main.js init
        var $moreNav = $('.more-nav');
        var $audienceNav = $('.audience-nav');
        $('.more-trigger').on('click',function(){
            //console.log('clicked more-trigger');

            if($(window).width()>=1008) {
                if ( $audienceNav.is( ":visible" ) && $moreNav.is( ":hidden" ) ) {
                    //console.log('audienceNav:visible and moreNav:hidden');
                    $('.audience-trigger').click();
                }
            }

            if ( $moreNav.is( ":hidden" ) ) {
                $moreNav.slideDown();
                //$moreNav.show().animate({ height : moreNavHeight }, { duration: 600 });
                $(this).addClass('selected');
            } else {
                $moreNav.slideUp();
                /*$moreNav.animate({ height: 0 }, { duration: 600, complete: function () {
                    $moreNav.hide();
                  } 
                });*/
                $(this).removeClass('selected');
            }
        });
        //audience-trigger
        $('.audience-trigger').on('click',function(){
            //console.log('clicked audience-trigger');
            if($(window).width()>=1008) {
                if ( $moreNav.is( ":visible" ) && $audienceNav.is( ":hidden" ) ) {
                    //console.log('audienceNav:hidden and moreNav:visible');
                    $('.more-trigger').click();
                }
            }

            if ( $audienceNav.is( ":hidden" ) ) {
                $(this).find('.fa-caret-right').addClass('fa-caret-up').removeClass('fa-caret-right');
                $(this).closest('li').prev().addClass('before-selected');
                $audienceNav.slideDown();
                $(this).addClass('selected');
            } else {
                $(this).find('.fa-caret-up').removeClass('fa-caret-up').addClass('fa-caret-right');
                $audienceNav.slideUp();
                $(this).removeClass('selected');
            }
        });
        //menu trigger
        $('.menu-trigger').on('click',function(event){
            $(this).toggleClass('selected');
            var icon = $(this).find('.icon');
            $mainNavList = $('.main-nav-list');

            if($mainNavList.hasClass('open')) {
                icon.removeClass('fa-times');
                icon.addClass('fa-bars');
                $mainNavList.fadeIn(0,function(){
                  $mainNavList.removeClass('open')
                    .slideUp('fast',function() {
                        $mainNavList.addClass('hide-accessible-mobile').fadeIn('fast');
                    });
                });
            } else {
                icon.removeClass('fa-bars');
                icon.addClass('fa-times');
                $mainNavList.fadeOut(0,function(){
                  $mainNavList.removeClass('hide-accessible-mobile').addClass('open')
                    .slideDown('fast');
                });
            }

        });

        // section subnav
        $('.section-nav-trigger a').on('click',function(event){
            event.preventDefault();
            $(this).toggleClass('active');
            $sectionNav = $(this).parent().next('.section-nav');

            if($sectionNav.hasClass('open')) {
                $sectionNav.fadeIn(0,function(){
                  $sectionNav.removeClass('open')
                    .slideUp('fast',function() {
                        $sectionNav.addClass('hide-accessible-mobile-960').fadeIn('fast');
                    });
                });
            } else {
                $sectionNav.fadeOut(0,function(){
                  $sectionNav.removeClass('hide-accessible-mobile-960').addClass('open')
                    .slideDown('fast');
                });
            }

        });

        // Get the text of the currently selected section nav and update the dropdown
        if($('.section-nav .selected').length) {
            $('.section-nav-trigger a').text($('.section-nav .selected').text());
        }

        $('input[type="text"]').on('focus',function() {
            $(this).addClass('focus');
        }).on('focusout',function() {
            if($(this).val().length == 0) {
                $(this).removeClass('focus');
            }
        });

        $('.search-container button').on('click',function(event) {
            var inputEl = $(this).closest('.search-container').find('input');
            if($(inputEl).val().length == 0) {
                event.preventDefault();
                inputEl.focus();
            } else {
                if(!($(inputEl).hasClass('vasearch'))) {
                    var queryString = inputEl.val();
                    var searchUrl = "http://www.stonybrook.edu/search/?q="+queryString;
                    event.preventDefault();
                    event.stopPropagation();
                    inputEl.val('').focusout();
                    window.open(searchUrl, '_self');
                }
            }
        });

        $('.search-container input').keypress(function(event) {
            if (event.keyCode == 13) {
                var inputEl = $(this);
                if($(inputEl).val().length == 0) {
                    event.preventDefault();
                    inputEl.focus();
                } else {
                    if(!($(inputEl).hasClass('vasearch'))) {
                        var queryString = inputEl.val();
                        var searchUrl = "http://www.stonybrook.edu/search/?q="+queryString;
                        event.preventDefault();
                        event.stopPropagation();
                        inputEl.val('').focusout();
                        window.open(searchUrl, '_self');
                    }
                }
            }
        });
        //search position
        var timeoutID;
        var searchContainer = $('.search-container.default');
        var configuredSearch = false;

        function setSearchPosition() {
            timeoutID = window.setTimeout(configureSearchPosition, 750);
        }

        function configureSearchPosition() {
            if(configuredSearch) {
                searchContainer.removeClass('set-top-0');
                return;
            }

            var headerContainer = $('.header-container');
            var headerContainerHeight = headerContainer.height();
            
            //formula is top = h - 2h - 2
            searchContainerTop = headerContainerHeight - (headerContainerHeight * 2) - 2;
            var cssFriendlyTop = searchContainerTop + "px";

            searchContainer.css( { top : cssFriendlyTop } );

            configuredSearch = true;
        }

        function resetSearchPosition() {
            searchContainer.addClass('set-top-0');
        }

        function clearSearchPositionTimer() {
            window.clearTimeout(timeoutID);
        }
        if($(window).width()>=1022) {
            setSearchPosition();
        }

        $(window).resize(function(){
            if($(window).width()>=1022) {
                configureSearchPosition();
            } else {
                if(configuredSearch && !$('html').hasClass('ie9')) {
                    resetSearchPosition();
                }
            }
        });

        //mega-nav.js

        function hideAllDropNav() {
            $("nav.drop-nav").removeClass('open').addClass('hide-accessible');
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
                    $(subNavLi).removeClass('active');
                    hideDropNav(dropNavId);
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
    };

    var getHeaderSource = function() {
        if(typeof selectedNavItemIndex == 'undefined') {
            selectedNavItemIndex = 0;
        }
        var headerURL = 'http://www.stonybrook.edu/far-beyond/shared/sbu-header.php?include=0&pageTitle=Alumni&site=alumni&scripts=0&jquery=0&audienceNav=0&selected='+selectedNavItemIndex+'&pageURL=http://stonybrook.edu/alumni';
        $.ajax({
            url: '//www.stonybrook.edu/far-beyond/shared/get-json.php?url='+encodeURIComponent(headerURL),
            type: 'GET',
            dataType: 'jsonp',
            error: function(xhr, status, error) {
                console.log(status + ": " + error);
            },
            success: function(header) {
                $('#static-header-code').replaceWith(header);

                //custom header modifications here

                var thisLink;

                //make header links absolute
                $('.main-nav-container a[href^="alumni/"], .header-container a[href^="alumni/"], .logo-container a[href^="alumni/"]').each(function() {
                    thisLink = 'http://www.stonybrook.edu/' + $(this).attr('href');
                    $(this).attr('href',thisLink);
                });

                //make img paths absolute
                $('.main-nav-container img[src^="img/"], .header-container img[src^="img/"], .logo-container img[src^="img/"]').each(function() {
                    thisLink = '//www.stonybrook.edu/' + $(this).attr('src');
                    $(this).attr('src',thisLink);
                });
            },
            complete: function() {
                getFooterSource();
            }
        });
    };

    var getFooterSource = function() {
        var footerURL = 'http://www.stonybrook.edu/far-beyond/shared/sbu-footer.php?include=0&scripts=0&jquery=0&site=alumni&footer=1&footerbar=1&totop=1';
        $.ajax({
            url: '//www.stonybrook.edu/far-beyond/shared/get-json.php?url='+encodeURIComponent(footerURL),
            type: 'GET',
            dataType: 'jsonp',
            error: function(xhr, status, error) {
                console.log(status + ": " + error);
            },
            success: function(footer) {
                $('#static-footer-code').replaceWith(footer);
                $('#totop').on('click',function(event) {
                    $('body').scrollTo('0px',800);
                });

                //custom footer modifications here

                var thisLink;

                //make footer links absolute
                $('.site-footer a[href^="alumni/"], .campaign-banner img[src^="alumni/"]').each(function() {
                    thisLink = 'http://www.stonybrook.edu/' + $(this).attr('href');
                    $(this).attr('href',thisLink);
                });

                //make img paths absolute
                $('.site-footer img[src^="img/"], .campaign-banner img[src^="img/"]').each(function() {
                    thisLink = '//www.stonybrook.edu/' + $(this).attr('src');
                    $(this).attr('src',thisLink);
                });
            },
            complete: function() {
                initSBListeners();
            }
        });
    };

    getHeaderSource();

</script>