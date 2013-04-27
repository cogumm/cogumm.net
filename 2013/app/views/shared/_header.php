<head>
	<?php include_once 'app/views/shared/_meta.php'; ?>
	<title><?=$title?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?=$server?>public/img/favicon.ico" />
  <link rel="icon" type="image/gif" href="<?=$server?>public/img/animated_favicon1.gif" />

	<?php
		$arquivos = array('style.css', 'ui.css', 'slidertron.css', 'anythingslider.css', 'sedes.css', 'bootstrap.css', 'bootstrap-responsive.css');
		$utils->carregaCss($arquivos);
	?>

	<?php include_once 'app/views/shared/_includeJS.php'; ?>

</head>
