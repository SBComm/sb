<article>
    <section class="clearfix site-carousel inside-header students-studying white-background">
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
                    $file = "undergraduate-admissions/contact-us/contact-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content white-background">
        <div class="border-box wrapper counselor-container clearfix">
            <h3>Admissions Counselors</h3>

            <?php
                $name_id = $_GET['name'];
                $file = "undergraduate-admissions/contact-us/counselor-data/{$name_id}.php";
                include($path . $content . $secLv . $file);
            ?>

            <div class="content">
                <p><a class="counselors-back-link sbu-button" href="undergraduate-admissions/contact/meet-your-counselor/view"><i class="fa fa-angle-left icon"></i> See all counselors</a></p>
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