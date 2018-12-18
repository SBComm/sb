<article>
    <section>
        <div class="cse-input-wrapper wrapper border-box">
            <h2>Search</h2>

            <div id="cse-search-input">

                <script>
                    /* Google Custom Search init */
                    (function() {
                    var cx = '005124310102344715141:3nlcacoyxzc';
                    var gcse = document.createElement('script');
                    gcse.type = 'text/javascript';
                    gcse.async = true;
                    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                        '//cse.google.com/cse.js?cx=' + cx;
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