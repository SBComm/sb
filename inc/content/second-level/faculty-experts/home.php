<article class="experts-wrapper">
    <section class="clearfix splash-header">
        <a class="splash-wrapper clearfix" href="faculty-experts">
            <img src="img/misc/lightbulb.png" slt="lightbulb" />
            <h1><strong>Stony Brook</strong> <em>Faculty</em> <span>Experts</span></h1>
        </a>
    </section>
    <section class="clearfix search-experts">
        <div class="no-pad-wrapper">
            <p>The Stony Brook Experts Guide provides news media representatives with a resource
            to identify and connect with Stony Brook University faculty who can provide
            expertise, analysis and commentary on a wide variety of news and research topics.</p>
            <form class="search-list-page" action="faculty-experts/results/" method="get">
                <div class="input-wrap">
                    <input type="hidden" name="view" value="grid" />
                    <input type="text" placeholder="search name or topic" name="keyword" />
                    <button type="submit"><i class="fa-search"></i><span class="hide-accessible"> Search</span></button>
                </div>
            </form>
            <p class="small-line">For immediate assistance, contact the Stony Brook Newsroom at 631.632.6310</p>
        </div>
    </section>
    <section class="clearfix browse-choices">
        <div class="no-pad-wrapper">
            <h3>Trending Topics</h3>
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
            $file = "faculty-experts/featured.php";
            include($path . $content . $secLv . $file);
        ?>
        <a class="sbu-button view-all-button fa-arrow-after" href="faculty-experts/results">View all experts</a>
    </section>
    <section class="search-experts newsroom-promo clearfix">
        <p>The <strong>Office of Media Relations</strong> promotes institutional achievements, student stories, faculty research, programs, economic development and campus events, sharing the University’s story with local, regional, national, and international news media using a variety of media platforms.</p>
        <p><a class="external-link-hover" href="http://stonybrook.edu/news/" target="_blank">Visit the Newsroom</a></p>
    </section>
    <section class="search-experts contact-footer clearfix">
        <p>Looking to get in touch with an expert?</p>
        <a class="sbu-button view-all-button fa-arrow-after show-search-overlay" href="http://sb.cc.stonybrook.edu/news/media_relations/contact.php" target="_blank">Contact Us</a>
    </section>
    <section class="clearfix search-experts search-experts-inside hide-accessible">
        <div class="no-pad-wrapper clearfix">
            <p class="label clearfix">To arrange an interview with any member of our faculty, contact the <span class="nowrap">Stony Brook Newsroom</span>.</p>
            <p class="label clearfix default-font-size"><a class="sbu-button fa-arrow-after clearfix" href="http://sb.cc.stonybrook.edu/news/media_relations/contact.php">Submit a Request</a></p>
            <p class="divider clearfix"><span>or</span></p>
            <p class="label clearfix center-text">Call the Stony Brook Newsroom directly at 631.632.6310</p>
            <!--<p class="label clearfix default-font-size"><a class="sbu-button fa-arrow-after clearfix" href="http://sb.cc.stonybrook.edu/news/media_relations/contact.php">View all contact information</a></p>-->
            <a class="close-search-overlay" href="."><i class="fa-times"></i><span class="hide-accessible"> Close</span></a>
        </div>
    </section>
</article>