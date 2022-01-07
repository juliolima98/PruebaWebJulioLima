<?php
session_start();  //Mantengo la sesion activa mientras el usuario ande activo
if(empty($_SESSION['txtUsuario'])){	//Valido si esta vacia y lo redirecciono a la pagina de login
	echo header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <title>Mapa de calor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style> 
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
			<span><h1>Vista de mapa de Calor</h1></span>
		</div>
	<nav class="navbar navbar-inverse bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="menu.php">Inicio</a>
			</div>
			
			<ul class="nav navbar-nav">
			<li class="active"><a href="tablaNombresClientes.php">Tabla con nombres y ubicaciones de clientes</a></li>
				<li><a href="mapaConClientes.php">Mapa de clientes</a></li>
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
          zoom: 15,
          mapTypeId: 'satellite'
        });

      
        //Asignacion de coordenadas a obtener sus datos por capas de calor
          var heatmapData = [
          new google.maps.LatLng(13.705243, -89.24231),
          new google.maps.LatLng(13.696674, -89.197927),
          new google.maps.LatLng(14.692511, -87.86136),
          new google.maps.LatLng(12.022747, -86.252007),
          new google.maps.LatLng(8.103289, -80.596013)
          ];

          var heatmap = new google.maps.visualization.HeatmapLayer({
          	data: heatmapData
          });
          heatmap.setMap(map);

      }
	</script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjyM0CyjiksJbMk4SVzZTz-Uzn5QusoRE&libraries=visualization&callback=initMap">
</script>
</form>
</body>
	
</html>