<?php

function removeBOM($data) {
    if (0 === strpos(bin2hex($book_data), 'efbbbf')) {
       return substr($book_data, 3);
    }
}

function printBooks($path, $pathForContent, $content, $sbu_site_url) {
	/* Obtains WP data from JSON and creates HTML */

	$wp_posts_url = "https://news.stonybrook.edu/wp-json/wp/v2/posts?categories=134";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $wp_posts_url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
	//curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
	//curl_setopt($ch, CURLOPT_CAINFO, "/usr/local/ssl/certs/cacert.pem");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$wp_post_data = curl_exec($ch);
	curl_close($ch);

	$wp_post_data = json_decode($wp_post_data);

	function sort_position($a, $b) {
	    if ($a->acf->homepage_spotlight_position < $b->acf->homepage_spotlight_position) {
	        return -1;
	    } else if ($a->acf->homepage_spotlight_position > $b->acf->homepage_spotlight_position) {
	        return 1;
	    } else {
	        return 0; 
	    }
	}

	usort($wp_post_data, 'sort_position');

	$posts = $wp_post_data;

	$mainHtml = '';

	//for each post
	$i = 0;
	foreach ($posts as $post) {
		if(++$i > 6) break; // limit to 6
		$post_cat = $post->acf->homepage_spotlight_category;
		$delim_pos = strpos($post_cat,',');
		$spotlight_category = substr($post_cat,0,$delim_pos);
		$spotlight_slug = substr($post_cat,$delim_pos+1);

		$cat_link = $sbu_site_url['happenings'] . 'category/' . $spotlight_slug;

		$post_link = $post->link . '?spotlight=' . $i;
		$post_link = str_replace($post_link, '/stony-brook-matters/', '/alumni/')

		$spotlight_image = preg_replace('/\s+/', '', $post->acf->homepage_spotlight_image);
		$spotlight_image = makeHTTPS($spotlight_image);

		$html .= '
	        <div class="boldMovesBox gtm_read-story-link-click" style="background-image: url(\''.$spotlight_image.'\')">
				<a href="'.$post_link.'" class="boldMovesBox-title gtm_read-story-link-click" title="Read '.$post->acf->homepage_spotlight_title.'">
					<h3 class="gtm_read-story-link-click">'.$post->acf->homepage_spotlight_title.' <i class="fa fa-angle-right"></i></h3>
				</a>
				<a href="'.$post_link.'" class="boldMovesBox-story gtm_read-story-link-click" title="Learn about how '.$post->acf->homepage_spotlight_sub.'">
					<p class="gtm_read-story-link-click">'.$post->acf->homepage_spotlight_sub.'</p>
					<span class="boldMovesBox-fullStory gtm_read-story-link-click">Read Story</span>
					<span href="javascript:void(0);" class="close-boldMovesBox"><span class="close-boldMovesBox-x">Back to story</span></span>
				</a>
				<a href="'.$cat_link.'" class="boldMovesBox-link  gtm_read-story-category-click" title="See all stories in '.$spotlight_category.'"><span>All </span>'.$spotlight_category.'<span> News <i class="fa fa-long-arrow-right"></i></span></a>
			</div>
		';
	}

    $mainHtml .= $html;

	echo $mainHtml;

}

printBooks($path, $pathForContent, $content,$sbu_site_url);

?>