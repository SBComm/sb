<?php

	//$api_url = "http://localhost/news/wp-json/wp/v2/categories?per_page=100";
	$api_url = "https://www.stonybrook.edu/happenings/wp-json/wp/v2/categories?per_page=100&parent=197";

	//  Initiate curl
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,$api_url);
	$result = curl_exec($ch);
	curl_close($ch);

	$cats = json_decode($result);

	//var_dump($cats); //this is for testing now

	$cats_html = '';

	foreach ($cats as $cat) {
		//$cat_name = str_replace('Magazine ','',$cat->name);

		$cats_html .= '
			<option value="'.$cat->slug.'">'.$cat->name.'</option>
		';
	}

	echo $cats_html;

?>