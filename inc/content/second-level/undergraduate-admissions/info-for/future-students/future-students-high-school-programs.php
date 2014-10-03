<article>
    <section class="clearfix site-carousel inside-header info-for-hs white-background">
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
                    $selected_sub_nav = 3;
                    $file = "undergraduate-admissions/info-for/future-students/future-students-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <h3>High School Programs</h3>
            <div class="content">
                <p>Stony Brook offers an exciting variety of opportunities for high school students, ranging from genuine hands-on research to credited summer courses that can jump-start your college career.</p>
                <ul class="default-bullets">
                    <li>Our <a class="external-link" href="http://www.stonybrook.edu/ugadmissions/programs/youngscholars.shtml" target="_blank">Young Scholars Program</a> gives academically talented high school juniors and seniors an opportunity to complement their studies by enrolling in courses not traditionally included in the secondary school curriculum. Students selected for the Young Scholars Program participate in regular college classes with matriculated Stony Brook students on the Stony Brook campus in the afternoon and early evening.</li>
                    <li>SB's <a class="external-link" href="http://www.stonybrook.edu/ugadmissions/programs/ace.shtml" target="_blank">Accelerated College Education (ACE) Program</a> provides students with the academic challenges of a college-level curriculum within the high school setting. Enrollment in ACE courses may provide future opportunities to students, such as the ability to enroll in higher-level college courses or to complete a four-year degree in a shorter amount of time.</li>
                </ul>
                <p><a class="external-link" href="http://www.stonybrook.edu/sb/highschool.shtml" target="_blank">See more High School Programs that Stony Brook offers.</a></p>
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