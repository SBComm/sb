<article class="get-connected alumni-chapter">
    <section class="clearfix center-rule-header events-header inside-header">
        <div class="border-box">
            <h2><a href="alumni/chapters">Chapters</a></h2>
        </div>
    </section>
    
    <section class="clearfix inside-content main-inside-content white-background">
        <div class="border-box wrapper clearfix">
            <div class="border-box whole">
                <h3 class="serif">Black &amp; Latino Alumni Network</h3>
            </div>
            <div class="content">
                <div class="border-box one-third">
                    <nav class="sidebar-star-nav clearfix">
                        <?php
                            $selected_sub_nav = "black-and-latino-alumni-network";
                            $file = "alumni/get-connected/chapters-nav-list.php";
                            include($path . $content . $secLv . $file);
                        ?>
                    </nav>
                </div>
                <div class="border-box two-third">
                    <p>The Stony Brook University Black &amp; Latino Alumni Network provides a forum where Black and Latino alumni of Stony Brook University can develop and strengthen the ties amongst themselves, while promoting values that reflect their community interests and investments as members of the Stony Brook University Alumni Association and Stony Brook University.</p>
                    <p>Network Leaders:</p>
                    <ul class="default-bullets">
                        <li>Lennie Carter '02, '04</li>
                        <li>J.R. Dorsainvil '02</li>
                        <li>Morgan Cato '04, '05</li>
                        <li>Thierry Cazeau '91, '94</li>
                        <li>Dawn Cotter-Jenkins '91</li>
                        <li>Carla Lachapelle '98 </li>
                        <li>Rashad Cureton '12</li>
                        <li>Gerda Gatling '12</li>
                    </ul>
                    <div class="whole activities-and-calendar activities-and-calendar-on-white">
                        <div class="one-half">
                            <h5 class="on-red">News</h5>
                            <div class="activities-links">
                                <?php
                                    $file  = "feed/happenings-news.php";
                                    $rss   = "http://sb.cc.stonybrook.edu/happenings/category/blacklatino-group/feed/";
                                    $count = 7;
                                    $end = 7;
                                    $no_results_text = 'No news yet! Check back soon...';
                                    include($path . $file);
                                ?>
                            </div>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://sb.cc.stonybrook.edu/happenings/category/blacklatino-group" target="_blank">Read More News</a>
                        </div>
                        <div class="one-half">
                            <h5 class="on-red">Events</h5>
                            <div class="news-feed">
                                <?php
                                    $file  = "feed/active-data-calendar.php";
                                    $rss   = "http://calendar.activedatax.com/stonybrook/RSSSyndicator.aspx?category=8-49";
                                    $count = 4;
                                    $end = 4;
                                    $no_results_text = 'Hm... It seems that there are no events scheduled for this chapter at the moment. Check back soon as we\'re always adding more, or <a href="http://calendar.activedatax.com/stonybrook/default.aspx?type=&view=Category&category=8-0&numdays=180">view all alumni events</a>.';
                                    include($path . $file);
                                ?>
                            </div>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://calendar.activedatax.com/stonybrook/default.aspx?type=&amp;view=Category&amp;category=8-49&amp;numdays=180" target="_blank">View All Events</a>
                        </div>
                    </div>
                    <div class="whole activities-and-calendar clearfix">
                        <h5 class="on-red">Links and Resources</h5>
                        <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://www.facebook.com/groups/sbubla/" target="_blank">View on Facebook</a>
                    </div>
                    <div class="whole event-gallery flickr-gallery clearfix" data-flickr-id="72157658666165099">
                        <div class="border-box inside-content">
                            <h5 class="on-red">Gallery</h5>
                            <div class="carousel-wrapper">
                                <div id="the-carousel" class="owl-carousel">
                                    <!-- Images loaded via AJAX from Flickr -->
                                </div>
                                <div class="owl-prev owl-prev-3" data-owl-id="the-carousel-3"><em class="fa fa-angle-left"></em></div>
                                <div class="owl-next owl-next-3" data-owl-id="the-carousel-3"><em class="fa fa-angle-right"></em></div>
                            </div>
                            <p><a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://www.flickr.com/photos/sbuadvancement/sets/72157658666165099" target="_blank">View on Flickr</a> <a class="sbu-outline-button sbu-outline-button--on-red arrow-after" href="mailto:alumni@stonybrook.edu" target="_blank">Submit Your Photos</a></p>
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