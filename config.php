<?php 
require 'environment.php';

global $config;
$config = array();
if (ENVIRONMENT == "development") { 						
	$config['dbname'] = 'pet'; 	  
	$config['host'] = 'localhost'; //<!-- Nome do host -->
	$config['dbuser'] = 'root';	  //<!-- Nome do usurio -->
	$config['dbpass'] = ''; 		  //<!-- Senha -->
} else { 													
	$config['dbname'] = 'u806877487_pet';	  //<!-- Nome do banco -->
	$config['host'] = 'mysql.hostinger.com.br'; //<!-- Nome do host -->
	$config['dbuser'] = 'u806877487_diego'; 	  //<!-- Nome do usurio -->
	$config['dbpass'] = 'Gahecamo8973';		  //<!-- Senha -->
}