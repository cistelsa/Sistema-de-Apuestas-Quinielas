 <?php 
error_reporting(E_ALL ^ E_NOTICE);
require_once 'variables.php';


 $dia=0;
 $horas=0;
 $minutos=0;
 $segundos=0;
 
if ($fecha_cierre>$fecha_apuesta){
	 
	 $resultado=strtotime($fecha_cierre) - strtotime($fecha_apuesta);
	 
	 $dia=intval($resultado/86400);
 $resultado=$resultado-(86400*$dia);
 $horas=intval($resultado/3600);
 $resultado=$resultado-(3600*$horas);
 $minutos=intval($resultado/60);
 $resultado=$resultado-(60*$minutos);
 $segundos=intval($resultado);



$partido1s = $_POST['partido1s'];

$mensaje3 .= '
<div class="borrar_dato">
<strong style="font-size: 100%; line-height: 20px;">Apuesta Realizada: (Sencilla)</strong><br><br>

<p class="apuesta_realizada"><label for="partido1s"><span>' . $partido1sequipoL .'-' . $partido1sequipoV .' Resultado: ' . $partido1s .'</span> <input name="partido1s" id="partido1s" class="full-width res-padding has-border" readonly="readonly"  value="' . $partido1sequipoL .'-' . $partido1sequipoV .' Resultado: ' . $partido1s .'" type="text"></label><br>
</p>

<p class="msj1_apuesta_realizada"><strong style="color:#09C;">Valor a Ganar:</strong> Cupón <strong>Apuesta Sencilla</strong> con valor apostado de:</p><br>

<strong>$6.000</strong> la ganancia es:</a><br>

<img height="17" width="17" style="vertical-align: middle; margin-bottom: 5px;" src="img/1-icon.svg" alt="1">  <strong style="color:#09C;">'.$valornuestropronostico1s6000.'</strong><br>

<img height="17" width="17" style="vertical-align: middle; margin-bottom: 5px;" src="img/x-icon.svg" alt="1"> <strong style="color:#09C;">'.$valornuestropronosticoxs6000.'</strong> <br>

<img height="17" width="17" style="vertical-align: middle; margin-bottom: 5px;" src="img/2-icon.svg" alt="1"> <strong style="color:#09C;">'.$valornuestropronostico2s6000.'</strong><br><br>

<strong>$20.000</strong> la ganancia es:<br>

<img height="17" width="17" style="vertical-align: middle; margin-bottom: 5px;" src="img/1-icon.svg" alt="1">  <strong style="color:#09C;">'.$valornuestropronostico1s20000.'</strong><br>

<img height="17" width="17" style="vertical-align: middle; margin-bottom: 5px;" src="img/x-icon.svg" alt="1"> <strong style="color:#09C;">'.$valornuestropronosticoxs20000.'</strong><br>

<img height="17" width="17" style="vertical-align: middle; margin-bottom: 5px;" src="img/2-icon.svg" alt="1"> <strong style="color:#09C;">'.$valornuestropronostico2s20000.'</strong><br><br>

<strong>$50.000</strong> la ganancia es:<br>

<img height="17" width="17" style="vertical-align: middle; margin-bottom: 5px;" src="img/1-icon.svg" alt="1">  <strong style="color:#09C;">'.$valornuestropronostico1s50000.'</strong><br>

<img height="17" width="17" style="vertical-align: middle; margin-bottom: 5px;" src="img/x-icon.svg" alt="1"> <strong style="color:#09C;">'.$valornuestropronosticoxs50000.'</strong><br>

<img height="17" width="17" style="vertical-align: middle; margin-bottom: 5px;" src="img/2-icon.svg" alt="1"> <strong style="color:#09C;">'.$valornuestropronostico2s50000.'</strong><br><br>

<p class="msj2_apuesta_realizada"><strong>Recuerda que ganas únicamente si aciertas el resultado del partido.</strong></p><br><br>

<p>A continuación por favor llena el formulario con datos verídicos para no tener problemas con el premio.</p>

<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Nombre Completo</label>
						<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Nombre Completo" name="nombre">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail" name="email">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">No. C.C.</label>
						<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="No. C.C." name="identificacion">
						
						<span class="cd-error-message">Error message here!</span>
					</p>
                    
                    
                    <p class="fieldset">
						<label class="image-replace cd-telefono" for="signup-telefono">No. Tel</label>
						<input class="full-width has-padding has-border" id="signup-telefono" type="text" placeholder="No. Teléfono" name="telefono">
						<span class="cd-error-message">Error message here!</span>
					</p>

<p class="fieldset">
						<input type="checkbox" id="accept-18" name="edad" value="Si">
						<label for="accept-18">Acepto tener 18 años o más?</label>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="accept-terms" name="terminos" value="Acepto">
						<label for="accept-terms">Acepto <a style="cursor:pointer" class="nav-terminos">Terminos y Condiciones</a></label>
					</p>
                    <label><p>Valor a Apostar:<br><br></label>
                    
                    <div class="cd-pricing-switcher">
			
				<input class="switch-input" type="radio" name="pagos" value="6000" id="valor_6000" checked>
				<label class="cd-pricing-switcher-label label6000" for="valor_6000" >6.000</label>
				<input class="switch-input" type="radio" name="pagos" value="20000" id="valor_20000">
				<label class="cd-pricing-switcher-label label20000" for="valor_20000">20.000</label>
                <input class="switch-input" type="radio" name="pagos" value="50000" id="valor_50000">
				<label class="cd-pricing-switcher-label label50000" for="valor_50000">50.000</label>
				<span class="cd-switch"></span>
			
		</div> <!-- .cd-pricing-switcher -->

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Enviar Apuesta">
					</p>
				
</div>
';

if ($fecha_cierre>$fecha_apuesta){
	 
	 $resultado=strtotime($fecha_cierre) - strtotime($fecha_apuesta);
	 
	 $dia=intval($resultado/86400);
 $resultado=$resultado-(86400*$dia);
 $horas=intval($resultado/3600);
 $resultado=$resultado-(3600*$horas);
 $minutos=intval($resultado/60);
 $resultado=$resultado-(60*$minutos);
 $segundos=intval($resultado);

if ($partido1s==""){
echo $mensajerequerido='<p class="msjerror_apuesta_realizada">¡Por favor selecciona una opción por cada partido!</p>';
}
else{

echo "$mensaje3";
}
}

else{
		 
	echo	$mensajeout='<p class="msjerror_apuesta_realizada">¡Tiempo límite superado, por favor espera la próxima apuesta!</p>';
		 
		 
		 }
}

 else{
		 
	echo	$mensajeout='<p class="msjerror_apuesta_realizada">¡Tiempo límite superado, por favor espera la próxima apuesta!</p>';
		 
		 
		 }

?>