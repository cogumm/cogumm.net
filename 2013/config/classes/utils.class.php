<?php
/*
 * Classe de utilidades
 * Descricao: Aqui encontrão as funções mais utilizadas no projeto para auxilio do desenvolvimento
 * */
class Utils {

	/**
	 * @return Date
	 * @desc Arruma a data para o padrão do Banco
	 */
	function replaceDate($date){
		$replace = str_replace("/", "-",$date);
		return date('Y-m-d',strtotime($replace));
	}

	/**
	 * @return Date
	 * @desc Transforma a data no Padrão "D/M/Y"
	 */
	function formatDate($data){
		return 	date('d/m/Y', strtotime($data));
	}

	/**
	 * @return Date
	 * @desc Transforma a data no Padrão "D.M.Y"
	 */
	function formatDatePonto($data){
		return 	date('d.m.Y', strtotime($data));
	}

	function verificaData($data, $op = '>=') {
		$partes = explode('/', $data);
		$data1 = strtotime($partes[1]."/".$partes[0]."/".$partes[2]);
		$partes = explode('/', date('d/m/Y'));
		$data_atual = strtotime($partes[1]."/".$partes[0]."/".$partes[2]);
		switch ($op) {
			case '>=' :
				$result = $data1 >= $data_atual ? true : false;
				break;
			case '>' :
				$result = $data1 > $data_atual ? true : false;
				break;
			case '=' :
				$result = $data1 = $data_atual ? true : false;
				break;
			case '<' :
				$result = $data1 < $data_atual ? true : false;
				break;
			case '<=' :
				$result = $data1 <= $data_atual ? true : false;
				break;
		}
		return $result;
	}

	/**
	 * Valida se a data é válida
	 * 
	 * 1 = true (válida)
	 * 0 = false (inválida)
	 * @param $dat
	 * @return unknown_type
	 */
	public static function validaData($dat){
		$data = explode("/","$dat");
		$d = $data[0];
		$m = $data[1];
		$y = $data[2];
		return checkdate($m,$d,$y);
	}


	//  4 April 2009
	function mesNumPT($dataStr){
		$array = explode(' ',$dataStr);
		$s = '';
		switch($array[0]) {
			case "1":  $s = "Janeiro";   break;
			case "2":  $s = "Fevereiro"; break;
			case "3":  $s = "Março";     break;
			case "4":  $s = "Abril";     break;
			case "5":  $s = "Maio";      break;
			case "6":  $s = "Junho";     break;
			case "7":  $s = "Julho";     break;
			case "8":  $s = "Agosto";    break;
			case "9":  $s = "Setembro";  break;
			case "10": $s = "Outubro";   break;
			case "11": $s = "Novembro";  break;
			case "12": $s = "Dezembro";  break;
		}
		return array('mes' => $s.' '.$array[2], 'link' => $array[1].'-'.$array[2]);
	}

	// JUN
	function mesBR($dataStr){
		var_dump($dataStr == "MAY",$dataStr,"MAY");
		if($dataStr == "MAY"){
			echo "MAI";
		}
		/*if($dataStr == "FEB") return "FEV";
		 if($dataStr == "APR") return "ABR";
		 if($dataStr == "MAY") echo "MAI";
		 if($dataStr == "AUG") return "AGO";
		 if($dataStr == "SEP") return "SET";
		 if($dataStr == "OCT") return "OUT";
		 if($dataStr == "DEC") return "DEZ";*/

	}


	function getArquivo() {
		$array = explode('/', $_SERVER['SCRIPT_NAME']);
		$ultimo = count($array) - 1;
		return $array[$ultimo];
	}

	function rm_recurse($file) {
		if (is_dir($file) && !is_link($file)) {
			foreach(glob($file.'/*') as $sf) {
				if ( !$this->rm_recurse($sf) ) {
					error_log("Failed to remove $sf\n");
					return false;
				}
			}
			return rmdir($file);
		} else {
			return unlink($file);
		}
	}

	function enviaMailComentario($nome = '',$assunto = '',$email){
		if(mail($email,$assunto,$mensagem)){
			return true;
		}else{
			return false;
		}
	}

		function recurse_chown_chgrp($mypath, $uid, $gid){
			$d = opendir ($mypath) ;
			while(($file = readdir($d)) !== false) {
				if ($file != "." && $file != "..") {
				$typepath = $mypath . "/" . $file ;
				
				//print $typepath. " : " . filetype ($typepath). "<BR>" ;
				}elseif (filetype ($typepath) == 'dir') {
					recurse_chown_chgrp ($typepath, $uid, $gid);
				}
					chown($typepath, $uid);
					chgrp($typepath, $gid);
			}
		}

		/**
		 * Gera senha atraves de uma lista de caracteres
		 * @param $list
		 * @param $length
		 * @return unknown_type
		 */
		function geraSenha($list = 'abcdxywzABCDZYWZ0123456789', $length = 10){
			$CaracteresAceitos = $list;
			$max = strlen($CaracteresAceitos)-1;
			$password = null;
			for($i=0; $i < $length; $i++) {
				$password .= $CaracteresAceitos{mt_rand(0, $max)};
			}
			return $password;
		}

	/**
	 * Validar se string é e-mail
	 * @param $email
	 * @return boolean
	 */
	function validarEmail($email){
		if (preg_match('/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/',$email)) {
			return true;
		}else{
			return false;
		}
	}

	/**
	 * Carrega um array de arquivos css
	 * e imprime o cabeçalho.
	 * @param $arquivos
	 * @return string
	 * @Author Mayron
	 * LOG:
	 *	28-04-13 => CoGUMm: Atualizado classe para carregar corretamente os arquivos CSS e JS na nova estrutura do Framework
	 */
    function carregaCssJS($arquivos){
        foreach($arquivos as $item){
            if(substr($item,-3) == 'css'){
        	    echo "<link href=\"".$server."app/assets/css/$item\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">\n";
        	}else{
        	    echo "<script type=\"text/javascript\" src=\"".$server."app/assets/js/$item\"></script>\n";
        	}
        }
    }
}
?>
