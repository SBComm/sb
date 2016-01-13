<article>
    <section class="clearfix site-carousel inside-header academics-img white-background">
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
                    $selected_sub_nav = 7;
                    $file = "undergraduate-admissions/academics/academics-nav.php";
                    include($pathForContent . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <h3>Study Abroad and Exchange</h3>
            <div class="content">
                <h4>Go Abroad, Get Ahead</h4>
                <p>As a Stony Brook student, you will have the option to enrich your education and actively learn about other cultures by pursuing your academic interests in an overseas location, while still earning credits toward your bachelor’s degree at Stony Brook.</p>
                <p>Participate in an international exchange program at an overseas university, or in a study abroad program under the supervision of a Stony Brook faculty member. Our <a class="external-link" href="http://www.stonybrook.edu/commcms/studyabroad/index.html" target="_blank">International Academic Programs and Services Office</a> offers exciting opportunties for learing abroad during the academic year, and during summer and winter sessions.</p>
                <p>
                    <div class="videoWrapper">
                        <iframe width="560" height="349" src="http://www.youtube.com/embed/XIesl-0MbgA?controls=1&showinfo=1&rel=0&modestbranding=1" frameborder="0" allowfullscreen></iframe>
                    </div>
                </p>
                <h4>Highlighted Programs:</h4>
                <ul class="default-bullets">
                    <li><strong>The Arts in Florence.</strong> Our program at Florence University of the Arts (FUA) provides an outstanding cultural environment close to museums and historical architecture.</li>
                    <li><strong>Fossil Hunting in Kenya.</strong> The Turkana Basin region, made famous over the past five decades through the work of Richard Leakey, has produced much of the world's most important fossil evidence for human evolution. This program, hosted at the Turkana Basin Institute, is designed for students who have an interest in prehistoric sciences seeking comprehensive field training. </li>
                    <li><strong>Journalism Without Walls.</strong> Report and publish sophisticated stories from the road, using the latest in media technologies, including laptops, cell phones and iPads. Led by a Stony Brook Journalism faculty member, you'll learn about the complexity of mass media in China or Russia!</li>
                    <li><strong>Scuba Diving in the Coral Reefs.</strong> Study tropical marine ecology from a field station in Discovery Bay, Jamaica. Explore tropical coral reef environments through excursions, snorkeling, and student-designed research projects.</li>
                    <li><strong>Fieldwork in the Rainforests.</strong> Madagascar is among the world's most biologically diverse places with incredibly high levels of endemic plants and animals. Our program is led by Dr. Patricia Wright, a world-renowned primatologist and founder of the Institute for the Conservation of Tropical Environments (ICTE) and Centre ValBio (CVB).</li>
                </ul>
                <p><a class="external-link" href="http://www.stonybrook.edu/commcms/studyabroad/index.html" target="_blank">Explore countries and concentrations in our Study Abroad program</a></p>
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