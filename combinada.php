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




$partido1 = $_POST['partido1'];
$partido2 = $_POST['partido2'];
$partido3 = $_POST['partido3'];
$partido4 = $_POST['partido4'];
$partido5 = $_POST['partido5'];
$partido6 = $_POST['partido6'];
$partido7 = $_POST['partido7'];
$partido8 = $_POST['partido8'];


$mensaje2 .= '
<div class="borrar_dato">
<strong style="font-size: 100%; line-height: 20px;">Apuesta Realizada: (Combinada)</strong><br><br>

<p class="apuesta_realizada"><label for="partido1"><span>'.$partido1equipoL.'-'.$partido1equipoV.' Resultado: ' . $partido1 .'</span> <input name="partido1" id="partido1" class="full-width res-padding has-border" readonly="readonly"  value="'.$partido1equipoL.'-'.$partido1equipoV.' Resultado: ' . $partido1 .'" type="text"></label><br>
<label for="partido2"><span>'.$partido2equipoL.'-'.$partido2equipoV.' Resultado: ' . $partido2 .'</span> <input name="partido2" id="partido2" class="full-width res-padding has-border" readonly="readonly"  value="'.$partido2equipoL.'-'.$partido2equipoV.' Resultado: ' . $partido2 .'" type="text"></label><br>

<label for="partido3"><span>'.$partido3equipoL.'-'.$partido3equipoV.' Resultado: ' . $partido3 .'</span> <input name="partido3" id="partido3" class="full-width res-padding has-border" readonly="readonly"  value="'.$partido3equipoL.'-'.$partido3equipoV.' Resultado: ' . $partido3 .'" type="text"></label><br>
<label for="partido4"><span>'.$partido4equipoL.'-'.$partido4equipoV.' Resultado: ' . $partido4 .'</span> <input name="partido4" id="partido4" class="full-width res-padding has-border" readonly="readonly" value="'.$partido4equipoL.'-'.$partido4equipoV.' Resultado: ' . $partido4 .'" type="text"></label><br>
<label for="partido5"><span>'.$partido5equipoL.'-'.$partido5equipoV.' Resultado: ' . $partido5 .'</span> <input name="partido5" id="partido5" class="full-width res-padding has-border" readonly="readonly"  value="'.$partido5equipoL.'-'.$partido5equipoV.' Resultado: ' . $partido5 .'" type="text"></label><br>
<label for="partido6"><span>'.$partido6equipoL.'-'.$partido6equipoV.' Resultado: ' . $partido6 .'</span> <input name="partido6" id="partido6" class="full-width res-padding has-border" readonly="readonly"  value="'.$partido6equipoL.'-'.$partido6equipoV.' Resultado: ' . $partido6 .'" type="text"></label><br>
<label for="partido7"><span>'.$partido7equipoL.'-'.$partido7equipoV.' Resultado: ' . $partido7 .'</span> <input name="partido7" id="partido7" class="full-width res-padding has-border" readonly="readonly"  value="'.$partido7equipoL.'-'.$partido7equipoV.' Resultado: ' . $partido7 .'" type="text"></label><br>
<label for="partido8"><span>'.$partido8equipoL.'-'.$partido8equipoV.' Resultado: ' . $partido8 .'</span> <input name="partido8" id="partido8" class="full-width res-padding has-border" readonly="readonly"  value="'.$partido8equipoL.'-'.$partido8equipoV.' Resultado: ' . $partido8 .'" type="text"></label><br>
</p>

<p class="msj1_apuesta_realizada"><strong style="color:#09C;">Valor a Ganar:</strong> Si utilizas <strong>nuestros pronósticos</strong> con valor apostado de $6000 la ganancia es de <strong style="color:#09C;">'.$valornuestropronostico6000.'</strong>, de $20000 la ganancia es de <strong style="color:#09C;">'.$valornuestropronostico20000.'</strong>, de $50000 la ganancia es de <strong style="color:#09C;">'.$valornuestropronostico50000.'</strong>.</p>

<p class="msj2_apuesta_realizada"><strong>Recuerda que ganas únicamente si aciertas todos los partidos.</strong></p><br><br>

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

if ($partido1=="" || $partido2=="" || $partido3=="" || $partido4=="" || $partido5=="" || $partido6=="" || $partido7=="" || $partido8==""){
echo $mensajerequerido='<p class="msjerror_apuesta_realizada">¡Por favor selecciona una opción por cada partido!</p>';
}
else{
echo "$mensaje2";


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

