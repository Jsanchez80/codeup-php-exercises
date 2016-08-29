<?php

$x = 0;
$y = 5;
$z = 10;

// TODO:
if (($x < $y) && ($y < $z)) { //then 

echo "{$x} < {$y} < {$z}\n";

}
// TODO:
// If 0 is less than $x OR $x is less than 10 // then echo the result as a sentence 
if (0 < $x || $x < 10) {

echo "0 is less than {$x} OR {$x} is less than 10" . PHP_EOL;

}

// TODO:
// repeat the if statement for $y and $z.


if (0 < $y || $y < 10) {

echo "0 is less than {$y} OR {$y} is less than 10". PHP_EOL;

}

if (0 < $z || $z < 10) {

echo "0 is less than {$z} OR {$z} is less than 10" . PHP_EOL;

}

// TODO:
// If 0 is less than $x AND $x is less than 10
// then echo the result as a sentence "0 is less than {$x} AND {$x} is less than 10".
if (is_numeric($x)) {
	echo "The value of \$x is numeric" . PHP_EOL;

}

if(is_bool($x)) {

	echo "The data type of \$x is a boolean" . PHP_EOL;
}

// TODO:
// repeat the if statement for $y and $z.


