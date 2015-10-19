<?php if($page_cat=='main') { ?>
		            <div class="logo-container page-cat-main clearfix border-box">
		            	<header class="no-pad-wrapper">
				            <div class="logo-wrapper">
				            	<div class="logo"><a href="http://www.stonybrook.edu/"><img src="//mobile.cc.stonybrook.edu/sb/img/stony-brook-university-logo.jpg" /></a></div>
				            	<!--<div class="site-tagline">The State University of <span>New York</span></div>-->
				            </div>
			            </header>
		            </div>
<?php } elseif($second_level == 'analytics') { ?>
					<div class="logo-container page-cat-sub clearfix border-box">
		            	<header class="no-pad-wrapper">
				            <div class="logo-wrapper">
				            	<div class="logo"><a href="http://www.stonybrook.edu/"><img src="//mobile.cc.stonybrook.edu/sb/img/stony-brook-university-logo.jpg" /></a></div>
				            	<h1 class="site-name serif"><a href="<?php echo $og_url; ?>"><?php echo $page_title_sub; ?></a></h1>
				            </div>
			            </header>
		            </div>
<?php } elseif($second_level == 'faculty-experts') { ?>
					<div class="logo-container page-cat-sub clearfix border-box">
		            	<header class="no-pad-wrapper">
				            <div class="logo-wrapper">
				            	<div class="logo"><a href="http://www.stonybrook.edu/"><img src="//mobile.cc.stonybrook.edu/sb/img/stony-brook-university-logo.jpg" /></a></div>
				            	<h1 class="site-name serif"><a href="http://stonybrook.edu/newsroom/"><?php echo $page_title_sub; ?></a></h1>
				            </div>
			            </header>
		            </div>
<?php } elseif($page_cat=='sub') { ?>
					<div class="logo-container page-cat-sub clearfix border-box">
		            	<header class="no-pad-wrapper">
				            <div class="logo-wrapper">
				            	<div class="logo"><a href="http://www.stonybrook.edu/"><img src="//mobile.cc.stonybrook.edu/sb/img/stony-brook-university-logo.jpg" /></a></div>
				            	<h1 class="site-name serif"><a href="<?php echo $og_url; ?>"><?php echo $page_title_sub; ?></a></h1>
				            </div>
			            </header>
		            </div>
<?php } ?>