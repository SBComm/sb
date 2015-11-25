<article class="get-connected get-perks">
    <section class="clearfix center-rule-header events-header inside-header">
        <div class="border-box">
            <h2><a href="alumni/benefits-and-perks">Benefits &amp; Perks</a></h2>
        </div>
    </section>
    <section class="clearfix alumni-header inside-content main-inside-content white-background">
        <div class="border-box wrapper clearfix pad-top">
            <div class="whole clearfix content">
                <h4>Exclusive Perks</h4>
                <p>As a Stony Brook alum, you’re a “Seawolf for life” and are eligible for some exclusive Alumni Perks. Take advantage of benefits and discounts on campus events and facilities, hotels, insurance and home energy, as well as great offers on entertainment and dining. Alumni Career Services offers a variety of lifetime career services, tools and resources for Stony Brook grads.</p>
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
                <p>Your Alumni Association card enables you to use and check out books from the Melville Library at Stony Brook University, access hotel and travel benefits, purchase discounted tickets to special events (when available) and more.</p>
                <p>If you haven’t received yours or lost the one you had, contact us and we will send you a new one!</p>
                <img class="alumni-card" src="img/alumni/perks/alumni-card.png" alt="Sample Alumni member card" />
                <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="https://docs.google.com/a/stonybrook.edu/forms/d/1h4hfeAx-jdnRCji7S3G5wQRjwLXNgX9OeJeEGyR2PnQ/viewform" target="_blank">Get Your Card</a>
            </div>
            <div class="content col-2">
                <h4>Alumni Association Mobile App</h4>
                <p>Stay current with campus news, sports highlights, alumni events, benefits and much more. The app is also your “real world” crib sheet on topics like finances, housing, etiquette and health insurance.</p>
                <img src="img/alumni/misc/app.jpg" alt="Three iPhones with Alumni app sample screens" />
                <a class="sbu-outline-button sbu-outline-button--red arrow-after" href="http://www.mycribsheet.com/sunysb" target="_blank">Download Now</a>
            </div>
        </div>
    </section>

    <section class="clearfix alumni-header inside-content main-inside-content white-background">
        <div class="border-box wrapper clearfix pad-top">
            <div class="whole clearfix content">
                <h4>Lots of Opportunities</h4>
                <p>Discover opportunities in continuing education, online courses and special invitations to lectures and programs through lifelong learning, and learn about school news, alumni highlights, upcoming events, new benefits and more on <a class="external-link" href="http://sb.cc.stonybrook.edu/happenings/alumni/" target="_blank">Stony Brook Matters</a>, our news site for alumni and friends.</p>
                <h4>Get Involved</h4>
                <p>Your Alumni Association also sponsors a number of social and networking events that provide a forum for new friendships and business relationships. Be sure to <a href="https://docs.google.com/forms/d/1NjMTj1XRQHLX55rBhocvVqAZ8wNNvT1vsSYuXZWE4GE/viewform" target="_blank">send us your news and contact information</a> to stay connected to your University and fellow graduates &#8212; and learn more about how to show your Stony Brook spirit and pride!</p>
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