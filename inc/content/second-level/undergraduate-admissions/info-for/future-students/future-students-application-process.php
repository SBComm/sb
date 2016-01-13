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
                    $selected_sub_nav = 1;
                    $file = "undergraduate-admissions/info-for/future-students/future-students-nav.php";
                    include($pathForContent . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <h3>The Application Process</h3>
            <div class="content">
                <p>Over the last decade, the number of applications to colleges has dramatically increased, making the college application process far more competitive than in the past, and making it more important for students to know what colleges are looking for in their applicants. For mid to large universities, freshman admission is often based primarily on the strength of the student’s high school curriculum, performance within that curriculum, and SAT or ACT scores. Special consideration may be given those with truly exceptional talents and achievements in the arts, athletics, and co-curricular activities.</p>

                <h4>High School Curriculum</h4>
                <p>Admissions committees need to know that you are prepared to begin study at the college level, and that you have sufficiently challenged yourself through your high school course selection. A good way to demonstrate this is to successfully complete AP and Honors courses. Recommended college preparatory courses typically include:</p>
                <ul class="default-bullets">
                    <li>4 units of English</li>
                    <li>4 units of social studies</li>
                    <li>3 units of mathematics (4 units required for engineering)</li>
                    <li>3 units of science (4 units required for engineering)</li>
                    <li>2 or 3 units of a foreign language</li>
                </ul>

                <h4>High School Academic Performance</h4>
                <p>Universities take note of a student’s progress in grades. It is favorable for applicants to have upward or solid steady trends in their grades as they move through their high school program. Stony Brook looks for students who have excelled in a strong college preparatory program.</p>

                <h4>Standardized Examinations</h4>
                <p>Most universities require submission of SAT or ACT scores. In evaluating SAT scores, many colleges place greater emphasis on the Math and Critical Reading sections. Scores on the Writing section are expected to receive more attention in the future.</p>

                <h4>Supplemental Application</h4>
                <p>Some colleges and universities, including Stony Brook, have a required or optional supplemental application. This supplemental application may include a personal essay, and questions concerning extra-curricular activities. The activities that students engage in outside the classroom help to predict the success that they will have in a college environment. Universities are looking for students that are self-motivated, able to manage their time well, and are vested in the community. Admissions committees are interested in how prospective students will fit into the campus community socially, as well as academically.</p>

                <h4>Special Talents</h4>
                <p>While a supplemental application provides you with an opportunity to highlight your special talents or circumstances, it is often advisable to have your college advisor attach a letter to your transcript discussing these abilities and your potential.</p>

                <h4>Letters of Recommendation</h4>
                <p>Letters of recommendation can provide a sense of your capabilities and accomplishments through a voice that is not your own. At Stony Brook, one letter of recommendation from a guidance counselor is required for general admission to the University, and two letters from teachers are required for applicants to honors programs.</p>

                <h4>Be sure to apply early! </h4>
                <p>Because of limited space, more and more universities are closing admissions earlier every year. The college application process does not have to be a daunting task if you prepare early and put forth a consistent effort.</p>

                <a class="check-button how-to-apply apply-button" href="undergraduate-admissions/apply/freshman/application-procedures"><span>How to Apply</span></a>
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