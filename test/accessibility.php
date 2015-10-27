<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<!-- <inc> -->
		<?php
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
			$page_type       = 'second-level';
			$page_title_sub  = 'Economic Development';
			$page_title_full = $page_title . (isset($page_title_sub) && $page_title_sub!='' ? ' | ' . $page_title_sub : '');

		    $og_title        = 'Stony Brook ' . $page_title_sub;
		    $og_description  = 'Did you know? Stony Brook University generates more than $2.5 billion annually in regional economic impact and is one of the few campuses anywhere with a Vice President for Economic Development. Read more...';
		    $og_url          = 'http://www.stonybrook.edu/economic-development';

		    $page_to_top_link = true;

		    $page_footerbar   = true;
		?>

	<head>
		<?php 
			$file  = $header;
			include($path . $file);
			includeAsset('css','css/search.css','all');
		?>
		<style type="text/css">
			.create-codes a {
				font-size: 2.5em;
			}
			.sr-only {
				position: absolute;
				width: 1px;
				height: 1px;
				margin: -1px;
				padding: 0;
				overflow: hidden;
				clip: rect(0, 0, 0, 0);
				border: 0;
			}
		</style>
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
		        	<div class="nav-elements-container">
			        	<!-- <quick-nav> -->
							<?php
								include($path . $quick_nav);
							?>
						<!-- </quick-nav> -->
			            <!-- <more-nav> -->
							<?php 
								include($path . $more_nav);
							?>
						<!-- </more-nav> -->
			            <!-- <audience-nav> -->
							<?php 
								include($path . $audience_nav);
							?>
						<!-- </audience-nav> -->
					</div>
					<!-- <logo-container> -->
						<?php 
							include($path . $logo_container);
						?>
					<!-- </logo-container> -->
		        </div>
		        <div class="main-nav-container clearfix">
		        	<!-- <site-nav> -->
						<?php 
							include($path . $site_nav);
						?>
					<!-- </site-nav> -->
		        </div>
		        <div class="main-container">
		            <div class="main clearfix">

		            	<div class="wrapper create-codes">

			                <h3>Accessibility Test for Icons</h3>

			                <h4>Option 1</h4>

			                <a href="http://www.github.com"><em class="fa fa-github" aria-hidden="true"></em><span class="sr-only">Github</span></a>

			                <hr />

			                <h4>Option 2</h4>

			                <a href="http://www.github.com"><span class="sr-only">Github</span><em class="fa fa-github" aria-hidden="true"></em></a>

			                <hr />

			                <h4>Option 3</h4>

			                <a href="http://www.github.com"><em class="fa fa-github"></em><span class="sr-only">Github</span></a>

			                <hr />

			                <h4>Option 4</h4>

			                <a href="http://www.github.com"><span class="sr-only">Github</span><em class="fa fa-github"></em></a>

			                <hr />

			                <h4>Option 5</h4>

			                <a href="http://www.github.com"><em class="fa fa-github"></em></a>

			                <hr />

			                <h4>Option 6</h4>

			                <a href="http://www.github.com"><em class="fa fa-github" aria-label="Github"></em></a>

		                </div>

		            </div> <!-- .main -->
		        </div> <!-- .main-container -->
		        <!-- <div.footer-container> -->
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

		<script type="text/javascript">
			function HtmlEncode(s)
			{
				var el = document.createElement("div");
				el.innerText = el.textContent = s;
				s = el.innerHTML;
				return s;
			}
			$(document).ready(function() {
				var thisHtml, thisLabel;
				$('.create-codes a').each(function() {
					thisCode = '<a href="http://www.github.com">'+$(this).html()+'</a>';
					thisLabel = '<code style="clear: both; display: block; margin-top: 10px;">'+HtmlEncode(thisCode)+'</code>';
					$(this).after(thisLabel);
				});
			});
		</script>

		<!-- <googleanalytics> -->
			<?php /*
				$file = "site-analytics.php";
				include($path . $file); */
			?>
		<!-- </googleanalytics> -->
    </body>
</html>