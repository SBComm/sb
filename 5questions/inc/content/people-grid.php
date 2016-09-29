<!-- <nav> -->
    <?php
        $file = "site-nav.php";
        include($path . $file);
    ?>
<!-- </nav> -->

<section class="honorees-grid first-section clearfix">

    <div class="all-promo-content clearfix">

        <div class="intro-section">
            <div class="video-wrapper-box">
                <div class="video-wrapper">
                    <iframe width="560" height="315" src="http://www.youtube.com/embed/hsx1Rs8Sgi0?controls=1&showinfo=0&rel=0&modestbranding=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="promo-section clearfix">
            <h2 class="section-header on-grey"><span class="text">Featured Interview</span></h2>
            <div class="wrapper clearfix featured-interview bio-detail">
                <div class="video-wrapper-box">
                    <div class="video-wrapper">
                        <iframe width="560" height="315" src="http://www.youtube.com/embed/Chkl2pC_fyI?controls=1&showinfo=0&rel=0&modestbranding=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="bio-wrapper name-detail">
                    <div class="name"><span class="name-text">Ann Curry</span> <span class="year">President &amp; Founder</span></div>
                    <div class="bio-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="overlay bio-overlay">
        <!--AJAX loads content here-->
    </div>

    <!-- BEGIN people data from OU -->
        <?php 
            $file = "interview-grid.php";
            include($path . $content . $file);
        ?>
    <!-- END people data from OU -->

    <!--<h2 class="section-header"><span class="text">The Interviews</span></h2>
    <div class="clearfix isotope">

        <div class="honoree-box show-all-trigger" role="button" tabindex="0" aria-label="View All Honorees" data-category="Show All">
            <div class="preview-details">
                <span class="name">Currently<br /> Showing</span>
                <span class="category">All Topics</span>
                <span class="view-label arrow-after">See all</span>
            </div>
        </div>

        --><!-- BEGIN Output of People Data --><!--
        <a href="people/ann-curry" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Ann Curry" data-index="1" data-filename="ann-curry" data-first-name="Ann" data-last-name="Curry" data-email="test@email.com" data-category="Entrepreneurship Education Law Marketing">
            <img src="img/people/grid/ann-curry.jpg" alt="Portrait of Ann Curry" />
            <div class="preview-details">
                <span class="name">Ann<br /> Curry</span>
                <span class="category">President &amp; Founder</span>
                <span class="view-label arrow-after">View</span>
            </div>
        </a>
        <a href="people/ben-schneiderman" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Ben Schneiderman" data-index="2" data-filename="ben-schneiderman" data-first-name="Ben" data-last-name="Schneiderman" data-email="test@email.com" data-category="Arts & Entertainment">
            <img src="img/people/grid/ben-schneiderman.jpg" alt="Portrait of Ben Schneiderman" />
            <div class="preview-details">
                <span class="name">Ben<br /> Schneiderman</span>
                <span class="category">President &amp; Founder</span>
                <span class="view-label arrow-after">View</span>
            </div>
        </a>
        <a href="people/billy-joel" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Billy Joel" data-index="3" data-filename="billy-joel" data-first-name="Billy" data-last-name="Joel" data-email="test@email.com" data-category="Healthcare">
            <img src="img/people/grid/billy-joel.jpg" alt="Portrait of Billy Joel" />
            <div class="preview-details">
                <span class="name">Billy<br /> Joel</span>
                <span class="category">President &amp; Founder</span>
                <span class="view-label arrow-after">View</span>
            </div>
        </a>
        <a href="people/not-found" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Broken Link Example" data-index="4" data-filename="broken-link" data-first-name="Broken Link" data-last-name="Example" data-email="test@email.com" data-category="Entrepreneurship">
            <img src="img/people/grid/bobby-collins.jpg" alt="Portrait of Broken Link Example" />
            <div class="preview-details">
                <span class="name">Broken Link<br /> Example</span>
                <span class="category">Entrepreneurship</span>
                <span class="view-label arrow-after">View</span>
            </div>
        </a>
        <a href="people/ann-curry" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Ann Curry" data-index="5" data-filename="ann-curry" data-first-name="Ann" data-last-name="Curry" data-email="test@email.com" data-category="Education">
            <img src="img/people/grid/ann-curry.jpg" alt="Portrait of Ann Curry" />
            <div class="preview-details">
                <span class="name">Ann<br /> Curry</span>
                <span class="category">Education</span>
                <span class="view-label arrow-after">View</span>
            </div>
        </a>
        <a href="people/ben-schneiderman" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Ben Schneiderman" data-index="6" data-filename="ben-schneiderman" data-first-name="Ben" data-last-name="Schneiderman" data-email="test@email.com" data-category="Healthcare">
            <img src="img/people/grid/ben-schneiderman.jpg" alt="Portrait of Ben Schneiderman" />
            <div class="preview-details">
                <span class="name">Ben<br /> Schneiderman</span>
                <span class="category">Healthcare</span>
                <span class="view-label arrow-after">View</span>
            </div>
        </a><a href="people/ann-curry" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Ann Curry" data-index="7" data-filename="ann-curry" data-first-name="Ann" data-last-name="Curry" data-email="test@email.com" data-category="Entrepreneurship Education Law Marketing">
            <img src="img/people/grid/ann-curry.jpg" alt="Portrait of Ann Curry" />
            <div class="preview-details">
                <span class="name">Ann<br /> Curry</span>
                <span class="category">President &amp; Founder</span>
                <span class="view-label arrow-after">View</span>
            </div>
        </a>
        <a href="people/ben-schneiderman" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Ben Schneiderman" data-index="8" data-filename="ben-schneiderman" data-first-name="Ben" data-last-name="Schneiderman" data-email="test@email.com" data-category="Arts & Entertainment">
            <img src="img/people/grid/ben-schneiderman.jpg" alt="Portrait of Ben Schneiderman" />
            <div class="preview-details">
                <span class="name">Ben<br /> Schneiderman</span>
                <span class="category">President &amp; Founder</span>
                <span class="view-label arrow-after">View</span>
            </div>
        </a>
        <a href="people/billy-joel" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Billy Joel" data-index="9" data-filename="billy-joel" data-first-name="Billy" data-last-name="Joel" data-email="test@email.com" data-category="Healthcare">
            <img src="img/people/grid/billy-joel.jpg" alt="Portrait of Billy Joel" />
            <div class="preview-details">
                <span class="name">Billy<br /> Joel</span>
                <span class="category">President &amp; Founder</span>
                <span class="view-label arrow-after">View</span>
            </div>
        </a>
        <a href="people/ann-curry" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Ann Curry" data-index="10" data-filename="ann-curry" data-first-name="Ann" data-last-name="Curry" data-email="test@email.com" data-category="Technology">
            <img src="img/people/grid/ann-curry.jpg" alt="Ann Curry" />
            <div class="preview-details">
                <span class="name">Ann <br /> Curry</span>
                <span class="category">Technology</span>
                <span class="view-label arrow-after">View</span>
            </div>
        </a>
        <a href="people/ben-schneiderman" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Ben Schneiderman" data-index="11" data-filename="ben-schneiderman" data-first-name="Ben" data-last-name="Schneiderman" data-email="test@email.com" data-category="Healthcare">
            <img src="img/people/grid/ben-schneiderman.jpg" alt="Portrait of Ben Schneiderman" />
            <div class="preview-details">
                <span class="name">Ben<br /> Schneiderman</span>
                <span class="category">Healthcare</span>
                <span class="view-label arrow-after">View</span>
            </div>
        </a>
        <a href="people/ben-schneiderman" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Ben Schneiderman" data-index="12" data-filename="ben-schneiderman" data-first-name="Ben" data-last-name="Schneiderman" data-email="test@email.com" data-category="Healthcare">
            <img src="img/people/grid/ben-schneiderman.jpg" alt="Portrait of Ben Schneiderman" />
            <div class="preview-details">
                <span class="name">Ben<br /> Schneiderman</span>
                <span class="category">Healthcare</span>
                <span class="view-label arrow-after">View</span>
            </div>
        </a><a href="people/ann-curry" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Ann Curry" data-index="13" data-filename="ann-curry" data-first-name="Ann" data-last-name="Curry" data-email="test@email.com" data-category="Entrepreneurship Education Law Marketing">
            <img src="img/people/grid/ann-curry.jpg" alt="Portrait of Ann Curry" />
            <div class="preview-details">
                <span class="name">Ann<br /> Curry</span>
                <span class="category">President &amp; Founder</span>
                <span class="view-label arrow-after">View</span>
            </div>
        </a>
        <a href="people/ben-schneiderman" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Ben Schneiderman" data-index="14" data-filename="ben-schneiderman" data-first-name="Ben" data-last-name="Schneiderman" data-email="test@email.com" data-category="Arts & Entertainment">
            <img src="img/people/grid/ben-schneiderman.jpg" alt="Portrait of Ben Schneiderman" />
            <div class="preview-details">
                <span class="name">Ben<br /> Schneiderman</span>
                <span class="category">President &amp; Founder</span>
                <span class="view-label arrow-after">View</span>
            </div>
        </a>
        <a href="people/billy-joel" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Billy Joel" data-index="15" data-filename="billy-joel" data-first-name="Billy" data-last-name="Joel" data-email="test@email.com" data-category="Healthcare">
            <img src="img/people/grid/billy-joel.jpg" alt="Portrait of Billy Joel" />
            <div class="preview-details">
                <span class="name">Billy<br /> Joel</span>
                <span class="category">President &amp; Founder</span>
                <span class="view-label arrow-after">View</span>
            </div>
        </a>
        <a href="people/ben-schneiderman" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Ben Schneiderman" data-index="16" data-filename="ben-schneiderman" data-first-name="Ben" data-last-name="Schneiderman" data-email="test@email.com" data-category="Healthcare">
            <img src="img/people/grid/ben-schneiderman.jpg" alt="Portrait of Ben Schneiderman" />
            <div class="preview-details">
                <span class="name">Ben<br /> Schneiderman</span>
                <span class="category">Healthcare</span>
                <span class="view-label arrow-after">View</span>
            </div>
        </a>
        <a href="people/ben-schneiderman" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Ben Schneiderman" data-index="17" data-filename="ben-schneiderman" data-first-name="Ben" data-last-name="Schneiderman" data-email="test@email.com" data-category="Healthcare">
            <img src="img/people/grid/ben-schneiderman.jpg" alt="Portrait of Ben Schneiderman" />
            <div class="preview-details">
                <span class="name">Ben<br /> Schneiderman</span>
                <span class="category">Healthcare</span>
                <span class="view-label arrow-after">View</span>
            </div>
        </a><a href="people/ann-curry" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Ann Curry" data-index="18" data-filename="ann-curry" data-first-name="Ann" data-last-name="Curry" data-email="test@email.com" data-category="Entrepreneurship Education Law Marketing">
            <img src="img/people/grid/ann-curry.jpg" alt="Portrait of Ann Curry" />
            <div class="preview-details">
                <span class="name">Ann<br /> Curry</span>
                <span class="category">President &amp; Founder</span>
                <span class="view-label arrow-after">View</span>
            </div>
        </a>
        <a href="people/ben-schneiderman" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Ben Schneiderman" data-index="19" data-filename="ben-schneiderman" data-first-name="Ben" data-last-name="Schneiderman" data-email="test@email.com" data-category="Arts & Entertainment">
            <img src="img/people/grid/ben-schneiderman.jpg" alt="Portrait of Ben Schneiderman" />
            <div class="preview-details">
                <span class="name">Ben<br /> Schneiderman</span>
                <span class="category">President &amp; Founder</span>
                <span class="view-label arrow-after">View</span>
            </div>
        </a>
        <a href="people/billy-joel" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Billy Joel" data-index="20" data-filename="billy-joel" data-first-name="Billy" data-last-name="Joel" data-email="test@email.com" data-category="Healthcare">
            <img src="img/people/grid/billy-joel.jpg" alt="Portrait of Billy Joel" />
            <div class="preview-details">
                <span class="name">Billy<br /> Joel</span>
                <span class="category">President &amp; Founder</span>
                <span class="view-label arrow-after">View</span>
            </div>
        </a>
        <a href="people/ben-schneiderman" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Ben Schneiderman" data-index="21" data-filename="ben-schneiderman" data-first-name="Ben" data-last-name="Schneiderman" data-email="test@email.com" data-category="Healthcare">
            <img src="img/people/grid/ben-schneiderman.jpg" alt="Portrait of Ben Schneiderman" />
            <div class="preview-details">
                <span class="name">Ben<br /> Schneiderman</span>
                <span class="category">Healthcare</span>
                <span class="view-label arrow-after">View</span>
            </div>
        </a>
        <a href="people/ben-schneiderman" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Ben Schneiderman" data-index="22" data-filename="ben-schneiderman" data-first-name="Ben" data-last-name="Schneiderman" data-email="test@email.com" data-category="Healthcare">
            <img src="img/people/grid/ben-schneiderman.jpg" alt="Portrait of Ben Schneiderman" />
            <div class="preview-details">
                <span class="name">Ben<br /> Schneiderman</span>
                <span class="category">Healthcare</span>
                <span class="view-label arrow-after">View</span>
            </div>
        </a>
        <a href="people/ben-schneiderman" class="honoree-box" role="button" tabindex="0" aria-label="View Bio for Ben Schneiderman" data-index="23" data-filename="ben-schneiderman" data-first-name="Ben" data-last-name="Schneiderman" data-email="test@email.com" data-category="Healthcare">
            <img src="img/people/grid/ben-schneiderman.jpg" alt="Portrait of Ben Schneiderman" />
            <div class="preview-details">
                <span class="name">Ben<br /> Schneiderman</span>
                <span class="category">Healthcare</span>
                <span class="view-label arrow-after">View</span>
            </div>
        </a>
        --><!-- END Output of People Data --><!--
    </div>-->

</section>

<div class="loader">
    <div class="ball"></div>
</div>

<!-- <category-nav> -->
    <?php
        $file = "category-nav.php";
        include($path . $file);
    ?>
<!-- </category-nav> -->