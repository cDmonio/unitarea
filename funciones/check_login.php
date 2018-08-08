<?php
  session_start();

/*
obligo a este fichero
a usar mis datos de
acceso a la base de datos
*/
	require_once "../config/conexion.php";

try {
 //obtengo los datos del formulario...
 $email=htmlentities(addslashes($_POST['email']));
 $password=htmlentities(addslashes($_POST['password']));

 //variable auxiliar para comprobar que el usuario existe (una forma de hacerlo)
 $contador = 0;

 //almaceno la consulta SQL
 $sql = "SELECT * FROM usuarios WHERE email = :email";
 //$sql2 = "SELECT id FROM usuarios WHERE email = :email";

 //$ejecutado=mysqli_query($conexion,$sql2);
 //$row=mysqli_fetch_array($ejecutado);
 //preparo la consulta SQL
 $resultado=$conexion->prepare($sql);

 //ejecuto la consulta SQL
 $resultado->execute(array(":email"=>$email));

 //almaceno el resultado en un array asociativo y lo recorro
 while($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
  /*
   el metodo password_verify tiene 2 parametros
   el 1º es la clave que se envia por el formulario
   el 2º es el hash de la clave que almacena en la BBDD
   este metodo se utiliza para comprobar si la clave
   coincide o no
  */
  if(password_verify($password, $registro['password'])) {
   /*
    aqui es donde ya harias lo que tu quieras, puedes
    crear una sesión, imprimir html, etc... yo voy a
    incrementar la variable contador
   */
    $_SESSION['usuario']=$_POST['email'];
    $_SESSION['id_usuario']=$registro['id']; //Obtengo el id en la sesión.
    $contador++;
  }
 }

 /*
  si el while ha tenido exito evitendemente hara lo que le pidas
  en este caso yo voy a comprobar la variable contador, si es verdad
  que ha encontrado un usuario con la clave correcta y lo ha incrementado
  entonces existe en caso contrario no existe
 */
 if ($contador>0) {
  echo "El usuario <b>EXISTE</b>";
  header('Location: ../index.php');
 } else {
  echo "el usuario no existe";
 }

 //cierro la conexion
 $conexion = null;
} catch(Exception $e) {
   die($e->getMessage());
}
?>