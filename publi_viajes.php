r<?php
	session_start();

	//$user = $_SESSION['usuario'];
//	echo "Bienvenido: ".$user;

	if(isset($_SESSION['usuario'])){
		$user=$_SESSION['usuario'];	
    	$nolog="Bienvenido: ".$user;
    }else{
    	$logged="Usuario no logeado.";
    }
?>

<html>
<head>
	<title>Viajes Publicados - uniShare</title>
	<LINK href="./css/home.css" rel="stylesheet" type="text/css">
	<LINK href="./css/cuerpo.css" rel="stylesheet" type="text/css">
    <LINK href="./css/otro.css" rel="stylesheet" type="text/css">
    <LINK href="./css/main.css" rel="stylesheet" type="text/css">
          <!-- CARGO LAS Librerias jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/modViaje.js"></script>
</head>

<body>
	<div class="page">
	<?php include("logohead.php"); ?>

	<div id="maincontent" class="container" role="main">   

    <div id="search-layout" class="row">
        

        <div class="span9">
            <div id="search-results">
                
<div class="RegularSearch">
                

    <!-- Llamo al Ajax gracias al JS, jj_modificarViaje.php -->
        <div class="cuerpo_viajes" id="cuerpo_viajes">
        </div> 
        
            </div>

            </div>
        </div>
    </div>

                    </div>
    </div>
    
            </div>
<?php include("footer.php"); ?>

	</div>
</body>


</html>