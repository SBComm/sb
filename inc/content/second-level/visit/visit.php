<article class="clearfix second-level-header">
    <section class="header-title-image-sac page-title">
        <div class="wrapper border-box">
            <h1><a href="visit/">Visit SBU</a></h1>
        </div>
    </section>

    <section class="clearfix page-content white-background">
        <div class="wrapper clearfix pad-top pad-bottom">
            <div class="pad-top pad-bottom">
                <h3 class="clearfix">Getting Here</h3>
                <img class="inline-image" src="img/university/pole-banners-far-beyond.jpg" />
                <p>Stony Brook University is located in the village of <strong>Stony Brook, New York</strong>, a residential neighborhood <strong>65 miles east of New York City</strong>. The main campus is easy to reach by air, rail, ferry, or car.</p>
                <p><a href="maps-and-directions/" class="brand-button arrow-after">Get Directions</a></p>
                <br />
                <br />

                <h3>Campus Tours</h3>
                <p>The Undergraduate Admissions Office offers Campus Tours on weekdays and Saturdays through most of the academic year and during the summer when classes are in session.</p>
                <p><a href="undergraduate-admissions/visit/" class="brand-button arrow-after">View Tours</a></p>
                <br />
                <br />

                <h3>Staying Here</h3>
                <p>For overnight stays, the Stony Brook area offers plenty of accommodation, with options both on-campus and within five miles of main campus.</p>
                <h4>Accommodations</h4>
                <?php
                    $file = "shared/visiting-information/stony-brook-accommodations.php";
                    include($pathForContent . $content . $file);
                ?>
                <br />
                <br />

                <h3>Getting Around Campus</h3>
                <img class="inline-image" src="img/university/sac-with-roses-800.jpg" />
                <p>Stony Brook's campus is set among <strong>1,039 wooded acres</strong>, complete with a <strong>nature preserve</strong>.</p>
                <p><em>Bring your bike for the best tour!</em> The Paul Simons Memorial Bike Path, six miles of pristine pavement for walking, biking, running, and rollerblading, encircles the campus. Nearby villages and harbors of the beautiful North Shore of Long Island are just a leisurely bike ride away.</p>
                <p>Take a Virtual Tour of Campus or consult the Campus Map for more information.</p>
                <p><a href="http://www.stonybrook.edu/virtual-tour/" class="brand-button arrow-after" target="_blank">Explore the Virtual Tour</a></p>
                <p><a href="maps-and-directions/" class="brand-button arrow-after">View Campus Maps</a></p>
                <br />
                <br />

                <h3>Parking</h3>
                <p>Parking is available in the parking garages on East and West Campuses, and in metered parking areas, as shown on the campus map.</p>
                <p><a href="maps-and-directions/" class="brand-button arrow-after">View Maps &amp; Parking</a></p>
                <br />
                <br />
            </div>
        </div>
    </section>
    <?php
        $file = "widgets/maps/map-overlay-option-3.php";
        include($path . $file);
    ?>
    <?php
        $campaignColor = "black";
        $file = "widgets/campaign-banner.php";
        include($path . $file);
    ?>
</article>

