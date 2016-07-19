<?php if($second_level=='undergrad-admissions') { ?>
    <nav class="audience-nav clearfix">
		<div class="dropdown-nav clearfix"<?php if($audience_nav_selected_tab>0) echo(' data-selected-tab="' . $audience_nav_selected_tab . '"') ?>>
			<select id="cd-dropdown" name="cd-dropdown" class="cd-select">
				<option value="-1" selected>View information for...</option>
				<option value="1" data-href="http://www.stonybrook.edu/commcms/admitted/">Admitted Students</option>
				<option value="2" data-href="undergraduate-admissions/application-status">Applicants</option>
				<option value="3" data-href="undergraduate-admissions/college-counselors">College Counselors</option>
				<option value="4" data-href="undergraduate-admissions/parents">Parents</option>
				<option value="5" data-href="undergraduate-admissions/veterans">Veterans</option>
				<option value="6" data-href="undergraduate-admissions/future-students">High School Students</option>
			</select>
		</div>
    </nav>
<?php } else { ?>
<?php /*
    <nav class="audience-nav clearfix">
		<div class="dropdown-nav clearfix"<?php if($audience_nav_selected_tab>0) echo(' data-selected-tab="' . $audience_nav_selected_tab . '"') ?>>
			<select id="cd-dropdown" name="cd-dropdown" class="cd-select">
				<option value="-1" selected>View information for...</option>
				<option value="1" data-href="http://www.stonybrook.edu/for-students/">For Students</option>
				<option value="2" data-href="http://www.stonybrook.edu/faculty-staff/">Faculty &amp; Staff</option>
				<option value="3" data-href="http://www.stonybrook.edu/alumni-and-friends/">Alumni &amp; Friends</option>
				<option value="4" data-href="http://www.stonybrook.edu/parents/">Parents</option>
				<option value="5" data-href="http://www.stonybrook.edu/community-relations/">Neighbors</option>
				<option value="6" data-href="http://www.stonybrook.edu/economic-development/">Economic Development</option>
			</select>
		</div>
    </nav>
*/ ?>
<?php } ?>