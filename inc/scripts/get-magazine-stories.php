<?php
	$file = "scripts/get-magazine-json.php";
    include($path . $file);

	$mainHtml = '';

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
		}
	}

    $mainHtml .= $html;

	echo $mainHtml;

?>