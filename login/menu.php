<?php

session_start();
$cliente = $_SESSION['nombre'];

?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<div class="ejercicio">
    
			<center><img width="200" src="img/logo-emp.jpg"></center><br>
            <center>
			<button type="button" class="btn btn-default btn-block" onclick="window.location.href='clientes/opcion_clientes.php' ">Gestionar Clientes</button>
			<a href="login/logout.php" type="button" class="btn btn-info  btn-block"  >Cerrar Sesión</a>
			</center>

        </div>
    </div>    

</body>
</html>