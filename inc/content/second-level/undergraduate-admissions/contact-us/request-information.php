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
                    $selected_sub_nav = 4;
                    $file = "undergraduate-admissions/contact-us/contact-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <h3>Request Information</h3>
            <div class="content">
                <div class="desktop-content">
                    <h4>Get In Touch</h4>
                    <p>Tell us your interests, and we'll be able help you get customized information on the application and enrollment process, as well as specific information to your areas of interest.</p>
                    <p><strong>First, are you an incoming freshman or transfer student?</strong></p>
                    <p><a class="sbu-button" href="https://sunysb.askadmissions.net/emtinterestpage.aspx?ip=freshman">I am a freshman student</a></p>
                    <p><a class="sbu-button" href="https://sunysb.askadmissions.net/emtinterestpage.aspx?ip=transfer">I am a transfer student</a></p>
                </div>
                <div class="mobile-form">
                    <iframe src="https://sunysb.askadmissions.net/emtinterestpage.aspx?ip=mobile" frameborder="0"></iframe>
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