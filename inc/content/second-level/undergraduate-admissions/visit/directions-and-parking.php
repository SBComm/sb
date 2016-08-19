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
        <div class="border-box wrapper section-header-wrapper clearfix">
            <header class="section-header clearfix">
                <?php
                    $selected_sub_nav = 2;
                    $file = "undergraduate-admissions/visit/visit-nav.php";
                    include($pathForContent . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content visit-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <h3>Directions to Stony Brook</h3>
            <div class="content">
                <p>The Undergraduate Admissions Office is located on the first level of the Administration Building. Parking is available for prospective students and family members attending campus tours and information sessions in the Administration Garage, located adjacent to the Administration Building. The Garage charges a nominal fee on weekdays and is free on weekends.</p>
                <p><a class="brand-button" href="/maps-and-directions/" target="_blank">Get Directions to Main Campus</a></p>
                <p><br /></p>
            </div>
        </div>
        <div class="border-box clearfix">
            <div class="campus-map-container">
                <iframe class="campus-google-map"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?q=118+Administration+Building+Stony+Brook,+NY+11794-3364&key=AIzaSyDw8uNAtzM6u1fCTcChppNYYR2m6jj5m30">
                </iframe>
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