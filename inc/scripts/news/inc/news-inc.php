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
		if($_SERVER['SERVER_NAME'] == 'localhost') {
	    	$api_url = "http://localhost/news/wp-json/wp/v2/categories?slug=magazine";
	    } else {
	    	$api_url = "https://www.stonybrook.edu/happenings/wp-json/wp/v2/categories?slug=magazine";
	    }

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

	function jp_get_news_story_data() {
		/*
		 * GET MAGAZINE CATEGORY ID
		 */
		if($_SERVER['SERVER_NAME'] == 'localhost') {
	    	$api_query_slug = "slug=".$story_slug."&status=publish,private";
		    $api_url 		= "http://localhost/news/wp-json/wp/v2/posts?".$api_query_slug;

		    $api_access_token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL25ld3MiLCJpYXQiOjE1Mjk0MTgxOTgsIm5iZiI6MTUyOTQxODE5OCwiZXhwIjoxNTMwMDIyOTk4LCJkYXRhIjp7InVzZXIiOnsiaWQiOiIxIn19fQ.m8dm1vr_Xh1bOM37vVZhd6aul80R_3wMEo_DpPJ5uDg";
		} else {
			$api_query_slug = "slug=".$story_slug."&status=publish,private";
		    $api_url 		= "https://www.stonybrook.edu/happenings/wp-json/wp/v2/posts?".$api_query_slug;

		    $api_access_token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvd3d3LnN0b255YnJvb2suZWR1XC9oYXBwZW5pbmdzIiwiaWF0IjoxNTI5NDMyODk2LCJuYmYiOjE1Mjk0MzI4OTYsImV4cCI6MTUzMDAzNzY5NiwiZGF0YSI6eyJ1c2VyIjp7ImlkIjoiMSJ9fX0.C6K8dVqxhmqh4anJvRMVUnyEL0HYeML3kEPmoUqBZsY";
		}

	    $api_headers = array(
	    	'Content-length: 0',
			'Content-Type: application/json',
			sprintf('Authorization: Bearer %s', $api_access_token)
		);

		// Get stories
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL,$api_url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $api_headers);
		$result = curl_exec($ch);
		curl_close($ch);

		$stories = json_decode($result, false);

	    $slug_exists = sizeof($stories)>0 ? true : false;

	    $news_story_data = array();

	    if($slug_exists) {
	    	$story = $stories[0];

	    	$news_story_data['id']		= $story->{'id'};

			$news_story_data['status']	= $story->{'status'};

		    $news_story_data['date']	= strtotime($story->{'date'});
			$news_story_data['day']    	= date('j',$story_date);
			$news_story_data['month']  	= date('F',$story_date);
			$news_story_data['year']   	= date('Y',$story_date);
			$news_story_data['date']  	= date('F j, Y',$story_date);

			$news_story_data['link']	= $story->{'link'};
			$news_story_data['slug']	= $story->{'slug'};
			$news_story_data['title']	= $story->{'title'}->{'rendered'};
			$news_story_data['content']	= $story->{'content'}->{'rendered'};
		}

		return $news_story_data;
	}

?>