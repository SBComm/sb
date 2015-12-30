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
        <script src="https://apis.google.com/js/platform.js"></script>
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
                <div class="subtitle sbu-text-shadow">Get the latest in <br /><span class="red">Stony Brook Alumni</span> <br />social media!</div>
                <div id="wall">
                    
                    <div id="social-stream-alum"></div>
                    
                    <div class="clear"></div>

                </div>

                <div class="social-channels-wrapper">
                    <h2><span class="darker">Connect</span> with <span class="red">SBU Alumni</span></h2>
                    <div class="social-channels-main clearfix margin-bottom">

                        <div class="facebook-container social-follow-container">
                            <div class="social-label-container"><span class="darker">Like</span> <span class="grey">on</span> <span class="facebook-blue">Facebook</span></div>
                            <div class="social-button-container">
                                <div class="fb-like" data-href="http://www.facebook.com/stonybrookalumni" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                            </div>
                        </div>

                        <div class="twitter-container social-follow-container">
                            <div class="social-label-container"><span class="darker">Follow</span> <span class="grey">on</span> <span class="twitter-blue">Twitter</span></div>
                            <div class="social-button-container">
                                <a href="http://twitter.com/stonybrookalum" class="twitter-follow-button" data-show-count="true" data-show-screen-name="false" data-lang="en">Follow</a>
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
                                <a href="http://www.flickr.com/photos/sbuadvancement/sets/" title="See more SBU photos on Flickr!" target="_blank"><img src="img/flickr/white-flickr.png" width="56" height="26" alt=""></a>
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
                                <a href="http://instagram.com/stonybrookalum?ref=badge" target="_blank" class="ig-b- ig-b-v-24"><img src="img/instagram/ig-badge-view-24.png" alt="Instagram" /></a>
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
                                <iframe class="btn" frameborder="0" border="0" scrolling="no" allowtransparency="true" height="25" width="114" src="https://platform.tumblr.com/v1/follow_button.html?button_type=2&tumblelog=stonybrooku&color_scheme=dark"></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="social-channels-main disclaimer-text clearfix">
                        <div class="sbu-text-shadow" style="text-align: center">
                           Please consult our <a class="sbu-link" href="alumni/social-media-guidelines/">social media guidelines</a> for  advice and best practices.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Wrapper -->