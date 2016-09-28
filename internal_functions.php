<?php
echo "hello" . PHP_EOL;
// TODO: Create your inspect() function here
function inspect($fx) {	
		echo "I made it past here" . PHP_EOL;


switch (gettype($fx)) {

	case 'integer':
		echo "$fx is an integer." . PHP_EOL; 
			break;
	case 'float': 
		echo "$fx is a float." . PHP_EOL;
		 	break;
	case 'bool':
		echo "$fx is boolean." . PHP_EOL;
		 	break;
	case 'array': 
		echo "$fx is an array." . PHP_EOL;
		 	break;
	case 'empty':
		echo "$fx is empty." . PHP_EOL;
		 	break;
	case 'string':
		echo "$fx is a string." . PHP_EOL;
		 	break;
	case 'numeric':
		echo "$fx is numeric." . PHP_EOL;
		 	break;
	case 'object':
		echo "$fx is an object." . PHP_EOL;
		 	break;
	case 'scalar':
		echo "$fx is scalar." . PHP_EOL;
		 	break;
	case 'resource':
		echo "$fx is a resource." . PHP_EOL;
		 	break;
	case 'callable':
		echo "$fx is callable." . PHP_EOL;
			break;
	case 'settype': 
		echo "$fx is settype." . PHP_EOL;
	}

	echo "hi" . PHP_EOL;

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

}


// echo 'Inspecting $num1:' . PHP_EOL;

// echo 'Inspecting $num2:' . PHP_EOL;

// echo 'Inspecting $num3:' . PHP_EOL;

// echo 'Inspecting $num4:' . PHP_EOL;

// echo 'Inspecting $null:' . PHP_EOL;

// echo 'Inspecting $bool1' . PHP_EOL;

// echo 'Inspecting $bool2' . PHP_EOL;

// echo 'Inspecting $string1' . PHP_EOL;

// echo 'Inspecting $string2' . PHP_EOL;

// echo 'Inspecting $array1' . PHP_EOL;

// echo 'Inspecting $array2' . PHP_EOL;
