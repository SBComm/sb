<article class="experts-wrapper">
    <?php
        $file = "faculty-directory/splash-header-inside.php";
        include($pathForContent . $content . $secLv . $file);
    ?>
    <?php
        $file = "faculty-directory/search-faculty-overlay-get.php";
        include($pathForContent . $content . $secLv . $file);
    ?>
    <section class="clearfix list-experts profile-wrapper">
        <div class="clearfix header-wrapper sticky">
            <div class="no-pad-wrapper">
                <h2><a class="breadcrumb" href="faculty-directory" title="Faculty Home"><em class="fa fa-home icon"></em></a><em class="fa fa-angle-double-right separator icon"></em><a class="breadcrumb" href="faculty-directory/results" title="All Faculty"><em class="fa fa-users icon"></em></a><em class="fa fa-angle-double-right separator icon"></em><span class="label faculty-name-container"></span></h2>
                <a class="fa-search-before show-search-overlay" href="faculty-directory"><span class="hide-accessible-mobile">Find Faculty</span></a>
            </div>
        </div>
        <?php
            if(!@include($root . "/" . $site . "/faculty-directory/people/".$_GET["name"].".php")) {
                $file = "faculty-directory/default-profile.php";
                include($pathForContent . $content . $secLv . $file);
            }
        ?>
    </section>
    <?php
        $file = "faculty-directory/profile-nav.php";
        include($pathForContent . $content . $secLv . $file);
    ?>
</article>