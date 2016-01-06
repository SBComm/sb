<article class="get-connected recent-grads inside-page">
    <section class="clearfix center-rule-header events-header inside-header">
        <div class="border-box">
            <h2><a href="alumni/recent-grads">Recent Graduates</a></h2>
        </div>
    </section>
    
    <section class="clearfix inside-content main-inside-content white-background margin-top">
        <div class="border-box wrapper clearfix">
            <div class="content pad-top">
                <div class="border-box whole intro-letter">
                    <img class="inline-with-copy" src="img/alumni/board/stafford.jpg" alt="Robert W. Stafford" />
                    <h4>You're a Seawolf for Life!</h4>
                    <p><strong>A Message From the Alumni Association President:</strong></p>
                    <p>What's a Seawolf? You're a Seawolf! As a new graduate from Stony Brook University, you are now an official 'Seawolf for Life.'</p>
                    <p>There are so many opportunities for you to be inspired, stay connected, and become more involved with the University. Whether by attending an alumni reunion, mentoring a current student, networking with fellow alums or re-connecting with professors, our goal is to help you stay engaged with your alma mater.</p>
                    <p>Sincerely,</p>
                    <p>Robert W. Stafford ’72, ’82</p>
                </div>
            </div>
            <div class="border-box content whole news-and-events section-border-top section-border-bottom">
                <div class="one-half serif-news-titles">
                    <h4>Stay Informed!</h4>
                    <div class="news-items">
                        <?php 
                            /*
                            // PHP will transform event data from RSS feed in following format
                            //
                            <!--
                            <a href="#" target="_blank"><strong class="date">1/16/15</strong> Sign up for a Class at the Craft Center this Spring </a>
                            -->
                            */
                            $file  = "feed/happenings-news.php";
                            $rss   = "http://sb.cc.stonybrook.edu/happenings/feed/?cat=15";
                            $count = 5;
                            $end = 5;
                            $thumbnail = false;
                            include($path . $file);
                        ?>
                    </div>
                    <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://stonybrook.edu/sbmatters" target="_blank">Read More News</a>
                </div>
                <div class="border-box one-half">
                    <h4>Attend an Event</h4>
                    <div class="whole activities-and-calendar activities-and-calendar-on-white">
                        <div class="news-feed">
                            <?php
                                $file  = "feed/active-data-calendar.php";
                                $rss   = "http://calendar.activedatax.com/stonybrook/RSSSyndicator.aspx?category=8-0";
                                $count = 3;
                                $end = 3;
                                $no_results_text = 'Hm... It seems that there are no events scheduled for this chapter at the moment. Check back soon as we\'re always adding more, or <a href="http://calendar.activedatax.com/stonybrook/default.aspx?type=&view=Category&category=8-0&numdays=180">view all alumni events</a>.';
                                include($path . $file);
                            ?>
                        </div>
                        <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://calendar.activedatax.com/stonybrook/default.aspx?type=&amp;view=Category&amp;category=8-0&amp;numdays=180" target="_blank">See All Events</a>
                    </div>
                </div>
            </div>
            <?php
                $file = "widgets/alumni/alumni-email-for-life.php";
                include($path . $file);
            ?>
            <div class="border-box content whole clearfix give-back section-border-top left-col-content">
                <div class="one-third">
                    <img src="img/alumni/perks/alumni-card.png" alt="Alumni Association Card" />
                </div>
                <div class="two-third">
                    <h4>Alumni Association Card</h4>
                    <p>Save money with one of our perks exclusively for Stony Brook alumni!</p>
                    <p>As a Stony Brook alum, you are eligible for special offers on hotels, access to alumni facilities, savings on insurance products, retail discounts, and more.</p>
                    <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="alumni/form/request-a-stony-brook-alumni-association-card" target="_blank">Get Your Card</a>
                </div>
            </div>
        </div>
    </section>

    <div class="get-perks">
        <?php
            $file = "widgets/alumni/alumni-benefits-buttons-on-black-rays.php";
            include($path . $file);
        ?>
    </div>

    <?php
        $file = "widgets/alumni/alumni-update-your-info.php";
        include($path . $file);
    ?>

    <?php
        $file = "widgets/sb-matters-promo.php";
        include($path . $file);
    ?>

</article>