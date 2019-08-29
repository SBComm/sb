<article class="experts-wrapper">
    <?php
        $file = "experts/splash-header-inside.php";
        include($pathForContent . $content . $secLv . $file);
    ?>
    <?php
        $file = "experts/search-experts-overlay-get.php";
        include($pathForContent . $content . $secLv . $file);
    ?>
    <section class="clearfix list-experts profile-wrapper">
        <div class="clearfix header-wrapper sticky">
            <div class="no-pad-wrapper">
                <h2><a class="breadcrumb" href="experts" title="Experts Home"><em class="fa fa-home icon"></em></a><em class="fa fa-angle-double-right separator icon"></em><a class="breadcrumb" href="experts/results" title="All Experts"><em class="fa fa-users icon"></em></a><em class="fa fa-angle-double-right separator icon"></em><span class="label faculty-name-container"></span></h2>
                <a class="fa-search-before show-search-overlay" href="experts"><span class="hide-accessible-mobile">Find Experts</span></a>
            </div>
        </div>
        <?php
            $nameValue = $_GET["name"];
            $validNameValue = htmlspecialchars($nameValue, ENT_QUOTES, 'UTF-8');
            if(!@include($root . "/" . $site . "/faculty-directory/people/".$validNameValue.".php")) {
                $file = "experts/default-profile.php";
                include($pathForContent . $content . $secLv . $file);
            }
        ?>
    </section>
    <?php
        $file = "experts/profile-nav.php";
        include($pathForContent . $content . $secLv . $file);
    ?>
</article>