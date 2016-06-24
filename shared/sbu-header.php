	<!-- inc -->
	<?php
		$root = '/user/far-beyond/www';
		$this_dir = $_SERVER['REQUEST_URI'];
		$dev_dir  = '/development/sb/';
		$prod_dir = '/sb/';
		$is_dev = strpos($this_dir,$dev_dir);
		if($_SERVER['SERVER_NAME'] == 'localhost') {
			$inc = $_SERVER['DOCUMENT_ROOT'] . $prod_dir . "inc/inc.php";
		} else if($is_dev !== false) {
			$inc = $root . $dev_dir . "inc/inc.php";
		} else {
			$inc = $root . $prod_dir . "inc/inc.php";
		}
		include($inc);
		include('sbu-head-code.php');
	?>
	<!-- /inc -->

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
						<?php if($audience_nav==1) {
							include($path . $audience_nav);
						}?>
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
						if($nav_site=='alumni') {
							$nav_type = 'big-n-bold';
							$include_nav = 'nav/alumni-nav.php';
						} else {
							$nav_type = 'default';
							$include_nav = $site_nav;
						}
						include($path . $include_nav);
					?>
				<!-- </site-nav> -->
	        </div>

	    </div>
	</div>