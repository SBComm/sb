<article>
    <section class="clearfix site-carousel inside-header info-for white-background">
        <div class="border-box">
            <div class="carousel-wrapper">
                <div id="the-carousel-1" class="owl-carousel carousel-style-03">
                    <div class="item">
                        <div class="carousel-image clearfix" data-image="01"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clearfix inside-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <header class="section-header clearfix">
                <?php
                    $selected_sub_nav = 1;
                    $file = "undergraduate-admissions/info-for/application-status/application-status-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <h3>Check Your Application Status</h3>
            <div class="content">
                <h4>Using the SOLAR System</h4>
                <p>Within two weeks of submitting your application for admission to Stony Brook University, we will send you your Stony Brook ID number and a temporary password, which you will need when logging into Stony Brook's secure <a class="external-link" href="http://it.stonybrook.edu/services/solar" target="_blank">SOLAR System</a> to check your application status. You will be prompted to change your password when logging into SOLAR for the first time.</p>
                <p>When you log in, you will be able to view whether or not your application is complete and your current application status. Decisions displayed on SOLAR reflect general admission to the University, not to a specific major or honors program. Information regarding admission to majors will be included in your letter of admission. Notification of admission to honors programs do not appear in SOLAR and are typically sent in mid-March for Fall freshman applicants.</p>

                <h4>To Do List</h4>
                <p>Your To Do List, located on the bottom left of your SOLAR homepage, will display items which are currently needed by the Admissions Committee. Items already received will not appear on the To Do List. Documents sent within the past two weeks will not appear as received. Once items are received, they will disappear from your To Do List. Please be patient and allow several weeks for processing before contacting the Admissions Office to check on the status of an item already sent.</p>

                <h4>Freshman: Priority Deadlines and Notification Schedule</h4>
                <?php
                    $file = "undergraduate-admissions/deadlines/freshman-deadlines.php";
                    include($path . $content . $secLv . $file);
                ?>

                <h4>Transfer: Priority Deadlines and Notification Schedule</h4>
                <?php
                    $file = "undergraduate-admissions/deadlines/transfer-deadlines.php";
                    include($path . $content . $secLv . $file);
                ?>
                <p>Applications or credentials received after these dates will be reviewed on a space-available basis. It is each applicant's responsibility to ensure that all credentials are received. Space in our class is limited.</p>
                <p><em>International applicants follow a separate notification schedule. Fall international applicant credentials are due March 1.</em></p>
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