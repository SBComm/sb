<?php

ini_set('display_errors', 1);
error_reporting(~0);


$API_KEY  = "jjxUrWp6BcGOFUJG2Sysa4oiPY7u6Q7LMwFcBLt8";

$loginurl = "https://api.mongohq.com/2011-09/databases/Programs/collections/webusers/documents/?_apikey=".$API_KEY."&q=%7B%22username%22:%22".urlencode("admin")."%22%7D";
	

//echo gethostbyname("https://api.mongohq.com");

//var_export (dns_get_record ( "https://api.mongohq.com") );

echo file_get_contents($loginurl);	
	//$callback = json_decode(,true);

//echo $loginurl;

//phpinfo();


?>