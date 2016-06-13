		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

		<script type="text/javascript">
			// Detect IE, from http://james.padolsey.com/javascript/detect-ie-in-js-using-conditional-comments/
			var ie = (function(){

			    var undef,
			        v = 3,
			        div = document.createElement('div'),
			        all = div.getElementsByTagName('i');

			    while (
			        div.innerHTML = '<!--[if gt IE ' + (++v) + ']><i></i><![endif]-->',
			        all[0]
			    );

			    return v > 4 ? v : undef;

			}());
		</script>

        <script type="text/javascript" src="js/vendor/jquery.sticky.js"></script>
		<script>
			var theVideo = $('#forty-video');
			$(window).load(function(){
				if($(window).width()>=960) {
					if(theVideo.length && (!ie || ie > 9)) {
						theVideo.get(0).play();
					}
					$(<?php echo $sticky_element_selector; ?>).sticky({ topSpacing: 0 });
				}
			});
			$(window).resize(function(){
				if($(window).width()>=960) {
					if ($('.sticky-wrapper').length == 0) { 
					    $(<?php echo $sticky_element_selector; ?>).sticky({ topSpacing: 0 });
					}
				}				
			});
		</script>

		<script src="js/vendor/jquery.easing.1.3.js"></script>
		<script src="js/vendor/jquery.easing.compatibility.js"></script>
		<script src="js/vendor/jquery.scrollTo.min.js"></script>
		<script src="js/vendor/jquery.localScroll.min.js"></script>
		<script src="plugins/waypoints/jquery.waypoints.js"></script>
		<script src="plugins/waypoints/inview.js"></script>
		<script src="js/vendor/jquery.motio.js"></script>
		<script src="js/vendor/jquery.history.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- BEGIN Page Specific Includes -->
		<?php if($page_type=='home') { ?>
        	<script src="js/home.js"></script>
        <?php } else if($page_type=='honorees') { ?>
        	<script src="js/honorees.js"></script>
        <?php } ?>

        <?php if($profile_grid) { ?>
        	<script src="js/vendor/isotope.pkgd.min.js"></script>
	        <script src="plugins/gallery/js/imagesloaded.pkgd.min.js"></script>
	        <script src="plugins/gallery/js/fit-columns.js"></script>
	        <!--[if lt IE 9]>
	            <link rel="stylesheet" href="css/ie/lte-ie8.css">
	        <![endif]-->
        	<script src="js/dynamic-grid.js"></script>
        <?php } ?>
        <?php if($profile_page || $page_type=='home') { ?>
			<script src="js/profile-page.js"></script>
        <?php } else if($page_type=='nominees') { ?>
			<script src="js/nominees.js"></script>
        <?php } ?>
        <?php if($profile_page) { ?>
	        <script>
				if(Modernizr.history) {
					window.addEventListener('load', function() {
        				setTimeout(function() {
							window.addEventListener("popstate", function(e) {
								window.location = window.location.href;
							});
						});
					});
				}
			</script>
		<?php } ?>
        <!-- END Page Specific Includes -->

        <?php includeAsset('js','plugins/nivo-lightbox/nivo-lightbox.min.js'); ?>

        <?php if($gallery) { ?>
	        <script src="plugins/gallery/js/isotope.pkgd.min.js"></script>
	        <script src="plugins/gallery/js/imagesloaded.pkgd.min.js"></script>
			<?php includeAsset('js','plugins/gallery/js/isotope-custom.js'); ?>
	        
	        <script src="plugins/gallery/js/jquery.magnific-popup.min.js"></script>
	        <?php includeAsset('js','plugins/gallery/js/magnific-popup-custom.js'); ?>
		<?php } ?>

        <?php if($fastclick_js) { ?>
	        <script src="js/vendor/fastclick.js"></script>
	        <script type="text/javascript">
			    //<![CDATA[
			        $(function() {
					    FastClick.attach(document.body);
					});
			    //]]>
			</script>
		<?php } ?>

		<script src="js/vendor/placeholders.jquery.min.js"></script>

		<?php if($tablesaw) { ?>
        	<?php includeAsset('js','plugins/tablesaw/tablesaw.js'); ?>
        <?php } ?>

		<?php if($validation) { ?>
	        <script src="js/vendor/jquery-validation/jquery.validate.min.js"></script>
	        <script src="js/vendor/jquery-validation/additional-methods.min.js"></script>
	        <script type="text/javascript">
	        	$('.validate').validate();
	        </script>
		<?php } ?>

        <script type="text/javascript">
	        <?php if($fade_in_page) { ?>
	        	$('body').prepend('<div id="preloader"><div id="status"></div></div><style type="text/css"> body { overflow: hidden; } </style>');
	            $('#status').fadeOut(); // will first fade out the loading animation
	            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
	            $('body').delay(350).css({'overflow':'visible'});
			<?php } ?>
		</script>

		<!-- BEGIN Page Specific Includes -->
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

		<?php if($social_feed) { ?>
			<?php includeAsset('js','js/social/jquery.plugins.js'); ?>
			<?php includeAsset('js','js/social/jquery.site.js'); ?>
			<?php includeAsset('js','js/social/jquery.social.stream.1.5.4.js'); ?>
			<?php includeAsset('js','js/social/preload-messages.js'); ?>

			<script type="text/javascript">
				jQuery(document).ready(function($){
					$('#social-stream').dcSocialStream({
						feeds: {
							twitter: {
								id: 'stonybrookalum,#sbu40under40',
								intro: '',
								search: '',
								out: 'intro,thumb,text',
								thumb: true
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
						limit: 2,
						iconPath: 'images/dcsns-dark/',
						imagePath: 'images/dcsns-dark/'
					});
								 
				});
			</script>
        <?php } ?>

        <?php if($carousel) { ?>
	    	<?php includeAsset('js','js/elements/owl-carousel/owl.carousel.js'); ?>
	    <?php } ?>

	    <?php includeAsset('js','js/custom-feeds.js'); ?>

        <!-- window.load() -->
        <script type="text/javascript">
	        $(window).load(function() { // makes sure the whole site is loaded				
				<?php if($page_loader) { ?>
		            $('#preloader-status').fadeOut(); // will first fade out the loading animation
		            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
				<?php } ?>

		        <?php if($page_to_top) { ?>
		        	//hide link by default
		        	$('#totop').addClass('invisible');

		        <?php } ?>
	            
	            <?php if($page_scroll) { ?>
	            	//define scrollto target for page load
	            	var scrollToTarget = <?php echo $page_scroll_target ?>;
		            if(scrollToTarget) {
		           		$('body').scrollTo( scrollToTarget, <?php echo $page_scroll_time; ?> );
		            }
		        <?php } ?>
	        })
		</script>