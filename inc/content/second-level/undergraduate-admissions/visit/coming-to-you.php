<article>
    <section class="clearfix site-carousel inside-header visit-img white-background">
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
                    $selected_sub_nav = 4;
                    $file = "undergraduate-admissions/visit/visit-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content white-background">
        <div class="border-box wrapper counselor-container clearfix">

            <div class="content">
                <h3>Coming To You</h3>
                <p>Find out when a Stony Brook representative will be in your area!</p>
            </div>

            <div class="content">

                <div class="button-wrapper ny-btn clearfix">
                    <a href="https://sunysb.askadmissions.net/Portal/EI/GroupUrl?gid=53045970a1b81b0b934145b0dbc9bf00a4ddfc" class="rounded-button-1 icon marker-icon">
                        <span class="label">Events in NY</span>
                    </a>
                </div>

                <div class="button-wrapper all-btn clearfix">
                    <a href="https://sunysb.askadmissions.net/Portal/EI/GroupUrl?gid=530459f5d3a1ad6b6e48e6a04d4a65f763bc1a" class="rounded-button-1 icon users-icon">
                        <span class="label">Out-of-State</span>
                    </a>
                </div>

                <div class="button-wrapper intl-btn clearfix">
                    <a href="https://sunysb.askadmissions.net/Portal/EI/GroupUrl?gid=53045936262f408bfd42c5ab380545cf191a86" class="rounded-button-1 icon world-icon">
                        <span class="label">International</span>
                    </a>
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