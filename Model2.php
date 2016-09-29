<?php

///  Exercise for Late Static Binding

// ///////////////////////////////////////////////////////////////////////////////
// Using the static::$table returns three data arrays with the different names...the parent allows it's children and to operate and reports data relevant to their files. 
//////////////////////////////////////////////////////////////////////////


require_once 'User.php';

class Model
{
	protected static $table = ['Dan', 'Kirk', 'Hector', 'Dewayne', 'Rachel'];

	public static function getTableName()
	{

	return static::$table;

	}
}



