<article class="get-connected alumni-chapter hsc-alums inside-page">
    <section class="clearfix center-rule-header events-header inside-header">
        <div class="border-box">
            <h2><a href="alumni/chapters/hsc-alums">HSC Alums</a></h2>
        </div>
    </section>
    
    <section class="clearfix inside-content main-inside-content white-background">
        <div class="border-box wrapper clearfix">
            <?php
                $selected_sub_nav = "school-of-dental-medicine";
                $file = "widgets/alumni/alumni-hsc-buttons.php";
                include($path . $file);
            ?>
        </div>
        <div class="border-box whole clearfix">
            <h3 class="serif">School of <span>Dental Medicine</span> Alumni Chapter</h3>
        </div>
        <div class="border-box wrapper clearfix">
            <div class="content">
                <div class="border-box whole intro-letter">
                    <img class="inline-with-copy" src="img/university/hsc-small-portrait-1.jpg" alt="Health Science Center" />
                    <h4>Welcome School of Dental Medicine Alums!</h4>
                    <p><strong>To All of My Fellow Alumni Colleagues:</strong></p>
                    </p>
                    <p>No matter how far you go in your career and in life, you will always be a part of the small elite group of School of Dental Medicine (SDM) alumni now numbered at nearly 1,200. We encourage you to keep close ties with your SDM classmates, professors, advisors, and fellow alumni.</p>
                    <p>This site is filled with useful information including an events calendar, a photo gallery from SDM events, current alumni benefits and so much more. You may also reconnect with your alma mater in many meaningful ways.</p>
                    <p>Perhaps you could:</p>
                    <p>
                        <ul class="default-bullets">
                            <li>Serve as a mentor to one or more SDM dental students </li>
                            <li>Sign up for one of our upcoming events or continuing education classes</li>
                            <li>Volunteer to become a more involved member of the SDM Alumni Chapter </li>
                            <li>Make a gift to support your Alumni Chapter, scholarships, dental outreach, or initiatives outlined in the Strategic Plan</li>
                        </ul>
                    </p>
                    <a class="is-trigger sbu-outline-button sbu-outline-button--red continue-reading-trigger" href="#letter">Continue Reading...</a>
                    <div id="letter" class="continue-reading-target hide-accessible">
                        <p>If you have any questions or comments feel free to contact Kristin Matthews at 631-632-6130 or by email at <a href="mailto:kristin.matthews@stonybrook.edu" class="email-link">kristin.matthews@stonybrook.edu</a>, or contact Dr. Kilimitzoglou at <a href="dk@esidental.com" class="email-link">dk@esidental.com</a>.</p>
                        <p>I hope you join me in participating and strengthening the bonds between alumni, present students and the School of Medicine. Pride and tradition at Stony Brook School of Medicine starts with us.</p>
                        <p>
                            Best Regards,<br /><br />
                            Dimitrios Kilimitzoglou, DDS '02<br />
                            <em>President, SDM Alumni Chapter</em><br /><br />
                            Kristin Matthews<br />
                            <em>Associate Director of Alumni Relations</em>
                        </p>
                    </div>
                </div>
                <div class="border-box whole news-and-events section-border-bottom">
                    <div class="border-box one-half margin-top">
                        <h4>Mission Statement</h4>
                        <p><em>Engaging the alumni and students of the School of Dental Medicine at Stony Brook will enhance the advancement of oral and general health throughout the local and global community by instilling a feeling of pride and confidence of their knowledge and achievements.</em></p>
                        <p><em>Students and alumni will see the leaders that were educated at Stony Brook as role models.</em></p>
                    </div>
                    <div class="border-box one-half margin-top">
                        <h4>Vision Statement</h4>
                        <p><em>Engaging students and alumni of the SDM at Stony Brook will enhance the Vision Statement of the SDM by demonstrating a commitment by the alumni to support the SDM financially and emotionally to become the future international leader in dental education, patient care, research, and service.</em></p>
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
                    <div class="one-half serif-news-titles margin-bottom">
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
                                $rss   = "http://sb.cc.stonybrook.edu/happenings/feed/?cat=63,42";
                                $count = 4;
                                $end = 4;
                                $thumbnail = false;
                                include($path . $file);
                            ?>
                        </div>
                        <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://stonybrook.edu/sbmatters" target="_blank">Read More News</a>
                    </div>
                    <div class="border-box one-half margin-bottom">
                        <h4>Upcoming Events</h4>
                        <div class="whole activities-and-calendar activities-and-calendar-on-white">
                            <div class="news-feed">
                                <?php
                                    $file  = "feed/active-data-calendar.php";
                                    $rss   = "http://calendar.activedatax.com/stonybrook/RSSSyndicator.aspx?category=8-59";
                                    $count = 2;
                                    $end = 2;
                                    $no_results_text = 'Hm... It seems that there are no events scheduled for this chapter at the moment. Check back soon as we\'re always adding more, or <a href="http://calendar.activedatax.com/stonybrook/default.aspx?type=&view=Category&category=8-0&numdays=180">view all alumni events</a>.';
                                    include($path . $file);
                                ?>
                            </div>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://calendar.activedatax.com/stonybrook/default.aspx?type=&amp;view=Category&amp;category=8-59&amp;numdays=180" target="_blank">View All Events</a>
                        </div>
                    </div>
                    <div class="border-box whole clearfix section-border-top daa">
                        <h4>Distinguished Alumni Awards</h4>
                        <div class="whole clearfix">
                            <h4 class="on-red clearfix">2015 School of Dental Medicine Award Recipient</h4>
                            <img class="inline-with-copy" src="img/alumni/daa/truhlar.jpg" alt="Portrait of Mary Truhlar" />
                            <p>Mary Truhlar, DDS '84, MS, the newly appointed Dean of the Stony Brook University School of Dental Medicine, is the recipient of the 2015 School of Dental Medicine Distinguished Alumni Award.</p>
                            <p>Dr. Truhlar joined the faculty of the School of Dental Medicine in the Department of General Dentistry in 1990. In addition to her expert clinical skills, Dr. Truhlar developed an impressive and robust educational program from her first days at the Dental school.</p>
                            <p>As Dean, Dr. Truhlar's vision for the School of Dental Medicine includes building a strong core foundation and implementing programs and initiatives that advance excellence in education, research and patient care, enabling the school to serve as a model of contemporary dental education and clinical practice. </p>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://sb.cc.stonybrook.edu/happenings/alumni/2015-school-of-dental-medicine-distinguished-alumni-award-recipient-announced/" target="_blank">View Story</a>
                        </div>
                        <!--
                        <div class="whole clearfix">
                            <p>View the complete list of Distinguished Alumni and Outstanding Recent Graduate Award recipients, or nominate someone today.</p>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="#" target="_blank">See all recipients</a>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="alumni/form/medicine-distinguished-alumni-nomination" target="_blank">Nominate an alum</a>
                        </div>
                        -->
                    </div>
                    <div class="border-box whole clearfix section-border-top pad-bottom">
                        <div class="border-box one-half padding-box">
                            <h4>School of Medicine Alumni Board</h4>
                            <h5 class="on-red">Board Members</h5>
                            <div class="drop-accordion drop-accordion-1 clearfix">
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Dr. Jimmy Kilimitzoglou (2002)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <img class="inline-with-copy" src="img/alumni/board/kilimitzoglou.jpg" alt="Portrait of Jimmy Kilimitzoglou" />
                                                <strong>Dr. Jimmy Kilimitzoglou (2002)</strong><br />
                                                President
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Dr. John Rose (2004)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <img class="inline-with-copy" src="img/alumni/board/rose.jpg" alt="Portrait of John Rose" />
                                                <strong>Dr. John Rose (2004)</strong><br />
                                                Vice President<br />
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Dr. Marcie Lebovic (2006)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <img class="inline-with-copy" src="img/alumni/board/lebovic.jpg" alt="Portrait of John Rose" />
                                                <strong>Dr. Marcie Lebovic (2006)</strong><br />
                                                Secretary
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Barry Bass (1981)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Barry Bass (1981)</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Anthony J. Casino, 1978</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Anthony J. Casino (1978)</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Debra Cinotti (1986)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Debra Cinotti (1986)</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Pamela Combs (1989)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Pamela Combs (1989)</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Denise L. Emma (1993)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Denise L. Emma (1993)</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Anthony W. Fazio (1996)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Anthony W. Fazio (1996)</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Leslie Ann Furie (1985)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Leslie Ann Furie (1985)</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Alec Ganci (2012)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Alec Ganci (2012)</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Bo Ha (2007)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Bo Ha (2007)</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Dimitrios Kilimitzoglou (2002)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Dimitrios Kilimitzoglou (2002)</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Alec Nguyen (2011)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Alec Nguyen (2011)</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Debra Oreste ( 199)6</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Debra Oreste ( 199)6</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Maria Ryan (1989)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Maria Ryan (1989)</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Mark Salerno (1983)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Mark Salerno (1983)</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Christopher Salierno (2005)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Christopher Salierno (2005)</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Steven S. Schwartz (1985)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Steven S. Schwartz (1985)</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Rhona Sherwin (1978)</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Rhona Sherwin (1978)</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="border-box one-half padding-box news-feature">
                            <div class="clearfix host">
                                <h4>School of Dental Medicine Mentoring Program</h4>
                                <p>Stony Brook School of Dental Medicine alumni have served as mentors to dental students throughout the years. It is the goal of the Alumni Chapter and the Office of Strategic Planning and External Affairs to introduce a formal mentoring program soon.</p>
                                <p>This program will connect our students with specially-selected alumni mentors allowing our students to learn first-hand about different career paths, leadership skills, styles and strategies. Mentors and students will be matched based on personal and professional interests.</p>
                                <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="alumni/form/dental-medicine-mentoring-program">Get More Information</a>
                            </div>
                            <div class="clearfix section-border-top">
                                <h4>Alumni Award of Excellence</h4>
                                <p>In 2006 at the dedication of the "Alumni Wall" twelve members of the School of Dental Medicine Alumni Board, in appreciation of their outstanding dental education, endowed this award to recognize a year-four student who has demonstrated community service, leadership and a vision for the future of the School. The recipient will receive a monetary award and will have the opportunity to serve a one-year term on the School of Dental Medicine Alumni Board.</p>
                                <p>The selection announcement is made at the annual School of Dental Medicine Awards Ceremony in May.</p>
                            </div>
                        </div>
                    </div>
                    <div class="border-box whole clearfix section-border-top give-back">
                        <div class="one-third">
                            <img src="https://farm1.staticflickr.com/423/19874352258_d437eb9302_z.jpg" alt="Group Shot of Alumni" />
                        </div>
                        <div class="two-third">
                            <h4>Give Back</h4>
                            <p>There are a variety of options for you to support Stony Brook's Alumni Funds:</p>
                            <p><a href="https://alumniandfriends.stonybrook.edu/sdm/get-involved/give" target="_blank">Dental Graduate Alumni Activity Fund</a>: To help support SDM alumni chapter activities and initiatives such as the mentor program</p>
                            <p><a href="https://alumniandfriends.stonybrook.edu/sdm/get-involved/give" target="_blank">Dean's Fund for the Future</a>: To help support teaching, special projects, equipment, research endeavors, patient care and service initiatives</p>
                            <p><a href="https://alumniandfriends.stonybrook.edu/sdm/get-involved/give" target="_blank">SDM Alumni Award of Excellence</a>: To further support an annual award given each year to a graduating dental student who has demonstrated leadership and a vision for the future of the School of Dental Medicine</p>
                            <p><a href="https://alumniandfriends.stonybrook.edu/sdm/get-involved/give" target="_blank">International Dental Outreach Fund</a>: To provide funding to support the purchase of supplies, equipment and travel costs for students and faculty to travel abroad to provide dental care to those most in need</p>
                            <p><a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://alumniandfriends.stonybrook.edu/sdm/get-involved/give" target="_blank">Make a gift</a></p>
                        </div>
                    </div>
                    <div class="border-box whole clearfix past-reunions">
                        <h4>Past Reunions</h4>
                        <div class="whole clearfix">
                            <div class="border-box one-third past-reunion">
                                <a class="title" href="https://www.flickr.com/photos/sbuadvancement/albums/72157647258884844">Greater New York Dental Meeting and Alumni Reception</a>
                                <span class="date">December 2, 2014</span>
                                <div class="img-wrapper">
                                    <img src="https://farm8.staticflickr.com/7530/15752434969_667911755c_b.jpg" alt="Greater New York Dental Meeting and Alumni Reception">
                                    <div class="btn-wrapper"><a class="sbu-outline-button sbu-outline-button--on-white arrow-after" href="https://www.flickr.com/photos/sbuadvancement/albums/72157647258884844" target="_blank">View Photos</a></div>
                                </div>
                            </div>
                            <div class="border-box one-third past-reunion">
                                <a class="title" href="https://www.flickr.com/photos/sbuadvancement/albums/72157649230446005">School of Dental Medicine Class of 1984 30th Reunion</a>
                                <span class="date">November 8, 2014</span>
                                <div class="img-wrapper">
                                    <img src="https://farm9.staticflickr.com/8132/15734434156_3713ec50d9_b.jpg" alt="School of Dental Medicine Class of 1984 30th Reunion">
                                    <div class="btn-wrapper"><a class="sbu-outline-button sbu-outline-button--on-white arrow-after" href="https://www.flickr.com/photos/sbuadvancement/albums/72157649230446005" target="_blank">View Photos</a></div>
                                </div>
                            </div>
                            <div class="border-box one-third past-reunion">
                                <a class="title" href="https://www.flickr.com/photos/sbuadvancement/albums/72157644008023503">School of Dental Medicine Greater Long Island Dental Meeting Alumni Reception</a>
                                <span class="date">April 8, 2014</span>
                                <div class="img-wrapper">
                                    <img src="https://farm4.staticflickr.com/3727/13875388803_429025a8f7_b.jpg" alt="School of Dental Medicine Greater Long Island Dental Meeting Alumni Reception">
                                    <div class="btn-wrapper"><a class="sbu-outline-button sbu-outline-button--on-white arrow-after" href="https://www.flickr.com/photos/sbuadvancement/albums/72157644008023503" target="_blank">View Photos</a></div>
                                </div>
                            </div>
                            <!--
                            
                            <div class="border-box clearfix whole center-wrapper">
                                <a class="is-trigger sbu-outline-button sbu-outline-button--red continue-reading-trigger" href="#more-reunions">View all past reunions</a>
                            </div>
                            
                            <div id="more-reunions" class="continue-reading-target hide-accessible">
                                <div class="border-box one-third past-reunion">
                                    <a class="title" href="#">School of Medicine Class of '99 Reunion</a>
                                    <span class="date">October 25-26, 2014</span>
                                    <div class="img-wrapper">
                                        <img src="https://farm4.staticflickr.com/3947/15464623268_f0f6d5a44f_b.jpg" alt="School of Medicine Class of '99 Reunion">
                                        <div class="btn-wrapper"><a class="sbu-outline-button sbu-outline-button--on-white arrow-after" href="#" target="_blank">View Photos</a></div>
                                    </div>
                                </div>
                                <div class="border-box one-third past-reunion">
                                    <a class="title" href="#">School of Medicine Class of '88 Reunion</a>
                                    <span class="date">May 3, 2014</span>
                                    <div class="img-wrapper">
                                        <img src="https://farm6.staticflickr.com/5034/13927655930_8d57b29ed7_b.jpg" alt="School of Medicine Class of '88 Reunion">
                                        <div class="btn-wrapper"><a class="sbu-outline-button sbu-outline-button--on-white arrow-after" href="#" target="_blank">View Photos</a></div>
                                    </div>
                                </div>
                                <div class="border-box one-third past-reunion">
                                    <a class="title" href="#">School of Medicine Class of '99 Reunion</a>
                                    <span class="date">October 19-20, 2013</span>
                                    <div class="img-wrapper">
                                        <img src="https://farm4.staticflickr.com/3808/10591048035_ec46c094e4_b.jpg" alt="">
                                        <div class="btn-wrapper"><a class="sbu-outline-button sbu-outline-button--on-white arrow-after" href="#" target="_blank">View Photos</a></div>
                                    </div>
                                </div>
                            </div>
                            -->
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

    <section class="event-gallery flickr-gallery clearfix no-float-button" data-flickr-id="72157659061097622">
        <div class="border-box wrapper inside-content">
            <h5 class="on-red">Gallery</h5>
            <div class="carousel-wrapper">
                <div id="the-carousel" class="owl-carousel">
                    <!-- Images loaded via AJAX from Flickr -->
                </div>
                <div class="owl-prev owl-prev-3" data-owl-id="the-carousel-3"><em class="fa fa-angle-left"></em></div>
                <div class="owl-next owl-next-3" data-owl-id="the-carousel-3"><em class="fa fa-angle-right"></em></div>
            </div>
            <p><a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://www.flickr.com/photos/sbuadvancement/sets/72157659061097622" target="_blank">View on Flickr</a> <a class="sbu-outline-button sbu-outline-button--on-red arrow-after" href="mailto:alumni@stonybrook.edu" target="_blank">Submit Your Photos</a></p>
        </div>
    </section>


    <section class="clearfix inside-content main-inside-content white-background">
        <div class="border-box wrapper clearfix">
            <div class="whole clearfix">
                <h5 class="on-red">Links and Resources</h5>
                <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://www.facebook.com/groups/StonyBrookSchoolofDentalMedicine" target="_blank">View on Facebook</a>
            </div>
        </div>
    </section>
    
    <section class="clearfix inside-content main-inside-content som-links simple-buttons back-dark-red-crossed">
        <div class="border-box wrapper">
            <div class="btn-wrapper clearfix">
                <a class="simple-button arrow-after" href="http://dentistry.stonybrookmedicine.edu/">School of Dental Medicine</a>
                <a class="simple-button arrow-after" href="http://dentistry.stonybrookmedicine.edu/coned">Continuing Education</a>
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
            <h4>Explore All Chapters &amp; Groups</h4>
            <?php
                $selected_sub_nav = "school-of-dental-medicine";
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