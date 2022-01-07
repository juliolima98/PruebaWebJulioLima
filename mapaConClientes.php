<?php
session_start();  //Mantengo la sesion activa mientras el usuario ande activo
if(empty($_SESSION['txtUsuario'])){	//Valido si esta vacia y lo redirecciono a la pagina de login
	echo header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mapa Clientes</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
	  	#map {
        height: 100%;
        width: 100%
        }
     
        html, body {
        height: 100%;
        margin: 0;
        padding: 30px;
        }
	</style>
</head>
<body>
<div class="container">
  <div class="alert alert-info">
		<div class="alert alert-success">
			<h1><?php echo "Bienvenido ".$_SESSION['txtUsuario'];   ?></h1>
		</div>
		<div class="alert alert-info">
			<span><h1>Vista de mapa de Clientes</h1></span>
		</div>
	<nav class="navbar navbar-inverse bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="menu.php">Inicio</a>
			</div>
			
			<ul class="nav navbar-nav">
			<li class="active"><a href="tablaNombresClientes.php">Tabla con nombres y ubicaciones de clientes</a></li>
				<li><a href="mapaCalor.php">Mapa de Calor</a></li>
				<li><a href="cerrar.php">Cerrar Sesion</a></li>
			</ul>
		</div>
	</nav>
  </div>
  </div>

	<form id="map"> 
	<script>
		   var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), { //Creacion del mapa de google maps
          center: {lat: 13.705243, lng: -89.24231},
          zoom: 15
        });

        //Creacion de marcadores para los distintos puntos con sus coordenadas

           var marker1 = new google.maps.Marker({		
          position: {lat: 13.705243, lng: -89.24231},
          map: map,
	  title: 'Punto 1/Latitud: 13.705243// Longitud: -89.24231'
        });

          var marker2 = new google.maps.Marker({
          position: {lat: 13.696674, lng: -89.197927},
          map: map,
	  title: 'Punto 2//Latitud: 13.696674// Longitud: -89.197927'
        });

          var marker3 = new google.maps.Marker({
          position: {lat: 14.692511, lng: -87.86136},
          map: map,
	  title: 'Punto 3// Latitud: 14.692511// Longitud: -87.86136'
        });

          var marker4 = new google.maps.Marker({
          position: {lat: 12.022747, lng: -86.252007},
          map: map,
	  title: 'Punto 4// Latitud: 12.022747// Longitud: -86.252007'
        });

          var marker5 = new google.maps.Marker({
          position: {lat: 8.103289, lng: -80.596013},
          map: map,
	  title: 'Punto 5// Latitud: 8.103289// Longitud: -80.596013'
        });

          //Asignacion de constantes a utilizar

          document.cookie="latitud1=13.705243";
          document.cookie="longitud1=-89.24231";

          document.cookie="latitud2=13.696674";
          document.cookie="longitud2=-89.197927";

          document.cookie="latitud3=14.692511";
          document.cookie="longitud3=-87.86136";

          document.cookie="latitud4=12.022747";
          document.cookie="longitud4=-86.252007";

          document.cookie="latitud5=8.103289";
          document.cookie="longitud5=-80.596013";
      }
	</script>
	<?php 
		//Guardo el valor de las cookies de javascript en variables de php
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
	<!-- Script que carga la api de google maps !-->
	    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjyM0CyjiksJbMk4SVzZTz-Uzn5QusoRE&callback=initMap">
    </script>


</form>
</body>
</html>