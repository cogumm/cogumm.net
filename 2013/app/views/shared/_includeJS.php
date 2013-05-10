<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src="app/assets/js/crossbrowser.js" type="text/javascript"></script>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

<?php
	$arquivos = array('jquery.js', 'jquery.nivo.slider.pack.js', 'jquery.isotope.min.js', 'bootstrap-alert.js',
		'formvalidation.js', 'smoothscroll.js', 'html5placeholder.jquery.js');
	$utils->carregaCssJS($arquivos);
?>
