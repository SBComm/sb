<article class="get-connected alumni-chapter hsc-alums inside-page som hsc">
    <section class="clearfix center-rule-header events-header inside-header">
        <div class="border-box">
            <h2><a href="alumni/chapters/hsc-alums">HSC Alums</a></h2>
        </div>
    </section>
    
    <section class="clearfix inside-content main-inside-content white-background">
        <div class="border-box whole clearfix">
            <h3 class="serif">School <em>of</em> <span>Medicine</span> <br />Alumni Chapter</h3>
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
                    <p>The School of Medicine has undergone a tremendous amount of expansion over the past several years. For those of you that live far away, you would be amazed at the sweeping hospital lobby, the Cancer Treatment Center, the rising new clinical and research towers, and the expanded Emergency Department, to name a few of the building projects. We have a state of the art simulation center and ground breaking innovation.</p>
                    <p>And as always, our faculty continues to excel in research, teaching and clinical practice. As Stony Brook expands, it gives us even more reason to be proud of our school and its traditions. Please visit the website to look at some videos of Stony Brook Past, Present and Future produced in commemoration of Stony Brook's 40th year of graduating SOM classes.</p>
                    <a class="is-trigger sbu-outline-button sbu-outline-button--red continue-reading-trigger" href="#letter">Continue Reading...</a>
                    <div id="letter" class="continue-reading-target hide-accessible">
                        <p>We want you to get back in touch and to stay in touch! One of our priorities for this year will be to improve our web presence, making it easier to share information with our community of students and graduates. In the meantime, please get involved by:</p>
                        <ul class="default-bullets">
                            <li>Updating us and your classmates on "what’s new" with <a href="http://sb.cc.stonybrook.edu/happenings/alumni/class-notes/">Class Notes</a></li>
                            <li>Dropping us an email with ideas and concerns so that we may be more responsive to your needs</li>
                            <li>Joining us at one of our upcoming events</li>
                            <li>Participating in our <a href="#host-program">HOST (Help Our Students Travel)</a> program</li>
                            <li>Becoming a member of our Alumni Board</li>
                            <li>Considering a gift to support one of our <a href="#scholarship">scholarship funds</a></li>
                            <li>Reading our news site, <a href="http://sb.cc.stonybrook.edu/medicinetoday/" target="_blank">Medicine Today</a></li>
                        </ul>
                        <p>Individual gifts are always welcome, but recently classes have worked to make a more substantial "class gift," establishing funds and endowments.  This is a great way to reconnect with classmates around a common goal of supporting students.  After a wonderful reunion last fall, the members of the SOM Class of 1983 honored Dr. Aldustus Jordan and Dr. Jack Stern for their significant positive impact on their medical school education and subsequent careers in medicine.  SOM Class of 1983 Endowed Scholarship Honoring Dr. Aldustus Jordan and Dr. Jack Stern. We have heard that the class of 1988 is working on a similar gift. We have hosted a number of class reunions and encourage you to get in touch with us if you'd like to bring your former classmates together. Please get in touch with Mary Hoffmann to find out more information.</p>
                        <p>I hope you join me in participating and strengthening the bonds between alumni, present students and the School of Medicine. Pride and tradition at Stony Brook School of Medicine starts with us.</p>
                        <p>Thank you, <br />
                        Joan Faro, MD '82, FACP, MBA<br />
                        President, Stony Brook School of Medicine Alumni Board</p>
                    </div>
                </div>
                <!--
                <div class="border-box whole activities-and-calendar activities-and-calendar-on-white activities-and-calendar-featured padding-box">
                    <h4>Featured Event</h4>
                    <ul class="calendar-items clearfix">
                        <li class="clearfix">
                            <a class="date-marker" href="#" title="#">
                                <span class="event-month">Oct</span>
                                <span class="event-date">28</span>
                            </a>
                            <a class="event-details" href="#" title="#">
                                <span class="event-title aqua">Test Event Reunion That's Cool</span>
                                <span class="event-time">7:00 PM</span>
                                <span class="event-desc">Come join your fellow peers for a fun night out Come join your fellow peers for a fun night out Come join your fellow peers for a fun night out.</span>
                            </a>
                            <div class="clearfix button-wrapper">
                                <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="#" target="_blank">Register Now</a>
                            </div>
                        </li>
                    </ul>
                </div>
                -->
                <div class="border-box whole news-and-events">
                    <div class="one-half serif-news-titles">
                        <h4>Latest News</h4>
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
                                $rss   = "http://sb.cc.stonybrook.edu/happenings/feed/?cat=58,41";
                                $count = 4;
                                $end = 4;
                                $thumbnail = false;
                                include($path . $file);
                            ?>
                        </div>
                        <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://stonybrook.edu/sbmatters" target="_blank">Read More News</a>
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
                    <div class="border-box whole clearfix section-border-top daa">
                        <h4>Distinguished Alumni Awards</h4>
                        <div class="whole clearfix">
                            <h4 class="on-red clearfix">2015 School of Medicine Award Recipient</h4>
                            <img class="inline-with-copy" src="img/alumni/daa/bernstein.jpg" alt="Portrait of David Bernstein" />
                            <p>David Bernstein, MD '88 received the 2015 School of Medicine Distinguished Alumni Award at the School's annual White Coat Ceremony on August 23, 2015. Recognized as one of the best doctors by Castle-Connelly since 2006, Dr. Bernstein is a national and international leader in the field of liver diseases. His research has led to the development of new medications which are able to cure more than 95% of patients with hepatitis C infection and in the future could lead to the eradication of hepatitis C infection in the United States.</p>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://sb.cc.stonybrook.edu/happenings/alumni/2015-school-of-medicine-distinguished-alumni-award-recipient/" target="_blank">View Story</a>
                        </div>
                        <!--
                        <div class="whole clearfix">
                            <p>View the complete list of Distinguished Alumni and Outstanding Recent Graduate Award recipients, or nominate someone today.</p>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="#" target="_blank">See all recipients</a>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="alumni/form/medicine-distinguished-alumni-nomination" target="_blank">Nominate an alum</a>
                        </div>
                        -->
                    </div>
                    <div class="border-box whole clearfix section-border-top">
                        <div class="border-box one-half padding-box equal-height-col-desktop">
                            <h4>School of Medicine Alumni Board</h4>
                            <h5 class="on-red">Board Members</h5>
                            <div class="drop-accordion drop-accordion-1 clearfix">
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Joan Faro, MD, MBA (1982)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <!--<img class="inline-with-copy" src="img/alumni/daa/bernstein.jpg" alt="Portrait of David Bernstein" />-->
                                                <strong>Joan Faro, MD, MBA (1982)</strong><br />
                                                President<br />
                                                <a class="email-link" href="mailto:jfaro@matherhospital.org">jfaro@matherhospital.org</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Debra Messina, MD (1988)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Debra Messina, MD (1988)</strong><br />
                                                Vice President<br />
                                                <a class="email-link" href="mailto:dmessina.md@gmail.com">dmessina.md@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Lisa Vignogna-Barlas, MD (1996)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Lisa Vignogna-Barlas, MD (1996)</strong><br />
                                                Secretary/Treasurer<br />
                                                <a class="email-link" href="mailto:lvignogna@gmail.com">lvignogna@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Anthony Girardi, MD (1990)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Anthony Girardi, MD (1990)</strong><br />
                                                Immediate Past-President<br />
                                                <a class="email-link" href="mailto:tg79@aol.com">tg79@aol.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Roberta J. Seidman, MD (1983)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Roberta J. Seidman, MD (1983)</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Elise Belilos, MD (1986)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Elise Belilos, MD (1986)</strong><br />
                                                Faculty Representative from Winthrop-University Hospital<br />
                                                <a class="email-link" href="mailto:ebelilos@winthrop.org">ebelilos@winthrop.org</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Cliff Blumstein, MD (1980)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Cliff Blumstein, MD (1980)</strong><br />
                                                <a class="email-link" href="mailto:mrmet1152@aol.com">mrmet1152@aol.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Daniel Barlev, MD (1990)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Daniel Barlev, MD (1990)</strong><br />
                                                <a class="email-link" href="mailto:dbarlev@optonline.net">dbarlev@optonline.net</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Robin L. Cunningham, MD (1988)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Robin L. Cunningham, MD (1988)</strong><br />
                                                <a class="email-link" href="mailto:drrcunningham@aol.com">drrcunningham@aol.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Diane Horowitz, MD (2004)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Diane Horowitz, MD (2004)</strong><br />
                                                <a class="email-link" href="mailto:dhorowitz@nshs.edu">dhorowitz@nshs.edu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Jason Kim, MD (2003)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Jason Kim, MD (2003)</strong><br />
                                                Faculty Representative from Stony Brook University Hospital<br />
                                                <a class="email-link" href="mailto:jason.kim@stonybrookmedicine.edu">jason.kim@stonybrookmedicine.edu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Kara Kvilekval, MD (1983)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Kara Kvilekval, MD (1983)</strong><br />
                                                <a class="email-link" href="mailto:kvilekval@vascularassociates.com">kvilekval@vascularassociates.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Farshad Lalehzarian, MD (1988)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Farshad Lalehzarian, MD (1988)</strong><br />
                                                <a class="email-link" href="mailto:flalehzarian@gmail.com">flalehzarian@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Andrew Lee, MD (1980)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Andrew Lee, MD (1980)</strong><br />
                                                <a class="email-link" href="mailto:aleemd1@aol.com">aleemd1@aol.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Ashfaq A. Marghoob, MD (1987)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Ashfaq A. Marghoob, MD (1987)</strong><br />
                                                <a class="email-link" href="mailto:marghooa@mskcc.org">marghooa@mskcc.org</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Melanie Rosenblatt, MD (1991)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Melanie Rosenblatt, MD (1991)</strong><br />
                                                <a class="email-link" href="mailto:mrosenblattmd@aol.com">mrosenblattmd@aol.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Ronnie Salzman, MD (1980)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Ronnie Salzman, MD (1980)</strong><br />
                                                <a class="email-link" href="mailto:momzmd@gmail.com">momzmd@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Roberta Seidman, MD (1983)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Roberta Seidman, MD (1983)</strong><br />
                                                <a class="email-link" href="mailto:roberta.seidman@stonybrookmedicine.edu">roberta.seidman@stonybrookmedicine.edu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>David Silberhartz, MD (1980)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>David Silberhartz, MD (1980)</strong><br />
                                                <a class="email-link" href="mailto:dsilberhar@aol.com">dsilberhar@aol.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Howard R. Sussman, MD (1996)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Howard R. Sussman, MD (1996)</strong><br />
                                                <a class="email-link" href="mailto:howard.sussman@stonybrookmedicine.edu">howard.sussman@stonybrookmedicine.edu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>William Schweizer, MD (1983)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>William Schweizer, MD (1983)</strong><br />
                                                <a class="email-link" href="mailto:william.schweizer@nyumc.org">william.schweizer@nyumc.org</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Patrice Vorwerk, MD (1986)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Patrice Vorwerk, MD (1986)</strong><br />
                                                <a class="email-link" href="mailto:patricevbbb@aol.com">patricevbbb@aol.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="on-red">Student Representatives</h5>
                            <div class="drop-accordion drop-accordion-1 clearfix">
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Hollisa Rosa (2019)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <!--<img class="inline-with-copy" src="img/alumni/daa/bernstein.jpg" alt="Portrait of David Bernstein" />-->
                                                <strong>Hollisa Rosa (2019)</strong><br />
                                                Student Representative
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Hannah Elsevier (2016)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <!--<img class="inline-with-copy" src="img/alumni/daa/bernstein.jpg" alt="Portrait of David Bernstein" />-->
                                                <strong>Hannah Elsevier (2016)</strong><br />
                                                Student Representative
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Kelli Summers (2017)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <!--<img class="inline-with-copy" src="img/alumni/daa/bernstein.jpg" alt="Portrait of David Bernstein" />-->
                                                <strong>Kelli Summers (2017)</strong><br />
                                                Student Representative
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Sowmya Sanapala (2018)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <!--<img class="inline-with-copy" src="img/alumni/daa/bernstein.jpg" alt="Portrait of David Bernstein" />-->
                                                <strong>Sowmya Sanapala (2018)</strong><br />
                                                Student Representative
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="host-program" class="border-box one-half padding-box news-feature equal-height-col-desktop">
                            <div class="clearfix host">
                                <h4>"Help Our Students Travel" Program</h4>
                                <p>The School of Medicine Alumni Chapter launched the HOST Program to connect Stony Brook Medical Year IV students who are interviewing for their residencies and current School of Medicine students who are seeking advice with School of Medicine alumni who are willing to volunteer their time and share their experiences and hospitality.</p>
                                <p>Are you an alum who is interested volunteering? Are you a student who wants to connect with an alumni volunteer?</p>
                                <p>If you have any questions, please contact Mary Hoffmann at 631-632-4995 or mary.hoffmann@stonybrook.edu.</p>
                                <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="alumni/form/medicine-host-program" target="_blank">Get More Information</a>
                            </div>
                            <div class="clearfix section-border-top">
                                <h4>International Alumni Awards</h4>
                                <p>The School of Medicine Alumni Chapter helps fund student volunteers traveling on International Medical Missions to underdeveloped countries through the School of Medicine Alumni International Medicine Award Fund.<br />
                                <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://www.flickr.com/photos/sbuadvancement/sets/72157657930957469/with/21217916936/" target="_blank">View photos from international missions</a></p>
                                <p>Do you know a student who would like to apply for sponsorship? Contact Mary Hoffmann for information from the Alumni Board or fill out an <a href="alumni/form/medicine-international-travel-alumni-award-application" target="_blank">International Alumni Award application</a>.</p>
                                <p>You can be a part of supporting global health, and clinical &amp; research student electives!<br />
                                <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://alumniandfriends.stonybrook.edu/sslpage.aspx?pid=410&fid=ZM0iXwHc%2fJQ%3d&fdesc=oq744LBwyP4BkUe%2bomNUvTGgsV%2fLI%2bif2xzHQlG%2bCdJWDgwt7ny6apSGdBpa27Y%2f" target="_blank">Donate now</a></p>
                                <p><a href="http://sb.cc.stonybrook.edu/happenings/alumni/congratulations-to-the-first-recipients-of-the-stony-brook-school-of-medicine-drs-philip-v-and-richard-p-messina-endowed-fund-for-global-excellence/" target="_blank">Learn more</a> about the first recipients of the Endowed Fund for Global Excellence.</p>
                            </div>
                        </div>
                    </div>
                    <div id="scholarship" class="border-box whole clearfix section-border-top give-back margin-top">
                        <div class="one-third">
                            <img src="https://farm1.staticflickr.com/698/20854467501_693e391580_z.jpg" alt="Group Shot of Medicine Students" />
                        </div>
                        <div class="two-third">
                            <h4>Give Back</h4>
                            <p>There are a variety of options for you to support Stony Brook's Alumni Funds:</p>
                            <p><a href="http://alumniandfriends.stonybrook.edu/Alumni-Scholarship-Fund" target="_blank">SOM Alumni Scholarship Fund</a>: Scholarships are awarded to students based on academic excellence, financial need &amp; community service</p>
                            <p><a href="http://alumniandfriends.stonybrook.edu/Alumni-Scholarship-Endowment-Fund" target="_blank">SOM Alumni Scholarship Endowment Fund</a>: Need and merit-based scholarships are awarded with the dividends earned from the endowment</p>
                            <p><a href="http://alumniandfriends.stonybrook.edu/Alumni-Fund" target="_blank">SOM Alumni Fund</a>: Funding is awarded to the alumni board to support educational initiatives that benefit the School of Medicine and its students</p>
                            <p><a href="http://alumniandfriends.stonybrook.edu/Alumni-International-Medicine-Award-Fund" target="_blank">SOM Alumni International Medicine Award Fund</a>: Funding is awarded to student volunteers traveling on International Medical Missions to underdeveloped countries</p>
                            <p><a href="https://alumniandfriends.stonybrook.edu/main-site/external/external---school-of-medicine-stethoscope-drive-donation-form" target="_blank">Stethoscope Drive Fund</a>: This fund supports the sponsorship of a personalized 3M Littman Cardiology III stethoscope for an incoming medical student</p>
                        </div>
                    </div>
                    <div class="border-box whole clearfix past-reunions">
                        <h4>Past Reunions</h4>
                        <div class="whole clearfix">
                            <div class="border-box one-third past-reunion">
                                <a class="title" href="https://www.flickr.com/photos/sbuadvancement/sets/72157649005162092/">School of Medicine Class of '99 Reunion</a>
                                <span class="date">October 25-26, 2014</span>
                                <div class="img-wrapper">
                                    <img src="https://farm4.staticflickr.com/3947/15464623268_f0f6d5a44f_b.jpg" alt="School of Medicine Class of '99 Reunion">
                                    <div class="btn-wrapper"><a class="sbu-outline-button sbu-outline-button--on-white arrow-after" href="https://www.flickr.com/photos/sbuadvancement/sets/72157649005162092/" target="_blank">View Photos</a></div>
                                </div>
                            </div>
                            <div class="border-box one-third past-reunion">
                                <a class="title" href="https://www.flickr.com/photos/sbuadvancement/sets/72157644516226631/">School of Medicine Class of '88 Reunion</a>
                                <span class="date">May 3, 2014</span>
                                <div class="img-wrapper">
                                    <img src="https://farm6.staticflickr.com/5034/13927655930_8d57b29ed7_b.jpg" alt="School of Medicine Class of '88 Reunion">
                                    <div class="btn-wrapper"><a class="sbu-outline-button sbu-outline-button--on-white arrow-after" href="https://www.flickr.com/photos/sbuadvancement/sets/72157644516226631/" target="_blank">View Photos</a></div>
                                </div>
                            </div>
                            <div class="border-box one-third past-reunion">
                                <a class="title" href="https://www.flickr.com/photos/sbuadvancement/sets/72157637154325255/">School of Medicine Class of '83 Reunion</a>
                                <span class="date">October 19-20, 2013</span>
                                <div class="img-wrapper">
                                    <img src="https://farm4.staticflickr.com/3808/10591048035_ec46c094e4_b.jpg" alt="School of Medicine Class of '83 Reunion">
                                    <div class="btn-wrapper"><a class="sbu-outline-button sbu-outline-button--on-white arrow-after" href="https://www.flickr.com/photos/sbuadvancement/sets/72157637154325255/" target="_blank">View Photos</a></div>
                                </div>
                            </div>
                            
                            <div class="border-box clearfix whole center-wrapper">
                                <a class="is-trigger sbu-outline-button sbu-outline-button--red continue-reading-trigger" href="#more-reunions" data-target="#more-reunions">View all past reunions</a>
                            </div>

                            <div id="more-reunions" class="continue-reading-target hide-accessible">
                                <div class="border-box one-third past-reunion">
                                    <a class="title" href="https://www.flickr.com/photos/sbuadvancement/sets/72157659693936320">School of Medicine Class of ’90 Reunion Reception</a>
                                    <span class="date">October 17, 2015</span>
                                    <div class="img-wrapper">
                                        <img src="https://farm6.staticflickr.com/624/21711861114_3f95d868fe_b.jpg" alt="School of Medicine Class of '90 Reunion">
                                        <div class="btn-wrapper"><a class="sbu-outline-button sbu-outline-button--on-white arrow-after" href="https://www.flickr.com/photos/sbuadvancement/sets/72157659693936320" target="_blank">View Photos</a></div>
                                    </div>
                                </div>
                                <div class="border-box one-third past-reunion">
                                    <a class="title" href="https://www.flickr.com/photos/sbuadvancement/sets/72157657174800614">School of Medicine Class of '85 Reunion Reception</a>
                                    <span class="date">May 3, 2014</span>
                                    <div class="img-wrapper">
                                        <img src="https://farm6.staticflickr.com/5811/21972148175_6f0e61ed5b_b.jpg" alt="School of Medicine Class of '85 Reunion">
                                        <div class="btn-wrapper"><a class="sbu-outline-button sbu-outline-button--on-white arrow-after" href="https://www.flickr.com/photos/sbuadvancement/sets/72157657174800614" target="_blank">View Photos</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="whole clearfix center-wrapper section-border-top margin-top">
                            <p>Want to volunteer to plan your own class reunion?</p>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="alumni/form/volunteer" target="_blank">Volunteer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="event-gallery flickr-gallery clearfix no-float-button" data-flickr-id="72157658676442598">
        <div class="border-box wrapper inside-content">
            <h5 class="on-red">Gallery</h5>
            <div class="carousel-wrapper">
                <div id="the-carousel" class="owl-carousel">
                    <!-- Images loaded via AJAX from Flickr -->
                </div>
                <div class="owl-prev owl-prev-3" data-owl-id="the-carousel-3"><em class="fa fa-angle-left"></em></div>
                <div class="owl-next owl-next-3" data-owl-id="the-carousel-3"><em class="fa fa-angle-right"></em></div>
            </div>
            <p><a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://www.flickr.com/photos/sbuadvancement/sets/72157658676442598" target="_blank">View on Flickr</a> <a class="sbu-outline-button sbu-outline-button--on-red arrow-after" href="mailto:alumni@stonybrook.edu" target="_blank">Submit Your Photos</a></p>
        </div>
    </section>


    <section class="clearfix inside-content main-inside-content white-background">
        <div class="border-box wrapper clearfix">
            <div class="whole clearfix">
                <h5 class="on-red">Links and Resources</h5>
                <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://www.facebook.com/groups/175858250074/" target="_blank">View on Facebook</a>
                <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://www.linkedin.com/grps?gid=8232333" target="_blank">View on LinkedIn</a>
                <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://stonybrook.edu/medicinetoday" target="_blank">Medicine Today</a>
                <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://www.doximity.com/" target="_blank">Doximity</a>
            </div>
        </div>
    </section>
    
    <section class="clearfix inside-content main-inside-content som-links simple-buttons back-dark-red-crossed">
        <div class="border-box wrapper">
            <div class="btn-wrapper clearfix">
                <a class="simple-button arrow-after" href="http://medicine.stonybrookmedicine.edu/">School of Medicine</a>
                <a class="simple-button arrow-after" href="http://medicine.stonybrookmedicine.edu/cme/courses">Continuing Education</a>
            </div>
            <div class="btn-wrapper btn-wrapper-middle clearfix">
                <a class="give-button" href="https://alumniandfriends.stonybrook.edu/online-giving">
                    <img src="img/buttons/medium-give-now.png" />
                    <div class="message">
                        <span class="first">Your Gift Matters</span>
                        <span>Support Stony Brook Medicine</span>
                    </div>
                </a>
            </div>
            <div class="btn-wrapper clearfix">
                <a class="simple-button arrow-after" href="alumni/form/send-us-your-news/">Update your info</a>
                <a class="simple-button arrow-after" href="alumni/stay-in-touch/contact">Contact us</a>
            </div>
        </div>
    </section>
    
    <section class="clearfix inside-content main-inside-content chapters-nav-dropdown">
        <div class="border-box wrapper">
            <div class="content">
            <h3>Explore All Chapters &amp; Groups</h3>
            <?php
                $selected_sub_nav = "school-of-medicine";
                $file = "alumni/get-connected/chapters-nav-dropdown.php";
                include($path . $content . $secLv . $file);
            ?>
            </div>
        </div>
    </section>
        
    <section class="clearfix inside-content main-inside-content white-background">
        <div class="border-box wrapper clearfix">
            <?php
                $selected_sub_nav = "school-of-medicine";
                $file = "widgets/alumni/alumni-hsc-buttons.php";
                include($path . $file);
            ?>
        </div>
    </section>

    <!-- <social-sidebar> -->
        <?php if($social_sidebar!='') {
            $file = "sidebars/".$social_sidebar."-social-sidebar.php";
            include($path . $file);
        } ?>
    <!-- </social-sidebar> -->

</article>