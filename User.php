<?php


class User extends Model
{
	public static $table = ['Michael', 'Joey', 'Ben', 'Wyatt', 'Jose', 'Liz', 'Joe'];
}

class Guest extends Model
{
	public static $table = ['Dan Ross', 'Justin', 'Mittsy', 'Nico', 'Jessica',];
}

var_dump(Model::getTableName());
var_dump(User::getTableName());
var_dump(Guest::getTableName());