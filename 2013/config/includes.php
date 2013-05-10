<?php
/*
 * Arquivo onde devem se encontrar todos os includes importantes da sua aplicação.
 */
	include_once 'config.php';
	include_once 'boot.php';
	
	/*
	 * Seus includes
	 */
	// Classe de utilidades
	include_once 'config/classes/utils.class.php';
	$utils = new Utils();
	
	// Helpers
	include_once 'app/helpers/application_helper.php';
	include_once 'app/helpers/galeria_helper.php';
?>
