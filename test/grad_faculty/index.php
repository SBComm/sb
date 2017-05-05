<!DOCTYPE html>
<html>
<body>

<?php

$login = "stonybrook/web_service";
$password = "dpfs7a2K3cz";
$url = "https://www.digitalmeasures.com/login/service/v4/SchemaIndex/INDIVIDUAL-ACTIVITIES-Business/USER_ENABLED:ENABLED/DEPARTMENT:Accounting,Management,Finance,Marketing";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");
$result = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//curl_close($ch);  
$xml = simplexml_load_string($result);
$facultyName = array();

foreach($xml->Index[1] as $w) { 
	$name = $w['entryKey']->__toString();
	echo "<a href='profile.php'>Link</a>";
	$url = "https://www.digitalmeasures.com/login/service/v4/SchemaData/INDIVIDUAL-ACTIVITIES-Business/USERNAME:".$name."/PCI";
	curl_setopt($ch, CURLOPT_URL,$url);
	$result = curl_exec($ch);
	$xml = simplexml_load_string($result);
	$xsl = new DOMDocument;
	$xsl->load('singleFaculty.xsl');
	$proc = new XSLTProcessor;
	$proc->importStyleSheet($xsl); 
	echo $proc->transformToXML($xml);
}
curl_close($ch);

?>
</body>
</html>