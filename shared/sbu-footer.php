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

    <!-- <scripts> -->
		<?php includeAsset('js','js/cd-dropdown/jquery.dropdown.js'); ?>
		<script type="text/javascript">
			$( function() {
				$( '#cd-dropdown' ).dropdown( {
					gutter : 0
				} );
			});
		</script>

		<?php
			includeAsset('js','js/vendor/jquery.easing.1.3.js');
			includeAsset('js','js/vendor/jquery.easing.compatibility.js');
			includeAsset('js','js/vendor/jquery.scrollTo.min.js');
			includeAsset('js','js/vendor/jquery.localScroll.min.js');
			includeAsset('js','js/vendor/jquery.ba-bbq.js');
			includeAsset('js','js/vendor/jquery.motio.js');
			includeAsset('js','js/vendor/jquery.tooltipster.min.js');
			includeAsset('js','js/plugins.js');
			includeAsset('js','js/main.js');
			includeAsset('js','js/vendor/fastclick.js');
		?>

        <script type="text/javascript">
		    //<![CDATA[
		        $(function() {
				    FastClick.attach(document.body);
				});
		    //]]>
		</script>

		<script type="text/javascript">
			$(document).ready(function() {
			    //<![CDATA[
					$(".site-name").fitText({ minFontSize: '20px', maxFontSize: '27px' });
					$(".page-title h1").fitText(1.2, { minFontSize: '20px', maxFontSize: '46px' });
					/*$(".site-carousel h1").fitText(1, { minFontSize: '30px', maxFontSize: '100px' });*/
			    //]]>

			    $('#totop').on('click',function(event) {
					<?php if($page_to_top_loc=='default') { ?>
						var scrollToClass = '0px';
					<?php } else if($page_to_top_loc=='main-nav') { ?>
						var scrollToClass = '.main-nav-container';
					<?php } else { ?>
						var scrollToClass = '.<?php echo $page_to_top_loc; ?>';
					<?php } ?>

					scrollToTop(scrollToClass);
				});

			    /* Initialize Tooltips */
				$('.tooltip').tooltipster({
					theme: 'tooltipster-light'
				});
			});
		</script>
		<?php includeAsset('js','js/vendor/selectivizr-min.js'); ?>
		<?php includeAsset('js','js/vendor/iframeResizer.js'); /* using non-min version; min produces error on */ ?> 

	<!-- </scripts> -->

	<!-- <googleanalytics> -->
		<?php 
			$file = "site-analytics.php";
			include($path . $file); 
		?>
	<!-- </googleanalytics> -->