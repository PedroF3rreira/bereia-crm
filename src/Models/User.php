<?php 
namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
	
	function __construct()
	{
		parent::__construct('users',['user_name','email','password'],'id', false);
	}
}