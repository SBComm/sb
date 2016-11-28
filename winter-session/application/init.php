<?php

	// Include files required to initialize the application
	include_once('services/error_handling.php');
	include_once('services/course_data.php');
	include_once('services/search.php');
	include_once('controllers/render.php');

	// Initialize Course Data
	//$xml_url = 'http://localhost:8888/sb/winter-session/application/class_schedule.xml';
	//$xml_url = 'http://mobile.cc.stonybrook.edu/data/winter-courses/winter_class_schedule.xml';
	$xml_url = 'http://www.stonybrook.edu/_data/winter-courses/winter_class_schedule.xml';
	$courseData = new \Services\CourseData($xml_url);


	// Initialize Renderer
	$render = new \Controllers\Render($courseData);

?>