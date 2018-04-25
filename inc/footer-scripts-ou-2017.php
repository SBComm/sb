<?php if($mega_nav_ou==true) { ?>
	<script type="text/javascript" src="//www.stonybrook.edu/commcms/_resources/js/jquery/jquery-1.11.1.min.js"></script>

	<?php includeAsset('js','js/plugins.js'); ?>
	<?php includeAsset('js','js/main.js'); ?>

	<script type="text/javascript" src="//www.stonybrook.edu/commcms/_resources/js/jquery.animateNumber.min.js?ver=1.3"></script>
	<script type="text/javascript" src="//www.stonybrook.edu/commcms/_resources/js/sb-v2/responsive.js?ver=1.3"></script>
	<script type="text/javascript" src="//www.stonybrook.edu/commcms/_resources/js/sb-v2/plugins.js?ver=1.3"></script>

	<script type="text/javascript" src="//www.stonybrook.edu/js/vendor/jquery.sticky.js?ver=1.3"></script>
	<script type="text/javascript" src="//www.stonybrook.edu/js/vendor/jquery.easing.1.3.js?ver=1.3"></script>
	<script type="text/javascript" src="//www.stonybrook.edu/js/vendor/jquery.easing.compatibility.js?ver=1.3"></script>
	<script type="text/javascript" src="//www.stonybrook.edu/commcms/_resources/js/sb-v2/vendor/jquery.fittext.js?ver=1.3"></script>
	<script type="text/javascript" src="//www.stonybrook.edu/commcms/_resources/js/sb-v2/vendor/jquery.fastLiveFilter.js?ver=1.3"></script>
	<script type="text/javascript" src="//www.stonybrook.edu/commcms/_resources/js/sb-v2/vendor/jquery.scrollTo.min.js?ver=1.3"></script>
	<script type="text/javascript" src="//www.stonybrook.edu/commcms/_resources/js/sb-v2/vendor/jquery.localScroll.min.js?ver=1.3"></script>
	<script type="text/javascript" src="//www.stonybrook.edu/js/vendor/jquery.ba-bbq.js?ver=1.3"></script>
	<script type="text/javascript" src="//www.stonybrook.edu/js/vendor/jquery.motio.js?ver=1.3"></script>
	<script type="text/javascript" src="//www.stonybrook.edu/js/vendor/jquery.tooltipster.min.js?ver=1.3"></script>
	<script type="text/javascript" src="//www.stonybrook.edu/commcms/_resources/js/sb-v2/filter/text-filter.js?ver=1.3"></script>
	<script type="text/javascript" src="//www.stonybrook.edu/commcms/_resources/js/sb-v2/vendor/waypoints/jquery.waypoints.js?ver=1.3"></script>
	<script type="text/javascript" src="//www.stonybrook.edu/commcms/_resources/js/sb-v2/vendor/waypoints/shortcuts/inview.js?ver=1.3"></script>
	<script type="text/javascript" src="//www.stonybrook.edu/commcms/_resources/js/sb-v2/vendor/countUp.min.js?ver=1.3"></script>
	<script type="text/javascript" src="//www.stonybrook.edu/commcms/_resources/plugins/slick-1.8/slick.custom.js?ver=1.3"></script>
	<script type="text/javascript" src="//www.stonybrook.edu/commcms/_resources/plugins/nivo-lightbox/nivo-lightbox.js?ver=1.3"></script>
	<script type="text/javascript" src="//www.stonybrook.edu/commcms/_resources/js/sb-v2/main.js?ver=1.3"></script>
	<script type="text/javascript" src="//www.stonybrook.edu/commcms/_resources/plugins/tablesaw/tablesaw.js?ver=1.3"></script>
	<script type="text/javascript" src="//www.stonybrook.edu/commcms/_resources/js/sb-v2/accordion-nav/accordion-nav.js?ver=1.3"></script>
	<script type="text/javascript" src="//www.stonybrook.edu/commcms/_resources/js/sb/vendor/tooltipster/jquery.tooltipster.min.js?ver=1.3"></script>
<?php } ?>
<?php if($mega_nav==true) { ?>
	<?php includeAsset('js','js/mega-nav-2017.js'); ?>
	<?php includeAsset('js','js/mlpushmenu/classie.js'); ?>
	<?php includeAsset('js','js/mlpushmenu/mlpushmenu.js'); ?>
<?php } ?>
<script>
	new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$(".site-name").fitText({ minFontSize: '20px', maxFontSize: '27px' });
		$(".page-title h1").fitText(1.2, { minFontSize: '20px', maxFontSize: '52px' });
		//$("h1.second-level-head-region_heading").fitText(1.2, { minFontSize: '30px', maxFontSize: '52px' });
		/*$(".site-carousel h1").fitText(1, { minFontSize: '30px', maxFontSize: '100px' });*/

		equalheight('.faculty-list li');

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

<?php if($page_type=='search') {
    includeAsset('js','js/vendor/iframeResizer.min.js');
	includeAsset('js','js/search/search.js');
} ?>

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
	});
</script>

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

<?php if($page_type=='second-level' && $second_level=='analytics') { ?>
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
			<?php includeAsset('js','plugins/spinner/spin.min.js'); ?>
			<?php includeAsset('js','plugins/analytics/main.js'); ?>
        <?php } ?>

<?php 
/*
echo $social_feed_channel["twitter"];
echo 'social_feed_num_items: '.$social_feed_num_items;
echo 'social_feed_widget: '.$social_feed_widget;
echo 'social_channel_id: '.$social_channel_id;
*/
if($social_feed_widget) { ?>
	<!--<script src="/js/social-v2/js/jquery.social.stream.wall.1.7.js"></script>-->
	<script src="/js/social-v2/js/jquery.social.stream.1.6.2.js"></script>
	<?php includeAsset('js','/js/social/preload-messages.js'); ?>

	<?php if($live_filter==true) { ?>
		<?php includeAsset('js','js/vendor/jquery.fastLiveFilter.js'); ?>
		<script>
			$('#live-filter-search').fastLiveFilter('#live-filter-list ul');
		</script>
    <?php } ?>

	<?php
		$social_feeds = '';
		for($i=1; $i<=$social_feed_widget_num; $i++) {

			if($social_channel[$i]=='twitter') { ?>
				<script type="text/javascript">
					$(document).ready(function($){
						$('#social-stream-<?=$i?>').dcSocialStream({
							feeds: {
								twitter: {
									id: '<?=$social_feed_channel[$i]?>',
									intro: '',
									search: '',
									out: 'intro,thumb,text,share',
									thumb: true,
									url: '/social/v2/twitter.php',
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
							limit: <?php echo($social_feed_num_items[$i]); ?>,
							iconPath: 'images/dcsns-dark/',
							imagePath: 'images/dcsns-dark/'
						});
									 
					});
				</script>
			<?php } else if($social_channel[$i]=='facebook') { ?>
				<script type="text/javascript">
					jQuery(document).ready(function($){
						$('#social-stream-<?=$i?>').dcSocialStream({
							feeds: {
								facebook: {
									id: '<?=$social_feed_channel[$i]?>',
									intro: '',
									search: '',
									feed: 'posts',
									text: 'contentSnippet',
									url: '/social/v2/facebook.php'
								}
							},
							rotate: {
								delay: 0
							},
							control: false,
							filter: false,
							wall: false,
							image_width: 3, //3 = 600 4 = 480 5 = 320 6 = 180
							order: 'date',
							max: 'limit',
							limit: <?php echo($social_feed_num_items[$i]); ?>,
							iconPath: 'images/dcsns-dark/',
							imagePath: 'images/dcsns-dark/'
						});
									 
					});
				</script>
			<?php } else if($social_channel[$i]=='flickr') { ?>
				<script type="text/javascript">
					jQuery(document).ready(function($){
						$('#social-stream-<?=$i?>').dcSocialStream({
							feeds: {
								flickr: {
									id: '<?=$social_feed_channel[$i]?>',
									intro: ''
								}
							},
							rotate: {
								delay: 0
							},
							control: false,
							filter: false,
							wall: false,
							image_width: 3, //3 = 600 4 = 480 5 = 320 6 = 180
							order: 'date',
							max: 'limit',
							limit: <?php echo($social_feed_num_items[$i]); ?>,
							iconPath: 'images/dcsns-dark/',
							imagePath: 'images/dcsns-dark/'
						});
									 
					});
				</script>
			<?php } else if($social_channel[$i]=='instagram') { ?>
				<script type="text/javascript">
					jQuery(document).ready(function($){
						$('#social-stream-<?=$i?>').dcSocialStream({
							feeds: {
								instagram: {
									id: '<?=$social_feed_channel[$i]?>',
									intro: '',
									clientId: '<?=$social_feed_client_id[$i]?>',
									accessToken: '<?=$social_feed_access_token[$i]?>',
									thumb: 'standard_resolution',
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
							limit: <?php echo($social_feed_num_items[$i]); ?>,
							iconPath: 'images/dcsns-dark/',
							imagePath: 'images/dcsns-dark/'
						});
									 
					});
				</script>
			<?php } else if($social_channel[$i]=='youtube') { ?>
				<script type="text/javascript">
					jQuery(document).ready(function($){
						$('#social-stream-<?=$i?>').dcSocialStream({
							feeds: {
								youtube: {
									id: '<?=$social_feed_channel[$i]?>',
									intro: '',
									thumb: '0'
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
							limit: <?php echo($social_feed_num_items[$i]); ?>,
							iconPath: 'images/dcsns-dark/',
							imagePath: 'images/dcsns-dark/'
						});
									 
					});
				</script>
			<?php } else if($social_channel[$i]=='rss') { ?>
				<script type="text/javascript">
					jQuery(document).ready(function($){
						$('#social-stream-<?=$i?>').dcSocialStream({
							feeds: {
								rss: {
									id: '<?=$social_feed_channel[$i]?>',
									intro: '',
									url: '/social/v2/rss.php'
								},
							},
							rotate: {
								delay: 0
							},
							control: false,
							filter: false,
							wall: false,
							order: 'date',
							max: 'limit',
							limit: <?php echo($social_feed_num_items[$i]); ?>,
							iconPath: 'images/dcsns-dark/',
							imagePath: 'images/dcsns-dark/'
						});
									 
					});
				</script>
			<?php } 

		}
	?>
	
	<script type="text/javascript" src="/js/social/custom.js"></script>

<?php } ?>

<script type="text/javascript">
	$(window).load(function() {
		equalheight('.faculty-list li');
   	});
   	$(window).resize(function(){
		equalheight('.faculty-list li');
   	});
</script>