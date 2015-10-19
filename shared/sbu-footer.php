

	            </div> <!-- .main -->
	        </div> <!-- .main-container -->

	        <!-- <div.footer-container> -->
	        	<?php if($page_footer) {
					$file = "footers/for-students-footer.php";
					include($path . $file);
				} ?>
				<?php if($page_footerbar) {
					$file = "footerbar.php";
					include($path . $file);
				} ?>
			<!-- </div.footer-container> -->

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