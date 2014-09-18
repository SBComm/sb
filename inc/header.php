    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?php echo $page_title_full; ?></title>

        <meta name="author" content="Joshua Palmeri">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="<?php echo $og_description; ?>">
        <meta name="keywords" content="Stony Brook University, SUNY Stony Brook, SUNY-SB, SUNYSB, U of Stony Brook, research university, summer session, University of Stony Brook, University at Stony Brook, Stonybrook, Admissions, College, Undergraduate, Sciences, Liberal Arts, New York, Long Island">
        <!--<meta name="format-detection" content="telephone=no">-->

    <!--BEGIN Open Graph Meta Tags-->
    <!--See http://davidwalsh.name/facebook-meta-tags-->
        <meta property="og:title" content="<?php echo $og_title; ?>" />
        <meta property="og:description" content="<?php echo $og_description; ?>">
        <meta property="og:type" content="<?php echo $og_type; ?>" />
        <meta property="og:url" content="<?php echo $og_url; ?>" />
        <meta property="og:image" content="<?php echo $og_image; ?>" />
    <!--END Open Graph Meta Tags-->

    	<base href="<?php echo $css_base_url; ?>">

    <!--BEGIN Cross-device Favicon code-->
    <!--Be sure to have the appropriate images configured correctly in the site root-->
        <link rel="apple-touch-icon" href="apple-touch-icon-144x144-precomposed.png">
        <link rel="icon" href="apple-touch-icon.png">
        <!--[if IE]>
            <link rel="shortcut icon" href="/favicon.ico">
        <![endif]-->
        <meta name="msapplication-TileColor" content="#000000">
        <meta name="msapplication-TileImage" content="apple-touch-icon-144x144-precomposed.png">
    <!--END Cross-device Favicon code-->

    <!--BEGIN CSS Includes-->
        <link rel="stylesheet" href="css/vendor/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" type="text/css" href="css/elements/cd-dropdown/cd-dropdown.css" />
        <link rel="stylesheet" href="css/elements/tables/responsive-table.css">
        <!--<link rel="stylesheet" href="fonts/icomoon/style.css">-->
        <!--<link href="fonts/font-awesome-4.0.3/css/font-awesome.css" rel="stylesheet">-->
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
    <!--END CSS Style Includes-->

        <?php if($carousel) { ?>
            <link rel="stylesheet" type="text/css" href="css/elements/owl-carousel/owl.carousel.css" media="all" />
            <link rel="stylesheet" type="text/css" href="css/elements/owl-carousel/owl.theme.css" media="all" />
            <link rel="stylesheet" type="text/css" href="css/elements/owl-carousel/owl.custom.css" media="all" />
            <link rel="stylesheet" type="text/css" href="css/elements/owl-carousel/owl.transitions.css" media="all" />
        <?php } ?>

        <?php if($lightbox) { ?>
            <link rel="stylesheet" type="text/css" href="plugins/nivo-lightbox/nivo-lightbox.css" media="all" />
            <link rel="stylesheet" type="text/css" href="plugins/nivo-lightbox/themes/default/custom.css" media="all" />
        <?php } ?>

        <?php if($page_type=='social-hub') { ?>
        	<link rel="stylesheet" type="text/css" href="css/social/sb-layout.css" media="all" />
			<link rel="stylesheet" type="text/css" href="css/social/sb-dcsns_wall.css" media="all" />
            <?php if($page_loader) { ?>
                <link rel="stylesheet" type="text/css" href="css/social/sbu-preloader.css" media="all" />
            <?php } ?>
			<!--[if lt IE 9]>
	            <link rel="stylesheet" type="text/css" href="css/social/ie/sb-dcsns_wall-ie8.css" media="all" />
	        <![endif]-->
        <?php } ?>

        <?php if($tabbed_nav) { ?>
            <link rel="stylesheet" type="text/css" href="css/elements/tabs/tabbed-nav.css" media="all" />
            <!--[if lt IE 9]>
                <link rel="stylesheet" type="text/css" href="css/elements/tabs/tabbed-nav-ie8.css" media="all" />
            <![endif]-->
            <?php if($mobile_tabs) { ?>
                <link rel="stylesheet" type="text/css" href="css/elements/tabs/mobile-tabs.css" media="all" />
            <?php } ?>
        <?php } ?>

        <?php if($accordion_nav) { ?>
            <link rel="stylesheet" type="text/css" href="css/elements/accordions/accordion-nav.css" media="all" />
            <!--[if lt IE 9]>
                <link rel="stylesheet" type="text/css" href="css/elements/accordions/accordion-nav-ie8.css" media="all" />
            <![endif]-->
        <?php } ?>

        <?php if($page_to_top_link) { ?>
        	<link rel="stylesheet" type="text/css" href="css/elements/to-top-link/to-top.css" media="all" />
        <?php } ?>

        <?php if($text_filter) { ?>
            <link rel="stylesheet" type="text/css" href="css/elements/filter/text-filter.css" media="all" />
            <!--[if lt IE 9]>
                <link rel="stylesheet" type="text/css" href="css/elements/accordions/accordion-nav-ie8.css" media="all" />
            <![endif]-->
        <?php } ?>

        <?php if($page_type=='second-level') { ?>
            <link rel="stylesheet" type="text/css" href="css/second-level.css" media="all" />
            <link rel="stylesheet" type="text/css" href="css/second-level/<?php echo $second_level; ?>.css" media="all" />
            <?php if($inside_page==true) { ?>
                <link rel="stylesheet" type="text/css" href="css/second-level/<?php echo $second_level; ?>-inside.css" media="all" />
            <?php } ?>
        <?php } ?>

        <?php if($page_type=='bulletin') { ?>
            <link rel="stylesheet" type="text/css" href="css/page-types/bulletin.css" media="all" />
        <?php } ?>

        <?php if($page_type=='search') { ?>
            <link rel="stylesheet" type="text/css" href="css/search.css" media="all" />
        <?php } ?>

        <?php if($map==true) { ?>
            <link href="plugins/map/css/map.css" rel="stylesheet" type="text/css" />
        <?php } ?>

<!--
        <?php
            //localhost fix for port 8888
            if($_SERVER['SERVER_NAME'] == 'localhost') {
                $theServerName = 'localhost:8888';
            } else {
                $theServerName = $_SERVER['SERVER_NAME'];
            }

            $url  = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
            $url .= $theServerName;
            $url .= $_SERVER['REQUEST_URI'];

            $theImgDir          = $url . 'images/';

            echo ($theImgDir);



            // all files in current directory (excluding'.' and '..')
            $dir = new DirectoryIterator(dirname(__PATH__));
            foreach ($dir as $fileinfo) {
                if (!$fileinfo->isDot()) {
                    //var_dump($fileinfo->getFilename());
                }
            }
        ?>
        <style type="text/css">

            .carousel-image[data-image='01'] {
                background-image: url( <?php echo($theImgDir . 'carousel-01.jpg') ?> );
            }

        </style>
        <?php

        ?>
-->

    <!--BEGIN IE Specific CSS Includes and Polyfills-->
        <!--[if IE 11]>
            <link rel="stylesheet" href="css/ie/ie11.css">
        <![endif]-->
        <!--[if IE 10]>
            <link rel="stylesheet" href="css/ie/ie10.css">
        <![endif]-->
    	<!--[if gt IE 8]>
            <link rel="stylesheet" href="css/ie/gte-ie9.css">
        <![endif]-->
        <!--[if IE 9]>
            <link rel="stylesheet" href="css/ie/ie9.css">
        <![endif]-->
        <!--[if lt IE 9]>
            <link rel="stylesheet" href="css/ie/lte-ie8.css">
        <![endif]-->
        <!--[if lt IE 8]>
            <link rel="stylesheet" href="/css/ie/icomoon-ie7.css">
        <![endif]-->
        <!--BEGIN HTML5 Shiv-->
        <!--Note: This causes Google Fonts to show up on IE8-->
            <!--[if lt IE 9]>
                <script src="js/vendor/html5shiv/trunk/html5.js"></script>
            <![endif]-->
        <!--END HTML5 Shiv-->
    <!--END IE Specific CSS Includes and Polyfills-->

    <!--BEGIN Fonts.com Include-->
		<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/4d69d29a-9fcc-4dfe-bd87-a65adb689f6c.css"/>
    <!--END Fonts.com Include-->

    <!--BEGIN Modernizr Include-->
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!--END Modernizr Include-->
    </head>