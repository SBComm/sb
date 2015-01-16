<article class="summer-wrapper">
    <section class="clearfix summer-splash">
        <div class="fade-to-black">
            <div class="border-box no-pad-wrapper clearfix">
                <?php
                    $file = "summer-session/summer-audience-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
                <div class="blurb">
                    <h3>Why Summer at <span class="nowrap">Stony Brook?</span></h3>
                    <p>Get ahead, and still have time to play.<br />
                    Every summer, we offer more than <span class="nowrap"><a href="summer-session/courses">500 courses</a> in 60 subjects.</span></p>
                </div>
            </div>
        </div>
    </section>

    <?php
        $file = "summer-session/widgets/sessions-sky.php";
        include($path . $content . $secLv . $file);
    ?>

    <?php
        $file = "summer-session/widgets/course-circles.php";
        include($path . $content . $secLv . $file);
    ?>

</article>