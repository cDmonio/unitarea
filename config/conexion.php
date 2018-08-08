<?php  
//configuracion de la conexion
$servidor = 'localhost';
$base_datos = 'unishare';
$usuario = 'root';
$password = '';

//establezco la conexion con PDO en este caso para MySQL
$conexion = new PDO("mysql:host=$servidor; dbname=$base_datos", $usuario, $password);
	
//aplico el español	
$conexion->exec("SET CHARACTER SET utf8");
?>