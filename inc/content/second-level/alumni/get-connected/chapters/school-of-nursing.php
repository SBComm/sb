<article class="get-connected alumni-chapter hsc-alums inside-page hsc">
    <section class="clearfix center-rule-header events-header inside-header">
        <div class="border-box">
            <h2><a href="alumni/chapters/hsc-alums">HSC Alums</a></h2>
        </div>
    </section>
    
    <section class="clearfix inside-content main-inside-content white-background">
        <div class="border-box whole clearfix">
            <h3 class="serif">School <em>of</em> <span>Nursing</span> <br />Alumni Chapter</h3>
        </div>
        <div class="border-box wrapper clearfix">
            <div class="content">
                <div class="border-box whole intro-letter">
                    <img class="inline-with-copy" src="img/university/hsc-small-portrait-1.jpg" alt="Health Science Center" />
                    <h4>Welcome, School of Nursing Alums!</h4>
                    <p><strong>Dear School of Nursing Grads,</strong></p>
                    </p>
                    <p>Serving as President of the Stony Brook School of Nursing Alumni Board for the past two years has been both gratifying and challenging. Our mission has always been to build a strong and lasting relationship with our present and future alums by providing support for our current students and advancing the interests of professionalism in Nursing. With the support of the Board members many goals have been met.</p>
                    <p>Over the past two years we have:</p>
                    <ul class="default-bullets">
                        <li>Continued to expand and strengthen the "Lunch and Learn" program which is a bi-annual event for students which first addresses stress and relaxation and then transitioning from the role of the student to the role of a professional nurse.</li>
                        <li>Developed a mentoring program to support new graduates as they navigate the demanding role of practicing as a professional nurse.</li>
                        <li>Created an <a href="http://alumniandfriends.stonybrook.edu/document.doc?id=371&erid=18036104&trid=657fb88c-fdcb-4ef5-aa5c-09b6c2ad8242" target="_blank">inaugural e-Newsletter</a> which will address topics of interest for both the student and the alumni with a number of photos. (We think you will be pleased with its presentation!)</li>
                        <li>Collaborated with the Department of Continuing Education to present an educational opportunity to earn continuing education credits. We plan on this being a bi-annual event.</li>
                    </ul>
                    <p>But we still need you to get involved!</p>
                    <a class="is-trigger sbu-outline-button sbu-outline-button--red continue-reading-trigger" href="#letter">Continue Reading...</a>
                    <div id="letter" class="continue-reading-target hide-accessible">
                        <p>You can get connected in one of the following ways:</p>
                        <ul class="default-bullets">
                            <li><a href="alumni/form/send-us-your-news/" target="_blank">Keeping us updated</a> on you and your classmates &#8212; news about your career, life events and any other information you would like to share with your fellow alumni</li>
                            <li>Joining us at one of our upcoming events</li>
                            <li>Participating in our <a href="#host-program">HOST (Help Our Students Travel)</a> program</li>
                            <li>Becoming a Board Member or Committee Member</li>
                            <li>Considering a gift to support <a href="https://alumniandfriends.stonybrook.edu/sslpage.aspx?pid=410&amp;fid=DWFb9wy4WY8%3d&amp;fdesc=Zu5RIlZ7RXfBvbzK80ikMkNSJRqLZkEj9WoINEQ5Gq8%3d">The Nursing Student Scholarship Fund</a></li>
                        </ul>
                        <p>The SON Alumni Board is a dynamic group of colleagues who are smart, creative and fun. Join us as good things are happening for your Stony Brook School of Nursing and for you, a Stony Brook School of Nursing alum.</p>
                        <p>Please feel free to contact either Mary Hoffmann at <a href="mailto:mary.hoffmann@stonybrook.edu" target="_blank">mary.hoffmann@stonybrook.edu</a> or me at <a href="mailto:jberpat2@aol.com" target="_blank">jberpat2@aol.com</a> for additional information or to sign up.</p>
                        <p>Patricia B. Jacobowitz BS '79, MS '86, DNP '09<br />
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
                                $rss   = "http://sb.cc.stonybrook.edu/happenings/feed/?cat=53,40";
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
                                    $rss   = "http://calendar.activedatax.com/stonybrook/RSSSyndicator.aspx?category=8-60";
                                    $count = 2;
                                    $end = 2;
                                    $no_results_text = 'Hm... It seems that there are no events scheduled for this chapter at the moment. Check back soon as we\'re always adding more, or <a href="http://calendar.activedatax.com/stonybrook/default.aspx?type=&view=Category&category=8-0&numdays=180">view all alumni events</a>.';
                                    include($path . $file);
                                ?>
                            </div>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://calendar.activedatax.com/stonybrook/default.aspx?type=&amp;view=Category&amp;category=8-60&amp;numdays=180" target="_blank">View All Events</a>
                        </div>
                    </div>
                    <div class="border-box whole clearfix section-border-top daa">
                        <h4>Distinguished Alumni Awards</h4>
                        <div class="whole clearfix">
                            <h4 class="on-red clearfix">2015 School of Nursing Award Recipient</h4>
                            <img class="inline-with-copy" src="img/alumni/daa/mills-2.jpg" alt="Portrait of ​Barbara M. Mills" />
                            <p>​Barbara M. Mills, DNP ’09 is the recipient of the 2015 School of Nursing Distinguished Alumni Award. Dr. Mills has made and continues to make significant contributions to the profession of Nursing through outstanding practice, research and community involvement. She has transformed the <a href="http://www.stonybrookmedicine.edu/patientcare/QualityandSafety/patientsafety/rapid_response_team" target="_blank">Rapid Response</a> program at Stony Brook University Hospital to one that is imitated throughout the nation. Dr. Mills will be honored for her accomplishments and offer the keynote address during an all-day symposium on April 1, 2016.</p>
                            <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://sb.cc.stonybrook.edu/happenings/alumni/school-of-nursing-2015-distinguished-alumni-award-recipient-announced/" target="_blank">View Story</a>
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
                            <h4>School of Nursing Alumni Board</h4>
                            <h5 class="on-red">Board Members</h5>
                            <div class="drop-accordion drop-accordion-1 clearfix">
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Patricia B. Jacobowitz BS '79, MS '86, DNP '09</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Patricia B. Jacobowitz BS '79, MS '86, DNP '09</strong><br />
                                                President<br />
                                                <a class="email-link" href="jberpat2@aol.com">jberpat2@aol.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Margaret M. Kelly BS '77, MA</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Margaret M. Kelly BS '77, MA</strong><br />
                                                Secretary/Treasurer<br />
                                                <a class="email-link" href="mmk17@optonline.net">mmk17@optonline.net</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Janice Fleischman-Eaton BS/MS '08</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Janice Fleischman-Eaton BS/MS '08</strong><br />
                                                Nominations Committee Chair<br />
                                                <a class="email-link" href="Janice.Fleischman-Eaton@stonybrookmedicine.edu">Janice.Fleischman-Eaton@stonybrookmedicine.edu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Antoinette (Tonie) Forster MS '99, DNP '09</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Antoinette (Tonie) Forster MS '99, DNP '09</strong><br />
                                                SBU Campus Representative<br />
                                                <a class="email-link" href="Bronie2@aol.com">Bronie2@aol.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Elisa Mancuso, BS '86, MS '88</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Elisa Mancuso, BS '86, MS '88</strong><br />
                                                Immediate Past-President<br />
                                                <a class="email-link" href="mancuse@sunysuffolk.edu">mancuse@sunysuffolk.edu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Marret Anderson MS '13</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Marret Anderson MS '13</strong><br />
                                                At-Large Members<br />
                                                <a class="email-link" href="Marret.Anderson@stonybrookmedicine.edu">Marret.Anderson@stonybrookmedicine.edu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>D. Bonnie Astor BS ’73, MSN</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>D. Bonnie Astor BS ’73, MSN</strong><br />
                                                <a class="email-link" href="Dayarao@comcast.net">Dayarao@comcast.net</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Ronn M. Callada BS ’09, MS '13</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Ronn M. Callada BS ’09, MS '13</strong><br />
                                                <a class="email-link" href="rcallada@gmail.com">rcallada@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Derek Cope BSN '14</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Derek Cope BSN '14</strong><br />
                                                <a class="email-link" href="derek.cope@stonybrook.edu">derek.cope@stonybrook.edu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Charlie Davis BS '14</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Charlie Davis BS '14</strong><br />
                                                <a class="email-link" href="charles.davis@stonybrook.edu">charles.davis@stonybrook.edu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Beverly Dean '96, DNP '09</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Beverly Dean '96, DNP '09</strong><br />
                                                <a class="email-link" href="Bevdean1@yahoo.com">Bevdean1@yahoo.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Tracy Dourdounas MS '09</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Tracy Dourdounas MS '09</strong><br />
                                                <a class="email-link" href="Tracy.dourdounas@stonybrookmedicine.edu">Tracy.dourdounas@stonybrookmedicine.edu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Debra Grimm BS '04</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Debra Grimm BS '04</strong><br />
                                                <a class="email-link" href="debra.grimm@stonybrookmedicine.edu">debra.grimm@stonybrookmedicine.edu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Thomas L. Hardie EdD, RN '82, MS '86</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Thomas L. Hardie EdD, RN '82, MS '86</strong><br />
                                                <a class="email-link" href="Hardiet@nursing.upenn@edu">Hardiet@nursing.upenn@edu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Stacy L. Heuschneider, RN, BSN '06, MS '10, DNP '14</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Stacy L. Heuschneider, RN, BSN '06, MS '10, DNP '14</strong><br />
                                                <a class="email-link" href="Stacy.Heuschneider@stonybrookmedicine.edu">Stacy.Heuschneider@stonybrookmedicine.edu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Diane Hitchings-Tiernan, BS '72, MS, PD, LMFT</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Diane Hitchings-Tiernan, BS '72, MS, PD, LMFT</strong><br />
                                                <a class="email-link" href="dmdt46@yahoo.com">dmdt46@yahoo.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Gary Jambor BS '13</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Gary Jambor BS '13</strong><br />
                                                <a class="email-link" href="gary.jambor@gmail.com">gary.jambor@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Samara Kravitz BS '15</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Samara Kravitz BS '15</strong><br />
                                                <a class="email-link" href="samarakravitz@gmail.com">samarakravitz@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Debra Mendolia BS/MS '09</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Debra Mendolia BS/MS '09</strong><br />
                                                <a class="email-link" href="dmendolia@ddiny.org">dmendolia@ddiny.org</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Gene Mundie MS '01</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Gene Mundie MS '01</strong><br />
                                                <a class="email-link" href="Gene.Mundie@stonybrook.edu">Gene.Mundie@stonybrook.edu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Carlo Piraino BS '91</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Carlo Piraino BS '91</strong><br />
                                                <a class="email-link" href="Carlo_Piraino@yahoo.com">Carlo_Piraino@yahoo.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Smitha Mary Thotam MS, '11 ANP</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Smitha Mary Thotam MS, '11 ANP</strong><br />
                                                <a class="email-link" href="smithathotam@yahoo.com">smithathotam@yahoo.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="on-red">Student Representatives</h5>
                            <div class="drop-accordion drop-accordion-1 clearfix">
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Adriann Combs</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Adriann Combs</strong><br />
                                                Graduate Student<br />
                                                <a class="email-link" href="Adriann Combs - Graduate Student">Adriann.Combs@stonybrook.edu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Tiffany Gallucci</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Tiffany Gallucci</strong><br />
                                                Graduate Student<br />
                                                <a class="email-link" href="Tiffany.Gallucci@stonybrook.edu">Tiffany.Gallucci@stonybrook.edu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Emily Cheng</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Emily Cheng</strong><br />
                                                Undergraduate Student<br />
                                                <a class="email-link" href="Emily.Cheng@stonybrook.edu">Emily.Cheng@stonybrook.edu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="on-red">Ex-Officio</h5>
                            <div class="drop-accordion drop-accordion-1 clearfix">
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Dr. Lee Xippolitos BS ’81, MS ’85</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Chief Nursing Officer,</strong><br />
                                                Dean, School of Nursing<br />
                                                631-444-2780<br />
                                                <a class="email-link" href="Lee.Xippolitos@stonybrook.edu">Lee.Xippolitos@stonybrook.edu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="on-red">Board Liaisons</h5>
                            <div class="drop-accordion drop-accordion-1 clearfix">
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Mary Hoffmann</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Mary Hoffmann</strong><br />
                                                <a class="email-link" href="Mary.Hoffmann@stonybrook.edu">Mary.Hoffmann@stonybrook.edu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="tab">
                                        <span class="label"><i class="fa fa-plus-circle"></i>Pura Capone</span>
                                    </div>
                                    <div class="content clearfix hide-accessible">
                                        <div class="content-wrap">
                                            <p>
                                                <strong>Pura Capone</strong><br />
                                                <a class="email-link" href="Pura.Capone@stonybrookmedicine.edu">Pura.Capone@stonybrookmedicine.edu</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-box one-half padding-box news-feature equal-height-col-desktop">
                            <div class="clearfix host">
                                <h4 id="host-program">School of Nursing Alumni Mentoring Program</h4>
                                <p>Members of the School of Nursing Alumni Board will mentor Stony Brook School of Nursing recent graduates (graduates of the last five years) as part of the School of Nursing Alumni Mentoring Program. The volunteer alumni mentors are 'assigned' a mentee, who has been selected for the program, in order to provide meaningful support, increase the grad's knowledge of the occupation and ease their transition from nursing school to career.</p>
                                <p>Are you an alum who is interested in volunteering? Are you a student who wants to connect with an alumni volunteer?</p>
                                <p>If you have any questions, please contact Mary Hoffmann at 631-632-4995 or <a href="mailto:mary.hoffmann@stonybrook.edu" target="_blank">mary.hoffmann@stonybrook.edu</a>.</p>
                                <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="alumni/form/nursing-mentoring-program" target="_blank">Get More Information</a>
                            </div>
                            <div class="clearfix section-border-top">
                                <h4>Academic and Clinical Success</h4>
                                <p>You can play a part in shaping the academic and clinical success of the next generation of Registered &amp; Advanced Practice Nurses.</p>
                                <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://stonybrookuniversity.co1.qualtrics.com/jfe/form/SV_7ZYeAKUWFrx2Ln7" target="_blank">Get More Information</a>
                            </div>
                        </div>
                    </div>
                    <div class="border-box whole clearfix section-border-top give-back margin-top">
                        <div class="one-third">
                            <img src="https://farm8.staticflickr.com/7087/7261976022_e0c46d6730_z.jpg" alt="Group Shot of Nursing Alumni" />
                        </div>
                        <div class="two-third">
                            <h4>Give Back</h4>
                            <p>You can play an important part in supporting Stony Brook's alumni funds:</p>
                            <p><a href="https://alumniandfriends.stonybrook.edu/sslpage.aspx?pid=410&amp;fid=DWFb9wy4WY8%3d&amp;fdesc=Zu5RIlZ7RXfBvbzK80ikMkNSJRqLZkEj9WoINEQ5Gq8%3d" target="_blank">The Nursing Student Scholarship Fund</a></p>
                        </div>
                    </div>
                    <div class="border-box whole clearfix past-reunions">
                        <h4>Past Reunions</h4>
                        <div class="whole clearfix">
                            <div class="border-box one-third past-reunion">
                                <a class="title" href="https://www.flickr.com/photos/sbuadvancement/sets/72157649161620536">School of Nursing DNP 5th Year Celebration</a>
                                <span class="date">November 8, 2015</span>
                                <div class="img-wrapper">
                                    <img src="https://farm6.staticflickr.com/5609/15572074910_7fd18c3c29_b.jpg" alt="School of Nursing DNP 5th Year Celebration">
                                    <div class="btn-wrapper"><a class="sbu-outline-button sbu-outline-button--on-white arrow-after" href="https://www.flickr.com/photos/sbuadvancement/sets/72157649161620536" target="_blank">View Photos</a></div>
                                </div>
                            </div>
                            <!--
                            
                            <div class="border-box clearfix whole center-wrapper">
                                <a class="is-trigger sbu-outline-button sbu-outline-button--red continue-reading-trigger" href="#more-reunions" data-target="#more-reunions">View all past reunions</a>
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

    <section class="event-gallery flickr-gallery clearfix no-float-button" data-flickr-id="72157658676741778">
        <div class="border-box wrapper inside-content">
            <h5 class="on-red">Gallery</h5>
            <div class="carousel-wrapper">
                <div id="the-carousel" class="owl-carousel">
                    <!-- Images loaded via AJAX from Flickr -->
                </div>
                <div class="owl-prev owl-prev-3" data-owl-id="the-carousel-3"><em class="fa fa-angle-left"></em></div>
                <div class="owl-next owl-next-3" data-owl-id="the-carousel-3"><em class="fa fa-angle-right"></em></div>
            </div>
            <p><a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://www.flickr.com/photos/sbuadvancement/sets/72157658676741778" target="_blank">View on Flickr</a> <a class="sbu-outline-button sbu-outline-button--on-red arrow-after" href="mailto:alumni@stonybrook.edu" target="_blank">Submit Your Photos</a></p>
        </div>
    </section>


    <section class="clearfix inside-content main-inside-content white-background">
        <div class="border-box wrapper clearfix">
            <div class="whole clearfix">
                <h5 class="on-red">Links and Resources</h5>
                <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://www.facebook.com/SBUNursingAlum/" target="_blank">View on Facebook</a>
                <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://alumniandfriends.stonybrook.edu/document.doc?id=371&amp;erid=18036104&amp;trid=657fb88c-fdcb-4ef5-aa5c-09b6c2ad8242" target="_blank">View e-Newsletter</a>
            </div>
        </div>
    </section>
    
    <section class="clearfix inside-content main-inside-content som-links simple-buttons back-dark-red-crossed">
        <div class="border-box wrapper">
            <div class="btn-wrapper clearfix">
                <a class="simple-button arrow-after" href="http://nursing.stonybrookmedicine.edu/">School of Nursing</a>
                <a class="simple-button arrow-after" href="http://nursing.stonybrookmedicine.edu/ContinuingEducation">Continuing Education</a>
            </div>
            <div class="btn-wrapper btn-wrapper-middle clearfix">
                <a class="give-button" href="https://alumniandfriends.stonybrook.edu/site/SPageNavigator/CustomDonationForm_Main.html">
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
                $selected_sub_nav = "school-of-nursing";
                $file = "alumni/get-connected/chapters-nav-dropdown.php";
                include($pathForContent . $content . $secLv . $file);
            ?>
            </div>
        </div>
    </section>

    <section class="clearfix inside-content main-inside-content white-background">
        <div class="border-box wrapper clearfix">
            <?php
                $selected_sub_nav = "school-of-nursing";
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