        <!--Facebook Like Button-->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <!--Twitter Tweet Button-->
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        <!--Youtube Subscribe Button-->
        <script src="js/social/youtube/platform.js"></script>
        <script>
          function onYtEvent(payload) {
            if (payload.eventType == 'subscribe') {
              // Add code to handle subscribe event.
            } else if (payload.eventType == 'unsubscribe') {
              // Add code to handle unsubscribe event.
            }
            if (window.console) { // for debugging only
              window.console.log('YT event: ', payload);
            }
          }
        </script>
        <!--Pinterest Follow Button-->
        <script type="text/javascript" async src="js/social/pinterest/pinit.js"></script>

        <!-- Begin Second Wrapper -->
        <div id="wrapper">
            <div id="container"> 
            
                <h1>We&#8217;re <span class="darker">Social</span></h1>
                <div class="subtitle sbu-text-shadow">Get the latest in <br /><span class="red">Stony Brook University</span> <br />social media!</div>
                <div id="wall">
                    
                    <div id="social-stream"></div>
                    
                    <div class="clear"></div>

                </div>

                <div class="social-channels-wrapper">
                    <h2><span class="darker">Connect</span> with <span class="red">SBU</span></h2>
                    <div class="social-channels-main clearfix margin-bottom">

                        <div class="facebook-container social-follow-container">
                            <div class="social-label-container"><span class="darker">Like</span> <span class="grey">on</span> <span class="facebook-blue">Facebook</span></div>
                            <div class="social-button-container">
                                <div class="fb-like" data-href="http://www.facebook.com/stonybrooku" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                            </div>
                        </div>

                        <div class="twitter-container social-follow-container">
                            <div class="social-label-container"><span class="darker">Follow</span> <span class="grey">on</span> <span class="twitter-blue">Twitter</span></div>
                            <div class="social-button-container">
                                <a href="https://twitter.com/stonybrooku" class="twitter-follow-button" data-show-count="true" data-show-screen-name="false" data-lang="en">Follow</a>
                            </div>
                        </div>

                        <div class="youtube-container social-follow-container">
                            <div class="social-label-container"><span class="darker">Subscribe</span> <span class="grey">on</span> <span class="youtube-red">YouTube</span></div>
                            <div class="social-button-container">
                                <div class="g-ytsubscribe" data-channel="sbcomm" data-layout="default" data-count="default" data-onytevent="onYtEvent"></div>
                            </div>
                        </div>

                        <div class="flickr-container social-follow-container">
                            <div class="social-label-container"><span class="darker">Photos</span> <span class="grey">on</span> <span class="flickr-pink">Flickr</span></div>
                            <div class="social-button-container">
                                <a href="http://www.flickr.com/photos/37984249@N06/" title="See more SBU photos on Flickr!" target="_blank"><img src="img/flickr/white-flickr.png" width="56" height="26" alt=""></a>
                            </div>
                        </div>

                        <div class="pinterest-container social-follow-container">
                            <div class="social-label-container"><span class="darker">Follow</span> <span class="grey">on</span> <span class="pinterest-red">Pinterest</span></div>
                            <div class="social-button-container">
                                <a data-pin-do="buttonFollow" href="http://www.pinterest.com/stonybrooku/">Follow</a>
                            </div>
                        </div>

                        <div class="instagram-container social-follow-container">
                            <div class="social-label-container"><span class="darker">View</span> <span class="grey">on</span> <span class="instagram-blue">Instagram</span></div>
                            <div class="social-button-container">
                                <a href="http://instagram.com/stonybrooku?ref=badge" target="_blank" class="ig-b- ig-b-v-24"><img src="img/instagram/ig-badge-view-24.png" alt="Instagram" /></a>
                            </div>
                        </div>

                        <div class="linkedin-container social-follow-container">
                            <div class="social-label-container"><span class="darker">Connect</span> <span class="grey">on</span> <span class="linkedin-blue">LinkedIn</span></div>
                            <div class="social-button-container">
                                <script src="//platform.linkedin.com/in.js" type="text/javascript">
                                  lang: en_US
                                </script>
                                <script type="IN/FollowCompany" data-id="7201" data-counter="right"></script>
                            </div>
                        </div>

                        <div class="tumblr-container social-follow-container">
                            <div class="social-label-container"><span class="darker">Follow</span> <span class="grey">on</span> <span class="tumblr-blue">tumblr</span></div>
                            <div class="social-button-container">
                                <iframe class="btn" frameborder="0" border="0" scrolling="no" allowtransparency="true" height="25" width="114" src="http://platform.tumblr.com/v1/follow_button.html?button_type=2&tumblelog=stonybrooku&color_scheme=dark"></iframe>
                            </div>
                        </div>
                    </div>

                    <h2>More <span class="red">SBU</span> <span class="darker">Social</span></h2>
                    <ul class="social-channels-main clearfix">
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Alumni Association</div>
                            <div class="social-channels-container">
                                <a href="http://www.facebook.com/stonybrookalumni" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="http://twitter.com/stonybrookalum" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="http://www.flickr.com/photos/sbuadvancement/sets/" target="_blank"><i class="fa fa-flickr"></i></a>
                                <a href="http://www.linkedin.com/groups?home=&gid=108294&trk=anet_ug_hm" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Athletics (Seawolves)</div>
                            <div class="social-channels-container">
                                <a href="https://www.facebook.com/StonyBrookAthletics" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="https://twitter.com/SBAthletics" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="http://www.youtube.com/stonybrookseawolves" target="_blank"><i class="fa fa-youtube"></i></a>
                                <a href="http://www.goseawolves.org/multimedia/ston-13-social-media.html" target="_blank"><i class="fa fa-ellipsis-h"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Athletic Bands</div>
                            <div class="social-channels-container">
                                <a href="https://www.facebook.com/SBUAthleticBands" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="https://twitter.com/SBUMarchingBand" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.youtube.com/user/SBUAthleticBands" target="_blank"><i class="fa fa-youtube"></i></a>
                                <a href="https://www.flickr.com/photos/spiritofstonybrook/sets/" target="_blank"><i class="fa fa-flickr"></i></a>
                                <a href="http://instagram.com/sbumarchingband" target="_blank"><i class="fa fa-instagram"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Bookstore</div>
                            <div class="social-channels-container">
                                <a href="http://www.facebook.com/SBUbookstore" target="_blank"><i class="fa fa-facebook-square"></i></a> 
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Brookhaven National Lab</div>
                            <div class="social-channels-container">
                                <a href="https://www.facebook.com/brookhavenlab" target="_blank"><i class="fa fa-facebook-square"></i></a> 
                                <a href="http://twitter.com/BrookhavenLab" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="http://www.youtube.com/user/BrookhavenLab" target="_blank"><i class="fa fa-youtube"></i></a>
                                <a href="http://www.flickr.com/photos/brookhavenlab" target="_blank"><i class="fa fa-flickr"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Bursar</div>
                            <div class="social-channels-container">
                                <a href="http://twitter.com/SBUBursarSA" target="_blank"><i class="fa fa-twitter"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Campus Dining Services</div>
                            <div class="social-channels-container">
                                <a href="https://www.facebook.com/SBUDining" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="https://twitter.com/SBU_Eats" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="http://instagram.com/sbu_eats" target="_blank"><i class="fa fa-instagram"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Campus Recreation</div>
                            <div class="social-channels-container">
                                <a href="https://www.facebook.com/SBUCampusRec" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="https://twitter.com/SBUCampusRec" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="http://www.youtube.com/user/CampusRecreationSBU" target="_blank"><i class="fa fa-youtube"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Campus Residences</div>
                            <div class="social-channels-container">
                                <a href="https://www.facebook.com/stonybrook.campusresidences" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="https://twitter.com/SBUCampRes" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.youtube.com/channel/UCvBXKhiz-TJWRrtDh0B5ndw" target="_blank"><i class="fa fa-youtube"></i></a>
                                <a href="http://instagram.com/sbucampres" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/groups/Campus-Residences-8116224" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Career Center</div>
                            <div class="social-channels-container">
                                <a href="https://www.facebook.com/pages/Stony-Brook-University-Career-Center/146234656050" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="https://www.facebook.com/sbucareer?fref=ts" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="http://twitter.com/SBCareerCenter" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="http://www.youtube.com/user/CareerCenterSBU" target="_blank"><i class="fa fa-youtube"></i></a>
                                <a href="http://instagram.com/sbcareercenter/" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="http://goo.gl/NoIp0Z" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Center for Science and Mathematics Education (CESAME)</div>
                            <div class="social-channels-container">
                                <a href="https://www.facebook.com/sbucesame" target="_blank"><i class="fa fa-facebook-square"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Stony Brook Children's</div>
                            <div class="social-channels-container">
                                <a href="http://www.facebook.com/stonybrookchildrens" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="http://www.youtube.com/user/stonybrookchildrens" target="_blank"><i class="fa fa-twitter"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Client Support (IT)</div>
                            <div class="social-channels-container">
                                <a href="https://www.facebook.com/clientsupport" target="_blank"><i class="fa fa-facebook-square"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Commuter Student Services</div>
                            <div class="social-channels-container">
                                <a href="https://www.facebook.com/sbucss" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="http://instagram.com/sbucommuters" target="_blank"><i class="fa fa-instagram"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Computer Science</div>
                            <div class="social-channels-container">
                                <a href="https://www.facebook.com/sbucompsc" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="https://twitter.com/sbuem" target="_blank"><i class="fa fa-twitter"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">DoIt (Information Technology)</div>
                            <div class="social-channels-container">
                                <a href="https://www.facebook.com/sbudoit" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="https://twitter.com/sbudoit" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="http://www.youtube.com/channel/UCbOzIblxmg-Ing9NSEms8Tw" target="_blank"><i class="fa fa-youtube"></i></a>
                                <a href="http://www.flickr.com/photos/101383158@N02/" target="_blank"><i class="fa fa-flickr"></i></a>
                                <a href="http://instagram.com/sbudoit" target="_blank"><i class="fa fa-instagram"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Emergency Management</div>
                            <div class="social-channels-container">
                                <a href="https://twitter.com/SBUEM" target="_blank"><i class="fa fa-twitter"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">External Relations <br />(SBU Buzz)</div>
                            <div class="social-channels-container">
                                <a href="https://twitter.com/sbubuzz" target="_blank"><i class="fa fa-twitter"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Financial Aid</div>
                            <div class="social-channels-container">
                                <a href="https://www.facebook.com/sbufinancialaid" target="_blank"><i class="fa fa-facebook-square"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Happenings Newsletter</div>
                            <div class="social-channels-container">
                                <a href="https://twitter.com/sbhappenings" target="_blank"><i class="fa fa-twitter"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Institute for Ocean <br />Conservation Science</div>
                            <div class="social-channels-container">
                                <a href="http://www.facebook.com/pages/Institute-for-Ocean-Conservation-Science/120598210747" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="http://twitter.com/oceanscience" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="http://www.youtube.com/user/IOCSatSBU" target="_blank"><i class="fa fa-youtube"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Library</div>
                            <div class="social-channels-container">
                                <a href="https://twitter.com/SBULibrary" target="_blank"><i class="fa fa-twitter"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Stony Brook Medicine</div>
                            <div class="social-channels-container">
                                <a href="http://www.facebook.com/stonybrookmed" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="https://twitter.com/StonyBrookMed" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="http://www.youtube.com/stonybrookmedicine" target="_blank"><i class="fa fa-youtube"></i></a>
                                <a href="http://www.flickr.com/photos/stonybrookmedicine" target="_blank"><i class="fa fa-flickr"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Multicultural Affairs</div>
                            <div class="social-channels-container">
                                <a href="https://twitter.com/omaatsbu" target="_blank"><i class="fa fa-twitter"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">News Desk <br />(Media Relations)</div>
                            <div class="social-channels-container">
                                <a href="https://twitter.com/sbunewsdesk" target="_blank"><i class="fa fa-twitter"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Seawolves Marketplace</div>
                            <div class="social-channels-container">
                                <a href="https://www.facebook.com/seawolvesmp" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="https://twitter.com/SeawolvesMarket" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="http://instagram.com/seawolvesmarketplace" target="_blank"><i class="fa fa-instagram"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Student Affairs</div>
                            <div class="social-channels-container">
                                <a href="https://www.facebook.com/pages/SBU-Student-Affairs/218862101583940" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="https://twitter.com/SBU_OSA" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="http://instagram.com/sbustudentaffairs" target="_blank"><i class="fa fa-instagram"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Student Life</div>
                            <div class="social-channels-container">
                                <a href="https://www.facebook.com/SBUstudentlife" target="_blank"><i class="fa fa-facebook-square"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Study Abroad</div>
                            <div class="social-channels-container">
                                <a href="https://www.facebook.com/studyabroadandexchanges" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="https://twitter.com/SBUStudyAbroad" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.flickr.com/photos/stonybrookiaps/sets/" target="_blank"><i class="fa fa-flickr"></i></a>
                                <a href="http://instagram.com/sbustudyabroad" target="_blank"><i class="fa fa-instagram"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Staller Center for the Arts</div>
                            <div class="social-channels-container">
                                <a href="https://www.facebook.com/pages/Staller-Center-for-the-Arts/29775432001" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="https://twitter.com/StallerCenter" target="_blank"><i class="fa fa-twitter"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">University Police</div>
                            <div class="social-channels-container">
                                <a href="https://www.facebook.com/sbupd" target="_blank"><i class="fa fa-facebook-square"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Undergraduate Student Government</div>
                            <div class="social-channels-container">
                                <a href="https://www.facebook.com/sbusg" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="https://twitter.com/SBUSG" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://instagram.com/stonybrookusg" target="_blank"><i class="fa fa-instagram"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">The Wang Center</div>
                            <div class="social-channels-container">
                                <a href="https://www.facebook.com/WangCenter" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="http://twitter.com/TheWangCenter" target="_blank"><i class="fa fa-twitter"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Weekend Life</div>
                            <div class="social-channels-container">
                                <a href="https://www.facebook.com/sbuweekendlife" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="https://twitter.com/sbuweekendlife" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="http://instagram.com/sbuweekendlife" target="_blank"><i class="fa fa-instagram"></i></a>
                            </div>
                        </li>
                        <li class="social-other-item sbu-border-bottom">
                            <div class="social-other-label-container sbu-text-shadow">Wolfie Seawolf</div>
                            <div class="social-channels-container">
                                <a href="https://www.facebook.com/WolfieSeawolf" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="https://twitter.com/WolfieSeawolf" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.youtube.com/user/WolfieSeawolf" target="_blank"><i class="fa fa-youtube"></i></a>
                                <a href="http://instagram.com/wolfieseawolf" target="_blank"><i class="fa fa-instagram"></i></a>
                            </div>
                        </li>
                    </ul>

                    <div class="social-channels-main disclaimer-text clearfix">
                        <div class="sbu-text-shadow">
                            Our social media efforts encourage active discussion and sharing of information and thoughts.<br />
                            We are not responsible for comments or wall postings made by visitors. Comments posted also do not in any way reflect the opinions or policies of Stony Brook University.<br />
                            Please show respect for your fellow users by keeping the discussion civil. Comments are subject to Terms of Use and Code of Conduct applicable to social medium employed.<br />
                            We reserve the right to remove comments that are racist, sexist, abusive, profane, violent, obscene, spam, that advocate illegal activity, contain falsehoods or are wildly off-topic, or that libel, incite, threaten or make ad hominem attacks on Stony Brook students, employees, guests or other individuals. We also do not permit messages selling products or promoting commercial, political or other ventures.<br />
                            In addition, election campaign materials or postings otherwise deemed inappropriate will be deleted by the page administrators.<br />
                            Stony Brook University is not affiliated in any way with ownership of the social media services listed above, nor does the University endorse them.  Each service maintains its own privacy policy, terms of service, privacy statements, and other policies that users must agree to in order to use the services. Stony Brook University is not responsible for your use of these sites. Please consult our <a class="sbu-link" href="http://mobile.cc.stonybrook.edu/sb/social/guidelines" target="_blank">social media guidelines</a> for further advice and best practices.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Wrapper -->