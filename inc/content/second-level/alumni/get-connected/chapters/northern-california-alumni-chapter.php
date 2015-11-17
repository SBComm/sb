<article class="get-connected alumni-chapter">
    <section class="clearfix center-rule-header events-header inside-header">
        <div class="border-box">
            <h2><a href="alumni/chapters">Chapters</a></h2>
        </div>
    </section>
    
    <section class="clearfix inside-content main-inside-content white-background">
        <div class="border-box wrapper clearfix">
            <div class="border-box whole">
                <h3 class="serif">Northern California Alumni Chapter</h3>
            </div>
            <div class="content">
                <div class="border-box one-third equal-height-col">
                    <nav class="sidebar-star-nav clearfix">
                        <?php
                            $selected_sub_nav = "northern-california-alumni-chapter";
                            $file = "alumni/get-connected/chapters-nav-list.php";
                            include($path . $content . $secLv . $file);
                        ?>
                    </nav>
                </div>
                <div class="border-box two-third equal-height-col">
                    <p>The Stony Brook University Northern California Alumni Chapter connects Stony Brook alumni in the Bay Area through alumni hikes and picnics, luncheons featuring notable Stony Brook alumni speakers, and freshmen send-offs. The Chapter also provides internship and mentoring opportunities for current Stony Brook University students.</p>
                    <div class="whole activities-and-calendar activities-and-calendar-on-white">
                        <div class="one-half">
                            <h4 class="on-red">News</h4>
                            <div class="activities-links">
                                <?php
                                    $file  = "feed/happenings-news.php";
                                    $rss   = "http://sb.cc.stonybrook.edu/happenings/category/northern-california-chapter/feed/";
                                    $count = 7;
                                    $end = 7;
                                    $no_results_text = 'No news yet! Check back soon...';
                                    include($path . $file);
                                ?>
                            </div>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://sb.cc.stonybrook.edu/happenings/category/northern-california-chapter" target="_blank">Read More News</a>
                        </div>
                        <div class="one-half">
                            <h4 class="on-red">Events</h4>
                            <div class="news-feed">
                                <?php
                                    $file  = "feed/active-data-calendar.php";
                                    $rss   = "http://calendar.activedatax.com/stonybrook/RSSSyndicator.aspx?category=8-62";
                                    $count = 4;
                                    $end = 4;
                                    $no_results_text = 'Hm... It seems that there are no events scheduled for this chapter at the moment. Check back soon as we\'re always adding more, or <a href="http://calendar.activedatax.com/stonybrook/default.aspx?type=&view=Category&category=8-0&numdays=180">view all alumni events</a>.';
                                    include($path . $file);
                                ?>
                            </div>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://calendar.activedatax.com/stonybrook/default.aspx?type=&amp;view=Category&amp;category=8-62&amp;numdays=180" target="_blank">View All Events</a>
                        </div>
                    </div>
                    <div class="whole activities-and-calendar clearfix">
                        <h4 class="on-red">Links and Resources</h4>
                        <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://www.facebook.com/groups/sbualumninortherncalifornia/" target="_blank">View on Facebook</a>
                        <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://www.linkedin.com/grp/home?gid=7430136" target="_blank">View on LinkedIn</a>
                        <p>
                            For more information, contact:<br />
                            Shashi Agarwal, PhD '79<br />
                            Principal Engineer at Seagate<br />
                            Email: shashiagarwal345@yahoo.com<br />
                            <br />
                            Byung Sa '11<br />
                            Operations Manager at Bialla Signium &amp; Associates<br />
                            Email: byungsa@gmail.com
                        </p>
                    </div>
                    <div class="whole event-gallery flickr-gallery clearfix" data-flickr-id="72157659059959892">
                        <div class="border-box inside-content">
                            <h4 class="on-red">Gallery</h4>
                            <div class="carousel-wrapper">
                                <div id="the-carousel" class="owl-carousel">
                                    <!-- Images loaded via AJAX from Flickr -->
                                </div>
                                <div class="owl-prev owl-prev-3" data-owl-id="the-carousel-3"><em class="fa fa-angle-left"></em></div>
                                <div class="owl-next owl-next-3" data-owl-id="the-carousel-3"><em class="fa fa-angle-right"></em></div>
                            </div>
                            <p><a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://www.flickr.com/photos/sbuadvancement/sets/72157659059959892" target="_blank">View on Flickr</a> <a class="sbu-outline-button sbu-outline-button--on-red arrow-after" href="#" target="_blank">Submit Your Photos</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="clearfix inside-content main-inside-content">
        <div class="border-box wrapper chapters-nav-dropdown">
            <div class="content">
            <h4>Explore All Chapters &amp; Groups</h4>
            <?php
                $file = "alumni/get-connected/chapters-nav-dropdown.php";
                include($path . $content . $secLv . $file);
            ?>
            </div>
        </div>
    </section>

    <!-- <social-sidebar> -->
        <?php if($social_sidebar!='') {
            $file = "sidebars/".$social_sidebar."-social-sidebar.php";
            include($path . $file);
        } ?>
    <!-- </social-sidebar> -->

</article>