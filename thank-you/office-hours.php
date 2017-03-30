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
			$second_level    = 'submission-thank-you';
			$page_title_sub  = 'Thank You';
			$page_title_full = $page_title . (isset($page_title_sub) && $page_title_sub!='' ? ' | ' . $page_title_sub : '');

		    $og_title        = 'Stony Brook ' . $page_title_sub;
		    $og_description  = 'Visit Stony Brook to discover an institution that goes far beyond extraordinary.';
		    $og_url          = 'http://www.stonybrook.edu/';
		    $main_nav_selected_tab = 0;

		    $page_to_top_link = true;

		    $page_footerbar   = true;
		    $page_footer      = true;

		    $carousel 		  = false;

		    $page_scroll        = true;
		    $page_scroll_el     = 'logo';     //Options are audience-nav, logo, main-nav, bottom
		    $page_scroll_time   = 150;      //Time for scroll function in milliseconds
		    $page_scroll_mobile = true;  //Define whether the scroll-on-load occurs only on mobile. False by default, meaning scroll will happen on desktop and mobile.

		    $site_breadcrumbs = false;
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
							<?php 
								$secret = '6Lc01RMUAAAAAE1scPKyWckbsoIhWFhxxf6tLnIh';
                                require($root . '/' . $site . '/plugins/recaptcha/src/autoload.php');
                                $recaptcha = new \ReCaptcha\ReCaptcha($secret, new \ReCaptcha\RequestMethod\CurlPost());

                                $gRecaptchaResponse = $_POST['g-recaptcha-response'];

                                $resp = $recaptcha->verify($gRecaptchaResponse, $remoteIp);
                                if ($resp->isSuccess()) {
                                	if($_POST['first-name']!='' && $_POST['last-name']!='' && $_POST['email']!='' && $_POST['date']!='' && $_POST['topic']!='' && $_POST['g-recaptcha-response']!='') {
										echo('<div id="google-response" style="display: none;">');

									    $url = 'https://docs.google.com/forms/d/e/1FAIpQLSeMvReaPL2bJwBeHBl4K97UzbklNeQI6F4zKOWXEFylh2EMnA/formResponse?entry.400857025='.htmlspecialchars($_POST['first-name']).'&entry.417680940='.htmlspecialchars($_POST['last-name']).'&entry.1523563919='.htmlspecialchars($_POST['email']).'&entry.1787604701='.htmlspecialchars($_POST['date']).'&entry.818029876='.htmlspecialchars($_POST['topic']).'&entry.1881785626='.htmlspecialchars($_POST['source-url']).'&submit=Submit';
									    $ch = curl_init($url);

									    curl_setopt($ch, CURLOPT_POST, 1);
									    curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
									    //curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

									    $response = curl_exec($ch);
									    curl_close($ch);

									    echo('</div>');

										include($path . 'content/forms/submit_google_pres_2017_form.php');

									} else {
										include($path . 'content/forms/re-submit_google_pres_2017_form.php');
									}
                                } else {
                                    $errors = $resp->getErrorCodes();
                                     include($path . 'content/forms/re-submit_google_pres_2017_form.php');
                                }
							?>
						</div>
		                <!-- <for-students> -->
							<?php 
							?>
						<!-- </for-students> -->

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