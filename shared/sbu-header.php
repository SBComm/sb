	<!-- inc -->
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
	<!-- /inc -->
	<!-- site variables -->
		<?php
			$page_type       = 'second-level';
			$second_level    = 'for-students';
		?>
	<!-- /site variables -->
	<!-- /head -->
	<?php 
		$file  = $header;
		include($path . $file);
	?>
	<!-- /head -->

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

		        