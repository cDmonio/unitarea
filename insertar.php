<?php
	SESSION_START();
		$insertar_activo="activo";

		if(!isset($_SESSION["usuario"])){
    	  header('Location: index.php');
    	}
?>


<html>
<head>
<title>Insertar Viaje - UniShare</title>
	<LINK href="./css/home.css" rel="stylesheet" type="text/css">
	<LINK href="./css/unit.css" rel="stylesheet" type="text/css">

          <!-- CARGO LAS Librerias jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

	<!--<?php include("logohead.php"); ?>
	<br>

	El id de usuario es: 
	<?php echo $_SESSION['id_usuario']; ?>
	<br>
	y el correo:  	<?php echo $_SESSION['usuario']; ?>-->

<body>
    <div id="skip-link"><a href="#maincontent">Skip to content</a></div>
   
            <div class="page">
                            
            <div id="maincontent" class="container" role="main">
                
                <?php include("logohead.php"); ?>
                
    
    <div class="publication-container">
    
    	        	<h1>Publica tu viaje</h1>

<section class="breadcrumb-container">
	<ol class="publication-breadcrumb margin-bottom u-reset u-clearfix">
                                    <li class="step1 current">
                                            <span>El trayecto</span>
                                    </li>
    </ol>
</section>

        <div class="row publication publication-step1">
                    <div class="span7">
        <input id="has_errors" value="0" type="hidden">
        <form method="post" action="./funciones/uni_trayecto.php" class="publication-step1-form js-publicationForm--step1" accept-charset="utf-8">
 		  <input type="hidden" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $_SESSION['id_usuario']?>"  required>       	
            <fieldset class="main-block">
                <div class="header-main-block">
                    <h2>Puntos de encuentro (dejas y recoges a pasajeros)</h2>
                </div>

                <section class="main-block-content">
                          
                            <label for="cSalida" class="control-label">¿Desde dónde sales?</label>
                                <div class="gaa-inputContainer">
                                    <div class="js-legoInput">
                                        <input id="cSalida" name="cSalida" required="required" data-autocomplete="name" autocomplete="off" placeholder="Ejemplo: Madrid, Estadio Santiago Bernabéu." class="from js-legoInput-input js-inputPlace-name" type="text">
                                    </div>
                                </div>

                            
                               <label for="dUni" data-autocomplete="name" class=" control-label">¿A qué <b>uni</b> te diriges?</label>
                               <div class="gaa-inputContainer">
                                    <div class="js-legoInput">
                                        <input id="dUni" name="dUni" required="required" data-autocomplete="name" autocomplete="off" placeholder="Ejemplo: Ciutat de Las Ciencias, Valencia." class="to js-legoInput-input js-inputPlace-name" type="text">
                                    </div>
                                </div>

                Este es el lugar más popular para dejar a los pasajeros.
                <p class="publicationError alert alert-error no-icon u-clearfix js-placeError--frontendValidation" aria-live="polite" aria-hidden="true"></p>

                <br> <br>
                              <label for="ciuPaso" data-autocomplete="name" class=" control-label">¿Por qué <b>ciudad</b> puedes pasar?</label>
                               <div class="gaa-inputContainer">
                                    <div class="js-legoInput">
                                        <input id="ciuPaso" name="ciuPaso" required="required" data-autocomplete="name" autocomplete="off" placeholder="Ejemplo: Terrassa, Barcelona." class="to js-legoInput-input js-inputPlace-name" type="text">
                                    </div>
                                </div>

                </section>
            </fieldset>

            <fieldset class="main-block">
                <div class="header-main-block u-clearfix">
                    <div class="simple-round-container">
                        <label for="idavuelta" class="checkbox">
                        	<input id="idavuelta" name="idavuelta" class="trip-mode simple-round-choice" value="1" checked="checked" type="checkbox">
        Ida y vuelta

                        </label>

                    </div>
                    <h2>Día y hora</h2>
                </div>
                <div id="pruebo">
                </div>
            </fieldset>

            <fieldset class="main-block">
                <div class="header-main-block u-clearfix">
                    <h2>Aportación por pasajero</h2>
                </div>
                <div id="pasajero">
                </div>            
            </fieldset>

            <fieldset class="main-block">
                <div class="header-main-block u-clearfix">
                    <h2>Plazas disponibles</h2>
                </div>
                <div id="plazas">
                </div>  
            </fieldset>

    <fieldset class="main-block step2-details">
                <section class="step2-details-container">
                    <div class="header-main-block">
                        <h2>Detalles</h2>
                    </div>

                    <div class="steps2-details-more">

                            <label for="new_publication_step2_comment" class="u-inline u-noFloat size14">
                                ¿Quieres añadir algo más sobre tu viaje?
                            </label>

                                <div class="comments-container">
                                    <textarea id="detalles" name="detalles" class="tip" placeholder="¿Tienes flexibilidad sobre el lugar y el momento de recogida? ¿No vas a viajar por autopista o autovía? ¿Tu maletero es pequeño? ¡No olvides mantener informados a los pasajeros!" oldtitle="Proporciona tantos detalles como puedas para que los pasajeros no tengan que hacerte muchas preguntas sobre tu viaje." title="" aria-describedby="qtip-4"></textarea>
                                </div>


                            <p class="size14">
                                <svg aria-hidden="true" class="c-icon u-alignMiddle u-darkBlue-fill" style="width: 16px; height: 16px;"><use xlink:href="#icon-info"></use></svg>

                                <span class="u-alignMiddle">
                                    No escribas tus datos de contacto. Los pasajeros que reserven recibirán tu móvil.
                                    (<a href="#commentRulesModal" data-toggle="modal">Ver las normas</a>)
                                </span>
                            </p>
                            
                                <div class="comments-return-container" style="display: none;">
                                    <div class="alert no-icon hide rules-warning u-clearfix">
                                        <i class="bbc-icon2-exclamation-mark u-orange size26 u-left no-margin-left margin-half-right" aria-hidden="true"></i>
                                        <p class="u-overflowHidden">
                                            No escribas tu móvil o tu e-mail aquí. Los pasajeros contactarán contigo por la web y entonces podrás escribirles.
                                        </p>
                                    </div>
                                </div>
                                                 

                    </div>

                </section>
    </fieldset>

            <button type="submit" class="Button Button--primary Button--big u-right apply-btn-loader js-realSubmit"><img class="img-loader hide" alt="" aria-hidden="true">Continuar</button>
                            <button type="button" class="Button Button--primary Button--big Button--disabled u-right u-hide js-fakeSubmit" aria-hidden="true">Continuar</button>
                    
                    </form>
    </div>

    <!-- *col gauche* -->
<div class="span5 publication-map publication-sidebar">
    <div class="sidebar-info map-frame wrapper">
        <h2>Resumen del viaje</h2>
        <b> Puedo utilizar Esto </b>
        </div>

    <div class="insurance wrapper alert alert-info no-icon clearfix">
     <i class="bbc-icon2-info u-darkBlue size26 pull-left no-margin-left" aria-hidden="true"></i>
        <h2 class="margin-half-bottom u-darkBlue">Seguro, confianza y fiabilidad</h2>
            <ul class="u-gray">
                <li class="line20">También puedo utilizar esto.</li>
                <li class="line20">Usuarios con perfiles certificados y con opiniones.</li>
                <li class="line20">
                    <a href="#insuranceModal" data-toggle="modal">Seguro adicional sin coste</a>
                    en colaboración con AXA.
                </li>
            </ul>
    </div>


<div id="insuranceModal" class="modal modal--insurance hide" tabindex="-1" role="dialog" aria-labelledby="insuranceModalLabel" aria-hidden="true">
    <div class="modal-header">
        <a class="close" data-dismiss="modal" aria-hidden="true">×</a>
        <h3 id="insuranceModalLabel">Tu viaje está asegurado</h3>
    </div>
    <div class="modal-body">
        <div class="u-clearfix padding-bottom">
            <i class="bbc-icon2-shield first u-left u-green size60" aria-hidden="true"></i>
            <h3 class="size16 bold line-normal padding-half-top">Seas conductor o pasajero, en los viajes con reserva online te beneficias de coberturas AXA adicionales sin coste</h3>
        </div>

                    <h4 class="no-margin-bottom margin-half-top u-green">Asistencia en carretera y garantía de llegada al destino</h4>
            <p class="u-marginNone padding-bottom padding-half-top size13">En caso de avería, asistencia en carretera y grúa hasta el taller más cercano. Medio de transporte a vuestra disposición para llegar hasta el destino si el coche no se puede reparar.</p>
        
        <img src="https://d1ovtcjitiy70m.cloudfront.net/vi-1/images/insurance/axa-logo-h96.png" class="display-block margin-center margin-bottom margin-top" alt="AXA, reinventando seguros" height="48">
    </div>
</div>
    </div>
            <div class="MeetingPointsMapModal Modal js-meetingPointsMap-modal" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="Modal-section">
        <h3 class="Modal-title js-meetingPointsMap-header"></h3>
    </div>
    <div class="Modal-section MeetingPointsMapModal-body">

        <div class="MeetingPointsMapModal-sidebar">

            <div class="MeetingPointsMapSidebar js-mapModalSidebar">

                <div class="MeetingPointsMapSidebar-header">
                    Recuerda que los pasajeros todavía pueden contactarte para proponerte otro sitio si lo prefieren.
                </div>

                <div class="js-mapModalSidebar-main">

                    <div class="MeetingPointsMapSidebar-confirm">
                        <button class="MeetingPointsMapButton Button Button--primary Button--full js-meetingPointsMap-confirm">
                            Confirmar
                        </button>
                    </div>
                </div>

                <div class="MeetingPointsMapSidebar-loader u-hide js-mapModalSidebar-loader">
                    <div class="MeetingPointsMapSidebar-loaderContent">
                        <span class="u-blue c-simple-loader" aria-hidden="true"><i></i></span>
                    </div>
                </div>

                <div class="MeetingPointsMapSidebar-error u-hide js-mapModalSidebar-error">
                    <strong>No hay ningún lugar popular aquí</strong>
                </div>

            </div>

        </div>

        <div class="MeetingPointsMapModal-mapContainer">
            <div class="MeetingPointsMap js-meetingPointsMap">
                <div class="MeetingPointsMap-controls">

                    <div class="MeetingPointsMap-buttonContainer u-alignCenter u-hide js-meetingPointsMap-search">

                        <button class="MeetingPointsMapButton Button Button--primary js-meetingPointsMap-searchButton">
                            <span class="MeetingPointsMapButton-text">
                                Buscar en esta zona
                            </span>
                            <span class="MeetingPointsMapButton-loader c-simple-loader" aria-hidden="true"><i></i></span>
                        </button>

                    </div>
                </div>
            </div>
        </div>


    </div>
    <button type="button" class="Modal-close" data-dismiss="modal">
        <i class="bbc-icon2-cross" aria-hidden="true"></i>
        <span class="u-visuallyHidden">Close</span>
    </button>

</div>
            </div>
    </div>
            </div>

                            
<?php include("footer.php"); ?>

    <script type="text/javascript" src="js/insertarViaje.js"></script>
                    </div>
  

</body>


</html>