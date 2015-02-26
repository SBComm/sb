<article>
    <section class="clearfix inside-header courses-books">
        <div class="border-box no-pad-wrapper clearfix">
            
            <h3 class="wrapper clearfix">Summer Courses</h3>

            <section class="clearfix inside-content inside-page-section-nav">
                <div class="border-box wrapper clearfix overflow-visible">
                    <header class="section-header clearfix">
                        <?php
                            $selected_sub_nav = 2;
                            $file = "summer-session/courses/courses-nav.php";
                            include($path . $content . $secLv . $file);
                        ?>
                    </header>
                </div>
            </section>
        </div>
    </section>

    <?php
        $file = "summer-session/inside-copy.php";
        //include($path . $content . $secLv . $file);
    ?>

    <section id="search-courses" class="clearfix inside-content alt-headers wrapper">

        <h4>Course Search</h4>

        <div class="border-box content clearfix">

            <?php
                $file = "summer-session/widgets/course-search-form.php";
                include($path . $content . $secLv . $file);
            ?>

        </div>

    </section>

</article>