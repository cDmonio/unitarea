
	<div class="navegar">
		<ul>
			<li><a href="index.php">Inicio</li>
			<?php if(isset($_SESSION['usuario'])){
			} else{ ?>

				<?php if(!isset($login_activo)){ ?>
					<li><a href="login.php">Iniciar Sesión</a></li>
				<?php } ?>

				<?php if(!isset($registro_activo)){ ?>
					<li><a href="registro.php">Registrar</a></li>
					<?php } ?>

			<?php } ?>

			<?php if(isset($_SESSION['usuario'])){ ?>

				<?php if(!isset($insertar_activo)){ ?>
			<li><a href="insertar.php">Publicar Viaje</a></li>
					<?php } ?>

			<li><a href="logout.php">Cerrar Sesión</a></li>
			<?php } ?>

		</ul>
	</div>
