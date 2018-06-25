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

	function jp_get_news_story_data($story_slug, $slug_exists = false) {
		/*
		 * GET MAGAZINE CATEGORY ID
		 */
		if($_SERVER['SERVER_NAME'] == 'localhost') {
	    	$api_query_slug = "slug=".$story_slug."&status=publish,private,pending";
		    $api_url 		= "http://localhost/news/wp-json/wp/v2/posts?".$api_query_slug;

		    $api_access_token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL25ld3MiLCJpYXQiOjE1Mjk0MTgxOTgsIm5iZiI6MTUyOTQxODE5OCwiZXhwIjoxNTMwMDIyOTk4LCJkYXRhIjp7InVzZXIiOnsiaWQiOiIxIn19fQ.m8dm1vr_Xh1bOM37vVZhd6aul80R_3wMEo_DpPJ5uDg";
		} else {
			$api_query_slug = "slug=".$story_slug."&status=publish,private,pending";
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
	    $news_story_data['output'] = '';

	    if($slug_exists) {
	    	$story = $stories[0];

	    	$news_story_data['id']		= $story->{'id'};

			$news_story_data['status']	= $story->{'status'};

		    $news_story_data['date']	= strtotime($story->{'date'});

			$news_story_data['day']    	= date('j',$news_story_data['date']);
			$news_story_data['month']  	= date('F',$news_story_data['date']);
			$news_story_data['year']   	= date('Y',$news_story_data['date']);
			$news_story_data['date']  	= date('F j, Y',$news_story_data['date']);

			$news_story_data['link']	= $story->{'link'};
			$news_story_data['slug']	= $story->{'slug'};
			$news_story_data['title']	= $story->{'title'}->{'rendered'};
			$news_story_data['content']	= $story->{'content'}->{'rendered'};

			$news_story_data['dept_title']		= $story->{'acf'}->{'secondary_title'};
			$news_story_data['dept_content']	= $story->{'acf'}->{'secondary_content'};

			// Strip "Private: " from the title
			$private_needle = 'Private: ';
			if(substr($news_story_data['title'], 0, strlen($private_needle)) === $private_needle) {
				$news_story_data['title'] = str_replace('Private: ','',$news_story_data['title']);
			}

			$news_story_data['image'] 		= $story->{'featured_image_url'};

			$news_story_data['dept_image']	= $story->{'acf'}->{'secondary_featured_image'}->{'url'};
			if($news_story_data['dept_image']=='') {
				$news_story_data['dept_image'] = $news_story_data['image'];
			}

			$news_story_data['image_html'] = '';
			if($news_story_data['dept_image']!='') {
				$news_story_data['image_html'] = '<img class="department-news-story_featured_image" style="float: right;" src="'.$news_story_data['image'].'" alt="" />';
			}

			$news_story_data['dept_hide']	= $story->{'acf'}->{'hide_on_department_feeds'};

			$news_story_data['words'] = str_word_count( strip_tags( $news_story_data['dept_content'] ) );
			$news_story_data['minutes'] = floor( $news_story_data['words'] / 120 );
			$news_story_data['seconds'] = floor( $news_story_data['words'] % 120 / ( 120 / 60 ) );
			$news_story_data['ert'] = jp_estimated_reading_time($news_story_data['words'],$news_story_data['minutes'],$news_story_data['seconds']);

			$news_story_data['output'] .= '
			<div class="department-news-story">
				<h1>'.$news_story_data['dept_title'].'</h1>
				<div class="department-news-story_byline">
					<p><span class="department-news-story_date">'.$news_story_data['date'].'</span> <span class="department-news-story_ert">'.$news_story_data['ert'].'</span></p>
				</div>
				<div class="department-news-story_content">
					'.$news_story_data['image_html'].'
					'.$news_story_data['dept_content'].'
					<p class="clearfix"><a class="department-news-story_read-external" href="story.php?slug='.$news_story_data['slug'].'" target="_blank">Read story <span class="hide-accessible">'.$news_story_data['dept_title'].'</span> on SBU News</a></p>
				</div>
			</div>
		';
	    
	    } else {

			$news_story_data['output'] .= '
				<div class="department-news-story">
					<h1>404: Story Not Found</h1>
					
					<div class="department-news-story_content">
						
						<p><br>Sorry, but it looks like that story can\'t be found right now. Go back and search, or visit SBU News to browse all news.</p>


						<p class="clearfix"><a class="department-news-story_read-external" href="https://www.stonybrook.edu/happenings/" target="_blank">Browse SBU News</a></p>
					</div>
				</div>
			';

	    }

		return $news_story_data;
	}

	/**
	* Get the final redirect URL
	* From: https://gist.github.com/davejamesmiller/dbefa0ff167cc5c08d6d
	*
	* @return string or boolean
	*/
	function get_redirect_final_target($url) {
	    $ch = curl_init($url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_NOBODY, 1);
	    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // follow redirects
	    curl_setopt($ch, CURLOPT_AUTOREFERER, 1); // set referer on redirect
	    curl_exec($ch);
	    $target = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
	    curl_close($ch);
	    if ($target)
	        return $target;
	    return false;
	}

	/**
	* Get the last dirname
	* From: https://stackoverflow.com/questions/4733851/how-to-get-the-last-dir-from-a-path-in-a-string
	*
	* @return string or boolean
	*/
	function get_last_dir_from_url($url) {
	    if ($url!='')
	        return basename($url);
	    return false;
	}

	/**
	* Extract Keywords From A Text String With PHP
	* From: https://www.hashbangcode.com/article/extract-keywords-text-string-php
	*
	* @return string or boolean
	*/
	function prepare_meta_keywords_from_string($string) {
		$stopWords = array('i','a','about','an','and','are','as','at','be','by','com','de','en','for','from','how','in','is','it','la','of','on','or','that','the','this','to','was','what','when','where','who','will','with','und','the','www','stony','brook','brooks');

		$string = preg_replace('/\s\s+/i', '', $string); // replace whitespace
		$string = trim($string); // trim the string
		$string = preg_replace('/[^a-zA-Z0-9 -]/', '', $string); // only take alphanumerical characters, but keep the spaces and dashes too...
		$string = strtolower($string); // make it lowercase

		preg_match_all('/\b.*?\b/i', $string, $matchWords);
		$matchWords = $matchWords[0];

		foreach ( $matchWords as $key=>$item ) {
		  if ( $item == '' || in_array(strtolower($item), $stopWords) || strlen($item) <= 3 ) {
		      unset($matchWords[$key]);
		  }
		}   
		$wordCountArr = array();
		if ( is_array($matchWords) ) {
		  foreach ( $matchWords as $key => $val ) {
		      $val = strtolower($val);
		      if ( isset($wordCountArr[$val]) ) {
		          $wordCountArr[$val]++;
		      } else {
		          $wordCountArr[$val] = 1;
		      }
		  }
		}
		arsort($wordCountArr);
		$wordCountArr = array_slice($wordCountArr, 0, 10);
		return $wordCountArr;
	}

?>