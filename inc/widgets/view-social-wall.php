<section class="grey-background social clearfix">
    <div class="wrapper border-box">
    <h2>We're <span class="black">Social</span></h2>
    <h3 class="subtitle">Get the latest in <span class="red nowrap">Stony Brook University</span> <span class="nowrap">social media!</span></h3>
    <!-- <social-sidebar> -->
        <?php if($social_sidebar!='') {
            $file = "sidebars/".$social_sidebar."-social-sidebar.php";
            include($path . $file);
        } ?>
    <!-- </social-sidebar> -->
    </div>
    <a id="panning" class="social-posts clearfix" href="http://stonybrook.edu/social">
        <span class="button clearfix">
            <div class="sbu-link sbu-cta sbu-cta-1 sbu-cta-1a">View Social Wall</div>
        </span>
    </a>
</section>