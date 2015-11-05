<nav class="sub-nav <?php echo $nav_type ?> border-box clearfix">
	<div class="no-pad-wrapper clearfix">
    	<div class="menu-trigger border-box clearfix"><i class="icon fa fa-bars"></i></div>
		<ul class="main-nav-list border-box hide-accessible-mobile clearfix">
			<li class="clearfix no-dropdown desktop">
            	<a href="alumni" class="clearfix">
            		<span class="label clearfix"><i class="icon fa fa-home"></i><span class="hide-accessible">Home</span></span>
            	</a>
            </li>
			<li class="clearfix larger<?php if($sub_nav_selected_tab==1) echo(' selected'); ?>">
            	<a href="alumni/events-and-reunions" class="clearfix" data-drop-nav-id="1">
            		<span class="label clearfix">Get Connected</span>
            	</a>
            </li>
			<li class="clearfix no-dropdown larger<?php if($sub_nav_selected_tab==2) echo(' selected'); ?>">
            	<a href="alumni/news-and-spotlight" class="clearfix" data-drop-nav-id="0">
            		<span class="label clearfix">Get Informed</span>
            	</a>
            </li>
			<li class="clearfix larger<?php if($sub_nav_selected_tab==3) echo(' selected'); ?>">
            	<a href="alumni/get-perks" class="clearfix" data-drop-nav-id="3">
            		<span class="label clearfix">Get Perks</span>
            	</a>
            </li>
			<li class="clearfix no-dropdown larger<?php if($sub_nav_selected_tab==4) echo(' selected'); ?>">
            	<a href="alumni/give" class="clearfix" data-drop-nav-id="0">
            		<span class="label clearfix">Give Back</span>
            	</a>
            </li>
			<li class="clearfix no-dropdown larger<?php if($sub_nav_selected_tab==5) echo(' selected'); ?>">
            	<a href="alumni/contact" class="clearfix" data-drop-nav-id="0">
            		<span class="label clearfix">Stay In Touch</span>
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
		<a href="alumni/events-and-reunions">Get Connected</a>
		<span class="icon fa fa-times drop-nav-close close-the-drop-nav"></span>
	</div>
	<div class="no-pad-wrapper clearfix">
		<ul class="drop-nav-list border-box clearfix">
			<li class="<?php if($drop_nav_selected_tab==1) echo('selected'); ?>" data-li-order="01">
				<a href="alumni/events-and-reunions" class="clearfix">
					<span class="label clearfix">Events &amp; Reunions</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==2) echo('selected'); ?>" data-li-order="02">
				<a href="alumni/chapters" class="clearfix">
					<span class="label clearfix">Chapters</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==3) echo('selected'); ?>" data-li-order="03">
				<a href="alumni/hsc-alumns" class="clearfix">
					<span class="label clearfix">HSC Alumns</span>
				</a>
			</li>
			<li></li>
		</ul>
	</div>
	<div class="close-drop-nav close-the-drop-nav">
		<span aria-role="button">Close Menu</span>
	</div>
</nav>

<nav class="drop-nav border-box clearfix hide-accessible" data-drop-nav-id="3">
	<div class="drop-nav-heading clearfix">
		<a href="alumni/benefits-and-perks">Get Perks</a>
		<span class="icon fa fa-times drop-nav-close close-the-drop-nav"></span>
	</div>
	<div class="no-pad-wrapper clearfix">
		<ul class="drop-nav-list border-box clearfix">
			<li class="<?php if($drop_nav_selected_tab==19) echo('selected'); ?>" data-li-order="01">
				<a href="alumni/benefits-and-perks" class="clearfix">
					<span class="label clearfix">Benefits</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==20) echo('selected'); ?>" data-li-order="02">
				<a href="alumni/careers" class="clearfix" target="_blank">
					<span class="label clearfix">Careers</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==21) echo('selected'); ?>" data-li-order="03">
				<a href="alumni/lifelong-learning" class="clearfix">
					<span class="label clearfix">Lifelong Learning</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==22) echo('selected'); ?>" data-li-order="04">
				<a href="alumni/sbu-pride" class="clearfix">
					<span class="label clearfix">SBU Pride</span>
				</a>
			</li>
			<li></li>
		</ul>
	</div>
	<div class="close-drop-nav close-the-drop-nav">
		<span aria-role="button">Close Menu</span>
	</div>
</nav>