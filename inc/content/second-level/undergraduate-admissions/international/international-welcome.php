<article>
    <section class="clearfix site-carousel inside-header students-walking white-background">
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
                    $file = "undergraduate-admissions/international/international-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>

    <section class="clearfix inside-content main-inside-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <h3>Welcome, International Students!</h3>
            <div class="content">
                <p>Stony Brook University offers a world of possibilities, with more than 200 academic programs, exciting undergraduate research opportunities and an ideal location for learning on Long Island's North Shore — just 60 miles from New York City.</p>
            </div>
        </div>

        <div class="border-box wrapper clearfix">
            <div class="content col-2">
                <h4>Why Choose Stony Brook?</h4>
                <ul class="arrow-bullets">
                    <li>We're ranked in the top 1% of higher education institutions worldwide by the Times Higher Education World University Rankings</li>
                    <li>U.S. News &amp; World Report has ranked SB among the top 100 universities and top 40 public universities</li>
                    <li>98% of full-time faculty hold doctoral degrees or the highest degrees in their fields</li>
                    <li>You'll find first-rate opportunities for research at facilities such as Brookhaven National Laboratory</li>
                </ul>
            </div>

            <div class="content col-2">
                <h4>Did You Know?</h4>
                <ul class="arrow-bullets">
                    <li>Stony Brook is a member of the prestigious, invitation-only Association of American Universities — along with Harvard, MIT, Princeton, and Yale, America’s top research universities</a></li>
                    <li>Our award-winning faculty include the winners of Nobel Prizes, Pulitzer Prizes, MacArthur Fellowships, the Fields Medal in Mathematics, and Grammy Awards.</li>
                    <li>C.N. Yang, Albert Einstein Professor Emeritus of the C.N. Yang Institute for Theoretical Physics, was Stony Brook’s first Nobel Prize winner.</li>
                    <li>The MRI technology that won the Nobel Prize for Medicine was invented at Stony Brook.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="clearfix usa-map international clearfix">
        <div class="border-box wrapper clearfix">
            <a class="check-button apply-button" href="undergraduate-admissions/apply/international/application-procedures"><span>Apply Now</span></a>
        </div>
    </section>

    <section class="white-background student-body international clearfix">
        <div class="wrapper border-box">
            <h2>Student Body Profile</h2>
            <img src="img/students/student-body-international.jpg" />
            <ul class="clearfix">
                <li class="clearfix"><span>1737</span> <em>International Undergrads</em></li>
                <li class="clearfix"><span>109</span> <em>Countries</em></li>
                <li class="clearfix"><span>90-96</span> <em>High School GPA</em></li>
                <li class="clearfix"><span>81-91</span> <em>TOEFL iBT</em></li>
                <li class="clearfix"><span>600-720</span> <em>SAT scores: math</em></li>
                <li class="clearfix"><span>550-660</span> <em>SAT scores: critical reading</em></li>
                <li class="clearfix"><span>26-31</span> <em>ACT scores</em></li>
                <li class="clearfix"><span>2770</span> <em>Full-time freshmen</em></li>
                <li class="clearfix"><span>16,831</span> <em>Undergraduates</em></li>
                <li class="clearfix"><span>25,272</span> <em>Total students</em></li>
                <li class="clearfix"><span>54:46%</span> <em>Males:Females</em></li>
            </ul>
            <span class="note">*Academic figures reflect middle 50% of Fall 2015 Freshmen</span>
        </div>
    </section>

    <section class="white-background suny-korea international clearfix">
        <div class="border-box wrapper clearfix">
            <a class="suny-callout" href="http://www.sunykorea.ac.kr/" target="_blank">
                <img class="logo" src="img/logo/suny-korea-logo-452.png" />
                <p>Stony Brook now offers an exciting undergraduate curriculum at SUNY Korea, located in the Incheon Free Economic Zone (IFEZ), just one hour west of Seoul, Korea.</p>
            </a>
        </div>
    </section>

    <!-- <social-sidebar> -->
        <?php if($social_sidebar!='') {
            $file = "sidebars/".$social_sidebar."-social-sidebar.php";
            include($path . $file);
        } ?>
    <!-- </social-sidebar> -->

</article>