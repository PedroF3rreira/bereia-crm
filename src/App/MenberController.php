<?php 
namespace Source\App;

use League\Plates\Engine;
use Source\Models\Menber;
use Source\Help\LoginHelp;

class MenberController
{
	private $router;
	private $view;

	function __construct($router)
	{
		$this->router = $router;
		$this->view = new Engine(__DIR__."/../../theme", "php");
		
		if(!isset($_SESSION['token'])){
			$this->router->redirect("login");
		}
	}

	public function register($data)
	{
		if(!empty($data)){
			$m = new Menber();
			$m->first_name = $data['first_name'];
			$m->lsta_name = $data['last_name'];
		}

		echo $this->view->render('menbers/register',[
			'title' => 'Registrar Menbros',
			'user_name' => $_SESSION['user_name']
		]);
	}
}