		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

		<script type="text/javascript" src="js/cd-dropdown/jquery.dropdown.js"></script>
		<script type="text/javascript">
			$( function() {
				$( '#cd-dropdown' ).dropdown( {
					gutter : 0
				} );
			});
		</script>

        <script type="text/javascript" src="js/vendor/jquery.sticky.js"></script>
		<script>
			$(window).load(function(){
				/*console.log("ww: "+$(window).width());*/
				if($(window).width()>=1022) {
					$(".site-nav").sticky({ topSpacing: 0 });
				}
			});
			$(window).resize(function(){
				/*console.log("ww: "+$(window).width());*/
				if($(window).width()>=1022) {
					if ($('.sticky-wrapper').length == 0) { 
					    $(".site-nav").sticky({ topSpacing: 0 });
					}
				}
			});
		</script>

		<script src="js/vendor/jquery.easing.1.3.js"></script>
		<script src="js/vendor/jquery.easing.compatibility.js"></script>
		<script src="js/vendor/jquery.scrollTo.min.js"></script>
		<script src="js/vendor/jquery.localScroll.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/vendor/fastclick.js"></script>
        <script type="text/javascript">
		    //<![CDATA[
		        $(function() {
				    FastClick.attach(document.body);
				});
		    //]]>
		</script>
		<script src="js/vendor/placeholders.jquery.min.js"></script>
        <script src="js/vendor/jquery.fittext.js"></script>
		<script type="text/javascript">
		    //<![CDATA[
				$(".site-name").fitText({ minFontSize: '20px', maxFontSize: '27px' });
		    //]]>
		</script>

		<!-- BEGIN Page Specific Includes -->
		<?php if($page_type=='social-hub') { ?>

        	<script type="text/javascript" src="js/social/jquery.plugins.js"></script>
			<script type="text/javascript" src="js/social/jquery.site.js"></script>
			<script type="text/javascript" src="js/social/jquery.social.stream.wall.1.3.js"></script>
			<script type="text/javascript" src="js/social/jquery.social.stream.1.5.4.js"></script>
			<script type="text/javascript" src="js/social/preload-messages.js"></script>

			<script type="text/javascript">
				jQuery(document).ready(function($){
					$('#social-stream').dcSocialStream({
						feeds: {
							twitter: {
								id: 'stonybrooku,sbubuzz,sbudoit',
								thumb: true
							},
							rss: {
								id: 'http://sb.cc.stonybrook.edu/news/_resources/rss/all.rss'
							},
							facebook: {
								id: '30450493231,218862101583940',
								text: 'contentSnippet'
							},
							youtube: {
								id: 'sbcomm,UCbOzIblxmg-Ing9NSEms8Tw',
								thumb: 'default'
							},
							pinterest: {
								id: 'stonybrooku',
							},
							flickr: {
								id: '37984249@N06,101383158@N02'
							},
							instagram: {
								id: '!46695629,!584430024,!320497946',
								accessToken: '46695629.992187b.160cb0d8518e4cb8ab72461002480d03',
								clientId: '992187b36560494abe8ea63eebf2c9c3',
								thumb: 'thumbnail',
								comments: 3,
								likes: 10
							}
						},
						rotate: {
							delay: 0
						},
						control: false,
						filter: true,
						wall: true,
						order: 'date',
						max: 'limit',
						limit: 8,
						iconPath: 'images/dcsns-dark/',
						imagePath: 'images/dcsns-dark/'
					});
								 
				});
			</script>

        	<script type="text/javascript" src="js/social/custom.js"></script>

        <?php } ?>

		<?php if($page_type=='bulletin') { ?>
			<script src="js/vendor/jquery.fastLiveFilter.js"></script>
			<script>
			    $(function() {
			        $('#all-courses').fastLiveFilter('#all-courses-list');
			    });
			</script>
        <?php } ?>
        <!-- END Page Specific Includes -->

        <!-- BEGIN Element Specific Includes -->
        <?php if($accordian_nav==true) { ?>
        	<script type="text/javascript" src="js/elements/accordian-nav/accordian-nav.js"></script>
        <?php } ?>

        <?php if($text_filter==true) { ?>
        	<script type="text/javascript" src="js/elements/filter/text-filter.js"></script>
        <?php } ?>
        <!-- END Element Specific Includes -->

        <!-- window.load() -->
        <script type="text/javascript">
	        $(window).load(function() { // makes sure the whole site is loaded

	        	<?php if($page_type=='social-hub') { ?>

		        	/* Check if there is a default 'show' parameter in the URL and if so,
		        	   select that filter automatically on load 
					   EXAMPLE: http://www.stonybrook.edu/social?show=facebook
		        	*/
		        	console.log(decodeURIComponent($.urlParam('show')));
		        	var show = $.urlParam('show'),
		        		socialSelector = '',
		        		hasDefault = true;
		        	switch(show) {
						case 'all':
							hasDefault = false;
						    break;
						case 'facebook':
						    socialSelector = '.f-facebook a';
						    break;
						case 'twitter':
						    socialSelector = '.f-twitter a';
						    break;
						case 'youtube':
						    socialSelector = '.f-youtube a';
						    break;
						case 'flickr':
						    socialSelector = '.f-flickr a';
						    break;
						case 'pinterest':
						    socialSelector = '.f-pinterest a';
						    break;
						case 'rss':
						    socialSelector = '.f-rss a';
						    break;
						case 'instagram':
						    socialSelector = '.f-instagram a';
						    break;
						default:
							hasDefault = false;
					}
					if(hasDefault) {
						$(socialSelector).click();
					}

				<?php } ?>
				

				<?php if($page_loader) { ?>

		            $('#status').fadeOut(); // will first fade out the loading animation
		            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.

				<?php } ?>
				<?php if($page_type=='social-hub') { ?>
					//on pages where body is default visibility:hidden
		            $('body').delay(350).css({'overflow':'visible'});

		        <?php } ?>

		        <?php if($page_to_top_link) { ?>
		        	//hide link by default
		        	$('#totop').addClass('invisible');

		        <?php } ?>
	            
	            <?php if($page_scroll) { ?>
	            	//define scrollto target for page load
	            	var scrollToTarget = '';
		        	<?php if($page_scroll_el=='logo') { ?>
		        		scrollToTarget = '.logo-container';
		            <?php } else if($page_scroll_el=='audience-nav') { ?>
		            	scrollToTarget = '.audience-nav';
		            <?php } else if($page_scroll_el=='main-nav') { ?>
		            	scrollToTarget = '.main-nav-container';
		            <?php } else if($page_scroll_el=='bottom') { ?>
		            	scrollToTarget = '100%';
		            <?php } ?>
		            if(scrollToTarget) {
		           		$('body').scrollTo( scrollToTarget, <?php echo $page_scroll_time; ?> );
		            }

		        <?php } ?>
	        })
		</script>


       