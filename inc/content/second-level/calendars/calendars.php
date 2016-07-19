<article class="clearfix second-level-header">
    <section class="header-title-image-wang page-title">
        <div class="wrapper border-box">
            <h1><a href="calendars/">Calendars</a></h1>
        </div>
    </section>
    <section class="clearfix">

        <div class="white-bkg">
            <div class="wrapper clearfix"> 
                <h2 class="clearfix">Dates and Deadlines</h2>
                <ul class="four-buttons clearfix">
                    <li><a class="brand-button external-link-hover" href="http://www.stonybrook.edu/registrar/calendar-academic.shtml" target="_blank">Academic Calendar</a></li>
                    <li><a class="brand-button external-link-hover" href="http://www.stonybrook.edu/commcms/registrar/registration/exams.html" target="_blank">Exam Schedules</a></li>
                    <li><a class="brand-button external-link-hover" href="http://goseawolves.ocsn.com/calendar/events/" target="_blank">Athletics Calendar</a></li>
                    <li><a class="brand-button external-link-hover" href="http://calendar.activedatax.com/sbumc/EventList.aspx?fromdate=2/6/2011&amp;todate=2/19/2011&amp;view=DateTime" target="_blank">Medical Center</a></li>
                </ul>
                <?php
                    /* Apply flow, saving for home 2.0, if that ever comes. ran into issues with how the schools are devided, namely grad vs spd and hsc as its own entity. for now simply linking to the admissions page */
                    /*
                    <ul class="clearfix">
                        <li class="btn"><a href="">Visit us</a></li>
                        <li class="btn"><a href="">Take a virtual tour</a></li>
                        <li class="btn"><a class="apply-form-trigger" href="http://www.stonybrook.edu/admissions/">Apply</a></li>
                    </ul>
                    <div class="apply-form apply-form-1 clearfix hide-accessible">
                        <h3 class="clearfix"><span>Take the next step to greatness.</span></h3>
                            <h4 class="clearfix"><span>Which best describes you?</span></h4>
                        <ul class="clearfix">
                            <li class="btn"><a href="">Undergraduate</a></li>
                            <li class="btn"><a href="">Graduate</a></li>
                            <li class="btn"><a href="">Health Sciences</a></li>
                            <li class="btn"><a href="">School of Professional Development</a></li>
                        </ul>
                        <!--
                        <div class="apply-form clearfix">
                            <h4 class="clearfix"><span>What level?</span></h4>
                            <ul class="clearfix">
                            <li class="btn"><a href="">Freshman</a></li>
                            <li class="btn"><a href="">Transfer</a></li>
                            <li class="btn"><a href="">International</a></li>
                            <li class="btn"><a href="">Second Degree</a></li>
                            <li class="btn"><a href="">Readmission</a></li>
                            </ul>
                        </div>
                        -->
                    </div>
                    */ 
                ?>
            </div><!-- /.wrapper -->
        </div><!-- /.white-bkg -->

        <div class="events-widget events-widget--on-red rays-bkg rays-bkg--red rays-bkg--red--1">
            <div class="wrapper clearfix"> 
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
                <p class="jump-away-link"><a href="<?php echo $sbu_site_url['calendar_next_month']; ?>">See All Events&nbsp;<i class="fa fa-long-arrow-right"></i></a></p>
            </div><!-- /.wrapper -->
        </div><!-- /.events-widget -->

    </section>

    <?php
        $campaignColor = "black";
        $file = "widgets/campaign-banner.php";
        include($path . $file);
    ?>

</article>

