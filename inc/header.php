    <?php if($meta) { ?>
        <base href="<?php echo $css_base_url; ?>"><!--[if IE]></base><![endif]-->

        <meta charset="utf-8">
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->
        <!-- <meta http-equiv="Content-Security-Policy" content="default-src https:"> -->
        <!-- <meta http-equiv="Content-Security-Policy-Report-Only" 
              content="default-src 'none' form-action 'none' frame-ancestors 'none' report-uri https://stonybrook.report-uri.com/r/d/csp/reportOnly" />  
 -->
        <?php header("Content-Security-Policy-Report-Only: default-src 'none'; form-action 'none'; frame-ancestors 'none'; report-uri https://stonybrook.report-uri.com/r/d/csp/reportOnly");  ?>    

        <title><?php echo $page_title_full; ?></title>

        <meta name="author" content="Stony Brook Office of Communications">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="<?php echo $og_description; ?>">
        <meta name="keywords" content="<?php echo $keywords; ?>">
        <!--<meta name="format-detection" content="telephone=no">-->

    <!--BEGIN Open Graph Meta Tags-->
    <!--See http://davidwalsh.name/facebook-meta-tags-->
        <meta property="og:title" content="<?php echo $og_title; ?>" />
        <meta property="og:description" content="<?php echo $og_description; ?>">
        <meta property="og:type" content="<?php echo $og_type; ?>" />
        <meta property="og:url" content="<?php echo $og_url; ?>" />
        <meta property="og:image" content="<?php echo $og_image; ?>" />
        <meta property="fb:app_id" content="1111836582191622" />
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@stonybrooku">
        <meta name="twitter:creator" content="@stonybrooku">
        <meta name="twitter:title" content="<?php echo $og_title; ?>">
        <meta name="twitter:description" content="<?php echo $og_description; ?>">
        <meta name="twitter:image" content="<?php echo $og_image; ?>">
    <!--END Open Graph Meta Tags-->

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
    <?php } ?>

    <meta name="google-site-verification" content="_wIbG5pSJMndkARMYBYGrkYSI1PYUAisKfNnGzD4g8U" />
    <meta name="google-site-verification" content="sn28KzKOMkM49zHyt7iry30DIcxTDOUuEvTGOQWyRyE" /><!--Search Console-->

    <!--BEGIN CSS Includes-->
        <?php includeAsset('css','css/vendor/normalize.min.css'); ?>
        <?php includeAsset('css','css/main.css'); ?>
        <?php includeAsset('css','css/new-brand.css'); ?>
        <?php includeAsset('css','css/nav.css'); ?>
        <?php includeAsset('css','css/elements/cd-dropdown/cd-dropdown.css'); ?>
        <?php includeAsset('css','css/elements/tables/responsive-table.css'); ?>
        <?php includeAsset('css','css/vendor/tooltipster/tooltipster.css'); ?>
        <?php includeAsset('css','css/vendor/animate.css'); ?>
        <?php includeAsset('css','css/vendor/tooltipster/themes/tooltipster-light.css'); ?>
        <!--<link rel="stylesheet" href="fonts/icomoon/style.css">-->
        <!--<link href="fonts/font-awesome-4.0.3/css/font-awesome.css" rel="stylesheet">-->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css" rel="stylesheet">
    <!--END CSS Style Includes-->

        <?php if($carousel) { ?>
            <?php includeAsset('css','css/elements/owl-carousel/owl.carousel.css','all'); ?>
            <?php includeAsset('css','css/elements/owl-carousel/owl.theme.css','all'); ?>
            <?php includeAsset('css','css/elements/owl-carousel/owl.custom.css','all'); ?>
            <?php includeAsset('css','css/elements/owl-carousel/owl.transitions.css','all'); ?>
        <?php } ?>

        <?php if($slick_slider) { ?>
            <?php includeAsset('css','plugins/slick-1.5.7/slick/slick.css','all'); ?>
            <?php includeAsset('css','plugins/slick-1.5.7/slick/slick-theme.css','all'); ?>
        <?php } ?>

        <?php if($lightbox) { ?>
            <?php includeAsset('css','plugins/nivo-lightbox/nivo-lightbox.css','all'); ?>
            <?php includeAsset('css','plugins/nivo-lightbox/themes/default/custom.css','all'); ?>
        <?php } ?>

        <?php if($page_type=='social-hub') { ?>
            <?php includeAsset('css','css/social/sb-layout.css','all'); ?>
            <?php includeAsset('css','css/social/sb-dcsns_wall.css','all'); ?>
            <?php if($page_loader) {
                includeAsset('css','css/social/sbu-preloader.css','all');
            } ?>
			<!--[if lt IE 9]>
	            <link rel="stylesheet" type="text/css" href="css/social/ie/sb-dcsns_wall-ie8.css" media="all" />
	        <![endif]-->
        <?php } ?>

        <?php if($tabbed_nav) { ?>
            <?php includeAsset('css','css/elements/tabs/tabbed-nav.css','all'); ?>
            <!--[if lt IE 9]>
                <link rel="stylesheet" type="text/css" href="css/elements/tabs/tabbed-nav-ie8.css" media="all" />
            <![endif]-->
            <?php if($mobile_tabs) {
                includeAsset('css','css/elements/tabs/mobile-tabs.css','all');
            } ?>
        <?php } ?>

        <?php if($accordion_nav) { ?>
            <?php includeAsset('css','css/elements/accordions/accordion-nav.css','all'); ?>
            <!--[if lt IE 9]>
                <link rel="stylesheet" type="text/css" href="css/elements/accordions/accordion-nav-ie8.css" media="all" />
            <![endif]-->
        <?php } ?>

        <?php if($faculty_list) {
            includeAsset('css','css/elements/faculty-list/faculty-list.css','all');
        } ?>

        <?php if($page_to_top_link) {
            includeAsset('css','css/elements/to-top-link/to-top.css','all');
        } ?>

        <?php if($text_filter) { ?>
            <?php includeAsset('css','css/elements/filter/text-filter.css','all'); ?>
        <?php } ?>

        <?php if($overlay) {
            includeAsset('css','plugins/overlay/overlay.css','all');
        } ?>

        <?php if($page_type=='second-level' && $second_level=='faculty-experts') { ?>
            <?php includeAsset('css','css/elements/filter/text-filter.css','all'); ?>
        <?php } ?>

        <?php if($live_filter_sticky) {
            includeAsset('css','css/elements/filter/live-filter-sticky.css','all');
        } ?>

        <?php if($page_type=='second-level' && $second_level=='community-relations') { ?>
            <?php includeAsset('css','css/second-level/for-students.css','all'); ?>
        <?php } ?>

        <?php if($page_type=='second-level' || ($page_type=='social-hub'&&$second_level=='alumni')) { ?>
            <?php includeAsset('css','css/second-level.css','all'); ?>
            <?php includeAsset('css','css/second-level/'.$second_level.'.css','all'); ?>
            <?php includeAsset('css','css/second-level/branded-second-level.css','all'); ?>
            <?php if($second_level=='alumni-and-friends') { ?>
                <?php includeAsset('css','css/second-level/admissions.css','all'); ?>
                <?php includeAsset('css','css/second-level/alumni-inside.css','all'); ?>
            <?php } ?>
            <?php if($inside_page==true) { ?>
                <?php includeAsset('css','css/second-level/'.$second_level.'-inside.css','all'); ?>
            <?php } ?>
        <?php } ?>

        <?php if($page_type=='second-level' && $second_level=='analytics') { ?>
            <?php includeAsset('css','plugins/analytics/jquery.css','all'); ?>
        <?php } ?>

        <?php if($page_type=='bulletin') { ?>
            <?php includeAsset('css','css/page-types/bulletin.css','all'); ?>
        <?php } ?>

        <?php if($page_type=='search' || $second_level=='site-directory') { ?>
            <?php includeAsset('css','css/search.css','all'); ?>
            <?php includeAsset('css','css/second-level.css','all'); ?>
            <?php includeAsset('css','css/second-level/branded-second-level.css','all'); ?>
        <?php } ?>

        <?php if($tablesaw==true) { ?>
            <?php includeAsset('css','plugins/tablesaw/tablesaw.bare.css','screen'); ?>
        <?php } ?>

        <?php if($map==true) { ?>
            <?php includeAsset('css','plugins/map/css/map.css','all'); ?>
        <?php } ?>    

        <?php if($page_type=='home') { ?>
            <?php includeAsset('css','css/home-apr15/homepage-styles.css','all'); ?>
        <?php } ?> 

        <?php if($mag_article) { ?>
            <?php includeAsset('css','css/second-level/magazine-article.css','all'); ?>
        <?php } ?>

        <!-- Mega Menu -->
        <?php if($mega_nav==true) { ?>
            <?php includeAsset('css','css/elements/mlpushmenu/component.css'); ?>
            <?php includeAsset('css','css/nav-2017.css'); ?>
            <?php includeAsset('css','css/nav-2017-desktop.css'); ?>
        <?php } ?>

        <?php if($mega_nav_ou==true) { ?>
            <link href="//www.stonybrook.edu/commcms/_resources/css/main-v2.css?ver=1.2" rel="stylesheet" type="text/css"></link>
            <link href="//www.stonybrook.edu/commcms/_resources/css/topnav-responsive-v2.css?ver=1.2" rel="stylesheet" type="text/css"></link>
            <link href="//www.stonybrook.edu/commcms/_resources/css/banner-responsive-v2.css?ver=1.2" rel="stylesheet" type="text/css"></link>
            <link href="//www.stonybrook.edu/commcms/_resources/css/search-responsive-v2.css?ver=1.2" rel="stylesheet" type="text/css"></link>
            <link href="//www.stonybrook.edu/commcms/_resources/css/row2.css?ver=1.2" rel="stylesheet" type="text/css"></link>
            <link href="//www.stonybrook.edu/commcms/_resources/css/sections-responsive-v2.css?ver=1.2" rel="stylesheet" type="text/css"></link>
            <link href="//www.stonybrook.edu/commcms/_resources/css/cards.css?ver=1.2" rel="stylesheet" type="text/css"></link>
            <link href="//www.stonybrook.edu/commcms/_resources/css/footer.css?ver=1.2" rel="stylesheet" type="text/css"></link>
            <link href="//www.stonybrook.edu/commcms/_resources/css/print.css?ver=1.2" rel="stylesheet" type="text/css" media="print"></link>
            <link href="//www.stonybrook.edu/commcms/_resources/css/responsive-v2.css?ver=1.2" rel="stylesheet" type="text/css"></link>
            <link href="//www.stonybrook.edu/commcms/_resources/plugins/owl-carousel/owl.carousel.css?ver=1.2" rel="stylesheet"></link>
            <link href="//www.stonybrook.edu/commcms/_resources/plugins/owl-carousel/owl.carousel.custom.css?ver=1.2" rel="stylesheet"></link>
            <link href="//www.stonybrook.edu/commcms/_resources/plugins/banner-buttons/banner-buttons.css?ver=1.2" rel="stylesheet"></link>
            <link href="//www.stonybrook.edu/commcms/_resources/plugins/owl-carousel/owl.theme.css?ver=1.2" rel="stylesheet"></link>
            <link href="//www.stonybrook.edu/commcms/_resources/plugins/owl-carousel/owl.transitions.css?ver=1.2" rel="stylesheet"></link>
            <link href="//www.stonybrook.edu/commcms/_resources/plugins/slick-1.8/slick.css?ver=1.2" rel="stylesheet"></link>
            <link href="//www.stonybrook.edu/commcms/_resources/plugins/slick-1.8/slick-theme.css?ver=1.2" rel="stylesheet"></link>
            <link href="//www.stonybrook.edu/commcms/_resources/css/sb/filter/text-filter.css?ver=1.2" rel="stylesheet" type="text/css"></link>
            <link href="//www.stonybrook.edu/commcms/_resources/plugins/faculty-list/faculty-list.css?ver=1.2" rel="stylesheet"></link>
            <link href="//www.stonybrook.edu/commcms/_resources/plugins/tablesaw/tablesaw.bare.css?ver=1.2" rel="stylesheet" type="text/css"></link>
            <link href="//www.stonybrook.edu/commcms/_resources/css/sb/accordion-nav/accordion-nav-v2.css?ver=1.2" rel="stylesheet" type="text/css"></link> 
            <link href="//www.stonybrook.edu/commcms/_resources/plugins/tooltipster/tooltipster.css?ver=1.2" rel="stylesheet"></link>
            <link href="//www.stonybrook.edu/commcms/_resources/plugins/tooltipster/themes/tooltipster-light.css?ver=1.2" rel="stylesheet"></link>
            <link href="//www.stonybrook.edu/commcms/_resources/plugins/nivo-lightbox/nivo-lightbox.css?ver=1.21" rel="stylesheet"></link>
            <link href="//www.stonybrook.edu/commcms/_resources/plugins/nivo-lightbox/themes/default/custom.css?ver=1.2" rel="stylesheet"></link>
        <?php } ?>

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

        <?php includeAsset('css','css/print.css','print'); ?>

        <!--BEGIN Fonts.com Include-->
    		<!--<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/4d69d29a-9fcc-4dfe-bd87-a65adb689f6c.css"/>-->
            <link type="text/css" rel="stylesheet" href="https://fast.fonts.net/cssapi/8b09d344-baa0-42a8-bbac-175ff46c86d5.css"/>
            <link type="text/css" rel="stylesheet" href="https://fast.fonts.net/cssapi/ee71ef3e-a7f1-47dd-8ae1-4ae6bec02b30.css"/>
        <!--END Fonts.com Include-->

        <!--BEGIN Google fonts fallback-->
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <!--END Google fonts fallback-->

        <!--BEGIN Modernizr Include-->
            <?php includeAsset('js','js/vendor/modernizr-2.6.2-respond-1.1.0.min.js'); ?>
        <!--END Modernizr Include-->

        <!--BEGIN reCAPTCHA-->
        <script type="text/javascript">
            var reCaptchaOnloadCallback = function() {
                grecaptcha.render('recaptcha-location', {
                    'sitekey' : '6Lc01RMUAAAAAEngxFd7N5atkvrhjyZRG4-zWO7R',
                    callback: function () {
                        $('#basic-contact-form_admissions-2017 .submit-container').removeClass('hide-accessible');
                    }
                });
            };
        </script>
        <!--END reCAPTCHA-->