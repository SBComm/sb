<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<!-- <inc> -->
		<?php
			$root = '/user/far-beyond/www';

			$this_dir = $_SERVER['REQUEST_URI'];
			$dev_dir  = '/development/sb/';
			$prod_dir = '/sb/';
			$is_dev = strpos($this_dir,$dev_dir);
			if($is_dev !== false) {
				$inc = $_SERVER['DOCUMENT_ROOT'] . $dev_dir . "inc/inc.php";
			} else {
				$inc = $_SERVER['DOCUMENT_ROOT'] . $prod_dir . "inc/inc.php";
			}
			include($inc);
		?>
	<!-- </inc> -->
	<!--site variables-->
		<?php
			$magazine_this_year  = '2016-spring'; //slug, folder name, for url
			$mag_article     = true; // pulls in css/js for fancy article page
		    $wp_cat = '179'; //category ID from wordpress for this mag edition
			
			$file = "scripts/get-magazine-story.php";
		    include($path . $file);

			$page_type       = 'second-level';
			$second_level    = 'magazine';
			$page_title_sub  = 'MAGAZINE';
			$page_title_full = $story_title . ' | Stony Brook University MAGAZINE';

		    $og_title        = $page_title_full;
		    $og_description  = $story_excerpt;
		    $og_url          = $story_url_absolute;
		    $og_image        = $story_hero_image_url;
		    $og_type         = 'article';
		    $main_nav_selected_tab = 0;

		    $page_to_top_link = false;

		    $page_footerbar   = true;
		    $page_footer      = false;

		    $carousel 		  = false;

		    $lightbox = true;

		    $page_scroll        = false;
		    $page_scroll_el     = 'logo';     //Options are audience-nav, logo, main-nav, bottom
		    $page_scroll_time   = 150;      //Time for scroll function in milliseconds
		    $page_scroll_mobile = true;  //Define whether the scroll-on-load occurs only on mobile. False by default, meaning scroll will happen on desktop and mobile.
		?>

	<head>
		<?php 
			$file  = $header;
			include($path . $file);
		?>
	</head>
    <body>
        <!-- <global> -->
			<?php 
				$file  = $global;
				include($path . $file);
			?>
		<!-- </global> -->

        <div class="sbu-wrapper clearfix">
        	<div class="sbu-sub-wrapper">

		        <div class="header-container">
					<!-- <logo-container> -->
						<?php 
							$file = "{$second_level}/site-nav.php";
							include($pathForContent . $content . $file);
						?>
					<!-- </logo-container> -->
		        </div>
		        <div class="main-container">
		            <div class="main clearfix">

		                <div id="mag-article-container" class="mag-article-container intro-effect-sidefixed">
							<?php 
								$file = "{$second_level}/article.php";
								include($pathForContent . $content . $file);
							?>
						</div><!-- /container -->
						<?php if(!$is_404) { ?>
							<script src="js/vendor/classie.js"></script>
							<script>
								(function() {

									// detect if IE : from http://stackoverflow.com/a/16657946		
									var ie = (function(){
										var undef,rv = -1; // Return value assumes failure.
										var ua = window.navigator.userAgent;
										var msie = ua.indexOf('MSIE ');
										var trident = ua.indexOf('Trident/');

										if (msie > 0) {
											// IE 10 or older => return version number
											rv = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
										} else if (trident > 0) {
											// IE 11 (or newer) => return version number
											var rvNum = ua.indexOf('rv:');
											rv = parseInt(ua.substring(rvNum + 3, ua.indexOf('.', rvNum)), 10);
										}

										return ((rv > -1) ? rv : undef);
									}());


									// disable/enable scroll (mousewheel and keys) from http://stackoverflow.com/a/4770179					
									// left: 37, up: 38, right: 39, down: 40,
									// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
									var keys = [32, 37, 38, 39, 40], wheelIter = 0;

									function preventDefault(e) {
										e = e || window.event;
										if (e.preventDefault)
										e.preventDefault();
										e.returnValue = false;  
									}

									function keydown(e) {
										for (var i = keys.length; i--;) {
											if (e.keyCode === keys[i]) {
												preventDefault(e);
												return;
											}
										}
									}

									function touchmove(e) {
										preventDefault(e);
									}

									function wheel(e) {
										// for IE 
										//if( ie ) {
											//preventDefault(e);
										//}
									}

									function disable_scroll() {
										window.onmousewheel = document.onmousewheel = wheel;
										document.onkeydown = keydown;
										document.body.ontouchmove = touchmove;
									}

									function enable_scroll() {
										window.onmousewheel = document.onmousewheel = document.onkeydown = document.body.ontouchmove = null;  
									}

									var docElem = window.document.documentElement,
										scrollVal,
										isRevealed, 
										noscroll, 
										isAnimating,
										container = document.getElementById( 'mag-article-container' ),
										trigger = container.querySelector( 'button.trigger' );

									function scrollY() {
										return window.pageYOffset || docElem.scrollTop;
									}
									
									function scrollPage() {
										scrollVal = scrollY();
										
										if( noscroll && !ie ) {
											if( scrollVal < 0 ) return false;
											// keep it that way
											window.scrollTo( 0, 0 );
										}

										if( classie.has( container, 'notrans' ) ) {
											classie.remove( container, 'notrans' );
											return false;
										}

										if( isAnimating ) {
											return false;
										}
										
										if( scrollVal <= 0 && isRevealed ) {
											toggle(0);
										}
										else if( scrollVal > 0 && !isRevealed ){
											toggle(1);
										}
									}

									function toggle( reveal ) {
										isAnimating = true;
										
										if( reveal ) {
											classie.add( container, 'modify' );
										}
										else {
											noscroll = true;
											disable_scroll();
											classie.remove( container, 'modify' );
										}

										// simulating the end of the transition:
										setTimeout( function() {
											isRevealed = !isRevealed;
											isAnimating = false;
											if( reveal ) {
												noscroll = false;
												enable_scroll();
											}
										}, 600 );
									}

									// refreshing the page...
									var pageScroll = scrollY();
									noscroll = pageScroll === 0;
									
									disable_scroll();
									
									if( pageScroll ) {
										isRevealed = true;
										classie.add( container, 'notrans' );
										classie.add( container, 'modify' );
									}
									
									window.addEventListener( 'scroll', scrollPage );
									trigger.addEventListener( 'click', function() { toggle( 'reveal' ); } );
								})();
							</script>
						<?php } else { ?>
							<style type="text/css">
								#mag-article-container { margin-top: 0; }
							</style>
						<?php } ?>
		            </div> <!-- .main -->
		        </div> <!-- .main-container -->
		        <!-- <div.footer-container> -->
		        	<?php if($page_footer) {
						$file = "footers/sbu-footer.php";
						include($path . $file);
					} ?>
					<?php if($page_footerbar) {
						$file = "footerbar.php";
						include($path . $file);
					} ?>
				<!-- </div.footer-container> -->
<!--
				<div class="left-fixed-sidebar-container">

				</div>

				<div class="right-fixed-sidebar-container">

				</div>
-->
				<!-- <to-top> -->
					<?php if($page_to_top_link) {
						$file = "to-top.php";
						include($path . $file);
					} ?>
				<!-- </to-top> -->

	        </div><!-- .sbu-sub-wrapper -->
	    </div><!-- .sbu-wrapper -->

	    <!-- <scripts> -->
			<?php 
				$file = "footer-scripts.php";
				include($path . $file);
			?>
		<!-- </scripts> -->

		<!-- <googleanalytics> -->
			<?php 
				$file = "site-analytics.php";
				include($path . $file); 
			?>
		<!-- </googleanalytics> -->
    </body>
</html>