<article>
    <section class="clearfix site-carousel inside-header pano-sbu white-background">
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
                    $file = "undergraduate-admissions/cost-and-financial-aid/cost-and-financial-aid-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <div class="content clearfix">
                <h3>Campus Jobs</h3>
                <p>There are two sources of employment for students wishing to work on campus: Federal Work-Study (FWS) and our Student Assistant program. The primary difference between the two programs lies in their source of funding.</p>
                <p>Participating in a part-time work experience provides you with the opportunity to:</p>
                <ul class="default-bullets">
                    <li>Gain professional skills that will enhance marketability upon graduation</li>
                    <li>Learn more about the professional world</li>
                    <li>Explore potential careers</li>
                    <li>Earn money to help pay for educational expenses</li>
                    <li>Meet and network with new people outside the campus community</li>
                </ul>
                <p>You may be able to secure a position in your major department or in an area that is of special interest. Our <a class="external-link" href="http://career.stonybrook.edu/" target="_blank">Career Center</a>'s ZebraNet database enables our students to tap into immediate part-time job listings, internships and volunteer opportunities.</p>
            </div>
            <div class="content clearfix">
                <p>
                    <div class="videoWrapper">
                        <iframe width="560" height="349" src="http://www.youtube.com/embed/Lul1z06hCRM?controls=2&showinfo=0&rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
                    </div>
                </p>
            </div>
            <div class="content clearfix">
                <h4>Cool Internships Landed by SB Undergrads</h4>
                <ul class="default-bullets">
                    <li>Barclays Bank</li>
                    <li>CBS Radio</li>
                    <li>Target</li>
                    <li>Girls’ Life Magazine</li>
                    <li>Memorial Sloan-Kettering Cancer Center</li>
                    <li>Warner Music Group</li>
                    <li>Citibank</li>
                    <li>U.S. Environmental Protection Agency</li>
                    <li>New York City Parks Department</li>
                    <li>Brookhaven National Lab</li>
                    <li>Marvel Entertainment</li>
                    <li>U.S. Department of Homeland Security</li>
                    <li>United Health Group</li>
                    <li>Family Service League</li>
                    <li>Standard and Poor’s</li>
                    <li>Credit Suisse</li>
                    <li>The Rachael Ray Show</li>
                    <li>Metropolitan Museum of Art</li>
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