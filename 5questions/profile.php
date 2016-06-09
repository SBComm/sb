<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<!-- <inc> -->
		<?php
			$root = '/user/far-beyond/www';

			$this_dir = $_SERVER['REQUEST_URI'];
			$dev_dir  = '/development/sb/5questions/';
			$prod_dir = '/sb/5questions/';
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
			$page_type = 'honorees';
			$profile_page = true;
		    $main_nav_selected = 1;
		    $page_footer = false;
		?>

	<!-- <head> -->
		<?php 
			if($page_header) { 
				include($path . $header);
			}
		?>
	<!-- </head> -->
    <body>
        <?php
			include($path . $global);
		?>

        <div class="main-container">
            <div class="main clearfix">
				        
		        <div class="content-container">
		            <div class="content clearfix">

		                <!-- <main-content> -->
							<!-- <nav> -->
							    <?php
							        $file = "site-nav.php";
							        include($path . $file);
							    ?>
							<!-- </nav> -->

							<section class="honorees-grid first-section clearfix">

							    <!-- <profile data> -->
								    <?php
								        
								    if(!@include($root . "/" . $site . "/" . $program_year . "/people/".$_GET["name"].".php")) {
								    	include($path . $content . "default-profile.php");
								    } 
								    ?>
								<!-- </profile data> -->

							</section>

							<!-- <category-nav> -->
							    <?php
							        $file = "category-nav.php";
							        include($path . $file);
							    ?>
							<!-- </category-nav> -->

						<!-- </main-content> -->

		            </div> <!-- .content-container -->
		        </div> <!-- .content -->
		        
				<!-- <to-top> -->
					<?php if($page_to_top) {
						include($path . $to_top);
					} ?>
				<!-- </to-top> -->

				<!-- <footer> -->
			    <?php 
					if($page_footer) {
						include($path . $footer);
					}
				?>
				<!-- </footer> -->

			</div> <!-- .main -->
		</div> <!-- .main-container -->

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