		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
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
				/*console.log("ww: "+$(window).width());*/
				if($(window).width()>=1022) {
					//$(".site-nav").sticky({ topSpacing: 0 });
					if($('.background-video').length) {
						$('.background-video').get(0).play();
					}
				}
			});
			$(window).resize(function(){
				if($(window).width()>=1022) {
					if ($('.sticky-wrapper').length == 0) { 
					    //$(".site-nav").sticky({ topSpacing: 0 });
						if($('.background-video').length) {
							$('.background-video').get(0).play();
						}
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

		<?php
			includeAsset('js','js/vendor/jquery.easing.1.3.js');
			includeAsset('js','js/vendor/jquery.easing.compatibility.js');
			includeAsset('js','js/vendor/jquery.scrollTo.min.js');
			includeAsset('js','js/vendor/jquery.localScroll.min.js');
			includeAsset('js','js/vendor/jquery.ba-bbq.js');
			includeAsset('js','js/vendor/jquery.motio.js');
			includeAsset('js','js/plugins.js');
			includeAsset('js','js/main.js');
			includeAsset('js','js/vendor/fastclick.js');
		?>

        <script>
	        var pageFadeOverwrite = $.urlParam('pf');
			//console.log(pageFadeOverwrite);
			if (pageFadeOverwrite==1) {
				$('body').prepend('<div id="preloader"><div id="status">&nbsp;</div></div><style type="text/css"> body { overflow: hidden; } </style>');
			}
		</script>

        <?php if($lightbox) { ?>
        	<?php includeAsset('js','plugins/nivo-lightbox/nivo-lightbox.min.js'); ?>
        	<script>
				$(document).ready(function(){
				    $('.nivo-lightbox').nivoLightbox();
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
	                } else {
	                	autoPlayValue = 8000;
	                }

	                owl.owlCarousel({
	                    autoPlay: autoPlayValue,
	                    navigation : false, // Show default next and prev buttons
	                    slideSpeed : 300,
	                    paginationSpeed : 400,
	                    singleItem: true,
	                    transitionStyle : "fade"
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
		                    singleItem: true,
	                    	transitionStyle : "fade"
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
		<?php includeAsset('js','js/vendor/placeholders.jquery.min.js'); ?>
		<?php includeAsset('js','js/vendor/jquery.fittext.js'); ?>
		<script type="text/javascript">
			$(document).ready(function() {
			    //<![CDATA[
					$(".site-name").fitText({ minFontSize: '20px', maxFontSize: '27px' });
					$(".page-title h1").fitText(1.2, { minFontSize: '20px', maxFontSize: '46px' });
					/*$(".site-carousel h1").fitText(1, { minFontSize: '30px', maxFontSize: '100px' });*/
			    //]]>

			    $('#totop').on('click',function(event) {
					<?php if($page_to_top_loc=='default') { ?>
						$('body').scrollTo( '0px', 500, {
							easing:'easeOutQuad', 
							axis: 'y'
						} );
					<?php } else if($page_to_top_loc=='main-nav') { ?>
						$('body').scrollTo( '.main-nav-container', 500, {
							easing:'easeOutQuad', 
							axis: 'y'
						} );
					<?php } else { ?>
						var scrollToClass = '.<?php echo $page_to_top_loc; ?>';
						console.log(scrollToClass);
						$('body').scrollTo( scrollToClass, 500, {
							easing:'easeOutQuad', 
							axis: 'y'
						} );
					<?php } ?>
				});
			});
		</script>
		<?php includeAsset('js','js/vendor/selectivizr-min.js'); ?>
		<?php includeAsset('js','js/vendor/iframeResizer.min.js'); ?>

		<?php if($summer_session_courses) {
			includeAsset('js','js/summer-session/summer-session-courses.js');
			includeAsset('js','js/elements/filter/text-filter.js');
		} ?>

		<!-- BEGIN Page Specific Includes -->
		<?php if($page_type=='social-hub') { ?>

			<?php includeAsset('js','js/social/jquery.plugins.js'); ?>
			<?php includeAsset('js','js/social/jquery.site.js'); ?>
			<?php includeAsset('js','js/social/jquery.social.stream.wall.1.3.js'); ?>
			<?php includeAsset('js','js/social/jquery.social.stream.1.5.4.js'); ?>
			<?php includeAsset('js','js/social/preload-messages.js'); ?>

			<script type="text/javascript">
				jQuery(document).ready(function($){
					$('#social-stream').dcSocialStream({
						feeds: {
							twitter: {
								id: 'stonybrooku,sbubuzz,PresStanley,sbunewsdesk',
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

			<?php includeAsset('js','js/social/custom.js'); ?>

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
        	includeAsset('js','js/search/search.js');
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
        <? } ?>

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

        <!-- window.load() -->
        <script type="text/javascript">
        	window.onload = function(){

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
				console.log(1);
				//page fade URL param for specific uses but not applicable to the page at all times
				var pageFadeOverwrite = $.urlParam('pf');
				console.log(2);
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
	        };
		</script>