<article class="ghosted-campus">
    <section class="transparent-background page-title">
    </section>
</article>
<article>
    <section class="clearfix inside-content main-inside-content two-col white-background">
        <div class="border-box wrapper clearfix pad-top">
            <h3><em class="fa fa-line-chart"></em> Stony Brook Analytics Dashboard</h3>
            <div class="content col-2 col-2-left">
                <h4>Get Your Data!</h4>
                <p>With this reporting tool, you can easily view website activity for a site within the University's OU Campus Content Management System.</p>
                <p>Available data metrics include the following:</p>
                <div class="drop-accordion drop-accordion-1 clearfix">
                    <div class="item">
                        <div class="tab">
                            <span class="label"><i class="fa fa-plus-circle"></i>Pageviews</span>
                        </div>
                        <div class="content clearfix hide-accessible">
                            <div class="content-wrap">
                                <p>The number of times a page is accessed.</p>
                                <p><strong>Type:</strong> Number</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tab">
                            <span class="label"><i class="fa fa-plus-circle"></i>Unique Pageviews</span>
                        </div>
                        <div class="content clearfix hide-accessible">
                            <div class="content-wrap">
                                <p>Every time a page is viewed by a unique individual, a unique pageview is recorded. That is, only one unique pageview will be recorded for a certain viewer, even if he/she views the page multiple times.</p>
                                <p><strong>Type:</strong> Number</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tab">
                            <span class="label"><i class="fa fa-plus-circle"></i>Avg. Time</span>
                        </div>
                        <div class="content clearfix hide-accessible">
                            <div class="content-wrap">
                                <p>Time on page is measured by subtracting the time a visitor hit a page from the time they hit the next page. This is the average of all users' times.</p>
                                <p><strong>Type:</strong> Length in Minutes</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tab">
                            <span class="label"><i class="fa fa-plus-circle"></i>Entrances</span>
                        </div>
                        <div class="content clearfix hide-accessible">
                            <div class="content-wrap">
                                <p>The number of entries by visitors into the pages of your website.</p>
                                <p><strong>Type:</strong> Number</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tab">
                            <span class="label"><i class="fa fa-plus-circle"></i>Bounces</span>
                        </div>
                        <div class="content clearfix hide-accessible">
                            <div class="content-wrap">
                                <p>The percentage of visits with only one pageview. It doesn't matter how long the visitor was on the page or how they left. Technically, it's a visit with only one interaction.</p>
                                <p><strong>Type:</strong> Rate (%)</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tab">
                            <span class="label"><i class="fa fa-plus-circle"></i>Exits</span>
                        </div>
                        <div class="content clearfix hide-accessible">
                            <div class="content-wrap">
                                <p>The number of people who leave your website. Exit % is calculated by dividing exits into page views.</p>
                                <p><strong>Type:</strong> Rate (%)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content col-2 col-2-right">
                <img class="margin-top" src="//www.stonybrook.edu/img/misc/analytics-800.jpg" />
            </div>
            <div id="run-report" class="content grey-box-2">
                <h4>Run Your Report</h4>
                <fieldset>
                    <div id="analyticsForm">
                        <form class="form-horizontal">
                            <div id="requiredControls" class="clearfix">
                                <div id="startDiv" class="control-group one-half">
                                    <label class="control-label" for="startDate">Start Date</label>

                                    <div class="controls">
                                        <input id="startDate" name="startDate" class="rounded-input" type="text"/>
                                        <span id="startHelp" class="help-inline"></span>
                                    </div>
                                </div>
                                <div id="endDiv" class="control-group one-half">
                                    <label class="control-label" for="endDate">End Date</label>

                                    <div class="controls">
                                        <input id="endDate" name="endDate" class="rounded-input" type="text"/>
                                        <span id="endHelp" class="help-inline"></span>
                                    </div>
                                </div>
                            </div>
                            <div id="requiredControls2" class="clearfix">
                                <div id="areaDiv" class="control-group one-half">
                                    <label class="control-label">Site</label>

                                    <div class="controls">
                                        <select id="area" class="rounded-input">
                                            <!--default value: blank-->
                                            <option id="blank">Select a site...</option>
                                            <option id="">All OU Campus Sites</option>
                                            <?php 
                                                $file = "analytics/site-options.php";
                                                include($pathForContent . $content . $file);
                                            ?>
                                            <!--
                                            <option id="commcms\/advancement">Advancement</option>
                                            -->
                                        </select>
                                        <span id="areaHelp" class="help-inline"></span>
                                    </div>
                                    <p class="small-text">If you do not see your website or section, you can <a class="external-link" href="http://www.stonybrook.edu/commcms/_cms/support/help_ticket.html" target="_blank">request access</a></p>
                                </div>
                                <div id="filterInputDiv" class="control-group one-half">
                                    <label class="control-label tooltip" title="You can specify a sub-directory within your site (optional)" for="filter">Sub-Directory</label>

                                    <div class="controls">
                                        <div class="input-prepend directory-indicator-wrapper">
                                            <span class="directory-indicator">/</span>
                                            <input id="filter" name="filter" class="rounded-input" type="text" placeholder="example/directories/"/>
                                        </div>
                                        <span id="filterHelp" class="help-inline" style="display: none;">Use this to include only a specific subdirectory in your results.</span>
                                    </div>
                                </div>
                            </div>
                            <div id="optionalControls" class="whole clearfix">
                                <div id="metricsDiv" class="control-group clearfix">
                                    <label class="control-label" for="filter">Data Fields</label>

                                    <div class="controls clearfix">
                                        <label class="checkbox inline tooltip" title="The number of times a page is accessed">
                                            <input type="checkbox" id="chkPageviews" name="metrics" value="ga:pageviews" checked/>Pageviews</label>
                                        <label class="checkbox inline tooltip" title="The number of pageviews by unique viewers">
                                            <input type="checkbox" id="chkUnique" name="metrics" value="ga:uniquePageviews"/>Unique Pageviews</label>
                                        <label class="checkbox inline tooltip" title="Average time users spent on a page">
                                            <input type="checkbox" id="avgTime" name="metrics" value="ga:avgTimeOnPage"/>Avg. Time</label>
                                        <label class="checkbox inline tooltip" title="Number of visitors who entered your website by viewing this page first">
                                            <input type="checkbox" id="entrance" name="metrics" value="ga:entrances"/>Entrances</label>
                                        <label class="checkbox inline tooltip" title="The percentage of visits with only one pageview">
                                            <input type="checkbox" id="bounce" name="metrics" value="ga:visitBounceRate"/>Bounces</label>
                                        <label class="checkbox inline tooltip" title="The rate of the number of exits ">
                                            <input type="checkbox" id="exit" name="metrics" value="ga:exitRate"/>Exits</label>
                                    </div>
                                    <div id="metricsHelp" class="help-inline clearfix"></div>
                                </div>
                            </div>
                            <div class="form-actions whole">
                                <button type="button" class="btn btn-primary sbu-button clearfix search-button" onclick="loadData()">Run Report <em class="fa fa-angle-right"></em>
                                </button>
                            </div>
                        </form>
                    </div>
                </fieldset>
            </div>

            <div id="target" class="content clearfix report-output"></div>

        </div>
    </section>

</article>

