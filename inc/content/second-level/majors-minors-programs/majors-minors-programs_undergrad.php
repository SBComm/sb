<section class="clearfix page-content majors-minors">
    <div class="border-box wrapper clearfix">
        <h3>Undergraduate Programs</h3>
        <div class="content clearfix">
            <input id="live-filter-search-1" class="rounded-input" placeholder="Search programs, degrees, etc.">
            <div class="key-icons pad-top" data-filter-input-id="live-filter-search-1">
                <div class="key-icons--item do-live-filter-search-term selected" data-live-filter-term=""><span class="key-icons--icon key-icons--icon_grey key-icons--icon_circle"><em class="fa fa-eye"></em></span> Show All</div>
                <div class="key-icons--item do-live-filter-search-term" data-live-filter-term="Major"><span class="key-icons--icon key-icons--icon_red key-icons--icon_circle">M</span> = Major</div>
                <div class="key-icons--item do-live-filter-search-term" data-live-filter-term="Minor"><span class="key-icons--icon key-icons--icon_aqua key-icons--icon_circle">m</span> = minor</div>
                <!--<div class="key-icons--item do-live-filter-search-term" data-live-filter-term="Bachelor"><span class="key-icons--icon key-icons--icon_blue">&nbsp;</span> = Bachelor</div>-->
                <div class="key-icons--item do-live-filter-search-term" data-live-filter-term="Secondary Teacher Education"><span class="key-icons--icon key-icons--icon_purple">S</span> = Secondary Teacher Education</div>
                <!--<div class="key-icons--item do-live-filter-search-term" data-live-filter-term="Non-Degree"><span class="key-icons--icon key-icons--icon_black">&nbsp;</span> = Non-Degree</div>-->
            </div>
            <div id="live-filter-list-1" class="three-col-list-wrapper searchable major-minor-badges major-minor-badges--wider-badges" data-search-id="course-list">
                
                <?php
                    //include($path . 'scripts/get-academics-programs_undergrad.php');
                    include('/user/far-beyond/www/development/sb/inc/scripts/get-academics-programs_undergrad.php');
                ?>

            </div>
        </div>
        <div class="content padding-box red-border clearfix margin-top margin-bottom">
            <h4>Undergraduate Bulletin</h4>
            <p>Please note that program information is maintained in the Undergraduate Bulletin. In some cases, not all program information is displayed. For complete information including academic policies and regulations as well as archived bulletins, please <a class="external-link" href="http://sb.cc.stonybrook.edu/bulletin/current/" target="_blank"><span class="hide-accessible">Click here to </span>visit the Undergraduate Bulletin</a>.</p>
            <p>For information on combined degrees, <a class="external-link" href="http://www.stonybrook.edu/undergraduate-admissions/academics/combined-degrees/" target="_blank"><span class="hide-accessible">click here to </span>visit Undergraduate Admissions</a>.</p>
            <h4>Majors and Careers</h4>
            <p><a class="external-link" href="http://career.stonybrook.edu/students/educate/relate-majors-to-careers" target="_blank"><span class="hide-accessible">Click here to </span>Learn more about transferable skills and possible career paths</a>.</p>
        </div>
    </div>
</section>