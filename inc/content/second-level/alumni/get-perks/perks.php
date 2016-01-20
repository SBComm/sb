<article class="get-connected get-perks inside-page">
    <section class="clearfix center-rule-header events-header inside-header">
        <div class="border-box">
            <h2><a href="alumni/perks">Perks</a></h2>
        </div>
    </section>
    <section class="clearfix alumni-header inside-content main-inside-content white-background">
        <div class="border-box wrapper clearfix pad-top">
            <div class="whole clearfix content pad-top">
                <h3 class="serif">Alumni Perks</h3>
                <p>As a Stony Brook alum, you’re a “Seawolf for life” and are eligible for some exclusive alumni perks. Take advantage of discounts on campus events and facilities, hotels, insurance and home energy, as well as great offers on entertainment and dining. Alumni Career Services offers a variety of lifetime career services, tools and resources for Stony Brook grads.</p>
                <p>Take a look at some of what's available to you as a Stony Brook Alum:</p>
            </div>
        </div>
        <div class="border-box wrapper clearfix">
            <?php
                $file = "widgets/alumni/alumni-benefits-buttons.php";
                include($path . $file);
            ?>
        </div>
    </section>

    <section class="clearfix inside-content back-dark-red-crossed">
        <div class="border-box wrapper clearfix two-box">
            <div class="content col-2">
                <h4>Alumni Association Card</h4>
                <p>Your Alumni Association card enables you to use and check out books from the Melville Library at Stony Brook University, access hotel and travel discounts, purchase discounted tickets to special events (when available) and more.</p>
                <p>If you haven’t received yours or lost the one you had, contact us and we will send you a new one!</p>
                <img class="alumni-card" src="img/alumni/perks/alumni-card.png" alt="Sample Alumni member card" />
                <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="alumni/form/request-a-stony-brook-alumni-association-card" target="_blank">Get Your Card</a>
            </div>
            <div class="content col-2">
                <h4>Alumni Association Mobile App</h4>
                <p>Stay current with campus news, sports highlights, alumni events, perks and much more. The app is also your “real world” crib sheet on topics like finances, housing, etiquette and health insurance.</p>
                <img src="img/alumni/misc/app.jpg" alt="Three iPhones with Alumni app sample screens" />
                <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://www.mycribsheet.com/sunysb" target="_blank">Download Now</a>
            </div>
        </div>
    </section>

    <section class="clearfix alumni-header inside-content main-inside-content white-background">
        <div class="border-box wrapper clearfix pad-top">
            <?php
                $file = "widgets/alumni/alumni-email-for-life.php";
                include($path . $file);
            ?>
            <div class="whole clearfix clearfix content section-border-top">
                <div class="one-third">
                    <img src="img/alumni/buttons/on-campus-benefits.jpg" alt="Wolfie" />
                </div>
                <div class="two-third">
                    <h4>Spirit and Pride</h4>
                    <p>The spirit of Stony Brook University stays with you long after graduation. Show that you are a proud Stony Brook alumnus with your class ring, custom Stony Brook license plate or by coming back to the Brook to cheer your Seawolves on to victory.</p>
                    <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="alumni/perks/spirit-and-pride">Get in the SBU Spirit</a>
                </div>
            </div>
            <div class="whole clearfix clearfix content section-border-top">
                <div class="one-third">
                    <img src="img/alumni/perks/workshops.jpg" alt="A Stony Brook Alum Professional" />
                </div>
                <div class="two-third">
                    <h4>Lifelong Learning</h4>
                    <p>Discover opportunities in continuing education, online courses and special invitations to lectures and programs through Lifelong Learning.</p>
                    <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="alumni/perks/lifelong-learning">Discover opportunities</a>
                </div>
            </div>
            <div class="border-box wrapper clearfix">
                 <div class="sbu-columns border-box content whole clearfix section-border-top     margin-bottom ">
                    <div class="sbu-columns--column one-third 
                    left-col-content">
                          <p>
                             <img id="career-services" src="/sb/img/alumni/alum-services.jpg" alt="" width="720" height="auto">
                          </p>
                    </div>
                    <div class="sbu-columns--column two-third" style="height: 412px;">
                          <h4>Career Services</h4>
                          <p>
                             <strong>Welcome, SBU alumni!</strong>
                          </p>
                          <p>Alumni Career Services is pleased to offer you a variety of lifetime career services,
                             tools, and resources. Whether you have recently graduated, are looking to enhance
                             your skills and training, or are ready to make a career change, we hope you will find
                             this information helpful!
                          </p>
                          <p>SBU alumni may use most Career Center services at 
                             <em>no cost</em>: programs and events, employer information sessions, job fairs, career coaching and
                             counseling appointments, career assessments, and Handshake, the SBU job/internship
                             database. On-Campus Recruiting (OCR) is typically limited to current students, but
                             at employers’ discretion, may be open to new graduates up until one year after graduation.
                          </p>
                          <p>
                             <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://career.stonybrook.edu/alumni_new/services-for-alumni" target="_blank">Explore Career Services</a>
                          </p>
                    </div>
                 </div>
              </div>
        </div>
    </section>

    <?php
        $file = "widgets/sb-matters-promo.php";
        include($path . $file);
    ?>

    <!-- <social-sidebar> -->
        <?php if($social_sidebar!='') {
            $file = "sidebars/".$social_sidebar."-social-sidebar.php";
            include($path . $file);
        } ?>
    <!-- </social-sidebar> -->

</article>