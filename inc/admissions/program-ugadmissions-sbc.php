<?php 

require_once "simple_html_dom.php";

$url_prefix = "https://www.stonybrook.edu/sb/bulletin/current/academicprograms/";
$program_code = "";
$callback = '';

if($_GET){
	$program_code = $_GET['p'];
	$callback = $_GET['callback'];
	if(empty($program_code)) header('Location: academics');
}
else
	header('Location: academics');
	
$url_home 			= $url_prefix.$program_code;
$url_desc 			= $url_prefix.$program_code."/about.php";
$url_courses		= $url_prefix.$program_code."/courses.php";
$url_degreereq		= $url_prefix.$program_code."/degreesandrequirements.php";
$url_schedule		= $url_prefix.$program_code."/sequence.php";

$html_raw_home 		= file_get_html($url_home);
$title = $html_raw_home->find('div.column_2_text h2',0)->innertext;
$output['title'] = $title;

if(isset($_GET['courses'])){
	$html_raw_courses 	= file_get_html($url_courses);
	
	$output['courses'] = '';
	
	foreach($html_raw_courses->find('div.course') as $course) {
		$name = $course->find('h3',0)->plaintext;
		$output['courses'] .= "<strong>$name</strong><br/>";
	
		foreach($course->find('p') as $p){
			if(trim($p->innertext) == "") continue;
			$output['courses'] .= "<p>".trim($p->innertext)."</p>";
		}
		$output['courses'] .= "<hr/>";
	}	
	
	if(count($html_raw_courses->find('div.course')) <= 0)
		outputErrorJSON();
	else
		outputJSON($output);
		
}else if(isset($_GET['require'])){
	$html_raw_require 	= file_get_html($url_degreereq);
	
	$output['requirements'] = '';
	
	if(empty($html_raw_require->find('div.column_2_text',0)->innertext)){
		outputErrorJSON();
	}else{
		$output['requirements'] .= "<p>".$html_raw_require->find('div.column_2_text',0)->innertext."</p>";	
		outputJSON($output);
	}
		
}else if(isset($_GET['schedule'])){
	$html_raw_schedule 	= file_get_html($url_schedule);
	
	$output['schedule'] = '';
	
	if(empty($html_raw_schedule->find('div.column_2_text',0)->innertext)){
		outputErrorJSON();
	}else{
		$output['schedule'] .= "<p>".$html_raw_schedule->find('div.column_2_text',0)->innertext."</p>";	
		outputJSON($output);
	}
	
}else{
	$html_raw_desc 		= file_get_html($url_desc);
	
	//$html_raw_sample 		= file_get_html($url_sampleseq);

	$output['desc'] = '';
	$output['contact'] = '';
	 
	$i=0;
	foreach($html_raw_home->find('div.column_2_text p') as $p) {
		//if($i++ == 0) continue;
		if(trim($p->innertext) == "") continue;
		$output['contact'] .= "<p>".trim($p->innertext)."</p>";
	}
	
	$n = 0;
	if(isset($html_raw_desc->find('div.column_2_text p',$n)->class)) $n++;
	
	//$output['desc'] .= "<p>".$html_raw_desc->find('div.column_2_text p',$n)->innertext."</p>";
	//$output['desc'] .= "<p>".$html_raw_desc->find('div.column_2_text p',$n)->next_sibling ()->innertext."</p>";
	
	foreach($html_raw_desc->find('div.column_2_text p') as $p) {
		//if($i++ == 0) continue;
		if(trim($p->innertext) == "") continue;
		$output['desc'] .= "<p>".trim($p->innertext)."</p>";
	}
	
	outputJSON($output);
}

function outputJSON($object){
	$output = json_encode($object);
	header('Content-Type: text/javascript');
	//header('Content-Type: application/json');	
	echo $GLOBALS['callback'].'('.$output.');';
}

function outputErrorJSON(){
	$o['is_error'] = true;
	$output = json_encode($o);
	header('Content-Type: text/javascript');
	echo $GLOBALS['callback'].'('.$output.');';
}

?>                          
                            
                      