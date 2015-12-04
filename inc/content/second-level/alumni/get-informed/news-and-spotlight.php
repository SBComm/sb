<article class="get-informed">
    <section class="clearfix center-rule-header inside-header">
        <div class="border-box">
            <h2><span>News and Spotlight</span></h2>
        </div>
    </section>
    <section id="news" class="clearfix articles-promo white-background pad-top">
        <div class="border-box wrapper clearfix">
            <div class="one-half serif-news-titles">
                <img src="img/logo/sb-matters-header.png" alt="SB Matters logo" />
                <?php 
                    /*
                    // PHP will transform event data from RSS feed in following format
                    //
                    <!--
                    <a href="#" target="_blank"><strong class="date">1/16/15</strong> Sign up for a Class at the Craft Center this Spring </a>
                    -->
                    */
                    $file  = "feed/happenings-news.php";
                    $rss   = "http://sb.cc.stonybrook.edu/happenings/category/alumni-news-highlights/feed/";
                    $count = 7;
                    $end = 7;
                    $thumbnail = false;
                    include($path . $file);
                ?>
                <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://stonybrook.edu/sbmatters">Read More</a>
            </div>
            <div class="one-half sans-titles-with-thumb">
                <img src="img/logo/sbu-mag.jpg" alt="SBU Magazine logo" />
                <?php 
                    /*
                    // PHP will transform event data from RSS feed in following format
                    //
                    <!--
                    <a href="#" target="_blank"><strong class="date">1/16/15</strong> Sign up for a Class at the Craft Center this Spring </a>
                    -->
                    */
                    $file  = "feed/happenings-news.php";
                    $rss   = "http://sb.cc.stonybrook.edu/magazine/category/features/feed/";
                    $count = 5;
                    $end = 5;
                    $thumbnail = true;
                    include($path . $file);
                ?>
                <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://sb.cc.stonybrook.edu/magazine/category/features/">Read More</a>
            </div>
        </div>
    </section>

    <?php
        $file = "widgets/alumni-spotlight.php";
        include($path . $file);
    ?>    

    <?php
        $file = "widgets/alumni-authors-promo.php";
        include($path . $file);
    ?>

    <?php
        $file = "widgets/alumni-social.php";
        include($path . $file);
    ?>

    <?php
        $file = "widgets/sb-matters-promo.php";
        include($path . $file);
    ?>

</article>