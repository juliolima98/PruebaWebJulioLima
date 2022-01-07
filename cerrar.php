<?php
//Destruyo la sesion al momento que el usuario decida salirse de la pagina
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Deslogear</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
		<span class="alert alert-warning">Has cerrado sesion correctamente!, haz click <a href="login.php">aqui </a>para iniciar sesion nuevamente</span>		
</body>
</html>