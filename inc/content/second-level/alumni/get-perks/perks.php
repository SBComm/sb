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
                $file = "widgets/alumni-benefits-buttons.php";
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
                <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://docs.google.com/a/stonybrook.edu/forms/d/1h4hfeAx-jdnRCji7S3G5wQRjwLXNgX9OeJeEGyR2PnQ/viewform" target="_blank">Get Your Card</a>
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
            <div class="border-box whole clearfix content">
                <div class="one-third">
                    <img src="img/alumni/perks/email.jpg" alt="Gmail envelope" />
                </div>
                <div class="two-third">
                    <h4>Alumni Email for Life</h4>
                    <p>The Stony Brook University Alumni Association offers free and private email accounts exclusively for our alumni. Stay connected with classmates and friends when you create an Email for Life account!</p>
                    <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="alumni/form/email-for-life/" target="_blank">Get an account</a>
                    <p></p>
                    <h5>Features:</h5>
                    <ul class="default-bullets">
                        <li>Use your alumni email address as a web-based email account and access your email from anywhere in the world via an Internet connection using Gmail.</li>
                        <li>Set your address to forward to another account.</li>
                        <li>Stop worrying about sending friends and colleagues a new address every time you change Internet Service Providers — give them one address that follows you wherever you go!</li>
                    </ul>
                    <h5>Frequently Asked Questions:</h5>
                    <div class="drop-accordion drop-accordion-1 clearfix">
                        <div class="item">
                            <div class="tab">
                                <span class="label"><i class="fa fa-plus-circle"></i>At what point are student@stonybrook.edu accounts deactivated?</span>
                            </div>
                            <div class="content clearfix hide-accessible">
                                <div class="content-wrap">
                                    <p>Student@stonybrook.edu accounts are deactivated after 200 days.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tab">
                                <span class="label"><i class="fa fa-plus-circle"></i>How can I transfer my current files?</span>
                            </div>
                            <div class="content clearfix hide-accessible">
                                <div class="content-wrap">
                                    <p>Learn how to keep your current documents <a href="http://it.stonybrook.edu/pages/leaving-stony-brook">here</a>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tab">
                                <span class="label"><i class="fa fa-plus-circle"></i>How long will it take to receive my you@alumni.stonybrook.edu account? </span>
                            </div>
                            <div class="content clearfix hide-accessible">
                                <div class="content-wrap">
                                    <p>You should expect a response within 48 hours.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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