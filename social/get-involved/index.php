<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<!-- <inc> -->
		<?php
			$this_dir = $_SERVER['REQUEST_URI'];
			$dev_dir = '/development/sb/';
			$is_dev = strpos($this_dir,$dev_dir);
			if($is_dev !== false) {
				$inc = $_SERVER['DOCUMENT_ROOT'] . "/development/sb/inc/inc.php";
			} else {
				$inc = $_SERVER['DOCUMENT_ROOT'] . "/sb/inc/inc.php";
			}
			include($inc);
		?>
	<!-- </inc> -->
	<!--site variables-->
		<?php
			$page_type       = 'social-hub';
			$page_title_sub  = 'Social Media Guidelines';
			$page_title_full = $page_title . (isset($page_title_sub) && $page_title_sub!='' ? ' | ' . $page_title_sub : '');

		    $og_title        = 'Stony Brook ' . $page_title_sub;
		    $og_description  = 'We are social at Stony Brook University. Connect with the latest in campus life and join in on the conversation!';
		    $og_url          = 'http://www.stonybrook.edu/social/';

		    $page_to_top_link = true;

		    $page_footerbar   = true;

		    $page_scroll      = false;
		    $page_scroll_el   = 'logo';     //Options are audience-nav, logo, main-nav, bottom
		    $page_scroll_time = 0;     		//Time for scroll function in milliseconds

		    $page_loader      = false;
		?>

	<!-- <head> -->
		<?php 
			$file  = $header;
			include($path . $file);
		?>
	<!-- </head> -->
    <body>
        <!-- <global> -->
			<?php 
				$file  = $global;
				include($path . $file);
			?>
		<!-- </global> -->

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
		        <div class="main-nav-container">
		        	<!-- <site-nav> -->
						<?php 
							include($path . $site_nav);
						?>
					<!-- </site-nav> -->
		        </div>
		        <div class="main-container">
		            <div class="main clearfix">

		                <!-- <social-main> -->
							<?php 
								$file = "students-get-involved.php";
								include($path . $content . $social . $file);
							?>
						<!-- </social-main> -->

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