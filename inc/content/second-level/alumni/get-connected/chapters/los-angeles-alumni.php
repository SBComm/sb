<article class="get-connected alumni-chapter">
    <section class="clearfix center-rule-header events-header inside-header">
        <div class="border-box">
            <h2><a href="alumni/chapters">Chapters</a></h2>
        </div>
    </section>
    
    <section class="clearfix inside-content main-inside-content white-background">
        <div class="border-box wrapper clearfix">
            <div class="border-box whole">
                <h3 class="serif">Los Angeles Alumni Chapter</h3>
            </div>
            <div class="content">
                <div class="border-box one-third equal-height-col">
                    <nav class="sidebar-star-nav clearfix">
                        <?php
                            $selected_sub_nav = "los-angeles-alumni";
                            $file = "alumni/get-connected/chapters-nav-list.php";
                            include($path . $content . $secLv . $file);
                        ?>
                    </nav>
                </div>
                <div class="border-box two-third equal-height-col">
                    <h4>160,000 Strong!</h4>
                    <p>Connect with 160,000 fellow alumni from across the country and around the world. Grow your network by joining a group near you!</p>
                    </p>
                    <h4>Get Connected</h4>
                    <p>The Alumni Association offers over 100 alumni chapter, network and interest group events each year. Have fun, grow your network, give back, and support our students by attending an event! From networking socials, to faculty lectures and sporting events, you're sure to find an event for you. Make the most of your alumni network and find an event today!</p>
                    <div class="whole activities-and-calendar activities-and-calendar-on-white">
                        <div class="one-half">
                            <h4 class="on-red">News</h4>
                            <div class="activities-links">
                                <?php
                                    $file  = "feed/happenings-news.php";
                                    $rss   = "http://sb.cc.stonybrook.edu/happenings/category/los-angeles-chapter/feed/";
                                    $count = 7;
                                    $end = 7;
                                    $no_results_text = 'No news yet! Check back soon...';
                                    include($path . $file);
                                ?>
                            </div>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://sb.cc.stonybrook.edu/happenings/category/los-angeles-chapter" target="_blank">Read More News</a>
                        </div>
                        <div class="one-half">
                            <h4 class="on-red">Events</h4>
                            <div class="news-feed">
                                <?php
                                    $file  = "feed/active-data-calendar.php";
                                    $rss   = "http://calendar.activedatax.com/stonybrook/RSSSyndicator.aspx?category=8-47";
                                    $count = 4;
                                    $end = 4;
                                    $no_results_text = 'Hm... It seems that there are no events scheduled for this chapter at the moment. Check back soon as we\'re always adding more, or <a href="http://calendar.activedatax.com/stonybrook/default.aspx?type=&view=Category&category=8-0&numdays=180">view all alumni events</a>.';
                                    include($path . $file);
                                ?>
                            </div>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://calendar.activedatax.com/stonybrook/default.aspx?type=&amp;view=Category&amp;category=8-47&amp;numdays=180" target="_blank">View All Events</a>
                        </div>
                    </div>
                    <div class="whole activities-and-calendar clearfix">
                        <h4 class="on-red">Links and Resources</h4>
                        <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://www.facebook.com/groups/21404043536/" target="_blank">View on Facebook</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="event-gallery flickr-gallery clearfix" data-flickr-id="72157649295457517">
        <div class="border-box wrapper inside-content">
            <h4 class="on-red">Gallery</h4>
            <div class="carousel-wrapper">
                <div id="the-carousel" class="owl-carousel">
                    <!-- Images loaded via AJAX from Flickr -->
                </div>
                <div class="owl-prev owl-prev-3" data-owl-id="the-carousel-3"><em class="fa fa-angle-left"></em></div>
                <div class="owl-next owl-next-3" data-owl-id="the-carousel-3"><em class="fa fa-angle-right"></em></div>
            </div>
            <p><a class="sbu-outline-button sbu-outline-button--red arrow-after" href="#" target="_blank">View on Flickr</a> <a class="sbu-outline-button sbu-outline-button--on-red arrow-after" href="mailto:alumni@stonybrook.edu" target="_blank">Submit Your Photos</a></p>
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