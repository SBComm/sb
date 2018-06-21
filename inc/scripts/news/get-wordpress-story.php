<?php 

	// Get passed params
	$story_slug 	= $_GET["slug"];
    $slug_exists 	= false;

    include('inc/news-inc.php');

    /*
	 * GET STORY
	 */

	$news_story_data = jp_get_news_story_data($story_slug);

	echo($news_story_data['output']);

?>