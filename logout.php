<?php
	//CERRAMOS SESION y redireccionamos al INDEX
	SESSION_START();

	SESSION_UNSET();

	SESSION_DESTROY();


   	header('Location: index.php');
  

	?>