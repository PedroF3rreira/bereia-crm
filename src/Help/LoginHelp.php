<?php 
namespace Source\Help;

use Source\Models\User;

class LoginHelp
{
	
	public static function singin($user_name, $password):string
	{

		$token = '';

		$data = (new User())->find(
			"user_name = :name", 
			"name={$user_name}")
		->fetch();
		
		if(!empty($data)){
			$token = md5($data->user_name.rand(0,12000));
			
			
			$data->token = $token;
			$data->save();

			$_SESSION['token'] = $data->token;
			$_SESSION['user_name'] = $data->user_name;

			return $token;
		}
		
		return $token;		
	}
}