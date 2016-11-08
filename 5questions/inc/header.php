    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?php echo $page_title_full; ?></title>

        <meta name="author" content="<?php echo $author_name; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimal-ui">
        <meta name="description" content="<?php echo $page_description; ?>">
        <meta name="keywords" content="<?php echo $page_keywords; ?>">
        <?php if(!$detect_phone_num) { ?>
            <meta name="format-detection" content="telephone=no">
        <?php } ?>
        <meta name="apple-mobile-web-app-capable" content="yes">

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

        <meta name="specificfeeds-verification-code" content="HkHZYNv62P0vlPLAZVA5"/>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-P43R9T');</script>
        <!-- End Google Tag Manager -->

    <!--BEGIN main CSS Includes-->
        <link rel="stylesheet" href="css/vendor/normalize.min.css">
        <?php includeAsset('css','plugins/nivo-lightbox/nivo-lightbox.css','all'); ?>
        <?php includeAsset('css','plugins/nivo-lightbox/themes/default/custom.css','all'); ?>

        <?php if($tablesaw==true) { ?>
            <?php includeAsset('css','plugins/tablesaw/tablesaw.bare.css','screen'); ?>
        <?php } ?>

        <?php includeAsset('css','css/main.css');  ?>
        <?php includeAsset('css','css/nav.css'); ?>
        <?php includeAsset('css','css/honorees.css');  ?>
        <?php if($profile_page) { includeAsset('css','css/profile.css'); } ?>
        <?php if($page_type=='nominees') { includeAsset('css','css/nominees.css'); } ?>

        <?php includeAsset('css','css/print.css','print'); ?>
    <!--END main CSS Includes-->

    <!--BEGIN conditional CSS Includes-->
        <?php if($page_type=='default') { ?>
        	<!--<link rel="stylesheet" href="css/default.css" media="all" />-->
			<!--[if lt IE 9]>
	            <link rel="stylesheet" href="css/default-ie8.css" media="all" />
	        <![endif]-->
        <?php } ?>

        <?php if($gallery==true) { ?>
            <?php includeAsset('css','plugins/gallery/css/magnific-popup.css'); ?>
            <?php includeAsset('css','plugins/gallery/css/gallery.css'); ?>
        <?php } ?>

        <?php if($page_to_top_link) { ?>
            <?php includeAsset('css','css/elements/to-top-link/to-top.css','all'); ?>
        <?php } ?>
    <!--END conditional CSS Includes-->

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
        <!--BEGIN HTML5 Shiv-->
        <!--Note: This causes Google Fonts to show up on IE8-->
            <!--[if lt IE 9]>
                <script src="js/vendor/html5shiv/trunk/html5.js"></script>
            <![endif]-->
        <!--END HTML5 Shiv-->
    <!--END IE Specific CSS Includes and Polyfills-->

    <!--BEGIN Fonts.com Include-->
        <link href='http://fonts.googleapis.com/css?family=Great+Vibes|Cookie' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/8b09d344-baa0-42a8-bbac-175ff46c86d5.css"/>
        <link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/ee71ef3e-a7f1-47dd-8ae1-4ae6bec02b30.css"/>
		<!--<link href="fonts/font-awesome-4.0.3/css/font-awesome.css" rel="stylesheet">-->
        <link rel="stylesheet" href="fonts/icomoon/style.css">
        <!--[if lt IE 8]>
            <link rel="stylesheet" href="fonts/icomoon/ie7/ie7.css">
        <![endif]-->
    <!--END Fonts.com Include-->

    <!--BEGIN Modernizr Include-->
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!--END Modernizr Include-->

    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
     fbq('init', '1202524116501752'); 
    fbq('track', 'PageView');
    </script>
    <noscript>
     <img height="1" width="1" 
    src="https://www.facebook.com/tr?id=1202524116501752&ev=PageView
    &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
    </head>