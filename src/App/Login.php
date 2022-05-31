<?php 
namespace Source\App;

use League\Plates\Engine;
use Source\Models\User;
use Source\Help\LoginHelp;

class Login
{
	private $router;
	private $view;

	function __construct($router)
	{
		$this->router = $router;
		$this->view = new Engine(__DIR__."/../../theme", "php");
	}

	public function Login($data)
	{
		if(!empty($data)){
			if(LoginHelp::singin($data['user_name']) !== ''){
				echo $this->router->redirect('/');
			}
			else{
				echo $this->router->redirect('/login');
			}
		}
		echo $this->view->render('login');
	}

	public function logout()
	{
		if(isset($_SESSION['token'])){
			unset($_SESSION['token']);
			unset($_SESSION['username']);
		}

		$this->router->redirect('/');
	}
}