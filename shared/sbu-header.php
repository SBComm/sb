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

		$includeHeader = ($_GET["include"]);
		if($includeHeader==1) {
			$meta = false;
			$file  = $header;
			//include($path . $file);
			?>

	        <link href="//mobile.cc.stonybrook.edu/sb/css/vendor/normalize.min.css" rel="stylesheet">
	        <link href="//mobile.cc.stonybrook.edu/sb/css/main.css" rel="stylesheet">
	        <link href="//mobile.cc.stonybrook.edu/sb/css/nav.css" rel="stylesheet">
	        <link href="//mobile.cc.stonybrook.edu/sb/css/elements/cd-dropdown/cd-dropdown.css" rel="stylesheet">

	        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

		    <link href="//mobile.cc.stonybrook.edu/sb/css/elements/to-top-link/to-top.css" rel="stylesheet">

		    <link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/8b09d344-baa0-42a8-bbac-175ff46c86d5.css"/>

			<?php
		}
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

	    </div>
	</div>

		        