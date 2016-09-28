<?php
/////////////////////////////////////////////////////////////////////////
// 1. Create the $famousFakePhysicists string that lists the physicists and contains the "and" at the end.
//////////////////////////////////////////////////////

// $famousFakePhysicists = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, and Tony Stark';



// 

//  echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;

 function humanizedList($string) {
 	$physicistsArray = explode(', ', $famousFakePhysicists) . PHP_EOL;
 	print_r($physicistsArray);
 }


 // echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";