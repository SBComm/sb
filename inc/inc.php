<?php 
    /* Include Variables */
    $root        = $_SERVER['DOCUMENT_ROOT'];
    $inc_loc     = 'inc';
    

    if($_SERVER['SERVER_NAME'] == 'localhost') {
        $site          = 'sbu-template-2014';
        $css_base_url  = 'http://localhost:8888/sbu-template-2014/';
        $path  = $root . '/' . $site . '/' . $inc_loc . '/';
    } else {
        $site          = 'sb';
        $css_base_url  = 'http://sb.cc.stonybrook.edu/sb/';
        $path  = $root . '/' . $site . '/' . $inc_loc . '/';
    }

    $content     = "content/";
        $social  = "social/";
        $test    = "test/";
        $secLv   = "second-level/";
        $sites   = "sites/";

    $header          = "header.php";
    $quick_nav       = "quick-nav-v2.php";
    $more_nav        = "more-nav-v2.php";
    $audience_nav    = "audience-nav.php";
    $logo_container  = "logo-container.php";
    $site_nav        = "site-nav.php";
    $sub_nav         = "sub-nav.php";
    $footerbar       = "footerbar.php";

    /* Meta Variables Defaults */
    $page_type         = 'default';     //Options are default, second-level, social-hub, bulletin
    $page_cat          = 'main';        //Options are main (for first and second level), sub (for sites)
    $page_title        = 'Stony Brook University, Stony Brook, New York';
    $page_description  = 'From its beginnings a half-century ago, Stony Brook University has been characterized by innovation, energy, and progress, transforming the lives of people who earn degrees, work, and make groundbreaking discoveries here. A dramatic trajectory of growth has turned what was once a small teacher preparation college into an internationally recognized research institution that is changing the world.';
    $page_title_sub    = '';
    $page_title_full   = $page_title . $page_title_sub;

    $og_title          = 'Stony Brook University';
    $og_description    = $page_description;
    $og_type           = 'website';
    $og_url            = 'http://www.stonybrook.edu/';
    $og_image          = 'http://www.stonybrook.edu/sb/images/newlogohomepage.gif';

    /* Page Include Controls */
    $page_to_top_link = false; // speed is defined in main.js click function

    $page_loader      = false;
    //$page_loader_text = '';
    //to-do: var for preloader text

    $page_footerbar   = false;

    $tabbed_nav       = false;
    $accordion_nav    = false;
    $text_filter      = false;

    $carousel         = false;

    /* Display Configurations, Default Highlights */

    $main_nav_selected_tab      = 0;    //Options are
                                        //0 none
                                        //1 about       2 admissions    3 academics
                                        //4 research    5 medicine      6 libraries
                                        //7 athletics   8 arts          9 giving
    $audience_nav_selected_tab  = 0;    //Options are
                                        //0 none
                                        //1 Current students            2 Faculty and Staff
                                        //3 Alumni and Friencs          4 Parents
                                        //5 Neighbors                   6 Economic Development
    $sub_nav_selected_tab       = 0;     

    /* Default Scroll Controls */
    $page_scroll      = false;
    $page_scroll_el   = '';     //Options are audience-nav, logo, main-nav, bottom
    $page_scroll_time = 0;      //Time for scroll function in milliseconds
?>