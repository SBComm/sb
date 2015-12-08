<article class="home-page">
    <section class="clearfix site-carousel grey-background">
        <div class="border-box">
            <div class="carousel-wrapper">
                <div id="the-carousel-1" class="owl-carousel carousel-style-03">
                    <div class="item">
                        <div class="carousel-image clearfix" data-image="03" style="
    background-image: url('img/alumni/marquee/marquee-3.jpg');">
                            <div class="white-fade-bottom"></div>
                        </div>
                        <a href="alumni/recent-grads" title="Land Your Dream Job"><h1 class="tagline bottom">Recent Grad? We're here for you!</h1></a>
                    </div>
                    <div class="item">
                        <div class="carousel-image clearfix" data-image="02" style="
    background-image: url('img/alumni/marquee/marquee-2.jpg');">
                            <div class="white-fade-bottom"></div>
                        </div>
                        <a href="alumni/form/send-us-your-news" title="Land Your Dream Job"><h1 class="tagline bottom">Where in the world have you been?</h1></a>
                    </div>
                    <div class="item">
                        <div class="carousel-image clearfix" data-image="04" style="
    background-image: url('img/alumni/marquee/marquee-4.jpg');">
                            <div class="white-fade-bottom"></div>
                        </div>
                        <a href="alumni/events-and-reunions" title="Land Your Dream Job"><h1 class="tagline bottom">Come Back to the Brook</h1></a>
                    </div>
                    <div class="item">
                        <div class="carousel-image clearfix" data-image="01" style="
    background-image: url('img/alumni/marquee/marquee-1.jpg');">
                            <div class="white-fade-bottom"></div>
                        </div>
                        <a href="http://career.stonybrook.edu/alumni_new" title="Land Your Dream Job" target="_blank"><h1 class="tagline bottom">Land Your Dream Job</h1></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        $campaignColor = "black";
        $file = "widgets/campaign-banner.php";
        include($path . $file);
    ?>

    <section class="clearfix alumni-home-promo red-grad-background-rev arrow-below arrow-below-red">
        <div class="border-box no-pad-wrapper-larger clearfix">
            <div class="large-info-box equal-height-col">
                <div class="info-inner-wrapper">
                    <div class="info-title arrow-below arrow-below-small arrow-below-white">Info For</div>
                    <a href="alumni/students"><em class="fa fa-book"></em> <span>Students</span></a>
                    <a href="alumni/recent-grads"><em class="fa fa-graduation-cap"></em> <span>Recent Grads</span></a>
                </div>
            </div>
            <div class="video-promo equal-height-col">
                <div class="video-promo-wrapper">
                    <div class="videoWrapper">
                        <iframe width="560" height="349" src="http://www.youtube.com/embed/hsx1Rs8Sgi0?controls=1&showinfo=1&rel=0&modestbranding=1" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="activities-and-calendar news-feed-list inside-content">
        <div class="red-opac-cover">
            <div class="border-box wrapper clearfix">
                <h2 class="medium-title-3 aqua">News &amp; Calendar</h2>
                <h3 class="medium-title-2 white">Get the latest Alumni news!</h3>
             </div>
            <div class="border-box wrapper clearfix">
                <div class="content white">

                    <div class="activities-links clearfix external-link-hover-wrapper">
                        <h4>Alumni News</h4>
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
                            $count = 6;
                            $end = 6;
                            include($path . $file);
                        ?>
                        <a href="http://stonybrook.edu/happenings/alumni/" class="star-before" target="_blank">Read SB Matters</a>
                    </div>

                    <!--
                    <div class="activities-links clearfix external-link-hover-wrapper">
                        <h4>News</h4>
                        <?php 
                            /*
                            // PHP will transform event data from RSS feed in following format
                            //
                            <!--
                            <a href="#" target="_blank"><strong class="date">1/16/15</strong> Sign up for a Class at the Craft Center this Spring </a>
                            -->
                            */
                        ?>
                        <a href="http://stonybrook.edu/happenings" class="star-before">Read SBU Happenings</a>
                        <a href="http://stonybrook.edu/newsroom" class="star-before">Visit the Newsroom</a>
                    </div>
                    -->

                    <ul class="calendar-items clearfix">
                        <?php 
                            /*
                            // PHP will transform event data from RSS feed in following format
                            //
                            <!--
                            <li class="clearfix">
                                <a class="date-marker" href="#" title="#">
                                    <span class="event-month">Oct</span>
                                    <span class="event-date">28</span>
                                </a>
                                <a class="event-details" href="#" title="#">
                                    <span class="event-title aqua">Breast Cancer Awareness Chinese Auction</span>
                                    <span class="event-time">Friday, 7:00 PM to 10:00 PM</span>
                                    <span class="event-desc">Come suooprt the lorem ipsum dolor Praise God this is a test and it's nice.</span>
                                </a>
                            </li>
                            -->
                            */
                            $file  = "feed/active-data-calendar.php";
                            $rss   = "http://calendar.activedatax.com/stonybrook/RSSSyndicator.aspx?category=8-0";
                            $count = 3;
                            $end = 3;
                            include($path . $file);
                        ?>
                        <li class="clearfix more-link">
                            <a class="fa-arrow-after" href="http://calendar.activedatax.com/stonybrook/EventList.aspx" target="_blank">View All Events</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php
        $file = "widgets/alumni/alumni-spotlight.php";
        include($path . $file);
    ?>

    <?php
        $file = "widgets/alumni/alumni-social.php";
        include($path . $file);
    ?>

    <?php
        $file = "widgets/alumni/alumni-partners.php";
        include($path . $file);
    ?>

</article>