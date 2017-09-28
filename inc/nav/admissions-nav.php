<a class="skip-navigation-link" href="#main-site-content" tabindex="3">Skip Navigation</a>
<nav class="sub-nav <?php echo $nav_type ?> border-box clearfix">
	<div class="no-pad-wrapper clearfix">
    	<div class="menu-trigger border-box clearfix"><i class="icon fa fa-bars"></i></div>
		<ul class="main-nav-list main-nav-list--show-on-hover border-box hide-accessible-mobile clearfix">
			<li class="clearfix no-dropdown desktop">
            	<a href="undergraduate-admissions" class="clearfix" tabindex="10">
            		<span class="label clearfix"><i class="icon fa fa-home"></i><span class="hide-accessible">Home</span></span>
            	</a>
            </li>
			<li class="clearfix<?php if($sub_nav_selected_tab==1) echo(' selected'); ?>">
            	<a href="undergraduate-admissions/apply" class="clearfix" data-drop-nav-id="1" tabindex="20">
            		<span class="label clearfix">Apply</span>
            	</a>
            </li>
			<li class="clearfix<?php if($sub_nav_selected_tab==2) echo(' selected'); ?>">
            	<a href="undergraduate-admissions/academics" class="clearfix" data-drop-nav-id="2" tabindex="30">
            		<span class="label clearfix">Academics</span>
            	</a>
            </li>
			<li class="clearfix no-dropdown larger<?php if($sub_nav_selected_tab==3) echo(' selected'); ?>">
            	<a href="undergraduate-admissions/cost-and-financial-aid" class="clearfix" data-drop-nav-id="0" tabindex="40">
            		<span class="label clearfix">Costs &amp; Aid</span>
            	</a>
            </li>
			<li class="clearfix larger<?php if($sub_nav_selected_tab==4) echo(' selected'); ?>">
            	<a href="undergraduate-admissions/visit" class="clearfix" data-drop-nav-id="4" tabindex="50">
            		<span class="label clearfix">Visit</span>
            	</a>
            </li>
			<li class="clearfix no-dropdown<?php if($sub_nav_selected_tab==5) echo(' selected'); ?>">
            	<a href="undergraduate-admissions/campus-life" class="clearfix" data-drop-nav-id="0" tabindex="60">
            		<span class="label clearfix">Campus Life</span>
            	</a>
            </li>
			<li class="clearfix<?php if($sub_nav_selected_tab==6) echo(' selected'); ?>">
            	<a href="undergraduate-admissions/contact" class="clearfix" data-drop-nav-id="6" tabindex="70">
            		<span class="label clearfix">Contact Us</span>
            	</a>
            </li>
		</ul>
    	<div class="search-container <?php echo $search_style ?> clearfix border-box">
        	<?php if($search_type=='default') { ?>
        		<form name="site-search" class="search-wrapper" action="http://www.stonybrook.edu/search/?" method="get">
                    <label class="hide-accessible" for="search-form-query1">Search the site:</label>
            		<input type="text" id="search-form-query1" name="q" title="Search" value="" class="populate" size="30" placeholder="Search...">
            		<button type="submit" class="btn btn-success" id="search-form-submit1" alt="Do search">
		                <i class="icon fa fa-search"></i>
		            </button>
	            </form>
        	<?php } ?>
        	<?php if($search_type=='admissions') { ?>
            	<form name="ae" action="http://sunysb.askadmissions.net/ask.aspx?" method="get">
                    <label class="hide-accessible" for="vasearch">Ask a Question:</label>
					<input id="vasearch" class="vasearch" name="quser" type="text" placeholder="Ask a Question..." size="30" maxlength="300">
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
		<a href="undergraduate-admissions/apply" tabindex="21">Apply</a>
		<span class="icon fa fa-times drop-nav-close close-the-drop-nav"></span>
	</div>
	<div class="no-pad-wrapper clearfix">
		<ul class="drop-nav-list border-box clearfix">
			<li class="<?php if($drop_nav_selected_tab==1) echo('selected'); ?>" data-li-order="01">
				<a href="undergraduate-admissions/apply/freshman" class="clearfix" tabindex="22">
					<span class="label clearfix">Freshman</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==2) echo('selected'); ?>" data-li-order="02">
				<a href="undergraduate-admissions/apply/transfer" class="clearfix" tabindex="23">
					<span class="label clearfix">Transfer</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==3) echo('selected'); ?>" data-li-order="03">
				<a href="undergraduate-admissions/apply/international" class="clearfix" tabindex="24">
					<span class="label clearfix">International</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==4) echo('selected'); ?>" data-li-order="04">
				<a href="undergraduate-admissions/apply/second-degree" class="clearfix" tabindex="25">
					<span class="label clearfix">Second<br />Degree</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==5) echo('selected'); ?>" data-li-order="05">
				<a href="undergraduate-admissions/apply/readmission" class="clearfix" tabindex="26">
					<span class="label clearfix">Readmission</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==6) echo('selected'); ?>" data-li-order="06" data-last-child="true" data-image="brochure">
				<a href="undergraduate-admissions/apply" class="clearfix" tabindex="27">
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
		<a href="undergraduate-admissions/academics" tabindex="30">Academics</a>
		<span class="icon fa fa-times drop-nav-close close-the-drop-nav"></span>
	</div>
	<div class="no-pad-wrapper clearfix">
		<ul class="drop-nav-list border-box clearfix">
			<li class="<?php if($drop_nav_selected_tab==7) echo('selected'); ?>" data-li-order="01">
				<a href="undergraduate-admissions/academics" class="clearfix" tabindex="31">
					<span class="label clearfix">Majors &amp; Degrees</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==8) echo('selected'); ?>" data-li-order="02">
				<a href="undergraduate-admissions/academics/honors" class="clearfix" tabindex="32">
					<span class="label clearfix">Honors</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==9) echo('selected'); ?>" data-li-order="03">
				<a href="undergraduate-admissions/academics/first-year-experience" class="clearfix" tabindex="33">
					<span class="label clearfix">First-Year<br />Experience</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==10) echo('selected'); ?>" data-li-order="04">
				<a href="undergraduate-admissions/academics/research" class="clearfix" tabindex="34">
					<span class="label clearfix">Faculty &amp;<br />Research</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==11) echo('selected'); ?>" data-li-order="05">
				<a href="undergraduate-admissions/academics/study-abroad" class="clearfix" tabindex="35">
					<span class="label clearfix">Study<br />Abroad</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==6) echo('selected'); ?>" data-li-order="06" data-last-child="true" data-image="find-major">
				<a href="undergraduate-admissions/academics" class="clearfix" tabindex="36">
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
		<a href="undergraduate-admissions/visit" tabindex="50">Visit</a>
		<span class="icon fa fa-times drop-nav-close close-the-drop-nav"></span>
	</div>
	<div class="no-pad-wrapper clearfix">
		<ul class="drop-nav-list border-box clearfix">
			<li class="<?php if($drop_nav_selected_tab==19) echo('selected'); ?>" data-li-order="01">
				<a href="undergraduate-admissions/visit" class="clearfix" tabindex="51">
					<span class="label clearfix">Campus<br />Tours</span>
				</a>
			</li>
			<?php /* <li data-li-order="02">
  				<a href="http://www.stonybrook.edu/commcms/redcarpet/" class="clearfix" target="_blank" tabindex="">
  					<span class="label clearfix">Red Carpet Days</span>
  				</a>
  			</li> */ ?>
			<li class="<?php if($drop_nav_selected_tab==20) echo('selected'); ?>" data-li-order="03">
				<a href="undergraduate-admissions/visit/directions-and-parking" class="clearfix" tabindex="52">
					<span class="label clearfix">Maps &amp; Directions</span>
				</a>
			</li>
			<li>
				<a href="visit#staying-here" class="clearfix" target="_blank" data-li-order="05" tabindex="53">
					<span class="label clearfix">Nearby<br />Hotels</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==22) echo('selected'); ?>" data-li-order="05">
				<a href="undergraduate-admissions/visit/coming-to-you" class="clearfix" tabindex="54">
					<span class="label clearfix">Coming to<br />You</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==6) echo('selected'); ?>" data-li-order="06" data-last-child="true" data-image="map">
				<a href="undergraduate-admissions/visit" class="clearfix" tabindex="55">
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
		<a href="undergraduate-admissions/contact" tabindex="70">Contact Us</a>
		<span class="icon fa fa-times drop-nav-close close-the-drop-nav"></span>
	</div>
	<div class="no-pad-wrapper clearfix">
		<ul class="drop-nav-list border-box clearfix">
			<li class="<?php if($drop_nav_selected_tab==31) echo('selected'); ?>" data-li-order="01">
				<a href="undergraduate-admissions/contact" class="clearfix" tabindex="71">
					<span class="label clearfix">Contact Info</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==32) echo('selected'); ?>" data-li-order="02">
				<a href="undergraduate-admissions/contact/meet-your-counselor" class="clearfix" tabindex="72">
					<span class="label clearfix">Meet Your Counselor</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==33) echo('selected'); ?>" data-li-order="03">
				<a href="https://sunysb.askadmissions.net/groupchat/LandingPage.aspx" class="clearfix" tabindex="73">
					<span class="label clearfix">Chat<br />With Us</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==34) echo('selected'); ?>" data-li-order="04">
				<a href="undergraduate-admissions/contact/request-information" class="clearfix" tabindex="74">
					<span class="label clearfix">Request<br />Info</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==35) echo('selected'); ?>" data-li-order="05">
				<a href="undergraduate-admissions/contact/brochures" class="clearfix" tabindex="75">
					<span class="label clearfix">Mobile<br />Apps</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==6) echo('selected'); ?>" data-li-order="06" data-last-child="true" data-image="iphone">
				<a href="undergraduate-admissions/contact/request-information" class="clearfix" tabindex="76">
					<span class="label clearfix">Receive Updates</span>
				</a>
			</li>
		</ul>
	</div>
	<div class="close-drop-nav close-the-drop-nav">
		<span aria-role="button">Close Menu</span>
	</div>
</nav>
<?php
    if($site_breadcrumbs & $home_page!=true) {
        printBreadcrumbs(false);
    }
?>
<div id="main-site-content" class="hide-accessible" tabindex="0"></div>