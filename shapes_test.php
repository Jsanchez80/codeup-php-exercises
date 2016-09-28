<?php
// Remember to link the proper reference points: I was linking Rectangle.php here, which worked when I only had the Rectangle.php to work from. Since I've created a secondary file titled Square.php and trying to reference shapes_test.php from the Square.php file...it wasn't linking up properly.  I literally inverted the two file references and the program operated accordingly. 

require_once 'Square.php';


$rectangle = new Rectangle(7, 5);
echo "the area is " . $rectangle->area() . PHP_EOL;

// My Solution:
$square = new Square(4, 4);
echo "The area of this square is " . $square->area() . PHP_EOL; 
echo 'The perimeter of the square is ' . $square->perimeter() . PHP_EOL;

// Cams Solution:
// $square = new Square(5, 5);
// echo 'The area of the square is ' . $square->area() . PHP_EOL;
// echo 'The perimeter of the square is ' . $square->perimeter() . PHP_EOL;


