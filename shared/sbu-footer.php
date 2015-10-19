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

	        <!-- <div.footer-container> -->
	        	<?php if($_GET["footer"]==1) {
					$file = "footers/for-students-footer.php";
					include($path . $file);
				} ?>
				<?php if($_GET["footerbar"]==1) {
					$file = "footerbar.php";
					include($path . $file);
				} ?>
			<!-- </div.footer-container> -->

			<!-- <to-top> -->
				<?php if($_GET["totop"]==1) {
					$file = "to-top.php";
					include($path . $file);
				} ?>
			<!-- </to-top> -->

        </div><!-- .sbu-sub-wrapper -->
    </div><!-- .sbu-wrapper -->