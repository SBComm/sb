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
            <h3>Contact Admissions</h3>
            <div class="content col-2">
                <h4>Email Us</h4>
                <ul class="default-bullets">
                    <li><a class="email-link" href="enroll@stonybrook.edu">enroll@stonybrook.edu</a></li>
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
                <p><em>Title IX prohibits sex discrimination in all forms, including sexual violence an/or harassment. Contact the Interim Director for Title IX and Risk Management, <a class="email-link" href="odaa@stonybrook.edu">Marjolie Leonard</a>, 201 Administration Building, at (631) 632-6280 or see <a class="external-link" href="http://www.stonybrook.edu/diversity/titleix/" target="_blank">www.stonybrook.edu/titleix</a> for more information and/or to report an incident.</em></p>
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