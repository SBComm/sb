<?php
	$wp_cat = '179';
	$file = "scripts/get-magazine-json.php";
    include($path . $file);

    $this_slug = $_GET["story"];
    $slug_exists = false;

    foreach ($posts as $post) {
    	if($this_slug == $post->slug) {
    		$slug_exists = true;
    		
    		//get mag story
    		$story_slug =  $post->slug;
			$story_url = 'magazine/'.$magazine_this_year.'/'.$story_slug;

			$story_title = $post->title->rendered;
			$story_grid_title = $post->acf->magazine_grid_title;
			$story_sub = strip_tags($post->acf->magazine_story_sub);
			$story_author = $post->acf->magazine_author_name;
			$story_photog = $post->acf->magazine_photographer_name;
			$author = '';
			if($story_author!='') {
				$author = 'by <strong>'.$story_author.'</strong>';
			}
			$photog = '';
			if($story_photog!='') {
				$photog = ' &#8212; Photography by <strong>'.$story_photog.'</strong>';
			}
			$story_html = $post->content->rendered;
			$story_hero_image_url = $post->acf->magazine_large_hero_image->url;
			$story_hero_image_alt = $post->acf->magazine_large_hero_image->alt;
			$story_position = intval($post->acf->magazine_grid_position);
			$story_position_next = $story_position + 1;
			$story_position_prev = $story_position - 1;

			foreach ($posts as $post) {
				if($story_position_next == $post->acf->magazine_grid_position) {
					$story_url_next = 'magazine/'.$magazine_this_year.'/'.$post->slug;
				} else if($story_position_prev == $post->acf->magazine_grid_position) {
					$story_url_prev = 'magazine/'.$magazine_this_year.'/'.$post->slug;
				}
			}

			$next_link = $prev_link = '';
			if($story_url_next!='') {
				$next_link = '<a class="next" href="'.$story_url_next.'">Next</a>';
			}
			if($story_url_prev!='') {
				$prev_link = '<a class="prev" href="'.$story_url_prev.'">Previous</a>';
			}

			$html .= '
				<header class="mag-article_header">
					<div class="mag-article_header_bg-img"><img src="'.$story_hero_image_url.'" alt="'.$story_hero_image_alt.'" /></div>
				</header>
				<button class="trigger animated pulse" data-info="Read the story"><span>Read Story</span></button>
				<article class="content">
					<div class="title">
						<h1>'.$story_title.'</h1>
						<p class="subline">'.$story_sub.'</p>
						<p class="author">'.$author.$photog.'</p>
					</div>
					<div class="mag-article_content_wrapper">
						'.$story_html.'
						<div class="social-bar">
							'.$prev_link.'
							'.$next_link.'
							<button>Share</button>
						</div>
					</div>
				</article>
			';

    		echo $html;

			break; //break loop
    	}
    }

	if(!$slug_exists) {
        $file = "magazine/article-404.php";
        $is_404 = true;
        include($pathForContent . $content . $file);
    }
?>