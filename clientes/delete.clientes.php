<?php 
if (isset($_GET['id'])){
	include ('../conexion.php');
	$cliente = new basedatos();
	$id=intval($_GET['idclientes']);
	$res = $cliente->eliminar_clientes($id);
	if($res){
	
		echo'<script type="text/javascript">
    	alert("Registro  eliminado correctamente");
   		window.location.href="opcion_clientes.php";
    	</script>';


	}else{
		echo "Error al eliminar el registro de la categoría";
	}
}
?>