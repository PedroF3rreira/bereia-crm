<?php 
namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Menber extends DataLayer
{
	
	function __construct()
	{
		parent::__construct('menbers',['name'],'id',false);
	}
}