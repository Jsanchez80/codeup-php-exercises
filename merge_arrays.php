<?php 

/////////////////////////////////////////////////////////////////
// 1. Copy search-arrays.php and rename it merge-arrays.php
///////////////////////////////////////////////////

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

/////////////////////////////////////////////////////////////////
// 2. Write a function called combine_arrays() that will take in two array values as parameters and return a new array with values from both.
//////////////////////////////////////////////////////////
// $combine_arrays = array();
// 	array_push($names, $compare);
		// print_r($names);
		// print_r($compare);

function combine_array($array1, $array2) 
{
	$solArray = [];

		if(count($array1) >= count($array2)){
			$largerArray = $array1;
			$shortArray = $array2;
		} else {
			$largerArray = $array2;
			$shortArray = $array1;
		}

		foreach ($largerArray as $key =>$value) 
		{
			if(in_array($value, $shortArray)){
				array_push($solArray, $value);
			} else {
				array_push($solArray, $value);
				if(isset($shortArray[$key])){
					array_push($solArray, $shortArray[$key]);
				}
			}
		}
			return $solArray;
	}
		print_r(combineArrays($names, $compare));
	// foreach($names as $key=> $value) {
	// 	echo "$names";
	// 	if (array_search($names) !== array_search($compare)) {
	// 		echo $names . "has a duplicate value; Removing duplicate." . PHP_EOL;	
	// 	} else 
	// 		echo "hello" . PHP_EOL;
	// 	}


////////////////////////////////////////////////////////////////
// a. If the arrays have the same value at the same index, then it should only be added once.
/////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////
// b. If the values differ, then the value from the first array should be added and then the second.
/////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////
// c. The function will need to use at least two of the array functions we discussed: array_shift(), array_unshift(), array_push(), and array_pop().
///////////////////////////////////////////////////









/////////////////////////////////////////////////////////////////
// 3. Test your combine_arrays() function with $names and $compare. The resulting array should look like:
//////////////////////////////////////////////////////////
// Solution:




///////////////////////////////////////////////////