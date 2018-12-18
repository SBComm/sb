<article>
    <section>
        <div class="cse-input-wrapper wrapper border-box">
            <h2>Search</h2>

            <div id="cse-search-input">

                <div id='cse-search-form' style='width: 100%;'>Loading</div>
                <script src='//www.google.com/jsapi' type='text/javascript'></script>
                <script type='text/javascript'>
                google.load('search', '1', {language: 'en', style: google.loader.themes.V2_DEFAULT});
                google.setOnLoadCallback(function() {
                    var customSearchOptions = {};
                    var orderByOptions = {};
                    orderByOptions['keys'] = [{label: 'Relevance', key: ''} , {label: 'Date', key: 'date'}];
                    customSearchOptions['enableOrderBy'] = true;
                    customSearchOptions['orderByOptions'] = orderByOptions;
                    var customSearchControl =   new google.search.CustomSearchControl('005124310102344715141:3nlcacoyxzc', customSearchOptions);
                    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
                    var options = new google.search.DrawOptions();
                    options.setSearchFormRoot('cse-search-form');
                    options.setAutoComplete(true);
                    customSearchControl.draw('cse', options);
                }, true);
                </script>

            </div>

            <ul id="tabbed-nav">
                <li class="selected"><a href="#">Pages</a></li>
                <li><a href="#">People</a></li>
            </ul>

        </div>

        <div class="cse-wrapper border-box">

            <div id="cse-search-results" class="wrapper">
                <div id='cse' style='width: 100%;'></div>
            </div>

        </div>

    </section>
</article>