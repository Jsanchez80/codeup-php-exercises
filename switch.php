<?php

// Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
    case 1:
    	echo "Monday" . PHP_EOL;     // Output Monday
    case 2:
        echo "Tuesday" . PHP_EOL;    // Output Tuesday
    case 3:
    	echo "Wednesday" . PHP_EOL;  // Output Wednesday 
    case 4:
    	echo "Thursday" . PHP_EOL;   // Output Thursday 
    case 5:
     	echo "Friday" . PHP_EOL;     // Output Friday 
    case 6:
    	echo "Saturday" . PHP_EOL;   // Output Saturday 
    case 7:
    	echo "Sunday" . PHP_EOL;     // Output Sunday 
     // etc through day 7
    }
