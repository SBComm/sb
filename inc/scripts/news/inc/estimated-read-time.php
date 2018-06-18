<?php

	/**
	* Estimate time required to read the article
	*
	* @return string
	*/
	function jp_estimated_reading_time($words, $minutes, $seconds) {

		if ( 1 <= $minutes ) {
		    $estimated_time = $minutes . ' minute' . ($minutes == 1 ? '' : 's');
		} else if ( $seconds > 0 ) {
		    $estimated_time = $seconds . ' second' . ($seconds == 1 ? '' : 's');
		} else {
			$estimated_time = '';
		}

		return $estimated_time;

	}

?>