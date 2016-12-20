<?php namespace Controllers;

class Render{


	function __construct(\Services\CourseData $courseData){
		$this->courseData = $courseData;
	}


	/**
	 * List all departments found in the course data along with
	 * their course count and link to see all courses in that department
	 * @return string $list_items HTML <li> elements
	 */
	function listAllDepartments(){

		$list_items = "";

		try{

			$departments = $this->courseData->getDepartmentsAndCourseCounts();

			if(count($departments) == 0){
				throw new \Exception("Could not get departments");
			}

			foreach ($departments as $key => $value) {
				$list_items .= "<li>
									<a href='summer-session/courses/results/?department={$value['department_code']}'>{$value['department_name']}</a>
									<span>({$value['course_count']})</span>
								</li>";
			}

		}catch(\Exception $e){
			ErrorHandling::logException($e);
		}

		return $list_items;

	}


	/**
	 * Get department select options
	 * @return string $option_items HTML <option> elements
	 */
	function getDepartmentSelectOptions(){

		$option_items = "";
		
		try{

			$departments = $this->courseData->getDepartmentsAndCourseCounts();

			if(count($departments) == 0){
				throw new \Exception("Could not get departments");
			}

			foreach ($departments as $key => $value) {
				$option_items .= "<option value='{$value['department_code']}'>{$value['department_name']}</option>";
			}

		}catch(\Exception $e){
			ErrorHandling::logException($e);
		}

		return $option_items;

	}


	/**
	 * Get course level select options
	 * @return string $option_items HTML <option> elements
	 */
	function getCourseLevelOptions(){

		$option_items = "";

		try{

			$course_levels = $this->courseData->getCourseLevels();

			if(count($course_levels) == 0){
				throw new \Exception("Could not get Course Levels");
			}

			foreach ($course_levels as $key => $value) {
				$option_items .= "<option value='{$key}'>{$value}</option>";
			}
		
		}catch(\Exception $e){
			ErrorHandling::logException($e);
		}

		return $option_items;

	}


	/**
	 * Get location select options
	 * @return string $option_items HTML <option> elements
	 */
	function getLocationSelectOptions(){

		$option_items = "";

		try{

			$locations = $this->courseData->getLocations();

			if(count($locations) == 0){
				throw new \Exception("Could not get locations");
			}

			foreach ($locations as $key => $value) {
				$option_items .= "<option value='{$key}'>{$value}</option>";
			}
		
		}catch(\Exception $e){
			ErrorHandling::logException($e);
		}

		return $option_items;

	}


	/**
	 * Get location select options
	 * @return string $option_items HTML <option> elements
	 */
	function getSessionCodeSelectOptions(){

		$option_items = "";

		try{

			$session_codes = $this->courseData->getSessionInformation();

			if(count($session_codes) == 0){
				throw new \Exception("Could not get session information");
			}

			foreach ($session_codes as $key => $value) {
				$option_items .= "<option value='{$key}'>{$value}</option>";
			}
		
		}catch(\Exception $e){
			ErrorHandling::logException($e);
		}

		return $option_items;

	}

	/**
	 * Get SBC select options
	 * @return string $option_items HTML <option> elements
	 */
	function getSBCSelectOptions(){

		$option_items = "";

		try{

			$sbc_codes = $this->courseData->getSBCCodes();

			if(count($sbc_codes) == 0){
				throw new \Exception("Could not get SBC Codes");
			}

			foreach ($sbc_codes as $key => $value) {
				$option_items .= "<option value='{$value['designator']}'>({$value['designator']}) {$value['title']}</option>";
			}
		
		}catch(\Exception $e){
			ErrorHandling::logException($e);
		}

		return $option_items;

	}


	/**
	 * Get DEC select options
	 * @return string $option_items HTML <option> elements
	 */
	function getDECSelectOptions(){

		$option_items = "";

		try{

			$dec_codes = $this->courseData->getDECCodes();

			if(count($dec_codes) == 0){
				throw new \Exception("Could not get DEC Codes");
			}

			foreach ($dec_codes as $value) {
				$option_items .= "<option value='{$value['dec_code']}'>({$value['dec_code']}) {$value['dec_description']}</option>";
			}
		
		}catch(\Exception $e){
			ErrorHandling::logException($e);
		}

		return $option_items;

	}


	/**
	 * Get the session information for a given session code
	 * @param  string $session_code The session code
	 * @return string               The session information
	 */
	function getSessionInformationForSessionCode($session_code){

		$information = "";

		try{

			$session_information = $this->courseData->getSessionInformation();
			
			if(count($session_information) == 0){
				throw new \Exception("Could not get session information");
			}

			foreach ($session_information as $key => $value) {
				if($session_code == $key){
					$information = $value;
				}
			}


		}catch(\Exception $e){
			ErrorHandling::logException($e);
		}

		return $information;

	}


	/**
	 * Expand the search query abbreviations for a more user-friendly formatting
	 * @param  array $query The user-entered search query
	 * @return array The search query with expanded values
	 */
	function expandSearchQueryValueAbbreviations(array $query){

		// Loop through the query
		foreach ($query as $query_parameter => $query_value) {
			
			// Format each value based on the parameter
			switch($query_parameter){

				case "department":
						$departments = $this->courseData->getDepartmentsAndCourseCounts();

						if(count($departments) == 0){
							throw new \Exception("Could not get departments");
						}

						foreach ($departments as $key => $value) {
							if($query_value == $value['department_code']){
								$query[$query_parameter] = $value['department_name'];
							}
						}
					break;
				case "course_level":
						$course_levels = $this->courseData->getCourseLevels();

						if(count($course_levels) == 0){
							throw new \Exception("Could not get course levels");
						}

						foreach ($course_levels as $key => $value) {
							if($query_value == $key){
								$query[$query_parameter] = $value;
							}
						}
					break;
				case "location":
						$locations = $this->courseData->getLocations();

						if(count($locations) == 0){
							throw new \Exception("Could not get locations");
						}

						foreach ($locations as $key => $value) {
							if($query_value == $key){
								$query[$query_parameter] = $value;
							}
						}
					break;

			}

		}

		return $query;

	}


	/**
	 * Display the query that the user searched with
	 * @param  array $query The user-entered search query
	 * @return string $html The query
	 */
	function displaySearchQuery(array $query){


		if(count($query) > 0){

			// Convert query values into a user-friendly format
			$query = $this->expandSearchQueryValueAbbreviations($query);

			$html = "Results for: ";

			$index = 1;
			$number_of_parameters = count($query);
			foreach ($query as $query_parameter => $query_value) {

				//Clean up display of Session Code
				//C -> Session 1
				//D -> Session 2
				if($query_parameter=='session_code') {
					$query_parameter = 'session';
					switch($query_value) {
						case "C":
							$query_value = "1";
							break;
						case "D":
							$query_value = "2";
							break;
						case "EEP":
							$query_value = "SPD Online";
							break;
						case "Z":
							$query_value = "1 Extended";
							break;
						case "Z2":
							$query_value = "2 Extended";
							break;
						case "M":
							$query_value = "2 (HSC)";
							break;
						default:
							break;
					}
				}

				// Format query parameters
				$query_parameter = str_replace("_", " ", $query_parameter);
				$query_parameter = ucwords($query_parameter);

				$html .=  '<span class="filter-item">';
				$html .=  $query_parameter . ": <em>" . $query_value . "</em>";
				$html .= '</span>';

				if($index != $number_of_parameters){
					$html .= " and ";
				}

				$index++;
			}
		}else{
			$html = "";
		}

		return $html;

	}


	/**
	 * Expand abbreviated node values to their full length
	 * @return array $course_data Course Data
	 */
	function expandCourseDataAbbreviations($class_detail){

		$expansions = array(
				"CRSE_CAREER" => array("UGRD" => "Undergraduate",
									   "GRAD" => "Graduate",
									   ),
				"STND_MTG_PAT" => array("FLEX" => "Flexible (Online)",
										"APPT" => "Appointment",
										"HTBA" => "Hours to be arranged",
										"M" => "Monday",
										"TU" => "Tuesday",
										"W" => "Wednesday",
										"TH" => "Thursday",
										"F" => "Friday",
										"MT" => "Mon. & Tues.",
										"MW" => "Mon. & Weds.",
										"MTH" => "Mon. & Thurs.",
										"MF" => "Mon. & Fri.",
										"MTUTH" => "Mon., Tues., Thurs.",
										"MTF" => "Mon., Tues., Fri.",
										"MWTH" => "Mon., Weds., Thurs.",
										"MWF" => "Mon., Weds., Fri.",
										"MTHF" => "Mon., Thurs., Fri.",
										"MTWT" => "Mon., Tues., Weds., Thurs.",
										"TUTH" => "Tues. & Thurs.",
										"TWTF" => "Tues., Weds., Thurs., Fri.",
										"M-F" => "Mon., Tues., Weds., Thurs., Fri."
										),
				"ENRL_STAT" => array("O" => "Open",
									 "C" => "Closed",
									 "W" => "Waiting List"
									 )
				);

		// For each node in the class detail
		foreach ($class_detail as $key => $value) {

			// If the current node has a group of expansions for it in the expansions array
			if(array_key_exists($key, $expansions)){

				// Loop through each of the expansions for that node
				foreach ($expansions[$key] as $abbreviation => $expansion) {

					// If the abbreviation matches the node's current value then
					// replace the value of the node with the expansion
					if((string) $class_detail->$key == $abbreviation){
						$class_detail->$key = $expansion;
					}
				}
			}	

		}

		return $class_detail;

	}


	/**
	 * Get all section offerings for a particular course
	 * @return array The course sections and associated information, e.g. class number, days, times, instructior
	 */
	function getCourseOfferingsByClassNumber($search_results){

		$course_offerings = array();

		$count = 0;

		foreach($search_results as $class_detail){

			$class_detail = $this->expandCourseDataAbbreviations($class_detail);
			
			$subject = (string) $class_detail->SUBJECT;
			$catalog_number = (string) $class_detail->CATALOG_NBR;
			$session_code = (string) $class_detail->SESSION_CODE;

			$location = (string) $class_detail->LOCATION_DESCR;
			$campus_description = (string) $class_detail->CAMPUS_DESCR;

			if($campus_description=="Manhattan Campus" || $campus_description=="Manhattan") {
				$location = "NYC";
			}

			$course_offerings[$count] = array(
				'subject' => (string) $class_detail->SUBJECT,
				'catalog_number' => (string) $class_detail->CATALOG_NBR,
				'class_number' => (string) $class_detail->CLASS_NBR,
				'session_information' => $this->getSessionInformationForSessionCode($session_code),
				'class_section' => (string) $class_detail->CLASS_SECTION,
				'class_instructor' => (string) $class_detail->INSTRUCTOR,
				'class_meeting_days' => (string) $class_detail->STND_MTG_PAT,
				'class_meeting_times' => (string) $class_detail->SU_MEETING_TIME,
				'location' => $location,
				'campus_description' => $campus_description,
				'enrollment_status' => (string) $class_detail->ENRL_STAT,
				'topic' => (string) $class_detail->COURSE_TOPIC
			);

			$count++;

		}

		return $course_offerings;
		
	}


	/**
	 * Display the search results in a readable format
	 * @param  array $search_results The search results
	 * @return string $html The search results in <li> format
	 */
	function displaySearchResults(array $search_results){

		if(count($search_results) > 0){
			$html = "";

			//get array of separate offerings (days/times) of the same class
			$course_offerings = $this->getCourseOfferingsByClassNumber($search_results);

			//debug
			//d($course_offerings);

			//create array $printed_courses
			$printed_courses = array();
			
			foreach ($search_results as $class_detail) {

				$subject = (string) $class_detail->SUBJECT;
				$catalog_number = (string) $class_detail->CATALOG_NBR;

				//test $printedCourses[$subject][$catalog_number] for $subject + $catalog_number
				//if found, don't print again
				//if not found, print, including all information from $course_offerings array
				//$printed_courses
				if(!isset($printedCourses[$subject][$catalog_number]) && !ctype_space($printedCourses)){

					$printedCourses[$subject][$catalog_number] = array(
						'printed' => true
						);

					$class_detail = $this->expandCourseDataAbbreviations($class_detail);

					$course_name = (string) $class_detail->DESCR;
					$session_code = (string) $class_detail->SESSION_CODE;
					$course_level = (string) $class_detail->CRSE_CAREER;
					$credits = (string) $class_detail->UNITS;

					$hasDec = false;
					$dec = (string) $class_detail->RQMNT_DESIGNTN;
					
					// Add "DEC:" prefix if the value is not empty
					if($dec != " "){
						$hasDec = true;
						$dec = "<span>DEC: " . $dec . "</span>";
					}

					// Note that the "SBC:" prefix comes by default on SU_SBC
					$hasSbc = false;
					$sbc = (string) $class_detail->SU_SBC;

					if($sbc != " "){
						$hasSbc = true;
						$sbc =  "<span>" . $sbc . "</span>";
					}

					$description = (string) $class_detail->DESCRLONG;
					$session_information = $this->getSessionInformationForSessionCode($session_code);

					if($hasDec || $hasSbc) {
						$sbc_dec_html = "<p>$dec $sbc</p>";
					} else {
						$sbc_dec_html = '';
					}

					//Iterate through to determine if one of the course sections has a topic
					$hasTopic = false;
					$topic_header_html = '';
					$topic_data_html = '';
					$replacements = array(
							'Ww ' => 'WW ',
							'Ii' => 'II',
							'Iii' => 'III',
							'Iv' => 'IV',
							'Vi' => 'VI',
							'Vii' => 'VII',
							'Viii' => 'VIII',
							'Ix' => 'IX',
							'La ' => 'LA ',
							'Li ' => 'LI '
						);

					foreach ($course_offerings as $offering_detail) {
						if($subject == $offering_detail['subject'] && $catalog_number == $offering_detail['catalog_number']) {
							$thisTopic = $offering_detail['topic'];
							if($thisTopic!='' && $thisTopic!=' ' && $thisTopic!=null) {
								$hasTopic = true;
								$topic_header_html = '<th data-tablesaw-sortable-col>Topic</th>';
							}
						}
					}

					$html .= "<li>
								 <h5>$subject $catalog_number: $course_name</h5>
								 <p><span>$course_level</span> <span>$credits</span></p>
								 $sbc_dec_html
								 <p class=\"description\">$description</p>
								 <table class=\"tablesaw tablesaw-stack light-grey-table\" data-tablesaw-mode=\"stack\" data-tablesaw-sortable>
								 <thead>
								 <th data-tablesaw-sortable-col>Session</th>
								 <th data-tablesaw-sortable-col data-sortable-numeric data-tablesaw-sortable-default-col>Class #</th>
								 <th data-tablesaw-sortable-col>Section</th>
								 $topic_header_html
								 <th data-tablesaw-sortable-col>Instructor</th>
								 <th data-tablesaw-sortable-col>Days</th>
								 <th data-tablesaw-sortable-col>Time</th>
								 <th data-tablesaw-sortable-col>Campus</th>
								 <th data-tablesaw-sortable-col>Enrollment Status</th>
								 </thead>
								 <tbody>";
					
					foreach ($course_offerings as $offering_detail) {
						
						if($subject == $offering_detail['subject'] && $catalog_number == $offering_detail['catalog_number']) {
								if($hasTopic) {

									$topic_data = ucwords(strtolower(str_replace('#','',$offering_detail['topic']))) . ' ';
									$topic_data = preg_replace_callback('/(?<=( |-|\/|"))./', function ($m) { return strtoupper($m[0]); }, $topic_data);
									foreach ($replacements as $key => $value) {
										$topic_data = str_replace($key,$value,$topic_data);
									}


									if($topic_data=='' || $topic_data==' ' || $topic_data==null) {
										$topic_data = '-';
									}
									$topic_data_html = '<td>'.$topic_data.'</td>';
								}

								$html .= '<tr>';
								$html .= '<td>'.$offering_detail['session_information'].'</td>'.
										'<td>'.$offering_detail['class_number'].'</td>'.
										'<td>'.$offering_detail['class_section'].'</td>'.
										$topic_data_html.
										'<td>'.$offering_detail['class_instructor'].'</td>'.
										'<td>'.$offering_detail['class_meeting_days'].'</td>'.
										'<td>'.$offering_detail['class_meeting_times'].'</td>'.
										'<td>'.$offering_detail['campus_description'].' ('.$offering_detail['location'].')'.'</td>'.
										'<td>'.$offering_detail['enrollment_status'].'</td>';
								$html .= '</tr>';
							;
						}
					}

					$shareTitle = "$subject $catalog_number: $course_name";
					$shareSummary = "";
					$shareTwitterURL = "https://twitter.com/intent/tweet?hashtags=NikonSupport&related=NikonUSA&url=http://support.nikonusa.com/app/answers/detail/a_id/61&text=Current%20versions%20of%20Nikon%20software";
					$shareFacebookURL = "http://www.facebook.com/sharer.php?s=100&p[title]=Current%20versions%20of%20Nikon%20software&p[summary]=Where%20can%20I%20download%20the%20latest%20Nikon%20software%20updates%3F&p[url]=http://support.nikonusa.com/app/answers/detail/a_id/61&p[images][0]=http%3A%2F%2Fsupport.nikonusa.com%2Feuf%2Fassets%2Fimages%2Fnikon%2Fnikon_logo_360.jpg";


					$html .= "</tbody></table>
								<span class=\"partial-print-trigger\" data-partial-print-target=\"li\"><i class=\"fa fa-print\"></i></span>
								</li>";

				}

			}

		}else{
			$html = "<li>No courses found.</li>";
		}

		return $html;
	
	}


}