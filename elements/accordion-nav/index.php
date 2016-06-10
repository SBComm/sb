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
				$inc = $root . $dev_dir . "inc/inc.php";
			} else {
				$inc = $root . $prod_dir . "inc/inc.php";
			}
			include($inc);
		?>
	<!-- </inc> -->
	<!--site variables-->
		<?php
			
			$page_title_sub  = 'Jobs';
			$page_title_full = $page_title . (isset($page_title_sub) && $page_title_sub!='' ? ' | ' . $page_title_sub : '');

		    $og_title        = 'Stony Brook ' . $page_title_sub;
		    //$og_description  = 'Did you know? Stony Brook University generates more than $2.5 billion annually in regional economic impact and is one of the few campuses anywhere with a Vice President for Economic Development. Read more...';
		    $og_url          = 'http://www.stonybrook.edu/economic-development';

		    $page_to_top_link = true;

		    $page_footerbar   = true;

		    $accordion_nav	  = true;
		    $equal_col = true;
		?>

	<!-- <head> -->
		<?php 
			$file  = $header;
			include($path . $file);
		?>

		<link rel="stylesheet" href="css/elements/accordion-nav/accordion-nav.css">
	<!-- </head> -->
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

		                <article>
						    <section style="width: 940px">
						    	<!--BEGIN Accordion Code-->
						        <ul id="accordion-nav">
								    <li class="tab"><span role="tab" data-hash="first-tab">Office of the VP</span>
								      <section class="courses">
								      	<h3>Executive</h3>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												Dexter A. Bailey, Jr.<br />
												Vice President<br />
												(631) 632-4811<br />
												<a href="mailto:Dexter.Bailey@stonybrook.edu">Dexter.Bailey@stonybrook.edu</a>
								      		</div>
								      	</div>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												Greg Duyck<br />
												Senior Associate Vice President for Advancement<br />
												(631) 632-4055<br />
												<a href="mailto:Greg.Duyck@stonybrook.edu">Greg.Duyck@stonybrook.edu</a>
								      		</div>
								      	</div>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
								      			Deborah Lowen-Klein<br />
												Assistant Vice President for Advancement, Marine and Atmospheric Sciences<br />
												Stony Brook Southampton<br />
												(631) 632-5074<br />
												<a href="mailto:Deborah.Lowen-Klein@stonybrook.edu">Deborah.Lowen-Klein@stonybrook.edu</a>
								      		</div>
								      	</div>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												Edward Testa<br />
												Associate Vice President for Advancement Services<br />
												(631) 632-4053<br />
												<a href="mailto:Edward.Testa@stonybrook.edu">Edward.Testa@stonybrook.edu</a>
								      		</div>
								      	</div>
								      	<h3>Administration</h3>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												Jolie Bua<br />
												Assistant to the Senior Associate Vice President<br />
												(631) 632-7699 <br />
												<a href="mailto:Jolie.Bua@stonybrook.edu">Jolie.Bua@stonybrook.edu</a>
								      		</div>
								      	</div>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												Marianne Celerin<br />
												Administrative Assistant<br />
												(631) 632-4001<br />
												<a href="mailto:Marianne.Celerin@stonybrook.edu">Marianne.Celerin@stonybrook.edu</a>
								      		</div>
								      	</div>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												Katherine Hasard<br />
												Assistant to the AVP<br />
												(631) 632-8625<br />
												<a href="mailto:Katherine.Hasard@stonybrook.edu">Katherine.Hasard@stonybrook.edu</a>
								      		</div>
								      	</div>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												Jeanine Maniscalco<br />
												Executive Assistant to the VP for Advancement<br />
												(631) 632-4353<br />
												<a href="mailto:Jeanine.Maniscalco@stonybrook.edu">Jeanine.Maniscalco@stonybrook.edu</a>
								      		</div>
								      	</div>
								      </section>
								    </li>
								    <li class="tab"><span role="tab" data-hash="development">Development</span>
								      <section class="courses">
								      	<h3>Medicine</h3>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												Danielle Holton<br />
												Stony Brook Children's Hospital and University Hospital<br />
												(631) 444-8305<br />
												<a href="mailto:Danielle.Holton@stonybrook.edu">Danielle.Holton@stonybrook.edu</a>
								      		</div>
								      	</div>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												Kate Kaming<br />
												Cancer Center<br />
												(631) 444-2604<br />
												<a href="mailto:Katherine.Kaming@stonybrook.edu">Katherine.Kaming@stonybrook.edu</a>
								      		</div>
								      	</div>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												Rachel Schnabl<br />
												School of Dental Medicine<br />
												(631) 632-8807<br />
												<a href="mailto:Rachel.Schnabl@stonybrook.edu">Rachel.Schnabl@stonybrook.edu</a>
								      		</div>
								      	</div>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												Jennifer Fleming<br />
												Heart Center<br />
												(631) 444-2687<br />
												<a href="mailto:Jennifer.Fleming@stonybrook.edu">Jennifer.Fleming@stonybrook.edu</a>
								      		</div>
								      	</div>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												Christina Rosa-Ragona<br />
												Development Coordinator<br />
												(631) 444-9249<br />
												<a href="mailto:Christina.Rosa-Ragona@stonybrook.edu">Christina.Rosa-Ragona@stonybrook.edu</a>
								      		</div>
								      	</div>
								      	<h3>Administration</h3>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												Victoria Irwin<br />
												Administrative Assistant<br />
												Stony Brook Medicine<br />
												(631) 444-2693<br />
												<a href="mailto:Victoria.Irwin@stonybrook.edu">Victoria.Irwin@stonybrook.edu</a>
								      		</div>
								      	</div>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												Yasemin Tansel<br />
												Administrative Assistant<br />
												Stony Brook Medicine<br />
												(631) 444-2945<br />
												<a href="mailto:Yasemin.Tansel@stonybrook.edu">Yasemin.Tansel@stonybrook.edu</a>
								      		</div>
								      	</div>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												Diane Van Tronk<br />
												Administrative Assistant<br />
												Dental Medicine<br />
												(631) 632-3753<br />
												<a href="mailto:Diane.VanTronk@stonybrook.edu">Diane.VanTronk@stonybrook.edu</a>
								      		</div>
								      	</div>
								      	<h3>University</h3>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												Jane MacArthur<br />
												Arts &amp; Sciences<br />
												(631) 632-7644<br />
												<a href="mailto:Jane.Macarthur@stonybrook.edu">Jane.Macarthur@stonybrook.edu</a>
								      		</div>
								      	</div>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												Rob Emmerich<br />
												Athletics<br />
												(631) 632-6312<br />
												<a href="mailto:Robert.Emmerich@stonybrook.edu">Robert.Emmerich@stonybrook.edu</a>
								      		</div>
								      	</div>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												Joseph Barry<br />
												Business<br />
												(631) 632-7253<br />
												<a href="mailto:Joseph.Barry@stonybrook.edu">Joseph.Barry@stonybrook.edu</a>
								      		</div>
								      	</div>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												Dawn McBrearty<br />
												Development Officer, CAS<br />
												(631) 632-3753<br />
												<a href="mailto:Diane.VanTronk@stonybrook.edu">Diane.VanTronk@stonybrook.edu</a>
								      		</div>
								      	</div>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												Diane Van Tronk<br />
												Administrative Assistant<br />
												Dental Medicine<br />
												(631) 632-4061<br />
												<a href="mailto:Dawn.McBrearty@stonybrook.edu">Dawn.McBrearty@stonybrook.edu</a>
								      		</div>
								      	</div>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												Katie Stockhammer<br />
												Staller Center for the Arts<br />
												(631) 632-4062<br />
												<a href="mailto:Katie.Stockhammer@stonybrook.edu">Katie.Stockhammer@stonybrook.edu</a>
								      		</div>
								      	</div>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												Alan Greene<br />
												Engineering &amp; Applied Sciences<br />
												(631) 632-8304<br />
												<a href="mailto:Alan.Greene@stonybrook.edu">Alan.Greene@stonybrook.edu</a>
								      		</div>
								      	</div>
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												Sarah Abruzzi<br />
												Turkana Basin Institute<br />
												(631) 632-4608<br />
												<a href="mailto:Sarah.Abruzzi@stonybrook.edu">Sarah.Abruzzi@stonybrook.edu</a>
								      		</div>
								      	</div>

								      </section>
								    </li>
								    <li class="tab"><span role="tab" data-hash="advancement">Advancement Services</span>
								      <section class="courses">

								      	<h3>Data Services</h3>
								      	
								      	<div class="float-left-wrapper person-wrapper equal-height-col">
								      		<div class="img-wrapper">
								      			<img src="http://placehold.it/100x125" />
								      		</div>
								      		<div class="data">
												NAME HERE<br />
												DEPARTMENT<br />
												(631) 444-0000<br />
												<a href="mailto:First.Last@stonybrook.edu">First.Last@stonybrook.edu</a>
								      		</div>
								      	</div>

								       </section>
								    </li>
								    <li class="tab"><span role="tab" data-hash="alumni">Alumni Relations</span>
								      <section class="courses">
								       </section>
								    </li>
								    <li class="tab"><span role="tab" data-hash="annual">Annual Fund</span>
								      <section class="courses">
								       </section>
								    </li>
								    <li class="tab"><span role="tab" data-hash="comm">Communications</span>
								      <section class="courses">
								       </section>
								    </li>
								    <li class="tab"><span role="tab" data-hash="corp">Corporate and Foundation Relations</span>
								      <section class="courses">
								       </section>
								    </li>
								    <li class="tab"><span role="tab" data-hash="planned">Planned Giving</span>
								      <section class="courses">
								       </section>
								    </li>
								    <li class="tab"><span role="tab" data-hash="sbf">Stony Brook Foundation</span>
								      <section class="courses">
								       </section>
								    </li>
								    <li class="tab"><span role="tab" data-hash="events">Special Events</span>
								      <section class="courses">
								       </section>
								    </li>
								    <li class="tab"><span role="tab" data-hash="athletics">Athletics</span>
								      <section class="courses">
								       </section>
								    </li>
								</ul>
						        <!--END Accordion Code-->
						    </section>
						</article>

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

		<!-- <googleanalytics> -->
			<?php /*
				$file = "site-analytics.php";
				include($path . $file); */
			?>
		<!-- </googleanalytics> -->
    </body>
</html>