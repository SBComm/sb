<?php
	//header params
	$og_url = $_GET["pageURL"];
	$include_scripts = $_GET["scripts"];
	$include_jquery = $_GET["jquery"];
	$page_title_sub = $_GET["pageTitle"];
	$audience_nav = $_GET["audienceNav"];
	$sub_nav_selected_tab = $_GET["selected"];

	//shared params
	$include_head_code = ($_GET["include"]);
	$nav_site = $_GET["site"];

	//footer params
	$include_footer =  $_GET["footer"];
	$include_footerbar =  $_GET["footerbar"];
	$include_totop = $_GET["totop"];

	$page_cat = 'sub';
	$second_level = $_GET["site"];

	if($include_head_code==1) {
		$meta = false;
		$file  = $header;
		?>
        <link href="//mobile.cc.stonybrook.edu/sb/css/vendor/normalize.min.css" rel="stylesheet">
		<link href="//mobile.cc.stonybrook.edu/sb/css/main.css" rel="stylesheet">
		<link href="//mobile.cc.stonybrook.edu/sb/css/nav.css" rel="stylesheet">
		<?php
		if($second_level!='') { ?>
			<link href='//mobile.cc.stonybrook.edu/sb/css/second-level.css' rel="stylesheet">
			<link href='//mobile.cc.stonybrook.edu/sb/css/second-level/<?php echo $second_level; ?>.css' rel="stylesheet">
			<link href="//mobile.cc.stonybrook.edu/sb/css/second-level/<?php echo $second_level; ?>-inside.css" rel="stylesheet">
		<?php } ?>
		<link href="//mobile.cc.stonybrook.edu/sb/css/shared/blackbaud-advancement.css" rel="stylesheet">
		<link href="//mobile.cc.stonybrook.edu/sb/css/elements/cd-dropdown/cd-dropdown.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="//mobile.cc.stonybrook.edu/sb/css/elements/to-top-link/to-top.css" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/8b09d344-baa0-42a8-bbac-175ff46c86d5.css">
        <link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/ee71ef3e-a7f1-47dd-8ae1-4ae6bec02b30.css"/>
		<?php
		if($include_scripts==1) { ?>
			<?php
			if($include_jquery==1) { ?>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        		<script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
			<?php } ?>
			<script src="http://mobile.cc.stonybrook.edu/sb/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
			<script src="http://mobile.cc.stonybrook.edu/sb/js/cd-dropdown/jquery.dropdown.js"></script>
			<script src="http://mobile.cc.stonybrook.edu/sb/js/vendor/jquery.sticky.js"></script>
			<script src="http://mobile.cc.stonybrook.edu/sb/js/vendor/jquery.scrollTo.min.js"></script>
			<script src="http://mobile.cc.stonybrook.edu/sb/js/vendor/jquery.easing.1.3.js"></script>
			<script src="http://mobile.cc.stonybrook.edu/sb/js/vendor/jquery.easing.compatibility.js"></script>
			<script src="http://mobile.cc.stonybrook.edu/sb/js/vendor/jquery.scrollTo.min.js"></script>
			<script src="http://mobile.cc.stonybrook.edu/sb/js/vendor/jquery.localScroll.min.js"></script>
			<script src="http://mobile.cc.stonybrook.edu/sb/js/vendor/jquery.ba-bbq.js"></script>
			<script src="http://mobile.cc.stonybrook.edu/sb/js/vendor/jquery.motio.js"></script>
			<script src="http://mobile.cc.stonybrook.edu/sb/js/vendor/jquery.tooltipster.min.js"></script>
			<script src="http://mobile.cc.stonybrook.edu/sb/js/plugins.js"></script>
			<script src="http://mobile.cc.stonybrook.edu/sb/js/main.js"></script>
			<script src="http://mobile.cc.stonybrook.edu/sb/js/mega-nav.js"></script>
			<script src="http://mobile.cc.stonybrook.edu/sb/js/vendor/fastclick.js"></script>
		<?php
		}
	}
?>