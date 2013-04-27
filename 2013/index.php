<?
	// Não edite/exclua esse include.
	include_once 'config/includes.php';
?>
<?
	/*
	 * Include da estrutura do HTML.
	 * Ver "app/views/shares/"
	 */
	include_once 'app/views/shared/_html_head.php';
	include_once 'app/views/shared/_header.php';
?>
  <body>
    <div>
    	<div>
        <?php include_once 'app/views/shared/_menu.php'; ?>
        <div>
        	<a href="/">
        		<img alt="" src="public/img/logos/logopositivo.png" id="" />
        	</a>
        </div>
      </div>
      <!-- end #menu -->
    <div>
      <div>
        <div>
          <div>
          <!-- Content -->
            <?php
              // KISS: Keep It Simple, Stupid (Mantenha-o simples, estúpido)
              if (!empty($_GET['page'])) {
                $page = $_GET['page'];
                // Listando todas os meus arquivos '.php' nos diretórios padrões
                $file = 'public/' . $page . '.php';
                $file2 = 'app/views/' . $page . '.php';
                $file3 = 'app/views/pages/' . $page . '.php';
                $file4 = 'app/views/pages/internas/' . $page . '.php';

                if (file_exists($file)){
                  require_once $file;
                }
                elseif (file_exists($file2)){
                  require_once $file2;
                }
                elseif (file_exists($file3)){
                  require_once $file3;
                }
              	elseif (file_exists($file4)){
                  require_once $file4;
                }
                else
                  require_once 'public/404.php';
                }else{
                // Diretório padrão 'home.php'
                $file = dirname(__FILE__) . DIRECTORY_SEPARATOR .'app/views/home.php';
                if (file_exists($file)){
                  require_once $file;
                }
              }
            ?>
          <!-- Content -->
          <div style="clear: both;">&nbsp;</div>
        </div>
        <div style="clear: both;">&nbsp;</div>
      </div>
      </div>
    </div>
    <!-- end #page -->
    </div>
    <div>
      <div>
        <?php include_once 'app/views/shared/_footer.php'; ?>
      </div>
      <div id="footer">
        <p><?= license_info() ?></p>
      </div>
      <!-- end #footer -->
    </div>
    <!-- Google Analitycs -->
    <?=ga()?>
    <!-- Google Analitycs -->
    <div style="clear: both;">&nbsp;</div>
  </body>
</html>
