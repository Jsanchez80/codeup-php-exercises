<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing) {

	if (is_array($thing)) {
		echo "{$thing} is an array" . PHP_EOL;
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
		echo "{$thing} is numeric(a type of float or integer" . PHP_EOL;
}	else if (is_scalar($thing)) {
		echo "{$thing} is scalar (a type of float, integer, string or boolean" . PHP_EOL;
} 	else if (is_string($thing)) {
		echo "{$thing} is a string" . PHP_EOL;
}
}