<?php

	header('content-type: application/javascript; charset=utf-8');

	$f_url = $_GET["url"];

	$_source = file_get_contents($f_url);
	$_source = preg_replace("@[\\r|\\n|\\t]+@", "", $_source);

	echo $_GET['callback'] . '('.json_encode($_source).')';

?>