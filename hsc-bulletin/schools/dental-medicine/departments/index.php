<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<!-- <inc> -->
		<?php
			if($_SERVER['SERVER_NAME'] == 'localhost') {
		        $inc = $_SERVER['DOCUMENT_ROOT'] . "/sbu-template-2014/inc/inc.php";
		    } else {
		        $inc = $_SERVER['DOCUMENT_ROOT'] . "/sb/inc/inc.php";
		    }
			include($inc);
		?>
	<!-- </inc> -->
	<!--site variables-->
		<?php
			$page_type       = 'bulletin';
    		$page_cat        = 'sub'; // for site tagline logo container
			$page_title_sub  = 'Health Sciences Bulletin';
			$page_title_full = $page_title . (isset($page_title_sub) && $page_title_sub!='' ? ' | ' . $page_title_sub : '');

		    $og_title        = 'Stony Brook ' . $page_title_sub;
		    $og_description  = 'Stony Brook Health Sciences Bulletin';
		    $og_url          = 'http://www.stonybrook.edu/';

		    $page_to_top_link = true;

		    $page_footerbar   = true;

		    $tabbed_nav       = true;
    		$accordion_nav    = true;
    		$sub_nav_selected_tab = 4;

		?>

	<!-- <head> -->
		<?php 
			$file  = $header;
			include($path . $file);
		?>
	<!-- </head> -->
    <body>
        <!--[if lt IE 8]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. Thanks!</p>
        <![endif]-->

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
							include($path . $sub_nav);
						?>
					<!-- </site-nav> -->
		        </div>
		        <div class="main-container">
		            <div class="main clearfix">

		                <!-- <hsc-content> -->
							<?php 
								$file = "dental-medicine-departments.php";
								include($path . $content . $sites . 'hsc-bulletin/' . $file);
							?>
						<!-- </hsc-content> -->

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
			<?php /*
				$file = "site-analytics.php";
				include($path . $file); */
			?>
		<!-- </googleanalytics> -->
    </body>
</html>