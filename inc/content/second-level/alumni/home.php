<article>
    <section class="clearfix site-carousel grey-background">
        <div class="border-box">
            <div class="carousel-wrapper">
                <div id="the-carousel-1" class="owl-carousel carousel-style-03">
                    <div class="item">
                        <div class="carousel-image clearfix" data-image="03">
                        </div>
                        <a href="alumni/recent-grad" title="Land Your Dream Job"><h1 class="tagline bottom">Recent Grad? We're here for you!</h1></a>
                    </div>
                    <div class="item">
                        <div class="carousel-image clearfix" data-image="02">
                        </div>
                        <a href="alumni/send-us-your-news" title="Land Your Dream Job"><h1 class="tagline bottom">Where in the world have you been?</h1></a>
                    </div>
                    <div class="item">
                        <div class="carousel-image clearfix" data-image="04">
                        </div>
                        <a href="alumni/events-and-reunions" title="Land Your Dream Job"><h1 class="tagline bottom">Come Back to the Brook</h1></a>
                    </div>
                    <div class="item">
                        <div class="carousel-image clearfix" data-image="01">
                        </div>
                        <a href="http://career.stonybrook.edu/alumni_new" title="Land Your Dream Job" target="_blank"><h1 class="tagline bottom">Land Your Dream Job</h1></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                            $rss   = "http://calendar.activedatax.com/stonybrook/RSSSyndicator.aspx?category=8-67";
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


    <section class="photo-boxes-wrapper clearfix">
        <h2 class="rule-header-white-on-black"><span class="text">Alumni Spotlight</span></h2>
        <div class="photo-boxes photo-boxes-quarter border-box clearfix">
            <a class="item" href="http://sb.cc.stonybrook.edu/happenings/alumni/al-bello-89-chief-sports-photographer-getty-images/" title="View story for Al Bello" target="_blank">
                <img src="img/alumni/spotlight/bello.jpg" alt="Photo of Al Bello" />
                <div class="text">
                    <div class="wrap">
                        <p>
                            <span class="name">Al Bello '89</span>
                            <em class="title">Chief Sports Photographer, Getty Images</em>
                        </p>
                    </div>
                </div>
            </a>
            <a class="item" href="http://sb.cc.stonybrook.edu/happenings/alumni/richard-gelfonds-incredible-journey/" title="View story for Richard Gelfond" target="_blank">
                <img src="img/alumni/spotlight/gelfond.jpg" alt="Photo of Richard Gelfond" />
                <div class="text">
                    <div class="wrap">
                        <p>
                            <span class="name">Richard Gelfond '76</span>
                            <em class="title">CEO of IMAX Corp.</em>
                        </p>
                    </div>
                </div>
            </a>
            <a class="item" href="http://sb.cc.stonybrook.edu/happenings/alumni/christine-goerke-94-finds-her-voice/" title="View story for Christine Goerke" target="_blank">
                <img src="img/alumni/spotlight/goerke.jpg" alt="Photo of Christine Goerke" />
                <div class="text">
                    <div class="wrap">
                        <p>
                            <span class="name">Christine Goerke '94</span>
                            <em class="title">Wagnerian Soprano</em>
                        </p>
                    </div>
                </div>
            </a>
            <a class="item" href="http://sb.cc.stonybrook.edu/happenings/research/stony-brook-medicine-alum-fights-the-war-on-ebola/" title="View story for Dario Gonzalez" target="_blank">
                <img src="img/alumni/spotlight/gonzalez.jpg" alt="Photo of Dario Gonzalez" />
                <div class="text">
                    <div class="wrap">
                        <p>
                            <span class="name">Dario Gonzalez, MD '79</span>
                            <em class="title">Globe-Trotting Emergency Medicine Doctor</em>
                        </p>
                    </div>
                </div>
            </a>
            <a class="item" href="http://sb.cc.stonybrook.edu/happenings/alumni/profile-of-a-stony-brook-medicine-alumna-patricia-matos-puente-md-serves-those-who-need-her-most/" title="View story for Al Bello" target="_blank">
                <img src="img/alumni/spotlight/matos.jpg" alt="Photo of Al Bello" />
                <div class="text">
                    <div class="wrap">
                        <p>
                            <span class="name">Patricia Matos-Puente, MD ’84</span>
                            <em class="title">Internist</em>
                        </p>
                    </div>
                </div>
            </a>
            <a class="item" href="http://sb.cc.stonybrook.edu/happenings/alumni/building-tools-to-help-entrepreneurs/" title="View story for Jon Oringer" target="_blank">
                <img src="img/alumni/spotlight/oringer.jpg" alt="Photo of Jon Oringer" />
                <div class="text">
                    <div class="wrap">
                        <p>
                            <span class="name">Jon Oringer '96</span>
                            <em class="title">CEO of Shutterstock</em>
                        </p>
                    </div>
                </div>
            </a>
            <a class="item" href="http://sb.cc.stonybrook.edu/happenings/alumni/technology-for-peace-stony-brook-alum-tackles-global-communications-as-united-nations-executive/" title="View story for Atefeh Riazi" target="_blank">
                <img src="img/alumni/spotlight/riazi.jpg" alt="Photo of Atefeh Riazi" />
                <div class="text">
                    <div class="wrap">
                        <p>
                            <span class="name">Atefeh Riazi '84</span>
                            <em class="title">Chief Information Technology Officer, United Nations</em>
                        </p>
                    </div>
                </div>
            </a>
            <a class="item" href="http://sb.cc.stonybrook.edu/happenings/alumni/razor-sharp-thinking/" title="View story for Tristan Walker" target="_blank">
                <img src="img/alumni/spotlight/walker.jpg" alt="Photo of Tristan Walker" />
                <div class="text">
                    <div class="wrap">
                        <p>
                            <span class="name">Tristan Walker '05</span>
                            <em class="title">Entrepreneur, CEO of Walker &amp; Company</em>
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <section class="grey-background social clearfix arrow-above">
        <div class="wrapper border-box">
        <h2>We're <span class="black">Social</span></h2>
        <h3 class="subtitle sbu-text-shadow">Get the latest in <span class="red nowrap">Stony Brook Alumni</span> <span class="nowrap">social media!</span></h3>
            <?php if($social_sidebar!='') {
                $file = "sidebars/".$social_sidebar."-social-sidebar.php";
                include($path . $file);
            } ?>
        </div>
        <a id="panning" class="social-posts clearfix" href="social/alumni" target="_blank">
            <span class="button clearfix">
                <div class="sbu-link sbu-cta sbu-cta-1 sbu-cta-1a">View Alumni Wall</div>
            </span>
        </a>
    </section>

    <?php if($social_sidebar!='') {
        $file = "widgets/alumni-partners.php";
        include($path . $file);
    } ?>

</article>