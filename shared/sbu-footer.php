	<!-- inc -->
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

		$includeHeader = ($_GET["include"]);
		if($includeHeader==1) {
			$file  = $header;
			include($path . $file);
		}
	?>
	<!-- /inc -->

	            </div> <!-- .main -->
	        </div> <!-- .main-container -->

	        <!-- <div.footer-container> -->
	        	<?php if($_GET["footer"]==1) {
					$file = "footers/for-students-footer.php";
					include($path . $file);
				} ?>
				<?php if($_GET["footerbar"]==1) {
					$file = "footerbar.php";
					include($path . $file);
				} ?>
			<!-- </div.footer-container> -->

			<!-- <to-top> -->
				<?php if($_GET["totop"]==1) {
					$file = "to-top.php";
					include($path . $file);
				} ?>
			<!-- </to-top> -->

        </div><!-- .sbu-sub-wrapper -->
    </div><!-- .sbu-wrapper -->

	<!-- <googleanalytics> -->
		<?php 
			$file = "site-analytics.php";
			include($path . $file); 
		?>
	<!-- </googleanalytics> -->