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
        <div class="border-box wrapper clearfix">
            <header class="section-header clearfix">
                <?php
                    $selected_sub_nav = 4;
                    $file = "undergraduate-admissions/visit/visit-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content white-background">
        <div class="border-box wrapper counselor-container clearfix">

            <div class="content">
                <h3>Coming To You</h3>
                <p>Find out when a Stony Brook representative will be in your area!</p>
            </div>

            <div class="content col-2">
                <h4>Events in the USA</h4>
                <ul class="default-bullets">
                    <li><a class="external-link" href="https://sunysb.askadmissions.net/Portal/EI/GroupUrl?gid=53045970a1b81b0b934145b0dbc9bf00a4ddfc" target="_blank"><span class="hide-accessible">View Events in </span>New York</a></li>
                    <li><a class="external-link" href="https://sunysb.askadmissions.net/Portal/EI/GroupUrl?gid=53045900c7237511ae443d8393cf0661ca8eda" target="_blank"><span class="hide-accessible">View Events in </span>New Jersey</a></li>
                    <li><a class="external-link" href="https://sunysb.askadmissions.net/Portal/EI/GroupUrl?gid=5304592b361046f0174afca9ed0df9e938c2ce" target="_blank"><span class="hide-accessible">View Events in </span>Massachusetts</a></li>
                    <li><a class="external-link" href="https://sunysb.askadmissions.net/Portal/EI/GroupUrl?gid=5304594226719cb126416d89ff8fc81f91f355" target="_blank"><span class="hide-accessible">View Events in </span>Rhode Island</a></li>
                    <li><a class="external-link" href="https://sunysb.askadmissions.net/Portal/EI/GroupUrl?gid=530459fdb4ad68249d44b6a07393474c203f03" target="_blank"><span class="hide-accessible">View Events in </span>Connecticut</a></li>
                    <li><a class="external-link" href="https://sunysb.askadmissions.net/Portal/EI/GroupUrl?gid=530459a949d20d3b5640d5a68fad43f45b5f77" target="_blank"><span class="hide-accessible">View Events in </span>Pennsylvania</a></li>
                    <li><a class="external-link" href="https://sunysb.askadmissions.net/Portal/EI/GroupUrl?gid=530459c84ac3bb26644c24ae0e26e57e9929a6" target="_blank"><span class="hide-accessible">View Events in </span>Maryland</a></li>
                    <li><a class="external-link" href="" target="_blank"><span class="hide-accessible">View Events in </span>Washington, D.C.</a></li>
                    <li><a class="external-link" href="https://sunysb.askadmissions.net/Portal/EI/GroupUrl?gid=5304591e26c7a5df664ba089d7abab35fd6cbf" target="_blank"><span class="hide-accessible">View Events in </span>Virginia</a></li>
                    <li><a class="external-link" href="https://sunysb.askadmissions.net/Portal/EI/GroupUrl?gid=530459ce28fced5e0e45f09ef75469fa3dfcc7" target="_blank"><span class="hide-accessible">View Events in </span>Florida</a></li>
                    <li><a class="external-link" href="https://sunysb.askadmissions.net/Portal/EI/GroupUrl?gid=530459355189f47d0841db88987e902cf4ddde" target="_blank"><span class="hide-accessible">View Events in </span>California</a></li>
                    <li><a class="external-link" href="https://sunysb.askadmissions.net/Portal/EI/GroupUrl?gid=530459692693a01b3249a9b3e92aa4a2970c7a" target="_blank"><span class="hide-accessible">View Events in </span>Washington</a></li>
                </ul>
            </div>

            <div class="content col-2">
                <h4>International Events</h4>
                <ul class="default-bullets">
                    <li><a class="external-link" href="https://sunysb.askadmissions.net/Portal/EI/GroupUrl?gid=53045936262f408bfd42c5ab380545cf191a86" target="_blank">View International Events</a></li>
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