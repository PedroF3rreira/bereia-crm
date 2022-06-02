<?php 
namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Menber extends DataLayer
{
	
	function __construct()
	{
		parent::__construct('menbers',['first_name', 'last_name','birthday','type'],'id',true);
	}
}