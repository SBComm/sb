<?php

$API_KEY  = "jjxUrWp6BcGOFUJG2Sysa4oiPY7u6Q7LMwFcBLt8";


function login($username,$password){
	
	$loginurl = "https://api.mongohq.com/2011-09/databases/Programs/collections/webusers/documents/?_apikey=".$GLOBALS['API_KEY']."&q=%7B%22username%22:%22".urlencode($username)."%22%7D";
		
	$callback = json_decode(file_get_contents($loginurl),true);
	//$callback = get_data_curl($loginurl);
	
	return $callback;
}

function get_data_curl($url)
{
   $ch = curl_init();
   curl_setopt($ch,CURLOPT_URL,$url);
   curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
   curl_setopt ($c, CURLOPT_POST, true);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   $data = curl_exec($ch);
   curl_close($ch);
   return json_decode($data,true);
}


function outputJSON($object){
	$output = json_encode($object);
	header('Content-Type: application/json');
	echo $output;
}


function getJSON($url){
	$callback = json_decode(file_get_contents($url),true);
	$callback['api_url'] = "$url";
	return $callback;
}

function JsonPost($url, $input) {
      $json = json_encode($input);
      $contentLength = strlen($json);
      $headers = "Content-type: application/json\r\nContent-Length: {$contentLength}\r\n";
      $options = array(
         'http' => array(
         'method' => 'POST',
            'header' => $headers,		
            'ignore_errors' => true,
            'content' => $json
         )
      );
      $context = stream_context_create($options);
      $fp = @fopen($url, 'rb', false, $context);
      if (!$fp) {
         $resp = null;
      } else {
         $resp = stream_get_contents($fp);
         $resp = json_decode($resp, true);
         fclose($fp);
      }
      return $resp;
}

function testLoggedIn(){
	if (isset($_SESSION['user'])) {
		if(empty($_COOKIE['token_id']))
			header('Location: index.php');
	}else
		header('Location: index.php');
}


?>