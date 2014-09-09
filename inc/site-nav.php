					<nav class="site-nav <?php echo $nav_type ?> border-box clearfix">
		            	<div class="no-pad-wrapper clearfix">
			            	<div class="menu-trigger border-box clearfix"><i class="icon fa fa-bars"></i></div>
		            		<ul class="main-nav-list border-box hide-accessible-mobile clearfix">
		            			<li class="clearfix smaller<?php if($main_nav_selected_tab==1) echo(' selected'); ?>">
		                        	<a href="http://www.stonybrook.edu/sb/aboutsb.shtml" class="clearfix">
		                        		<span class="label clearfix">About</span>
		                        	</a>
		                        </li>
		            			<li class="clearfix<?php if($main_nav_selected_tab==2) echo(' selected'); ?>">
		                        	<a href="http://www.stonybrook.edu/sb/admissions.shtml" class="clearfix">
		                        		<span class="label clearfix">Admissions</span>
		                        	</a>
		                        </li>
		            			<li class="clearfix<?php if($main_nav_selected_tab==3) echo(' selected'); ?>">
		                        	<a href="http://www.stonybrook.edu/sb/academics.shtml" class="clearfix">
		                        		<span class="label clearfix">Academics</span>
		                        	</a>
		                        </li>
		            			<li class="clearfix<?php if($main_nav_selected_tab==4) echo(' selected'); ?>">
		                        	<a href="http://www.stonybrook.edu/research/" class="clearfix">
		                        		<span class="label clearfix">Research</span>
		                        	</a>
		                        </li>
		            			<li class="clearfix<?php if($main_nav_selected_tab==6) echo(' selected'); ?>">
		                        	<a href="http://www.library.stonybrook.edu/" class="clearfix">
		                        		<span class="label clearfix">Libraries</span>
		                        	</a>
		                        </li>
		            			<li class="clearfix<?php if($main_nav_selected_tab==7) echo(' selected'); ?>">
		                        	<a href="http://goseawolves.cstv.com/" class="clearfix">
		                        		<span class="label clearfix">Athletics</span>
		                        	</a>
		                        </li>
		            			<li class="clearfix smaller<?php if($main_nav_selected_tab==8) echo(' selected'); ?>">
		                        	<a href="http://www.stonybrook.edu/sb/arts.shtml" class="clearfix">
		                        		<span class="label clearfix">Arts</span>
		                        	</a>
		                        </li>
		            			<li class="clearfix smaller<?php if($main_nav_selected_tab==9) echo(' selected'); ?>">
		                        	<a href="http://www.stonybrook.edu/sb/giving" class="clearfix">
		                        		<span class="label clearfix">Giving</span>
		                        	</a>
		                        </li>
		            			<li class="clearfix medicine larger<?php if($main_nav_selected_tab==5) echo(' selected'); ?>">
		                        	<a href="http://www.stonybrookmedicine.edu/" class="clearfix">
		                        		<span class="label clearfix">Medicine</span>
		                        	</a>
		                        </li>
		            		</ul>
			            	<div class="search-container <?php echo $search_style ?> clearfix border-box">
			            		<form class="search-wrapper">
				            		<input type="text" id="search-form-query1" name="q" title="Search" value="" class="populate" size="30" placeholder="Search..."><button name="submit" type="submit" class="btn btn-success" id="search-form-submit1" alt="Do search">
						                <i class="icon fa fa-search"></i>
						            </button>
					            </form>
			            	</div>
		            	</div>
		            </nav>