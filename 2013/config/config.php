<?php
/*
 * Arquivo de configuração da aplicação.
 * 
 */
	session_start();
	
	// Caminho completo do projeto, nesse caso: "http://localhost/androidday/"
	$server = "http://" . $_SERVER['HTTP_HOST'] . "/publico/cgm2013/";
	
	$_SESSION['var']['server'] = $server
?>
