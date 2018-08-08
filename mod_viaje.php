<?php
	
		session_start();

	require_once "./config/conexion.php";


	$guardo_id =  $_GET['id'];
    $_SESSION['id_post']=$guardo_id;

	$consulta = "SELECT * FROM trayecto WHERE id_trayecto = :id_trayecto";

	$resultado=$conexion->prepare($consulta);

	$resultado->execute(array(":id_trayecto"=>$guardo_id));

	$registro=$resultado->fetch(PDO::FETCH_ASSOC);

	//echo $registro['uni_seleccion'];

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
    
    	        	<h1>Editar tu viaje</h1>

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
        <form method="post" action="./funciones/editar_trayecto.php" class="publication-step1-form js-publicationForm--step1" accept-charset="utf-8">
 		  <input type="hidden" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $_SESSION['id_usuario']?>"  required>       	
            <fieldset class="main-block">
                <div class="header-main-block">
                    <h2>Puntos de encuentro (dejas y recoges a pasajeros)</h2>
                </div>

                <section class="main-block-content">
                          
                            <label for="cSalida" class="control-label">¿Desde dónde sales?</label>
                                <div class="gaa-inputContainer">
                                    <div class="js-legoInput">
                                        <input id="cSalida" name="cSalida" required="required" data-autocomplete="name" autocomplete="off" placeholder="Ejemplo: Madrid, Estadio Santiago Bernabéu." class="from js-legoInput-input js-inputPlace-name" type="text" value="<?php echo $registro['ubi_salida_trayecto']?>">
                                    </div>
                                </div>

                            
                               <label for="dUni" data-autocomplete="name" class=" control-label">¿A qué <b>uni</b> te diriges?</label>
                               <div class="gaa-inputContainer">
                                    <div class="js-legoInput">
                                        <input id="dUni" name="dUni" required="required" data-autocomplete="name" autocomplete="off" placeholder="Ejemplo: Ciutat de Las Ciencias, Valencia." class="to js-legoInput-input js-inputPlace-name" type="text" value="<?php echo $registro['uni_seleccion']?>">
                                    </div>
                                </div>

                Este es el lugar más popular para dejar a los pasajeros.
                <p class="publicationError alert alert-error no-icon u-clearfix js-placeError--frontendValidation" aria-live="polite" aria-hidden="true"></p>

                <br> <br>
                              <label for="ciuPaso" data-autocomplete="name" class=" control-label">¿Por qué <b>ciudad</b> puedes pasar?</label>
                               <div class="gaa-inputContainer">
                                    <div class="js-legoInput">
                                        <input id="ciuPaso" name="ciuPaso" required="required" data-autocomplete="name" autocomplete="off" placeholder="Ejemplo: Terrassa, Barcelona." class="to js-legoInput-input js-inputPlace-name" type="text" value="<?php echo $registro['ubi_paso_trayecto']?>">
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
                <div id="pruebo_editar">


                    <section id="publication-unique" class="main-block-content">
                    <section class="date-time">
                        <section class="date-time">
                            <div class="departure-container">
                                <label class="control-label">Fecha de ida:</label><label for="new_publication_step1_departureDate_date" aria-hidden="true"><svg aria-hidden="true" class="input-icon c-icon u-darkGray-fill" style="width: 16px; height: 16px;"></label></svg>

                                    <div id="new_publication_step1_departureDate" class="departure-date">

                                    <input id="fIda" name="fIda" required="required" placeholder="DD/MM/AAAA" class="date-picker hasDatepicker" autocomplete="off" type="date" value="<?php echo $registro['fecha_trayecto_ida']?>">

                                    <span class="hour js-showPreciseTime js-time-select">

                                   <select id="fIda0hora" name="fIda0hora" required="required" class="time-select">
                                        <option value="" selected="selected"></option>
                                        <option value="0">00</option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                        <option value="5">05</option>
                                        <option value="6">06</option>
                                        <option value="7">07</option>
                                        <option value="8">08</option>
                                        <option value="9">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                </select>
            h
            <select id="fIda0min" name="fIda0min" required="required" class="time-select">
                <option value="" selected="selected"></option>
                <option value="0">00</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="40">40</option>
                <option value="50">50</option>
            </select></span></div></div>

<!-- Este es otro contenedor otro código-->
</br>
                        <div class="return-container js-return-container" data-container="return">
                            <label for="new_publication_step1_returnDate" class=" control-label">Fecha de vuelta:</label>
                            <label for="new_publication_step1_returnDate_date" aria-hidden="true">
                                <svg aria-hidden="true" class="input-icon c-icon u-darkGray-fill" style="width: 16px; height: 16px;"></use>
                                </svg>
                            </label>
                            <div id="new_publication_step1_returnDate" class="return-date return-element">

                                <input id="fVuelta" name="fVuelta" required="required" placeholder="DD/MM/AAAA" class="date-picker hasDatepicker" autocomplete="off" type="date" value="<?php echo $registro['fecha_trayecto_vuelta']?>">

                                <span class="hour js-showPreciseTime js-time-select">
                                    <select id="fVueltaHora" name="fVuelta0hora" required="required" class="time-select">
                                        <option value="<?php echo $registro['hora_trayecto_ida']?>" selected="selected"></option>
                                        <option value="0">00</option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                        <option value="5">05</option>
                                        <option value="6">06</option>
                                        <option value="7">07</option>
                                        <option value="8">08</option>
                                        <option value="9">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                </select>
            h
            <select id="fVuelta0min" name="fVuelta0min" required="required" class="time-select">
                <option value="" selected="selected"></option>
                <option value="0">00</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="40">40</option>
                <option value="50">50</option>
            </select>
        </span>
    </div>
</div>

                                                    
                                                    </section>

                    </section>
                                    </section>

                </div>
            </fieldset>

            <fieldset class="main-block">
                <div class="header-main-block u-clearfix">
                    <h2>Aportación por pasajero</h2>
                </div>
                <div id="pasajero_editar">
                    <input id="aporPasajero" name="aporPasajero" required="required" placeholder="Ejemplo: 3" class="date-picker hasDatepicker" autocomplete="off" type="text" value="<?php echo $registro['precio_trayecto']?>"> €
                </div>            
            </fieldset>

            <fieldset class="main-block">
                <div class="header-main-block u-clearfix">
                    <h2>Plazas disponibles</h2>
                </div>
                <div id="plazas_editar">
                    <input id="nPlazas" name="nPlazas" required="required" placeholder="Ejemplo: 4" class="date-picker hasDatepicker" autocomplete="off" type="text" value="<?php echo $registro['plazas_trayecto']?>"> Personas. (máx: 4).
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
                                    <textarea id="detalles" name="detalles" class="tip" placeholder="¿Tienes flexibilidad sobre el lugar y el momento de recogida? ¿No vas a viajar por autopista o autovía? ¿Tu maletero es pequeño? ¡No olvides mantener informados a los pasajeros!" oldtitle="Proporciona tantos detalles como puedas para que los pasajeros no tengan que hacerte muchas preguntas sobre tu viaje." title="" aria-describedby="qtip-4"><?php echo $registro['detalles_trayecto']?></textarea>
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

                            
<footer class="Footer" role="contentinfo">
    <div class="Footer-inner">
        <section class="Footer-links Footer-column">
            <nav>
                <ul class="u-reset u-clearfix">
                    
                                            <li class="Footer-column Footer-column--links">
                                                            <h2>Viajar con BlaBlaCar</h2>
                                    <ul class="u-reset">
            <li>
                <a href="/how-does-car-sharing-work">¿Cómo compartir coche?</a>
            </li>
                    <li>
                <a href="/member-ratings">Opiniones</a>
            </li>
                    <li>
                <a href="/blablalife/novedades/juicio-blablacar">Compartir coche es legal</a>
            </li>
                    <li>
                <a href="/road-safety-tips">Consejos de seguridad</a>
            </li>
                    <li>
                <a href="/faq">Preguntas frecuentes</a>
            </li>
            </ul>

                                                    </li>
                                            <li class="Footer-column Footer-column--links">
                                                            <h2>Acerca de BlaBlaCar</h2>
                                    <ul class="u-reset">
                    <li>
                <a href="/conoce-blablacar">Sobre nosotros</a>
            </li>
                    <li>
                <a href="/blablalife/">BlaBlaLife</a>
            </li>
                    <li>
                <a href="/newsroom">Prensa y medios</a>
            </li>
                    <li>
                <a href="/trabaja-con-nosotros">Empleo</a>
            </li>
                    <li>
                <a href="/contact">Contacto</a>
            </li>
            </ul>

                                                    </li>
                                            <li class="Footer-column Footer-column--links">
                                                            <h2>Información legal</h2>
                                    <ul class="u-reset">
                    <li>
                <a href="/conoce-blablacar/condiciones-generales-de-uso">Condiciones Generales de Uso</a>
            </li>
                    <li>
                <a href="/conoce-blablacar/politica-de-privacidad">Política de privacidad</a>
            </li>
                    <li>
                <a href="/conoce-blablacar/cookies">Política de cookies</a>
            </li>
            </ul>

                                                    </li>
                                    </ul>
            </nav>
        </section>

        <div class="Footer-column Footer-column--aside">
            <section class="Footer-apps u-clearfix">
                
                                    <a href="https://play.google.com/store/apps/details?id=com.comuto&amp;hl=es">
                        <img src="https://d1ovtcjitiy70m.cloudfront.net/vi-1/images/buttons/google_play/button_google_play_es_ES.svg" alt="Disponible en Google Play" width="143" height="48">
                    </a>
                                    <a href="https://itunes.apple.com/es/app/blablacar-compartir-coche/id341329033?mt=8">
                        <img src="https://d1ovtcjitiy70m.cloudfront.net/vi-1/images/buttons/app_store/button_app_store_es_ES.svg" alt="Disponible en el App Store" width="143" height="48">
                    </a>
                            </section>
            
            <section class="Footer-socials">
                <ul class="u-reset">
                                                            <li><a href="https://es-es.facebook.com/blablacar.es" class="facebook"><span class="u-visuallyHidden">Facebook</span></a></li><li><a href="https://twitter.com/blablacar_es" class="twitter"><span class="u-visuallyHidden">Twitter</span></a></li><li><a href="https://instagram.com/blablacar_es" class="instagram"><span class="u-visuallyHidden">Instagram</span></a></li><li><a href="https://www.youtube.com/c/BlaBlaCarES" class="youtube"><span class="u-visuallyHidden">Youtube</span></a></li></ul>
            </section>
        </div>

        <section class="Footer-footnotes u-clearfix">
            <p class="u-marginNone u-left u-alignLeft">UniShare, 2018 ©</p>
                    </section>
    </div>
    <section class="Footer-ridesharing">
        <p class="Footer-inner Footer-inner--ridesharing">UniShare es la mejor aplicación del mundo para compartir coche con tus compañeros de universidad. Con nosotros, puedes olvidarte del coche para ir a la universidad. Conectamos a la gente para que pueda viajar directamente a sus Universidades.</p>
    </section>

    <script type="text/javascript" src="js/insertarViaje.js"></script>



</footer>


                    </div>
  

</body>


</html>