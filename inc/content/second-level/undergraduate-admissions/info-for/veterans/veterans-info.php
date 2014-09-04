<article>
    <section class="clearfix site-carousel inside-header freshman-criteria white-background">
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
                    $file = "undergraduate-admissions/info-for/veterans/veterans-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <h3>Information for Veterans</h3>
            <div class="content">
                <p>Named to Victory Media’s Military Friendly Schools list, Stony Brook is committed to providing a supportive environment for veterans and military students.</p>
                <h4>Application Support</h4>
                <p>Veterans are encouraged to apply in a similar fashion to other applicants, as either a freshman or transfer student. On your application, please indicate your military background. An admissions counselor specializing in admitting military students will help guide you through the admissions process.</p>
                <h4>Affordable Tuition</h4>
                <p>Our tuition is among the lowest of all top-tier research universities, and we're proud to be part of the Yellow Ribbon GI Education Enhancement Program, which may lower your tuition rate. In addition to filing your FAFSA and Tuition Assistance Program (TAP) applications, be sure to complete the <a class="external-link" href="http://www.hesc.ny.gov/pay-for-college/financial-aid/types-of-financial-aid/nys-grants-scholarships-awards/veterans-tuition-awards.html" target="_blank">New York State Veterans' Tuition Award Supplement.</a></p>
                <h4>GI Bill and Aid</h4>
                <p>Our professionally trained financial aid counselors will assist you in making the most of your GI Bill benefits. Weâ€™ll work with Veteransâ€™ Affairs to help make a complicated process as seamless as possible.</p>
                <h4>Orientation and Advising</h4>
                <p>You will attend a new student orientation program, during which you will receive personal academic advising, meet other students with military backgrounds.</p>
                <h4>Veterans Affairs Office</h4>
                <p>Our Office of Veterans Affairs provides excellent support to active duty service members, veterans and their families. After receiving your letter of benefits, the Office will help you submit all necessary document to the VA. The Office will also assist your integration into the University community. Please address questions to:</p>
                <p>
                    <span class="address">Ismael Rodriguez<br />
                    Director, University Veteran Affairs<br />
                    (631) 632-6702</span>
                </p>
                <h4>Student Organizations</h4>
                <p>Stony Brook offers an active <a class="external-link" href="https://www.facebook.com/sbuveso" target="_blank">Veterans Student Organization</a> and the <a class="external-link" href="http://studentaffairs.stonybrook.edu/vets/rotc.shtml" target="_blank">Stony Brook ROTC Club</a></p>
                <h4>Veterans Home</h4>
                <p>The <a class="external-link" href="http://www.listateveteranshome.org/" target="_blank">Long Island State Veterans Home</a>, facility where our veterans receive the care and respect they deserve, is operated by Stony Brook University.</p>
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