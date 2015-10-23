<?php

	header('content-type: application/javascript; charset=utf-8');

	$f_url = $_GET["url"];
	$f_name = ($_GET["name"] . '.json');

	$_source = file_get_contents($f_url);
	$_source = preg_replace("@[\\r|\\n|\\t]+@", "", $_source);

	$fp = fopen($f_name, 'w');
	fwrite($fp, json_encode($_source));
	fclose($fp);

?>
