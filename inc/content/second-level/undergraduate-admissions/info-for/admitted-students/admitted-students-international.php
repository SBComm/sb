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
                    $selected_sub_nav = 4;
                    $file = "undergraduate-admissions/info-for/admitted-students/admitted-students-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <h3>Next Steps for International Students</h3>
            <div class="content">
                <p>Welcome to the incoming class at Stony Brook University, where you will join a select group of students as bright and promising as you. This wonderful achievement is just the first of many you will enjoy when you become part of our great community.</p>
                <p>You have already shown us you have what it takes to be a Stony Brook student. Now take the first steps to reserve your place in our incoming class.</p>
                
                <h4>Receiving Your I-20</h4>
                <p>In order to receive your Certiﬁcate of Visa Eligibility (I-20), you must fully document your ability to meet all educational and living expenses for your entire period of intended study in <a href="https://vis.stonybrook.edu/istart/controllers/admission/AdmissionEngine.cfm" class="external-link" target="_blank">accessVIS</a>, Stony Brook's portal for visa and immigration services. If you are unable to provide proof of financial support for the entire length of your degree program, you will not be eligible to receive an I-20 or to enroll at Stony Brook University.</p>
                <ul class="default-bullets">
                    <li><a href="http://www.stonybrook.edu/ugadmissions/forms/accessvis15.pdf" target="_blank">How to use accessVIS</a></li>
                    <li><a href="https://vis.stonybrook.edu/istart/controllers/admission/AdmissionEngine.cfm" class="external-link" target="_blank">Login to accessVIS</a></li>
                </ul>
                <p><strong>After you have paid your $150 tuition deposit</strong>, our Office of Visa and Immigration Services will begin processing your financial documentation and preparing your I-20. Admitted students who do not fully document proof of financial support after they submit their deposits should be aware of our deposit refund policies.  Do not schedule an appointment with your consulate or schedule travel plans until you have received your I-20.</p>
                
                <h4>Steps to Enroll</h4>
                <p>International students complete the same initial enrollment steps as domestic students. Please select one of the following options to continue:</p>
                <ul class="default-bullets">
                    <li class="fa-arrow-after"><a href="undergraduate-admissions/admitted/freshman">I'm a freshman student</a></li>
                    <li class="fa-arrow-after"><a href="undergraduate-admissions/admitted/transfer">I'm a transfer student</a></li>
                </ul>

                <h4>Helpful Resources</h4>
                <p>Here is a list of the deposits:</p>
                <ul class="arrow-bullets">
                    <li><strong><a href="http://studentaffairs.stonybrook.edu/ipa/index.shtml" target="_blank">Pre-Arrival Website</a>:</strong> Useful information on visa processing, living at Stony Brook, health requirements, registration and more.</li>
                    <li><strong><a href="http://studentaffairs.stonybrook.edu/orientation/international/international_main.shtml" target="_blank">International Orientation</a>:</strong> An overview of orientation programming.</li>
                    <li><strong><a href="undergraduate-admissions/apply/transfer/transfer-credit" target="_blank">Transfer Credit Policies</a>:</strong> Information on how college credit and credit from exams will transfer into Stony Brook.</li>
                    <li><strong><a href="http://it.stonybrook.edu/services/solar" target="_blank">SOLAR System</a>:</strong> Stony Brook's student portal, where you'll pay your tuition and housing deposits, Orientation fee, and complete your New Student Preferences form.</li>
                </ul>
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