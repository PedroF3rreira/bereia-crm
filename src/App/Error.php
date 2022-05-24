<?php 
namespace Source\App;


class Error
{
	
	public function notFound($data)
	{
		echo "<h1>Erro {$data['errcode']}</h1>";
	}
}