<?php

	/**
	* Estimate time required to read the article
	*
	* @return string
	*/
	function jp_estimated_reading_time($words, $minutes, $seconds) {

		if ( 1 <= $minutes ) {
		    $estimated_time = $minutes . ' minute' . ($minutes == 1 ? '' : 's');
		} else if ( $seconds > 0 ) {
		    $estimated_time = '1 minute';
		} else {
			$estimated_time = '';
		}

		return $estimated_time;

	}


	function jp_get_magazine_category_id() {
		/*
		 * GET MAGAZINE CATEGORY ID
		 */
	    $api_url = "http://localhost/news/wp-json/wp/v2/categories?slug=magazine";

		//  Initiate curl
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL,$api_url);
		$result = curl_exec($ch);
		curl_close($ch);

		$cats_arr = json_decode($result, false);

		$magazine_cat_id = $cats_arr[0]->{'id'};

		return $magazine_cat_id;
	}

?>