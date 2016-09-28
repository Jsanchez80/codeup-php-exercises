<?php

require 'Rectangle.php';
// require 'Rectangle.php';

 class Square extends Rectangle
{

	public function __construct($height)
	{
		$this->setHeight($height);
		$this->setWidth($height);
	}

}





	


