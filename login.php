<!DOCTYPE html>
<html>
<head>
	<title>Pantalla de Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<!-- Creacion de formulario !-->
	<div class="container">
		<div class="jumbotron text-center">
			<h1>Login</h1>
		</div>
			<form method="post" action="#" class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-2">Nombre de usuario:</label>
				 		<div class="col-sm-10">
				 			<input type="text" class="form-control" name="txtUsuario" placeholder="Nombre de usuario">
				 		</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Clave:</label>
						<div class="col-sm-10">
						 	<input type="password" class="form-control" name="txtClave" placeholder="Clave de usuario">
						 </div>
				</div>
					   <input type="submit" name="btnIngresar" value="Ingresar" class="btn btn-primary btn-lg"><br>
			</form>
	</div>
	
	<!-- Codigo PHP !-->
	<?php
		//Validacion si los campos text de usuario y clave no van vacios
		if(isset($_POST['txtUsuario']) && isset($_POST['txtClave'])){
			$usuario=$_POST['txtUsuario']; //Asignacion de variables
			$clave=$_POST['txtClave'];
			
			if($usuario == 'prueba' && $clave=='12345') //Validacion de usuario y clave son correctas
			{
				session_start();   					//Creacion de session para el usuario logeado
				$_SESSION['txtUsuario']=$usuario;
				echo header('location:menu.php');			//Redireccion a la pagina de menu al usuario
			}
			else
			{
				echo "<script>alert('Los datos ingresados no son correctos, intentelo de nuevo por favor')</script>";   //Mensaje de error mostrado al usuario al haber error en credenciales
			}
		}

	 ?>

</body>
</html>