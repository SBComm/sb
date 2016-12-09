<?php

	$wp_cats_url = "http://www.stonybrook.edu/happenings/wp-json/wp/v2/categories?parent=178&per_page=100";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $wp_cats_url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
	$wp_cat_data = curl_exec($ch);
	curl_close($ch);

	$wp_cat_data = json_decode($wp_cat_data);

	$cats = $wp_cat_data;

	$html = '';

	foreach ($cats as $cat) {
		$cat_name = str_replace('Magazine ','',$cat->name);
		$cat_slug = str_replace('magazine-','',$cat->slug);

		$html .= '
			<span class="magazine-category-nav_link"><a href="magazine/'.$cat_slug.'">'.$cat_name.'</a></span>
		';
	}

	echo $html;

	$html = '';

?>