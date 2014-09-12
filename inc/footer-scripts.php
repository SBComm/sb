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
				if($(window).width()>=1022) {
					if ($('.sticky-wrapper').length == 0) { 
					    $(".site-nav").sticky({ topSpacing: 0 });
					}
					configureSearchPosition();
				} else {
					/*if ( $moreNav.is( ":visible" ) ) {
						$('.more-trigger').click();
					}*/
					if(configuredSearch && !$('html').hasClass('ie9')) {
						resetSearchPosition();
						//$moreNav.height('auto');
						//moreNavHeight = $moreNav.height();
					}
				}
			});
		</script>

		<script src="js/vendor/jquery.easing.1.3.js"></script>
		<script src="js/vendor/jquery.easing.compatibility.js"></script>
		<script src="js/vendor/jquery.scrollTo.min.js"></script>
		<script src="js/vendor/jquery.localScroll.min.js"></script>
		<script src="js/vendor/jquery.ba-bbq.js"></script>
		<script src="js/vendor/jquery.motio.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/vendor/fastclick.js"></script>

        <?php if($lightbox) { ?>
        	<script src="plugins/nivo-lightbox/nivo-lightbox.min.js"></script>
        	<script>
				$(document).ready(function(){
				    $('.nivo-lightbox').nivoLightbox();
				});
			</script>
        <?php } ?>

        <?php if($carousel) { ?>
	        <script src="js/elements/owl-carousel/owl.carousel.js"></script>
	        <script>
	            $(document).ready(function() {

	                var owl = $("#the-carousel-1");
	                owl.owlCarousel({
	                    autoPlay: 10000,
	                    navigation : false, // Show default next and prev buttons
	                    slideSpeed : 300,
	                    paginationSpeed : 400,
	                    singleItem: true/*,
	                    transitionStyle : "fade"*/
	                });
	                $('.owl-prev-1').on('click', function() {
	                    owl.trigger('owl.prev');
	                });
	                $('.owl-next-1').on('click', function() {
	                    owl.trigger('owl.next');
	                });

	            	<?php if($carousel_2) { ?>
	            		var owl2 = $("#the-carousel-2");
		                owl2.owlCarousel({
		                	itemsCustom: [[0,1],[800,2]],
		                    autoPlay: false,
		                    navigation : false, // Show default next and prev buttons
		                    slideSpeed : 1000,
		                    paginationSpeed : 1000
		                });
		                $('.owl-prev-2').on('click', function() {
		                    owl2.trigger('owl.prev');
		                });
		                $('.owl-next-2').on('click', function() {
		                    owl2.trigger('owl.next');
		                });
		            <?php } ?>
	                
	            	<?php if($carousel_3) { ?>
	            		var owl3 = $("#the-carousel-3");
		                owl3.owlCarousel({
		                	itemsCustom: [[0,1],[480,2],[620,3],[760,4],[960,5],[1022,6]],
		                    autoPlay: 320000,
		                    navigation : true, // Show next and prev buttons
		                    slideSpeed : 800,
		                    paginationSpeed : 400
		                });
		                $('.owl-prev-3').on('click', function() {
		                    owl3.trigger('owl.prev');
		                });
		                $('.owl-next-3').on('click', function() {
		                    owl3.trigger('owl.next');
		                });
		            <?php } ?>

	            	<?php if($carousel_4) { ?>
	            		var owl4 = $("#the-carousel-4");
		                owl4.owlCarousel({
		                    autoPlay: 60000,
		                    navigation : false, // Show default next and prev buttons
		                    slideSpeed : 1200,
		                    paginationSpeed : 2000,
		                    singleItem: true
		                });
		                $('.owl-prev-4').on('click', function() {
		                    owl4.trigger('owl.prev');
		                });
		                $('.owl-next-4').on('click', function() {
		                    owl4.trigger('owl.next');
		                });
		            <?php } ?>
					
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
		<script src="js/vendor/placeholders.jquery.min.js"></script>
        <script src="js/vendor/jquery.fittext.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
			    //<![CDATA[
					$(".site-name").fitText({ minFontSize: '20px', maxFontSize: '27px' });
					$(".page-title h1").fitText(1.2, { minFontSize: '20px', maxFontSize: '46px' });
					/*$(".site-carousel h1").fitText(1, { minFontSize: '30px', maxFontSize: '100px' });*/
			    //]]>
			});
		</script>
		<script src="js/vendor/selectivizr-min.js"></script>
        <script src="js/vendor/iframeResizer.min.js"></script>

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
								id: 'stonybrooku,sbubuzz,sbudoit,sbunewsdesk',
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
								id: '!46695629,!320497946',
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
			        $('#all-courses-search').fastLiveFilter('#all-courses-list');
			    });
			</script>
        <?php } ?>

        <?php if($page_type=='search') { ?>
	        <script type="text/javascript" src="js/search/search.js"></script>
        <?php } ?>

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

        <?php if($page_type=='second-level' && $second_level=='undergrad-admissions') { ?>
			<script src="js/admissions.js"></script>
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
			   	<?php if($motio==true) { ?>
				   	$(document).ready(function() {
						var panning = new Motio(document.getElementById('panning'), {
						    fps: 30, // Frames per second. More fps = higher CPU load.
						    speedX: -15 // Negative horizontal speed = panning to left.
						});
						panning.play(); // Start playing animation
					});
				<?php } ?>
			</script>
        <?php } ?>

        <?php if($admissions_program_detail==true) { ?>
			<script src="js/admissions/program-detail.js"></script>
		<?php } ?>
        <!-- END Page Specific Includes -->

        <!-- BEGIN Element Specific Includes -->
        <?php if($map==true) { ?>
			<script src="plugins/map/js/raphael.js"></script>
			<script src="plugins/map/js/scale.raphael.js"></script>
			<script src="plugins/map/js/paths.js"></script>
			<script src="plugins/map/js/init.js"></script>
        <?php } ?>

        <?php if($live_filter==true) { ?>
			<script src="js/vendor/jquery.fastLiveFilter.js"></script>
			<script>
				$('#live-filter-search').fastLiveFilter('#live-filter-list ul');
			</script>
        <?php } ?>

        <!-- BEGIN Element Specific Includes -->
        <?php if($accordion_nav==true) { ?>
        	<script type="text/javascript" src="js/elements/accordion-nav/accordion-nav.js"></script>
        <?php } ?>

        <?php if($text_filter==true) { ?>
        	<script type="text/javascript" src="js/elements/filter/text-filter.js"></script>
        <?php } ?>

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
	            	var currWidth = $(window).width();
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
		            	<?php if($page_scroll_mobile==true) { ?>
		            		if(currWidth<1022) {
		            			$('body').scrollTo( scrollToTarget, <?php echo $page_scroll_time; ?> );
		            		}
				           
				        <?php } else { ?>
				        	$('body').scrollTo( scrollToTarget, <?php echo $page_scroll_time; ?> );
				         <?php } ?>
		            }

		        <?php } ?>
	        })
		</script>

		<?php if($fade_in_page) { ?>
        	<script type="text/javascript">
        		$(document).ready(function() {
        			$('.fade-in-page').delay(800).fadeOut('slow');
        		});
        	</script>
        <?php } ?>