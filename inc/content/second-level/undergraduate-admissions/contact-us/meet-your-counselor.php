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
        <div class="border-box wrapper section-header-wrapper clearfix">
            <header class="section-header clearfix">
                <?php
                    $selected_sub_nav = 2;
                    $file = "undergraduate-admissions/contact-us/contact-nav.php";
                    include($pathForContent . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content white-background">
        <div class="border-box wrapper counselor-container clearfix">
            <h3>Locate Your Counselor by Region</h3>

            <div id="map">Loading...</div>
            <div id="text"></div>

            <div class="button-wrapper intl-btn clearfix map-button">
                <a href="undergraduate-admissions/contact/meet-your-counselor/view?region=intl" class="rounded-button-1 icon world-icon">
                    <span class="label">International</span>
                </a>
            </div>

            <div class="button-wrapper all-btn clearfix map-button">
                <a href="undergraduate-admissions/contact/meet-your-counselor/view" class="rounded-button-1 icon users-icon">
                    <span class="label">All Counselors</span>
                </a>
            </div>

            <div class="button-wrapper ny-btn clearfix map-button">
                <a href="undergraduate-admissions/contact/meet-your-counselor/view?region=ny" class="rounded-button-1 icon marker-icon">
                    <span class="label">NY Counselors</span>
                </a>
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