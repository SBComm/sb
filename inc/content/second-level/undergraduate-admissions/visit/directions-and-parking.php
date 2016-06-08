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
                <p>The Undergraduate Admissions Office is located on the first level of the Administration Building.</p>
                <p>In the summer, parking is available for prospective students and family members attending campus tours and information sessions in the Faculty/Staff Parking Lot, highlighted in red on the map below. The Administration Building, also highlighted in red, is a very short walk from the Parking Lot.</p>
                <p>Parking may also be available in the Administration Garage, located adjacent to the Administration Building (highlighted in black below). The Garage charges a nominal fee on weekdays and is free on weekends. The Garage is presently undergoing maintenance and has limited parking space.</p>
                <img src="img/maps/summer-parking-faculty-staff.png" alt="Map of alternate H-Quad Resident Parking Lot" />
                <p><br /></p>
            </div>
        </div>
        <!--<div class="border-box clearfix">
            <div class="campus-map-container">
                <iframe class="campus-google-map"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?q=118+Administration+Building+Stony+Brook,+NY+11794-3364&key=AIzaSyDw8uNAtzM6u1fCTcChppNYYR2m6jj5m30">
                </iframe>
            </div>
        </div>-->
        <div class="border-box wrapper clearfix">
            <div class="content">
                <h4>Detailed Directions</h4>
                <p>Get detailed parking directions to Stony Brook University:</p>
                <ul class="default-bullets">
                    <li><a class="external-link" href="http://www.stonybrook.edu/sb/directions.shtml#main" target="_blank">Directions to Main Campus</a></li>
                </ul>
                <p><br /></p>
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