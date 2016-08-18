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
		?>
	<!-- </inc> -->
	<!--site variables-->
		<?php
			
			$page_title_sub  = 'Jobs';
			$page_title_full = $page_title . (isset($page_title_sub) && $page_title_sub!='' ? ' | ' . $page_title_sub : '');

		    $og_title        = 'Stony Brook ' . $page_title_sub;
		    //$og_description  = 'Did you know? Stony Brook University generates more than $2.5 billion annually in regional economic impact and is one of the few campuses anywhere with a Vice President for Economic Development. Read more...';
		    $og_url          = 'http://www.stonybrook.edu/economic-development';

		    $page_to_top_link = true;

		    $page_footerbar   = true;

		    $carousel 		  = true;
		?>

	<!-- <head> -->
		<?php 
			$file  = $header;
			include($path . $file);
		?>

		<link rel="stylesheet" href="css/elements/carousel-with-extras/carousel-with-extras.css">
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

		                <article>
						    <section>
						    	<!--BEGIN Carousel Code-->
						        <div class="no-pad-wrapper border-box">
						            <div class="carousel-wrapper">
						                <div id="the-carousel" class="owl-carousel">
						                    <div class="item">
					                            <div class="carousel-image" data-image="01">
					                            	<a href="#">
					                            		<img src="/sb/elements/carousel-with-extras/images/carousel-01.jpg" />
					                            	</a>
					                                <div class="carousel-text">
							                        	<a href="#">
						                                    <div class="carousel-title">Suffolk County’s only children’s hospital is expanding to offer more dedicated space, people, technology and the latest medical advances for our young patients and the families who love them.<i class="fa fa-long-arrow-right icons"></i></div>
														</a>
														<a href="#">
					                                    	<div class="carousel-subtitle"><img src="/sb/elements/carousel-with-extras/images/give-now-button-75.png" /><span>All donations to Stony Brook Children’s Hospital during 2014 will be matched dollar for dollar.</span></div>
					                                    </a>
					                                </div>
					                            </div>
						                    </div>
						                    <div class="item">
					                            <div class="carousel-image" data-image="02">
					                            	<a href="#">
					                            		<img src="/sb/elements/carousel-with-extras/images/carousel-02.jpg" />
					                            	</a>
					                                <div class="carousel-text">
							                        	<a href="#">
						                                    <div class="carousel-title">Over 30 percent of Stony Brook’s talented students come from families earning less than $30,000 a year. Scholarship donors ensure these students have affordable access to an excellent college education.<i class="fa fa-long-arrow-right icons"></i></div>
														</a>
														<a href="#">
					                                    	<div class="carousel-subtitle"><img src="/sb/elements/carousel-with-extras/images/give-now-button-75.png" /><span>Your gift for a scholarship or fellowship ensures we recruit and retain the most talented students.</span></div>
					                                    </a>
					                                </div>
					                            </div>
						                    </div>
						                    <div class="item">
					                            <div class="carousel-image" data-image="03">
					                            	<a href="#">
					                            		<img src="/sb/elements/carousel-with-extras/images/carousel-03.jpg" />
					                            	</a>
					                                <div class="carousel-text">
							                        	<a href="#">
						                                    <div class="carousel-title">Want to make a difference in the lives of young people, patients, or researchers working the world’s greatest challenges?  Join the team at University Advancement for work you can believe in.<i class="fa fa-long-arrow-right icons"></i></div>
														</a>
														<a href="#">
					                                    	<div class="carousel-subtitle"><img src="/sb/elements/carousel-with-extras/images/learn-more-button-75.png" /><span>It’ll be your best career move ever. Learn more about working in University Advancement at SBU.</span></div>
					                                    </a>
					                                </div>
					                            </div>
						                    </div>
						                    <div class="item">
					                            <div class="carousel-image" data-image="04">
					                            	<a href="#">
					                            		<img src="/sb/elements/carousel-with-extras/images/carousel-04.jpg" />
					                            	</a>
					                                <div class="carousel-text">
							                        	<a href="#">
						                                    <div class="carousel-title">Endowed professorships and chairs are a time-honored way to attract and retain exceptional scholars, and are a lasting tribute to the visionary donors who establish them.<i class="fa fa-long-arrow-right icons"></i></div>
														</a>
														<a href="#">
					                                    	<div class="carousel-subtitle"><img src="/sb/elements/carousel-with-extras/images/give-now-button-75.png" /><span>Interested in naming an endowed faculty chair or professor at Stony Brook? Call <strong>(631) 632-6300</strong></span></div>
					                                    </a>
					                                </div>
					                            </div>
						                    </div>
						                </div>
						            </div>
						        </div>
						        <!--END Carousel Code-->
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