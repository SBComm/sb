<?php 
    if($page_type=='second-level' && $second_level=='undergrad-admissions') {
        $keywords          = "Stony Brook University,Undergraduate Admissions,Admissions,Majors,Minors,Special Programs,Visiting,About,Transfer Office,Transfer,Young Scholars Program,Honors,University Scholars,Admitted,International,Open House,Tour,Scholarships";
        $page_title        = 'Stony Brook University, New York';
        $page_title_sub    = 'Undergraduate Admissions';
        $page_title_full   = $page_title_ou . ' | ' . $page_title_sub;

        $og_title        = 'Stony Brook ' . $page_title_sub;
        $og_description  = $page_description;
        $og_url          = 'undergraduate-admissions';

        $page_loader     = true;

        $page_to_top_loc  = 'main-nav'; //default, main-nav

        $page_scroll      = true;
        $page_scroll_el   = 'logo';     //Options are audience-nav, logo, main-nav, bottom
        $page_scroll_time = 0;
        $page_scroll_mobile = true;
    }
?>