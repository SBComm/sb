<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" style="height: 100%;"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" style="height: 100%;"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" style="height: 100%;"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9" style="height: 100%;"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" style="height: 100%;"> <!--<![endif]-->
	<!-- <inc> -->
		<?php
			$root = '/user/far-beyond/www';

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
			$second_level    = 'undergrad-admissions';
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
    <body style="height: 100%;">

		<iframe allowfullscreen id="virtualtour_iframe" frameborder="0" style="overflow-x:hidden;overflow-y:auto;border: none;background-color:black;width:100%;max-width:100%" src="https://www.youvisit.com/tour/59968/?pl=v&amp;hover=0" scrolling="yes" width="100%" height="100%"></iframe>

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