<?php
/*
 *  @author Gabriel F. Vilar (@cogumm)
 *  @date 20/05/2011
 *  _menu.php
 *  Adicionar todas os seus menus aqui.
 */
?>

<ul>
  <li <?=$_GET['page']=="" ? 'class="current_page_item"' : ''?>><a href="<?=$server?>" title="<?=$title?>">Home</a></li>
  <li <?=$_GET['page']=="okiyome" ? 'class="current_page_item"' : ''?>><a href="<?=$server?>?page=okiyome">Purificação (okiyome)</a></li>
  <li <?=$_GET['page']=="planeta" ? 'class="current_page_item"' : ''?>><a href="<?=$server?>?page=planeta">Salvação do Planeta</a></li>
  <li <?=$_GET['page']=="sedes" ? 'class="current_page_item"' : ''?>><a href="<?=$server?>?page=sedes">Sedes</a></li>
  <li <?=$_GET['page']=="faq" ? 'class="current_page_item"' : ''?>><a href="<?=$server?>?page=faq">perguntas</a></li>
</ul>

