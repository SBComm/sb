<article class="clearfix second-level-header">
    <section class="header-title-image-wang page-title">
        <div class="wrapper border-box">
            <h1><a href="majors-minors-programs/">Majors, Minors &amp; Programs</a></h1>
        </div>
    </section>

    <section class="clearfix page-content majors-minors white-background">
        <div class="border-box wrapper clearfix">
            <h3>Explore over 200 Academic Programs!</h3>
            <div class="content clearfix">
                <input id="live-filter-search" class="rounded-input" placeholder="Search programs, degrees, etc.">
                <div class="key-icons pad-top">
                    <!--<div class="key-icons--item do-live-filter-search-term" data-live-filter-term="Major"><span class="key-icons--icon key-icons--icon_red key-icons--icon_circle">M</span> = Major</div>
                    <div class="key-icons--item do-live-filter-search-term" data-live-filter-term="Minor"><span class="key-icons--icon key-icons--icon_aqua key-icons--icon_circle">m</span> = minor</div>-->
                    <div class="key-icons--item do-live-filter-search-term" data-live-filter-term="Bachelor"><span class="key-icons--icon key-icons--icon_blue">&nbsp;</span> = Bachelor</div>
                    <div class="key-icons--item do-live-filter-search-term" data-live-filter-term="Master"><span class="key-icons--icon key-icons--icon_red">&nbsp;</span> = Master</div>
                    <div class="key-icons--item do-live-filter-search-term" data-live-filter-term="Doctorate"><span class="key-icons--icon key-icons--icon_green">&nbsp;</span> = Doctorate</div>
                    <div class="key-icons--item do-live-filter-search-term" data-live-filter-term="Certificate"><span class="key-icons--icon key-icons--icon_yellow">&nbsp;</span> = Certificate</div>
                    <!--<div class="key-icons--item do-live-filter-search-term" data-live-filter-term="Non-degree"><span class="key-icons--icon key-icons--icon_orange">&nbsp;</span> = Non-degree</div>-->
                    <div class="key-icons--item do-live-filter-search-term" data-live-filter-term="Special"><span class="key-icons--icon key-icons--icon_purple">&nbsp;</span> = Special</div>
                    <div class="key-icons--item do-live-filter-search-term" data-live-filter-term="Non-Degree"><span class="key-icons--icon key-icons--icon_black">&nbsp;</span> = Non-Degree</div>
                    <!--<div class="key-icons--item do-live-filter-search-term" data-live-filter-term="Institute"><span class="key-icons--icon key-icons--icon_black">C</span> = Center / Institute</div>
                    <div class="key-icons--item do-live-filter-search-term" data-live-filter-term="Apparel"><span class="key-icons--icon key-icons--icon_yellow">A</span> = Apparel / Store</div>-->
                    <div class="key-icons--item do-live-filter-search-term" data-live-filter-term=""><span class="key-icons--icon key-icons--icon_grey key-icons--icon_circle"><em class="fa fa-eye"></em></span> Show All</div>
                </div>
                <div id="live-filter-list" class="three-col-list-wrapper searchable major-minor-badges major-minor-badges--wider-badges" data-search-id="course-list">
                        
                        <?php
                            include($path . 'scripts/get-academics-programs.php');
                        ?>

                        <!--
                    <ul>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=acc">Accounting</a>
                            <div class="wider-badges-wrapper">
                                <span class="key-icons--icon key-icons--icon_aqua key-icons--icon_circle tooltip tooltip--no-icon-after" title="Minor">m<span class="hide-accessible">inor</span></span>
                            </div>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=hsq">Adapted Aquatics</a>
                            <div class="wider-badges-wrapper">
                                <span class="key-icons--icon key-icons--icon_aqua key-icons--icon_circle tooltip tooltip--no-icon-after" title="Minor">m<span class="hide-accessible">inor</span></span>
                            </div>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=afs">Africana Studies, BA</a>
                            <div class="wider-badges-wrapper">
                                <span class="key-icons--icon key-icons--icon_blue tooltip tooltip--no-icon-after" title="MA">MA<span class="hide-accessible">Credential: MA</span></span>
                                <span class="key-icons--icon key-icons--icon_yellow tooltip tooltip--no-icon-after" title="Graduate Certificate">C<span class="hide-accessible">Certificate: Graduate Certificate</span></span>
                            </div>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=afs">Africana Studies, BA</a>
                            <div class="wider-badges-wrapper">
                                <span class="key-icons--icon key-icons--icon_green tooltip tooltip--no-icon-after" title="PhD">PhD<span class="hide-accessible">Doctorate: PhD</span></span>
                                <span class="key-icons--icon key-icons--icon_blue tooltip tooltip--no-icon-after" title="MS">MS<span class="hide-accessible">Credential: MS</span></span>
                                <span class="key-icons--icon key-icons--icon_yellow tooltip tooltip--no-icon-after" title="Graduate Certificate">C<span class="hide-accessible">Certificate: Graduate Certificate</span></span>
                            </div>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=afs">Technology Systems Management</a>
                            <div class="wider-badges-wrapper">
                                <span class="key-icons--icon key-icons--icon_green tooltip tooltip--no-icon-after" title="MD">MD<span class="hide-accessible">Doctorate: MD</span></span>
                                <span class="key-icons--icon key-icons--icon_green tooltip tooltip--no-icon-after" title="DDS">DDS<span class="hide-accessible">Doctorate: DDS</span></span>
                                <span class="key-icons--icon key-icons--icon_blue tooltip tooltip--no-icon-after" title="MPH">MPH<span class="hide-accessible">Credential: MPH</span></span>
                                <span class="key-icons--icon key-icons--icon_blue tooltip tooltip--no-icon-after" title="MPH/MBA">MPH/MBA<span class="hide-accessible">Credential: MPH/MBA</span></span>
                                <span class="key-icons--icon key-icons--icon_blue tooltip tooltip--no-icon-after" title="MPH/MAPP">MPH/MAPP<span class="hide-accessible">Credential: MPH/MAPP</span></span>
                            </div>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=afs">Medical Humanities Compassionate Care and Bioethics</a>
                            <div class="wider-badges-wrapper">
                                <span class="key-icons--icon key-icons--icon_green tooltip tooltip--no-icon-after" title="MD">MD<span class="hide-accessible">Doctorate: MD</span></span>
                                <span class="key-icons--icon key-icons--icon_green tooltip tooltip--no-icon-after" title="DDS">DDS<span class="hide-accessible">Doctorate: DDS</span></span>
                                <span class="key-icons--icon key-icons--icon_blue tooltip tooltip--no-icon-after" title="MPH">MPH<span class="hide-accessible">Credential: MPH</span></span>
                                <span class="key-icons--icon key-icons--icon_blue tooltip tooltip--no-icon-after" title="MPH/MBA">MPH/MBA<span class="hide-accessible">Credential: MPH/MBA</span></span>
                                <span class="key-icons--icon key-icons--icon_yellow tooltip tooltip--no-icon-after" title="Graduate Certificate">C<span class="hide-accessible">Certificate: Graduate Certificate</span></span>
                            </div>
                        </li>
                        -->



                        <!--
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=afs">Africana Studies, BA</a>
                            <div class="wider-badges-wrapper">
                                <span class="key-icons--icon key-icons--icon_red key-icons--icon_circle tooltip tooltip--no-icon-after" title="Major">M<span class="hide-accessible">ajor</span></span>
                                <span class="key-icons--icon key-icons--icon_blue tooltip tooltip--no-icon-after" title="B.A.">BA<span class="hide-accessible">Credential: B.A.</span></span>
                                <span class="key-icons--icon key-icons--icon_blue tooltip tooltip--no-icon-after" title="B.A./M.B.A.">BA/MBA<span class="hide-accessible">Credential: B.A./M.B.A.</span></span>
                                <span class="key-icons--icon key-icons--icon_aqua key-icons--icon_circle tooltip tooltip--no-icon-after" title="Minor">m<span class="hide-accessible">inor</span></span>

                                <span class="key-icons--icon key-icons--icon_yellow tooltip tooltip--no-icon-after" title="Graduate Certificate">C<span class="hide-accessible">Certificate: Graduate Certificate</span></span>
                            </div>
                        </li>
                        -->
                        <!--
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=amr">American Studies, BA</a>
                            <span class="major">M<span class="hide-accessible">ajor</span></span>
                            <span class="minor">m<span class="hide-accessible">inor</span></span>
                            <ul class="default-bullets">
                                <li>American People</li>
                                <li>Arts in Societies</li>
                                <li>Ethnicity, Race, Gender &amp; Philosophy</li>
                                <li>History &amp; Politics</li>
                            </ul>
                        </li>
                        -->



                        <!-- TEST CONTENT FOR A VISUAL-->
                        <!--<div id="TEST_REMOVE_ME">
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=ant">Anthropology, BA</a>
                            <span class="major">M<span class="hide-accessible">ajor</span></span>
                            <span class="minor">m<span class="hide-accessible">inor</span></span>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=ams">Applied Mathematics &amp; Statistics, BS</a>
                            <span class="major">M<span class="hide-accessible">ajor</span></span>
                            <span class="minor">m<span class="hide-accessible">inor</span></span>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=arh">Art History &amp; Criticism, BA</a>
                            <span class="major">M<span class="hide-accessible">ajor</span></span>
                            <span class="minor">m<span class="hide-accessible">inor</span></span>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=ars">Art, Studio, BA</a>
                            <span class="major">M<span class="hide-accessible">ajor</span></span>
                            <span class="minor">m<span class="hide-accessible">inor</span></span>
                            <ul class="default-bullets">
                                <li>Multimedia/Photography &amp; Printmaking</li>
                                <li>Painting &amp; Drawing</li>
                                <li>Sculpture &amp; Ceramic Sculpture</li>
                            </ul>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=aas">Asian &amp; Asian American Studies, BA</a>
                            <span class="major">M<span class="hide-accessible">ajor</span></span>
                            <span class="minor">m<span class="hide-accessible">inor</span></span>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=ast">Astronomy/Planetary Sciences, BS</a>
                            <span class="major">M<span class="hide-accessible">ajor</span></span>
                            <span class="minor">m<span class="hide-accessible">inor</span></span>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=hal">Athletic Training, BS</a>
                            <span class="major">M<span class="hide-accessible">ajor</span></span>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=atm">Atmospheric and Oceanic Sciences, BS</a>
                            <span class="major">M<span class="hide-accessible">ajor</span></span>
                            <ul class="default-bullets">
                                <li>Atmosphere/Ocean</li>
                                <li>Meteorology</li>
                            </ul>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=bch">Biochemistry, BS</a>
                            <span class="major">M<span class="hide-accessible">ajor</span></span>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=bng">Bioengineering</a>
                            <span class="minor">m<span class="hide-accessible">inor</span></span>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=bio">Biology, BS</a>
                            <span class="major">M<span class="hide-accessible">ajor</span></span>
                            <span class="minor">m<span class="hide-accessible">inor</span></span>
                            <ul class="default-bullets">
                                <li>Biomedical Engineering</li>
                                <li>Developmental Genetics</li>
                                <li>Ecology &amp; Evolution</li>
                                <li>Environmental Biology</li>
                                <li>General Biology</li>
                                <li>Neuroscience</li>
                            </ul>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=bes">Biomaterials</a>
                            <span class="minor">m<span class="hide-accessible">inor</span></span>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=bme">Biomedical Engineering, BE</a>
                            <span class="major">M<span class="hide-accessible">ajor</span></span>
                            <ul class="default-bullets">
                                <li>Bioelectricity &amp; Bioimaging</li>
                                <li>Biomechanics &amp; Biomaterials</li>
                                <li>Molecular &amp; Cellular Biomedical Engineering</li>
                            </ul>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=bus">Business Management, BS</a>
                            <span class="major">M<span class="hide-accessible">ajor</span></span>
                            <span class="minor">m<span class="hide-accessible">inor</span></span>
                            <ul class="default-bullets">
                                <li>Accounting</li>
                                <li>Entrepreneurship</li>
                                <li>Finance</li>
                                <li>International Business</li>
                                <li>Management &amp; Operations</li>
                                <li>Marketing</li>
                                <li>Sustainable Business</li>
                            </ul>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=cme">Chemical &amp; Molecular Engineering, BE</a>
                            <span class="major">M<span class="hide-accessible">ajor</span></span>
                            <ul class="default-bullets">
                                <li>Business</li>
                                <li>Chemistry</li>
                                <li>Materials Science</li>
                                <li>Pharmacology</li>
                                <li>Physics</li>
                                <li>Polymer Science</li>
                                <li>Tissue Engineering</li>
                            </ul>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=che">Chemistry, BA, BS</a>
                            <span class="major">M<span class="hide-accessible">ajor</span></span>
                            <span class="minor">m<span class="hide-accessible">inor</span></span>
                            <ul class="default-bullets">
                                <li>Biological Chemistry</li>
                                <li>Chemical Physics</li>
                                <li>Chemical Science</li>
                                <li>Environmental Chemistry</li>
                                <li>Marine &amp; Atmospheric Chemistry</li>
                            </ul>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=cns">China Studies</a>
                            <span class="minor">m<span class="hide-accessible">inor</span></span>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=ccs">Cinema &amp; Cultural Studies, BA</a>
                            <span class="major">M<span class="hide-accessible">ajor</span></span>
                            <span class="minor">m<span class="hide-accessible">inor</span></span>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=civ">Civil Engineering, BE</a>
                            <span class="major">M<span class="hide-accessible">ajor</span></span>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=cls">Classical Civilization</a>
                            <span class="minor">m<span class="hide-accessible">inor</span></span>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=hae">Clinical Laboratory Sciences, BS</a>
                            <span class="major">M<span class="hide-accessible">ajor</span></span>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=cos">Coastal Environmental Studies, BS</a>
                            <span class="major">M<span class="hide-accessible">ajor</span></span>
                            <span class="minor">m<span class="hide-accessible">inor</span></span>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=clt">Comparative Literature, BA</a>
                            <span class="major">M<span class="hide-accessible">ajor</span></span>
                            <span class="minor">m<span class="hide-accessible">inor</span></span>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=ece">Computer Engineering, BE</a>
                            <span class="major">M<span class="hide-accessible">ajor</span></span>
                            <span class="minor">m<span class="hide-accessible">inor</span></span>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=cse">Computer Science, BS</a>
                            <span class="major">M<span class="hide-accessible">ajor</span></span>
                            <span class="minor">m<span class="hide-accessible">inor</span></span>
                            <ul class="default-bullets">
                                <li>Human-Computer Interaction</li>
                                <li>Game Programming</li>
                                <li>Information Assurance</li>
                            </ul>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=cwl">Creative Writing and Literature</a>
                            <span class="minor">m<span class="hide-accessible">inor</span></span>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=dan">Dance</a>
                            <span class="minor">m<span class="hide-accessible">inor</span></span>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=dia">Digital Arts</a>
                            <span class="minor">m<span class="hide-accessible">inor</span></span>
                        </li>
                        <li>
                            <a href="undergraduate-admissions/academics/program-details?code=ess">Earth &amp; Space Sciences, BA</a>
                            <span class="major">M<span class="hide-accessible">ajor</span></span>
                            <ul class="default-bullets">
                                <li>Astronomy</li>
                                <li>Atmospheric Sciences</li>
                                <li>Biology</li>
                                <li>Chemistry</li>
                                <li>Geology</li>
                                <li>Marine Sciences</li>
                                <li>Physics</li>
                            </ul>
                        </li>
                        </div> -->
                        <!-- END TEST CONTENT -->
                    <!--</ul>-->
                </div>
            </div>
            <div class="content padding-box red-border clearfix margin-top margin-bottom">
                <h4>Undergraduate Bulletin</h4>
                <p>Please note that information in this portion of the Admissions website is maintained in the Undergraduate Bulletin. In some cases, not all program information is displayed. For complete information including academic policies and regulations as well as archived bulletins, please <a class="external-link" href="http://sb.cc.stonybrook.edu/bulletin/current/" target="_blank"><span class="hide-accessible">Click here to </span>visit the Undergraduate Bulletin</a>.</p>
                <h4>Majors and Careers</h4>
                <p><a class="external-link" href="http://career.stonybrook.edu/students/educate/relate-majors-to-careers" target="_blank"><span class="hide-accessible">Click here to </span>Learn more about transferable skills and possible career paths</a>.</p>
            </div>
        </div>
    </section>

    <?php
        $campaignColor = "black";
        $file = "widgets/campaign-banner.php";
        include($path . $file);
    ?>
</article>

