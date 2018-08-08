<?php
	session_start();

	//$usuario=$_SESSION['usuario'];
	
	//if($usuario != ""){
	//	header("location: 'Location: xml_get_current_byte_index(parser).php'");
	//}
		$registro_activo="activo";
		
	    if(isset($_SESSION["usuario"])){
    	  header('Location: index.php');
    }
?>

<html>
	<head>
	<title>Registro de Usuario - uniShare</title>
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
							<form class="wrapper small-only:heightMax" action="./funciones/form_registro.php" method="post">							<h1>¡Introduce tu email y contraseña!</h1>
								<div class="jsx-2564806001 kirk-textField mb-l">
									<div class="jsx-2564806001 kirk-textField-wrapper">
										<input type="text" name="nom_completo" id="nom_completo" placeholder="Nombre Completo" class="jsx-2564806001" required/>
									</div>
								</div>

								<div class="jsx-2564806001 kirk-textField mb-l">
									<div class="jsx-2564806001 kirk-textField-wrapper">
										<input type="date" name="fecha_nac" id="fecha_nac" placeholder="Fecha Nacimiento" class="jsx-2564806001" required/>
									</div>
								</div>

								<div class="jsx-2564806001 kirk-textField mb-l">
									<div class="jsx-2564806001 kirk-textField-wrapper">
										<input type="email" name="email" id="email" placeholder="Email" class="jsx-2564806001" required/>
									</div>
								</div>

								<div class="jsx-2564806001 kirk-textField mb-m">
									<div class="jsx-2564806001 kirk-textField-wrapper">
										<input type="password" name="password" id="password" placeholder="Contraseña" class="jsx-2564806001" required/>
									</div>
								</div>

								<div class="jsx-2564806001 kirk-textField mb-l">
									<div class="jsx-2564806001 kirk-textField-wrapper">
										<input type="text" name="ciudad" id="ciudad" placeholder="Ciudad"  class="jsx-2564806001" required/>
									</div>
								</div>

								<div class="jsx-2564806001 kirk-textField mb-l">
									<div class="jsx-2564806001 kirk-textField-wrapper">
										<input type="text" name="poblacion" id="poblacion" placeholder="Poblacion" class="jsx-2564806001" required/>
									</div>
								</div>

								<div class="jsx-2564806001 kirk-textField mb-l">
									<div class="jsx-2564806001 kirk-textField-wrapper">
										<input type="text" name="cod_postal" id="cod_postal" placeholder="Cod Postal" class="jsx-2564806001" required/>
									</div>
								</div>

								<div class="jsx-2564806001 kirk-textField mb-l">
									<div class="jsx-2564806001 kirk-textField-wrapper">
										<input type="text" name="universidad" id="universidad" placeholder="Universidad" class="jsx-2564806001" required/>
									</div>
								</div>

							<div align="center">
								<div class="jsx-2564806001 kirk-textField mb-l>
									<div class="jsx-2564806001 kirk-textField-wrapper">
									<input type="radio" value="hombre" id="hombre" name="sexo" checked/>
									<label for="hombre" class="radio" chec>Hombre</label>

									<input type="radio" value="mujer" id="mujer" name="sexo" />
									<label for="mujer" class="radio">Mujer</label>
									</div>
								</div>
							</div>
									<br>
										<div align="center">
										<button class="kirk-button kirk-button-primary" type="submit" value="registro" title>
											<span class="jsx-4075288211">Registrar</span>
										</button>
										</div>
							</form>
							<br><br>
						</div>
					</div>
					<br><br>
				</div>
			</div>
		</main>

</body>

</html>