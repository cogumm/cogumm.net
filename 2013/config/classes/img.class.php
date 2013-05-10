<?
/**
* Classe de Manipulação de Imagem
* @autor Mayron Cachina
*/

class Imagem {

	/**
	* Upload de arquivos para uma pasta
	*
	* @param string $foto Arquivo 
	* @param string $pasta Pasta de destino
	* @return boolean 0 = falha, string = Nome do arquivo
	*/
	function upload($foto, $pasta){
		$arquivo = isset($foto) ? $foto : false;
		$nome_temporario = $arquivo['tmp_name'];
		$nome_arquivo = $arquivo['name'];
		$nome_real = md5(rand()).substr($nome_arquivo, (strlen($nome_arquivo)-4), 4);
		if (!is_dir($pasta))
			@mkdir($pasta);
		@chmod(substr($pasta,0,(strlen($pasta) - 1)), 0777);
		if (move_uploaded_file($nome_temporario,$pasta.$nome_real) == true) {
			@chmod($pasta.$nome_real,0777);
			return $nome_real;			
		} else	return false;
	}
	
	/**
	* Upload de arquivos para uma pasta com limite de tamanho
	*
	* @param string $foto Arquivo 
	* @param string $pasta Pasta de destino
	* @param string $width Tamanho máx. da Largura
	* @param string $heigth Tamanho máx. da Altura
	* @return boolean 0 = falha, string = Nome do arquivo
	*/
	function uploadLimit($foto, $pasta, $width=1024, $height=768){
		$arquivo = isset($foto) ? $foto : FALSE;
		$nome_temporario = $arquivo['tmp_name'];
		$nome_arquivo = $arquivo['name'];
		
		list($x, $y) = getimagesize($nome_temporario);
		if( $width >= $x && $height >= $y ){	
			$nome_real = md5(rand()).substr($nome_arquivo, (strlen($nome_arquivo)-4), 4);
			if (!is_dir($pasta))
				@mkdir($pasta);
			@chmod(substr($pasta,0,(strlen($pasta) - 1)), 0777);
			if (move_uploaded_file($nome_temporario,$pasta.$nome_real) == true) {
				@chmod($pasta.$nome_real,0777);
				return $nome_real;			
			} else	return false;
		}else{
			return "Tamanho Max: $width x $height";
		}
	}	

	/**
	* Upload de arquivos para uma pasta com thumb
	*
	* @param string $foto Arquivo 
	* @param string $pasta Pasta de destino
	* @param string $largura Tamanho máx. da Largura
	* @param string $qualidade Qualidade da imagem
	* @return boolean 0 = falha, string = Nome do arquivo
	*/
	function uploadThumb($foto, $pasta, $largura = 320, $qualidade = 100){
		$arquivo = isset($foto) ? $foto : false;
		
		$nome_temporario = $arquivo['tmp_name'];
		$nome_arquivo = $arquivo['name'];

		$nome_real = md5(rand()).substr($nome_arquivo, (strlen($nome_arquivo)-4), 4);
		if (!is_dir($pasta))
			@mkdir($pasta);
		@chmod(substr($pasta,0,(strlen($pasta) - 1)), 0777);
		
		if (move_uploaded_file($nome_temporario,$pasta.$nome_real) == true) {
			@chmod($pasta.$nome_real,0777);
			$this->geraThumb($pasta.$nome_real, $pasta, $nome_real, $largura, $qualidade);
			return $nome_real;			
		} else	return false;
	}
	
	/**
	* Gerar Thumb
	*
	* @param string $foto Arquivo 
	* @param string $pasta Pasta de destino
	* @param string $nome Nome do arquivo
	* @param string $largura_alvo 
	* @param string $qualidade Qualidade da foto
	* @return jpg
	*/	
	function geraThumb($img, $pasta, $nome, $largura_alvo = 320, $qualidade = 100){
		$image = imagecreatefromjpeg($img);
		 
		$largura_original = imagesX($image);
		$altura_original = imagesY($image);
		$altura_nova = (int) ($altura_original * $largura_alvo)/$largura_original;
		$nova = ImageCreateTrueColor($largura_alvo,$altura_nova);
		imagecopyresampled($nova, $image, 0, 0, 0, 0, $largura_alvo, $altura_nova, $largura_original,  $altura_original);
		imagejpeg($nova, $pasta.'th_'.$nome, $qualidade);
		@chmod($pasta.'th_'.$nome,0777);
	}
}
?>
