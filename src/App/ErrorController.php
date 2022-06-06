<?php 
namespace Source\App;


class ErrorController
{
	
	public function notFound($data)
	{
		echo "<h1>Erro {$data['errcode']}</h1>";
	}
}