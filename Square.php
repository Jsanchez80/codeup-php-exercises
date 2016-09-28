<?php

require 'Rectangle.php';
// require 'Rectangle.php';

 class Square extends Rectangle
{
	private $height;
	private $width;

	public function __construct($height, $width)
	{
		$this->height = $height;
		$this->width = $width;
	}

	// public function area()
	// {
	// 	return $this->height * $this->width;

	// } 
}





	


