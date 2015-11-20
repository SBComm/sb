<article class="get-connected">
    <section class="clearfix center-rule-header events-header inside-header">
        <div class="border-box">
            <h2><span>Events and Reunions</span></h2>
        </div>
    </section>
    <section class="clearfix alumni-header inside-content main-inside-content white-background arrow-below arrow-below-white">
        <div class="border-box wrapper clearfix">
            <div class="rounded-image-buttons clearfix">
                <a class="reunions" href="#reunions"><div class="label">Reunions</div></a>
                <a class="forty" href="#forty"><div class="label">40 Under Forty</div></a>
                <a class="golf" href="#golf"><div class="label">Scholarship Golf Classic</div></a>
                <a class="wolfstock-homecoming" href="#wolfstock-homecoming"><div class="label">Wolfstock</div></a>
            </div>
        </div>
    </section>

    <section id="calendar" class="clearfix events calendar activities-and-calendar inside-content">
        <div class="black-opac-cover">
            <div class="border-box wrapper clearfix">
                <h4>Event Calendar</h4>
            </div>
            <div class="border-box wrapper clearfix">
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
                    $count = 6;
                    $end = 6;
                    $col = 2;
                    include($path . $file);
                ?>
                <div class="center-wrapper clearfix">
                    <a class="sbu-outline-button sbu-outline-button--white arrow-after" href="http://calendar.activedatax.com/stonybrook/EventList.aspx?fromdate=11%2f1%2f2015&amp;todate=11%2f30%2f2015&amp;display=Month&amp;view=DateTime#events" target="_blank">View All Events</a>
                </div>
            </div>
        </div>
    </section>

    <section id="reunions" class="clearfix events reunions inside-content arrow-above">
        <div class="border-box wrapper clearfix">
            <h4>Reunions</h4>
        </div>
        <div class="border-box wrapper clearfix">
            <div class="content col-2">
                <p>Recapture and recreate all of your favorite moments from your time at Stony Brook University and reconnect with your classmates and the University through class and chapter events, group lectures, networking receptions, tours and much more.</p>
                <a class="sbu-outline-button sbu-outline-button--white arrow-after" href="#">Explore Reunions</a>
            </div>
        </div>
        <img src="img/alumni/3-ladies-silo_with-shadow.png" alt="Three alumni" />
    </section>

    <section id="forty" class="clearfix events forty inside-content">
        <div class="black-opac-cover">
            <div class="border-box wrapper clearfix">
                <img src="img/logo/40-under-red-banner-logo-large.png" alt="40 Under Forty Logo" />
             </div>
            <div class="border-box wrapper clearfix">
                <div class="content col-2">
                    <p>In partnership with Stony Brook University Advancement, the Stony Brook University Alumni Association co-hosts the annual 40 Under Forty alumni awards ceremony and reception in New York City to honor 40 of Stony Brook's brightest, most innovative and entrepreneurial-spirited young graduates.</p>
                    <a class="sbu-outline-button sbu-outline-button--white arrow-after" href="http://stonybrook.edu/40underforty/" target="_blank">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section id="golf" class="clearfix events golf inside-content">
        <div class="border-box wrapper clearfix">
            <h4>Scholarship Golf Classic</h4>
        </div>
        <div class="content white-opac-cover clearfix">
            <div class="wrapper">
                <!--<h5>Golf for a Cause</h5>
                <p>Each June, the Alumni Association hosts its annual Scholarship Golf Classic at one of Long Island's finest courses. Proceeds go to scholarships for deserving Stony Brook University students who need your continued support now more than ever.</p>
                <p>Thanks to our supporters, we raised more than $62,000 for student scholarships and awards at the 14th Annual Scholarship Golf Classic on June 22, 2015. View our sponsors, donors and participants in the 2015 Alumni Association Annual Report (link to Annual Report flipbook when it’s ready).</p>
                <h5>Save the Date!</h5>
                <p>The 15th Annual Scholarship Golf Classic will take place Monday, June 20, 2016.</p>
                <p>Volunteer for the 2016 Committee today! We need your help to make next year’s event a success!</p>
                <p>Your participation makes a big impact. Thank you!</p>
                <a class="sbu-outline-button sbu-outline-button--light" href="#">Get Involved</a>
                <a class="sbu-outline-button sbu-outline-button--light" href="http://studentaffairs.stonybrook.edu/alumniawards/index.shtml">Learn More</a>
                <p>For more information about the upcoming Scholarship Golf Classic, please call (631) 632-4466.</p>-->
                <p>Every June, the Alumni Association hosts its annual Scholarship Golf Classic at one of Long Island's finest courses. Proceeds go to scholarships for deserving Stony Brook University students who need your continued support now more than ever. </p>
            </div>
        </div>
        <div class="content clearfix">
            <a class="sbu-outline-button sbu-outline-button--white sbu-outline-button--on-red arrow-after" href="http://studentaffairs.stonybrook.edu/alumniawards/index.shtml">Learn More</a>
        </div>
    </section>

    <section id="wolfstock-homecoming" class="clearfix events wolfstock back-dark-red-crossed inside-content">
        <div class="border-box wrapper clearfix">
            <h4>Wolfstock</h4>
        </div>
        <div class="border-box wrapper img-wrapper clearfix">
            <div class="content col-2">
                <p>Alumni are invited back to the Brook each fall for Wolfstock Homecoming festivities, including -- both new traditions and old -- campus tours, faculty lectures, mini-reunions, a large BBQ tailgate with fun for the whole family, and the Homecoming football game at LaValle Stadium.</p>
                <a class="sbu-outline-button sbu-outline-button--white sbu-outline-button--on-red arrow-after" href="http://stonybrook.edu/wolfstock/" target="_blank">Explore Wolfstock</a>
            </div>
            <img src="img/alumni/wolfstock-twins-angled.png" alt="Alumni twins" />
        </div>
    </section>

    <?php
        $file = "widgets/alumni-social.php";
        include($path . $file);
    ?>

    <!-- <social-sidebar> -->
        <?php if($social_sidebar!='') {
            $file = "sidebars/".$social_sidebar."-social-sidebar.php";
            include($path . $file);
        } ?>
    <!-- </social-sidebar> -->

</article>