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
			$second_level    = 'site-directory';
			$page_title_sub  = 'Site Directory';
			$page_title_full = $page_title . (isset($page_title_sub) && $page_title_sub!='' ? ' | ' . $page_title_sub : '');

		    $og_title        = 'Stony Brook ' . $page_title_sub;
		    $og_description  = 'Directory of Stony Brook University\'s website.';
		    $og_url          = 'http://www.stonybrook.edu/site-directory';
		    //$main_nav_selected_tab = 1;

		    $tabbed_nav       = true;
		    $mobile_tabs      = true;

		    $page_to_top_link = true;

		    $page_footerbar   = true;

		    $live_filter	  = true;

		    $page_scroll        = true;
		    $page_scroll_el     = 'logo';     //Options are audience-nav, logo, main-nav, bottom
		    $page_scroll_time   = 150;      //Time for scroll function in milliseconds
		    $page_scroll_mobile = true;  //Define whether the scroll-on-load occurs only on mobile. False by default, meaning scroll will happen on desktop and mobile.

		    $site_breadcrumbs = true;
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
							include($path . $site_nav);
						?>
					<!-- </site-nav> -->
		        </div>
		        <div class="main-container">
		            <div class="main clearfix">

		                <!-- <for-students> -->
							
						<!-- </for-students> -->

						<!-- <search-results> -->
							<article>
							    <section class="search-wrapper pad-top">
							        <div class="site-input-wrapper wrapper border-box pad-top">
							            <h2>Site Directory</h2>

							            <ul id="tabbed-nav">
							                <li class="search-pages-link"><a href="http://www.stonybrook.edu/search/">Website Results</a></li>
							                <li class="search-people-link"><a href="http://www.stonybrook.edu/search/people/">People Results</a></li>
							                <li class="selected tabbed-nav-no-border"><a href="http://www.stonybrook.edu/site-directory/">Site Directory</a></li>
							            </ul>

							        </div>

							        <div class="cse-wrapper border-box">

							            <div id="cse-search-results" class="wrapper">
							               
								            <?php 
												$file = "{$second_level}/{$second_level}.php";
												include($pathForContent . $content . $secLv . $file);
											?>

							            </div>

							        </div>

							    </section>
							</article>
						<!-- </search-results> -->

		            </div> <!-- .main -->
		        </div> <!-- .main-container -->
		        <!-- <div.footer-container> -->
		        	<?php if($page_footer) {
						$file = "footers/sbu-footer.php";
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