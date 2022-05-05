<?php require_once 'variables.php'; ?>
<!doctype html>
<html lang="es" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="img/favicon.ico?v=2">
	<link rel="icon" sizes="16x16 32x32" href="img/favicon.ico?v=2">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    
    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
    
    <script type="text/javascript" src="js/functions.js"></script>
  	
	<title>Programación de Apuestas | GogolClub</title>
    
           
</head>
<body onLoad="ConteoRegresivo()">


<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '797911086947709',
      xfbml      : true,
	  version    : 'v2.2'
    });

FB.Canvas.setSize({ width: 810, height: 550 });

    // ADD ADDITIONAL FACEBOOK CODE HERE
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Script de videodesk 2015
<script type="text/javascript">

 var _videodesk= _videodesk || {};
 _videodesk['firstname'] = '' ;
 _videodesk['lastname'] = '' ;
 _videodesk['company'] = '' ;
 _videodesk['email'] = '' ;
 _videodesk['phone'] = '' ;
 _videodesk['customer_lang'] = '' ;
 _videodesk['customer_id'] = '' ;
 _videodesk['customer_url'] = '' ;
 _videodesk['cart_id'] = '' ;
 _videodesk['cart_url'] = '' ;
 _videodesk['order_id'] = '' ;
 _videodesk['order_url'] = '' ;  
 _videodesk['uid'] = '145641e6e3baac8ff37011721c7fe3ac' ;  
 _videodesk['lang'] = 'es' ;
 
(function() {
	   
 var videodesk = document.createElement('script'); videodesk.type = 'text/javascript'; videodesk.async = true;
 videodesk.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'module-videodesk.com/js/videodesk.js'; 
 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(videodesk, s);

})();

</script> -->

<header>

	<h1>Realiza Tus Apuestas</h1>	
</header>



<section class="cd-section">
<div class="textoinicio"><p><strong>Programa y Gana...</strong> Cada 3 días publicamos los partidos  de diferentes ligas, también te recomendamos predicciones con alto porcentaje en aciertos.</p>
<p>¡Que esperas! <strong>Gana hasta el 10.000%</strong> del valor de tu apuesta.</p>
<p><strong>¡A programar se dijo!</strong></p> </div>
	<a class="cd-bouncy-nav-trigger" style="cursor:pointer">Iniciar</a>
    <a class="cd-bouncy-nav-help" style="cursor:pointer">Opciones</a>
</section> <!-- .cd-section -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=797911086947709&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="contador"></div>
<div id="megusta"><div class="fb-like" data-href="https://www.facebook.com/pages/Gogolclub/307729516095937" data-width="20" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div></div>

<div id="seguridadssl">Seguridad SSL
</div>
<div id="formapago">Formas de pago
</div>


<!-- precarga de imagenes -->
<div id="preloader1"></div>
<div id="preloader2"></div>
<div id="preloader3"></div>
<div id="preloader4"></div>
<div id="preloader5"></div>
<div id="preloader6"></div>
<div id="preloader7"></div>

<div class="cd-bouncy-nav-modal">
<h1>Tipo de Apuesta</h1>
<nav>
    
		<ul class="cd-bouncy-nav2">
			<li><a class="nav-combinada" style="cursor:pointer">Combinada</a></li>
			<li><a class="nav-sencilla" style="cursor:pointer">Sencilla</a></li>
			<li><a class="nav-doble" style="cursor:pointer">Doble Oportunidad</a></li>
			
		</ul>
	</nav>
	
	<a style="cursor:pointer" class="cd-close">Close modal</a>
</div> <!-- cd-bouncy-nav-modal -->

<div class="cd-bouncy-nav-opciones">
<h1>Opciones</h1>
<nav>
    
		<ul class="cd-bouncy-nav">
			<li><a class="nav-terminos" style="cursor:pointer">Términos</a></li>
			<li><a class="nav-comosejuega" style="cursor:pointer">Como se Juega?</a></li>
			
		</ul>
	</nav>
	
	<a style="cursor:pointer" class="cd-close">Close opciones</a>
</div> <!-- cd-bouncy-nav-Opciones -->




<div class="cd-bouncy-nav-combinada">
<h1>Apuesta Combinada</h1>
<nav>
    
	<ul class="cd-bouncy-par">
    
    
			
            <form name="formulario_combinadas" action="combinada.php" id="form_combinada" method="post">
            
            <div><?php echo $partido1equipoL?> vs <?php echo $partido1equipoV?> - <?php echo $partido1hora?></div>
            
            <li><input  type="radio" name="partido1" value="1" id="combinada_gana_local1">
        <label class="radio_general radio_iconos gana_local" id="combinada_gana_local1" for="combinada_gana_local1"><?php echo $partido1equipoL?></label></li>
        
        <li><input type="radio" name="partido1" value="x" id="combinada_empate1">
        <label class="radio_general radio_iconos empate" id="combinada_empate1" for="combinada_empate1">Empate</label></li>
        <li><input type="radio" name="partido1" value="2" id="combinada_gana_visitante1">
        <label class="radio_general radio_iconos gana_visitante" id="combinada_gana_visitante1" for="combinada_gana_visitante1"><?php echo $partido1equipoV?></label></li>
        
        
        
         
        
        <div><?php echo $partido2equipoL?> vs <?php echo $partido2equipoV?> - <?php echo $partido2hora?></div><li><input  type="radio" name="partido2" value="1" id="combinada_gana_local2">
        <label class="radio_general radio_iconos gana_local" id="combinada_gana_local2" for="combinada_gana_local2"><?php echo $partido2equipoL?></label></li>
        
        <li><input type="radio" name="partido2" value="x" id="combinada_empate2">
        <label class="radio_general radio_iconos empate" id="combinada_empate2" for="combinada_empate2">Empate</label></li>
        <li><input type="radio" name="partido2" value="2" id="combinada_gana_visitante2">
        <label class="radio_general radio_iconos gana_visitante" id="combinada_gana_visitante2" for="combinada_gana_visitante2"><?php echo $partido2equipoV?></label></li>
        
        
        <div><?php echo $partido3equipoL?> vs <?php echo $partido3equipoV?> - <?php echo $partido3hora?></div><li><input  type="radio" name="partido3" value="1" id="combinada_gana_local3">
        <label class="radio_general radio_iconos gana_local" id="combinada_gana_local3" for="combinada_gana_local3"><?php echo $partido3equipoL?></label></li>
        
        <li><input type="radio" name="partido3" value="x" id="combinada_empate3">
        <label class="radio_general radio_iconos empate" id="combinada_empate3" for="combinada_empate3">Empate</label></li>
        <li><input type="radio" name="partido3" value="2" id="combinada_gana_visitante3">
        <label class="radio_general radio_iconos gana_visitante" id="combinada_gana_visitante3" for="combinada_gana_visitante3"><?php echo $partido3equipoV?></label></li>
        
        
        <div><?php echo $partido4equipoL?> vs <?php echo $partido4equipoV?> - <?php echo $partido4hora?></div><li><input  type="radio" name="partido4" value="1" id="combinada_gana_local4">
        <label class="radio_general radio_iconos gana_local" id="combinada_gana_local4" for="combinada_gana_local4"><?php echo $partido4equipoL?></label></li>
        
        <li><input type="radio" name="partido4" value="x" id="combinada_empate4">
        <label class="radio_general radio_iconos empate" id="combinada_empate4" for="combinada_empate4">Empate</label></li>
        <li><input type="radio" name="partido4" value="2" id="combinada_gana_visitante4">
        <label class="radio_general radio_iconos gana_visitante" id="combinada_gana_visitante4" for="combinada_gana_visitante4"><?php echo $partido4equipoV?></label></li>
        
        
        <div><?php echo $partido5equipoL?> vs <?php echo $partido5equipoV?> - <?php echo $partido5hora?></div><li><input  type="radio" name="partido5" value="1" id="combinada_gana_local5">
        <label class="radio_general radio_iconos gana_local" id="combinada_gana_local5" for="combinada_gana_local5"><?php echo $partido5equipoL?></label></li>
        
        <li><input type="radio" name="partido5" value="x" id="combinada_empate5">
        <label class="radio_general radio_iconos empate" id="combinada_empate5" for="combinada_empate5">Empate</label></li>
        <li><input type="radio" name="partido5" value="2" id="combinada_gana_visitante5">
        <label class="radio_general radio_iconos gana_visitante" id="combinada_gana_visitante5" for="combinada_gana_visitante5"><?php echo $partido5equipoV?></label></li>
        
        
        <div><?php echo $partido6equipoL?> vs <?php echo $partido6equipoV?> - <?php echo $partido6hora?></div><li><input  type="radio" name="partido6" value="1" id="combinada_gana_local6">
        <label class="radio_general radio_iconos gana_local" id="combinada_gana_local6" for="combinada_gana_local6"><?php echo $partido6equipoL?></label></li>
        
        <li><input type="radio" name="partido6" value="x" id="combinada_empate6">
        <label class="radio_general radio_iconos empate" id="combinada_empate6" for="combinada_empate6">Empate</label></li>
        <li><input type="radio" name="partido6" value="2" id="combinada_gana_visitante6">
        <label class="radio_general radio_iconos gana_visitante" id="combinada_gana_visitante6" for="combinada_gana_visitante6"><?php echo $partido6equipoV?></label></li>
        
        
        <div><?php echo $partido7equipoL?> vs <?php echo $partido7equipoV?> - <?php echo $partido7hora?></div><li><input  type="radio" name="partido7" value="1" id="combinada_gana_local7">
        <label class="radio_general radio_iconos gana_local" id="combinada_gana_local7" for="combinada_gana_local7"><?php echo $partido7equipoL?></label></li>
        
        <li><input type="radio" name="partido7" value="x" id="combinada_empate7">
        <label class="radio_general radio_iconos empate" id="combinada_empate7" for="combinada_empate7">Empate</label></li>
        <li><input type="radio" name="partido7" value="2" id="combinada_gana_visitante7">
        <label class="radio_general radio_iconos gana_visitante" id="combinada_gana_visitante7" for="combinada_gana_visitante7"><?php echo $partido7equipoV?></label></li>
        
        
        <div><?php echo $partido8equipoL?> vs <?php echo $partido8equipoV?> - <?php echo $partido8hora?></div><li><input  type="radio" name="partido8" value="1" id="combinada_gana_local8">
        <label class="radio_general radio_iconos gana_local" id="combinada_gana_local8" for="combinada_gana_local8"><?php echo $partido8equipoL?></label></li>
        
        <li><input type="radio" name="partido8" value="x" id="combinada_empate8">
        <label class="radio_general radio_iconos empate" id="combinada_empate8" for="combinada_empate8">Empate</label></li>
        <li><input type="radio" name="partido8" value="2" id="combinada_gana_visitante8">
        <label class="radio_general radio_iconos gana_visitante" id="combinada_gana_visitante8" for="combinada_gana_visitante8"><?php echo $partido8equipoV?></label></li>
        
                        
   <li class="button"> <input name="submit" type="submit" value="Apostar" class="cd-bouncy-nav-apostar" id="submit"></input></li>
      
   </form>

 						
		</ul>
        
	</nav>
	
	<a style="cursor:pointer" class="cd-close">Close Combinada</a>
</div> <!-- cd-bouncy-nav-Combinada -->


<div class="cd-bouncy-nav-sencilla">
<h1>Apuesta Sencilla</h1>
<nav>
    
	<ul class="cd-bouncy-par">
			            
            <form id="form_sencilla" name="formulario_sencilla" action="sencilla.php" method="post">
            
            <div><?php echo $partido1sequipoL?> vs <?php echo $partido1sequipoV?> - <?php echo $partido1shora?></div>
            
            <li><input  type="radio" name="partido1s" value="1" id="sencilla_gana_local1">
        <label class="radio_general radio_iconos gana_local" id="sencilla_gana_local1" for="sencilla_gana_local1"><?php echo $partido1sequipoL?></label></li>
        
        <li><input type="radio" name="partido1s" value="x" id="sencilla_empate1">
        <label class="radio_general radio_iconos empate" id="sencilla_empate1" for="sencilla_empate1">Empate</label></li>
        <li><input type="radio" name="partido1s" value="2" id="sencilla_gana_visitante1">
        <label class="radio_general radio_iconos gana_visitante" id="sencilla_gana_visitante1" for="sencilla_gana_visitante1"><?php echo $partido1sequipoV?></label></li>
   <li class="button"> <input name="submits" type="submit" value="Apostar" class="cd-bouncy-nav-apostar" id="submits"></input></li>
   </form>

            						
		</ul>
	</nav>
	
	<a style="cursor:pointer" class="cd-close">Close Sencilla</a>
</div> <!-- cd-bouncy-nav-Sencilla -->


<div class="cd-bouncy-nav-doble">
<h1>Doble Oportunidad</h1>
<nav>
    
	<ul class="cd-bouncy-par">
			       
            
            <form id="form_doble" name="formulario_doble" action="doble.php" method="post">
            
            <div><?php echo $partido1doequipoL?> vs <?php echo $partido1doequipoV?> - <?php echo $partido1dohora?></div>
            
            <li><input  type="radio" name="partido1do" value="1x" id="doble_gana_local_empate1">
        <label class="radio_general radio_iconos12 gana_local" id="doble_gana_local_empate1" for="doble_gana_local_empate1"><?php echo $partido1doequipoL?> o Empate</label></li>
        
        <li><input type="radio" name="partido1do" value="2x" id="doble_gana_visitante_empate1">
        <label class="radio_general radio_iconos12 empate" id="doble_gana_visitante_empate1" for="doble_gana_visitante_empate1"><?php echo $partido1doequipoV?> o Empate</label></li>
        <li><input type="radio" name="partido1do" value="12" id="doble_gana_local_visitante1">
        <label class="radio_general radio_iconos12 gana_visitante" id="doble_gana_local_visitante1" for="doble_gana_local_visitante1"><?php echo $partido1doequipoL?> o <?php echo $partido1doequipoV?></label></li>
        
        
        
         
        
        <div><?php echo $partido2doequipoL?> vs <?php echo $partido2doequipoV?> - <?php echo $partido2dohora?></div><li><input  type="radio" name="partido2do" value="1x" id="doble_gana_local_empate2">
        <label class="radio_general radio_iconos12 gana_local" id="doble_gana_local_empate2" for="doble_gana_local_empate2"><?php echo $partido2equipoL?> o Empate</label></li>
        
        <li><input type="radio" name="partido2do" value="2x" id="doble_gana_visitante_empate2">
        <label class="radio_general radio_iconos12 empate" id="doble_gana_visitante_empate2" for="doble_gana_visitante_empate2"><?php echo $partido2doequipoV?> o Empate</label></li>
        <li><input type="radio" name="partido2do" value="12" id="doble_gana_local_visitante2">
        <label class="radio_general radio_iconos12 gana_visitante" id="doble_gana_local_visitante2" for="doble_gana_local_visitante2"><?php echo $partido2equipoL?> o <?php echo $partido2doequipoV?></label></li>
        
        
        <div><?php echo $partido3doequipoL?> vs <?php echo $partido3doequipoV?> - <?php echo $partido3dohora?></div><li><input  type="radio" name="partido3do" value="1x" id="doble_gana_local_empate3">
        <label class="radio_general radio_iconos12 gana_local" id="doble_gana_local_empate3" for="doble_gana_local_empate3"><?php echo $partido3doequipoL?> o Empate</label></li>
        
        <li><input type="radio" name="partido3do" value="2x" id="doble_gana_visitante_empate3">
        <label class="radio_general radio_iconos12 empate" id="doble_gana_visitante_empate3" for="doble_gana_visitante_empate3"><?php echo $partido3doequipoV?> o Empate</label></li>
        <li><input type="radio" name="partido3do" value="12" id="doble_gana_local_visitante3">
        <label class="radio_general radio_iconos12 gana_visitante" id="doble_gana_local_visitante3" for="doble_gana_local_visitante3"><?php echo $partido3doequipoL?> o <?php echo $partido3doequipoV?></label></li>
        <li class="button"> <input name="submitdo" type="submit" value="Apostar" class="cd-bouncy-nav-apostar" id="submitdo"></input></li>
   
   </form>
            						
		</ul>
	</nav>
	
	<a style="cursor:pointer" class="cd-close">Close Doble Oportunidad</a>
</div> <!-- cd-bouncy-nav-Doble -->



<div class="cd-bouncy-nav-formulario">
<h1>Llena Tus datos</h1>
<nav>
    
	<ul class="cd-bouncy-formulario">
    <form id="form_enviar_apuesta" class="cd-form" action="enviarapuesta.php" method="post">
       
			<div id="respuesta"></div>
                </form>
               
               <div id="loading"><img src="img/cargando.gif" width="48" height="48"></div>
                <li></li>
            
                   						
		</ul>
	</nav>
	
	<a style="cursor:pointer" class="cd-close">Close Formulario</a>
</div> <!-- cd-bouncy-nav-formulario -->



<div class="cd-bouncy-nav-enviarapuesta">
<h1>Paga de tu Apuesta</h1>
<nav>
    
	<ul class="cd-bouncy-enviarapuesta">
    
       
			<div class="enviar_apuesta" id="respuesta-enviar-apuesta"></div>
<div id="loading2"><img src="img/cargando.gif" width="48" height="48"></div>
                <li></li>
            
                   						
		</ul>
	</nav>
	
	<a style="cursor:pointer" class="cd-close">Close Enviar Apuesta</a>
</div> <!-- cd-bouncy-nav-enviarapuesta -->





<div class="cd-bouncy-nav-terminos">
<h1>Términos y Condiciones</h1>
<nav>
    
	<ul class="cd-bouncy-info">
			<li><h2>GogolClub</h2>
<p>Somos una plataforma de Programación con <strong>certificación SSL</strong> la cual prestamos dos servicios indispensables para que nuestros usuarios obtengan beneficios:</p>

<p><strong>Programación de Predicciones:</strong> Semanalmente estamos publicando <strong>predicciones de Fútbol</strong> con alto porcentaje en acierto, totalmente accequible para cualquier usuario. ingresa <a href="https://www.facebook.com/pages/Gogolclub/307729516095937">aquí</a>.</p>

<p><strong>Programación de Puente:</strong> Es muy complejo el sistema de apuestas de fútbol online para nuestros usuarios, nosotros facilitamos este proceso y servimos como puente utilizando <strong>Casas de Apuestas certificadas Online</strong> que ofrecen las mejores cuotas y así proceder a realizar la Programación de apuestas incluyendo sus predicciones con alto porcentaje de acierto.</p>


<h2>General</h2>
<ul>
<p>El usuario al aceptar los <strong>"terminos y condiciones"</strong> y realizar el pago acepta que este dinero sea utilizado para realizar la apuesta en una <strong>Casa de Apuestas Certificada Online</strong> y a su ves un descuento del <strong>16% que le corresponde a GogolClub por los servicios de Programación.</strong></p>
<p>Despues de realizar la apuesta y el pago, se notificará por email el <strong>valor del premio.</strong></p>
<p>Si el usuario desea <strong>cancelar una apuesta ya realizada</strong> para cambiarla por otros resultados <strong>dentro del tiempo pactado</strong>, se descontará el 20% y se generará la nueva apuesta solicitada, esto lo debe solicitar a través de correo al email: <strong>ayuda@gogolclub.com</strong>.</p>
<p>No se puede realizar cambios si el usuario desea cancelar una apuesta ya realizada para cambiarla por otros resultados <strong>afuera del tiempo pactado</strong>.</p>
</ul>


<h2>Pago</h2>
<ul>
<p>Es indispensable el <strong>pago</strong> para poder participar en la programación de apuestas <strong>dentro del tiempo pactado el cual se ve en la parte superior izquierda.</strong></p>
<p>Los datos de registro de la apuesta deben ser los mismos que en el registro de pago (payu) <strong>Ej. Nombre, Email, etc.</strong></p>
<p>Realizar el <strong>pago unicamente via baloto ($6000) o efecty ($20.000 - $50.000)</strong> para mayor agilidad en el proceso, <strong>no use las tarjetas de crédito</strong> se podrían tardar hasta 48 horas en acreditarse y no entraría a participar <strong>(si esto ocurre solicitaremos al usuario participar en la programación siguiente)</strong>.</p>
<p>Funcionamos a través de <strong>facebook</strong> lo cual indica que tenemos <strong>certificación SSL - protección de Datos y Pagos</strong>, nuestra plataforma de pagos es Payu-Latam o Pagos Online.</p>
<p>No hacemos devoluciones de dinero a excepción de: Gogolclub pasó por alto la apuesta y no fué programada - Gogolclub hace su mayor esfuerzo para que nunca suceda este tipo de inconvenientes, esto lo informaremos a través de email.</p>
<p>GogolClub no gestiona los <strong>dineros directamente</strong>, esto lo hace un tercero <strong>(Casas de Apuestas certificadas Online)</strong> el cual recibe el dinero de GogolClub apostado por el usuario y si existe un ganador realiza la entrega a GogolClub para que este sea acreditado al <strong>Ganador (usuario).</strong> Por esta razón no realizamos ningún tipo de captación de dinero ya que el usuario tiene conocimiento hacia donde va el dinero y nuetras comisiones por el proceso, gestión y mantenimiento.</p>
</ul>


<p><h2>Ganadores</h2>

<ul>
<p>El usuario que halla realizado el pago dentro de la hora pactada y acierta todos los partidos es un <strong>feliz ganador</strong>.</p>
<p>El usuario que acierte los partidos en su totalidad con los términos y condiciones del tipo de apuesta, será un feliz ganador y se realizará la <strong>entrega del premio en dinero</strong>.</p>
<p>Debe cumplir los <strong>requisitos</strong>, mayor de <strong>18 años</strong>, datos exactos tanto <strong>registro de apuesta</strong> como <strong>registro de pago</strong> (ej. Nombre, Email, etc), para realizar la entrega del premio.</p>
<p>Se notificará a través del email registrado que es un <strong>Feliz Ganador</strong> con el valor ganado y descuento del 16% por servicios de programación de GogolClub.</p>
</ul></p>

<p><h2>Premio</h2>
<ul>
<p>A través de email enviamos un formulario para que el cliente lo diligencie y luego proceder a realizar el <strong>respectivo giro, consignación, etc.</strong></p>
<p>Los giros o depositos se hacen unicamente en las siguientes entidades Bancarias: <strong>Banco Caja Social, Banco Agrario, Bancolombia, CitiBank, Banco Falabella.</strong> Esto para que no le cobren comisión al usuario ganador.</p>
<p>El usuario puede solicitar que realicen el giro o deposito en otra <strong>entidad Bancaria (Davivienda, Banco de Bogotá, etc.) o no Bancaria (Efecty, Vía Baloto, Supergiros, MovilRed)</strong>, siempre y cuando acepte y se <strong>haga cargo de los descuentos de comisión</strong> de la entidad.</p>
</ul></p>

<h1>Reglas</h1>


<p><h2>Combinadas</h2>

<ul>
<p>*Para ganar una combinada debe acertar todos los partidos publicados. Cada partido en la apuesta es de 90 minutos (no incluye prorroga, penaltis o Gol de Oro.</p>
<p>*Si un partido es suspendido o aplazado y este se juega nuevamente dentro de la misma semana hasta las 23:59 del domingo la apuesta seguirá activa a espera de resultado hasta las 23:59 del mismo domingo (si es ganador se realiza pago después de la fecha ya mencionada).</p>
<p>*Si un partido es suspendido o aplazado y este no tiene fecha definida, es cancelado o no juega en la misma semana, se descontará ese partido o partidos en la combinada y quedarán jugando los restantes, la ganancia será menor a la esperada y se notificará por email.</p>
</ul></p>


<p><h2>Sencilla</h2>

<ul>
<p>*Para ganar una sencilla debe acertar el resultado del partido publicado. Cada partido en la apuesta es de 90 minutos (no incluye prorroga, penaltis o Gol de Oro.</p>
<p>*Si el partido es suspendido o aplazado y este se juega nuevamente dentro de la misma semana hasta las 23:59 del domingo la apuesta seguirá activa a espera de resultado hasta las 23:59 del mismo domingo (si es ganador se realiza pago después de la fecha ya mencionada).</p>
<p>*Si el partido es suspendido o aplazado y este no tiene fecha definida, es cancelado o no juega en la misma semana, se realiza reembolso para una nueva apuesta, este procedimiento se notificará por email.</p>
</ul></p>


<p><h2>Doble Oportunidad</h2>
<ul>
<p>*Para ganar una combinada de doble oportunidad debe acertar todos los partidos publicados. Cada partido en la apuesta es de 90 minutos (no incluye prorroga, penaltis o Gol de Oro.</p>
<p>*Si un partido es suspendido o aplazado y este se juega nuevamente dentro de la misma semana hasta las 23:59 del domingo la apuesta seguirá activa a espera de resultado hasta las 23:59 del mismo domingo (si es ganador se realiza pago después de la fecha ya mencionada).</p>
<p>*Si un partido es suspendido o aplazado y este no tiene fecha definida, es cancelado o no juega en la misma semana, se descontará ese partido o partidos en la combinada de Doble Oportunidad y quedarán jugando los restantes, la ganancia será menor a la esperada y se notificará por email.</p>
</ul>	</p>	<br><br>	</li>
                        						
		</ul>
	</nav>
	
	<a style="cursor:pointer" class="cd-close">Close Terminos</a>
</div> <!-- cd-bouncy-nav-terminos -->



<div class="cd-bouncy-nav-comosejuega">
<h1>¿Como se Juega?</h1>
<nav>
    
	<ul class="cd-bouncy-info">
			<li><iframe id="comosejuega" width="100%" height="400" src="https://www.youtube.com/embed/hJamW171q9I?rel=0" frameborder="0" allowfullscreen></iframe></li>
                        						
		</ul>
	</nav>
	
	<a style="cursor:pointer" class="cd-close">Close Como se Juega</a>
</div> <!-- cd-bouncy-nav-Como se juega -->






	
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>