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
                    $selected_sub_nav = 1;
                    $file = "undergraduate-admissions/academics/academics-nav.php";
                    include($pathForContent . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content program-details two-col white-background">
        <div class="border-box wrapper clearfix">
            <div class="content">
            
                <div id="inside-main" style="height:auto;"> 
                    <div class="padding">
                    
                        <div id="container"><i id="loading" class="fa fa-refresh fa-spin"></i></div>
                        
                        <!-- jquery template -->
                        <script id="programTemplate" type="text/x-jQuery-tmpl">
                            
                            <div id="program-info">
                                <h3 id="program-title">${title}</h3>
                                <ul class="nav program-nav">
                                    <li><a class="home active">Overview</a></li>
                                    <li><a class="degree">Degree &amp; Requirements<i id="degreeloading" class="fa fa-refresh fa-spin hide-accessible"></i></a></li>
                                    <li><a class="courses">Courses<i class="fa fa-refresh fa-spin hide-accessible"></i></a></li>
                                    <li><a class="schedule">Sample Schedule<i class="fa fa-refresh fa-spin hide-accessible"></i></a></li>
                                    <li><a class="contact">Contact</a></li>
                                </ul>
                                
                                <div style="clear:both;"></div>
                                <div class="spc10"></div>
                                
                                <div class="program-content clearfix">
                                    <div class="description active">
                                        <img src="http://admissions.cc.stonybrook.edu/mobile/images/academics/${code}.jpg"/>
                                        {{html desc}}
                                    </div>
                                    <div class="degree hide-accessible"></div>
                                    <div class="schedule hide-accessible"></div>
                                    <div class="courses hide-accessible"></div>
                                    <div class="contact hide-accessible">{{html contact}}</div>
                                </div>                            
                            </div>
                            
                        </script>
                        <!-- /jquery template -->
                                       
                    </div>
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