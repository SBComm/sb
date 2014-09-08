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
                    $selected_sub_nav = 3;
                    $file = "undergraduate-admissions/visit/visit-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content visit-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <h3>Campus Maps &amp; Virtual Tour</h3>
            <div class="content">
            </div>
        </div>
        <div class="border-box clearfix">
            <div class="campus-map-container">
                <iframe class="campus-interactive-map" src="http://www.youvisit.com/tour/map/stonybrook/80175" frameborder="0" seamless="seamless"></iframe>
            </div>
        </div>
        <div class="border-box wrapper clearfix">
            <div class="content">
                <p><a href="downloads/pdf/14061566-Stony-Brook-Campus-Map.pdf">Download Campus Map</a></p>
                <p><a href="downloads/pdf/PRKD0006-Stony-Brook-Parking-Map.pdf">Download Parking Map</a></p>
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