<?php

// Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
    case 1:
         // Output Monday
    case 2:
         // Output Tuesday
    case 3:
    	 // Output Wednesday 
    case 4:
    	 // Output Thursday 
    case 5:
     	 // Output Friday 
    case 6:
    	 // Output Saturday 
    case 7:
    	 // Output Sunday 
     // etc through day 7
 }