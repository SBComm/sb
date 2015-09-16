<?php namespace Services;

class ErrorHandling{

	/**
	 * Log the exception show an error and then exit
	 * @param  \Exception $e The exception that was thrown
	 * @return void
	 */
	public static function logException(\Exception $e){
		$message = date("m-d-Y H:i:s") . " " . $e->getMessage() . "\n" .
				   $e->getFile() . ", " . $e->getLine() . "\n" .
				   $e->getTraceAsString() . "\n\n";

		file_put_contents('application/logs/error_log.txt', $message, FILE_APPEND);

		echo "Sorry, there has been an error. Please try again. If the problem persists please contact the System Administrator.";

		exit;

	}

}