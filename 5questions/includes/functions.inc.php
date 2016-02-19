<?php
	function html($text)
	{
		return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
	}
	
	function htmlout($text)
	{
		echo html($text);
	}

	function phone_number($sPhone){
	    $sPhone = preg_replace("[^0-9]",'',$sPhone);
	    if(strlen($sPhone) != 10) return(False);
	    $sArea = substr($sPhone,0,3);
	    $sPrefix = substr($sPhone,3,3);
	    $sNumber = substr($sPhone,6,4);
	    $sPhone = "(".$sArea.") ".$sPrefix."-".$sNumber;
	    return($sPhone);
	}

	function curPageURL() {
		$pageURL = 'http';
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
		return $pageURL;
	}
?>