<?php
session_start();  //Mantengo la sesion activa mientras el usuario ande activo
if(empty($_SESSION['txtUsuario'])){	//Valido si esta vacia y lo redirecciono a la pagina de login
	echo header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu Principal</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container">
  <div class="alert alert-info">
		<div class="alert alert-success">
			<h1><?php echo "Bienvenido ".$_SESSION['txtUsuario'];   ?></h1>
		</div>

	<nav class="navbar navbar-inverse bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="menu.php">Inicio</a>
			</div>
			
			<ul class="nav navbar-nav">
				<li class="active"><a href="mapaConClientes.php">Mapa de clientes</a></li>
				<li><a href="tablaNombresClientes.php">Tabla con nombres y ubicaciones de clientes</a></li>
				<li><a href="mapaCalor.php">Mapa de Calor</a></li>
				<li><a href="cerrar.php">Cerrar Sesion</a></li>
			</ul>
		</div>
	</nav>
  </div>
</div>
</body>
</html>