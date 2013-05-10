<head>
	<?php include_once 'app/views/shared/_meta.php'; ?>
	<title><?=$title?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?=$server?>/app/assets/img/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=$server?>app/assets/img/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=$server?>app/assets/img/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=$server?>app/assets/img/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?=$server?>app/assets/ico/apple-touch-icon-57-precomposed.png">

	<?php
		$arquivos = array('style.css', 'style-responsive.css');
		$utils->carregaCssJS($arquivos);
	?>

	<?php include_once 'app/views/shared/_includeJS.php'; ?>

</head>
