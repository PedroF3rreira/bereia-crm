<?php 
namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class ClassName extends DataLayer
{
	
	function __construct()
	{
		parent::__construct('adresses', ['user_id'],'id',false);
	}

	public function FunctionName(User $user, $rua)
	{
		
	}
}