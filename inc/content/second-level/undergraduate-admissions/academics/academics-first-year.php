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
                    $selected_sub_nav = 5;
                    $file = "undergraduate-admissions/academics/academics-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <h3>The First Year Experience</h3>
            <div class="content">
                <h4>Becoming a Freshman at Stony Brook</h4>
                <p>As a freshman, you will be a member of a small community called an Undergraduate College, which will allow you to explore a broad academic theme beyond your major through a series of one-credit seminars, field trips and social events. Each Undergraduate College is home to a diverse group of students from all majors and backgrounds. Your Undergraduate College will provide you the experience of a small college within a large research university.</p>
                <ul class="default-bullets">
                    <li><a class="external-link" href="http://ucolleges.stonybrook.edu/new-student" target="_blank">Discover the Undergraduate Colleges</a></li>
                    <li><a class="external-link" href="http://ucolleges.stonybrook.edu/new-student/faq" target="_blank">Frequently Asked Questions</a></li>
                </ul>
                <h4>Orientation and Experience</h4>
                <p>During your one-day summer orientation, you will meet with other students from your Undergraduate College, as well as University faculty and staff, including your academic advisor. Just a few days before the start of classes you will participate in Experience Stony Brook, where you will discover the vast resources and opportunities available to you as an SB student. You’ll attend various programs and workshops focused on your academic success, campus involvement, and health and wellness.</p>
            </div>
            <a class="check-button apply-button" href="undergraduate-admissions/apply/freshman/application-procedures"><span>Apply Now</span></a>
        </div>
    </section>

    <!-- <social-sidebar> -->
        <?php if($social_sidebar!='') {
            $file = "sidebars/".$social_sidebar."-social-sidebar.php";
            include($path . $file);
        } ?>
    <!-- </social-sidebar> -->

</article>