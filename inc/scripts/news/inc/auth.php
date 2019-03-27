<?php

	/**
	* Get the JWT authentication token
	*
	* @return string
	*/

	function get_jwt_auth_token() {
		/*
		 * GET MAGAZINE CATEGORY ID
		 */
		if($_SERVER['SERVER_NAME'] == 'localhost') {
	    	$api_url = "http://localhost/news/wp-json/jwt-auth/v1/token";
		    $fields = array(
				'username' => 'jgpalmeri',
				'password' => 'H55^HxXZ62EHgDCNWu'
			);
	    } else {
	    	$api_url = "https://news.stonybrook.edu/wp-json/jwt-auth/v1/token";
		    $fields = array(
				'username' => 'jgpalmeri',
				'password' => 'B!MKUHQTBU)wA(31!#Uw^7YC'
			);
	    }

		//url-ify the data for the POST
		foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
		rtrim($fields_string, '&');

		//  Initiate curl
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL,$api_url);
		curl_setopt($ch, CURLOPT_POST, 2);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
		$result = curl_exec($ch);
		curl_close($ch);

		$result = json_decode($result, false);

		return $result;
	}

?>