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
                    $selected_sub_nav = 2;
                    $file = "undergraduate-admissions/academics/academics-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <h3>Pre-Professional Programs</h3>
            <div class="content">
                <h4>Pre-Med Studies</h4>
                <p>Stony Brook is an excellent place to prepare for a future in medicine. Our Pre-Med Advising Program allows students majoring in many different disciplines to work closely with Academic Advisors and complete the best courses in preparation for a future in medicine.</p>
                <p><a class="external-link" href="http://www.stonybrook.edu/healthed/" target="_blank">View More Information</a></p>
                <h4>Pre-Law Studies</h4>
                <p>Stony Brook's Pre-Law Advising Program allows students interested in a career in law to consult with experienced Pre-Law advisors to discuss coursework, law school application strategies, financing law school, and preparing for the LSAT.</p>
                <p><a class="external-link" href="http://studentaffairs.stonybrook.edu/prelaw/" target="_blank">View More Information</a></p>
                <h4>Teacher Education</h4>
                <p>Our Professional Education Program offers secondary teacher education at the undergraduate level in:</p>
                <ul class="default-bullets">
                    <li>Biology</li>
                    <li>Chemistry</li>
                    <li>Chinese</li>
                    <li>Earth Science</li>
                    <li>English</li>
                    <li>French</li>
                    <li>German</li>
                    <li>Italian</li>
                    <li>Japanese</li>
                    <li>Mathematics</li>
                    <li>Physics</li>
                    <li>Social Studies</li>
                    <li>Spanish</li>
                    <li>TESOL (K-12)</li>
                </ul>
                <p><a class="external-link" href="http://www.stonybrook.edu/pep/" target="_blank">View More Information</a></p>
                <h4>Teacher Education</h4>
                <p>Stony Brook offers a Bachelor of Science in Electrical Engineering degree program.</p>
                <p><a class="external-link" href="http://beeol.ee.sunysb.edu/" target="_blank">View More Information</a></p>
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