<article class="get-connected alumni-chapter">
    <section class="clearfix center-rule-header events-header inside-header">
        <div class="border-box">
            <h2><a href="alumni/chapters">Chapters</a></h2>
        </div>
    </section>
    
    <section class="clearfix inside-content main-inside-content white-background">
        <div class="border-box wrapper clearfix">
            <div class="border-box whole">
                <h3 class="serif">The Founders Alumni Group</h3>
            </div>
            <div class="content">
                <div class="border-box one-third equal-height-col">
                    <nav class="sidebar-star-nav clearfix">
                        <?php
                            $selected_sub_nav = "founders-alumni-group";
                            $file = "alumni/get-connected/chapters-nav-list.php";
                            include($path . $content . $secLv . $file);
                        ?>
                    </nav>
                </div>
                <div class="border-box two-third equal-height-col">
                    <p>Stony Brook University's first alumni, the Classes of 1961-1966, shared the unique experience of attending a small, quality institution during its formative years. Each of these classes has its place in the history of the University:</p>
                    <ul class="default-bullets">
                        <li><strong>1961</strong>: First graduates from SUNY Long Island Center, originally called the "College on Long Island" the name was changed in 1961.</li>
                        <li><strong>1962</strong>: Last seniors at Oyster Bay and last graduates of SUNY Long Island Center.</li>
                        <li><strong>1963</strong>: First seniors at SUNY at Stony Brook, last graduation ceremony at Oyster Bay.</li>
                        <li><strong>1964</strong>: First graduation ceremony on the Stony Brook campus.</li>
                        <li><strong>1965</strong>: First sophomores at Stony Brook, last freshmen at Oyster Bay.</li>
                        <li><strong>1966</strong>: First class to complete a four-year Stony Brook experience.</li>
                    </ul>
                    <div class="whole activities-and-calendar activities-and-calendar-on-white">
                        <div class="one-half">
                            <h5 class="on-red">News</h5>
                            <div class="activities-links">
                                <?php
                                    $file  = "feed/happenings-news.php";
                                    $rss   = "http://sb.cc.stonybrook.edu/happenings/category/founders-group/feed/";
                                    $count = 7;
                                    $end = 7;
                                    $no_results_text = 'No news yet! Check back soon...';
                                    include($path . $file);
                                ?>
                            </div>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://sb.cc.stonybrook.edu/happenings/category/founders-group" target="_blank">Read More News</a>
                        </div>
                        <div class="one-half">
                            <h5 class="on-red">Events</h5>
                            <div class="news-feed">
                                <?php
                                    $file  = "feed/active-data-calendar.php";
                                    $rss   = "http://calendar.activedatax.com/stonybrook/RSSSyndicator.aspx?category=8-50";
                                    $count = 4;
                                    $end = 4;
                                    $no_results_text = 'Hm... It seems that there are no events scheduled for this chapter at the moment. Check back soon as we\'re always adding more, or <a href="http://calendar.activedatax.com/stonybrook/default.aspx?type=&view=Category&category=8-0&numdays=180">view all alumni events</a>.';
                                    include($path . $file);
                                ?>
                            </div>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://calendar.activedatax.com/stonybrook/default.aspx?type=&amp;view=Category&amp;category=8-50&amp;numdays=180" target="_blank">View All Events</a>
                        </div>
                    </div>
                    <div class="whole event-gallery flickr-gallery clearfix" data-flickr-id="72157658799067180">
                        <div class="border-box inside-content">
                            <h5 class="on-red">Gallery</h5>
                            <div class="carousel-wrapper">
                                <div id="the-carousel" class="owl-carousel">
                                    <!-- Images loaded via AJAX from Flickr -->
                                </div>
                                <div class="owl-prev owl-prev-3" data-owl-id="the-carousel-3"><em class="fa fa-angle-left"></em></div>
                                <div class="owl-next owl-next-3" data-owl-id="the-carousel-3"><em class="fa fa-angle-right"></em></div>
                            </div>
                            <p><a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://www.flickr.com/photos/sbuadvancement/sets/72157658799067180" target="_blank">View on Flickr</a> <a class="sbu-outline-button sbu-outline-button--on-red arrow-after" href="mailto:alumni@stonybrook.edu" target="_blank">Submit Your Photos</a></p>
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