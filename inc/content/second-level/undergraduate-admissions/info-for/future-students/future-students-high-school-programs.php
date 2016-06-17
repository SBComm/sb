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
        <div class="border-box wrapper section-header-wrapper clearfix">
            <header class="section-header clearfix">
                <?php
                    $selected_sub_nav = 3;
                    $file = "undergraduate-admissions/info-for/future-students/future-students-nav.php";
                    include($pathForContent . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>

    <section class="clearfix inside-content main-inside-content alt-headers two-col white-background high-school-content">
        <div class="border-box wrapper clearfix">
            <div class="content">
                <div class="three-quarter">
                    <h3>Jump Start Your Future</h3>
                    <p>Stony Brook offers an exciting variety of opportunities for high school students, ranging from genuine hands-on research to credited summer courses that can jump-start your college career.
                </div>
                <div class="one-quarter padding-top">
                    <img class="clearfix margin-top" src="img/students/red-bag-small.jpg" />
                </div>
            </div>

        <div class="content">
            <div class="one-third">
        
                    <h4>Research Opportunities</h4>
                    <ul class="star-bullets star-bullets-red">
                        <li><a href="http://www.stonybrook.edu/commcms/simons/useful_information/hsresearch.html">Independent High School Research</a></li>
                        <li><a href="http://laser.physics.sunysb.edu/">Laser Teaching Center</a></li>
                        <li><a href="http://www.stonybrook.edu/commcms/garcia/">Garcia Research Scholar Program</a></li>
                        <li><a href="http://www.sunysb.edu/simons/">Simons Summer Research Fellowship</a></li>
                    </ul>
        
                </div>
        
                <div class="one-third">
        
                    <h4>Outreach</h4>
                    <ul class="star-bullets star-bullets-red">
                        <li><a href="http://istem.stonybrook.edu/">The Institute for STEM Education (I-STEM)</a></li>
                        <li><a href="http://ws.cc.stonybrook.edu/stepprogram/">Science and Technology Entry Program (STEP)</a></li>
                        <li><a href="http://www.stonybrook.edu/commcms/wise/middle-high/highschoolwise">WISE (Women in Science and Engineering)</a></li>
                    </ul>
        
                </div>
        
                <div class="one-third">
        
                    <h4>Academic Year Programs</h4>
                    <ul class="star-bullets star-bullets-red">
                        <li><a href="http://www.stonybrook.edu/ace">Accelerated College Education (ACE)</a></li>
                        <li><a href="http://istem.stonybrook.edu/content/della-pietra-high-school-applied-math-program">Della Pietra High School Applied Math Program</a></li>
                        <li><a href="http://www.stonybrook.edu/cesame/students/MathChampCamp/mathchampcamp.html">High School Applied Math Program</a></li>
                        <li><a href="http://istem.stonybrook.edu/content/holiday-science-camp">Holiday Science Camp (grades 5-7)</a></li>
                        <li><a href="http://ws.cc.stonybrook.edu/ugadmissions/youngscholars">Young Scholars</a></li>
                    </ul>
        
                </div>
            </div>

            <div class="content courses-content">
                <div class="one-half hs-long">
                    <?php
                        $file = "shared/high-school/high-school-summer-courses.php";
                        include($pathForContent . $content . $file);
                    ?>
                </div>
                <div class="one-half">
                    <div class="programs-box-wrapper clearfix">
                        <div class="programs-box-content external-link-hover-wrapper clearfix star-bullets">
                            <?php
                                $file = "shared/high-school/high-school-summer-programs.php";
                                include($pathForContent . $content . $file);
                            ?>
                        </div>
                    </div>
                </div>
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