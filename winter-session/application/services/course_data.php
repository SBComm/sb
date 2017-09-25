<?php namespace Services;

class CourseData{

	public $xmlObject;

	/**
	 * Load the course data and remove non-summer session courses
	 * @param string $url The URL to the XML course data
	 */
	function  __construct($url){
		$xmlObject = $this->loadCourseDataByUrl($url);
		$this->xmlObject = $this->removeNonSummerSessionCourseData($xmlObject);
	}


	/**
	 * Load course data by URL
	 * @param  string $url The URL to the XML course data
	 * @return \SimpleXMLElement $xmlObject The course data XML object
	 */
	function loadCourseDataByUrl($url){

		$xmlObject = false;

		try{

			if(gettype($url) != "string"){
				throw new \Exception("URL must be a string");
			}

			$xmlObject = simplexml_load_file($url);

			if($xmlObject === false){
				throw new \Exception("Unable to get XML from provided URL: " . $url);
			}

		}catch(\Exception $e){
			ErrorHandling::logException($e);
		}

		return $xmlObject;

	}


	/**
	 * Remove the non-summer session course data from the XML
	 * @param \SimpleXMLElement $xmlObject The course data XML object
	 * @return \SimpleXMLElement $xmlObject The new course data XML object 
	 */
	function removeNonSummerSessionCourseData(\SimpleXMLElement $xmlObject){

		$elements_to_remove = array();

		// Loop through classes and if a class does not have 
		// the correct session code then remove it
		foreach ($xmlObject->CLASS_DETAIL as $class_detail) {
			
			if(!in_array((string) $class_detail->SESSION_CODE, array("WTR"))){
				$elements_to_remove[] = $class_detail;
			}

		}

		foreach ($elements_to_remove as $element) {
			unset($element[0]);
		}

		return $xmlObject;

	}


	/**
	 * Get all departments in the course data
	 * @return array $departments The departments
	 */
	function getDepartmentsAndCourseCounts(){
		
		try{

			$departments = array();

			foreach($this->xmlObject->CLASS_DETAIL as $class_detail){
				
				$department_name = (string) $class_detail->COURSE_CATEGORY;
				$department_code = (string) $class_detail->SUBJECT;

				//workaround for anthropology names
				if($department_code=='ANP') {
					$department_name = 'Anthropology (Biological)';
				} elseif($department_code=='ANT') {
					$department_name = 'Anthropology (Cultural & Archaeological)';
				}
				
				if(!isset($departments[$department_code])){

					$departments[$department_code] = array(
						'department_name' => $department_name,
						'department_code' => $department_code,
						'course_count' => 1,
						);

				}else{
					$departments[$department_code]['course_count'] += 1;
				}

			}

			// Arrange in alphabetical order
			$sort_status = sort($departments);

			if(!$sort_status){
				throw new \Exception("Failed to sort departments");
			}

		}catch(\Exception $e){
			ErrorHandling::logException($e);
		}

		return $departments;

	}


	/**
	 * Get all course levels
	 * @return array $course_levels The course levels
	 */
	function getCourseLevels(){

		$course_levels = array(
							"UGRD" => "Undergraduate",
							"GRAD" => "Graduate"
							);

		return $course_levels;

	}


	/**
	 * Get all locations
	 * @return array $locations The locations
	 */
	function getLocations(){

		$locations = array(
					"WESTCAMPUS" => "Main Campus",
					"MANHATTAN" => "Manhattan",
					"SOUTHAMPTN" => "Southampton Campus",
					"ONLINE" => "Online Courses"
					);

		return $locations;

	}


	/**
	 * Get SBC Codes by loading XML
	 * @return array $sbc_codes The SBC Codes
	 */
	function getSBCCodes(){

		$xmlObject = false;
		$url = 'http://sb.cc.stonybrook.edu/bulletin/current/_data/LongNames.xml';

		try{

			$xmlObject = simplexml_load_file($url);

			if($xmlObject === false){
				throw new \Exception("Unable to get XML from provided URL: " . $url);
			}

			// Create the SBC Codes array
			$sbc_codes = array();

			foreach ($xmlObject->code as $code) {

				$sbc_designator = (string) $code->designator;
				$sbc_title = (string) $code->title;

				$sbc_codes[] = array(
					'designator' => $sbc_designator,
					'title' => $sbc_title
					);

			}

			// Arrange in alphabetical order
			$sort_status = sort($sbc_codes);

			if(!$sort_status){
				throw new \Exception("Failed to sort SBC Codes");
			}

		}catch(\Exception $e){
			ErrorHandling::logException($e);
		}

		return $sbc_codes;

	}

	/**
	 * Get all DECCodes in the course data
	 * @return array $dec_codes The DEC Codes
	 */
	function getDECCodes(){

		try{

			$dec_codes = array();

			foreach($this->xmlObject->CLASS_DETAIL as $class_detail){
				
				$dec_code = (string) $class_detail->RQMNT_DESIGNTN;
				$dec_description = (string) $class_detail->RQ_DESIG_DESCR;
				
				if(!isset($dec_codes[$dec_code]) && !ctype_space($dec_code)){
					$dec_codes[$dec_code] = array(
						'dec_code' => $dec_code,
						'dec_description' => $dec_description
						);
				}

			}

			// Arrange in alphabetical order
			$sort_status = sort($dec_codes);

			if(!$sort_status){
				throw new \Exception("Failed to sort DEC Codes");
			}

		}catch(\Exception $e){
			ErrorHandling::logException($e);
		}

		return $dec_codes;

	}


	/**
	 * Get all session information
	 * @return array The session information
	 */
	function getSessionInformation(){

		$session_information = array(
								"WTR" => "Winter"
								);

		return $session_information;

	}

}

?>