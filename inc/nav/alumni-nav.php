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
			<li class="clearfix larger<?php if($sub_nav_selected_tab==2) echo(' selected'); ?>">
            	<a href="alumni/news-and-spotlight" class="clearfix" data-drop-nav-id="2">
            		<span class="label clearfix">Get Informed</span>
            	</a>
            </li>
			<li class="clearfix larger<?php if($sub_nav_selected_tab==3) echo(' selected'); ?>">
            	<a href="alumni/perks" class="clearfix" data-drop-nav-id="3">
            		<span class="label clearfix">Get Perks</span>
            	</a>
            </li>
			<li class="clearfix larger<?php if($sub_nav_selected_tab==4) echo(' selected'); ?>">
            	<a href="alumni/give-back" class="clearfix" data-drop-nav-id="4">
            		<span class="label clearfix">Give Back</span>
            	</a>
            </li>
			<li class="clearfix larger<?php if($sub_nav_selected_tab==5) echo(' selected'); ?>">
            	<a href="alumni/stay-in-touch" class="clearfix" data-drop-nav-id="5">
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
	<div class="no-pad-wrapper sub-links-wrapper clearfix">
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
				<a href="alumni/hsc-alums" class="clearfix">
					<span class="label clearfix">HSC Alums</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==4) echo('selected'); ?>" data-li-order="04">
				<a href="alumni/students" class="clearfix">
					<span class="label clearfix">Students</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==5) echo('selected'); ?>" data-li-order="05">
				<a href="alumni/recent-grads" class="clearfix">
					<span class="label clearfix">Recent Grads</span>
				</a>
			</li>
			<li></li>
		</ul>
		<div class="mega-blurb">
			Get connected with fellow alums at one of our networking events, reunions, or career workshops!
		</div>
		<div class="mega-img">
			<img src="img/alumni/nav/get-connected-diag.png" />
		</div>
	</div>
	<div class="close-drop-nav close-the-drop-nav">
		<span aria-role="button">Close Menu</span>
	</div>
</nav>

<nav class="drop-nav border-box clearfix hide-accessible" data-drop-nav-id="2">
	<div class="drop-nav-heading clearfix">
		<a href="alumni/news-and-spotlight">Get Informed</a>
		<span class="icon fa fa-times drop-nav-close close-the-drop-nav"></span>
	</div>
	<div class="no-pad-wrapper sub-links-wrapper clearfix">
		<ul class="drop-nav-list border-box clearfix">
			<li class="<?php if($drop_nav_selected_tab==7) echo('selected'); ?>" data-li-order="01">
				<a href="alumni/news-and-spotlight#news" class="clearfix">
					<span class="label clearfix">News</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==8) echo('selected'); ?>" data-li-order="02">
				<a href="alumni/news-and-spotlight#spotlight" class="clearfix">
					<span class="label clearfix">Spotlight</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==9) echo('selected'); ?>" data-li-order="03">
				<a href="alumni/news-and-spotlight/authors" class="clearfix">
					<span class="label clearfix">Authors</span>
				</a>
			</li>
			<li></li>
		</ul>
		<div class="mega-blurb">
			Learn how your alma mater is making a global impact as alumni are changing our world for the better.
		</div>
		<div class="mega-img">
			<img src="img/alumni/nav/get-informed-2-diag.png" />
		</div>
	</div>
	<div class="close-drop-nav close-the-drop-nav">
		<span aria-role="button">Close Menu</span>
	</div>
</nav>

<nav class="drop-nav border-box clearfix hide-accessible" data-drop-nav-id="3">
	<div class="drop-nav-heading clearfix">
		<a href="alumni/perks">Get Perks</a>
		<span class="icon fa fa-times drop-nav-close close-the-drop-nav"></span>
	</div>
	<div class="no-pad-wrapper sub-links-wrapper clearfix">
		<ul class="drop-nav-list border-box clearfix">
			<li class="<?php if($drop_nav_selected_tab==13) echo('selected'); ?>" data-li-order="01">
				<a href="alumni/perks" class="clearfix">
					<span class="label clearfix">Perks</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==14) echo('selected'); ?>" data-li-order="02">
				<a href="alumni/perks/lifelong-learning" class="clearfix">
					<span class="label clearfix">Lifelong Learning</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==15) echo('selected'); ?>" data-li-order="03">
				<a href="alumni/perks/spirit-and-pride" class="clearfix">
					<span class="label clearfix">SBU Pride</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==16) echo('selected'); ?>" data-li-order="04">
				<a href="alumni/perks#email-for-life" class="clearfix">
					<span class="label clearfix">Email for Life</span>
				</a>
			</li>
			<li></li>
		</ul>
		<div class="mega-blurb">
			Browse the wide selection of exclusive perks and discounts that are available to you as a Stony Brook alum!
		</div>
		<div class="mega-img">
			<img src="img/alumni/nav/get-perks-diag.png" />
		</div>
	</div>
	<div class="close-drop-nav close-the-drop-nav">
		<span aria-role="button">Close Menu</span>
	</div>
</nav>

<nav class="drop-nav border-box clearfix hide-accessible" data-drop-nav-id="4">
	<div class="drop-nav-heading clearfix">
		<a href="alumni/give-back">Give Back</a>
		<span class="icon fa fa-times drop-nav-close close-the-drop-nav"></span>
	</div>
	<div class="no-pad-wrapper sub-links-wrapper clearfix">
		<ul class="drop-nav-list border-box clearfix">
			<li class="<?php if($drop_nav_selected_tab==19) echo('selected'); ?>" data-li-order="01">
				<a href="alumni/give-back" class="clearfix">
					<span class="label clearfix">Volunteer</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==20) echo('selected'); ?>" data-li-order="02">
				<a href="http://stonybrook.edu/give" class="clearfix" target="_blank">
					<span class="label clearfix">Give</span>
				</a>
			</li>
			<li></li>
		</ul>
		<div class="mega-blurb">
			Join the growing community of alumni who are making a difference at Stony Brook.
		</div>
		<div class="mega-img">
			<img src="img/alumni/nav/give-back-diag.png" />
		</div>
	</div>
	<div class="close-drop-nav close-the-drop-nav">
		<span aria-role="button">Close Menu</span>
	</div>
</nav>

<nav class="drop-nav border-box clearfix hide-accessible" data-drop-nav-id="5">
	<div class="drop-nav-heading clearfix">
		<a href="alumni/stay-in-touch">Stay In Touch</a>
		<span class="icon fa fa-times drop-nav-close close-the-drop-nav"></span>
	</div>
	<div class="no-pad-wrapper sub-links-wrapper clearfix">
		<ul class="drop-nav-list border-box clearfix">
			<li class="<?php if($drop_nav_selected_tab==19) echo('selected'); ?>" data-li-order="01">
				<a href="alumni/stay-in-touch" class="clearfix">
					<span class="label clearfix">Alumni Association</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==20) echo('selected'); ?>" data-li-order="02">
				<a href="alumni/stay-in-touch/alumni-relations" class="clearfix">
					<span class="label clearfix">Alumni Relations</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==21) echo('selected'); ?>" data-li-order="03">
				<a href="alumni/form/send-us-your-news" class="clearfix">
					<span class="label clearfix">Send us Your News</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==22) echo('selected'); ?>" data-li-order="04">
				<a href="alumni/stay-in-touch/alumni-relations" class="clearfix">
					<span class="label clearfix">Contact</span>
				</a>
			</li>
			<li class="<?php if($drop_nav_selected_tab==23) echo('selected'); ?>" data-li-order="05">
				<a href="alumni/stay-in-touch/visiting-sbu" class="clearfix">
					<span class="label clearfix">Visit</span>
				</a>
			</li>
			<li></li>
		</ul>
		<div class="mega-blurb">
			We're here to help you maintain a lifelong and meaningful relationship with Stony Brook University.
		</div>
		<div class="mega-img">
			<img src="img/alumni/nav/stay-in-touch-diag.png" />
		</div>
	</div>
	<div class="close-drop-nav close-the-drop-nav">
		<span aria-role="button">Close Menu</span>
	</div>
</nav>