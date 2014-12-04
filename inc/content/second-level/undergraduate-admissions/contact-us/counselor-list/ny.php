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
        <div class="border-box wrapper person-info clearfix">
            <h3>New York State Admissions Counselors</h3>

            <div class="content">
                <p>The following is a list of Admissions Counselors for New York State. You can also <a href="undergraduate-admissions/contact/meet-your-counselor/view">view all counselors</a> or <a href="undergraduate-admissions/contact/meet-your-counselor">see counselors by region</a>.</p>
            </div> 

            <ul class="counselor-list clearfix">
               <li>
                    <a href="undergraduate-admissions/contact/meet-your-counselor/profile/?name=angland">
                    <img src="img/admissions-counselors/angland.jpg" alt="" />
                    <div class="person-info">
                        <span class="name">Marianna Angland</span>
                        <span class="title">Assistant Director of Enrollment Operations</span>
                        <span class="location">New York</span>
                    </div>
                    </a>
                </li>
                <li>
                    <a href="undergraduate-admissions/contact/meet-your-counselor/profile/?name=bell">
                    <img src="img/admissions-counselors/bell.jpg" alt="" />
                    <div class="person-info">
                        <span class="name">Gerome Bell</span>
                        <span class="title">Admissions Counselor</span>
                        <span class="location">New York</span>
                    </div>
                    </a>
                </li>
                <li>
                    <a href="undergraduate-admissions/contact/meet-your-counselor/profile/?name=bollhofer">
                    <img src="img/admissions-counselors/bollhofer.jpg" alt="" />
                    <div class="person-info">
                        <span class="name">Kelly Bollhofer</span>
                        <span class="title">Assistant Director of Admissions, EOP Admissions</span>
                        <span class="location">New York</span>
                    </div>
                    </a>
                </li>
                <li>
                    <a href="undergraduate-admissions/contact/meet-your-counselor/profile/?name=brennan">
                    <img src="img/admissions-counselors/brennan.jpg" alt="" />
                    <div class="person-info">
                        <span class="name">Dina Brennan</span>
                        <span class="title">Senior Admissions Advisor</span>
                        <span class="location">Capitol District, Southern Tier, Northwestern NY</span>
                    </div>
                    </a>
                </li>
                <li>
                    <a href="undergraduate-admissions/contact/meet-your-counselor/profile/?name=curtis-bailey">
                    <img src="img/admissions-counselors/curtis-bailey.jpg" alt="" />
                    <div class="person-info">
                        <span class="name">Michelle Curtis-Bailey</span>
                        <span class="title">Senior Admissions Advisor and EOP Coordinator</span>
                        <span class="location">New York</span>
                    </div>
                    </a>
                </li>
                <li>
                    <a href="undergraduate-admissions/contact/meet-your-counselor/profile/?name=donnelly">
                    <img src="img/admissions-counselors/donnelly.jpg" alt="" />
                    <div class="person-info">
                        <span class="name">Ryan Donnelly</span>
                        <span class="title">Assistant Director of Admissions</span>
                        <span class="location">New York</span>
                    </div>
                    </a>
                </li>
                <li>
                    <a href="undergraduate-admissions/contact/meet-your-counselor/profile/?name=regan">
                    <img src="img/admissions-counselors/regan.jpg" alt="" />
                    <div class="person-info">
                        <span class="name">Valerie Regan</span>
                        <span class="title">Assistant Director of Admissions</span>
                        <span class="location">New York</span>
                    </div>
                    </a>
                </li>
                <li>
                    <a href="undergraduate-admissions/contact/meet-your-counselor/profile/?name=sheehan">
                    <img src="img/admissions-counselors/sheehan.jpg" alt="" />
                    <div class="person-info">
                        <span class="name">Donald Sheehan</span>
                        <span class="title">Admissions Counselor</span>
                        <span class="location">New York</span>
                    </div>
                    </a>
                </li>
                <li>
                    <a href="undergraduate-admissions/contact/meet-your-counselor/profile/?name=wind">
                    <img src="img/admissions-counselors/wind.jpg" alt="" />
                    <div class="person-info">
                        <span class="name">Lyle Wind</span>
                        <span class="title">Assistant Director of Admissions</span>
                        <span class="location">New York</span>
                    </div>
                    </a>
                </li>
            </div>

        </div>
    </section>    <!-- <social-sidebar> -->
        <?php if($social_sidebar!='') {
            $file = "sidebars/".$social_sidebar."-social-sidebar.php";
            include($path . $file);
        } ?>
    <!-- </social-sidebar> -->

</article>
