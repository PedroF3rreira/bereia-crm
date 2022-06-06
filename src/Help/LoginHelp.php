<?php 
namespace Source\Help;

use Source\Models\User;

class LoginHelp
{
	
	public static function singin($user_name, $password):string
	{

		$token = '';
		$hash = password_hash($password, PASSWORD_DEFAULT);

		$user = (new User())->find(
			"user_name = :name",
			"name={$user_name}")
		->fetch();
		
		if(!empty($user)){
			if(password_verify($password, $user->password)){
				
				$token = md5($user->user_name.rand(0,12000));
				$user->token = $token;
				$user->save();

				$_SESSION['token'] = $user->token;
				$_SESSION['user_name'] = $user->user_name;

				return $token;
			}
		}
		
		return $token;		
	}
}