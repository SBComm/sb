<article>
    <section class="clearfix site-carousel inside-header info-for-counselors white-background">
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
                    $selected_sub_nav = 1;
                    $file = "undergraduate-admissions/info-for/college-counselors/college-counselors-nav.php";
                    include($pathForContent . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <h3>Information for College Counselors</h3>
            <div class="content">
                <h4>Helping You Help Your Students</h4>
                <p>We're here to help you assist your students in the college selection and application process.</p>
                <p>Connect with us to receive updates and valuable resources from our Undergraduate Admissions team.</p>
                <p><a class="sbu-button" href="https://sunysb.askadmissions.net/emtinterestpage.aspx?ip=guidance">Connect with SBU Admissions</a></p>
                <p>If you need additional information or have any questions about Stony Brook University and what we offer, please feel free to call us at (631) 632-6868.</p>
                <p>We also invite you to visit Stony Brook to learn more about our criteria, programs, and review process. To familiarize yourself with Stony Brook's admission process, please make use of these sections of the Undergraduate Admissions website:</p>
                <ul class="default-bullets">
                    <li><a href="undergraduate-admissions/apply/freshman/">Admission Criteria</a>  (Freshman)</li>
                    <li><a href="undergraduate-admissions/apply/freshman/application-procedures">Application Procedures</a> (Freshman)</li>
                    <li><a href="undergraduate-admissions/apply/freshman/ap-college-credit/">AP &amp; College Credit</a> (Freshman)</li>
                    <li><a href="undergraduate-admissions/application-status/">Check Application Status</a></li>
                    <li><a href="undergraduate-admissions/cost-and-aid/">Cost, Financial Aid and Scholarships</a></li>
                    <li><a class="external-link" href="undergraduate-admissions/academics/honors/">Honors Programs</a></li>
                    <li><a class="external-link" href="http://sat.collegeboard.org/scores/send-sat-scores" target="_blank">SAT (College Board)</a></li>
                    <li><a class="external-link" href="http://www.actstudent.org/scores/send/" target="_blank">ACT</a></li>
                    <li><a class="external-link" href="http://www.ets.org/toefl/" target="_blank">TOEFL</a></li>
                    <li><a href="downloads/pdf/admissions/Stony-Brook-Math-Expectations-Freshman.pdf" target="_blank">Stony Brook Math Expectations</a></li>

                </ul>

                <h4>High Achieving Students</h4>
                <p>Stony Brook University offers many exciting and unique opportunities for your high achieving students. Freshman applicants must complete their application to the University for the fall semester by January 15 to receive the fullest consideration for merit scholarships and honors programs.</p>

                <h4>Notification of Admission Decisions</h4>
                <p>Freshman applicants are reviewed for admission to the University and notified by April 1.</p>

                <h4>Final Transcripts</h4>
                <p>High schools must send or fax final, official transcripts of students enrolling at Stony Brook as soon as they are available to:</p>
                <p>
                    <span class="phone">Fax: <strong>(631) 632-9898</strong></span>
                </p>
                <p>
                    <span class="address">Stony Brook University<br />
                    UG Processing<br />
                    279 Broadway<br />
                    Albany, NY 12204-2755<br />
                    U.S.A.</span>
                </p>

                <h4>Resources</h4>
                <ul class="default-bullets">
                    <li><a href="undergraduate-admissions/contact/brochures" target="_blank">View Downloadable Brochures</a>
                </li>
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