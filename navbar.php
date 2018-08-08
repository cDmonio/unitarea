  <nav class="Header-navigation js-site-menu">  
  	<?php if(!isset($insertar_activo)){ ?>
    	<?php if(isset($_SESSION['usuario'])){ 

    			$user=$_SESSION['usuario'];	
    			echo $logein="Bienvenido: <b>".$user."</b>";
			?>
        <ul class="Header-navigationList u-reset u-inlineBlock">
             <li class="Header-navigationItem">
                <a href="./insertar.php" class="Header-navigationButton c-button c-button--primary">
                    <span class="Header-navigationButton-icon">
                    </span>Publicar viaje</a>
            </li>
        </ul>
   	 <?php } ?>
    <?php } ?>    


	    <ul class="Header-navigationList u-reset u-inlineBlock">
			<?php if(!isset($_SESSION['usuario'])){
				echo $nologin= "Bienvenido: <b> Visitante</b>";
			 ?>

	    	<?php if(!isset($registro_activo)){ ?>
		    <li class="Header-navigationItem">
		        <a href="registro.php" class="Header-navigationText">Registrarse</a>
		    </li>
		    	<?php } ?>

		    	<?php if(!isset($login_activo)){ ?>
	        <li class="Header-navigationItem">
	            <a href="login.php" class="Header-navigationText" role="button">Iniciar sesión</a>
	        </li>
	        	<?php } ?>
	        	

	        	<?php
	        } else{
	        ?>
	       	<li class="Header-navigationItem">
		        <a href="publi_viajes.php" class="Header-navigationText">Viajes Publicados</a>
		    </li>
	        <li class="Header-navigationItem">
		        <a href="logout.php" class="Header-navigationText">Cerrar Sesión</a>
		    </li>
			<?php } ?>


	    </ul>
    </nav>