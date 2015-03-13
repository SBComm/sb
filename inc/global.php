<!--[if lt IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. Thanks!</p>
<![endif]-->
<?php
    if($is_proofing_environment) { ?>
        <!--<div id="proofing-message">
            <div class="text content"><i class="fa fa-crosshairs fa-spin"></i></i> <strong>Please Note:</strong> You are viewing the <em>Proofing Site</em> for Stony Brook University. This page is not accessible to the general public. <em>DO NOT share this link externally.</em><span class="close-proofing-message"><i class="fa fa-times"></i>Close</span></div>
        </div>-->
    <?php }
    if($is_local_environment) { ?>
        <!--<div id="proofing-message">
            <div class="text content"><i class="fa fa-crosshairs fa-spin"></i></i> <strong>Please Note:</strong> You are viewing the <em>Local Site</em> for Stony Brook University. This page is not accessible to the general public. <em>DO NOT share this link externally.</em><span class="close-proofing-message"><i class="fa fa-times"></i>Close</span></div>
        </div>-->
    <?php }
    if(!$is_local_environment) {
        include ($_SERVER['DOCUMENT_ROOT'] . '/emergency/message.html');
    }
?>

<?php if($second_level=='summer-session' && $is_production_environment) { ?>
    <!--
    Start of DoubleClick Floodlight Tag: Please do not remove
    Activity name of this tag: Stony Brook Retargeting Pixel
    URL of the webpage where the tag is expected to be placed: http://www.stonybrook.edu/
    This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
    Creation Date: 03/04/2015
    -->
    <iframe src="http://4354196.fls.doubleclick.net/activityi;src=4354196;type=stony0;cat=stony0;ord=[SessionID]?" width="1" height="1" frameborder="0" style="display:none"></iframe>
    <!-- End of DoubleClick Floodlight Tag: Please do not remove -->

    <!--Begin Stony Brook University FB Retargeting Pixel-->
    <script>(function() {
      var _fbq = window._fbq || (window._fbq = []);
      if (!_fbq.loaded) {
        var fbds = document.createElement('script');
        fbds.async = true;
        fbds.src = '//connect.facebook.net/en_US/fbds.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(fbds, s);
        _fbq.loaded = true;
      }
      _fbq.push(['addPixelId', '1463599190562310']);
    })();
    window._fbq = window._fbq || [];
    window._fbq.push(['track', 'PixelInitialized', {}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1463599190562310&amp;ev=PixelInitialized" /></noscript>
    <!--End Stony Brook University FB Retargeting Pixel-->
<?php } ?>

<?php if($fade_in_page) { ?>
    <div class="fade-in-page absolute-white-cover"></div>
<?php } ?>
<?php if($page_loader) { ?>
    <?php if($page_type=='social-hub') { ?>
    <div id="preloader">
        <div id="status">
            <div class="preload-title">
                <span class="red">SBU</span> <span class="darker">Social</span> Media
            </div>
            <div class="preload-message" style="display: none">
                <span>Collecting feeds...</span>
                <span>Getting posts...</span>
                <span>Fetching tweets...</span>
                <span>Assembling pins...</span>
                <span>Gathering shares...</span>
                <span>Initializing...</span>
            </div>
        </div>
    </div>
    <?php } else { ?>
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <style type="text/css"> body { overflow: hidden; } </style>
    <?php } ?>
<?php } ?>

<?php if($html_dom_parser) {
    $file = "scripts/simple_html_dom.php";
    include($path . $file);
} ?>