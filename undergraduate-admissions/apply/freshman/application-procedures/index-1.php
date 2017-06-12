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
    		$page_cat        = 'sub'; // for site tagline logo container
			$second_level    = 'undergrad-admissions';

		    		    $page_to_top_link = true;

		    $page_footerbar   = true;
		    $page_footer      = true;

		    //$audience_nav_selected_tab = 6;
		    $sub_nav_selected_tab = 1;

		    $carousel 	      = true;
		    $carousel_3       = true;

    		$search_type      = 'admissions';
    		$search_style 	  = 'stay-in-nav';
    		$nav_type		  = 'big-n-bold';
    		$social_sidebar   = 'admissions';

    		$inside_page = true;
		?>

	<!-- <site config> -->
		<?php 
			$file  = $site_config;
			include($path . $file);
		?>
	<!-- </site config> -->
	<head>
		<?php 
			$file  = $header;
			include($path . $file);
		?>
	</head>
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
		        <div class="main-nav-container clearfix">
		        	<!-- <site-nav> -->
						<?php 
							include($path . 'nav/admissions-nav.php');
						?>
					<!-- </site-nav> -->
		        </div>
		        <div class="main-container">
		            <div class="main clearfix">

		                <!-- <undergrad-admissions> -->
							<?php 
								$file = "undergraduate-admissions/freshman/freshman-application-procedure-1.php";
								include($pathForContent . $content . $secLv . $file);
							?>
						<!-- </undergrad-admissions> -->

		            </div> <!-- .main -->
		        </div> <!-- .main-container -->
		        <!-- <div.footer-container> -->
		        	<?php if($page_footer) {
						$file = "footers/undergrad-admissions-footer.php";
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