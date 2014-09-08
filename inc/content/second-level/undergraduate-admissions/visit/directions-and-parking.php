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
                    $selected_sub_nav = 2;
                    $file = "undergraduate-admissions/visit/visit-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content visit-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <h3>Directions to Stony Brook</h3>
        </div>
        <div class="border-box clearfix">
            <div class="campus-map-container">
                <iframe class="campus-google-map"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?q=Stony+Brook+University,+Stony+Brook,+NY,+United+States&key=AIzaSyACX4B55uhXxKwADWo5YkqZRt0OjSBDfaE">
                </iframe>
            </div>
        </div>
        <div class="border-box wrapper clearfix">
            <div class="content">
                <h4>Detailed Directions</h4>
                <p>Get detailed parking directions to Stony Brook University:</p>
                <ul class="default-bullets">
                    <li><a class="external-link" href="http://www.stonybrook.edu/sb/directions.shtml#main" target="_blank">Directions to Main Campus</a></li>
                    <li><a class="external-link" href="http://www.stonybrook.edu/sb/directions.shtml#hampton" target="_blank">Directions to Stony Brook Southampton</a></li>
                    <li><a class="external-link" href="http://www.stonybrook.edu/sb/directions.shtml#manhattan" target="_blank">Directions to Stony Brook Manhattan</a></li>
                </ul>
                <h4>Parking at Stony Brook</h4>
                <p>Parking is available for prospective students and family members attending campus tours and information sessions in the Administration Garage, located adjacent to the Administration Building. The Garage charges a nominal fee on weekdays and is free on weekends.</p>
                <p><a class="external-link" href="http://www.stonybrook.edu/parking" target="_blank">Get more information about parking at Stony Brook.</a></p>
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