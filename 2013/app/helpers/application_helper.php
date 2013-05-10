<?php
/*
*  @author Gabriel F. Vilar (@cogumm)
*  @date 19/05/2011
*  application_helper.php
*/

include_once 'config/includes.php';
include_once 'galeria_helper.php';
?>
<?php 
	// Licença
	function license_info(){
		return "Copyright 2008 - " . date(Y) .  " CoGUMm.net - 5 anos de pura emoção!";
	};
	
	// Google Analitycs
	function ga() {
		// Preencher com o código com Google Analitycs
		$au = '';
		
		if ($au == '') {
			echo '';
		}else{
			$googleAnalitycs = "
				<script type=\"text/javascript\">
				
					var _gaq = _gaq || [];
					_gaq.push(['_setAccount', '". $au ."']);
				 	_gaq.push(['_trackPageview']);
				 	
				 	(function() {
				  	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				   	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				   	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				 	})();
				</script>";
			return $googleAnalitycs;
		}
	}
?>
