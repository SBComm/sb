<?php 

    include('inc/auth.php');
    include('inc/news-inc.php');

	// Get passed params
	$current_page 		= $_GET["page"]=='' ? '1' : $_GET["page"];
	$per_page 	= $_GET["per_page"]=='' ? '30' : $_GET["per_page"];
	$orderby 	= $_GET["orderby"]=='' ? 'date' : $_GET["orderby"];
	$order 		= $_GET["order"]=='' ? 'desc' : $_GET["order"];
	$categories	= $_GET["categories"]=='' ? '' : $_GET["categories"];
	$tags		= $_GET["tags"]=='' ? '' : $_GET["tags"];

	if($per_page > 100) {
		$per_page = 100;
	}

	$magazine_category_id = jp_get_magazine_category_id();
	//var_dump($magazine_category_id);

	/*
	 * GET CATEGORY ID(S) FROM CAT SLUG(S)
	 */

	// Get category slug
    $api_url = "http://localhost/news/wp-json/wp/v2/categories?slug=".$categories;

	//  Initiate curl
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,$api_url);
	$result = curl_exec($ch);
	curl_close($ch);

	$cats_arr = json_decode($result, false);
	//echo json_encode($cats_arr, JSON_PRETTY_PRINT);

	$category_ids = '';
	$category_filter = '';
	$api_query_cat_label = '';

	$numCats = count($cats_arr);
	if($numCats>0) {
		$i = 0;
	    foreach ($cats_arr as $cat) {
	    	$category_ids .= $cat->{'id'};
	    	if(++$i !== $numCats) {
				$category_ids .= ',';
			}
	    }
	    $category_filter 		= "categories=".$category_ids;
		$api_query_cat_label 	= "categories=".$categories;
	}

	/*
	 * GET TAG ID(S) FROM TAG SLUG(S)
	 */

	// Get category slug
    $api_url = "http://localhost/news/wp-json/wp/v2/tags?slug=".$tags;

	//  Initiate curl
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,$api_url);
	$result = curl_exec($ch);
	curl_close($ch);

	$tags_arr = json_decode($result, false);
	//echo json_encode($tags_arr, JSON_PRETTY_PRINT);

	$tag_ids = '';
	$tag_filter = '';
	$api_query_tag_label = '';

	$numTags = count($tags_arr);
	if($numTags>0) {
		$i = 0;
	    foreach ($tags_arr as $tag) {
	    	$tag_ids .= $tag->{'id'};
	    	if(++$i !== $numTags) {
				$tag_ids .= ',';
			}
	    }
	    $tag_filter 			= "tags=".$tag_ids;
		$api_query_tag_label 	= "tags=".$tags;
	}

    /*
	 * GET STORIES
	 */

    $status_filter = "status=publish,private,pending";
    $exclude_cat_filter = "categories_exclude=".$magazine_category_id;

	$api_query_per_page 	= "per_page=".$per_page;
	$api_query_page 		= "page=".$current_page;
	$api_query_orderby 		= "orderby=".$orderby;
	$api_query_order 		= "order=".$order;

	// Get header and pagination
    $api_url = "http://localhost/news/wp-json/wp/v2/posts?".$api_query_page.'&'.$api_query_per_page."&".$api_query_orderby."&".$api_query_order."&".$category_filter."&".$tag_filter."&".$status_filter."&".$exclude_cat_filter;

    $api_access_token = get_jwt_auth_token()->token;

    $api_headers = array(
    	'Content-length: 0',
		'Content-Type: application/json',
		sprintf('Authorization: Bearer %s', $api_access_token)
	);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_VERBOSE, 1);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_URL,$api_url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $api_headers);
	$result = curl_exec($ch);

	curl_close($ch);
	
	$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
	$header = substr($result, 0, $header_size);
	$body = substr($result, $header_size);

	$headers = [];
	$header_data = explode("\n",$result);
	$headers['status'] = $header_data[0];
	array_shift($header_data);

	foreach($header_data as $header_datum){
	    $middle = explode(":",$header_datum);
	    $headers[trim($middle[0])] = trim($middle[1]);
	}

	$total_stories 	= $headers['X-WP-Total'];
	$total_pages 	= $headers['X-WP-TotalPages'];

	// Get stories
	$api_url = "http://localhost/news/wp-json/wp/v2/posts?".$api_query_page.'&'.$api_query_per_page."&".$api_query_orderby."&".$api_query_order."&".$category_filter."&".$tag_filter."&".$status_filter."&".$exclude_cat_filter;

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,$api_url);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $api_headers);
	$result = curl_exec($ch);

	curl_close($ch);

	$stories = json_decode($result, false);

	if($stories->code == NULL && count($stories) > 0) {

	    $output = '
	        <div class="department-news-stories">
	        	<div class="row gridlove-posts">
		';

	    foreach ($stories as $story) {

	    	$story_dept_hide	= $story->{'acf'}->{'hide_on_department_feeds'};
	    	if($story_dept_hide != 1) {

	    		$story_id		= $story->{'id'};

	    		//var_dump($stories);

		        $story_date		= strtotime($story->{'date'});
		    	$story_day    	= date('j',$story_date);
		    	$story_month  	= date('F',$story_date);
		    	$story_year   	= date('Y',$story_date);
		    	$story_date   	= date('F j, Y',$story_date);

		    	$story_link		= $story->{'link'};
		    	$story_slug		= $story->{'slug'};
		    	$story_title	= $story->{'title'}->{'rendered'};
		    	$story_content	= $story->{'content'}->{'rendered'};

		    	$story_dept_link = "get-wordpress-story.php?" . (($story_slug!='') ? "slug=".$story_slug : "id=".$story_id) ;

		    	$story_dept_title	= $story->{'acf'}->{'secondary_title'};
		    	$story_dept_content	= $story->{'acf'}->{'secondary_content'};

				// Strip "Private: " from the title
				$private_needle = 'Private: ';
				if(substr($story_title, 0, strlen($private_needle)) === $private_needle) {
					$story_title = str_replace('Private: ','',$story_title);
				}

		    	$story_image	= $story->{'featured_image_url'};
		    	if($story_image=='') {
		    		$story_image = 'https://www.stonybrook.edu/commcms/_images/section-backgrounds/red-rays/rays-vertical-1.jpg';
		    	}

		    	$story_dept_image	= $story->{'acf'}->{'secondary_featured_image'}->{'url'};
		    	if($story_dept_image=='') {
		    		$story_dept_image = $story_image;
		    	}

				$story_words = str_word_count( strip_tags( $story_dept_content ) );
				$story_minutes = floor( $story_words / 120 );
				$story_seconds = floor( $story_words % 120 / ( 120 / 60 ) );
				$story_ert = jp_estimated_reading_time($story_words,$story_minutes,$story_seconds);

		        $output .= '
				        <div class="col-lg-4 col-md-6 col-sm-12 layout-simple">
				            <article class="gridlove-post gridlove-post-a gridlove-box post-2430 post type-post status-publish format-standard hentry category-alumni tag-advancement tag-campaign-for-stony-brook tag-donations tag-wolfstock">
				                <div class="entry-image">
				                    <a href="'.$story_slug.'" title="'.$story_dept_title.'"><img alt="'.$story_dept_title.'" src="'.$story_image.'"></a>
				                </div>
				                <div class="box-inner-p">
				                    <div class="box-inner-ellipsis">
				                        <div style="margin: 0px; padding: 0px; border: 0px;">
				                            <h2 class="entry-title h3"><a href="'.$story_dept_link.'">'.$story_dept_title.'</a></h2>
				                        </div>
				                    </div>
				                    <div class="entry-meta">
				                        <div class="meta-item meta-date">
				                            <span class="updated department-news-story_date">'.$story_date.'</span>
				                        </div>
				                    </div>
				                </div>
				            </article>
				        </div>
				';

	    	}
	    }


		$output .= '
		    	</div>
	    ';

	    $pagination_out = '<nav class="gridlove-pagination">';

	    $max_page = ($total_pages <= 8) ? $total_pages : (($total_pages - $current_page < 4) ? $total_pages : ($current_page + 4) );

	    $min_page = ($current_page <= 4) ? 1 : ($current_page - 4);

	    $next_page = ($current_page < $total_pages) ? ($current_page + 1) : 0;

	    for($i=$min_page; $i<=$max_page; $i++) {
	    	if($i == $current_page) {
				$pagination_out .= '<span class="page-numbers current">'.$i.'</span>';
	    	} else {
	    		$pagination_out .= '<a class="page-numbers" href="?page='.$i.'&'.$api_query_per_page."&".$api_query_orderby."&".$api_query_order."&".$api_query_cat_label."&".$api_query_tag_label.'">'.$i.'</a>';
	    	}
	    }
	    if($next_page > 0) {
	    	$pagination_out .= '<a class="next page-numbers" href="?page='.$next_page.'&'.$api_query_per_page."&".$api_query_orderby."&".$api_query_order."&".$api_query_cat_label."&".$api_query_tag_label.'">Next</a>';
	    }

	    $pagination_out .= '</nav">';

	    $output .= $pagination_out;
		$output .= '
		    </div>
	    ';
	}  else {

		$output .= '
			<div class="department-news-story">
				<h1>No Stories Found</h1>
				
				<div class="department-news-story_content">
					
					<p><br>No search results found. Try going back, or visit SBU News to browse all news.</p>


					<p class="clearfix"><a class="department-news-story_read-external" href="https://www.stonybrook.edu/happenings/" target="_blank">Browse SBU News</a></p>
				</div>
			</div>
		';

    }

    echo $output;

?>