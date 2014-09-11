<!--[if lt IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. Thanks!</p>
<![endif]-->
<?php
    if($is_proofing_environment) { ?>
        <div id="proofing-message">
            <div class="text content"><i class="fa fa-crosshairs fa-spin"></i></i> <strong>Please Note:</strong> You are viewing the <em>Proofing Site</em> for Stony Brook University. This page is not accessible to the general public. <em>DO NOT share this link externally.</em><span class="close-proofing-message"><i class="fa fa-times"></i>Close</span></div>
        </div>
    <?php }
    if($is_local_environment) { ?>
        <div id="proofing-message">
            <div class="text content"><i class="fa fa-crosshairs fa-spin"></i></i> <strong>Please Note:</strong> You are viewing the <em>Local Site</em> for Stony Brook University. This page is not accessible to the general public. <em>DO NOT share this link externally.</em><span class="close-proofing-message"><i class="fa fa-times"></i>Close</span></div>
        </div>
    <?php }
?>