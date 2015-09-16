<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/temp_style.css" />
	</head>
	<body>

		<?php include_once('../../application/init.php'); ?>

		<form method="GET" action="search">

			<label>Keywords
				<input type="text" name="keywords" />
			</label>

			<label>Department
				<select name="department">
					<option value="">All</option>
					<?=$render->getDepartmentSelectOptions()?>
				</select>
			</label>

			<label>Course Level
				<select name="course_level">
					<option value="">All</option>
					<?=$render->getCourseLevelOptions()?>
				</select>
			</label>

			<label>Location
				<select name="location">
					<option value="">All</option>
					<?=$render->getLocationSelectOptions()?>
				</select>
			</label>

			<label>SBC
				<select name="SBC">
					<option value="">All</option>
					<?=$render->getSBCSelectOptions()?>
				</select>
			</label>

			<label>DEC
				<select name="DEC">
					<option value="">All</option>
					<?=$render->getDECSelectOptions()?>
				</select>
			</label>

			<input type="submit" />

		</form>

	</body>
</html>