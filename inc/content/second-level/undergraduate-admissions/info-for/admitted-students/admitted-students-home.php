<article>
    <section class="clearfix site-carousel inside-header info-for white-background">
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
                    $file = "undergraduate-admissions/info-for/admitted-students/admitted-students-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <h3>Welcome to Stony Brook!</h3>
            <div class="content">
                <p>Congratulations! You are about to begin an exciting journey as a Stony Brook student. You are joining one of the most respected and invigorating academic communities in the nation. We are excited to help you along the enrollment process!</p>
                <h4>What's Next?</h4>
                <p>Depending on whether you are entering Stony Brook as a <a href="undergraduate-admissions/admitted/freshman">freshman</a>, <a href="undergraduate-admissions/admitted/transfer">transfer</a>, <a href="undergraduate-admissions/admitted/international">international</a> or <a href="undergraduate-admissions/admitted/eop">EOP</a> student, we have prepared what your next steps are in the enrollment process.</p>
                <ul class="default-bullets">
                    <li class="fa-arrow-after"><a href="undergraduate-admissions/admitted/freshman">I'm a freshman student</a></li>
                    <li class="fa-arrow-after"><a href="undergraduate-admissions/admitted/transfer">I'm a transfer student</a></li>
                    <li class="fa-arrow-after"><a href="undergraduate-admissions/admitted/international">I'm a international student</a></li>
                    <li class="fa-arrow-after"><a href="undergraduate-admissions/admitted/eop">I'm an EOP student</a></li>
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