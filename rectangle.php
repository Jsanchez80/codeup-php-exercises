<?php

 
class Rectangle
{
	private $height;
	private $width;

	public function __construct($height, $width)
	{
		$this->setHeight($height);
		$this->setWidth($width);
	}


	public function setHeight($height)
	{
		$this->height = trim($height);

	}

	public function setWidth($width)
	{

		$this->width = trim($width);

	}
	
	public function getHeight()
	{
		return $this->height; 

	} 

	public function getWidth()
	{
		return $this->width;
	}

	public function getArea()
	{ 
		return $this->area;
	}

	///////////////////////////////////////////////////////////////////////////
	// This would have worked just fine, but using the get method is the result we're looking for. See the next instance called on area().  
	/////////////////////////////////////////////////////////////////////
	
	// public function area()
	// {
	// 	return (($this->height)*($this->width));
	// }

	public function area()
	{
		return $this->getHeight() * $this->getWidth();

	} 

	public function perimeter()
	{
		return ($this->getHeight() *2) + ($this->getWidth() * 2);

	} 


}



