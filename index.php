<?php
	session_start();

	//$user = $_SESSION['usuario'];
	//	echo "Bienvenido: ".$user;
	require_once "./config/conexion.php";

	if(isset($_SESSION['usuario'])){
		$user=$_SESSION['usuario'];	
    	$nolog="Bienvenido: ".$user;
    }else{
    	$logged="Usuario no logeado.";
    }


?>

<html>
<head>
	<title>Inicio del Programa</title>
	<LINK href="./css/home.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php include("logohead.php"); ?>

	<div class="busqueda">
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
			<b> Ciudad Origen </b>
			<input type="text" id="cIda" name="cIda"/> <br>

			<b> Universidad de Destino  </b>
			<input type="text" id="uDestino" name="uDestino"/> <br>



			<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
		</form>

	</div>

	<div class="cuerpo">
		<?php if (isset($_POST['cIda'])){


			 $cIda=$_POST['cIda'];
			 $uDestino=$_POST['uDestino'];

			$sql = "SELECT * FROM trayecto WHERE ubi_salida_trayecto = :ubi_salida_trayecto AND uni_seleccion = :uni_seleccion";
	
				//$ejecutado=mysqli_query($conexion,$sql2);
			 //$row=mysqli_fetch_array($ejecutado);
			 //preparo la consulta SQL
			 $resultado=$conexion->prepare($sql);


			 //ejecuto la consulta SQL y compruebo la ciudad de origen y la universidad a la que quoted_printable_encode(str)ro ir.
			 $resultado->execute(array(":ubi_salida_trayecto"=>$cIda,":uni_seleccion"=>$uDestino));

			 echo "<center>";
			 while($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
			 	echo "<tr>";   
				echo "<td>" .$registro['ubi_salida_trayecto']. "</td>";
				echo "<td>" .$registro['uni_seleccion']. "</td>";
				echo "<td>" .$registro['ubi_paso_trayecto']. "</td>";
				echo "<td>" .$registro['fecha_trayecto_ida']. "</td>";
				echo "<td>" .$registro['fecha_trayecto_vuelta']. "</td>";
				echo "<td>" .$registro['hora_trayecto_ida']. "</td>";
				echo "<td>" .$registro['hora_trayecto_vuelta']. "</td>";
				echo "<td>" .$registro['plazas_trayecto']. "</td>";
				echo "<td>" .$registro['detalles_trayecto']. "</td>";
				echo "<td>" .$registro['precio_trayecto']. "</td>";
			    echo "</tr>";

 				}
 				echo "</center>";
			 } ?>
	</div>

</body>


</html>