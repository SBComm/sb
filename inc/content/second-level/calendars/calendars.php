<article class="clearfix second-level-header">
    <section class="header-title-image-science page-title">
        <div class="wrapper border-box">
            <h1><a href="academics/">Calendars</a></h1>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content two-col white-background">
        <div class="border-box wrapper clearfix pad-top">
            <div class="content col-2">

                <br /><br />

                <h4>Academic Calendars</h4>
                <p>
                    <ul class="star-bullets star-bullets-red">
                        <li><a href="http://www.stonybrook.edu/registrar/calendar-academic.shtml">Academic Calendars By Semester</a></li>
                        <li><a href="http://www.stonybrook.edu/commcms/registrar/registration/exams.html">Final &amp; Mid-Term Exam Schedule</a></li>
                        <li><a href="https://www.grad.stonybrook.edu/CurrentStudents/calendar.shtml">Graduate School</a></li>
                        <li><a href="http://www.stonybrook.edu/hscstudents/academic_calendar.shtml">Health Sciences Center</a></li>
                        <li><a href="https://cbase.som.sunysb.edu/conet/calendar/stud_mainFrame.cfm?school=Medicine" target="_blank">School of Dental Medicine </a></li>
                        <li><a href="https://cbase.som.sunysb.edu/conet/calendar/stud_mainFrame.cfm?school=Medicine" target="_blank">School of Medicine </a></li>

                    </ul>
                </p>

            </div>
            <div class="content col-2">

                <br /><br />
                <h4>Other Calendars</h4>
                <p>
                    <ul class="star-bullets star-bullets-red">
                        <li><a href="http://www.stonybrook.edu/registrar/univ_cal.shtml">University Calendars 2013-2018</a></li>
                        <li><a href="http://alumniandfriends.stonybrook.edu/page.aspx?pid=299" target="_blank">Alumni</a></li>
                        <li><a href="http://goseawolves.ocsn.com/calendar/events/" target="_blank">Athletics</a></li>
                        <li><a href="http://www.bnl.gov/bnlweb/pubaf/calendar.asp" target="_blank">Brookhaven National Laboratory</a></li>
                        <li><a href="http://www.stonybrook.edu/sb/careercenterguide/2014-15/" target="_blank">Careers</a></li>
                        <li><a href="http://calendar.activedatax.com/sbumc/EventList.aspx?fromdate=2/6/2011&amp;todate=2/19/2011&amp;view=DateTime" target="_blank">Medical Center Events</a></li>
                        <li><a href="http://calendar.activedatax.com/stonybrook/default.aspx?type=1&amp;view=DateTime&amp;category=23-0" target="_blank">Student Life</a></li>
                        <li><a href="http://www.stonybrook.edu/wang/programs/" target="_blank">Wang Center</a></li>

                    </ul>
                </p>
            </div>
        </div>

        <div class="whatsComingUp">
    <div class="wpb_wrapper"> 
        <h2>What&rsquo;s Coming Up?</h2>
        <ul class="clearfix">
            <?php 
                /*
                // PHP will transform event data from RSS feed in following format
                //
                <!--
                <li>
                    <a class="clearfix" href="#">
                        <div class="eventDate"><span class="eventDate_day">14</span><span class="eventDate_month">Sep</span></div>
                        <div class="eventTitle"><span class="item">Art Crawl: A Guided Tour of Campus Galleries</span></div>
                    </a>
                </li>
                -->
                */
                $file  = "feed/active-data-calendar_v2.php";
                $rss   = "http://calendar.activedatax.com/stonybrook/RSSSyndicator.aspx?type=N&category=43-0&ihc=y&sortorder=ASC";
                $count = 8;
                $end = 8;
                include($path . $file);
            ?>
        </ul>
        <p class="jumpAwayLink"><a href="<?php echo $sbu_site_url['calendar_next_month']; ?>">See All Events&nbsp;<i class="fa fa-long-arrow-right"></i></a></p>
    </div><!-- /.wpb_wrapper -->    
</div>

    </section>

    <?php
        $campaignColor = "black";
        $file = "widgets/campaign-banner.php";
        include($path . $file);
    ?>

</article>

