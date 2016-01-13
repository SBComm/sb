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
        <div class="border-box wrapper section-header-wrapper clearfix">
            <header class="section-header clearfix">
                <?php
                    $selected_sub_nav = 4;
                    $file = "undergraduate-admissions/academics/academics-nav.php";
                    include($pathForContent . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <h3>Honors Programs at Stony Brook University</h3>
            <div class="content">
                <h4>Stony Brook is for Scholars</h4>
                <p>You’ll find what you’re looking for at Stony Brook University. We recognize that a single program cannot meet the expectations of all of our most gifted students. Hence, we offer a variety of experiences and programs that will challenge, inspire, and sustain our most academically talented students.</p>
                <h4>Our programs include:</h4>
                <ul class="default-bullets">
                    <li><a class="external-link" href="http://www.stonybrook.edu/ugadmissions/newhonors/uscholars.shtml" target="_blank">University Scholars</a></li>
                    <li><a class="external-link" href="http://www.stonybrook.edu/ugadmissions/newhonors/honors.shtml" target="_blank">The Honors College</a></li>
                    <li><a class="external-link" href="http://www.stonybrook.edu/ugadmissions/newhonors/wise.shtml" target="_blank">Women in Science and Engineering (WISE)</a></li>
                    <li><a class="external-link" href="http://www.stonybrook.edu/ugadmissions/newhonors/scholarsmed.shtml" target="_blank">Scholars for Medicine</a></li>
                    <li><a class="external-link" href="http://www.stonybrook.edu/ugadmissions/newhonors/scholarsdentalmed.shtml" target="_blank">Scholars for Dental Medicine</a></li>
                    <li><a class="external-link" href="http://www.stonybrook.edu/ugadmissions/newhonors/compsci.shtml" target="_blank">Computer Science Honors</a></li>
                    <li><a class="external-link" href="http://www.stonybrook.edu/ugadmissions/newhonors/majors.shtml" target="_blank">Majors with Honors Components</a></li>
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