<?php
require 'conexion.php';

session_start();

$cliente = $_POST['usuario'];
$apellido = $_POST['apellido'];

$q = "SELECT count(*) as contar  from clientes where clientes = '$cliente' and apellido = '$apellido'";

$consulta = mysqli_query($conexion, $q);
$array = mysqli_fetch_array($consulta);

if($array['contar'] > 0) {
          $_SESSION['clientes'] = $cliente;
          header("location: ../menu.php");
}
else {
          echo "Error, los datos son incorrectos";
}


?>