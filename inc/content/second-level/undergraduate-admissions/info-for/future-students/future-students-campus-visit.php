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
                    $selected_sub_nav = 2;
                    $file = "undergraduate-admissions/info-for/future-students/future-students-nav.php";
                    include($pathForContent . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <h3>Guide to Campus Visits</h3>
            <div class="content">
                <p>Campus visits are an important part of the process of determining whether a college is right for you. Here are a few tips to help you get the most out of your campus visits:</p>
                <ul class="default-bullets">
                    <li>Compile a list of questions in advance, and ask the same questions at each school to draw comparisons.</li>
                    <li>If possible, take an escorted campus tour! Many school tours are guided by current students who are great resources for getting all the real answers to your questions. Ask them why they chose their university!</li>
                    <li>Attend an information session with an admissions officer. Tell them about your interests and career aspirations, and ask them to answer any questions you may have. Most universities post their information session schedules on their websites.</li>
                    <li>Try to experience life as a student at each university: eat in the dining halls, and visit the residence halls and the library.</li>
                    <li>Engage current students: ask them about their major, their schedules, residence life, and what they do for fun on weekends!</li>
                    <li>Explore the area surrounding the campus: think about whether you would prefer attending a school located within a rural, urban, or suburban setting.</li>
                    <li>Find out if the university has any specific programs for freshmen. Every first-year student at Stony Brook, for instance, enters as a member of an Undergraduate College designed to support and develop their interests, and to assist them in taking advantage of the vast resources Stony Brook has to offer.</li>
                    <li>Pick up copies of student newspapers so you can read about current issues on campus and how faculty and administrators are handling them.</li>
                    <li>Take good notes about each school so you remember all their distinctive features.</li>
                </ul>

                <a class="check-button how-to-apply apply-button" href="http://www.stonybrook.edu/ugadmissions/tour/360.shtml" target="_blank"><span>Take a Virtual Tour</span></a>
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