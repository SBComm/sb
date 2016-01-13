<article>
    <section class="clearfix site-carousel inside-header info-for-parents white-background">
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
                    $file = "undergraduate-admissions/info-for/parents/parents-nav.php";
                    include($pathForContent . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <h3>Information for Parents</h3>
            <div class="content">
                <h4>Involving You In The Admissions Process</h4>
                <p>As a parent, you play an important role in the college selection process by providing guidance and support. There are many factors that affect your student's college choice. Choosing the right college requires careful research. We want you to have all the information you need to help you assist your child in making this important decision.</p>
                <p>The links below lead to helpful information about Stony Brook University and the admissions process. Come visit Stony Brook University and see all that we have to offer!</p>
                <ul class="default-bullets">
                    <li><a href="undergraduate-admissions/apply/freshman/">Admission Criteria</a>  (Freshman)</li>
                    <li><a href="undergraduate-admissions/apply/freshman/application-procedures">Application Procedures</a> (Freshman)</li>
                    <li><a href="undergraduate-admissions/apply/freshman/ap-college-credit/">AP &amp; College Credit</a> (Freshman)</li>
                    <li><a href="undergraduate-admissions/application-status/">Check Application Status</a></li>
                    <li><a href="undergraduate-admissions/cost-and-financial-aid/">Cost, Financial Aid and Scholarships</a></li>
                    <li><a class="external-link" href="undergraduate-admissions/academics/honors/">Honors Programs</a></li>
                    <li><a class="external-link" href="http://www.stonybrook.edu/sb/safety.shtml" target="_blank">Campus Safety</a></li>
                </ul>

                <h4>Resources</h4>
                <ul class="default-bullets">
                    <li><a href="undergraduate-admissions/contact/brochures">View Downloadable Brochures</a>
                    <li><a href="downloads/pdf/admissions/Stony-Brook-For-Parents.pdf" target="_blank">8 Reasons Why You'll Love Stony Brook University</a>
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