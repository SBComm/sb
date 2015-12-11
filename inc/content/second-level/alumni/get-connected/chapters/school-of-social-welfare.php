<article class="get-connected alumni-chapter hsc-alums inside-page">
    <section class="clearfix center-rule-header events-header inside-header">
        <div class="border-box">
            <h2><a href="alumni/chapters/hsc-alums">HSC Alums</a></h2>
        </div>
    </section>
    
    <section class="clearfix inside-content main-inside-content white-background">
        <div class="border-box wrapper clearfix">
            <?php
                $selected_sub_nav = "school-of-social-welfare";
                $file = "widgets/alumni/alumni-hsc-buttons.php";
                include($path . $file);
            ?>
        </div>
        <div class="border-box whole clearfix">
            <h3 class="serif">School of <span>Social Welfare</span> Alumni Chapter</h3>
        </div>
        <div class="border-box wrapper clearfix">
            <div class="content">
                <div class="border-box whole intro-letter">
                    <img class="inline-with-copy" src="img/university/hsc-small-portrait-1.jpg" alt="Health Science Center" />
                    <h4>Message from the Chapter President</h4>
                    <p><strong>Dear School of Social Welfare Graduates:</strong></p>
                    </p>
                    <p>As the President of the School of Social Welfare Alumni Board, it is my pleasure to periodically reach out to you and bring you up to date on our activities.</p>
                    <p>Our mission is to support the development of the School of Social Welfare and Stony Brook University, by serving as ambassadors to the School’s alumni, by promoting a sense of community and belonging among current students and alumni, by offering opportunities for alumni to engage with each other, and to further the goals of the School of Social Welfare.</p>
                    <p>You may not be aware of this, but by virtue of being a graduate of the School, you are automatically a member of the Alumni Association of Stony Brook University and the School of Social Welfare Alumni Chapter.</p>
                    <p>The Board is looking to connect current Stony Brook students with the alumni with a Career Day and by networking.</p>
                    <a class="is-trigger sbu-outline-button sbu-outline-button--red continue-reading-trigger" href="#letter">Continue Reading...</a>
                    <div id="letter" class="continue-reading-target hide-accessible">
                        <p>And as always, our faculty continues to excel in research, teaching and clinical practice. As Stony Brook expands, it gives us even more reason to be proud of our school and its traditions.</p>
                        <p>We welcome your involvement in any of the following ways:</p>
                        <ul class="default-bullets">
                            <li><a href="alumni/form/send-us-your-news/" target="_blank">Keep us updated</a> on you and your classmates &#8212; news about your career, life events and any other information you would like to share with your fellow alumni</li>
                            <li>Join us at any or all of the upcoming events featured on our website</li>
                            <li>Become a member of a committee or the board</li>
                            <li><a href="#gifts">Consider a gift</a> to support the School</li>
                        </ul>
                        <p>Your SSW Alumni Board is a dynamic group of colleagues who are smart, creative and fun.</p>
                        <p>Please feel free to contact either Mary Hoffmann at <a href="mailto:Hoffmann@stonybrook.edu" target="_blank">Mary.Hoffmann@stonybrook.edu</a>, or me at <a href="mailto:Janice.Rohlf@connect.stonybrook.edu" target="_blank">Janice.Rohlf@connect.stonybrook.edu</a> for additional information or to offer your suggestions and comments regarding the School of Social Welfare Alumni board and alumni activities.</p>
                        <p>Sincerely,<br />
                        Janice Rohlf, MSW ’82, CSW<br />
                        President</p>
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
                                $rss   = "http://sb.cc.stonybrook.edu/happenings/feed/?cat=46,39";
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
                                    $rss   = "http://calendar.activedatax.com/stonybrook/RSSSyndicator.aspx?category=8-61";
                                    $count = 2;
                                    $end = 2;
                                    $no_results_text = 'Hm... It seems that there are no events scheduled for this chapter at the moment. Check back soon as we\'re always adding more, or <a href="http://calendar.activedatax.com/stonybrook/default.aspx?type=&view=Category&category=8-0&numdays=180">view all alumni events</a>.';
                                    include($path . $file);
                                ?>
                            </div>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://calendar.activedatax.com/stonybrook/default.aspx?type=&amp;view=Category&amp;category=8-61&amp;numdays=180" target="_blank">View All Events</a>
                        </div>
                    </div>
                    <div class="border-box whole clearfix section-border-top daa">
                        <h4>Distinguished Alumni Awards</h4>
                        <div class="whole clearfix">
                            <h4 class="on-red clearfix">Coming Soon!</h4>
                            <p>The Distinguished Alumni Awards program is coming to the School of Social Welfare. Stay tuned!</p>
                        <!--
                            <h4 class="on-red clearfix">2015 School of Medicine Award Recipient</h4>
                            <img class="inline-with-copy" src="img/alumni/daa/bernstein.jpg" alt="Portrait of David Bernstein" />
                            <p>David Bernstein, MD '88 received the 2015 School of Medicine Distinguished Alumni Award at the School's annual White Coat Ceremony on August 23, 2015. Recognized as one of the best doctors by Castle-Connelly since 2006, Dr. Bernstein is a national and international leader in the field of liver diseases. His research has led to the development of new medications which are able to cure more than 95% of patients with hepatitis C infection and in the future could lead to the eradication of hepatitis C infection in the United States.</p>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://sb.cc.stonybrook.edu/happenings/alumni/2015-school-of-medicine-distinguished-alumni-award-recipient/" target="_blank">View Story</a>
                        </div>
                        <div class="whole clearfix">
                            <p>View the complete list of Distinguished Alumni and Outstanding Recent Graduate Award recipients, or nominate someone today.</p>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="#" target="_blank">See all recipients</a>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="alumni/form/medicine-distinguished-alumni-nomination" target="_blank">Nominate an alum</a>
                        </div>
                        -->
                    </div>
                    <div class="border-box whole clearfix section-border-top">
                        <div class="border-box one-half padding-box">
                            <h4>School of Medicine Alumni Board</h4>
                            <h5 class="on-red">Board Members</h5>
                            <div class="drop-accordion drop-accordion-1 clearfix">
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Dean Jacqueline Mondros</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Dean Jacqueline Mondros</strong><br />
                                                Ex-Officio<br />
                                                <a class="email-link" href="mailto:Jacqueline.mondros@stonybrook.edu">Jacqueline.mondros@stonybrook.edu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Janice Rohlf, MSW '89</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Janice Rohlf, MSW '89</strong><br />
                                                President<br />
                                                <a class="email-link" href="mailto:Janice.rohlf@connect.stonybrook.edu">Janice.rohlf@connect.stonybrook.edu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Sam Taube, PhD, MSW '83</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Sam Taube, PhD, MSW '83</strong><br />
                                                Vice President<br />
                                                <a class="email-link" href="mailto:stshrink@aol.com">stshrink@aol.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Shardae Hale, BS ’13, MSW '14</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Shardae Hale, BS ’13, MSW '14</strong><br />
                                                Secretary/Treasurer<br />
                                                <a class="email-link" href="mailto:mshale14@aol.com">mshale14@aol.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Josie Aquino, MSW '03</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Josie Aquino, MSW '03</strong><br />
                                                <a class="email-link" href="mailto:Josieaquino71@gmail.com">Josieaquino71@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Onaje Muid, MSW '04</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Onaje Muid, MSW '04</strong><br />
                                                <a class="email-link" href="mailto:muidmsw@gmail.com">muidmsw@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Jenette Bon Adams, MSW '11</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Jenette Bon Adams, MSW '11</strong><br />
                                                <a class="email-link" href="mailto:nettybon@hotmail.com">nettybon@hotmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Bertha Murphy, MSW '85</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Bertha Murphy, MSW '85</strong><br />
                                                <a class="email-link" href="mailto:bmu3076934@aol.com">bmu3076934@aol.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Bart Davis, MSW '76</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Bart Davis, MSW '76</strong><br />
                                                <a class="email-link" href="mailto:author@optonline.net">author@optonline.net</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Mary Beth Powers, MSW '02</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Mary Beth Powers, MSW '02</strong><br />
                                                <a class="email-link" href="mailto:Mary.b.powers@stonybrook.edu">Mary.b.powers@stonybrook.edu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Nathan (Nate) Dukes, MSW '74</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Nathan (Nate) Dukes, MSW '74</strong><br />
                                                <a class="email-link" href="mailto:bubbanathandukes@hotmail.com">bubbanathandukes@hotmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Jeffrey Reynolds, PhD '07</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Jeffrey Reynolds, PhD '07</strong><br />
                                                <a class="email-link" href="mailto:jreynolds@familyandchildrens.org">jreynolds@familyandchildrens.org</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Linda Hobson Heath, MSW '08</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Linda Hobson Heath, MSW '08</strong><br />
                                                <a class="email-link" href="mailto:linhobson@aol.com">linhobson@aol.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Ann Rudolph, MSW '87</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Ann Rudolph, MSW '87</strong><br />
                                                <a class="email-link" href="mailto:amrlcswr@gmail.com">amrlcswr@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Jackie Zuckerman, MSW '84</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Jackie Zuckerman, MSW '84</strong><br />
                                                <a class="email-link" href="mailto:jackiez@optonline.net">jackiez@optonline.net</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Mary Hoffmann, MA/HEA '14</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Mary Hoffmann, MA/HEA '14</strong><br />
                                                <a class="email-link" href="mailto:Mary.hoffmann@stonybrook.edu">Mary.hoffmann@stonybrook.edu</a><br />
                                                631-632-4995 (w)<br />
                                                631-291-5135 (c)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-box one-half padding-box news-feature">
                            <div class="clearfix host">
                                <h4>Help Our Students</h4>
                                <p>Participate in one of our several School of Social Welfare alumni committees, including the student affairs, mentoring, scholarship and nominating committees.</p>
                                <p>Contact Mary Hoffmann at (631) 632-4995 or <a href="mailto:Hoffmann@stonybrook.edu" target="_blank">Mary.Hoffmann@stonybrook.edu</a> if you are interested in joining.</p>
                            </div>
                        </div>
                    </div>
                    <div id="gifts" class="border-box whole clearfix section-border-top give-back">
                        <div class="one-third">
                            <img src="https://farm6.staticflickr.com/5809/21169201513_7395016769_z.jpg" alt="Group Shot of Alumni" />
                        </div>
                        <div class="two-third">
                            <h4>Give Back</h4>
                            <p>There are a variety of ways for you to support Stony Brook's Alumni Funds:</p>
                            <p><a href="https://alumniandfriends.stonybrook.edu/main-site/external/frances-l.-brisbane-endowed-fund-for-leadership-and-justice" target="_blank">Frances L. Brisbane Endowed Fund for Leadership and Justice</a></p>
                        </div>
                    </div>
                    <div class="border-box whole clearfix past-reunions">
                    <!--
                        <h4>Past Reunions</h4>
                        <div class="whole clearfix">
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
                        </div>
                        -->
                        <div class="whole clearfix center-wrapper section-border-top margin-top">
                            <p>Want to volunteer to plan your own class reunion?</p>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="alumni/form/volunteer" target="_blank">Volunteer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="event-gallery flickr-gallery clearfix no-float-button" data-flickr-id="72157658888443128">
        <div class="border-box wrapper inside-content">
            <h5 class="on-red">Gallery</h5>
            <div class="carousel-wrapper">
                <div id="the-carousel" class="owl-carousel">
                    <!-- Images loaded via AJAX from Flickr -->
                </div>
                <div class="owl-prev owl-prev-3" data-owl-id="the-carousel-3"><em class="fa fa-angle-left"></em></div>
                <div class="owl-next owl-next-3" data-owl-id="the-carousel-3"><em class="fa fa-angle-right"></em></div>
            </div>
            <p><a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://www.flickr.com/photos/sbuadvancement/sets/72157658888443128" target="_blank">View on Flickr</a> <a class="sbu-outline-button sbu-outline-button--on-red arrow-after" href="mailto:alumni@stonybrook.edu" target="_blank">Submit Your Photos</a></p>
        </div>
    </section>


    <section class="clearfix inside-content main-inside-content white-background">
        <div class="border-box wrapper clearfix">
            <div class="whole clearfix">
                <h5 class="on-red">Links and Resources</h5>
                <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://www.facebook.com/StonyBrookSSWalumni" target="_blank">View on Facebook</a>
            </div>
        </div>
    </section>
    
    <section class="clearfix inside-content main-inside-content som-links simple-buttons back-dark-red-crossed">
        <div class="border-box wrapper">
            <div class="btn-wrapper clearfix">
                <a class="simple-button arrow-after" href="http://socialwelfare.stonybrookmedicine.edu/">School of Social Welfare</a>
                <a class="simple-button arrow-after" href="http://socialwelfare.stonybrookmedicine.edu/trainings_conf">Continuing Education</a>
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
                $selected_sub_nav = "school-of-social-welfare";
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