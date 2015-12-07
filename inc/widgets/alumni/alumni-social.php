<section class="grey-background social clearfix arrow-above">
    <div class="wrapper border-box">
    <h2>We're <span class="black">Social</span></h2>
    <h3 class="subtitle sbu-text-shadow">Get the latest in <span class="red nowrap">Stony Brook Alumni</span> <span class="nowrap">social media!</span></h3>
        <?php if($social_sidebar!='') {
            $file = "sidebars/".$social_sidebar."-social-sidebar.php";
            include($path . $file);
        } ?>
    </div>
    <a id="panning" class="social-posts clearfix" href="alumni/social" target="_blank">
        <span class="button clearfix">
            <div class="sbu-link sbu-cta sbu-cta-1 sbu-cta-1a">View Alumni Wall</div>
        </span>
    </a>
</section>