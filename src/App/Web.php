<?php 
namespace Source\App;

use League\Plates\Engine;
use Source\Models\Menber;
use Source\Help\LoginHelp;

class Web
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

	public function contact($data)
	{
		echo "Contato";
		
		echo $this->view->render('contato',[
			'title' => 'Contato | bereia'
		]);
		var_dump($data);
	}
	
	public function menberRegister($data)
	{

		$this->view->render('cadastro',[
			'title' => 'cadastro | bereia',
		]);
	}
}