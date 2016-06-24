<?php 
    /* Include Variables */
    $root        = '/user/far-beyond/www';       //server root
    $inc_loc     = 'inc';                          //location for php includes
    $dir         = dirname(__FILE__);

    if($_SERVER['SERVER_NAME'] == 'localhost') {
        $root          = $_SERVER['DOCUMENT_ROOT'];
        $site          = 'sb/5questions'; //site folder inside the root dir
        $css_base_url  = 'http://localhost:8888/sb/5questions/';
        $path  = $root . '/' . $site . '/' . $inc_loc . '/';

        $is_local_environment = true;
        $is_proofing_environment = false;
        $is_production_environment = false;

        $working_path_relative_start_location = "localhost/";
        $working_path_asset_dir = substr_replace($dir, $working_path_relative_start_location.$site, strpos($dir,$working_path_relative_start_location));
    } else {
        if($is_dev !== false) { //$is_dev determined in each index.php
            $site          = 'sb/5questions';
            $css_base_url  = 'http://www.stonybrook.edu/development/5questions/';
            $path  = $root . '/' . $site . '/' . $inc_loc . '/';
            $working_path_asset_dir = '';
            $is_proofing_environment = true;
            $is_production_environment = false;
            $is_local_environment = false; 
        } else {
            $site          = 'sb/5questions';
            $css_base_url  = 'http://www.stonybrook.edu/5questions/';
            $path  = $root . '/' . $site . '/' . $inc_loc . '/';
            $working_path_asset_dir = '';
            $is_production_environment = true;
            $is_proofing_environment = false;
            $is_local_environment = false;
        }

        //$working_path_relative_start_location = "web/";
        $working_path_asset_dir = '/user/far-beyond/www/sb/';

    }

    $content     = "content/";                  //directory for php content
        $test    = "test/";                     //custom directory variables

    $header          = "header.php";            //header php file
    $site_nav        = "site-nav.php";          //nav php file
    $footer          = "footer.php";            //footer php file
    $to_top          = "to-top.php";            //php file for to-top link
    $global          = "global.php";            //header php file


    /* Meta Variables Defaults */
    $author_name       = 'Joshua Palmeri';      //your name
    $page_type         = 'default';             //custom page type
    $page_title        = '5 Questions With';                    //meta title
    $page_description  = 'Stony Brook University, a global thought leader in education and research, asked a group of distinguished individuals about their life experiences in education.';                    //meta description
    $page_keywords     = 'stony brook, long island, interviews, news, video';                    //meta keywords
    $page_title_sub    = 'Stony Brook University';                    //meta sub title
    $page_title_full   = $page_title . ' | ' . 
                         $page_title_sub;       //full meta title, format 'Title | Subtitle'

    $detect_phone_num  = false;                 //format-detection for telephone number
                                                //default is false, meaning device styles will not be applied

    $og_title          = 'Stony Brook 5 Questions With';                    //OpenGraph title
    $og_description    = $page_description;     //OpenGraph description
    $og_type           = 'website';             //OpenGraph type: for options see http://ogp.me/ 
    $og_url            = 'http://www.stonybrook.edu/5questions';             //site URL for OpenGraph
    $og_image          = 'http://www.stonybrook.edu/far-beyond/5questions/img/branding/5-questions-logo.png';             //image 


    /* Page Include Controls */
    $page_header       = true;                  //Defines if $header is included on page                default true
    $page_footer       = true;                  //Defines if footer is included on page                 default true

    /* Javascript Libraries */
    $fastclick_js       = true;                 //Defines if fastclick.js is included to remove 300ms delay from mobile clicks
    $fittext_js         = true;                 //Defines if fittext.js is included to resize text relative to its container's width

    /* Totop Controls */
    $page_to_top        = true;                 //Defines if $to_top is included on page        default true
                                                //speed defined in plugins.js click listener

    /* Default Scroll Controls */
    $page_scroll        = true;                  
    $page_scroll_target = '".scroll"'; //Define options for scroll-to elements, to be used in conditional php
    $page_scroll_time   = 2000;                 //Time for scroll function in milliseconds

    /* Page Fade */
    $fade_in_page      = false;                 //Defines if the site will fade-in when a new page is loaded    default false
    
    /* Sticky Element Controls */
    $sticky_element          = true;            //Defines whether there is a sticky element
    $sticky_element_selector = '".sticky"';     //Define selector for element(s) that should be sticky. Needs ".quotes"

    $social_feed = true;
    $carousel = true;

    /* Form Elements */
    $validation        = false;                 //Defines if form validation is included on the page    default false
    $contact_form      = false;                 //Defines if contact form dependencies are included     default false

    /* Gallery */
    $gallery           = false;                  //Defines if a gallery is present on the page           default false

    /* Display Configurations, Default Highlights */
    $main_nav_selected  = 0;                    //Index of selected nav item. Default is the first one.

    /* Cache busting for newer asset files */
    $filename_based_cache_busting = false;
    include $path . '../includes/filename_based_cache_busting.php';
?>