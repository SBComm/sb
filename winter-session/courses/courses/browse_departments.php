<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/temp_style.css" />
		<script src="js/jquery-1.6.4.min.js"></script>
		<script src="js/jquery.fastLiveFilter.js"></script>
		<script>
		    $(function() {
		        $('#search_input').fastLiveFilter('#department_list');
		    });
		</script>
	</head>
	<body>

		<input id="search_input" placeholder="Filter List" />

		<?php include_once('../../application/init.php'); ?>

		<ul id="department_list">
			<?=$render->listAllDepartments();?>
		</ul>

	</body>
</html>