<article>
    <section class="clearfix inside-header courses-books">
        <div class="border-box no-pad-wrapper clearfix">
            
            <h3 class="wrapper clearfix">Winter Courses</h3>

            <section class="clearfix inside-content inside-page-section-nav">
                <div class="border-box wrapper clearfix overflow-visible">
                    <header class="section-header clearfix">
                        <?php
                            $selected_sub_nav = 1;
                            $file = "winter-session/courses/courses-nav.php";
                            include($pathForContent . $content . $secLv . $file);
                        ?>
                    </header>
                </div>
            </section>
        </div>
    </section>

    <section class="clearfix inside-content alt-headers wrapper">

        <div id="modify-search" class="clearfix">
            <?php
                $file = "winter-session/widgets/course-search-form.php";
                include($pathForContent . $content . $secLv . $file);
            ?>
        </div>

        <div class="border-box content clearfix courses-intro-text">

            <p>Winter Sessions courses are offered in a variety of formats: on-campus at Stony Brook, at our Manhattan location (Park Avenue South between 27th and 28th Streets), at Stony Brook Southampton, and online. There are also opportunities for study abroad, independent study, and academic internships.</p>
            <p>Please note that the university registration system (SOLAR) is the official repository of class information. Class notes in SOLAR are used to indicate additional requirements of courses.</p>
            <?php /* <div class="content application-details alert-message green clearfix">
                <p><strong>Please Note</strong>: Courses displayed below are from winter 2016. Winter 2017 courses will be posted in October.</p>
            </div> */ ?>
        </div>

        <h4 id="browse-departments" class="clearfix">Winter Courses by Department</h4>

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

</article>