<?php
/*
* Classe de Conexao com MySQL
* Descricao: Classe que realiza conexao com o banco de dados. 
*
*
* ########   EXEMPLO  #########
* $con = new Mysql();
* $sql = $con->sql("select * from tabela");
* $con->fetchAll($sql);
* $con->fetchArray($sql);
*
* */

class Mysql {
	// Nunca utilizar 'localhost' em aplicações reais
	var $host = "localhost";
	var $user = "root";
	var $pass = "root";
	var $db   = "";
	var $ultimo_id;
	var $query;
	var $link;
	var $result;
	
	/**
	* @return MySQL
	* @desc Construtor da classe MySQL.
	*/
	function Mysql(){}
	/**
	* @return null
	* @desc Seta uma nova conexão
	* @exemple - $con->setConexao('localhost','kki','12345','banco');
	*/
	function setConexao($host,$user,$pass,$db){
		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->pass = $db;
	}
	/**
	* @return void
	* @desc Método que Conecta ao Servidor e seleciona Banco de Dados.
	*/
	function connect(){
		$this->link = mysql_connect($this->host,$this->user,$this->pass);
		if(!$this->link){
			echo "Erro na Conexão.<br />"
				."<strong>MySQL retornou: </strong> ".mysql_error()."<br />";
			die();
		} elseif (!mysql_select_db($this->db, $this->link)){
			echo "Erro na seleção do Banco de Dados.<br>"
				."<b>MySQL retornou: </b> ".mysql_error()."<br>";
			die();
		}
	}
	/**
	* @return Resultado
	* @param String $query
	* @desc Recebe query SQL, executa e retorna resultado, se houver erro retorna 0.
	* @exemple - $con->sql("select * from tabela");
	*/
	function sql($query){
		$this->connect();
		$this->query = $query;
		if($this->result=mysql_query($this->query)){
			$this->ultimo_id = mysql_insert_id($this->link);
			$this->disconnect();
			return $this->result;
		} else {
			die("Ocorreu um erro ao executar a Query SQL abaixo:<br>$query<<br><br><b>MySQL Retornou: ".mysql_error()."<b>");
			$this->disconnect();
		} 
	}
	/**
	* @return Array
	* @param Resource $result 
	* @desc Retorna uma Matriz de Array
	* @exemple - $con->fetchAll($sql)
	*/   
	function fetchAll($result){
		return mysql_fetch_assoc($result);      
	}
	/**
	* @return Array
	* @param Resource $result 
	* @desc Retorna uma Matriz de Array
	* @exemple - $con->fetchArray($sql)
	*/   
	function fetchArray($result){
		return mysql_fetch_array($result);      
	}   
	/**
	* @return Array
	* @param Resource $result 
	* @desc Retorna um Array elementos
	* @exemple - $con->fetchRow($sql)
	*/   
	function fetchRow($result){
		return mysql_fetch_row($result);      
	}
	/**
	* @return Object
	* @param Resource $result 
	* @desc Retorna um Objeto
	* @exemple - $con->fetchObj($sql)
	*/   
	function fetchObj($result){
		return mysql_fetch_object($result);      
	}	
	/**
	* @return int
	* @param Resource $result 
	* @desc Retorna o número de linhas
	* @exemple - $con->fetchRow($sql)
	*/   
	function numRows($result){
		return mysql_num_rows($result);      
	}   
	/**
	* @return String
	* @param Resource $result 
	* @desc Retorna espaços em branco do resource
	* @exemple - $con->escapeString($sql)
	*/   
	function escapeString($result){
		return mysql_escape_string($result);      
	} 
	/**
	* @return int
	* @param Resource $result 
	* @desc Retorna o ultimo ID da operação de insert.
	* @exemple - $con->insertId()
	*/   
	function insertId($result){
		return mysql_insert_id();      
	} 
	/**
	* @return mysql_close
	* @desc Desconecta do servidor
	*/
	function disconnect(){
		return mysql_close($this->link);
	}
}

?>
