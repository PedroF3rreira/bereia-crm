<?php 

define("ROOT_URL", "http://localhost/bereia-crm");
define("SITE", "A.d Bereia");

//conexão com banco de dados datalayer
const DATA_LAYER_CONFIG = [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "crm",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
];

//função que controi url 
function url($uri = null):string
{
	if($uri){
		return ROOT_URL."/{$uri}";
	}

	return ROOT_URL;
}