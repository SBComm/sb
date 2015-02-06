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