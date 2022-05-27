<?php 
namespace Source\App;

use League\Plates\Engine;
use Source\Models\Menber;

class Web
{
	private $router;
	private $view;

	function __construct($router)
	{
		$_SESSION['usuario'] = "Pedro Daniel";
		$this->router = $router;
		$this->view = new Engine(__DIR__."/../../theme", "php");
		
		if(!isset($_SESSION['usuario'])){
			$this->router->redirect("login");
		}
	}

	public function home($data)
	{

		$menbers_number = (new Menber())->find->count();

		echo $this->view->render('home', [
			'title' => 'home | bereia',
			'menbers_number' => $menbers_number
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
	public function add($data)
	{
		var_dump($data);

		$this->view->render('cadastro',[
			'title' => 'cadastro | bereia',
		]);
	}
}