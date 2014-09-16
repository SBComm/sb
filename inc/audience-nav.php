<?php if($second_level=='undergrad-admissions') { ?>
    <nav class="audience-nav clearfix">
		<div class="dropdown-nav clearfix"<?php if($audience_nav_selected_tab>0) echo(' data-selected-tab="' . $audience_nav_selected_tab . '"') ?>>
			<select id="cd-dropdown" name="cd-dropdown" class="cd-select">
				<option value="-1" selected>View information for...</option>
				<option value="1" data-href="http://www.stonybrook.edu/ugadmissions/admitted/">Admitted Students</option>
				<option value="2" data-href="undergraduate-admissions/application-status">Applicants</option>
				<option value="3" data-href="undergraduate-admissions/college-counselors">College Counselors</option>
				<option value="4" data-href="undergraduate-admissions/parents">Parents</option>
				<option value="5" data-href="undergraduate-admissions/veterans">Veterans</option>
				<option value="6" data-href="undergraduate-admissions/future-students">High School Students</option>
			</select>
		</div>
    </nav>
<?php } else { ?>
    <nav class="audience-nav clearfix">
		<div class="dropdown-nav clearfix"<?php if($audience_nav_selected_tab>0) echo(' data-selected-tab="' . $audience_nav_selected_tab . '"') ?>>
			<select id="cd-dropdown" name="cd-dropdown" class="cd-select">
				<option value="-1" selected>View information for...</option>
				<option value="1" data-href="http://www.stonybrook.edu/sb/studentlife.shtml">Current students</option>
				<option value="2" data-href="http://www.stonybrook.edu/sb/faculty.shtml">Faculty &amp; Staff</option>
				<option value="3" data-href="http://www.stonybrook.edu/sb/alumni.shtml">Alumni &amp; Friends</option>
				<option value="4" data-href="http://www.stonybrook.edu/sb/parents.shtml">Parents</option>
				<option value="5" data-href="http://www.stonybrook.edu/commcms/community_relations">Neighbors</option>
				<option value="6" data-href="http://www.stonybrook.edu/economic-development">Economic Development</option>
			</select>
		</div>
    </nav>
<?php } ?>