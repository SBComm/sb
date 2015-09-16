<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/temp_style.css" />
		<script src="js/jquery-1.6.4.min.js"></script>
		<script src="js/jquery.fastLiveFilter.js"></script>
		<script>
		    $(function() {
		        $('#search_input').fastLiveFilter('#search_result_list');
		    });
		</script>
	</head>
	<body>

		<input id="search_input" placeholder="Filter List" />

		<?php
		
			include_once('../../application/init.php');

			$search = new \Services\Search($courseData->xmlObject);
			$search_response = $search->run($_GET);

		?>

		<?=$render->displaySearchQuery($search_response['query'])?>
		Showing <?=$search_response['number_of_results']?> result(s).

		<ul id="search_result_list">
			<?=$render->displaySearchResults($search_response['search_results'])?>
		</ul>

	</body>
</html>