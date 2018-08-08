<?php
//Llamo sólo una vez a conexion.php para hacer la conexion a la base de datos.
	require_once "../config/conexion.php";

echo "<br> <b>ID usuario: </b>";
echo $id_usuario = $_POST['id_usuario'];

echo "<br> <b>Ciudad Salida: </b>";
echo $ubi_salida_trayecto = $_POST['cSalida'];

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
?>