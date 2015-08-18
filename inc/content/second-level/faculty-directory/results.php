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
        $file = "faculty-directory/splash-header-inside.php";
        include($path . $content . $secLv . $file);
    ?>
    <?php
        $file = "faculty-directory/search-faculty-overlay.php";
        include($path . $content . $secLv . $file);
    ?>
    <section class="clearfix list-experts">
        <div class="clearfix header-wrapper">
            <div class="no-pad-wrapper">
                <h2><a class="breadcrumb" href="faculty-directory" title="Home"><em class="fa fa-home icon"></em></a><em class="fa fa-angle-double-right separator icon"></em><a class="header-label" href="faculty-directory/results" class="label">Faculty Directory</a></h2>
                <a class="fa-search-before show-search-overlay" href="faculty-directory">Search<span class="hide-accessible-mobile"> Faculty</span></a>
            </div>
        </div>
        <div class="faculty-list faculty-list-inside no-pad-wrapper clearfix inside-content">
            <p class="search-text initial-search-text clearfix"><a href="faculty-directory" class="show-search-overlay">Search</a> for a faculty member or<br /> browse the list below.</p>

            <div class="filter-wrapper border-box content clearfix sticky hidden">
                <input id="live-filter-search-<?=$view?>" type="text" class="rounded-input text-filter" placeholder="Filter faculty" />
                <div class="filter-controls clearfix">
                    <div class="filter-status"></div>
                    <div class="clear-filter hide-accessible border-box">Clear search</div>
                <span class="search-directions">or <a class="show-search-overlay new-search" href="faculty-directory" data-lightbox-type="inline">perform new search</a></span>
                </div>
            </div>

            <?php if($view=='list') { ?>
                <p class="search-text clearfix ital hide-accessible-mobile-tablesaw">Hint: tap on the header for "Name" or "Department" to sort.</p>
            <?php } ?>

            <?php
                $file = "faculty-directory/{$view}.php";
                include($path . $content . $secLv . $file);
            ?>

            <p class="search-text clearfix ital hide-accessible-mobile-tablesaw">Can't find what you're looking for? Keep your search term short &amp; simple to yield the best results, or <a href="faculty-directory/results">view all faculty</a>.</p>

            <div class="toggle-view">
                <a class="view-list<?php if($view=='list') { ?> active<?php } ?>" href="faculty-directory/results/?view=list"><em class="icon fa fa-list-ul"></em> List View</a>
                <a class="view-grid<?php if($view=='grid') { ?> active<?php } ?>" href="faculty-directory/results/?view=grid"><em class="icon fa fa-th"></em> Photo View</a>
            </div>
        </div>
    </section>

    <div class="pagination-wrapper">
        <div class="pagination">
            <a href="#" class="page-item current-page-item">1</a>
            <a href="#" class="page-item">2</a>
            <a href="#" class="page-item">3</a>
            <a href="#" class="page-item">4</a>
            <a href="#" class="page-item">5</a>
            <a href="#" class="page-item">6</a>
            <a href="#" class="page-item">7</a>
            <a href="#" class="page-item">8</a>
            <a href="#" class="page-item">9</a>
            <a href="#" class="page-item">10</a>
        </div>
    </div>

</article>