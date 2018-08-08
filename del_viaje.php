<?php
	
	session_start();

	require_once "./config/conexion.php";


	$guardo_id =  $_GET['id'];
    $_SESSION['id_post']=$guardo_id;

	if ($conexion == true) 
	{

	$consulta = "DELETE FROM trayecto WHERE id_trayecto = :id_trayecto";

	$resultado=$conexion->prepare($consulta);

	$resultado->execute(array(":id_trayecto"=>$guardo_id));

	$registro=$resultado->fetch(PDO::FETCH_ASSOC);

	 //Cierro la conexión
 		$conexion = null;

 		//Mando alerta y redirección a la página principal
	echo '<script type="text/javascript">
			alert("Se ha eliminado correctamente!");
			window.location.href="index.php";
		</script>';

	} else{
		//Mando alerta y redirección a la página principal
	echo '<script type="text/javascript">
			alert("Algo ha salido mal!");
			window.location.href="index.php";
		</script>';
	}

?>

<script type="text/javascript">
	alert($quesoy);
	window.location.href="index.php";
</script>