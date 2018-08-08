<?php

	session_start();

	require_once "../config/conexion.php";


	$sql = "SELECT * FROM trayecto WHERE id_usuario = :id_usuario";
	
	//$ejecutado=mysqli_query($conexion,$sql2);
 //$row=mysqli_fetch_array($ejecutado);
 //preparo la consulta SQL
 $resultado=$conexion->prepare($sql);

 $id_user=$_SESSION['id_usuario'];
 //ejecuto la consulta SQL y compruebo que el id de usuario es igual al usuario que tengo en la base de datos,
 // Así solamente yo puedo ver mis Viajes.
 $resultado->execute(array(":id_usuario"=>$id_user));

 //almaceno el resultado en un array asociativo y lo recorro
 echo "<tr>";
 echo "<th>ID</th>";

 echo "<th>idU</th>";
 echo "<th>Ciudad</th>";
 echo "<th>Universidad</th>";
 echo "<th>Ciudad de paso</th>";
 echo "<th>Fecha IDA</th>";
 echo "<th>fEcha Vuelta</th>";
 echo "<th>Hora Ida</th>";
 echo "<th>Hora Vuelta</th>";
 echo "<th>Plazas</th>";
 echo "<th>Detalles</th>"; 
 echo "<th>Precio</th>";
 echo "<th>Editar</th>";
 echo "<th>Eliminar</th>";
 echo "</tr>";

 while($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
 	echo "<tr>";
    echo "<td>" .$registro['id_trayecto']. "</td>"; //Obtengo el id del trayecto
	echo "<td>" .$registro['id_usuario']. "</td>";    
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
	echo "<td> <a href='./mod_viaje.php?id=".$registro['id_trayecto']."'> <button type='button'> Modificar</button> </a></td>";
	echo "<td> <a href='./del_viaje.php?id=".$registro['id_trayecto']."'> <button type='button'> Eliminar</button> </a></td>";

    echo "</tr>";

 }

	echo "voy a modificar los viajes";

?>