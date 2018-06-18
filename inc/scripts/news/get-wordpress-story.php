<?php 

    include('inc/estimated-read-time.php');

	// Get passed params
	$story_slug 	= $_GET["slug"];
    $slug_exists 	= false;

    /*
	 * GET STORY
	 */

	$api_query_slug = "slug=".$story_slug;
    $api_url 		= "http://localhost/news/wp-json/wp/v2/posts?".$api_query_slug;

	// Get stories
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,$api_url);
	$result = curl_exec($ch);
	curl_close($ch);

	$stories = json_decode($result, false);

    $story = $stories[0];

    $story_id		= $story->{'id'};

    $story_date		= strtotime($story->{'date'});
	$story_day    	= date('j',$story_date);
	$story_month  	= date('F',$story_date);
	$story_year   	= date('Y',$story_date);
	$story_date   	= date('F j, Y',$story_date);

	$story_link		= $story->{'link'};
	$story_slug		= $story->{'slug'};
	$story_title	= $story->{'title'}->{'rendered'};
	$story_content	= $story->{'content'}->{'rendered'};

	$story_image	= $story->{'featured_image_url'};

	$story_dept_title	= $story->{'acf'}->{'secondary_title'};
	$story_dept_content	= $story->{'acf'}->{'secondary_content'};

	$story_dept_image	= $story->{'acf'}->{'secondary_featured_image'}->{'url'};
	if($story_dept_image=='') {
		$story_dept_image = $story_image;
	}

	$story_image_html = '';
	if($story_dept_image!='') {
		$story_image_html = '<img class="department-news-story_featured_image" style="float: right;" src="'.$story_image.'" alt="" />';
	}

	$story_dept_hide	= $story->{'acf'}->{'hide_on_department_feeds'};

	$story_words = str_word_count( strip_tags( $story_dept_content ) );
	$story_minutes = floor( $story_words / 120 );
	$story_seconds = floor( $story_words % 120 / ( 120 / 60 ) );
	$story_ert = jp_estimated_reading_time($story_words,$story_minutes,$story_seconds);

	$output .= '
		<div class="department-news-story">
			<h1>'.$story_dept_title.'</h1>
			<div class="department-news-story_byline">
				<p><span class="department-news-story_date">'.$story_date.'</span> <span class="department-news-story_ert">'.$story_ert.'</span></p>
			</div>
			<div class="department-news-story_content">
				'.$story_image_html.'
				'.$story_dept_content.'
				<p class="clearfix"><a class="department-news-story_read-external" href="story.php?slug='.$story_slug.'" target="_blank">Read story <span class="hide-accessible">'.$story_dept_title.'</span> on SBU News</a></p>
			</div>
		</div>
	';

    echo $output;

?>