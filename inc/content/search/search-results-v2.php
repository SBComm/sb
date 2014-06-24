<article>
    <section>
        <div class="cse-input-wrapper wrapper border-box">
            <h1 class="serif">Search</h1>

            <div id="cse-search-input">

                <script>
                    /* Google Custom Search init */
                    (function() {
                    var cx = '005124310102344715141:zer6ki_efgi';
                    var gcse = document.createElement('script');
                    gcse.type = 'text/javascript';
                    gcse.async = true;
                    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                        '//www.google.com/cse/cse.js?cx=' + cx;
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(gcse, s);
                    })();
                </script>
                <gcse:searchbox></gcse:searchbox>

            </div>

            <ul id="tabbed-nav">
                <li class="selected"><a href="#">Pages</a></li>
                <li><a href="#">People</a></li>
            </ul>

        </div>

        <div class="cse-wrapper border-box">

            <div id="cse-search-results" class="wrapper">
                <gcse:searchresults></gcse:searchresults>
            </div>

        </div>

    </section>
</article>