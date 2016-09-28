<?php

/////////////////////////////////////////////////////////////////
// 1. Download and save search-arrays.php to your exercises directory. Commit each step in git and push to GitHub at the end of the exercise.
///////////////////////////////////////////////////


$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function casInsensitiveSearch($array, $searchterm)
{
	foreach($names as $index => $value) {
		if(strtolower($query) ==  strtolower($value)) {
			return $query;
		}
	}	
}

	return false;

$query = 'dana';


/////////////////////////////////////////////////////////////////
// 2. Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.
///////////////////////////////////////////////////


// $query = 'Dana';

// $result = array_search($query, $names);

// if ($result !== false) {
// 	echo "True". PHP_EOL;
// 		// echo  "I found $names[$result]. Which number would you like to call $names[$result] mobile or $names[$result] home?" . PHP_EOL; 
// } else { 
// 	echo "False" . PHP_EOL;
// 		// echo "I'm sorry I did not find $query, would you like me to search another contact?" . PHP_EOL;
// }
 // or you could write:
 // $result = array_search($query, $names);
 // return $result !== false;

/////////////////////////////////////////////////////////////////
// 3. Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().
///////////////////////////////////////////////////

// $result = array_search($names, $compare);
	

// if ($names == $compare) {
// 		echo "We have $names in common." . PHP_EOL; {
// 	} else {
// 		echo "We don't have any names in common." . PHP_EOL;

// 	}

// }
// function compareArrays($names, $compare)
// // Keep a count of common elements
// $count = 0;
// // Loop through one array for every item:
// foreach ($names as $value) {
// 	if ($result($compare, $value)) {
// 		$count =+1;
// 	}
// }

// // return the count:
// return $count;