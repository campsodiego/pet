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
	$config['dbname'] = 'pet';	  //<!-- Nome do banco -->
	$config['host'] = 'localhost'; //<!-- Nome do host -->
	$config['dbuser'] = 'root'; 	  //<!-- Nome do usurio -->
	$config['dbpass'] = '';		  //<!-- Senha -->
}