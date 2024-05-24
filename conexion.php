<?php

	class basedatos{
		private $con;
		private $dbequipo='restaurante';
		private $dbusuario='root';
		private $dbclave='';
		private $dbnombre='restaurante';
		function __construct(){
			$this->conectar();
		}
		public function conectar(){
			$this->con = mysqli_connect($this->dbequipo, $this->dbusuario, $this->dbclave, $this->dbnombre);
			if(mysqli_connect_error()){
				die("Error: No se pudo conectar a la base de datos: " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}
		public function limpiar_cadena($var){
		  $return = mysqli_real_escape_string($this->con, $var);
		  return $return;
		}
	public function insertar_clientes($nombre,$apellido,){
		$sql = "INSERT INTO clientes (nombre), apellido (apellido)VALUES ('$nombre')";
		$resultado = mysqli_query($this->con, $sql);
		if($resultado){
		  	return true;
		}else{
			return false;
	 	}
	}
	public function seleccionar_clientes($idcliente){
		$sql = "SELECT * FROM clientes where id_cliente=$idcliente ";
		
		$res = mysqli_query($this->con, $sql);
		$return = mysqli_fetch_object($res);
		return $return;
	}
	public function actualizar_clientes($cliente,$idcliente){
		
		$sql = "UPDATE clientes SET nombre='$nombre' WHERE idcliente=$id";
		
		$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
	}
	public function leer_clientes(){
		$sql = "SELECT * FROM clientes";
		$res = mysqli_query($this->con, $sql);
		return $res;
	}
	public function eliminar_clientes($id){
		$sql = "DELETE FROM clientes WHERE clientes=$idcliente";
		$res = mysqli_query($this->con, $sql);
		if($res){
			return true;
		}else{
			return false;
		}
	} 
}
?>