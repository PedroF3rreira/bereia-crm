<?php 
namespace Source\App;

use League\Plates\Engine;
use Source\Models\Menber;
use Source\Help\LoginHelp;

class WebController
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

	public function home($data)
	{
		$menbers_number = (new Menber())->find->count();

		echo $this->view->render('home', [
			'title' => 'home | bereia',
			'menbers_number' => $menbers_number,
			'user_name' => $_SESSION['user_name'],
			'token' => $_SESSION['token']
		]);
	}
}