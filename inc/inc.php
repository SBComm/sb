<?php 
    /* Include Variables */
    $root        = $_SERVER['DOCUMENT_ROOT'];
    $inc_loc     = 'inc';   //include folder
    $dir         = dirname(__FILE__);

    if($_SERVER['SERVER_NAME'] == 'localhost') {
        $site          = 'sb'; //site folder inside the root dir
        $http_root     = 'http://localhost:8888';
        $path  = $root . '/' . $site . '/' . $inc_loc . '/';

        $is_local_environment = true;
        $is_proofing_environment = false;
        $is_production_environment = false;

        $working_path_relative_start_location = "localhost/";
    } else {
        if($is_dev !== false) { //$is_dev determined in each index.php
            $site          = 'development/sb';
            $http_root     = 'http://mobile.cc.stonybrook.edu';
            $path  = $root . '/' . $site . '/' . $inc_loc . '/';
            $working_path_asset_dir = '';
            $is_proofing_environment = true;
            $is_production_environment = false;
            $is_local_environment = false; 
        } else {
            $site          = 'sb';
            $http_root     = 'http://992eaab8.ngrok.io';
            $path  = $root . '/' . $site . '/' . $inc_loc . '/';
            $working_path_asset_dir = '';
            $is_production_environment = true;
            $is_proofing_environment = false;
            $is_local_environment = false;
        }

        $working_path_relative_start_location = "web/";
    }

    $css_base_url  = $http_root . '/' . $site . '/';

    $working_path_asset_dir = substr_replace($dir, $working_path_relative_start_location.$site, strpos($dir,$working_path_relative_start_location));

    $relative_page_path = $_SERVER['REQUEST_URI'];

    $content     = "content/";
        $social  = "social/";
        $test    = "test/";
        $secLv   = "second-level/";
        $sites   = "sites/";

    $pathForContent  = $path;

    $server          = "server.php";
    $global          = "global.php";
    $header          = "header.php";
    $quick_nav       = "quick-nav-v2.php";
    $more_nav        = "more-nav-v3.php";
    $audience_nav    = "audience-nav.php";
    $logo_container  = "logo-container.php";
    $site_nav        = "site-nav.php";
    $sub_nav         = "sub-nav.php";
    $footerbar       = "footerbar.php";
    $footer          = "footers/sbu-footer.php";
    $site_config     = "site-config.php";

    /* Meta Variables Defaults */
    $page_type         = 'default';     //Options are default, second-level, social-hub, bulletin
    $second_level      = '';            //Name of the slug for second-level page type, for specific css, e.g. jobs.css
    $inside_page       = false;         //Controls inclusion of inside-related css and js
    $page_cat          = 'main';        //Options are main (for first and second level), sub (for sites)
    $page_title        = 'Stony Brook University, New York';
    $page_description  = 'Find out why Stony Brook University has become an internationally recognized research institution that is changing the world. Explore programs and degrees offered for endless career opportunities. Start your journey in education today!';
    $keywords          = 'Stony Brook University, SUNY Stony Brook, SUNY-SB, SUNYSB, research university, summer session, University of Stony Brook, University at Stony Brook, Stonybrook, Undergraduate Admissions, New York Colleges'>
    $page_title_sub    = '';

    $page_title_full   = $page_title . $page_title_sub;

    $og_title          = 'Stony Brook University';
    $og_description    = $page_description;
    $og_type           = 'website';
    $og_url            = 'http://www.stonybrook.edu/';
    $og_image          = 'http://www.stonybrook.edu/sb/images/newlogohomepage.gif';

    $meta = true;

    /* Page Include Controls */
    $page_to_top_link = false; // speed is defined in main.js click function
    $page_to_top_loc  = 'default'; //default, main-nav

    $page_loader      = false;
    //$page_loader_text = '';
    //to-do: var for preloader text

    $page_footerbar   = false;
    $page_footer      = false;

    $tabbed_nav       = false;
    $accordion_nav    = false;
    $text_filter      = false;

    $carousel         = false;
    $carousel_2       = false;
    $carousel_3       = false;
    $carousel_4       = false;

    $slick_slider     = false;

    $lightbox         = false;

    $motio            = false;

    $equal_col        = false;
    $equal_col_desktop = false;

    $search_type      = 'default'; //default, admissions
    $search_style     = 'default'; //default, stay-in-nav

    $nav_type         = 'default'; //default, big-n-bold

    $social_sidebar     = '';
    $social_feed_widget = false;

    $map              = false;
    $live_filter      = false;

    $fade_in_page     = false;

    $html_dom_parser  = false;

    $admissions_program_detail = false;

    $tablesaw     = true;
    $faculty_list = true;

    $live_filter_sticky = false;

    $overlay = false;

    $mega_nav = false;

    $flickr_feed = false;

    /* Display Configurations, Default Highlights */

    $main_nav_selected_tab      = 0;
    $audience_nav_selected_tab  = 0;
    $sub_nav_selected_tab       = 0;

    /* Default Scroll Controls */
    $page_scroll        = false;
    $page_scroll_el     = '';     //Options are audience-nav, logo, main-nav, bottom
    $page_scroll_time   = 0;      //Time for scroll function in milliseconds
    $page_scroll_mobile = false;  //Define whether the scroll-on-load occurs only on mobile. False by default, meaning scroll will happen on desktop and mobile.

    /* Default date timezone */
    date_default_timezone_set("America/New_York");

    /* Cache busting for newer asset files */
    $filename_based_cache_busting = false;
    include($path . 'includes/filename_based_cache_busting.php');

    /* debugger, see https://github.com/raveren/kint */
    include($path . 'debug/kint-master/Kint.class.php');

    /* functions */
    include($path . 'includes/functions.php');

    /* Site specifics */
    $alumni_page_description = "Get connected with fellow Stony Brook Alumni at one of our networking events, reunions, or career workshops! Browse the wide selection of exclusive Alum perks and discounts you receive as a SBU graduate.";
    $alumni_keywords = "Stony Brook University Alumni, Stony Brook Alumni, Stony Brook Graduates, Stony Brook Reunions, SBU Alums, Stony Brook Events";
?>