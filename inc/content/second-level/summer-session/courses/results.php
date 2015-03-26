<article>
    <section class="clearfix inside-header courses-books">
        <div class="border-box no-pad-wrapper clearfix">
            
            <h3 class="wrapper clearfix">Summer Courses</h3>

            <section class="clearfix inside-content inside-page-section-nav">
                <div class="border-box wrapper clearfix overflow-visible">
                    <header class="section-header clearfix">
                        <?php
                            $selected_sub_nav = 3;
                            $file = "summer-session/courses/courses-nav.php";
                            include($path . $content . $secLv . $file);
                        ?>
                    </header>
                </div>
            </section>
        </div>
    </section>

    <?php
        $file = "summer-session/inside-copy.php";
        //include($path . $content . $secLv . $file);
    ?>

    <?php
        $coursesLabel = 'courses';
        $filterPlaceholder = 'Filter Results';
        $searchDirections = '<span class="search-directions">or <a class="modify-search nivo-lightbox-summer-form" href="#modify-search" data-lightbox-type="inline">modify your search</a></span>';
        $modifySearchAfter = '<li><a class="modify-search-after nivo-lightbox-summer-form" href="#modify-search" data-lightbox-type="inline">Modify search</a></li>';
        $viewHSC = '<li><a class="modify-search-after" href="downloads/pdf/summer/SBU-HSC-Summer-Courses.pdf" target="_blank">View HSC Courses</a></li>';

        if($search_response['number_of_results'] == 1) {
            $coursesLabel = 'course';
        }
        $coursesLabel = $search_response['number_of_results'] . ' ' . $coursesLabel;

        //If no query applied, showing all courses
        if(count($search_response['query']) == 0) {
            $coursesLabel = 'Showing all ' . $coursesLabel;
            $filterPlaceholder = 'Filter Courses';
            $searchDirections = '<span class="search-directions">or perform an <a class="nivo-lightbox-summer-form" href="#modify-search" data-lightbox-type="inline">advanced search</a></span>';
            $modifySearchAfter = '';
        }

        //if location
        if($search_response['query']['location']=='HSC') {
            $show_HSC = true;
        } else if($search_response['query']['location']=='ONLINE') {
            $show_Online = true;
        }

    ?>

    <section id="summer-courses" class="clearfix inside-content alt-headers wrapper search-results-wrapper">

        <div id="modify-search" class="clearfix">
            <?php
                $file = "summer-session/widgets/course-search-form.php";
                include($path . $content . $secLv . $file);
            ?>
        </div>

        <h4>Course Results</h4>

        <?php if($show_Online) { ?>
            <div class="content alert-message alert-message-green clearfix">
                <p><strong>What is required to be a successful online student?</strong></p>
                <p>Online learning requires a unique combination of skills to succeed academically, and students must be extremely motivated and disciplined:</p>
                <ol class="number">
                    <li>An online student must be willing to commit approximately 15-20 hours a week to each 3-credit online class.</li>
                    <li>Online students must feel comfortable expressing themselves in writing, as some classes consist solely of the written word. Students respond to questions posed by the instructor, as well as other students, through postings which are written; they submit homework assignments, papers and exams that are written; they chat with each other in "lounge" areas, making connections and exchanging ideas.</li>
                    <li>Online students must be comfortable with their computers. They must have knowledge of word processing software and email, know how to download a program from the web and install it, and in some courses, know how to upload items from the PC to the web or have other technical expertise. Course descriptions will note if students are required to have a higher level of computer ability.</li>
                </ol>
            </div>
        <?php } ?>

        <div class="filter-wrapper border-box content clearfix sticky">
            <span class="query-result-text">
                <span><?=$render->displaySearchQuery($search_response['query'])?></span>
                <span><?php if(!$show_HSC) { echo $coursesLabel; } ?></span>
            </span>
            <input id="live-filter-search" type="text" class="rounded-input text-filter" placeholder="<?=$filterPlaceholder?>" />
            <div class="filter-controls clearfix">
                <div class="filter-status"></div>
                <div class="clear-filter hide-accessible border-box">Clear filter</div>
            <?=$searchDirections?>
            </div>
        </div>

        <div id="live-filter-list" class="border-box content clearfix">

            <ul id="search_result_list" class="course-list">
                <?php if($show_HSC) {
                    echo $viewHSC;
                } else {
                    echo $render->displaySearchResults($search_response['search_results']);
                    echo $modifySearchAfter;
                } ?>
            </ul>

        </div>

    </section>

    <?php
        $file = "summer-session/widgets/course-circles.php";
        include($path . $content . $secLv . $file);
    ?>

</article>