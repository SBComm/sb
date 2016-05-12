<?php
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
			$story_url_absolute = 'http://mobile.cc.stonybrook.edu/sb/magazine/'.$magazine_this_year.'/'.$story_slug;

			$story_title = $post->title->rendered;
			$story_grid_title = $post->acf->magazine_grid_title;
			$story_sub = strip_tags($post->acf->magazine_story_sub);
			$story_excerpt = strip_tags($post->excerpt->rendered);
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

			foreach ($posts as $post_n) {
				if($story_position_next == $post_n->acf->magazine_grid_position) {
					$story_url_next = 'magazine/'.$magazine_this_year.'/'.$post_n->slug;
				} else if($story_position_prev == $post_n->acf->magazine_grid_position) {
					$story_url_prev = 'magazine/'.$magazine_this_year.'/'.$post_n->slug;
				}
			}

			$gallery_img_0 = $post->acf->magazine_large_hero_image;
			$gallery_img_1 = $post->acf->magazine_gallery_image_1;
			$gallery_img_2 = $post->acf->magazine_gallery_image_2;
			$gallery_img_3 = $post->acf->magazine_gallery_image_3;
			$gallery_img_4 = $post->acf->magazine_gallery_image_4;
			$gallery_img_5 = $post->acf->magazine_gallery_image_5;
			$gallery_img_6 = $post->acf->magazine_gallery_image_6;
			$gallery_img_7 = $post->acf->magazine_gallery_image_7;
			$gallery_img_8 = $post->acf->magazine_gallery_image_8;
			$gallery_img_9 = $post->acf->magazine_gallery_image_9;

			$gallery_illustration = $post->acf->magazine_gallery_illustration;

			$j = $k = 0;
			while($j<10) {
				if(${"gallery_img_".$j} != '') {
					$gallery_imgs[$k] = ${"gallery_img_".$j};
					$k++;
				}
				$j++;
			}

			$gallery = '';
			$n = 0;
			foreach ($gallery_imgs as $gallery_img) {
				$n++;
				$gallery .= '
					<a class="item nivo-lightbox mag-gallery_images_thumb" href="#image-'.$n.'" data-lightbox-type="inline" data-caption="true" data-lightbox-gallery="mag-gallery">
						<img src="'.$gallery_img->url.'" alt="'.$gallery_img->caption.'" />
					</a>
					<div id="image-'.$n.'" class="inline-lightbox-content">
						<img class="mag-gallery_images_image" src="'.$gallery_img->url.'" alt="'.$gallery_img->caption.'" />
						<div class="mag-gallery_images_caption">
							<button class="mag-gallery_images_caption_view-trigger"><span>View</span> caption</button>
							<div>
								<h4>'.$story_title.'</h4>
								<p>'.$gallery_img->caption.'</p>
							</div>
						</div>
					</div>
				';
			}

			$gallery_trigger = '';
			if(count($gallery_imgs) > 1) {
				$gallery_trigger = '
					<a class="mag-article_view-gallery mag-article_gallery-trigger" href="#"><em class="fa fa-camera-retro"></em> View Gallery</a>
				';
			}

			$youtube_id = $post->acf->magazine_youtube_id;

			$gallery_video_trigger = '';
			if($youtube_id != '') {
				$gallery_video = '
					<a class="clearfix mag-gallery_images-hidden nivo-lightbox gallery-video-lightbox" href="http://www.youtube.com/watch?v='.$youtube_id.'?autoplay=1" data-options="autoplay=1&amp;modestbranding=1&amp;rel=0" data-lightbox-gallery="mag-gallery">Watch the video&nbsp;<i class="fa fa-play-circle"></i></a>
				';
				$gallery_video_trigger = '
					<a class="mag-article_watch-video mag-article_gallery-trigger" href="#"><em class="fa fa-youtube-play"></em> Watch Video</a>
				';
			}

			$gallery_illustration_trigger = '';
			if($gallery_illustration != '') {
				$gallery_illustration_image = '
					<a class="item nivo-lightbox mag-gallery_images_thumb gallery-illustration-lightbox" href="#image-'.$n.'" data-lightbox-type="inline" data-caption="true">
						<img src="'.$gallery_illustration->url.'" alt="'.$gallery_illustration->caption.'" />
					</a>
					<div id="image-'.$n.'" class="inline-lightbox-content">
						<img class="mag-gallery_images_image" src="'.$gallery_illustration->url.'" alt="'.$gallery_illustration->caption.'" />
						<div class="mag-gallery_images_caption">
							<button class="mag-gallery_images_caption_view-trigger"><span>View</span> caption</button>
							<div>
								<h4>'.$story_title.'</h4>
								<p>'.$gallery_illustration->caption.'</p>
							</div>
						</div>
					</div>
				';;
				$gallery_illustration_trigger = '
					<a class="mag-article_view-illustration mag-article_gallery-trigger" href="#"><em class="fa fa-picture-o"></em> View Illustration</a>
				';
			}

			$next_link = $prev_link = '';
			if($story_url_next!='') {
				$next_link = '<a class="next" href="'.$story_url_next.'">Next</a>';
			}
			if($story_url_prev!='') {
				$prev_link = '<a class="prev" href="'.$story_url_prev.'">Previous</a>';
			}

			$magazine_article_html .= '
				<header class="mag-article_header">
					<div class="mag-article_header_bg-img"><img src="'.$story_hero_image_url.'" alt="'.$story_hero_image_alt.'" /></div>
				</header>
				<button class="trigger animated pulse" data-info="Read the story"><span>Read Story</span></button>
				<article class="content">
					<div class="title clearfix">
						<h1>'.$story_title.'</h1>
						<p class="subline">'.$story_sub.'</p>
						<p class="author">'.$author.$photog.'</p>
					</div>
					<div class="mag-article_content_wrapper clearfix">
						'.$story_html.'
						'.$gallery_trigger.'
						'.$gallery_video_trigger.'
						'.$gallery_illustration_trigger.'
						<div class="social-share-button-wrapper">
							<div class="social-share-button-wrapper clearfix">
								<button class="button social-share facebook-share facebook-share-trigger"><em class="fa fa-share"></em> Share on Facebook</button>
								<a class="button social-share twitter-share twitter-share-trigger" href="http://twitter.com/share?text=Check out the lastest at Stony Brook!&amp;url=http://stonybrook.edu/happenings" target="_new"><em class="fa fa-share"></em> Share on Twitter</a>
							</div>
						</div>
						<div class="social-bar">
							'.$prev_link.'
							'.$next_link.'
							<a class="current-issue" href="magazine/#stories"><em class="fa fa-th-large"></em> Current Issue</a>
						</div>
					</div>
				</article>
				<div class="mag-article_gallery hide-accessible">
					'.$gallery.'
					'.$gallery_video.'
					'.$gallery_illustration_image.'
				</div>
				<div id="meta-override" class="hidden" data-title="'.$story_title.'" data-description="'.$story_excerpt.'" data-url="'.$story_url_absolute.'" data-image="'.$story_hero_image_url.'"></div>
			';

			break; //break loop
    	}
    }
?>