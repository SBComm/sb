<?php
/* 

=========================
CONTENT FOLDER DEFINITION
=========================

---OVERIEW---

There are two content folders on the PRODUCTION server at /sb/inc

    1) /content/            
    This folder stores content files either
        (A) not managed in the CMS (managed ONLY locally, e.g. created in development), or
        (B) managed in the CMS (managed ONLY there). Typically, this is special case.

    2) /content_ou/         
    This folder stores content files managed ONLY within OU Campus.

Depending on the site status, the content folder location will vary. This separation allows for CMS-managed content to be previewed on DEVELOPMENT while the original non-transformed /content/ files are still used in PRODUCTION.


---SITE STATUS---

The site status is the development stage of the site. The following are valid site status values.

    1) in_CMS           
    The site has been fully integrated into the CMS.

    2) in_transition    
    The site has been developed locally and deployed, and is now being integrated into the CMS. Also described as migrating from DEVELOPMENT to the CMS, thus requiring PRODUCTION content path to be /content/, and DEVELOPMENT content path to be /content_ou/

    3) in_development
    The site is currently being developed locally.


---SPECIAL CONSIDERATIONS---

Some sites exhibit special use cases.

    1) always_use_content_folder
    The content folder must not change under certain circumstances (using /content/ in all environments).



---OTHER CONSIDERATIONS---

Watch out for files that are included using the content variable in the path name, but are not maintained in the CMS. You will need to either make a special case for these by using a different path definition, or get that file into the CMS.

*/

// Define site status
$site_status = array(
    'about'                     => 'in_CMS',
    'academics'                 => 'in_CMS',
    'accessibility'             => 'in_CMS',
    'admissions'                => 'in_CMS',
    'alumni'                    => 'in_CMS',
    'alumni-and-friends'        => 'in_CMS',
    'arts-and-culture'          => 'in_CMS',
    'calendars'                 => 'in_CMS',
    'campus-safety'             => 'in_CMS',
    'community-relations'       => 'in_CMS',
    'contact'                   => 'in_CMS',
    'economic-development'      => 'in_CMS',
    'experts'                   => 'in_CMS',
    'faculty-directory'         => 'in_CMS',
    'faculty-experts'           => 'in_CMS',
    'faculty-staff'             => 'in_CMS',
    'for-students'              => 'in_CMS',
    'jobs'                      => 'in_CMS',
    'maps-and-directions'       => 'in_CMS',
    'privacy'                   => 'in_CMS',
    'resources'                 => 'in_CMS',
    'site-directory'            => 'in_CMS',
    'summer-session'            => 'in_CMS',
    'undergrad-admissions'      => 'in_CMS',
    'visit'                     => 'in_CMS',
    'winter-session'            => 'in_CMS'
);

// Define considerations; Comma-separated value for multiple considerations
$site_considerations = array(
    'faculty-experts'       => 'always_use_content_folder',
    'experts'               => 'always_use_content_folder',
    'faculty-directory'     => 'always_use_content_folder'
);

$always_use_content_folder = (strpos($site_considerations[$second_level],'always_use_content_folder')!==false ? true : false);

// Set the path to use on DEVELOPMENT, and where the content desited is on PRODUCTION
if($is_proofing_environment) {
    $pathForProductionContent = str_replace('development/', '', $path);
}

$in_CMS_override = $in_transition_override = $in_development_override = false;

if($page_type=='home') {
    $in_CMS_override = true;
}

if($site_status[$second_level]=='' && !$in_CMS_override && !$in_transition_override) {
    $in_development_override = true;
}

// Content paths
// Default defined in inc.php
//  $content = "content/";

    if($site_status[$second_level]=='in_CMS' || $in_CMS_override) {

        if($is_local_environment) {
            $content = "content/";
        }
        else if($is_proofing_environment) {
            $pathForContent = $pathForProductionContent;
            $content = "content_ou/";
        }
        else if($is_production_environment) {
            $content = "content_ou/";
        }

    }

    if($site_status[$second_level]=='in_transition' || $in_transition_override) {
        
        if($is_local_environment) {
            $content = "content/";
        }
        else if($is_proofing_environment) {
            $pathForContent = $pathForProductionContent;
            $content = "content_ou/";
        }
        else if($is_production_environment) {
            $content = "content/";
        }

    }

    if($site_status[$second_level]=='in_development' || $always_use_content_folder || $in_development_override) {
        
        if($is_local_environment) {
            $content = "content/";
        }
        else if($is_proofing_environment) {
            $content = "content/";
        }
        else if($is_production_environment) {
            $content = "content/";
        }

    }

?>
<?php /* <div class="contentpath_information" style="display: none; visibility: hidden; opacity: 0; font-size: 0;">
    Site Status: <?php echo $site_status[$second_level]; ?><br />     
    Content Folder: <?php echo $content; ?><br />     
    Path for Content: <?php echo $pathForContent; ?><br />     
</div> */ ?>

<?php if($is_production_environment) {
    /* As per Jacob Levich <jacob.levich@stonybrook.edu> via Sara Wallace <swallace@butlertill.com>
    Added 04-07-16 by Josh Palmeri */
?>
    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P43R9T&gtm_auth=jCHsNovKQBjtTL9y_RXzMQ&gtm_preview=env-1&gtm_cookies_win=x"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl+'&gtm_auth=jCHsNovKQBjtTL9y_RXzMQ&gtm_preview=env-1&gtm_cookies_win=x';f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P43R9T');</script>
    <!-- End Google Tag Manager -->
<?php } else if(!$is_production_environment) {
    /* As per Jacob Levich <jacob.levich@stonybrook.edu> via Sara Wallace <swallace@butlertill.com>
    Added 04-07-16 by Josh Palmeri */
?>
    <div class="gtm-include">
    <!-- Google Tag Manager - DEV Environment -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P43R9T&gtm_auth=bFNoRNv0WjetsHieVxUTeg&gtm_preview=env-4&gtm_cookies_win=x"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl+'&gtm_auth=bFNoRNv0WjetsHieVxUTeg&gtm_preview=env-4&gtm_cookies_win=x';f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P43R9T');</script>
    <!-- End Google Tag Manager -->
    </div>
<?php } ?>

<!--Facebook SDK-->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1740688096184427',
      xfbml      : true,
      version    : 'v4.0'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<!--[if lt IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. Thanks!</p>
<![endif]-->
<?php
    if($is_proofing_environment) { ?>
        <div id="proofing-message" class="development-message">
            <div class="text content"><i class="fa fa-info-circle"></i></i> You are viewing the <strong>Proofing</strong> Environment. <em>Do not share this link externally.</em><span class="close-proofing-message"><i class="fa fa-times"></i>Close</span></div>
        </div>
    <?php }
    if($is_local_environment) { ?>
        <div id="proofing-message">
            <div class="text content"><i class="fa fa-info-circle"></i></i> You are viewing the <strong>Local</strong> Environment. <em>Do not share this link externally.</em><span class="close-proofing-message"><i class="fa fa-times"></i>Close</span></div>
        </div>
    <?php }
    if(!$is_local_environment) {
        $file = "emergency/message.php";
        include($root . '/' . $site . '/' . $file);
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

<?php
    $file = "widgets/forms/campaign-form-landing-2017-students-ajax.php";
    //include($path . $file);
?>