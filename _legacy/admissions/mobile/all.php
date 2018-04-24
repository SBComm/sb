<?php

$url = "https://api.mongohq.com/databases/Programs/collections/majors/documents/?_apikey=fso5owg8x6edpmwnhpb2";
	
$programs = getJSON($url);

function getJSON($url){
	$callback = json_decode(file_get_contents($url),true);
	return $callback;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>All Programs</title>
</head>

<body>

<?php

	foreach($programs as $program){
		echo $program["name"].", ".$program["degree"];
		
		if(isset($program["concentration"])){
			echo "</br>";
			foreach($program["concentration"] as $concentration){
				echo "- ".$concentration."</br>";
			}
			
		}
		
		echo "<br/>";
	}

?>


</body>
</html>