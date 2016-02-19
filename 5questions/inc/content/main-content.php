<!-- <nav> -->
    <?php
        $file = "site-nav.php";
        include($path . $file);
    ?>
<!-- </nav> -->

<section class="clearfix marquee first-section main-video no-overflow">
    <video id="forty-video" class="background-video" loop preload="none">
        <source src="video/sbu-40-under-40.mp4" type="video/mp4" />
        <source src="video/sbu-40-under-40.webm" type="video/webm" />
        <source src="video/sbu-40-under-40.ogv" type="video/ogg" />
    </video>
    <img class="marquee-logo-mobile" src="img/40-under-red-banner-logo-small.png" alt="40 Under Forty logo" />
    <img class="marquee-logo-desktop" src="img/40-under-red-banner-logo-large.png" alt="40 Under Forty logo" />
    <a class="cta arrow-after nivo-lightbox stop-video-trigger" href="https://www.youtube.com/watch?v=hsx1Rs8Sgi0">Watch the Video</a>
    <div class="quote">
        <span>“Great universities are defined by the achievement and support of their alumni. <strong>All of you personify the power of a <br />Stony Brook degree.”</strong></span>
        <em>Stony Brook President Samuel L. Stanley Jr., MD</em>
        <a href="." class="close-quote stop-video-trigger icon-before close-icon-before" aria-label="Close quote"><span class="hide-accessible">Close quote</span></a>
    </div>
</section>
<section class="nomination-period-notice clearfix">
    <span><em class="sbuicon-check icon"></em>Nominations now being accepted<em class="hide-accessible-mobile"> for the 2015 List of Honorees</em>!</span>
    <a class="cta arrow-after animated-pulse" href="nominees">Nominate someone today!</a>
</section>
<section class="honorees-grid-promo clearfix">
    <h2 class="section-header"><span class="text">The <span class="year"><?php echo $program_year; ?></span> Honorees</span></h2>
    <a href="2014" id="panning">
        <span class="cta arrow-after animated-pulse">View the Honorees</span>
    </a>
</section>

<!-- <category-nav> -->
    <?php
        $file = "category-nav.php";
        include($path . $file);
    ?>
<!-- </category-nav> -->

<section class="tweet-this">
    <div class="wrap clearfix">
        <div class="text clearfix">
            <em>See who made the list for <span>@stonybrooku</span>'s best and brightest Alumni in the 2015 <span>#SBU40Under40</span> Recognition Program!</em>
        </div>
        <a class="cta cta-outline clearfix arrow-after social-share-link" href="http://twitter.com/share?text=See%20who%20made%20the%20list%20for%20%40stonybrooku%27s%20best%20and%20brightest%20Alumni%20in%20the%202015%20%23SBU40Under40%20Recognition%20Program!&url=http://stonybrook.edu/40underforty">Tweet This</a>
    </div>
</section>

<!-- <attend-the-event> -->
    <?php
        $file = "attend-the-event.php";
        include($path . $content . $file);
    ?>
<!-- </attend-the-event> -->

<section id="nomination" class="nominations-promo">
    <div class="wrap clearfix">
        <p class="text clearfix">Do you know a bright, innovative, entrepreneurial-spirited young graduate who has used their Stony Brook degree to pursue their passions, to help others, and lead positive change?</p>
        <!--<strong class="accepted-soon">Nominations will be accepted soon!</strong>-->
        <strong class="nominate-today">Nominate someone today! <a class="arrow-after" href="nominees#guidelines">View guidelines</a></strong>
        <!--<strong class="nominations-are-closed">Nominations are closed for 2015.</strong>-->
        <a class="cta cta-outline clearfix arrow-after" href="nominees">Submit Nomination</a>
        <a class="cta cta-outline clearfix arrow-after" href="nominees">View Nominees</a>
    </div>
</section>

<section id="news" class="tweets-and-news clearfix">
    <div class="wrapper">
        <div class="twitter-feed clearfix">
            <h3 class="icon-before">Twitter</h3>
            <div id="wall">
                <div id="social-stream"></div>
                <div class="clear"></div>
            </div>
            <div class="wrap">
                <a class="cta cta-outline clearfix arrow-after social-share-link-larger" href="https://twitter.com/hashtag/sbu40under40">View More Tweets</a>
            </div>
        </div>
        <div class="news-feed clearfix">
            <h3 class="icon-before">News</h3>
            <ul class="news">
                <li><a class="clearfix" href="#"><strong><em class="sbuicon-newspaper"></em></strong> <span>SBU Student Neha Kinariwalla Makes Forbes 30 Under 30 List</span></a></li>
                <li><a class="clearfix" href="#"><strong><em class="sbuicon-newspaper"></em></strong> <span>SBU Student Neha Kinariwalla Makes Forbes 30 Under 30 List</span></a></li>
                <li><a class="clearfix" href="#"><strong><em class="sbuicon-newspaper"></em></strong> <span>SBU Student Neha Kinariwalla Makes Forbes 30 Under 30 List</span></a></li>
                <li><a class="clearfix" href="#"><strong><em class="sbuicon-newspaper"></em></strong> <span>SBU Student Neha Kinariwalla Makes Forbes 30 Under 30 List</span></a></li>
                <li><a class="clearfix" href="#"><strong><em class="sbuicon-newspaper"></em></strong> <span>SBU Student Neha Kinariwalla Makes Forbes 30 Under 30 List</span></a></li>
                <li><a class="clearfix" href="#"><strong><em class="sbuicon-newspaper"></em></strong> <span>SBU Student Neha Kinariwalla Makes Forbes 30 Under 30 List</span></a></li>
            </ul>
            <div class="wrap">
                <a class="cta cta-outline clearfix arrow-after" href="news">Read More News</a>
            </div>
        </div>
    </div>
</section>

<section class="event-gallery clearfix" data-flickr-id="72157649295457517">
    <div class="border-box">
        <h3>2014 Event Gallery</h3>
        <div class="carousel-wrapper">
            <div id="the-carousel" class="owl-carousel">
                <!-- Images loaded via AJAX from Flickr -->
            </div>
            <div class="owl-prev owl-prev-3" data-owl-id="the-carousel-3"><em class="sbuicon-arrow-left3"></em></div>
            <div class="owl-next owl-next-3" data-owl-id="the-carousel-3"><em class="sbuicon-arrow-right3"></em></div>
        </div>
        <p>Email your event photo(s) to <a href="mailto:40underforty@stonybrook.edu" target="_blank">40underforty@stonybrook.edu</a></p>
    </div>
</section>

<section id="contact" class="contact">
    <p>
        Stony Brook University<br />
        Advancement Events<br />
        (631) 632-4466<br />
        advancementevents@stonybrook.edu
    </p>
</section>