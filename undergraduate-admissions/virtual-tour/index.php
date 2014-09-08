<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<!-- <inc> -->
		<?php
			$inc = $_SERVER['DOCUMENT_ROOT'] . "/sb/inc/inc.php";
			include($inc);
		?>
	<!-- </inc> -->
	<!--site variables-->
		<?php
			$page_type       = 'second-level';
    		$page_cat        = 'sub'; // for site tagline logo container
			$second_level    = 'undergrad-admissions';
			$page_title_sub  = 'Undergraduate Admissions';
			$page_title_full = $page_title . (isset($page_title_sub) && $page_title_sub!='' ? ' | ' . $page_title_sub : '');

		    $og_title        = 'Stony Brook ' . $page_title_sub;
		    //$og_description  = 'Did you know? Stony Brook University generates more than $2.5 billion annually in regional economic impact and is one of the few campuses anywhere with a Vice President for Economic Development. Read more...';
		    $og_url          = 'undergraduate-admissions';

		    $page_to_top_link = true;

		    $page_footerbar   = true;
		    $page_footer      = true;

		    //$audience_nav_selected_tab = 6;

		    $carousel 	      = true;
		    $carousel_3       = true;
		    $carousel_4       = true;

		    $lightbox 	      = true;

    		$search_type      = 'admissions';
    		$search_style 	  = 'stay-in-nav';
    		$nav_type		  = 'big-n-bold';
    		$social_sidebar   = 'admissions';

    		$motio  		  = true;
		?>

	<!-- <head> -->
		<?php 
			$file  = $header;
			include($path . $file);
		?>
	<!-- </head> -->
    <body style="height: 100%;">

		<iframe allowfullscreen id="virtualtour_iframe" frameborder="0" style="overflow-x:hidden;overflow-y:auto;border: none;background-color:black;width:100%;max-width:100%" src="https://www.youvisit.com/tour/59968/?pl=v&amp;hover=0" scrolling="yes" width="100%" height="100%"></iframe>

	    <!-- <scripts> -->
			<?php 
				$file = "footer-scripts.php";
				include($path . $file);
			?>
		<!-- </scripts> -->

		<!-- <googleanalytics> -->
			<?php 
				$file = "site-analytics.php";
				include($path . $file); 
			?>
		<!-- </googleanalytics> -->
    </body>
</html>