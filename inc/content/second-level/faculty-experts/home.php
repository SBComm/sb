<article class="experts-wrapper">
    <section class="clearfix splash-header">
        <a class="splash-wrapper clearfix" href="faculty-experts">
            <img src="img/misc/lightbulb.png" slt="lightbulb" />
            <h1><strong>Stony Brook</strong> <em>Faculty</em> <span>Experts</span></h1>
        </a>
    </section>
    <section class="clearfix search-experts">
        <div class="no-pad-wrapper">
            <p>Use this online search tool when looking to identify qualified experts <br />to comment on a broad range of timely news and scholarly topics.</p>
            <form class="search-list-page" action="faculty-experts/results/" method="get">
                <div class="input-wrap">
                    <input type="hidden" name="view" value="grid" />
                    <input type="text" placeholder="search by name or topic" name="keyword" />
                    <button type="submit"><i class="fa-search"></i><span class="hide-accessible"> Search</span></button>
                </div>
            </form>
        </div>
    </section>
    <section class="clearfix browse-choices">
        <div class="no-pad-wrapper">
            <h3>Browse Trending Topics</h3>
            <?php
                $file = "faculty-experts/trending-topics.php";
                include($path . $content . $secLv . $file);
            ?>
            <h3>Browse Experts</h3>
            <div class="list browse-list">
                <a class="fa-arrow-after" href="faculty-experts/departments">View departments</a>
                <a class="fa-arrow-after" href="faculty-experts/topics">View topics</a>
                <a class="fa-arrow-after" href="faculty-experts/results/">View all experts</a>
            </div>
        </div>
    </section>
    <section class="clearfix featured-experts">
        <div class="clearfix header-wrapper sticky">
            <div class="no-pad-wrapper">
                <h2>Featured <span class="hide-accessible-mobile">Faculty </span>Experts</h2>
                <a class="fa-arrow-after" href="faculty-experts/results">View all<span class="hide-accessible-mobile"> experts</span></a>
            </div>
        </div>
        <?php
            $file = "faculty-experts/featured-experts.php";
            include($path . $content . $secLv . $file);
        ?>
        <a class="sbu-button view-all-button fa-arrow-after" href="faculty-experts/results">View all experts</a>
    </section>
    <section class="search-experts contact-footer clearfix">
        <p>Looking to get in touch with an expert?</p>
        <a class="sbu-button view-all-button fa-arrow-after" href="http://sb.cc.stonybrook.edu/news/media_relations/contact.php" target="_blank">Contact Us</a>
    </section>

</article>