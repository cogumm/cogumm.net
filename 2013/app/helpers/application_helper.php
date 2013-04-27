<?php
/*
*  @author Gabriel F. Vilar (@cogumm)
*  @date 19/05/2011
*  application_helper.php
*/

include_once 'config/includes.php';

?>
<?php 
	// Licença
	function license_info(){
		return "2012 - " . date(Y) .  " Sukyo Mahikari do Brasil";
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
