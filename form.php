<?php
/*
obligo a este fichero a usar mis datos de
acceso a la base de datos, lo hago sólamente 1na vez.
*/
	require_once "./config/conexion.php";


//antes de nada obtengo la contraseña y la cifro para insertarla
$password = $_POST['password'];

//y ahora cifro la password usando un hash
$password_cifrada = password_hash($password, PASSWORD_DEFAULT, array("cost"=>15));

/*
el "cost" lo que indica es la fuerza con la que se cifra la password
a mayor fuerza mas tiempo de carga requiere la página por eso es
importante que busques un equilibrio
*/

/*
compruebo que la conexion es correcta
y de ser asi hago el insert
*/
if ($conexion == true) {
	
 //preparo el insert...
 $insert = $conexion->prepare("INSERT INTO usuarios (nom_completo, email, password, ciudad, poblacion, cod_postal, universidad, fecha_nac) VALUES (:nom_completo, :email, :password, :ciudad, :poblacion, :cod_postal, :universidad, :fecha_nac, :sexo)");

 //asocio los campos del insert a los campos del formulario
 $insert->bindParam(':nom_completo', $_POST['nombre']);
 $insert->bindParam(':email', $_POST['email']);
 $insert->bindParam(':password', $_POST['password']);
 $insert->bindParam(':ciudad', $_POST['ciudad']);
 $insert->bindParam(':poblacion', $_POST['poblacion']);
 $insert->bindParam(':cod_postal', $_POST['cod_postal']);
 $insert->bindParam(':universidad', $_POST['universidad']);
 $insert->bindParam(':fecha_nac', $_POST['fecha_nac']);
 $insert->bindParam(':sexo', $_POST['sexo']);

 //si no he echo el imbecil y todo esta correcto ejecuto lo anterior
 $insert->execute();

 //cierro la conexion
 $conexion = null;

 //redirijo a otro archivo php
 header('Location: index.php');
} else {
 echo "Algo ha fallado bro";
}
?>