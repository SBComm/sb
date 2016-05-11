<?php

	$wp_posts_url = "http://www.stonybrook.edu/happenings/wp-json/wp/v2/posts?categories=" . $wp_cat . "&per_page=100";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $wp_posts_url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
	$wp_post_data = curl_exec($ch);
	curl_close($ch);

	$wp_post_data = json_decode($wp_post_data);

	function sort_position($a, $b) {
	    if ($a->acf->magazine_grid_position < $b->acf->magazine_grid_position) {
	        return -1;
	    } else if ($a->acf->magazine_grid_position > $b->acf->magazine_grid_position) {
	        return 1;
	    } else {
	        return 0; 
	    }
	}

	usort($wp_post_data, 'sort_position');

	$posts = $wp_post_data;

?>