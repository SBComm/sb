<nav class="sub-nav <?php echo $nav_type ?> border-box clearfix">
	<div class="no-pad-wrapper clearfix">
    	<div class="menu-trigger border-box clearfix"><i class="icon fa fa-bars"></i></div>
		<ul class="main-nav-list border-box hide-accessible-mobile clearfix">
			<li class="clearfix<?php if($sub_nav_selected_tab==1) echo(' selected'); ?>">
            	<a href="summer-session/courses" class="clearfix">
            		<span class="label clearfix">Courses</span>
            	</a>
            </li>
			<li class="clearfix<?php if($sub_nav_selected_tab==2) echo(' selected'); ?>">
            	<a href="summer-session/calendar" class="clearfix">
            		<span class="label clearfix">Calendar</span>
            	</a>
            </li>
			<li class="clearfix<?php if($sub_nav_selected_tab==3) echo(' selected'); ?>">
            	<a href="summer-session/tuition-and-aid" class="clearfix">
            		<span class="label clearfix">Tuition &amp; Aid</span>
            	</a>
            </li>
			<li class="clearfix<?php if($sub_nav_selected_tab==4) echo(' selected'); ?>">
            	<a href="summer-session/student-life" class="clearfix">
            		<span class="label clearfix">Student Life</span>
            	</a>
            </li>
			<li class="clearfix<?php if($sub_nav_selected_tab==5) echo(' selected'); ?>">
            	<a href="summer-session/registration" class="clearfix">
            		<span class="label clearfix">Registration</span>
            	</a>
            </li>
            <li class="clearfix<?php if($sub_nav_selected_tab==6) echo(' selected'); ?>">
                <a href="summer-session/resources" class="clearfix">
                    <span class="label clearfix">Resources</span>
                </a>
            </li>
			<li class="clearfix<?php if($sub_nav_selected_tab==7) echo(' selected'); ?>">
            	<a href="summer-session/contact" class="clearfix">
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