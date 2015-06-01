<article class="experts-wrapper">
    <?php
        $file = "faculty-experts/splash-header-inside.php";
        include($path . $content . $secLv . $file);
    ?>
    <?php
        $file = "faculty-experts/search-experts-overlay-get.php";
        include($path . $content . $secLv . $file);
    ?>
    <?php
        if(!@include($root . "/" . $site . "/faculty-experts/people/".$_GET["name"].".php")) {
            $file = "faculty-experts/default-profile.php";
            include($path . $content . $secLv . $file);
        }
    ?>
    <?php
        $file = "faculty-experts/profile-nav.php";
        include($path . $content . $secLv . $file);
    ?>
</article>