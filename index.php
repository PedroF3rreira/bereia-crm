<?php 

session_start();

require "vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(ROOT_URL);

//caminho namespace dos controllers
$router->namespace("Source\App");


//definindo grupo padão de rotas

//grupo padao controller WEB
$router->group(null);
$router->get("/","WebController:home");
$router->post("/contato","WebController:contact");
$router->delete("/contato","WebController:contact");
$router->get("/contato","WebController:contact");
$router->get("/cadastro","WebController:add");
$router->post("/cadastro","WebController:add");

//grupo de registro e login controller LOGIN
$router->group("login");
$router->get("/","LoginController:login");
$router->post("/","LoginController:login");
$router->get("/sair","LoginController:logout");
$router->get("/registrar", "LoginController:singup");
$router->get("/registrar", "LoginController:singup");

//grupo da rota de menbros
$router->group("menbros");
$router->get("/registrar","MenberController:register");

//define grupo rota de erros
$router->group("opss");
$router->get("/{errcode}","ErrorController:notFound");

//chama o dispatch para assim iniciar os redirecionamentos
$router->dispatch();

//trata de erros de rota
if($router->error()){
	$router->redirect("/opss/{$router->error()}");
}