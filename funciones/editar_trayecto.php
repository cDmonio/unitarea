<?php
	session_start();
	require_once "../config/conexion.php";

	//me traigo el id del post a este documento para ejercer el update.
	echo $id_trayecto = $_SESSION['id_post'];
//Llamo sólo una vez a conexion.php para hacer la conexion a la base de datos.


echo "<br> <b>ID usuario: </b>";
echo $id_usuario = $_POST['id_usuario'];

echo "<br> <b>Ciudad Salida: </b>";
echo $ubi_salida_trayecto = $_POST['cSalida'];

echo "<br> <b>Ciudades de Paso: </b>";
echo $ubi_paso_trayecto = $_POST['ciuPaso'];

echo "<br> <b>Universidad Destino: </b>";
echo $uni_seleccion = $_POST['dUni'];

echo "<br> <b>Fecha Ida: </b>";
echo $fecha_trayecto_ida = $_POST['fIda'];

//Extraigo hora y minutos.
echo "<br> <b>Hora Ida: </b>";
$fhIda=$_POST['fIda0hora'];
$fmIda=$_POST['fIda0min'];
$hora_trayecto_ida=$fhIda.":".$fmIda;
//Concateno y los muestro en $hora_trayecto_ida;
echo $hora_trayecto_ida;

echo "<br> <b> Fecha Vuelta: </b>";
echo $fecha_trayecto_vuelta = $_POST['fVuelta'];

echo "<br> <b>Hola Vuelta: </b>";

$fVhIda=$_POST['fVuelta0hora'];
$fVmIda=$_POST['fVuelta0min'];
$hora_trayecto_vuelta=$fVhIda.":".$fVmIda;
//Igual que antes.
echo $hora_trayecto_vuelta;

echo "<br> Precio Trayecto: ";
echo $precio_trayecto = $_POST['aporPasajero'];

echo "<br> Plazas Trayecto (máx: 4): ";
echo $plazas_trayecto = $_POST['nPlazas'];

echo "<br> Detalles Trayecto: ";
echo $detalles_trayecto = $_POST['detalles'];


//echo $_POST['id_usuario'];
//Probando guardar viaje.

if ($conexion == true) 
	{
 //preparo el update
 $update = $conexion->prepare("UPDATE trayecto SET id_usuario = :id_usuario, uni_seleccion = :uni_seleccion, ubi_salida_trayecto = :ubi_salida_trayecto, ubi_paso_trayecto = :ubi_paso_trayecto, fecha_trayecto_ida = :fecha_trayecto_ida, fecha_trayecto_vuelta = :fecha_trayecto_vuelta, hora_trayecto_ida = :hora_trayecto_ida, hora_trayecto_vuelta = :hora_trayecto_vuelta, plazas_trayecto = :plazas_trayecto, detalles_trayecto = :detalles_trayecto, precio_trayecto = :precio_trayecto WHERE id_trayecto = :id_trayecto");	
 
  //asocio los campos del update a los campos del formulario
 $update->bindParam(':id_usuario', $id_usuario);
 $update->bindParam(':uni_seleccion', $uni_seleccion);
 $update->bindParam(':ubi_salida_trayecto', $ubi_salida_trayecto);
 $update->bindParam(':ubi_paso_trayecto', $ubi_paso_trayecto);
 $update->bindParam(':fecha_trayecto_ida', $fecha_trayecto_ida);
 $update->bindParam(':fecha_trayecto_vuelta', $fecha_trayecto_vuelta);
 $update->bindParam(':hora_trayecto_ida', $hora_trayecto_ida);
 $update->bindParam(':hora_trayecto_vuelta', $hora_trayecto_vuelta);
 $update->bindParam(':plazas_trayecto', $plazas_trayecto);
 $update->bindParam(':detalles_trayecto', $detalles_trayecto);
 $update->bindParam(':precio_trayecto', $precio_trayecto);
 $update->bindParam(':id_trayecto', $id_trayecto);

 //Si todo está correcto ejecuto lo anterior
 $update->execute();

 //Cierro la conexión
 $conexion = null;

 //Redirijo al index
  Header('Location: ../index.php');
 	echo "se ha updateado correctamente";
	} else{
		echo "Algo ha salido mal!";
	}
?>