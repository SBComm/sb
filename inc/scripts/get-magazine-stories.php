<?php
	$file = "scripts/get-magazine-json.php";
    include($path . $file);

    $featured_post = new stdClass();
	$mainHtml = '';

	//image counters
	$i = $j = $k = $n = 0;
	$gallery = '';

	//for each post
	foreach ($posts as $post) {
		$gallery_config = $post->acf->magazine_main_gallery;
		if(!$gallery_config) {
			$story_slug = $post->slug;
			$story_url = 'magazine/'.$magazine_this_year.'/'.$story_slug;

			$story_grid_title = $post->acf->magazine_grid_title;
			$story_sub = $post->acf->magazine_story_sub;

			$grid_item_img_href = $post->acf->magazine_grid_image->url;
			$grid_item_img_alt = $post->acf->magazine_grid_image->alt;
			$grid_item_img = "";
			$grid_item_img_class = "";

			$grid_item_img_2_href = $post->acf->magazine_grid_hover_image->url;
			$grid_item_img_2_alt = $post->acf->magazine_grid_hover_image->alt;
			$grid_item_hover_img = "";

			$grid_display = $post->acf->magazine_grid_display_type;
			$grid_item_class = "";

			if($grid_display=='hover_image') {
				$grid_item_class = " grid-item--swap-images-on-hover grid-item--cursor-all";
				$grid_item_img_class = "grid-item_hover-hide";
				$grid_item_hover_img = "<img class='grid-item_hover-show' src='".$grid_item_img_2_href."' alt='".$grid_item_img_2_alt."' />";
			} else if($grid_display=='special_red') {
				$grid_item_class = " grid-item--red grid-item--hover-image grid-item--hover-state-show-on-mobile grid-item--star-instead-of-line grid-item--hide-close-button";
			} else if($grid_display=='no_title_default') {
				$grid_item_class = " grid-item--no-title-default";
			}
			$grid_item_img = "<img class='".$grid_item_img_class."' src='".$grid_item_img_href."' alt='".$grid_item_img_alt."' />";

			$grid_banner = $post->acf->magazine_grid_banner;
			$grid_item_banner_line_1 = $post->acf->magazine_banner_line_1;
			$grid_item_banner_line_2 = $post->acf->magazine_banner_line_2;
			$grid_item_banner = "";

			if($grid_banner=='default') {
				$grid_item_banner_class = "grid-item_category--primary";
				$grid_item_banner = '<span class="grid-item_category '.$grid_item_banner_class.'">'.$grid_item_banner_line_1.'</span>';
			} else if($grid_banner=='white') {
				$grid_item_banner_class = "grid-item_category--secondary";
				$grid_item_banner = '<span class="grid-item_category '.$grid_item_banner_class.'">'.$grid_item_banner_line_1.' <span>'.$grid_item_banner_line_2.'</span></span>';
			}

			$caps_override_class = "";
			if($post->acf->magazine_title_caps_override) {
				$caps_override_class = "text-transform-none";
			}

			$html .= '
		        <article class="grid-item'.$grid_item_class.'">
					'.$grid_item_img.'
					'.$grid_item_hover_img.'
					<a href="'.$story_url.'">
						'.$grid_item_banner.'
						<div class="mag-articles_title">
							<h3 class="'.$caps_override_class.'">'.$story_grid_title.'
							<p>'.$story_sub.'</p></h3>
							<button class="brand-button">Read Story</button>
							<span class="grid-item_close-overlay"><span class="grid-item_close-overlay_x">Back to story</span></span>
						</div>
					</a>
				</article>
			';

			//Now compile the images to be used for the gallery later, once out of this loop
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
			
			$i = 0;
			while($i<10) {
				if(${"gallery_img_".$i} != '') {
					$gallery_imgs[$k] = ${"gallery_img_".$i};
					$gallery_title[$k] = $post->title->rendered;
					$gallery_url[$k] = $story_url;
					$k++;
				}
				$i++;
			}

			$youtube_id = $post->acf->magazine_youtube_id;

			$gallery_video_trigger = '';
			if($youtube_id != '') {
				$gallery_imgs[$k] = $youtube_id;
				$k++;
			}

			if($post->acf->magazine_hero_story) {
				$featured_post->title = $story_grid_title;
				$featured_post->sub = $post->acf->magazine_hero_sub;
				$featured_post->author = $post->acf->magazine_author_name;
				$featured_post->img = $post->acf->magazine_hero_image->url;
				$featured_post->url = $story_url;
			}

		} else { //if gallery config post

			//Get the main 4 gallery images
			$main_gallery_img_1 = $post->acf->magazine_main_gallery_full_1;
			$main_gallery_img_2 = $post->acf->magazine_main_gallery_full_2;
			$main_gallery_img_3 = $post->acf->magazine_main_gallery_full_3;
			$main_gallery_img_4 = $post->acf->magazine_main_gallery_full_4;
			$main_gallery_thumb_1 = $post->acf->magazine_main_gallery_thumb_1;
			$main_gallery_thumb_2 = $post->acf->magazine_main_gallery_thumb_2;
			$main_gallery_thumb_3 = $post->acf->magazine_main_gallery_thumb_3;
			$main_gallery_thumb_4 = $post->acf->magazine_main_gallery_thumb_4;

			$r = $s = 0;
			while($r<4) {
				$r++;
				if(${"main_gallery_img_".$r} != '') {
					$main_gallery_imgs[$s] = ${"main_gallery_img_".$r};
					$main_gallery_thumbs[$s] = ${"main_gallery_thumb_".$r};
					$s++;
				}
			}
		}
	}

	//Set the gallery output
	$main_gallery = '';
	//First get the main 4 images
	$n = 0;
	foreach ($main_gallery_imgs as $main_gallery_img) {
		$n++;
		$main_gallery .= '
			<a class="item nivo-lightbox mag-gallery_images_thumb" href="#image-'.$n.'" data-lightbox-type="inline" data-caption="true" data-lightbox-gallery="mag-gallery">
				<img src="'.$main_gallery_thumbs[$n-1]->url.'" alt="'.$main_gallery_img->caption.'" />
			</a>
			<div id="image-'.$n.'" class="inline-lightbox-content">
				<img class="mag-gallery_images_image" src="'.$main_gallery_img->url.'" alt="'.$main_gallery_img->caption.'" />
				<div class="mag-gallery_images_caption">
					<button class="mag-gallery_images_caption_view-trigger"><span>View</span> caption</button>
					<div>
						<h4>'.$main_gallery_img->title.'</h4>
						<p>'.$main_gallery_img->caption.'</p>
					</div>
				</div>
			</div>
		';
	}

	//Now add on the rest of the images and youtube videos found in the articles
	$t = 0;
	foreach ($gallery_imgs as $gallery_img) {
		if($gallery_img->url != '') { //image
			$n++;
			$main_gallery .= '
				<a class="item nivo-lightbox mag-gallery_images_thumb hidden" href="#image-'.$n.'" data-lightbox-type="inline" data-caption="true" data-lightbox-gallery="mag-gallery">
					<img src="'.$gallery_img->url.'" alt="'.$gallery_img->caption.'" />
				</a>
				<div id="image-'.$n.'" class="inline-lightbox-content">
					<img class="mag-gallery_images_image" src="'.$gallery_img->url.'" alt="'.$gallery_img->caption.'" />
					<div class="mag-gallery_images_caption">
						<button class="mag-gallery_images_caption_view-trigger"><span>View</span> caption</button>
						<div>
							<h4>'.$gallery_title[$t].'</h4>
							<p>'.$gallery_img->caption.' <a href="'.$gallery_url[$t].'">Read Story</a></p>
						</div>
					</div>
				</div>
			';
		} else { //youtube
			$youtube_id = $gallery_img;
			$main_gallery .= '
				<a class="clearfix mag-gallery_images-hidden nivo-lightbox gallery-video-lightbox" href="http://www.youtube.com/watch?v='.$youtube_id.'?autoplay=1" data-options="autoplay=1&amp;modestbranding=1&amp;rel=0" data-lightbox-gallery="mag-gallery">Watch the video&nbsp;<i class="fa fa-play-circle"></i></a>
			';
		}
		$t++;
	}

    $mainHtml .= $html;

?>