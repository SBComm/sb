<article class="experts-wrapper">
    <?php
        $file = "experts/splash-header-inside.php";
        include($path . $content . $secLv . $file);
    ?>
    <?php
        $file = "experts/search-experts-overlay-get.php";
        include($path . $content . $secLv . $file);
    ?>
    <section class="clearfix list-experts profile-wrapper">
        <div class="clearfix header-wrapper sticky">
            <div class="no-pad-wrapper">
                <h2><a class="breadcrumb" href="experts" title="Experts Home"><em class="fa fa-home icon"></em></a><em class="fa fa-angle-double-right separator icon"></em><a class="breadcrumb" href="experts/results" title="All Experts"><em class="fa fa-users icon"></em></a><em class="fa fa-angle-double-right separator icon"></em><span class="label faculty-name-container"></span></h2>
                <a class="fa-search-before show-search-overlay" href="experts"><span class="hide-accessible-mobile">Find Experts</span></a>
            </div>
        </div>
        <?php
            if(!@include($root . "/" . $site . "/faculty-directory/people/".$_GET["name"].".php")) {
                $file = "experts/default-profile.php";
                include($path . $content . $secLv . $file);
            }
        ?>
    </section>
    <?php
        $file = "experts/profile-nav.php";
        include($path . $content . $secLv . $file);
    ?>
</article>