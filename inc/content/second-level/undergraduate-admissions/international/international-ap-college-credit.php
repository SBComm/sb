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
        <div class="border-box wrapper section-header-wrapper clearfix">
            <header class="section-header clearfix">
                <?php
                    $selected_sub_nav = 4;
                    $file = "undergraduate-admissions/international/international-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <h3>AP &amp; College Credit</h3>

            <div class="content col-2">
                <h4>Advanced Placement Credit</h4>
                <p>AP credit is granted to students who have taken the appropriate CEEB advanced placement examination and scored a 3 or higher.</p>
                <p><a href="http://sb.cc.stonybrook.edu/bulletin/current/policiesandregulations/admissions/apcredit.php">View available AP exams, the relevant scores, and Stony Brook University equivalency and applicability to degree requirements.</a></p>
                <h4>Helpful Information</h4>
                <p>Students must request that their test scores be forwarded to Stony Brook University’s Undergraduate Admissions Office from <a class="external-link" href="http://apcentral.collegeboard.com/home" target="_blank">AP Services</a>. Stony Brook's College Board code is 2548.</p>
            </div>

            <div class="content col-2">
                <h4>More Information on...</h4>
                <div class="drop-accordion drop-accordion-1 clearfix">
                    <div class="item">
                        <div class="tab">
                            <span class="label"><i class="fa fa-plus-circle"></i>International Baccalaureate</span>
                        </div>
                        <div class="content clearfix hide-accessible">
                            <div class="content-wrap">
                                <p>With its origins in Europe, the International Baccalaureate Program&#8212;now offered by some American high schools&#8212;leads to a diploma or certificates of examination. Stony Brook University will award six credits for International Baccalaureate higher-level exams with scores of 5 or better for year-long courses.</p>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="tab">
                            <span class="label"><i class="fa fa-plus-circle"></i>College Courses Taken While In High School</span>
                        </div>
                        <div class="content clearfix hide-accessible">
                            <div class="content-wrap">
                                <p>Courses offered by regionally accredited colleges and passed with a letter grade of C or higher while the student was in high school will be accepted and evaluated for applicability to specific Stony Brook University degree requirements. Credits for successfully completed courses for which a grade equivalent to P or S was assigned are also accepted and will be evaluated for transfer credit according to the guidelines in the <a href="http://sb.cc.stonybrook.edu/bulletin/current/policiesandregulations/records_registration/application_of_transfer_credits_to_DEC.php">Application of Transfer Credits to General Education Requirements</a> section of the Undergraduate Bulletin.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="tab">
                            <span class="label"><i class="fa fa-plus-circle"></i>College Courses Taken After High School Graduation</span>
                        </div>
                        <div class="content clearfix hide-accessible">
                            <div class="content-wrap">
                                <p>All course work completed with a grade of C or higher from a regionally accredited college will be applied toward the total credit hour requirement for a Stony Brook University B.A., B.S., or B.E. degree. Courses for which grades of P or S are earned are also accepted. Graduates of SUNY or CUNY colleges who earn an A.A. or an A.S. degree prior to matriculation at Stony Brook will receive credit for all course work completed as part of the associates degree requirements.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="tab">
                            <span class="label"><i class="fa fa-plus-circle"></i>General Certificate of Education Advanced Level (A-Level)</span>
                        </div>
                        <div class="content clearfix hide-accessible">
                            <div class="content-wrap">
                                <p>With its origins in the United Kingdom, the General Certificate of Education or GCE is a secondary-level academic qualification that continues to be a popular measure of academic aptitude in other countries, including Hong Kong, Pakistan, India, Nepal, Singapore, and Sri Lanka. Stony Brook University will award up to eight credits per subject for A-level (Advanced) exams in year long courses with grade equivalents of C or better.</p>
                                <p>To receive credit for college courses or exams taken while in high school or after high school graduation, students must have official transcripts from the college(s) sent to:</p>
                                <p>Stony Brook University<br />
                                UG Processing<br />
                                279 Broadway<br />
                                Albany, NY 12204-2755<br />
                                U.S.A.</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <p><em>Stony Brook University accepts up to 30 credits by examination in partial fulfillment of the bachelor's degree.</em></p>
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