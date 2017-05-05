<!DOCTYPE html>
<html>
<body>

<?php

$login = "stonybrook/web_service";
$password = "dpfs7a2K3cz";
$url = "https://www.digitalmeasures.com/login/service/v4/SchemaData/INDIVIDUAL-ACTIVITIES-Business/USERNAME:chanskim/PCI,ADMIN,EDUCATION,PROFILE,INTELLCONT,RESPROG,INTELLPROP,PRESENT,AWARDHONOR,SCHTEACH,INTELLPROP";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");
$result = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$xml = simplexml_load_string($result);
//print_r($xml);
$xsl = new DOMDocument;
$xsl->load('profile.xsl');
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); 
echo $proc->transformToXML($xml);

?>
</body>
</html>