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
 
 

$partido1do = $_POST['partido1do'];
$partido2do = $_POST['partido2do'];
$partido3do = $_POST['partido3do'];

$mensaje4 .= '
<div class="borrar_dato">
<strong style="font-size: 100%; line-height: 20px;">Apuesta Realizada: (Doble Oportunidad)</strong><br><br>

<p class="apuesta_realizada"><label for="partido1do"><span>' . $partido1doequipoL .'-' . $partido1doequipoV .' Resultado: ' . $partido1do .'</span> <input name="partido1do" id="partido1do" class="full-width res-padding has-border" readonly="readonly"  value="' . $partido1doequipoL .'-' . $partido1doequipoV .' Resultado: ' . $partido1do .'" type="text"></label><br>
<label for="partido2do"><span>' . $partido2doequipoL .'-' . $partido2doequipoV .' Resultado: ' . $partido2do .'</span> <input name="partido2do" id="partido2do" class="full-width res-padding has-border" readonly="readonly"  value="' . $partido2doequipoL .'-' . $partido2doequipoV .' Resultado: ' . $partido2do .'" type="text"></label><br>

<label for="partido3do"><span>' . $partido3doequipoL .'-' . $partido3doequipoV .' Resultado: ' . $partido3do .'</span> <input name="partido3do" id="partido3do" class="full-width res-padding has-border" readonly="readonly"  value="' . $partido3doequipoL .'-' . $partido3doequipoV .' Resultado: ' . $partido3do .'" type="text"></label><br>
</p>

<p class="msj1_apuesta_realizada"><strong style="color:#09C;">Valor a Ganar:</strong> Si utilizas <strong>nuestros pronósticos</strong> con valor apostado de $6000 la ganancia es de <strong style="color:#09C;">'.$valornuestropronosticodo6000.'</strong>, de $20000 la ganancia es de <strong style="color:#09C;">'.$valornuestropronosticodo20000.'</strong>, de $50000 la ganancia es de <strong style="color:#09C;">'.$valornuestropronosticodo50000.'</strong>.</p>

<p class="msj2_apuesta_realizada"><strong>Recuerda que ganas únicamente si aciertas todos los partidos. ¡Doble Oportunidad más fácil de Ganar!</strong></p><br><br>

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
 
 if ($partido1do=="" || $partido2do=="" || $partido3do==""){
echo $mensajerequerido='<p class="msjerror_apuesta_realizada">¡Por favor selecciona una opción por cada partido!</p>';
}
else{


echo "$mensaje4";
}

}
else{
		 
		echo $mensajeout='<p class="msjerror_apuesta_realizada">¡Tiempo límite superado, por favor espera la próxima apuesta!</p>';
		 
		 
		 }
}


else{
		 
		echo $mensajeout='<p class="msjerror_apuesta_realizada">¡Tiempo límite superado, por favor espera la próxima apuesta!</p>';
		 
		 
		 }

?>