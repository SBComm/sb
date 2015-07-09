<article class="experts-wrapper">
    <section class="clearfix splash-header splash-header-faculty">
        <a class="splash-wrapper clearfix" href="faculty-directory">
        <em class="fa fa-book"></em>
            <h1><strong>Stony Brook</strong> <em>Faculty</em> <span>Directory</span></h1>
        </a>
    </section>
    <section class="clearfix search-experts">
        <div class="no-pad-wrapper">
            <p>Find Faculty at Stony Brook University.</p>
            <form class="search-list-page" action="faculty-directory/results/" method="get">
                <div class="input-wrap">
                    <input type="hidden" name="view" value="grid" />
                    <input type="text" placeholder="search by name or department" name="keyword" />
                    <button type="submit"><i class="fa-search"></i><span class="hide-accessible"> Search</span></button>
                </div>
            </form>
        </div>
    </section>
    <section class="clearfix browse-choices">
        <div class="no-pad-wrapper">
            <div class="list browse-list">
                <a class="fa-arrow-after" href="faculty-directory/departments">View list of departments</a>
                <a class="fa-arrow-after" href="faculty-directory/results/">View all faculty</a>
            </div>
        </div>
    </section>
    <section class="clearfix featured-experts">
        <div class="clearfix header-wrapper sticky">
            <div class="no-pad-wrapper">
                <h2>Featured <span class="hide-accessible-mobile">Faculty </span>Members</h2>
                <a class="fa-arrow-after" href="faculty-directory/results">View all<span class="hide-accessible-mobile"> faculty</span></a>
            </div>
        </div>
        <?php
            $file = "faculty-directory/featured-faculty.php";
            include($path . $content . $secLv . $file);
        ?>
        <a class="sbu-button view-all-button fa-arrow-after" href="faculty-directory/results">View all faculty</a>
    </section>
</article>