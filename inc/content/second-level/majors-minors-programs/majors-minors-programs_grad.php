<article class="clearfix second-level-header">

    <section class="clearfix page-content majors-minors white-background">
        <div class="border-box wrapper clearfix">
            <h3>Graduate Programs</h3>
            <div class="content clearfix">
                <input id="live-filter-search" class="rounded-input" placeholder="Search programs, degrees, etc.">
                <div class="key-icons pad-top">
                    <div class="key-icons--item do-live-filter-search-term" data-live-filter-term="Doctorate"><span class="key-icons--icon key-icons--icon_green">&nbsp;</span> = Doctorate</div>
                    <div class="key-icons--item do-live-filter-search-term" data-live-filter-term="Certificate"><span class="key-icons--icon key-icons--icon_yellow">&nbsp;</span> = Certificate</div>
                    <div class="key-icons--item do-live-filter-search-term" data-live-filter-term="Special"><span class="key-icons--icon key-icons--icon_purple">&nbsp;</span> = Special</div>
                    <div class="key-icons--item do-live-filter-search-term" data-live-filter-term="Non-Degree"><span class="key-icons--icon key-icons--icon_black">&nbsp;</span> = Non-Degree</div>
                    <div class="key-icons--item do-live-filter-search-term" data-live-filter-term=""><span class="key-icons--icon key-icons--icon_grey key-icons--icon_circle"><em class="fa fa-eye"></em></span> Show All</div>
                </div>
                <div id="live-filter-list" class="three-col-list-wrapper searchable major-minor-badges major-minor-badges--wider-badges" data-search-id="course-list">
                        
                    <?php
                        include($path . 'scripts/get-academics-programs_grad.php');
                    ?>

                </div>
            </div>
            <div class="content padding-box red-border clearfix margin-top margin-bottom">
                <h4>Graduate Bulletin</h4>
                <p>Please note that program information is maintained in the Graduate Bulletin. In some cases, not all program information is displayed. For complete information including academic policies and regulations as well as archived bulletins, please <a class="external-link" href="http://sb.cc.stonybrook.edu/gradbulletin/current/" target="_blank"><span class="hide-accessible">Click here to </span>visit the Graduate Bulletin</a>.</p>
                <h4>Majors and Careers</h4>
                <p><a class="external-link" href="http://career.stonybrook.edu/students/educate/relate-majors-to-careers" target="_blank"><span class="hide-accessible">Click here to </span>Learn more about transferable skills and possible career paths</a>.</p>
            </div>
        </div>
    </section>

</article>

