<?php

function logMessage($logLevel, $message)
{

	// todo - complete this function

	/////////////////////////////////////////////////////////////////
    // 		2A.  Log to a file named log-yyyy-mm-dd.log where the Y, M and 
	// D values are the 4 digit year, 2 digit month, and 2 digit day
	// that the log is taking place. I created the variable $file for this.
    ////////////////////////////////////////////////////////////////

	$file = 'log-yyyy-mm-dd.log';

    /////////////////////////////////////////////////////////////////
    // 		2B.  If the log file for a given day does not yet exist, it should 
    // be created. If it already exists, it should be appended to.
    // I created a handle to set a pointer in the doc and read the 
    // contents of the doc and append any new data to the end of the doc.
    ////////////////////////////////////////////////////////////////
    $handle = fopen($file, 'r');

    ////////////////////////////////////////////////////////////////
    // 		2C. Newer logs should appear at the end of the log file.
	// Log entries should match the format:
    ////////////////////////////////////////////////////////////////
    fwrite($handle, PHP_EOL . 'a');
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");
