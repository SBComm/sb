<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<!-- <inc> -->
		<?php
			$this_dir = $_SERVER['REQUEST_URI'];
			$dev_dir  = '/development/sb/';
			$prod_dir = '/sb/';
			$is_dev = strpos($this_dir,$dev_dir);
			if($is_dev !== false) {
				$inc = $_SERVER['DOCUMENT_ROOT'] . $dev_dir . "inc/inc.php";
			} else {
				$inc = $_SERVER['DOCUMENT_ROOT'] . $prod_dir . "inc/inc.php";
			}
			include($inc);
		?>
	<!-- </inc> -->
	<!--site variables-->
		<?php
			$page_type       = 'second-level';
    		$page_cat        = 'sub'; // for site tagline logo container
			$second_level    = 'alumni';

			$keywords        = $alumni_keywords;
	        $page_title      = 'Stony Brook University Alumni';
	        $page_title_sub  = 'Alumni';
	        $page_title_full = ucwords(str_replace("-"," ",basename(dirname(__FILE__)))) . ' | ' . $page_title;

	        $og_title        = $page_title_full;
	        $og_description  = $alumni_page_description;
	        $og_url          = $relative_page_path;

		    $page_to_top_link = true;

		    $page_footerbar   = true;
		    $page_footer      = true;

		    $sub_nav_selected_tab = 1;

		    $inside_page = true;

		    $equal_col_desktop = true;

		    $carousel 	      = true;
		    $carousel_4       = true;

		    $lightbox 	      = true;

    		$search_type      = 'default';
    		$search_style 	  = 'default';
    		$nav_type		  = 'big-n-bold';
    		$social_sidebar   = 'alumni';

    		$motio  		  = false;

    		$slick_slider	  = true;

    		$page_loader     = true;

    		//$page_scroll      = true;
	        $page_scroll_el   = 'logo';     //Options are audience-nav, logo, main-nav, bottom
	        $page_scroll_time = 0;
	        $page_scroll_mobile = true;

	        $equal_col_desktop = true;

	        $html_dom_parser = true;

	        $flickr_feed = true;
		?>

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
							include($path . 'nav/alumni-nav.php');
						?>
					<!-- </site-nav> -->
		        </div>
		        <div class="main-container">
		            <div class="main clearfix">

		                <!-- <undergrad-admissions> -->
							<?php 
								$file = "alumni/get-connected/chapters/tucson-alumni-chapter.php";
								include($path . $content . $secLv . $file);
							?>
						<!-- </undergrad-admissions> -->

		            </div> <!-- .main -->
		        </div> <!-- .main-container -->
		        <!-- <div.footer-container> -->
		        	<?php if($page_footer) {
						$file = "footers/alumni-footer.php";
						include($path . $file);
					} ?>
					<?php if($page_footerbar) {
						$file = "footers/alumni-footerbar.php";
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