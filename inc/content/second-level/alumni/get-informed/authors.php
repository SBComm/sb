<article class="get-informed">
    <section class="clearfix center-rule-header inside-header">
        <div class="border-box">
            <h2><a href="alumni/news-and-spotlight/authors">Authors</a></h2>
        </div>
    </section>

    <section id="authors" class="clearfix authors">
        <div class="border-box wrapper clearfix">
            <div class="inside-content">
                <p>Browse through the diverse collection of works from our talented alumni authors</p>
            </div>
        </div>
        <div class="border-box wrapper clearfix authors__books">
            <?php
                $file = "scripts/get-books.php";
                include($path . $file);
            ?>
            <?php
            /*
            // PHP will output books
                <!--cat-->
                <div class="authors__book">
                    <h5>Biography/Memoir</h5>
                    <div class="alumni-books-slider">
                        <!--book-->
                        <div class="alumni-book">
                            <div class="authors__book__flip">
                                <div class="authors__book__flip__card">
                                    <div class="authors__book__flip__card__item authors__book__flip__card__item--front flip-card">
                                        <img src="img/alumni/book-jackets/56-Joe-DiMaggio-Kostya-Kennedy.jpg" alt="" />
                                        <div class="page-curl"><span>Preview</span></div>
                                    </div>

                                    <div class="authors__book__flip__card__item authors__book__flip__card__item--back authors__book__info">
                                        <a class="authors__book__info__title external-link-hover" target="_blank" href="#">The Psychology of Working: A New Perspective for Career Development, Counseling, and Public Policy</a>
                                        <span class="authors__book__info__author">David Blustein '74</span>
                                        <span class="authors__book__info__desc">In this original and major new work, David Blustein places working at the same level of attention for social and behavioral scientists and psychotherapists as other major life concerns, such as intimate relationships, physical and mental health, and socio-economic inequities.physical and mental health, and socio-economic inequities.physical and mental health, and socio-economic inequities.and socio-economic inequities.physical and mental health, and socio-economic inequities.physical and mental health, and socio-economic inequities.</span>
                                        <a class="authors__book__cta sbu-outline-button sbu-outline-button--on-red arrow-after" href="#" target="_blank">View on Amazon</a>
                                        <img src="img/alumni/book-jackets/56-Joe-DiMaggio-Kostya-Kennedy.jpg" alt="" />
                                        <button aria-label="Close Detail pane" class="authors__book__info__close close-details flip-card"><em class="fa fa-times"></em></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/book-->
                    </div>
                </div>
                <!--/cat-->
            */
            ?>
        </div>
        <div class="border-box wrapper clearfix">
            <div class="inside-content">
                <p>* Descriptions are taken from Amazon.com</p>
            </div>
        </div>
    </section>

</article>