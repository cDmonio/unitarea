<?php
	session_start();

	//$usuario=$_SESSION['usuario'];
	
	//if($usuario != ""){
	//	header("location: 'Location: xml_get_current_byte_index(parser).php'");
	//}
		$login_activo="activo";

	    if(isset($_SESSION["usuario"])){
    	  header('Location: index.php');
    	}
?>

<html>
	<head>
	<title>Iniciar Sesión - uniShare</title>
	<LINK href="./css/home.css" rel="stylesheet" type="text/css">
	<LINK href="./css/login.css" rel="stylesheet" type="text/css">
	</head>

	<body>


		<?php include("logohead.php"); ?>
		<main class="mainContent relative">
			<div class>
				<div>
					<div class>
						<div>
							<form class="wrapper small-only:heightMax" action="./funciones/check_login.php" method="post">							<h1 class="kirk-title theVoice">¡Introduce tu email y contraseña!</h1>
								<div class="jsx-2564806001 kirk-textField mb-l">
									<div class="jsx-2564806001 kirk-textField-wrapper">
									
										<input type="email" name="email" id="email" placeholder="Email" class="jsx-2564806001 " required/>

									</div>
								</div>

									<div class="jsx-2564806001 kirk-textField mb-m">
										<div class="jsx-2564806001 kirk-textField-wrapper">
											<input type="password" name="password" id="password" placeholder="Contraseña" class="jsx-2564806001 " required/>
										</div>
									</div>
									<div class="button-wrapper m-xl fixed text-center">
										<button class="kirk-button kirk-button-primary" type="submit" title>
											<span class="jsx-4075288211">Iniciar Sesión</span>
										</button>
									</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</main>

	</body>
</html>