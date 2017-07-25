<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <!-- <inc> -->
        <?php
            $root = '/user/far-beyond/www';

            $this_dir = $_SERVER['REQUEST_URI'];
            $dev_dir  = '/development/sb/';
            $prod_dir = '/sb/';
            $is_dev = strpos($this_dir,'/development/');
            if($_SERVER['SERVER_NAME'] == 'localhost') {
				$inc = $_SERVER['DOCUMENT_ROOT'] . $prod_dir . "inc/inc.php";
			} else if($is_dev !== false) {
                $inc = $root . $dev_dir . "inc/inc.php";
            } else {
                $inc = $root . $prod_dir . "inc/inc.php";
            }
            include($inc);
        ?>
    <!-- </inc> -->
    <!--site variables-->
        <?php
            $page_type       = 'second-level';
            $second_level    = '404';
            $page_title_sub  = 'Page Not Found';
            $page_title_full = $page_title . (isset($page_title_sub) && $page_title_sub!='' ? ' | ' . $page_title_sub : '');

            $og_title        = 'Stony Brook ' . $page_title_sub;
            //$og_description  = 'Did you know? Stony Brook University generates more than $2.5 billion annually in regional economic impact and is one of the few campuses anywhere with a Vice President for Economic Development. Read more...';
            $og_url          = 'http://www.stonybrook.edu/';

            $page_to_top_link = false;

            $page_footerbar   = true;

            $carousel         = false;

            $site_breadcrumbs = false;

            $mega_nav = true;
            $mega_nav_ou = true;
        ?>

    <head>
        <?php 
            $file  = $header;
            include($path . $file);
        ?>
    </head>

        <?php
            $error_code = $_GET['e'];
            switch($error_code) {
                //maintenance
                case 1:
                    $error_title = 'System Maintenance';
                    $error_msg = 'This page is under temporary maintenance. Check back soon.';
                    $show_search_msg = false;
                    break;
                default:
                    $error_title = 'Page Not Found';
                    $error_msg = 'Hmmm... We can\'t find that page. Perhaps the link was spelled incorrectly, or the page you\'re looking for does not exist.';
                    $show_search_msg = true;
                    break;
            }
        ?>

    <body>
        <!-- <global> -->
            <?php 
                $file  = $global;
                include($path . $file);
            ?>
        <!-- </global> -->

        <div class="sbu-wrapper clearfix">
            <div class="sbu-sub-wrapper">

                <div class="main-nav-container clearfix">
                    <!-- <site-nav> -->
                        <?php 
                            //include($path . $site_nav);
                            include($path . "site-nav-2017.php");
                        ?>
                    <!-- </site-nav> -->
                </div>
                <div class="main-container">
                    <div class="main clearfix">

                         <article class="ghosted-campus second-level-header">
                            <section class="clearfix inside-content main-inside-content two-col white-background">
                                <div class="border-box wrapper clearfix pad-top pad-bottom">
                                    <h3><?php echo $error_title; ?></h3>
                                    <div class="content">
                                        <p><?php echo $error_msg; ?></p>
                                        <?php if($show_search_msg) { ?>
                                            <p>Try going back, or you can search stonybrook.edu.</p>
                                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="search">Search</a>
                                        <?php } ?>
                                        <div style="height: 100px"></div>
                                    </div>
                                </div>
                            </section>

                        </article>

                    </div> <!-- .main -->
                </div> <!-- .main-container -->
                <!-- <div.footer-container> -->
                    <?php if($page_footerbar) {
                        $file = "footerbar.php";
                        include($path . $file);
                    } ?>
                <!-- </div.footer-container> -->
<!--
                <div class="left-fixed-sidebar-container">

                </div>

                <div class="right-fixed-sidebar-container">

                </div>
-->
                <!-- <to-top> -->
                    <?php if($page_to_top_link) {
                        $file = "to-top.php";
                        include($path . $file);
                    } ?>
                <!-- </to-top> -->

            </div><!-- .sbu-sub-wrapper -->
        </div><!-- .sbu-wrapper -->

        <!-- <scripts> -->
            <?php 
                $file = "footer-scripts-ou-2017.php";
                include($path . $file);
            ?>
        <!-- </scripts> -->

        <!-- <googleanalytics> -->
            <?php /*
                $file = "site-analytics.php";
                include($path . $file); */
            ?>
        <!-- </googleanalytics> -->
    </body>
</html>