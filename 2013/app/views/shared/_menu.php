<?php
/*
 *  @author Gabriel F. Vilar (@cogumm)
 *  @date 20/05/2011
 *  _menu.php
 *  Adicionar todas os seus menus aqui.
 */
?>

<div class="span3">
	<div class="well sidebar-nav sidebar-nav-fixed">
		<div class="logo">
			<!-- Logo --><a href="#home">@CoGUMm</a>
		</div>
		<ul>
			<!-- MENU - Note that "#..." is the anchor id. Each one should correspond to our id sections below.
            ================================================== -->
			<li><a class="home" href="#home"><?= $T_HOME ?></a></li>
			<li class="description"><?= $D_HOME ?></li>
			
			<li><a class="about" href="#about"><?= $T_ABOUT ?></a></li>
			<li class="description">I'm Batman</li>
			
			<li><a class="services" href="#services"><?= $T_SERVICE ?></a></li>
			<li class="description">Ò.ó</li>
			
			<li><a class="portofolio" href="#portofolio"><?= $T_PORTFOLIO_LABS ?></a></li>
			<li class="description">brincadeiras</li>
			
			<li><a class="contact" href="#contact"><?= $T_CONTACT ?></a></li>
			<li class="description">drinks ?</li>

      <li><a class="contact" href="/blog"><?= $T_BLOG ?></a></li>
			<li class="description">nas horas vagas</li>
		</ul>
		<div class="social">
			<a href="#" target="_blank"><img src="app/assets/img/facebook.png" alt=""></a>
			<a href="#" target="_blank"><img src="app/assets/img/twitter.png" alt=""></a>
      <a href="#" target="_blank"><img src="app/assets/img/github.png" alt=""></a>
		</div>
	</div>
</div>
