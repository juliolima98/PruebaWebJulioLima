<?php

session_start();  //Mantengo la sesion activa mientras el usuario ande activo
if(empty($_SESSION['txtUsuario'])){	//Valido si esta vacia y lo redirecciono a la pagina de login
	echo header("location:login.php");
}

		$latitud1 = $_COOKIE['latitud1'];
		$longitud1 = $_COOKIE['longitud1'];

		$latitud2 = $_COOKIE['latitud2'];
		$longitud2 = $_COOKIE['longitud2'];

		$latitud3 = $_COOKIE['latitud3'];
		$longitud3 = $_COOKIE['longitud3'];

		$latitud4 = $_COOKIE['latitud4'];
		$longitud4 = $_COOKIE['longitud4'];

		$latitud5 = $_COOKIE['latitud5'];
		$longitud5 = $_COOKIE['longitud5'];

	   ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tabla con Clientes</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
  <div class="alert alert-info">
		<div class="alert alert-success">
			<h1><?php echo "Bienvenido ".$_SESSION['txtUsuario'];  ?></h1>
		</div>
		<div class="alert alert-info">
			<span><h1>Vista de tabla de nombres de clientes</h1></span>
		</div>
	<nav class="navbar navbar-inverse bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="menu.php">Inicio</a>
			</div>
			
			<ul class="nav navbar-nav">
			<li class="active"><a href="mapaConClientes.php">Mapa de clientes</a></li>
				<li><a href="mapaCalor.php">Mapa de Calor</a></li>
				<li><a href="cerrar.php">Cerrar Sesion</a></li>
			</ul>
		</div>
	</nav>
  </div>
  <div>
  	<form>
  	<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Latitud</th>
        <th>Longitud</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Punto 1</td>
        <td><?php echo $latitud1;  ?></td>
        <td><?php echo $longitud1; ?></td>
	  </tr>
	  <tr>
        <td>Punto 2</td>
        <td><?php echo $latitud2;  ?></td>
        <td><?php echo $longitud2; ?></td>
	  </tr>
        <td>Punto 3</td>
        <td><?php echo $latitud3;  ?></td>
        <td><?php echo $longitud3; ?></td>
	   <tr>
        <td>Punto 4</td>
        <td><?php echo $latitud4;  ?></td>
        <td><?php echo $longitud4; ?></td>
	   </tr>
	   <tr>
        <td>Punto 5</td>
        <td><?php echo $latitud5;  ?></td>
        <td><?php echo $longitud5; ?></td>
      </tr>
    </tbody>
  </table>
  </div>
  	</form>
  </div>

</body>
</html>