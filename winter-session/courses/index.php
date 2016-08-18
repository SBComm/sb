<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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

			$sub_nav_selected_tab = 1;

    		$inside_page = true;
		?>
	<!-- </inc> -->
	<!--site variables-->
		<?php
			$page_type       = 'second-level';
    		$page_cat        = 'sub'; // for site tagline logo container
			$second_level    = 'winter-session';

			$keywords          = "Stony Brook University,Undergraduate Admissions,Admissions,Majors,Minors,Special Programs,Visiting,About,Transfer Office,Transfer,Young Scholars Program,Honors,University Scholars,Admitted,International,Open House,Tour,Scholarships";
	        $page_title        = 'Stony Brook University, New York';
	        $page_title_sub    = 'Winter Session';
	        $page_title_full   = $page_title . ' | ' . $page_title_sub;

	        $og_title        = 'Stony Brook ' . $page_title_sub;
	        $og_description  = $page_description;
	        $og_url          = 'winter-session';

		    $page_to_top_link = true;

		    $page_footerbar   = true;
		    $page_footer      = true;
		    $text_filter	  = true;

		    //$audience_nav_selected_tab = 6;

    		$search_style 	  = 'default';
    		$nav_type		  = 'default';

    		$motio  		  = false;

    		$page_loader      = true;

    		$page_scroll      = true;
	        $page_scroll_el   = 'logo';     //Options are audience-nav, logo, main-nav, bottom
	        $page_scroll_time = 0;
	        $page_scroll_mobile = true;

	        $lightbox = true;
	        $live_filter = true;
	        $winter_session_courses = true;

	        $live_filter_sticky = true;
		?>

	<head>
		<?php 
			$file  = $header;
			include($path . $file);
		?>
		<!-- Facebook Conversion Code for Registrations - SBU Winter Session Ad -->
		<script>(function() {
		var _fbq = window._fbq || (window._fbq = []);
		if (!_fbq.loaded) {
		var fbds = document.createElement('script');
		fbds.async = true;
		fbds.src = '//connect.facebook.net/en_US/fbds.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(fbds, s);
		_fbq.loaded = true;
		}
		})();
		window._fbq = window._fbq || [];
		window._fbq.push(['track', '6034473792717', {'value':'0.00','currency':'USD'}]);
		</script>
		<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6034473792717&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
	</head>
    <body>
        <!-- <global> -->
			<?php 
				$file  = $global;
				include($path . $file);
			?>
		<!-- </global> -->

		<?php include_once('../application/init.php'); ?>

        <div class="sbu-wrapper clearfix">
        	<div class="sbu-sub-wrapper">

		        <div class="header-container">
		        	<div class="nav-elements-container">
			        	<!-- <quick-nav> -->
							<?php
								include($path . $quick_nav);
							?>
						<!-- </quick-nav> -->
			            <!-- <more-nav> -->
							<?php 
								include($path . $more_nav);
							?>
						<!-- </more-nav> -->
			            <!-- <audience-nav> -->
							<?php 
								include($path . $audience_nav);
							?>
						<!-- </audience-nav> -->
					</div>
					<!-- <logo-container> -->
						<?php 
							include($path . $logo_container);
						?>
					<!-- </logo-container> -->
		        </div>
		        <div class="main-nav-container clearfix">
		        	<!-- <site-nav> -->
						<?php 
							include($path . 'nav/winter-session-nav.php');
						?>
					<!-- </site-nav> -->
		        </div>
		        <div class="main-container">
		            <div class="main clearfix">

		                <!-- <winter-session> -->
							<?php 
								$file = "winter-session/courses/courses.php";
								include($pathForContent . $content . $secLv . $file);
							?>
						<!-- </winter-session> -->

		            </div> <!-- .main -->
		        </div> <!-- .main-container -->
		        <!-- <div.footer-container> -->
		        	<?php if($page_footer) {
						$file = "footers/winter-session-footer.php";
						include($path . $file);
					} ?>
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