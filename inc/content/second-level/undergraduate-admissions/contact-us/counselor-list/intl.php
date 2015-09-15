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
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content white-background">
        <div class="border-box wrapper person-info clearfix">
            <h3>International Admissions Counselors</h3>

            <div class="content">
                <p>The following is a list of Admissions Counselors for International students. You can also <a href="undergraduate-admissions/contact/meet-your-counselor/view">view all counselors</a> or <a href="undergraduate-admissions/contact/meet-your-counselor">see counselors by region</a>.</p>
            </div> 

            <ul class="counselor-list clearfix">
                <li>
                    <a href="undergraduate-admissions/contact/meet-your-counselor/profile/?name=bilfinger">
                    <img src="img/admissions-counselors/bilfinger.jpg" alt="" />
                    <div class="person-info">
                        <span class="name">Christine Bilfinger</span>
                        <span class="title">International Admissions Counselor</span>
                        <span class="location">International</span>
                    </div>
                    </a>
                </li>
               <li>
                    <a href="undergraduate-admissions/contact/meet-your-counselor/profile/?name=flores">
                    <img src="img/admissions-counselors/flores.jpg" alt="" />
                    <div class="person-info">
                        <span class="name">Christopher Flores</span>
                        <span class="title">International Admissions Counselor</span>
                        <span class="location">International</span>
                    </div>
                    </a>
                </li>
                <li>
                    <a href="undergraduate-admissions/contact/meet-your-counselor/profile/?name=munsky-acquaro">
                    <img src="img/admissions-counselors/munsky-acquaro.jpg" alt="" />
                    <div class="person-info">
                        <span class="name">Stacey Munsky-Acquaro</span>
                        <span class="title">International Admissions Advisor</span>
                        <span class="location">International</span>
                    </div>
                    </a>
                </li>
                <li>
                    <a href="undergraduate-admissions/contact/meet-your-counselor/profile/?name=wang">
                    <img src="img/admissions-counselors/wang.jpg" alt="" />
                    <div class="person-info">
                        <span class="name">Dr. Yu-wan Wang</span>
                        <span class="title">Associate Dean of International Admissions</span>
                        <span class="location">International</span>
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
