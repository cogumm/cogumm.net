<?php
/*
*  @author Gabriel F. Vilar (@cogumm)
*  @date 19/05/2011
*  boot.php
*/
?>
<?php 

/**
 * Set the default Language
 */

include_once('lang/pt-BR.php'); // default language

if(isset($_GET['lang']))
{
	$LANG = clear_path($_GET['lang']);
	setcookie('LW_LANG', $LANG, time() + 365 * 86400);
}
elseif(isset($_COOKIE['LW_LANG']))
{
	$LANG = clear_path($_COOKIE['LW_LANG']);
}
else
{
	list($LANG) = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
}

if(
	(@include("$LANG_DIR$LANG.php") === false ) && 
	(@include($LANG_DIR . substr($LANG, 0, 2) . '.php') === false)
)
{
	$LANG = 'en';
}

?>