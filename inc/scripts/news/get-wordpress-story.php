<?php 

	// Get passed params
	$story_slug 	= $_GET["slug"];
	$story_id 		= $_GET["id"];
    $slug_exists 	= false;

    include('inc/auth.php');
    include('inc/news-inc.php');

    /*
	 * GET STORY
	 */

	$news_story_data = jp_get_news_story_data($story_slug, $story_id);

	echo($news_story_data['output']);

?>