<?php

for ($i = 1; $i <= 100; $i++) {
	echo "$i" * "$i" . PHP_EOL; {
		if ($i % 2 == 1){
		continue;
	}
	echo "I'm an even number" . PHP_EOL;
}
}

// ----------------------------------------------------------
// ---------------------------------------------------------
// -------------------------------------------------------
// -----------------------------------------------------
// ----------------------------------------------------

for ($i =1; $i < 100; $i++){
	echo "$i" . PHP_EOL;
		if ($i == 10) {
			break;
		}
}

// for ($i =0; $i < 200; $i +5);{
// 	echo "$i is in the second loop" . PHP_EOL;
// 		if ($i == 20);
// 			echo "$i is the magic" . PHP_EOL;
// 		continue;
// }