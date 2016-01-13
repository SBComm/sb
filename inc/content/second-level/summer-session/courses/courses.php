<article>
    <section class="clearfix inside-header courses-books">
        <div class="border-box no-pad-wrapper clearfix">
            
            <h3 class="wrapper clearfix">Summer Courses</h3>

            <section class="clearfix inside-content inside-page-section-nav">
                <div class="border-box wrapper clearfix overflow-visible">
                    <header class="section-header clearfix">
                        <?php
                            $selected_sub_nav = 1;
                            $file = "summer-session/courses/courses-nav.php";
                            include($pathForContent . $content . $secLv . $file);
                        ?>
                    </header>
                </div>
            </section>
        </div>
    </section>

    <?php
        $file = "summer-session/inside-copy.php";
        //include($pathForContent . $content . $secLv . $file);
    ?>

    <section class="clearfix inside-content alt-headers wrapper">

        <div id="modify-search" class="clearfix">
            <?php
                $file = "summer-session/widgets/course-search-form.php";
                include($pathForContent . $content . $secLv . $file);
            ?>
        </div>

        <div class="border-box content clearfix courses-intro-text">

            <p>Summer Sessions courses are offered in a variety of formats: on-campus at Stony Brook, at our Manhattan location (Park Avenue South between 27th and 28th Streets), at Stony Brook Southampton, and online. There are also opportunities for study abroad, independent study, and academic internships.</p>
            <p>Courses in the Health Sciences are also available. <a href="downloads/pdf/summer/SBU-HSC-Summer-Courses.pdf" target="_blank">View HSC Courses</a></p>
            <p>Please note that the university registration system (SOLAR) is the official repository of class information. Class notes in SOLAR are used to indicate additional requirements of courses.</p>
        </div>

        <h4 id="browse-departments" class="clearfix">Summer Courses by Department</h4>

        <div class="filter-wrapper border-box content clearfix sticky">
            <input id="live-filter-search" type="text" class="rounded-input text-filter" placeholder="Filter Departments" />
            <div class="filter-controls clearfix">
                <div class="filter-status"></div>
                <div class="clear-filter hide-accessible border-box">View all departments</div>
            <span class="search-directions">or perform an <a class="nivo-lightbox-summer-form" href="#modify-search" data-lightbox-type="inline">advanced search</a></span>
            </div>
        </div>

        <div id="live-filter-list" class="border-box content clearfix">

            <ul id="department_list" class="flex-list-3 departments">
                <?=$render->listAllDepartments();?>
            </ul>

        </div>

    </section>

    <section class="clearfix wrapper inside-content text-align-right smaller">
        <p>Course search provided by <a href="http://providence.media/" target="_blank">Providence Media</a></p>
    </section>

    <?php
        $file = "summer-session/widgets/course-circles.php";
        include($pathForContent . $content . $secLv . $file);
    ?>

</article>