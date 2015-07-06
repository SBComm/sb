<?php

	// Include files required to initialize the application
	include_once('services/error_handling.php');
	include_once('services/course_data.php');
	include_once('services/search.php');
	include_once('controllers/render.php');

	// Initialize Course Data
	//$xml_url = 'http://localhost:8888/sb/summer-session/application/class_schedule.xml';
	//$xml_url = 'http://sb.cc.stonybrook.edu/summer/class_schedule.xml';
	$xml_url = 'http://mobile.cc.stonybrook.edu/data/summer-courses/summer_class_schedule.xml';
	//$xml_url = 'http://mobile.cc.stonybrook.edu/sb/summer-session/courses/class_schedule_2015_04_09.xml';
	$courseData = new \Services\CourseData($xml_url);


	// Initialize Renderer
	$render = new \Controllers\Render($courseData);

?>