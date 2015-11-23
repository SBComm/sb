<article class="get-connected recent-grads inside-page">
    <section class="clearfix center-rule-header events-header inside-header">
        <div class="border-box">
            <h2><a href="alumni/recent-grads">Recent Graduates</a></h2>
        </div>
    </section>
    
    <section class="clearfix inside-content main-inside-content white-background margin-top">
        <div class="border-box wrapper clearfix">
            <div class="content pad-top">
                <div class="border-box whole intro-letter section-border-bottom">
                    <img class="inline-with-copy" src="img/alumni/board/stafford.jpg" alt="Robert W. Stafford" />
                    <h4>You're a Seawolf for Life!</h4>
                    <p><strong>A Message From the Alumni Association President:</strong></p>
                    </p>
                    <p>What's a Seawolf? You're a Seawolf! As a new graduate from Stony Brook University, you are now an official 'Seawolf for Life.'</p>
                    <p>There are so many opportunities for you to be inspired, stay connected, and become more involved with the University. Whether by attending an alumni reunion, mentoring a current student, networking with fellow alums or re-connecting with professors, our goal is to help you stay engaged with your alma mater.</p>
                    <p>Sincerely,</p>
                    <p>Robert W. Stafford ’72, ’82</p>
                </div>
                <div class="border-box whole news-and-events">
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
                        <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://sb.cc.stonybrook.edu/happenings/category/alumni-news-highlights" target="_blank">Read More News</a>
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
                <div class="border-box whole clearfix give-back section-border-top left-col-content">
                    <div class="one-third">
                        <img src="img/alumni/perks/alumni-card.png" alt="Alumni Association Card" />
                    </div>
                    <div class="two-third">
                        <h4>Alumni Association Card</h4>
                        <p>Save money with one of our perks exclusively for Stony Brook alumni!</p>
                        <p>As a Stony Brook alum, you are eligible for discounted hotel and rental car offers, use of alumni facilities, savings on insurance products, retail discounts, and more.</p>
                        <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://alumniandfriends.stonybrook.edu/sslpage.aspx?pid=437" target="_blank">Learn More</a>
                    </div>
                </div>
                <!--<div class="border-box whole clearfix section-border-top">
                    <div class="one-third">
                        <img src="https://farm6.staticflickr.com/5805/21327885780_fbb4473460_z.jpg" alt="Group Shot of Students at a Career Fair" />
                    </div>
                    <div class="two-third">
                        <h4>Unsure of Your Career Plans?</h4>
                        <p>The Alumni Association is here to help you realize your success and become a part of Stony Brook’s engaged alumni community. We are proud partners with the Career Center on a number of programs and events that help students with networking, job and internship fairs and other career-related alumni panels and programs.</p>
                        <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="alumni/contact" target="_blank">Contact Us</a>
                        <p>Our Career Advisor Program (CAN) helps to match current students with experienced alumni in a field that you are interested in. Visit our <a href="http://career.stonybrook.edu/alumni_new/ask-blog" target="_blank">ASK Blog</a>, which features blog posts from our alumni about lessons learned from their career experiences.</p>
                    </div>
                </div>
                <div class="border-box whole clearfix section-border-top">
                    <h4>Student Organizations</h4>
                    <p>We are pleased to partner with student organizations to keep their alumni engaged and to collaborate on signature student-alumni networking events. The Office of <a href="alumni/alumni-relations">Alumni Relations</a> will also assist your student organization with finding outstanding alums to participate as guest speakers and to sit on panel discussions.</p>
                </div>-->
            </div>
        </div>
    </section>

</article>