<article class="get-connected alumni-chapter ne">
    <section class="clearfix center-rule-header events-header inside-header">
        <div class="border-box">
            <h2><a href="alumni/chapters">Chapters</a></h2>
        </div>
    </section>
    
    <section class="clearfix inside-content main-inside-content white-background">
        <div class="border-box wrapper clearfix">
            <div class="content">
                <div class="border-box one-third">
                    <nav class="sidebar-star-nav clearfix">
                        <?php
                            $selected_sub_nav = "new-england-boston-alumni-chapter";
                            $file = "alumni/get-connected/chapters-nav-list.php";
                            include($pathForContent . $content . $secLv . $file);
                        ?>
                    </nav>
                </div>
                <div class="border-box two-third">
                    <h4 class="serif">New England – Greater Boston Area Alumni Chapter</h4>
                    <p>The Stony Brook University New England - Greater Boston Area Chapter connects more than 6,800 Stony Brook alumni in the Boston Area through social events and networking opportunities.</p>
                    <p>We are currently recruiting alumni chapter leaders in the New England &#8212; Boston area to play a pivotal role in organizing these events and opportunities for the chapter.</p>
                    <div class="whole activities-and-calendar activities-and-calendar-on-white">
                        <div class="one-half">
                            <h5 class="on-red">News</h5>
                            <div class="activities-links">
                                <?php
                                    $file  = "feed/happenings-news.php";
                                    $rss   = "http://sb.cc.stonybrook.edu/happenings/category/new-england-boston-chapter/feed/";
                                    $count = 7;
                                    $end = 7;
                                    $no_results_text = 'No news yet! Check back soon...';
                                    include($path . $file);
                                ?>
                            </div>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://sb.cc.stonybrook.edu/happenings/category/new-england-boston-chapter" target="_blank">Read More News</a>
                        </div>
                        <div class="one-half">
                            <h5 class="on-red">Events</h5>
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
                        <h5 class="on-red">Links and Resources</h5>
                        <p>For more information, contact:<br />
                            Janet Masini, MA '14<br />
                            Assistant Director of Alumni Relations<br />
                            Stony Brook University<br />
                            Phone: 631-632-6212<br />
                            Email: janet.masini@stonybrook.edu
                        </p>
                    </div>
                    <!--
                    <div class="whole event-gallery flickr-gallery clearfix" data-flickr-id="72157649295457517">
                        <div class="border-box inside-content">
                            <h5 class="on-red">Gallery</h5>
                            <div class="carousel-wrapper">
                                <div id="the-carousel" class="owl-carousel">
                                    <!-- Images loaded via AJAX from Flickr --><!--
                                </div>
                                <div class="owl-prev owl-prev-3" data-owl-id="the-carousel-3"><em class="fa fa-angle-left"></em></div>
                                <div class="owl-next owl-next-3" data-owl-id="the-carousel-3"><em class="fa fa-angle-right"></em></div>
                            </div>
                            <p><a class="sbu-outline-button sbu-outline-button--red arrow-after" href="#" target="_blank">View on Flickr</a> <a class="sbu-outline-button sbu-outline-button--on-red arrow-after" href="mailto:alumni@stonybrook.edu" target="_blank">Submit Your Photos</a></p>
                        </div>
                    </div>-->
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
                include($pathForContent . $content . $secLv . $file);
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