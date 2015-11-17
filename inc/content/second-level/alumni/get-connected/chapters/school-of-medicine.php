<article class="get-connected alumni-chapter hsc-alums">
    <section class="clearfix center-rule-header events-header inside-header">
        <div class="border-box">
            <h2><a href="alumni/chapters/hsc-alums">HSC Alums</a></h2>
        </div>
    </section>
    
    <section class="clearfix inside-content main-inside-content white-background">
        <div class="border-box wrapper clearfix">
            <?php
                $selected_sub_nav = "school-of-medicine";
                $file = "widgets/alumni-hsc-buttons.php";
                include($path . $file);
            ?>
        </div>
        <div class="border-box whole clearfix">
            <h3 class="serif">School of <span>Medicine</span> Alumni Chapter</h3>
        </div>
        <div class="border-box wrapper clearfix">
            <div class="content">
                <div class="border-box whole intro-letter">
                    <img class="inline-with-copy" src="img/university/hsc-small-portrait-1.jpg" alt="Health Science Center" />
                    <h4>Welcome School of Medicine Alums!</h4>
                    <p><strong>To All of My Fellow Alumni Colleagues:</strong></p>
                    </p>
                    <p>Please join me in welcoming the 2015 graduates of the School of Medicine who officially became alumni on May 21, 2015! We are so happy to add another 121 members to our growing alumni body.</p>
                    <p>Our goal continues to be building strong and lasting relationships with our alumni across the country, providing support for our current students and advancing the interests of professional education in medicine.</p>
                    <p>The School of Medicine has undergone a tremendous amount of expansion over the past several years. For those of you that live far away, you would be amazed at the sweeping hospital lobby, the Cancer Treatment Center, the rising new clinical and research towers, and the expanded Emergency Department, to name a few of the building projects. We have a state of the art simulation center and ground breaking innovation. And as always, our faculty continues to excel in research, teaching and clinical practice. As Stony Brook expands, it gives us even more reason to be proud of our school and its traditions. Please visit the website to look at some videos of Stony Brook Past, Present and Future produced in commemoration of Stony Brook's 40th year of graduating SOM classes.</p>
                    <a class="is-trigger sbu-outline-button sbu-outline-button--red continue-reading-trigger" href="#letter">Continue Reading...</a>
                    <div id="letter" class="continue-reading-text hide-accessible">
                        <p>We want you to get back in touch and to stay in touch! One of our priorities for this year will be to improve our web presence, making it easier to share information with our community of students and graduates. In the meantime, please get involved by:</p>
                        <ul class="default-bullets">
                            <li>Updating us and your classmates on "what’s new" with <a href="#">Class Notes</a></li>
                            <li>Dropping us an email with ideas and concerns so that we may be more responsive to your needs</li>
                            <li>Joining us at one of our upcoming events</li>
                            <li>Participating in our <a href="#">HOST (Help Our Students Travel)</a> program</li>
                            <li>Becoming a member of our Alumni Board</li>
                            <li>Considering a gift to support one of our <a href="#">scholarship funds</a></li>
                        </ul>
                        <p>Individual gifts are always welcome, but recently classes have worked to make a more substantial "class gift," establishing funds and endowments.  This is a great way to reconnect with classmates around a common goal of supporting students.  After a wonderful reunion last fall, the members of the SOM Class of 1983 honored Dr. Aldustus Jordan and Dr. Jack Stern for their significant positive impact on their medical school education and subsequent careers in medicine.  SOM Class of 1983 Endowed Scholarship Honoring Dr. Aldustus Jordan and Dr. Jack Stern)  We have heard that the class of 1988 is working on a similar gift.  We have hosted a number of class reunions and encourage you to get in touch with us if you'd like to bring your former classmates together. Please get in touch with Mary Hoffmann to find out more information.</p>
                        <p>I hope you join me in participating and strengthening the bonds between alumni, present students and the School of Medicine. Pride and tradition at Stony Brook School of Medicine starts with us.</p>
                        <p>Thank you, <br />
                        Joan Faro, MD '82, FACP, MBA<br />
                        President, Stony Brook School of Medicine Alumni Board</p>
                    </div>
                </div>
                <div class="border-box whole board-and-events">
                    <div class="border-box one-half padding-box">
                        <h4>School of Medicine Alumni Board</h4>
                        <div class="drop-accordion drop-accordion-1 clearfix">
                            <div class="item">
                                <div class="tab">
                                    <span class="label"><i class="fa fa-plus-circle"></i>Majors in the College of Engineering &amp; Applied Sciences</span>
                                </div>
                                <div class="content clearfix hide-accessible">
                                    <div class="content-wrap">
                                        <p>Successful applicants in these majors will, in addition to our regular admission criteria, typically have earned outstanding grades in high school calculus and physics, and performed exceptionally well on the Math section of the SAT and/or ACT. Consideration is given to students who have performed well in advanced science and math courses, as well as those who have participated in science, math, and research competitions.</p>
                                        <ul class="default-bullets">
                                            <li>Applied Mathematics and Statistics</li>
                                            <li>Biomedical Engineering</li>
                                            <li>Chemical and Molecular Engineering</li>
                                            <li>Civil Engineering</li>
                                            <li>Computer Engineering</li>
                                            <li>Computer Science</li>
                                            <li>Electrical Engineering</li>
                                            <li>Engineering Science</li>
                                            <li>Information Systems</li>
                                            <li>Mechanical Engineering</li>
                                            <li>Technological Systems Management</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-box one-half">
                        <h4>Upcoming Events</h4>
                        <div class="whole activities-and-calendar activities-and-calendar-on-white">
                            <div class="news-feed">
                                <?php
                                    $file  = "feed/active-data-calendar.php";
                                    $rss   = "http://calendar.activedatax.com/stonybrook/RSSSyndicator.aspx?category=8-58";
                                    $count = 2;
                                    $end = 2;
                                    $no_results_text = 'Hm... It seems that there are no events scheduled for this chapter at the moment. Check back soon as we\'re always adding more, or <a href="http://calendar.activedatax.com/stonybrook/default.aspx?type=&view=Category&category=8-0&numdays=180">view all alumni events</a>.';
                                    include($path . $file);
                                ?>
                            </div>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://calendar.activedatax.com/stonybrook/default.aspx?type=&amp;view=Category&amp;category=8-58&amp;numdays=180" target="_blank">View All Events</a>
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
            <p><a class="sbu-outline-button sbu-outline-button--red arrow-after" href="#" target="_blank">View on Flickr</a> <a class="sbu-outline-button sbu-outline-button--on-red arrow-after" href="#" target="_blank">Submit Your Photos</a></p>
        </div>
    </section>
    
    <section class="clearfix inside-content main-inside-content">
        <div class="border-box wrapper chapters-nav-dropdown">
            <div class="content">
            <h4>Explore All Chapters &amp; Groups</h4>
            <?php
                $selected_sub_nav = "school-of-medicine";
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