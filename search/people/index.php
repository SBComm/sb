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
			$page_type       = 'search';
			$page_title_sub  = 'Search';
			$page_title_full = $page_title . (isset($page_title_sub) && $page_title_sub!='' ? ' | ' . $page_title_sub : '');

		    $og_title        = 'Stony Brook ' . $page_title_sub;
		    $og_description  = 'Did you know? Stony Brook University generates more than $2.5 billion annually in regional economic impact and is one of the few campuses anywhere with a Vice President for Economic Development. Read more...';
		    $og_url          = 'http://www.stonybrook.edu/search';

		    $tabbed_nav       = true;
		    $mobile_tabs      = true;

		    $page_to_top_link = true;

		    $page_footerbar   = true;

		    $page_scroll        = true;
		    $page_scroll_el     = 'main-nav';     //Options are audience-nav, logo, main-nav, bottom
		    $page_scroll_time   = 0;      //Time for scroll function in milliseconds
		    $page_scroll_mobile = true;  //Define whether the scroll-on-load occurs only on mobile. False by default, meaning scroll will happen on desktop and mobile.
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
		        <div class="main-nav-container clearfix">
		        	<!-- <site-nav> -->
						<?php 
							include($path . $site_nav);
						?>
					<!-- </site-nav> -->
		        </div>
		        <div class="main-container">
		            <div class="main clearfix">

		                <!-- <search-results> -->
							<article>
							    <section class="search-wrapper">
							        <div class="site-input-wrapper wrapper border-box">
							            <h1 class="serif">Search</h1>

							            <div id="site-search-input" class="clearfix">
								            <div class="site-input-box">
								            	<div class="site-input">
								                	<input autocomplete="off" type="search" size="10" name="search" title="search" placeholder="Search directory...">
								            	</div>
								            </div>
								            <div id="people-search-btn" class="search-button" title="search">Search</div>
							            </div>

							            <div id="site-search-message">
							                
							            </div>

							            <ul id="tabbed-nav">
							                <li class="search-pages-link"><a href="http://www.stonybrook.edu/search/">Pages</a></li>
							                <li class="selected search-people-link"><a href="http://www.stonybrook.edu/search/people/">People</a></li>
							            </ul>

							        </div>

							        <div class="cse-wrapper border-box">

							            <div id="cse-search-results" class="wrapper">
							               
							            <div class="search-default-message">To search faculty and staff, enter a name above.</div>
							            <iframe id="people-frame" class="people-search-results" src="" frameborder="0" scrolling="no"></iframe>

							            </div>

							        </div>

							    </section>
							</article>
						<!-- </search-results> -->

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