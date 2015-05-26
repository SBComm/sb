<article>
    <section class="clearfix site-carousel inside-header students-studying white-background">
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
                    $file = "undergraduate-admissions/contact-us/contact-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <!--
            <div class="content alert-message red clearfix">
                <p><strong>Please note:</strong> The Office of Undergraduate Admissions will be closed on Monday, May 25, 2015, in honor of Memorial Day.</p>
            </div>
            -->
            <h3>Contact Admissions</h3>
            <div class="content col-2">
                <h4>Email Us</h4>
                <ul class="default-bullets">
                    <li><a class="email-link" href="mailto:enroll@stonybrook.edu">enroll@stonybrook.edu</a></li>
                </ul>
                <h4>Call Us</h4>
                <ul class="default-bullets">
                    <li>(631) 632-6868</li>
                    <li>Monday - Friday, 9 a.m. to 4 p.m. EST</li>
                </ul>
            </div>
             <div class="content col-2">
                <h4>Fax</h4>
                <ul class="default-bullets">
                    <li>(631) 632-9898</li>
                </ul>
                <h4>Mailing Address</h4>
                <ul class="default-bullets">
                    <li>Stony Brook University<br />
                    UG Processing<br />
                    279 Broadway<br />
                    Albany, NY 12204-2755<br />
                    U.S.A.</li>
                </ul>
            </div>
             <div class="content">
                <h4>Remember...</h4>
                <p>Please be sure to include your full name, date of birth, and home address on all correspondence.</p>
                <p><em>Title IX prohibits sex discrimination in all forms, including sexual violence an/or harassment. Contact the Director for Title IX and Risk Management, <a class="email-link" href="odaa@stonybrook.edu">Marjolie Leonard</a>, 201 Administration Building, at (631) 632-6280 or see <a class="external-link" href="http://www.stonybrook.edu/diversity/titleix/" target="_blank">www.stonybrook.edu/titleix</a> for more information and/or to report an incident.</em></p>
                <h4>Mission Statement</h4>
                <p>The mission of the Office of Admissions is to recruit, admit, and enroll a student body that is academically accomplished, distinguished in leadership and service, and diverse on many levels.</p>
                <p>Our goal is to provide competent, respectful and efficient professional service that assists and educates prospective students and their families as they navigate the application process and explore the learning opportunities within higher education.</p>
                <h4>Vision Statement</h4>
                <p>The vision of the Office of Admissions is to position Stony Brook University to become a global destination for high-ability undergraduate students.</p>
                <p>University undergraduate enrollment goals will be met, while advancing racial, ethnic, geographic, and economic diversity. We will maintain a creative, energetic, student-focused environment where diversity is valued, professional best practices are promoted, and achievement is recognized.</p>
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