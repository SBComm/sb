<?php
/*
	$root          = '/user/far-beyond/www';
    $inc_loc       = 'inc';   //include folder
    $dir           = dirname(__FILE__);
    $http_protocol = !empty($_SERVER['HTTP_X_FORWARDED_PROTO']) ? $_SERVER['HTTP_X_FORWARDED_PROTO'] : 'http';

    if($_SERVER['SERVER_NAME'] == 'localhost') {
        $root          = $_SERVER['DOCUMENT_ROOT'];
        $site          = 'sb'; //site folder inside the root dir
        $http_root     = 'http://localhost:8888';
        $path  = $root . '/' . $site . '/' . $inc_loc . '/';
        $css_base_url  = $http_root . '/' . $site . '/';

        $is_local_environment = true;
        $is_proofing_environment = false;
        $is_production_environment = false;

        $working_path_relative_start_location = "localhost/";
        $working_path_asset_dir = substr_replace($dir, $working_path_relative_start_location.$site, strpos($dir,$working_path_relative_start_location));

    }

	include($path . 'debug/kint-master/Kint.class.php');
*/
	$academics_url = 'https://www.stonybrook.edu/far-beyond/_data/academics/grad-programs.xml';

	$programs = simplexml_load_file($academics_url);

	$program_items = array();
	$program_titles  = array();

	echo('<ul class="flex-list-2 course-program-list" data-search-id="course-list">');

	foreach ($programs as $program) {

		if(!empty($program['abbreviation'])) {

			$program_output = '';

			$program_title = '';

			foreach ($program->titles->title as $title) {
			    switch((string) $title['type']) {
				    case 'grad':
				        $program_title = $title;
				        break;
			    }
			}

			foreach ($program->urls->url as $url) {
			    switch((string) $url['type']) {
				    case 'relative':
				        $program_url_relative = $url;
				        break;
				    case 'absolute':
				        $program_url_absolute = $url;
				        break;
				    case 'details':
				        $program_url_details = $url;
				        break;
				    case 'undergrad_website':
				        $program_url_undergrad_website = $url;
				        break;
				    case 'undergrad_bulletin':
				        $program_url_undergrad_bulletin = $url;
				        break;
				    case 'grad_website':
				        $program_url_grad_website = $url;
				        break;
				    case 'grad_bulletin':
				        $program_url_grad_bulletin = $url;
				        break;
			    }
			}

			$program_output .= "
				<li>
	                <a href=\"$program_url_grad_bulletin\">$program_title</a>
	                <div class=\"wider-badges-wrapper\">";

	                foreach ($program->degrees->degree as $degree) {
	                	//d($degree);
	                	$degree_label = $degree;
	                	$degree_type = $degree['type'];
	                	$degree_code = $degree['code'];
	                	$degree_abbr = $degree['abbr'];
	                	$degree_level = '';

	                	switch($degree_type) {
	                		case 'bachelor':
	                			$degree_color = 'blue';
	                			$degree_level = 'undergrad';
	                			break;
	                		case 'master':
	                			$degree_color = 'red';
	                			$degree_level = 'grad';
	                			break;
	                		case 'doctorate':
	                			$degree_color = 'green';
	                			$degree_level = 'grad';
	                			break;
	                		case 'certificate':
	                			$degree_color = 'yellow';
	                			$degree_level = 'grad';
	                			break;
	                		case 'special':
	                			$degree_color = 'purple';
	                			$degree_level = 'undergrad';
	                			break;
	                		default:
	                			$degree_color = 'black';
	                			$degree_level = 'undergrad';
	                			break;
	                	}

	                	if($degree_level == 'grad') {
		                	$program_output .= "
		                		<span class=\"key-icons--icon key-icons--icon_$degree_color tooltip tooltip--no-icon-after\" title=\"$degree_label\"><span aria-hidden=\"true\">$degree_abbr</span><span class=\"hide-accessible\">$degree_type: $degree_label</span></span>
		                	";
	                	}
					}

					foreach ($program->non_degrees->non_degree as $non_degree) {
	                	//d($non_degree);
	                	$non_degrees_type = $non_degree['type'];
	                	$non_degrees_value = $non_degree['value'];

	                	switch($non_degrees_type) {
	                		case 'grad':
	                			if($non_degrees_value=='true') {
				                	$program_output .= "
				                		<span class=\"key-icons--icon key-icons--icon_black tooltip tooltip--no-icon-after\" title=\"Non-degree: Graduate\"><span aria-hidden=\"true\">ND</span><span class=\"hide-accessible\">Non-Degree: Graduate</span></span>
				                	";
	                			}
	                			break;
	                		/* case 'undergrad':
	                			if($non_degrees_value=='true') {
				                	$program_output .= "
				                		<span class=\"key-icons--icon key-icons--icon_black tooltip tooltip--no-icon-after\" title=\"Non-degree: Undergraduate\"><span aria-hidden=\"true\">ND</span><span class=\"hide-accessible\">Non-Degree: Undergraduate</span></span>
				                	";
	                			}
	                			break; */
	                		default:
	                			break;
	                	}
					}

	        $program_output .= "
	                </div>
	            </li>
			";

		$program_items[] = array('title' => (string)$program_title, 'html' => $program_output);
			
		}

	}

	// Obtain a list of columns
	foreach ($program_items as $key => $row) {
	    $program_titles[$key]  = $row['title'];
	}

	// Sort the data with program_titles ascending
	array_multisort($program_titles, $program_items);

	//d($program_items);

	foreach ($program_items as $key => $row) {
	    echo($row['html']);
	}


	echo('</ul>');

?>