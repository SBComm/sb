<nav class="sub-nav <?php echo $nav_type ?> border-box clearfix">
	<div class="no-pad-wrapper clearfix">
    	<div class="menu-trigger border-box clearfix"><i class="icon fa fa-bars"></i></div>
		<ul class="main-nav-list border-box hide-accessible-mobile clearfix">
			<li class="clearfix<?php if($sub_nav_selected_tab==1) echo(' selected'); ?>">
            	<a href="undergraduate-admissions/apply" class="clearfix" data-drop-nav-id="1">
            		<span class="label clearfix">Apply</span>
            	</a>
            </li>
			<li class="clearfix<?php if($sub_nav_selected_tab==2) echo(' selected'); ?>">
            	<a href="undergraduate-admissions/academics" class="clearfix" data-drop-nav-id="2">
            		<span class="label clearfix">Academics</span>
            	</a>
            </li>
			<li class="clearfix no-dropdown larger<?php if($sub_nav_selected_tab==3) echo(' selected'); ?>">
            	<a href="undergraduate-admissions/cost-and-financial-aid" class="clearfix" data-drop-nav-id="0">
            		<span class="label clearfix">Costs &amp; Aid</span>
            	</a>
            </li>
			<li class="clearfix larger<?php if($sub_nav_selected_tab==4) echo(' selected'); ?>">
            	<a href="undergraduate-admissions/visit" class="clearfix" data-drop-nav-id="4">
            		<span class="label clearfix">Visit</span>
            	</a>
            </li>
			<li class="clearfix no-dropdown<?php if($sub_nav_selected_tab==5) echo(' selected'); ?>">
            	<a href="undergraduate-admissions/campus-life" class="clearfix" data-drop-nav-id="0">
            		<span class="label clearfix">Campus Life</span>
            	</a>
            </li>
			<li class="clearfix<?php if($sub_nav_selected_tab==6) echo(' selected'); ?>">
            	<a href="undergraduate-admissions/contact" class="clearfix" data-drop-nav-id="6">
            		<span class="label clearfix">Contact Us</span>
            	</a>
            </li>
		</ul>
    	<div class="search-container <?php echo $search_style ?> clearfix border-box">
        	<?php if($search_type=='default') { ?>
        		<form name="site-search" class="search-wrapper" action="http://www.stonybrook.edu/search/?" method="get">
            		<input type="text" id="search-form-query1" name="q" title="Search" value="" class="populate" size="30" placeholder="Search...">
            		<button type="submit" class="btn btn-success" id="search-form-submit1" alt="Do search">
		                <i class="icon fa fa-search"></i>
		            </button>
	            </form>
        	<?php } ?>
        	<?php if($search_type=='admissions') { ?>
            	<form name="ae" action="http://sunysb.askadmissions.net/ask.aspx?" method="get">
					<input class="vasearch" name="quser" type="text" placeholder="Ask a Question..." size="30" maxlength="300">
					<button type="submit" class="btn btn-success" id="btnask" alt="Search Button">
		                <i class="icon fa fa-question-circle"></i>
		            </button>
				</form>
        	<?php } ?>
    	</div>
	</div>
</nav>

<nav class="drop-nav border-box clearfix hide-accessible" data-drop-nav-id="1">
	<div class="drop-nav-heading clearfix">
		<a href="#">Apply</a>
		<span class="icon fa fa-times drop-nav-close close-the-drop-nav"></span>
	</div>
	<div class="no-pad-wrapper clearfix">
		<ul class="drop-nav-list border-box clearfix">
			<li class="<?php if($drop_nav_selected_tab==1) echo('selected'); ?>" data-li-order="01">
				<a href="undergraduate-admissions/apply/freshman" class="clearfix">
					<span class="label clearfix">Freshman</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==2) echo('selected'); ?>" data-li-order="02">
				<a href="undergraduate-admissions/apply/transfer" class="clearfix">
					<span class="label clearfix">Transfer</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==3) echo('selected'); ?>" data-li-order="03">
				<a href="undergraduate-admissions/apply/international" class="clearfix">
					<span class="label clearfix">International</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==4) echo('selected'); ?>" data-li-order="04">
				<a href="undergraduate-admissions/apply/second-degree" class="clearfix">
					<span class="label clearfix">Second<br />Degree</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==5) echo('selected'); ?>" data-li-order="05">
				<a href="undergraduate-admissions/apply/readmission" class="clearfix">
					<span class="label clearfix">Readmission</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==6) echo('selected'); ?>" data-li-order="06" data-last-child="true" data-image="brochure">
				<a href="undergraduate-admissions/apply" class="clearfix">
					<span class="label clearfix">Apply Now</span>
				</a>
			</li>
		</ul>
	</div>
	<div class="close-drop-nav close-the-drop-nav">
		<span aria-role="button">Close Menu</span>
	</div>
</nav>

<nav class="drop-nav border-box clearfix hide-accessible" data-drop-nav-id="2">
	<div class="drop-nav-heading clearfix">
		<a href="#">Academics</a>
		<span class="icon fa fa-times drop-nav-close close-the-drop-nav"></span>
	</div>
	<div class="no-pad-wrapper clearfix">
		<ul class="drop-nav-list border-box clearfix">
			<li class="<?php if($drop_nav_selected_tab==7) echo('selected'); ?>" data-li-order="01">
				<a href="undergraduate-admissions/academics" class="clearfix">
					<span class="label clearfix">Majors &amp; Degrees</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==8) echo('selected'); ?>" data-li-order="02">
				<a href="undergraduate-admissions/academics/honors" class="clearfix">
					<span class="label clearfix">Honors</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==9) echo('selected'); ?>" data-li-order="03">
				<a href="undergraduate-admissions/academics/first-year-experience" class="clearfix">
					<span class="label clearfix">First-Year<br />Experience</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==10) echo('selected'); ?>" data-li-order="04">
				<a href="undergraduate-admissions/academics/research" class="clearfix">
					<span class="label clearfix">Faculty &amp;<br />Research</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==11) echo('selected'); ?>" data-li-order="05">
				<a href="undergraduate-admissions/academics/study-abroad" class="clearfix">
					<span class="label clearfix">Study<br />Abroad</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==6) echo('selected'); ?>" data-li-order="06" data-last-child="true" data-image="find-major">
				<a href="undergraduate-admissions/academics" class="clearfix">
					<span class="label clearfix">Find Your Major</span>
				</a>
			</li>
		</ul>
	</div>
	<div class="close-drop-nav close-the-drop-nav">
		<span aria-role="button">Close Menu</span>
	</div>
</nav>

<nav class="drop-nav border-box clearfix hide-accessible" data-drop-nav-id="4">
	<div class="drop-nav-heading clearfix">
		<a href="#">Visit</a>
		<span class="icon fa fa-times drop-nav-close close-the-drop-nav"></span>
	</div>
	<div class="no-pad-wrapper clearfix">
		<ul class="drop-nav-list border-box clearfix">
			<li class="<?php if($drop_nav_selected_tab==19) echo('selected'); ?>" data-li-order="01">
				<a href="undergraduate-admissions/visit" class="clearfix">
					<span class="label clearfix">Campus<br />Tours</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==20) echo('selected'); ?>" data-li-order="02">
				<a href="undergraduate-admissions/visit/directions-and-parking" class="clearfix">
					<span class="label clearfix">Directions &amp; Parking</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==21) echo('selected'); ?>" data-li-order="03">
				<a href="undergraduate-admissions/visit/campus-maps" class="clearfix">
					<span class="label clearfix">Campus<br />Maps</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==22) echo('selected'); ?>" data-li-order="04">
				<a href="undergraduate-admissions/visit/coming-to-you" class="clearfix">
					<span class="label clearfix">Coming to<br />You</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==6) echo('selected'); ?>" data-li-order="05" data-last-child="true" data-image="map">
				<a href="undergraduate-admissions/visit" class="clearfix">
					<span class="label clearfix">Plan Your Visit</span>
				</a>
			</li>
		</ul>
	</div>
	<div class="close-drop-nav close-the-drop-nav">
		<span aria-role="button">Close Menu</span>
	</div>
</nav>

<nav class="drop-nav border-box clearfix hide-accessible" data-drop-nav-id="6">
	<div class="drop-nav-heading clearfix">
		<a href="#">Contact Us</a>
		<span class="icon fa fa-times drop-nav-close close-the-drop-nav"></span>
	</div>
	<div class="no-pad-wrapper clearfix">
		<ul class="drop-nav-list border-box clearfix">
			<li class="<?php if($drop_nav_selected_tab==31) echo('selected'); ?>" data-li-order="01">
				<a href="undergraduate-admissions/contact" class="clearfix">
					<span class="label clearfix">Contact Info</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==32) echo('selected'); ?>" data-li-order="02">
				<a href="undergraduate-admissions/contact/meet-your-counselor" class="clearfix">
					<span class="label clearfix">Meet Your Counselor</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==33) echo('selected'); ?>" data-li-order="03">
				<a href="https://sunysb.askadmissions.net/groupchat/LandingPage.aspx" class="clearfix">
					<span class="label clearfix">Chat<br />With Us</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==34) echo('selected'); ?>" data-li-order="04">
				<a href="undergraduate-admissions/contact/request-information" class="clearfix">
					<span class="label clearfix">Request<br />Info</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==34) echo('selected'); ?>" data-li-order="05">
				<a href="undergraduate-admissions/contact/brochures" class="clearfix">
					<span class="label clearfix">Brochures &amp;<br />Downloads</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==6) echo('selected'); ?>" data-li-order="06" data-last-child="true" data-image="iphone">
				<a href="undergraduate-admissions/contact/request-information" class="clearfix">
					<span class="label clearfix">Receive Updates</span>
				</a>
			</li>
		</ul>
	</div>
	<div class="close-drop-nav close-the-drop-nav">
		<span aria-role="button">Close Menu</span>
	</div>
</nav>