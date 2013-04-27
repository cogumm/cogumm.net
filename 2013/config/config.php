<?php
/*
 * Arquivo de configuração da aplicação.
 * 
 */
	session_start();
	
	// Caminho completo do projeto, nesse caso: "http://localhost/androidday/"
	$server = "http://" . $_SERVER['HTTP_HOST'] . "/cgm2013/";
		
	// DRY: Don't repeat yourself (Não repita a si mesmo)
	$title = "CoGUMm.net - Nem melhor, nem pior, apenas diferente!";
	
	$_SESSION['var']['server'] = $server
?>
