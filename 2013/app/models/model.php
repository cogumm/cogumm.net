<?php

require_once $server . 'config/config.php';
require_once $server . 'config/classes/connection.class.php';

class Model {
	public $conexao;

	function __construct() {
		$this->conexao = new Mysql();
	}

	//Função para pegar os campos da tabela
	function describeTable (){
		$classe = strtolower(get_class($this));
		$model = $this->conexao->sql("DESCRIBE $classe");

		while($row = $this->conexao->fetchAll($model)){
			$field[] = $row['Field'];
		}

		return $field;
	}

	function deleteById($id){
		$classe = strtolower(get_class($this));
		$model = $this->describeTable();
		$nome_id = $model[0];
		return $this->conexao->sql("delete from $classe where $nome_id = $id");
	}
	
	function find(){
		$classe = strtolower(get_class($this));
		return $this->conexao->sql("select * from $classe");
	}
	
	function findById($id){
		$classe = strtolower(get_class($this));
		$model = $this->describeTable();
		$where = $model[0];
		return $this->conexao->fetchAll($this->conexao->sql("select * from $classe where $where = $id"));
	}
	
	/*
	 * Retorna o proximo id válido
	 */
	function nextVal(){
		$classe = strtolower(get_class($this));
		$model = $this->describeTable();
		$id = $model[0];
		$arr = $this->conexao->fetchAll($this->conexao->sql("select max($id)+1 as max from $classe"));
		return $arr['max'];		
	}	

	function save($post){
		$classe = strtolower(get_class($this));
		$model = $this->describeTable();
		
		foreach($model as $chave => $valor){
			if(array_key_exists($valor, $post)){
				$fields[] = $valor;
			}
		}

		if(!in_array($model[0], $fields)){
			$sql = "insert into $classe(";
			$sql .= implode(',',$fields);
			$sql .= ") values('";
			$sql .= implode('\',\'',$post);
			$sql .= "')";
		}else{
			$sql  = "update $classe set ";
			foreach( $post as $campo=>$valor ){
				if(in_array( $campo, $model )){
					$campos[] = $campo. " = '". $valor ."' ";
				}
			}
			$sql .= implode(',',$campos);
			$sql .= " where ".$model[0]." = ".$post[key($post)];
		}
		return $this->conexao->sql($sql);
	}	

}


?>
