<?php

//  Exercise for Late Static Binding

// ////////////////////////////////////////////////////
// Using the self::$table returns three data arrays with the same name...the parent over-rides the it's children and reports only data relevant to it's file. 


require_once 'User.php';

class Model
{
	protected static $table = ['Dan', 'Kirk', 'Hector', 'Dewayne', 'Rachel'];

	public static function getTableName()
	{

	return self::$table;

	}
}



