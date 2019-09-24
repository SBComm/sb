		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

		<?php includeAsset('js','js/cd-dropdown/jquery.dropdown.js'); ?>
		<script type="text/javascript">
			$( function() {
				$( '#cd-dropdown' ).dropdown( {
					gutter : 0
				} );
			});
		</script>

        <?php includeAsset('js','js/vendor/jquery.sticky.js'); ?>
		<script> 
			$(window).load(function(){
				doBreadcrumbs();
				$('.breadcrumbs').scrollTo('100%', 400);
				if($(window).width()>=1022) {
					if($('.background-video').length) {
						$('.background-video').get(0).play();
					}
				}
			});
			$(window).resize(function(){
				doBreadcrumbs();
				if($(window).width()>=1022) {
					if ($('.sticky-wrapper').length == 0) { 
						if($('.background-video').length) {
							$('.background-video').get(0).play();
						}
					}
					configureSearchPosition();
				} else {
					if(configuredSearch && !$('html').hasClass('ie9')) {
						resetSearchPosition();
					}
				}

				/* 2017 nav 
				$('.mp-level, .mp-pusher').each(function() {
					console.log($(this).attr('style'));
					if ($(this).attr('style') !== 'transform: translate3d(0px, 0px, 0px);' && $(this).attr('style') !== '') { 
						$(this).attr('style','transform: translate3d(0px, 0px, 0px);');
					}
				});
				$('#mp-pusher').removeClass('mp-pushed'); 
				*/
			});
		</script>

		<?php
			includeAsset('js','js/vendor/jquery.easing.1.3.js');
			includeAsset('js','js/vendor/jquery.easing.compatibility.js');
			includeAsset('js','js/vendor/jquery.scrollTo.min.js');
			includeAsset('js','js/vendor/jquery.localScroll.min.js');
			includeAsset('js','js/vendor/jquery.ba-bbq.js');
			includeAsset('js','js/vendor/jquery.motio.js');
			includeAsset('js','js/vendor/jquery.tooltipster.min.js');
			includeAsset('js','js/plugins.js');
			includeAsset('js','js/main.js');
			includeAsset('js','js/vendor/fastclick.js');
		?>

		<script>
			$(document).ready(function(){
				var bodyClass = '<?=$second_level?>';
			    $('body').addClass(bodyClass);
			});
		</script>

        <script>
	        var pageFadeOverwrite = $.urlParam('pf');
			if (pageFadeOverwrite==1) {
				$('body').prepend('<div id="preloader"><div id="status">&nbsp;</div></div><style type="text/css"> body { overflow: hidden; } </style>');
			}
		</script>

        <?php if($lightbox) { ?>
        	<?php includeAsset('js','plugins/nivo-lightbox/nivo-lightbox.min.js'); ?>
        	<script>
				$(document).ready(function(){
			    	options = $('.nivo-lightbox').attr('data-options');
			    	caption = $('.nivo-lightbox').attr('data-caption');
				    $('.nivo-lightbox').nivoLightbox({
					    afterShowLightbox: function() {
					    	if(options) {
					    		$iframe = $('.nivo-lightbox-content > iframe');
					    		src = $iframe.attr('src');
					        	$iframe.attr('src', src + '?' + options);
					    	}
					    	if(caption=='true') {
					    		initCaptionTrigger();
					    	}
					    }, 
					    onPrev: function() {
					    	if(caption=='true') {
					    		initCaptionTrigger();
					    	}
					    }, 
					    onNext: function() {
					    	if(caption=='true') {
					    		initCaptionTrigger();
					    	}
					    }
					});

					$('.nivo-lightbox-2').nivoLightbox({
					    afterShowLightbox: function() {
					    	if(options) {
					    		$iframe = $('.nivo-lightbox-content > iframe');
					    		src = $iframe.attr('src');
					        	$iframe.attr('src', src + '?' + options);
					    	}
					    	if(caption=='true') {
					    		initCaptionTrigger();
					    	}
					    }, 
					    onPrev: function() {
					    	if(caption=='true') {
					    		initCaptionTrigger();
					    	}
					    }, 
					    onNext: function() {
					    	if(caption=='true') {
					    		initCaptionTrigger();
					    	}
					    }
					});

					$('.nivo-lightbox_captcha-form').nivoLightbox({
					    afterShowLightbox: function() {
					    	$('.nivo-lightbox-overlay #basic-contact-form_admissions-2017 .submit-container').before('<div id="recaptcha-location"></div>');
					    	$('.nivo-lightbox-overlay #basic-contact-form_admissions-2017').append('<script src="https://www.google.com/recaptcha/api.js?onload=reCaptchaOnloadCallback&render=explicit"async defer>');
					    }
					});

					$('.basic-contact-form_admissions-2017_section #recaptcha-location, .basic-contact-form_admissions-2017_section .submit-container').addClass('hide-accessible-desktop');

					var $sourceUrlInput = $('.basic-contact-form_admissions-2017 input#input-source-url');
					var $sourceUrlValue = "<?php echo htmlspecialchars($_POST['type']); ?>";
					if($sourceUrlValue=='') {
						$sourceUrlInput.val(window.location);
					}
				});

			</script>
        <?php } ?>

        <?php if($carousel) { ?>
        	<?php includeAsset('js','js/elements/owl-carousel/owl.carousel.js'); ?>
	        <script>
	            $(document).ready(function() {

	                var owl = $("#the-carousel-1");
	                var owlSlides = owl.children('.item').length;
	                if(owlSlides==1) {
	                	autoPlayValue = false;
	                	 $('.owl-prev-1').remove();
	                	 $('.owl-next-1').remove();
	                } else {
	                	autoPlayValue = 8000;
		                $('.owl-prev-1').on('click', function() {
		                    owl.trigger('owl.prev');
		                });
		                $('.owl-next-1').on('click', function() {
		                    owl.trigger('owl.next');
		                });
	                }

	                owl.owlCarousel({
	                    autoPlay: autoPlayValue,
	                    navigation : false, // Show default next and prev buttons
	                    slideSpeed : 300,
	                    paginationSpeed : 400,
	                    singleItem: true,
	                    transitionStyle : "fade"
	                });

	 			 	<?php if($carousel_2) { ?>
	            		var owl2 = $("#the-carousel-2");
	            		var owlSlides2 = owl2.children('.item').length;
		                if(owlSlides2==1) {
		                	 $('.owl-prev-2').remove();
		                	 $('.owl-next-2').remove();
		                } else {
			                $('.owl-prev-2').on('click', function() {
			                    owl2.trigger('owl.prev');
			                });
			                $('.owl-next-2').on('click', function() {
			                    owl2.trigger('owl.next');
			                });
		                }
		                owl2.owlCarousel({
		                	itemsCustom: [[0,1],[800,2]],
		                    autoPlay: false,
		                    navigation : false, // Show default next and prev buttons
		                    slideSpeed : 1000,
		                    paginationSpeed : 1000
		                });
		            <?php } ?>
	                
	            	<?php if($carousel_3) { ?>
	            		var owl3 = $("#the-carousel-3");
	            		var owlSlides3 = owl3.children('.item').length;
		                if(owlSlides3==1) {
		                	 $('.owl-prev-3').remove();
		                	 $('.owl-next-3').remove();
		                } else {
			                $('.owl-prev-3').on('click', function() {
			                    owl3.trigger('owl.prev');
			                });
			                $('.owl-next-3').on('click', function() {
			                    owl3.trigger('owl.next');
			                });
		                }
		                owl3.owlCarousel({
		                	itemsCustom: [[0,1],[480,2],[620,3],[760,4],[960,5],[1022,6]],
		                    autoPlay: 320000,
		                    navigation : true, // Show next and prev buttons
		                    slideSpeed : 800,
		                    paginationSpeed : 400
		                });
		            <?php } ?>

	            	<?php if($carousel_4) { ?>
	            		var owl4 = $("#the-carousel-4");
	            		var owlSlides4 = owl4.children('.item').length;
		                if(owlSlides4==1) {
		                	 $('.owl-prev-4').remove();
		                	 $('.owl-next-4').remove();
		                } else {
			                $('.owl-prev-4').on('click', function() {
			                    owl4.trigger('owl.prev');
			                });
			                $('.owl-next-4').on('click', function() {
			                    owl4.trigger('owl.next');
			                });
		                }
		                owl4.owlCarousel({
		                    autoPlay: 60000,
		                    navigation : false, // Show default next and prev buttons
		                    slideSpeed : 1200,
		                    paginationSpeed : 2000,
		                    singleItem: true,
	                    	transitionStyle : "fade"
		                });
		            <?php } ?>
					
	            });
	        </script>
        <?php } ?>

        <?php if($carousel) { ?>
        	<?php includeAsset('js','plugins/slick-1.5.7/slick/slick.min.js'); ?>
	        <script>
        	$(document).ready(function(){
        		if($('.slick-slider').length) {
					$('.slick-slider').slick();
        		}
			});
			</script>
        <?php } ?>

        <script type="text/javascript">
		    //<![CDATA[
		        $(function() {
				    FastClick.attach(document.body);
				});
		    //]]>
		</script>
		<?php includeAsset('js','js/vendor/placeholders.jquery.min.js'); ?>
		<?php includeAsset('js','js/vendor/jquery.fittext.js'); ?>
		<script type="text/javascript">
			$(document).ready(function() {
			    //<![CDATA[
					$(".site-name").fitText({ minFontSize: '20px', maxFontSize: '27px' });
					$(".page-title h1").fitText(1.2, { minFontSize: '20px', maxFontSize: '52px' });
					/*$(".site-carousel h1").fitText(1, { minFontSize: '30px', maxFontSize: '100px' });*/
			    //]]>

			    $('#totop').on('click',function(event) {
					<?php if($page_to_top_loc=='default') { ?>
						var scrollToClass = '0px';
					<?php } else if($page_to_top_loc=='main-nav') { ?>
						var scrollToClass = '.main-nav-container';
					<?php } else { ?>
						var scrollToClass = '.<?php echo $page_to_top_loc; ?>';
					<?php } ?>

					scrollToTop(scrollToClass);
				});

			    /* Initialize Tooltips */
				$('.tooltip').tooltipster({
					theme: 'tooltipster-light'
				});

				var campaignID = "<?php echo htmlspecialchars($_GET['campaign']); ?>";
				if(campaignID!='') {
					$('body').addClass('promo-overlay');
					setTimeout( function(){ 
						$('#campaign_trigger_onload[data-campaign-id="'+campaignID+'"]').click();
					}  , 2000 );
				}

				$('.basic-contact-form_admissions-2017_section input').on('focus',function() {
					$('.basic-contact-form_admissions-2017_section #recaptcha-location').removeClass('hide-accessible-desktop');
					$('.basic-contact-form_admissions-2017_section .submit-container').removeClass('hide-accessible-desktop');
				});
			});
		</script>
		<?php includeAsset('js','js/vendor/selectivizr-min.js'); ?>
		<?php includeAsset('js','js/vendor/iframeResizer.js'); /* using non-min version; min produces error on */ ?> 

		<?php if($summer_session_courses || $winter_session_courses) {
			includeAsset('js','js/summer-session/summer-session-courses.js');
			includeAsset('js','js/elements/filter/text-filter.js');
		} ?>


		<!-- BEGIN Page Specific Includes -->
		<?php if($page_type=='social-hub') { ?>

			<script src="js/social-v2/js/jquery.social.stream.wall.1.7.8.js"></script>
			<script src="js/social-v2/js/jquery.social.stream.1.6.2.js"></script>
			<?php includeAsset('js','js/social/preload-messages.js'); ?>

			<script type="text/javascript">
				jQuery(document).ready(function($){
					if($('#social-stream').length) {
						$('#social-stream').dcSocialStream({
							feeds: {
								twitter: {
									id: 'stonybrooku,sbubuzz,sbunewsdesk',
									thumb: true,
									url: 'social/v2/twitter.php',
									retweets: true
								},
								rss: {
									id: 'https://www.stonybrook.edu/newsroom/_resources/rss/all.rss',
									url: 'social/v2/rss.php'
								},
								facebook: {
									id: '30450493231',  
									text: 'contentSnippet',
									feed: 'posts',
									url: 'https://www.stonybrook.edu/social/v2/facebook.php'
								},
								youtube: {
									id: 'sbcomm , UC3NxYhOtlHEqzI10SsCaxqw',
									thumb: 'default'
								},
								pinterest: {
									id: 'stonybrooku',
									url: 'social/v2/rss.php'
								},
								flickr: {
									id: '37984249@N06,101383158@N02'
								},
								instagram: {
									id: '!46695629',
									accessToken: '46695629.6ccead5.608389caa4634947ad2d3b8292e73933',
									clientId: '6ccead572e6c41eba3b095c6e69b90f4',
									thumb: 'standard_resolution',
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
					}

					if($('#social-stream-alum').length) {
						$('#social-stream-alum').dcSocialStream({
							feeds: {
								twitter: {
									id: 'stonybrookalum',
									thumb: true,
									url: 'social/v2/twitter.php',
									retweets: true
								},
								rss: {
									id: 'https://www.stonybrook.edu/happenings/category/alumni/feed/',
									url: 'social/v2/rss.php'
								},
								facebook: {
									id: '43925669753',
									feed: 'posts',
									text: 'contentSnippet',
									url: 'social/v2/facebook.php'
								},
								flickr: {
									id: '22402351@N03'
								},
								instagram: {
									id: '!211449390',
									accessToken: '211449390.851894b.a15d6123535e499194da90792099dbd8',
									clientId: '851894b3a0a8461ca9975558cdfaa928',
									thumb: 'standard_resolution',
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
							limit: 60,
							iconPath: 'images/dcsns-dark/',
							imagePath: 'images/dcsns-dark/'
						});
					}
								 
				});
			</script>

			<?php includeAsset('js','js/social/custom.js'); ?>

        <?php } ?>

        <?php 
        /*
        echo $social_feed_channel["twitter"];
        echo 'social_feed_num_items: '.$social_feed_num_items;
        echo 'social_feed_widget: '.$social_feed_widget;
        echo 'social_channel_id: '.$social_channel_id;
        */
        if($social_feed_widget) { ?>
			<?php includeAsset('js','js/social/jquery.plugins.js'); ?>
			<?php includeAsset('js','js/social/jquery.site.js'); ?>
			<?php includeAsset('js','js/social/jquery.social.stream.1.5.4.js'); ?>
			<?php includeAsset('js','js/social/preload-messages.js'); ?>

			<script type="text/javascript">
				jQuery(document).ready(function($){
					$('#social-stream').dcSocialStream({
						feeds: {
							twitter: {
								id: '<?=$social_feed_channel["twitter"]?>',
								intro: '',
								search: '',
								out: 'intro,thumb,text',
								thumb: true,
								retweets: true
							}
						},
						rotate: {
							delay: 0
						},
						control: false,
						filter: false,
						wall: false,
						order: 'date',
						max: 'limit',
						limit: 5,
						iconPath: 'images/dcsns-dark/',
						imagePath: 'images/dcsns-dark/'
					});
								 
				});
			</script>
        <?php } ?>

        <?php if($page_type=='second-level' && $second_level=='analytics') { ?>
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
			<?php includeAsset('js','plugins/spinner/spin.min.js'); ?>
			<?php includeAsset('js','plugins/analytics/main.js'); ?>
        <?php } ?>

		<?php if($page_type=='bulletin') { ?>
			<?php includeAsset('js','js/vendor/jquery.fastLiveFilter.js'); ?>
			<script>
			    $(function() {
			        $('#all-courses-search').fastLiveFilter('#all-courses-list');
			    });
			</script>
        <?php } ?>

        <?php if($page_type=='search') {
        	includeAsset('js','js/vendor/iframeResizer.min.js');
        	includeAsset('js','js/search/search.js');
        } ?>

        <?php if($second_level=='magazine') {
        	includeAsset('js','js/magazine/magazine.js');
        } ?>

        <?php if($page_type=='second-level' && $second_level=='economic-development') { ?>
			<script type="text/javascript">
				$(window).load(function() {
					equalheight('.numbers-wrapper .owl-item');
					equalheight('footer.site-footer .equal-col');
			   	});
			   	$(window).resize(function(){
					equalheight('.numbers-wrapper .owl-item');
					equalheight('footer.site-footer .equal-col');
			   	});
			</script>
        <?php } ?>

        <?php if($mega_nav || $second_level=='alumni' || $second_level=='undergrad-admissions') { ?>
			<?php includeAsset('js','js/mega-nav.js'); ?>
		<?php } ?>

        <?php if($page_type=='second-level' && $second_level=='undergrad-admissions') { ?>
			<?php includeAsset('js','js/admissions.js'); ?>
			<script type="text/javascript">
				$(window).load(function() {
					equalheight('.numbers-wrapper .owl-item');
					equalheight('.numbers-wrapper .equal-col');
					equalheight('.student-quotes .owl-item .item');
			   	});
			   	$(window).resize(function(){
					equalheight('.numbers-wrapper .owl-item');
					equalheight('.numbers-wrapper .equal-col');
					equalheight('.student-quotes .owl-item .item');
			   	});
			</script>
        <?php } ?>

        <?php if($page_type=='second-level' && $second_level=='alumni') { ?>
			<?php includeAsset('js','js/alumni.js'); ?>


			<?php includeAsset('js','js/social/jquery.plugins.js'); ?>
			<?php includeAsset('js','js/social/jquery.site.js'); ?>
			<?php includeAsset('js','js/social-v2/js/jquery.social.stream.1.6.2.js'); ?>
			<?php includeAsset('js','js/social/preload-messages.js'); ?>
			<script type="text/javascript">
				jQuery(document).ready(function($){
					$('#social-stream').dcSocialStream({
						feeds: {
							twitter: {
								id: 'stonybrookalum',
								intro: '',
								search: '',
								out: 'intro,thumb,text',
								url: '/social/v2/twitter.php',
								thumb: true,
								retweets: true
							}
						},
						rotate: {
							delay: 0
						},
						control: false,
						filter: false,
						wall: false,
						order: 'date',
						max: 'limit',
						limit: 80,
						retweets: true,
						order: 'date',
						iconPath: 'images/dcsns-dark/',
						imagePath: 'images/dcsns-dark/'
					});

					$('#insta-stream').dcSocialStream({
						feeds: {
							instagram: {
								id: '!211449390',
								accessToken: '211449390.851894b.a15d6123535e499194da90792099dbd8',
								clientId: '851894b3a0a8461ca9975558cdfaa928',
								out: 'intro,thumb,text',
								thumb: 'thumbnail',
								comments: 3,
								likes: 10
							}
						},
						rotate: {
							delay: 0
						},
						control: false,
						filter: false,
						wall: false,
						order: 'date',
						max: 'limit',
						limit: 20,
						iconPath: 'images/dcsns-dark/',
						imagePath: 'images/dcsns-dark/'
					});
								 
				});
			</script>

			<script type="text/javascript">
				if($('.tweets-and-news').length) {
					var $instaPromo = $('.insta-promo');
					var $tweetPromo = $('.twitter-feed');
					$(window).load(function() {
						if($(window).width()>=960) {
							$tweetPromo.height($instaPromo.outerHeight());
						} else {
							$tweetPromo.height('500px');
						}
				   	});
				   	$(window).resize(function(){
						if($(window).width()>=960) {
							$tweetPromo.height($instaPromo.outerHeight());
						} else {
							$tweetPromo.height('500px');
						}
				   	});
				   }
			</script>
			
		<?php } ?>

		<?php if($page_type=='second-level' && $second_level=='athletics') { ?>

			<?php includeAsset('js','js/social/jquery.plugins.js'); ?>
			<?php includeAsset('js','js/social/jquery.site.js'); ?>
			<?php includeAsset('js','js/social/jquery.social.stream.1.5.4.js'); ?>
			<?php includeAsset('js','js/social/preload-messages.js'); ?>
			<script type="text/javascript">
				jQuery(document).ready(function($){
					$('#social-stream').dcSocialStream({
						feeds: {
							twitter: {
								id: 'stonybrookalum',
								intro: '',
								search: '',
								out: 'intro,thumb,text',
								thumb: true,
								retweets: true
							}
						},
						rotate: {
							delay: 0
						},
						control: false,
						filter: false,
						wall: false,
						order: 'date',
						max: 'limit',
						limit: 5,
						iconPath: 'images/dcsns-dark/',
						imagePath: 'images/dcsns-dark/'
					});
								 
				});
			</script>
			
		<?php } ?>

        <?php if($page_type=='second-level' && $second_level=='faculty-experts') { ?>
			<?php includeAsset('js','js/experts/faculty-experts.js'); ?>
		<?php } ?>

	   	<?php if($motio==true) { ?>
		   	<script type="text/javascript">
			   	$(document).ready(function() {
					var panning = new Motio(document.getElementById('panning'), {
					    fps: 30, // Frames per second. More fps = higher CPU load.
					    speedX: -15 // Negative horizontal speed = panning to left.
					});
					panning.play(); // Start playing animation
				});
			</script>
		<?php } ?>

        <?php if($admissions_program_detail==true) {
        	includeAsset('js','js/admissions/program-detail.js');
		} ?>
        <!-- END Page Specific Includes -->

        <!-- BEGIN Element Specific Includes -->
        <?php if($tablesaw) { ?>
        	<?php includeAsset('js','plugins/tablesaw/tablesaw.js'); ?>
        <?php } ?>

        <?php if($map==true) { ?>
			<?php includeAsset('js','plugins/map/js/raphael.js'); ?>
			<?php includeAsset('js','plugins/map/js/scale.raphael.js'); ?>
			<?php includeAsset('js','plugins/map/js/paths.js'); ?>
			<?php includeAsset('js','plugins/map/js/init.js'); ?>
        <?php } ?>

        <?php if($live_filter==true) { ?>
			<?php includeAsset('js','js/vendor/jquery.fastLiveFilter.js'); ?>
			<script>
				$('#live-filter-search').fastLiveFilter('#live-filter-list ul');
			</script>
        <?php } ?>

        <!-- BEGIN Element Specific Includes -->
        <?php if($accordion_nav==true) {
        	includeAsset('js','js/elements/accordion-nav/accordion-nav.js');
        } ?>

        <?php if($text_filter==true) {
        	includeAsset('js','js/elements/filter/text-filter.js');
        } ?>

        <?php if($equal_col==true) { ?>
			<script type="text/javascript">
				$(window).load(function() {
					equalheight('.equal-height-col');
			   	});
			   	$(window).resize(function(){
					equalheight('.equal-height-col');
			   	});
			</script>
        <?php } ?>

        <?php if($equal_col_desktop==true) { ?>
			<script type="text/javascript">
				$(window).load(function() {
					if($(window).width()>=1022) {
						equalheight('.equal-height-col');
					} else {
						$('.equal-height-col').css('height','auto');
					}
			   	});
			   	$(window).resize(function(){
			   		if($(window).width()>=1022) {
						equalheight('.equal-height-col');
					} else {
						$('.equal-height-col').css('height','auto');
					}
			   	});
			</script>
        <?php } ?>
        <!-- END Element Specific Includes -->

        <script type="text/javascript">
	        if($('.sbu-columns').length) {
				$(window).load(function() {
					equalheight('.sbu-columns .sbu-columns--column');
			   	});
			   	$(window).resize(function(){
					equalheight('.sbu-columns .sbu-columns--column');
			   	});
			}
		</script>

        <!-- window.load() -->
        <script type="text/javascript">
	        $(window).load(function() { // makes sure the whole site is loaded

	        	<?php if($page_type=='social-hub') { ?>

		        	/* Check if there is a default 'show' parameter in the URL and if so,
		        	   select that filter automatically on load 
					   EXAMPLE: http://www.stonybrook.edu/social?show=facebook
		        		console.log(decodeURIComponent($.urlParam('show')));
		        	*/
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

				//page fade URL param for specific uses but not applicable to the page at all times
				var pageFadeOverwrite = $.urlParam('pf');
				//console.log(pageFadeOverwrite);
				if (pageFadeOverwrite==1) {
					$('#status').fadeOut(); // will first fade out the loading animation
		            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
		            $('body').delay(350).css({'overflow':'visible'});
				}

				<?php if($page_loader) { ?>
		            $('#status').fadeOut(); // will first fade out the loading animation
		            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
		            $('body').delay(350).css({'overflow':'visible'});
				<?php } ?>

		        <?php if($page_to_top_link) { ?>
		        	//hide link by default
		        	$('#totop').addClass('invisible');
		        <?php } ?>
	            
	            <?php if($page_scroll) { ?>
	            	//define scrollto target for page load
	            	var scrollToTarget = '';
	            	var currWidth = $(window).width();
		        	<?php if($page_scroll_el=='logo') { ?>
		        		scrollToTarget = '.logo-container';
		            <?php } else if($page_scroll_el=='audience-nav') { ?>
		            	scrollToTarget = '.audience-nav';
		            <?php } else if($page_scroll_el=='main-nav') { ?>
		            	scrollToTarget = '.main-nav-container';
		            <?php } else if($page_scroll_el=='bottom') { ?>
		            	scrollToTarget = '100%';
		            <?php } else { ?>
		            	scrollToTarget = '<?=$page_scroll_el?>';
		            <?php } ?>
		            if(scrollToTarget) {
		            	<?php if($page_scroll_mobile==true) { ?>
		            		if(currWidth<1022) {
		            			$('body').scrollTo( scrollToTarget, <?php echo $page_scroll_time; ?>, {axis: 'y'} );
		            		}
				           
				        <?php } else { ?>
				        	$('body').scrollTo( scrollToTarget, <?php echo $page_scroll_time; ?>, {axis: 'y'} );
				         <?php } ?>
		            }

		        <?php } ?>
	        })
		</script>

		<?php if($page_type=='home') { ?>
			<script>
				$(document).ready(function() {
					/* re-enable for mobile tap-overlay */
					/*
					$('.boldMovesBox').on('click',function(e) {
						if($(e.target).hasClass('boldMovesBox-title') || $(e.target).parents('.boldMovesBox-title').length) {
							e.preventDefault();
						}
						if($(window).width()<1024) {
							if(!$(this).hasClass('engaged') && !$(e.target).hasClass('boldMovesBox-link')) {
								$(this).toggleClass('engaged');
							} else if($(e.target).hasClass('close-boldMovesBox') || $(e.target).hasClass('close-boldMovesBox-x')) {
								e.preventDefault();
								$(this).closest('.boldMovesBox').removeClass('engaged');
							}
						}
					});
					*/
					$('.boldMovesBox').hover(
						function() {
							console.log();
							if($(window).width()>=1024) {
								if(!$(this).hasClass('engaged')) {
									$(this).addClass('engaged');
								}
							}
						}, function() {
							if($(window).width()>=1024) {
								if($(this).hasClass('engaged')) {
									$(this).removeClass('engaged');
								}
							}
						}
					);
					$('.apply-form-trigger').on('click',function(e) {
						e.preventDefault();
						var $form = $('.apply-form-1');
						if($form.hasClass('hide-accessible')) {
							$(this).addClass('active');
							toggleAccessible($form);
						}
						$('body').scrollTo($form, 400, {
					    	axis: 'y'
					    });
					});
				});
			</script>

			<!-- for request-assistance demo -->
			<script>
				$(document).ready(function() {
					$('.show-form-trigger').on('click',function(e) {
						var thisButton = $(this);
						e.preventDefault();
						var formName = '#' + thisButton.attr('data-target-form');
						console.log(formName);
						var $form = $(formName);
						console.log($form);
						if($form.hasClass('hide-accessible')) {
							thisButton.addClass('active');
							toggleAccessible($form);
						}
						$('body').scrollTo($form, 400, {
					    	axis: 'y'
					    });
					});
				});
			</script>
        <?php } ?>

		<?php if(($site_status[$second_level]=='in_CMS' || $site_status[$second_level]=='in_transition') && $is_proofing_environment) { ?>
			<!-- Update production links to use /development/ on proofing -->
			<script>
				$(document).ready(function() {
					var newHref;
					$('a[href^="/sb/"]').each(function() {
						newHref = '/development' + $(this).attr('href');
						console.log('Non-development href: '+$(this).attr('href'));
						console.log('updated to: '+newHref);
						$(this).attr('href',newHref);
					});
				});
			</script>
		<?php } ?>

		<!--OU-->
		<script>
			$(document).ready(function() {
				var $de = $('#de'), $directedit = $('#directedit');
				if($de.length && $directedit.length) {
					$directedit.replaceWith($de.html());
				}

				$('img.gif-tutorial').each(function(){
					$(this).click(function(){
						var $img = $(this);
						var $imgSrc = $(this).attr('src');
						console.log($imgSrc);
						setTimeout(function() {
							$img.attr('src', $imgSrc);
						}, 0);
					});
				});
			});
		</script>
		