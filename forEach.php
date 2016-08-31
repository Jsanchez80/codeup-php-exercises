<?php
///////////////////////////////////////////////////////////////////////
// TABLE OF CONTENTS//////////////////////////////////////////////
//  1. Create a file named forEach.php in your exercise directory. Commit 	each step and push to Github 
//  2. Construct a loop that iterates through each value and outputs its type as either integer, float, boolean, array, null, or string.
//  3. Construct a loop that iterates through each value and outputs only values with a type that is scalar.
//  4. Create a loop that will echo out every value, including those nested in arrays. Output should look like this.
///////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////
// ANSWERS: //////////////////////////////////////////////////////
//  2. ////////////////////////////////////////////////////
////////////////////////////////////////////////////
//  3.  In order to accomplish the goal of Question 3, remove all exchos except the echo on line 39.
////////////////////////////////////////////////////
//  4.  In order to accomplish the goal of Question 4, remove the "strings" you have in the echo and replace {$thing} with "value" for items containing numeric value.
// ///////////////////////////////////////////      


$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing) {

	if (is_array($thing)) {
		foreach($thing as $value) {
			echo "$value" . PHP_EOL;
		}
}	else if (is_bool($thing)) {
		echo "{$thing} is boolean" . PHP_EOL;
}	else if (is_float($thing)) {
		echo "{$thing} is a float" . PHP_EOL;
}	else if (is_double($thing)) {
		echo "{$thing} is an alias of float" . PHP_EOL;
}	else if (is_real($thing)) {
		echo "{$thing} is real. An alias of float" . PHP_EOL;
}	else if (is_int($thing)) {
		echo "{$thing} is an integer" . PHP_EOL;
} 	else if (is_integer($thing)) {
		echo "{$thing} is an alias of integer" . PHP_EOL;
}	else if (is_long($thing)) {
		echo "{$thing} is long, an alias of integer" . PHP_EOL;
}	else if (is_null($thing)) {
		echo "{$thing} is null" . PHP_EOL;
}	else if ( is_numeric($thing)) {
		echo "{$thing} is numeric (a type of float or integer)" . PHP_EOL;
}	else if (is_scalar($thing)) {
		echo "{$thing} is scalar (a type of float, integer, string or boolean)" . PHP_EOL;
} 	else if (is_string($thing)) {
		echo "{$thing} is a string" . PHP_EOL;
}
}