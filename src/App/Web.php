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
		$this->router = $router;
		$this->view = new Engine(__DIR__."/../../theme", "php");
	}

	public function home($data)
	{

		$menbers = (new Menber())->find()->fetch(true);

		echo $this->view->render('home', [
			'title' => 'home | bereia',
			'menbers' => $menbers
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