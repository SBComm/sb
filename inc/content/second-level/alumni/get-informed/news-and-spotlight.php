<article class="get-informed">
    <section class="clearfix center-rule-header inside-header">
        <div class="border-box">
            <h2><span>News and Spotlight</span></h2>
        </div>
    </section>
    <!--
    <section class="clearfix inside-content white-background">
        <div class="border-box wrapper clearfix">
            <header class="section-header clearfix">
                <?php
                    $selected_sub_nav = 0;
                    $file = "undergraduate-admissions/campus-life/campus-life-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    -->
    <section class="clearfix articles-promo white-background pad-top">
        <div class="border-box wrapper clearfix">
            <div class="one-half serif-news-titles">
                <img src="img/logo/sbu-happenings.jpg" alt="SBU Happenings logo" />
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
                <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://sb.cc.stonybrook.edu/happenings/category/alumni-news-highlights">Read More</a>
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

    <section class="clearfix authors">
        <div class="border-box wrapper clearfix">
            <h4 class="aqua">Alumni Authors</h4>
            <div class="inside-content">
                <p>Browse through the diverse collection of works from our talented alumni authors</p>
            </div>
        </div>
        <div class="border-box wrapper clearfix authors__books">
            <?php
                $file = "scripts/get-books.php";
                include($path . $file);
            ?>
            <?php
            /*
            // PHP will output books
                <!--cat-->
                <div class="authors__book">
                    <h5>Biography/Memoir</h5>
                    <div class="alumni-books-slider">
                        <!--book-->
                        <div class="alumni-book">
                            <div class="authors__book__flip">
                                <div class="authors__book__flip__card">
                                    <div class="authors__book__flip__card__item authors__book__flip__card__item--front flip-card">
                                        <img src="img/alumni/book-jackets/56-Joe-DiMaggio-Kostya-Kennedy.jpg" alt="" />
                                        <div class="page-curl"><span>Preview</span></div>
                                    </div>

                                    <div class="authors__book__flip__card__item authors__book__flip__card__item--back authors__book__info">
                                        <a class="authors__book__info__title external-link-hover" target="_blank" href="#">The Psychology of Working: A New Perspective for Career Development, Counseling, and Public Policy</a>
                                        <span class="authors__book__info__author">David Blustein '74</span>
                                        <span class="authors__book__info__desc">In this original and major new work, David Blustein places working at the same level of attention for social and behavioral scientists and psychotherapists as other major life concerns, such as intimate relationships, physical and mental health, and socio-economic inequities.physical and mental health, and socio-economic inequities.physical and mental health, and socio-economic inequities.and socio-economic inequities.physical and mental health, and socio-economic inequities.physical and mental health, and socio-economic inequities.</span>
                                        <a class="authors__book__cta sbu-outline-button sbu-outline-button--on-red arrow-after" href="#" target="_blank">View on Amazon</a>
                                        <img src="img/alumni/book-jackets/56-Joe-DiMaggio-Kostya-Kennedy.jpg" alt="" />
                                        <button aria-label="Close Detail pane" class="authors__book__info__close close-details flip-card"><em class="fa fa-times"></em></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/book-->
                    </div>
                </div>
                <!--/cat-->
            */
            ?>
        </div>
        <div class="border-box wrapper clearfix">
            <div class="inside-content">
                <p>* Descriptions are taken from Amazon.com</p>
            </div>
        </div>
    </section>

    <?php
        $file = "widgets/alumni-social.php";
        include($path . $file);
    ?>

</article>