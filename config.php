<?php 
require 'environment.php';
$config = array();
if (ENVIRONMENT == "development") { 						<!-- Dados do servidor de desenvolvimento -->
	$config['dbname'] = 'pet' 	  <!-- Nome do banco -->
	$config['host'] = 'localhost' <!-- Nome do host -->
	$config['dbuser'] = 'root' 	  <!-- Nome do usurio -->
	$config['dbpass'] = '' 		  <!-- Senha -->
} else { 													<!-- Dados do servidor de produção -->
	$config['dbname'] = 'pet' 	  <!-- Nome do banco -->
	$config['host'] = 'localhost' <!-- Nome do host -->
	$config['dbuser'] = 'root' 	  <!-- Nome do usurio -->
	$config['dbpass'] = '' 		  <!-- Senha -->
}