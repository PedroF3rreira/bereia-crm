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

	/**
	 * @param  String $data 
	 * @return void 
	 */
	public function register($data)
	{
		$flash = "";
		$menber_exist = (new Menber())->find("cpf = :cpf","cpf={$data['cpf']}")->fetch(); 
		
		if(!empty($data)){
			if ($menber_exist === null) {
				
				$m = new Menber();
				$m->full_name = $data['full_name'];
				$m->cel = $data['cel'];
				$m->cpf = $data['cpf'];
				$m->email = $data['email'];
				$m->birthday = $data['birthday'];
				$m->type = $data['type'];

				if($m->save()){
					$flash = "Cadastro realizado com suscesso!";
				}	
			}
			else{
				$flash = "Este cpf ou email já consta no sistema";
			}
		}
		

		echo $this->view->render('menbers/register',[
			'title' => 'Registrar Menbros',
			'user_name' => $_SESSION['user_name'],
			'flash' => $flash,
		]);
	}
}