<nav class="site-nav <?php echo $nav_type ?> border-box clearfix">
	<div class="no-pad-wrapper clearfix">
    	<div class="menu-trigger border-box clearfix"><i class="icon fa fa-bars"></i></div>
		<ul class="main-nav-list border-box hide-accessible-mobile clearfix">
			<li class="clearfix home">
            	<a href="http://www.stonybrook.edu/" class="clearfix">
            		<span class="label clearfix"><i class="fa fa-home"><span class="hide-accessible">Home</span></i></span>
            	</a>
            </li>
			<li class="clearfix<?php if($main_nav_selected_tab==1) echo(' selected'); ?>">
            	<a href="about/" class="clearfix">
            		<span class="label clearfix">About</span>
            	</a>
            </li>
			<li class="clearfix<?php if($main_nav_selected_tab==2) echo(' selected'); ?>">
            	<a href="http://mobile.cc.stonybrook.edu/sb/admissions/" class="clearfix">
            		<span class="label clearfix">Admissions</span>
            	</a>
            </li>
			<li class="clearfix<?php if($main_nav_selected_tab==3) echo(' selected'); ?>">
            	<a href="academics/" class="clearfix">
            		<span class="label clearfix">Academics</span>
            	</a>
            </li>
			<li class="clearfix<?php if($main_nav_selected_tab==4) echo(' selected'); ?>">
            	<a href="research/" class="clearfix">
            		<span class="label clearfix">Research</span>
            	</a>
            </li>
			<li class="clearfix<?php if($main_nav_selected_tab==5) echo(' selected'); ?>">
            	<a href="athletics/" class="clearfix">
            		<span class="label clearfix">Athletics</span>
            	</a>
            </li>
			<li class="clearfix<?php if($main_nav_selected_tab==6) echo(' selected'); ?>">
            	<a href="medicine/" class="clearfix">
            		<span class="label clearfix">Medicine</span>
            	</a>
            </li>
            <li class="clearfix<?php if($main_nav_selected_tab==7) echo(' selected'); ?>">
                <a href="giving/" class="clearfix">
                    <span class="label clearfix">Giving</span>
                </a>
            </li>
		</ul>
    	<div class="search-container <?php echo $search_style ?> clearfix border-box">
    		<form class="search-wrapper" action="http://stonybrook.edu/search">
        		<input type="text" id="search-form-query1" name="q" title="Search" value="" class="populate" size="30" placeholder="Search SBU"><button name="submit" type="submit" class="btn btn-success" id="search-form-submit1" alt="Search" aria-label="search">
	                <i class="icon fa fa-search"></i>
	            </button>
            </form>
    	</div>
	</div>
	<div class="clearfix campaign-badge">
    	<a href="http://www.stonybrook.edu/campaign" class="arrow-after">
    		<span class="label hide-accessible clearfix">The Campaign for Stony Brook</span>
    		<img src="//mobile.cc.stonybrook.edu/sb/img/branding/logo/campaign-lockup-two-line-358-60.png" alt="The Campaign for Stony Brook logo" />
    		<div class="join-us"><span class="arrow-after">Join us!</span></div>
    	</a>
    </div>
</nav>
<?php
    if($site_breadcrumbs) {
        printBreadcrumbs();
    }
?>