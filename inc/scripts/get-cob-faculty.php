<?php

	$api_user = 'stonybrook/web_service';
	$api_pass = 'dpfs7a2K3cz';

	$api_base_url   = 'https://beta.digitalmeasures.com/login/service/v4';

	$api__schema    = $api_base_url . '/SchemaIndex/INDIVIDUAL-ACTIVITIES-Business';
	$api__all_users = $api_base_url . '/User/INDIVIDUAL-ACTIVITIES-Business';
	$api__sections  = $api_base_url . '/SchemaEntity/INDIVIDUAL-ACTIVITIES-Business';

	if(isset($_GET["department"])) {
		$dept = $_GET["department"];
		if($dept!='' && $dept!=null ) {
			$depts = explode(",",$dept);
			$dept_q = '';
			foreach($depts as $key => $value) {
				if($key > 0) {
					$dept_q .= ',';
				}
				$dept_q .= 'DEPARTMENT:' . $value;
			}
			$api__users_info = $api_base_url . '/SchemaData/INDIVIDUAL-ACTIVITIES-Business/'.$dept_q.',USER_ENABLED:ENABLED/PCI,ADMIN';
		}
	}

	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => $api__users_info,
		CURLOPT_USERPWD => $api_user . ':' . $api_pass,
		CURLOPT_ENCODING => 'gzip',
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_RETURNTRANSFER => true
		)
	);

	$responseData = curl_exec($curl);
	if(curl_errno($curl)) {
		$errorMessage = curl_error($curl);
		//Handle cURL error
	} else {
		$statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		//Handle HTTP status code and response data

		$ch = curl_exec($curl);
		//$all_users = new SimpleXMLElement($ch);

		// Output the XML
		echo($ch);
	}

	curl_close($curl);

?>