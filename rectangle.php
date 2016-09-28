<?php

//  Create an instance of a class called Rectangle, set variables for height and width. 

class Rectangle
{
	public $height;
	public $width;

	public function __construct($height, $width)
	{
		$this->height = $height;
		$this->width = $width;
	}
//  We want to determine the overall area of the object:
//  area is equal to height multiplied by width. If the sides are uneven in area, 
	// you might have a rectangle. 
	public function area()
	{
		return $this->height * $this->width;
		// echo "The height is" . $this->height . "and the width is" . $this->width;
	} 
		// area();
// We want to test whether this is a rectangle or not:
// 	If the height isn't equal to the width, then you have a rectangle.
//  If the sides are equal you have a square. 
	// function isSquare(){
	// 	if ($this->height == $this $width) {
	// 		return true;
	// 		echo "This is a Rectangle";
	// 	} else {
	// 		return false;
	// 		echo "Sorry, you should check your dimensions and try again";
	// 	}
	// }
}


