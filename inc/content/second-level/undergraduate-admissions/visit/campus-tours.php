<article>
    <section class="clearfix site-carousel inside-header visit-img white-background">
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
                    $selected_sub_nav = 1;
                    $file = "undergraduate-admissions/visit/visit-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content visit-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <h3>Campus Tours</h3>
            <div class="content">
                <h4>Campus Tours and Information Sessions</h4>
                <p>During the academic year, student-guided campus tours and information sessions are offered on most weekdays and on Saturdays. During the summer, campus tours and information sessions are hosted on most weekdays.</p>
                <div class="button-wrapper tour-btn clearfix">
                    <a href="https://sunysb.askadmissions.net/Portal/Templated/UserTemplate/Search" class="rounded-button-1 icon marker-icon" target="_blank">
                        <span class="label">Schedule a Tour</span>
                    </a>
                </div>
                <h4>For Transfer Students</h4>
                <div class="button-wrapper tour-btn clearfix">
                    <a href="https://sunysb.askadmissions.net/Portal/EI/GroupUrl?gid=5304596bbe11a6e8f0482291358a7a7d01e4e1" class="rounded-button-1 icon school-icon">
                        <span class="label">View Events for Transfers</span>
                    </a>
                </div>
                <h4>Group Tour Requests</h4>
                <p>Thank you for your interest in Stony Brook. All group tour dates for the fall semester have been filled and we are no longer accepting requests for the fall.</p>
                <p>We will begin scheduling group visits for the spring in late January. Schools and/or organizations interested in planning a group visit for the spring should e-mail <a class="email-link" href="mailto:grouptours@stonybrook.edu">grouptours@stonybrook.edu</a> with your request at that time. Please note that we are able to accommodate a maximum of 50 students for group tours.</p>
                <h4>Interviews</h4>
                <ul class="default-bullets">
                    <li><strong>On-Campus:</strong> Interviews are not required for applicants. On-campus interviews with admissions counselors are offered on a very limited basis to qualified students with questions about our undergraduate program. Such interviews are for informational purposes only and will have no bearing on the review of an application for admission. All students requesting an interview must call (631) 632-6868 and be pre-screened by an admissions counselor. Due to limited availability during our application reading season, we may be unable to accommodate all requests for interviews.</li>
                    <li><strong>Off-Campus:</strong> A limited number of interviews may be offered at off-campus locations. <a class="external-link" href="https://sunysb.askadmissions.net/Portal/Templated/UserTemplate/Search" target="_blank">Access our event management system</a> to search for available dates and times.</p></li>
                </ul>
                <p>If you need a disability-related accommodation, or have any other concerns, please call (631) 632-6868.</p>
                <h4>Virtual Tour</h4>
                <div class="button-wrapper tour-btn clearfix">
                    <a href="undergraduate-admissions/virtual-tour/" class="rounded-button-1 icon tablet-icon" target="_blank">
                        <span class="label">Take Our Virtual Tour!</span>
                    </a>
                </div>
                <h4>Tour Guides</h4>
                <div class="button-wrapper tour-btn clearfix">
                    <a target="_blank" href="http://www.stonybrook.edu/commcms/tourguides" class="rounded-button-1 icon marker-icon">
                        <span class="label">Meet our Tour Guides</span>
                    </a>
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