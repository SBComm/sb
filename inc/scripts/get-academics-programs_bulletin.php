<?php
	$academics_url = 'https://www.stonybrook.edu/far-beyond/_data/academics/all-programs.xml';
	$programs = simplexml_load_file($academics_url);
	$program_code = $_GET["code"];
	$program_type = $_GET["type"];
	$program_level = $_GET["level"];
	foreach ($programs as $program) {
		if($program['abbreviation']==$program_code) {
			$program_data = $program->bulletin_data->$program_level->$program_type;
			echo($program_data->asXML());
		}
	}
?>