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
                    <img class="clearfix margin-top margin-bottom" src="img/students/red-bag-small.jpg" />
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