<article>
    <section class="clearfix site-carousel inside-header academics-img white-background">
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
                    $selected_sub_nav = 4;
                    $file = "undergraduate-admissions/academics/academics-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content white-background">
        <div class="border-box wrapper clearfix">
            <h3>How to Apply to a Stony Brook Honors Program</h3>
            <div class="content application-details clearfix">
                <div class="inner-wrapper">
                    <h4>Step 1: Complete The Common Application</h4>
                    <a class="img-link" href="http://www.commonapp.org/" target="_blank"><img src="img/devices/macbook-pro-apply-common.jpg" /></a>
                    <ul class="default-bullets clearfix step-bullets">
                        <li>Apply for honors programs within Stony Brook's <strong>Member Questions</strong> section of <a class="external-link" href="http://www.commonapp.org/" target="_blank">The Common Application</a></li>
                        <li>Submit an essay on any of The Common Application's accepted topics in the <strong>Writing</strong> section (up to 650 words)</li>
                        <li>Scholars for Medicine, Scholars for Dental Medicine and Engineering Scholars for Medicine applicants are required to submit an additional essay within our Common Application <strong>Writing Supplement</strong> on the topic: "What aspects about medicine (or dental medicine) intrigue you? Describe how these aspects influence your life" (up to 650 words)</li>
                    </ul>
                </div>
            </div>
            <div class="content clearfix">
                <p>In addition to the supporting documents listed above, applicants who submit the <a class="external-link" href="https://www.suny.edu/applysuny/" target="_blank">SUNY Application</a> must also submit (1) the <a class="external-link" href="http://www.suny.edu/attend/apply-to-suny/supplemental-applications/" target="_blank">SUNY Supplemental Application</a> and (2) the <a href="downloads/pdf/admissions/Honors-Program-Application-for-SUNY-Applicants.pdf" target="_blank">Application to Honors Programs</a> by January 15.<br /></p>
            </div>

            <div class="content clearfix">
                <h4>Step 2: Send all additional application materials by February 1</h4>
                <p>Be sure to include your full name, date of birth, and home address on all correspondence. It is each applicant's responsibility to ensure that all application credentials are received.</p>
                <ol class="number">
                    <li><strong>Submit your high school transcript(s).</strong> There are 3 ways that you can do this:
                        <ol class="upper-alpha">
                            <li>
                                <span class="instruction">Ask your high school to submit your transcript electronically, using either The Common Application School Forms System or <a class="external-link" href="https://www.suny.edu/counselor/" target="_blank">SUNY CounselorConnect</a>.)</span>
                            </li>
                            <li>
                                <span class="instruction">Self-report your academic record using <a class="external-link" href="http://www.suny.edu/attend/apply-to-suny/suny-online-academic-record-soar/" target="_blank">SOAR</a>.</span>
                            </li>
                            <li>
                                <span class="instruction">Ask your high school to fax or mail us your official high school transcript, along with the <a href="downloads/pdf/admissions/Guidance-Counselor-Transmittal.pdf" target="_blank">Transmittal Form</a>.
                                    <span class="phone">Fax: <strong>(631) 632-9898</strong></span>
                                    Credentials faxed directly from the high school should not be mailed. Send items that cannot be faxed to:
                                    <span class="address">Stony Brook University<br />
                                    UG Processing<br />
                                    279 Broadway<br />
                                    Albany, NY 12204-2755<br />
                                    U.S.A.</span>
                                </span>
                            </li>
                        </ol>
                    </li>
                    <li>
                        <strong>Your SAT or ACT (with writing) scores should be reported directly from the testing agency.</strong>
                        <br />
                        SAT Code: <strong>2548</strong>
                        <br />
                        ACT Code: <strong>2952</strong>
                    </li>
                    <li>
                    Send two Teacher Evaluations. Electronic submission through The Common Application's School Forms System is preferred. Paper recommendations must be faxed to (631) 632-9898. <strong>WISE applicants:</strong> at least one evaluation should be from a science or math teacher.
                    </li>
                </ol>
                <p>Please fax all paper documents to: (631) 632-9898. Credentials faxed directly from the high school do not need to be mailed in hard copy. If items cannot be faxed, please send them to:</p>
                <p>
                    <span class="address">Stony Brook University<br />
                    UG Processing<br />
                    279 Broadway<br />
                    Albany, NY 12204-2755<br />
                    U.S.A.</span>
                </p>
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