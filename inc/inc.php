<?php 
    /* Include Variables */
    $root          = '/user/far-beyond/www';
    $inc_loc       = 'inc';   //include folder
    $dir           = dirname(__FILE__);
    $http_protocol = !empty($_SERVER['HTTP_X_FORWARDED_PROTO']) ? $_SERVER['HTTP_X_FORWARDED_PROTO'] : 'http';

    if($_SERVER['SERVER_NAME'] == 'localhost') {
        $root          = $_SERVER['DOCUMENT_ROOT'];
        $site          = 'sb'; //site folder inside the root dir
        $http_root     = 'http://localhost:8888';
        $path  = $root . '/' . $site . '/' . $inc_loc . '/';
        $css_base_url  = $http_root . '/' . $site . '/';

        $is_local_environment = true;
        $is_proofing_environment = false;
        $is_production_environment = false;

        $working_path_relative_start_location = "localhost/";
        $working_path_asset_dir = substr_replace($dir, $working_path_relative_start_location.$site, strpos($dir,$working_path_relative_start_location));

    } else {
        if($is_dev !== false) { //$is_dev determined in each index.php
            $site          = 'development/sb';
            $http_root     = $http_protocol.'://www.stonybrook.edu';
            $path  = $root . '/' . $site . '/' . $inc_loc . '/';
            $css_base_url  = $http_root . '/development/' . 'far-beyond' . '/';
            $working_path_asset_dir = '';
            $is_proofing_environment = true;
            $is_production_environment = false;
            $is_local_environment = false; 
        } else {
            $site          = 'sb';
            $http_root     = $http_protocol.'://www.stonybrook.edu';
            $path  = $root . '/' . $site . '/' . $inc_loc . '/';
            $css_base_url  = $http_root . '/' . 'far-beyond' . '/';
            $working_path_asset_dir = '';
            $is_production_environment = true;
            $is_proofing_environment = false;
            $is_local_environment = false;
        }

        //$working_path_relative_start_location = "web/";
        $working_path_asset_dir = '/user/far-beyond/www/sb/';

    }

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
    $keywords          = 'Stony Brook University, SUNY Stony Brook, SUNY-SB, SUNYSB, research university, summer session, University of Stony Brook, University at Stony Brook, Stonybrook, Undergraduate Admissions, New York Colleges';
    $page_title_sub    = '';

    $page_title_full   = $page_title . $page_title_sub;

    $og_title          = 'Stony Brook University';
    $og_description    = $page_description;
    $og_type           = 'website';
    $og_url            = $http_protocol.'://www.stonybrook.edu/';
    $og_image          = 'http://www.stonybrook.edu/commcms/_images/page-images/campus-images-2017/fj-gaylor/171011_SBU_0464-min.jpg';

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

    $lightbox         = true;

    $motio            = false;

    $equal_col        = false;
    $equal_col_desktop = false;

    $search_type      = 'default'; //default, admissions
    $search_style     = 'default'; //default, stay-in-nav

    $nav_type         = 'default'; //default, big-n-bold

    $social_sidebar     = '';
    $social_feed_widget = false;
    $social_feed_widget_num = 0;

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

    $mag_article = false;

    $magazine_current_year  = '2016';

    $is_404 = false;

    $site_breadcrumbs = true;

    $calendar_title_color = '';
    $col = '';

    $mega_nav = false;
    $mega_nav_ou = false;

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

    /* Site URLs (MUST end with a slash) */
    $sbu_site_url['happenings'] = 'http://stonybrook.edu/happenings/';
    $sbu_site_url['calendar_next_month'] = 'http://calendar.activedatax.com/stonybrook/EventList.aspx?fromdate='.date("n/j/Y").'&amp;todate='.date("n/j/Y", strtotime("+30 days")).'&amp;display=Month&amp;view=DateTime';

    $sbu_site_url['directions']['stony-brook'] = 'https://www.google.com/maps/dir//Stony+Brook+University,+Stony+Brook,+NY+11794/@40.9123708,-73.1584941,13z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x89e83f33e67438bf:0x734c1ca56abdcc85!2m2!1d-73.1233889!2d40.9123761';
    $sbu_site_url['directions']['southampton'] = 'https://www.google.com/maps/dir//Stony+Brook+Southampton,+239+Montauk+Hwy,+Southampton,+NY+11968/@40.8859384,-72.5090227,13z/data=!4m16!1m7!3m6!1s0x89e893498f781fed:0x708f84b10db705c6!2sStony+Brook+Southampton!3b1!8m2!3d40.8885502!4d-72.4450467!4m7!1m0!1m5!1m1!1s0x89e893498f781fed:0x708f84b10db705c6!2m2!1d-72.4450467!2d40.8885502';
    $sbu_site_url['directions']['manhattan'] = 'https://www.google.com/maps/dir//Stony+Brook+Manhattan,+Park+Avenue+South,+New+York,+NY/@40.7426948,-73.9927198,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0x89c259a776f9c5f1:0xd3ef7c789fd0b91d!2m2!1d-73.983963!2d40.742716';

    /* Cache busting for newer asset files */
    $filename_based_cache_busting = true;
    include($path . 'includes/filename_based_cache_busting.php');

    /* debugger, see https://github.com/raveren/kint */
    include($path . 'debug/kint-master/Kint.class.php');

    /* functions */
    include($path . 'includes/functions.php');

    /* Site specifics */
    $alumni_page_description = "Get connected with fellow Stony Brook Alumni at one of our networking events, reunions, or career workshops! Browse the wide selection of exclusive Alum perks and discounts you receive as a SBU graduate.";
    $alumni_keywords = "Stony Brook University Alumni, Stony Brook Alumni, Stony Brook Graduates, Stony Brook Reunions, SBU Alums, Stony Brook Events";
?>