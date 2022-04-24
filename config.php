<?php
require 'environment.php';


$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/sistemaControle/");
	$config['dbname'] = 'sistemacontrole';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "https://goalbrasil.com.br/sistemaControle/");
	$config['dbname'] = 'u167359261_sistemacontrol';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'u167359261_sistemacontrol';
	$config['dbpass'] = 'Souza1@@';
}

global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}