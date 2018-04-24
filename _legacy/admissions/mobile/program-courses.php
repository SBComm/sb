<?php 

require_once "simple_html_dom.php";

$url_prefix = "http://sb.cc.stonybrook.edu/bulletin/current/academicprograms/";
$program_code = "";

if($_GET){
	$program_code = $_GET['p'];
	if(empty($program_code)) die('nothing');
}
else
	die('nothing');
	
$url_courses = $url_prefix.$program_code."/courses.php";

$html_raw_courses = file_get_html($url_courses);

foreach($html_raw_courses->find('div.course') as $course) {
	$name = $course->find('h3',0)->plaintext;
	echo "<strong>$name</strong><br/>";

	foreach($course->find('p') as $p){
		if(trim($p->innertext) == "") continue;
		echo "<p>".trim($p->innertext)."</p>";
	}
	echo "<hr/>";
}
											
?>