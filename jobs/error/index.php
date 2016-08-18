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
			$page_type       = 'second-level';
			$second_level    = 'jobs';
			$page_title_sub  = 'Jobs';
			$page_title_full = $page_title . (isset($page_title_sub) && $page_title_sub!='' ? ' | ' . $page_title_sub : '');

		    $og_title        = 'Stony Brook ' . $page_title_sub;
		    //$og_description  = 'Did you know? Stony Brook University generates more than $2.5 billion annually in regional economic impact and is one of the few campuses anywhere with a Vice President for Economic Development. Read more...';
		    $og_url          = 'http://www.stonybrook.edu/jobs';

		    $page_to_top_link = false;

		    $page_footerbar   = true;

		    $carousel 		  = false;
		?>

	<head>
		<?php 
			$file  = $header;
			include($path . $file);
		?>
	</head>

		<?php
	    	//$error_code = $_GET['errorReason'];
	    	$error_code = 99;
    		switch($error_code) {
    			case 0:
    				$error_msg = 'Your user permissions do not authorize you to access this page.';
    				$show_contact_msg = false;
    				break;
    			case 1:
    				$error_msg = 'The user name and password combination you entered does not correspond to a registered user.';
    				$show_contact_msg = true;
    				break;
    			case 2:
    				$error_msg = 'The password you have entered is invalid.';
    				$show_contact_msg = false;
    				break;
    			case 3:
    				$error_msg = 'Your account has been locked. Please contact your System Administrator.';
    				$show_contact_msg = true;
    				break;
    			case 4:
    				$error_msg = 'Your account has been deleted. For further details, please contact your System Administrator.';
    				$show_contact_msg = true;
    				break;
    			case 5:
    				$error_msg = 'Your account has expired. Please contact your System Administrator.';
    				$show_contact_msg = true;
    				break;
    			case 6:
    				$error_msg = 'Invalid assertion.';
    				$show_contact_msg = false;
    				break;
    			case 7:
    				$error_msg = 'Please provide a user name and a password.';
    				$show_contact_msg = false;
    				break;
    			case 8:
    				$error_msg = 'You cannot access this product since you belong to no group. Please contact your System Administrator.';
    				$show_contact_msg = true;
    				break;
    			case 9:
    				$error_msg = 'Invalid answer to secret question.';
    				$show_contact_msg = false;
    				break;
    			case 10:
    				$error_msg = 'Your account has been deactivated. Please contact your System Administrator to reactivate it.';
    				$show_contact_msg = true;
    				break;
    			case 11:
    				$error_msg = 'Your password is expired.';
    				$show_contact_msg = false;
    				break;
    			default:
    				$error_msg = 'Please contact the appropriate help department for assistance:';
    				$show_contact_msg = true;
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
						    <section class="white-background height-700 padding-box clearfix">
						        <div class="wrapper border-box padding-box content clearfix">
						            <h3>Access denied</h3>
						            <p><?php echo $error_msg; ?></p>
						            <?php if($show_contact_msg) { ?>
						            	<p>
											<strong>Stony Brook Medicine and Long Island Veteran's Home:</strong><br />
                                            (631) 444-HELP<br />
                                            <br />
											<strong>Stony Brook University:</strong><br />
                                            (631) 632-6161<br />
                                            HRS_tms@stonybrook.edu
						            	</p>
						            <?php } ?>
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