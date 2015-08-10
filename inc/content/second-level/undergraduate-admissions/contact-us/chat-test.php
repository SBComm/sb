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
                    $selected_sub_nav = 3;
                    $file = "undergraduate-admissions/contact-us/contact-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <h3>Chat With Us</h3>
            <div class="content">
                <h4>Upcoming Chat Offerings</h4>
                <ul class="default-bullets">
                    <li><a href="https://sunysb.askadmissions.net/groupchat/LandingPage.aspx">View our upcoming chat offerings.</a></li>
                </ul>
            </div>
            <div class="content col-2">
                <h4>Chat Archives</h4>
                <ul class="default-bullets">
                    <li><a class="external-link" href="http://www.stonybrook.edu/ugadmissions/blogs/chats/oos-12-11-14.html" target="_blank">Out of State Students (12/9/2014)</a></li>
                    <li><a class="external-link" href="http://www.stonybrook.edu/ugadmissions/blogs/chats/scholars14.htm" target="_blank">University Scholars (3/26/2014)</a></li>
                    <li><a class="external-link" href="http://www.stonybrook.edu/ugadmissions/blogs/chats/ceas-3-12-14.htm" target="_blank">Engineering and Applied Sciences (3/12/2014)</a></li>
                    <li><a class="external-link" href="http://www.stonybrook.edu/ugadmissions/blogs/chats/premed-14.htm" target="_blank">Pre-Medical Studies (3/11/2014)</a></li>
                    <li><a class="external-link" href="http://www.stonybrook.edu/ugadmissions/blogs/chats/oos-3-4-14.htm" target="_blank">Out of State Student (3/4/2014)</a></li>
                    <li><a class="external-link" href="http://www.stonybrook.edu/ugadmissions/blogs/chats/acad-12-11-13.htm" target="_blank">Academic Programs (12/11/2013)</a></li>
                    <li><a class="external-link" href="http://www.stonybrook.edu/ugadmissions/blogs/chats/commuter.htm" target="_blank">Commuter (5/7/2013)</a></li>
                </ul>
            </div>
            <div class="content col-2">
                <h4>Video Archives</h4>
                <ul class="default-bullets">
                    <li><a class="external-link" href="http://event.reg.meeting-stream.com/sl/integration/auth.aspx?EnrollmentKey=APK94791ff3201649aeb673423f682099af" target="_blank">Admissions Overview (11/19/2012)</a></li>
                    <li><a class="external-link" href="http://event.reg.meeting-stream.com/sl/integration/auth.aspx?EnrollmentKey=APKcedddab4cfc0453cac3ed6345dedd4f9" target="_blank">School of Journalism (11/19/2012)</a></li>
                    <li><a class="external-link" href="http://event.reg.meeting-stream.com/sl/integration/auth.aspx?EnrollmentKey=APKfabf1202ab7942869eb33f6bc11f9cf0" target="_blank">Fine Arts &amp; Performing Arts (11/19/2012)</a></li>
                    <li><a class="external-link" href="http://event.reg.meeting-stream.com/sl/integration/auth.aspx?EnrollmentKey=APKbafdb22676e84ce4995d4974807a835a" target="_blank">Sustainability Studies (11/19/2012)</a></li>
                    <li><a class="external-link" href="http://event.reg.meeting-stream.com/sl/integration/auth.aspx?EnrollmentKey=APK423f2018812b4df285cf2d6b67c47287" target="_blank">Student Life (11/19/2012)</a></li>
                    <li><a class="external-link" href="http://bit.ly/qpop3k" target="_blank">College of Business (10/20/2011)</a></li>
                </ul>
            </div>
            <div class="content padding-top clearfix">
                <h4>Watch a Recent Chat</h4>
                <p>
                    <div class="videoWrapper">
                        <iframe width="560" height="349" src="http://www.youtube.com/embed/BxgTxR3DPHU?controls=2&showinfo=0&rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
                    </div>
                </p>
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

<script type="text/javascript">
    /**
    * Configure Campus Connect to work on your site
    * cwl_site - //www.collegeweeklive.com
    * cwl_pageExternalId - set to your page external id.
    * cwl_bgColor - the color to use as the base color for the chat UI background
    * cwl_topPosition – the distance from the top in pixels
    */
    var cwl_site = "//www.collegeweeklive.com";
    var cwl_pageExternalId = "StonyBrookUniversitysp"; /** To be provided by CWL */
    var cwl_bgColor = "#990000"; /** Color code corresponding to the color you would like to see */
    var cwl_topPosition = "240"; /** Indicate position of the widget */
</script>
<script type="text/javascript" src="//www.collegeweeklive.com/js/chat/embed_chat.js"></script>