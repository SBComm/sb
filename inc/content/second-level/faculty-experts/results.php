<?php
    $view = 'list';
    if(isset($_GET['view'])) {
        $qView = $_GET['view'];
        if($qView=='list'||$qView=='grid') {
            $view = $qView;
        }
    }
?>
<article class="experts-wrapper">
    <?php
        $file = "faculty-experts/splash-header-inside.php";
        include($path . $content . $secLv . $file);
    ?>
    <?php
        $file = "faculty-experts/search-experts-overlay.php";
        include($path . $content . $secLv . $file);
    ?>
    <section class="clearfix list-experts">
        <div class="clearfix header-wrapper">
            <div class="no-pad-wrapper">
                <h2><a href="faculty-experts" title="Home"><em class="fa fa-home icon"></em></a><em class="fa fa-angle-double-right separator icon"></em><span class="label">Faculty Experts</span></h2>
                <a class="fa-search-before show-search-overlay" href="faculty-experts">Search<span class="hide-accessible-mobile"> Experts</span></a>
            </div>
        </div>
        <div class="faculty-list faculty-list-inside no-pad-wrapper clearfix inside-content">
            <p class="search-text initial-search-text clearfix"><a href="faculty-experts" class="show-search-overlay">Search</a> for a faculty expert or<br /> browse the list below.</p>

            <div class="filter-wrapper border-box content clearfix sticky hidden">
                <input id="live-filter-search-<?=$view?>" type="text" class="rounded-input text-filter" placeholder="Filter experts" />
                <div class="filter-controls clearfix">
                    <div class="filter-status"></div>
                    <div class="clear-filter hide-accessible border-box">Clear search</div>
                <span class="search-directions">or <a class="show-search-overlay new-search" href="faculty-experts" data-lightbox-type="inline">perform new search</a></span>
                </div>
            </div>

            <?php if($view=='list') { ?>
                <p class="search-text clearfix ital hide-accessible-mobile-tablesaw">Hint: tap on the header for "Name" or "Department" to sort.</p>
            <?php } ?>

            <?php
                $file = "faculty-experts/{$view}.php";
                include($path . $content . $secLv . $file);
            ?>

            <p class="search-text clearfix ital hide-accessible-mobile-tablesaw">Can't find what you're looking for? Keep your search term short &amp; simple to yield the best results, or <a href="faculty-experts/results" class="clear-search-trigger">view all experts</a>.</p>

            <div class="toggle-view">
                <a class="view-list<?php if($view=='list') { ?> active<?php } ?>" href="faculty-experts/results/?view=list"><em class="icon fa fa-list-ul"></em> List View</a>
                <a class="view-grid<?php if($view=='grid') { ?> active<?php } ?>" href="faculty-experts/results/?view=grid"><em class="icon fa fa-th"></em> Grid View</a>
            </div>
        </div>
    </section>

</article>