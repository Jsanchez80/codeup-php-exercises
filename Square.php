<?php

require 'Rectangle.php';
// require 'Rectangle.php';

 class Square extends Rectangle
{
	private $height;
	private $width;

	public function __construct($height)
	{
		$this->setHeight($height);
		$this->setWidth($height);
	}


	// public function area()
	// {
	// 	return $this->getHeight() * $this->getWidth();

	// } 

	public function perimeter()
	{
		return ($this->getHeight() *2) + ($this->getWidth() * 2);

	} 

}





	


