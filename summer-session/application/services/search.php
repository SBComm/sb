<?php namespace Services;

class Search{

	private $xmlObject;

	function __construct(\SimpleXMLElement $xmlObject){
		$this->xmlObject = $xmlObject;

		$this->accepted_parameters = array(
										"keywords" => "keywords",
									  	"department" => "SUBJECT",
									  	"course_level" => "CRSE_CAREER",
									  	"location" => "LOCATION",
									 	"SBC" => "SU_SBC",
									  	"DEC" => "RQMNT_DESIGNTN",
									  	"catalog_number" => "CATALOG_NBR",
									  	"session_code" => "SESSION_CODE"
								  	);
	}


	/**
	 * Search course by keywords
	 * @param  \SimpleXMLElement $class_detail
	 * @param  string $keywords The keywords to search for
	 * @return integer $match_strength A numerical indicator of the match strength
	 */
	private function searchCourseByKeywords(\SimpleXMLElement $class_detail, $keywords){

		$valid_keywords = true;
		$match_strength = 0;

		if(ctype_space($keywords)){
			$valid_keywords = false;
		}

		if($valid_keywords){

			// Remove excess white space
			$keywords = preg_replace("/\s{2,}/i", " ", $keywords);
			if($keywords === NULL)
				throw new \Exception("Failed to remove excess white space");

			// Trim off leading and trailing whitespace
			$keywords = trim($keywords);

			// Split keywords into an array
			// (Group words of three or less characters with words of 4 or more characters)
			$regex_result = preg_match_all("/(?(?=[a-z]+\s[a-z]{1,3}\s\d{1,3}\b)[a-z]+|\b[a-z]{1,3}\s\d{1,3}\b)|(\b\w{1,3}\s)+\w{4,}\b|\b\w{4,}(\s\w{1,3}\b)+|(\b\w+\s*)+/i", $keywords, $matches);

			if($regex_result === false){
				throw new \Exception("An error has occurred while splitting keywords");
			}

			$keywords_array = $matches[0];

			// Get class info for search
			$subject = (string) $class_detail->SUBJECT;
			$catalog_number = (string) $class_detail->CATALOG_NBR;
			$sc = $subject . " " . $catalog_number;
			$class_number = (string) $class_detail->CLASS_NBR;
			$instructor = (string) $class_detail->INSTRUCTOR;
			$title = (string) $class_detail->DESCR;
			$description = (string) $class_detail->DESCRLONG;

			// Loop through keywords
			foreach ($keywords_array as $keyword) {

				// Search class number
				$class_number_matches = preg_match_all("/\b$keyword\b/i", $class_number);
				if($class_number_matches > 0){
					$match_strength += $class_number_matches * 16;
				}
				
				// Search subject and catalog number group
				$sc_matches = preg_match_all("/\b$keyword\b/i", $sc);
				if($sc_matches > 0){
					$match_strength += $sc_matches * 12;
				}

				// Search instructor
				$instructor_matches = preg_match_all("/\b$keyword\b/i", $instructor);
				if($instructor_matches > 0){
					$match_strength += $instructor_matches * 8;
				}
				
				// Search title
				$title_matches = preg_match_all("/\b$keyword\b/i", $title);
				if($title_matches > 0){
					$match_strength += $title_matches * 6;
				}

				// Search description
				$description_matches = preg_match_all("/\b$keyword\b/i", $description);
				if($description_matches > 0){
					$match_strength += $description_matches;
				}

			}

		}

		return $match_strength;

	}


	/**
	 * Search by location value since location can be derived
	 * from multiple sources in the XML
	 * @param  \SimpleXMLElement $class_detail The class to search
	 * @param  string $location_value The location value to search for
	 * @return boolean $match Whether or not the class_detail matches the location_value
	 */
	private function searchByLocation(\SimpleXMLElement $class_detail, $location_value){

		$match = false;

		switch($location_value){
			case "HSC":
				$descr_bldg = (string) $class_detail->DESCR_BLDG;
				if($descr_bldg == $location_value){
					$match = true;
				}
				break;
			case "Study Abroad":
				$course_category = (string) $class_detail->COURSE_CATEGORY;
				if(strpos($course_category, $location_value) !== false){
					$match = true;
				}
				break;
			default:
				$location = (string) $class_detail->LOCATION;
				if($location == $location_value){
					$match = true;
				}
		}

		return $match;

	}


	/**
	 * Check if the query parameter is accepted
	 * @param  string $parameter The parameter to check
	 * @return boolean $accepted Whether or not it is accepted
	 */
	private function checkIfQueryParameterIsAccepted($parameter){

		$accepted = false;

		foreach ($this->accepted_parameters as $key => $value) {
			if($parameter === $key){
				$accepted = true;
			}
		}

		return $accepted;

	}


	/**
	 * Format and validate query string
	 * This will filter out any search options that were left blank
	 * @param array $raw_query The GET query
	 * @return array $query The valid query parameters and values
	 */
	private function formatQueryString(array $raw_query){

		/**
		 * Loop through the query string and create
		 * a valid query array based on accepted parameters
		 */
		$query = array();
		foreach ($raw_query as $parameter => $value) {

			if($this->checkIfQueryParameterIsAccepted($parameter) && $value != ""){
				$query[$parameter] = $value;
			}

		}

		return $query;

	}


	/**
	 * Search course data by multiple parameters
	 * @param array $raw_query The GET query
	 * @return array The query the search was done with, the number of results, and the search results
	 */
	function run(array $raw_query){

		try{

			$query = $this->formatQueryString($raw_query);

			if(count($query) == 0){
				//echo "Showing all courses";	
			}

			$search_results = array();

			// Loop through all classes
			foreach ($this->xmlObject as $class_detail) {
				$match_strength = 0;
				$search_complexity = count($query);

				// Loop through each of the search query parameters and test for matches 
				foreach ($query as $query_parameter => $query_value) {

					switch ($query_parameter){

						case "keywords":
							$keyword_match_strength = $this->searchCourseByKeywords($class_detail, $query_value);

							// Add keyword match strength to class detail for sorting later
							$class_detail->keyword_match_strength = $keyword_match_strength;

							if($keyword_match_strength > 0){
								$match_strength++;
							}
							break;
						case "location":
							$match = $this->searchByLocation($class_detail, $query_value);
							if($match){
								$match_strength++;
							}
							break;
						case "SBC":
							// Get the XML node name for the search query parameter
							$xml_node_name = $this->accepted_parameters[$query_parameter];

							$xml_node_value = (string) $class_detail->$xml_node_name;

							// Remove "SBC:" prefix and spaces and create an array out of the codes
							$xml_node_value = str_replace(array("SBC:", " "), "", $xml_node_value);
							$sbc_codes = explode(";", $xml_node_value);

							// Loop through codes and look for a match
							foreach ($sbc_codes as $code) {
								if($code == $query_value){
									$match_strength++;
									break;
								}
							}

							break;
						case "catalog_number":
						case "department":
						case "course_level":
						case "session_code":
						case "DEC":
							// Get the XML node name for the search query parameter
							$xml_node_name = $this->accepted_parameters[$query_parameter];

							$xml_node_value = (string) $class_detail->$xml_node_name;

							if($xml_node_value == $query_value){
								$match_strength++;
							}
							break;

					}

				}

				// Add this class to the search results if all search query parameters match it
				if($match_strength === $search_complexity){
					$search_results[] = $class_detail;
				}

			}

			/*
			if(count($query) > 0){
				
				// Sort search results by keyword match strength (strongest matches first)
				$sort_status = usort($search_results, function ($a, $b){
					$akms = (int) $a->keyword_match_strength;
					$bkms = (int) $b->keyword_match_strength;
					if($akms == $bkms){
						$comparison = 0;
					}

					if($akms > $bkms){
						$comparison = -1;
					}else{
						$comparison = 1;
					}

					return $comparison;
				});

				if(!$sort_status){
					throw new \Exception("Failed to sort search results by keyword match strength");
				}

			}
			*/

			return array(
						"query" => $query,
						"number_of_results" => count($search_results),
						"search_results" => $search_results
						);


		}catch(\Exception $e){
			ErrorHandling::logException($e);
		}

	}


}