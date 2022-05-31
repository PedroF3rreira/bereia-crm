<?php 

session_start();

require "vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(ROOT_URL);

//caminho namespace do controllers
$router->namespace("Source\App");


//definindo grupo padão de rotas
$router->group(null);
$router->get("/","Web:home");
$router->post("/contato","Web:contact");
$router->delete("/contato","Web:contact");
$router->get("/contato","Web:contact");
$router->get("/cadastro","Web:add");
$router->post("/cadastro","Web:add");

$router->group('login');
$router->get('/',"Login:login");
$router->post('/',"Login:login");
$router->get('/sair',"Login:logout");

//define grupo rota de erros
$router->group("opss");
$router->get("/{errcode}","Error:notFound");

//chama o dispatch para assim iniciar os redirecionamentos
$router->dispatch();

//trata de erros de rota
if($router->error()){
	$router->redirect("/opss/{$router->error()}");
}