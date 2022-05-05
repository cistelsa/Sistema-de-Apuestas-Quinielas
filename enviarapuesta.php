 <?php 
 error_reporting(E_ALL ^ E_NOTICE);
 require_once 'variables.php';
$resultado=strtotime($fecha_cierre) - strtotime($fecha_apuesta);
 
 $dia=intval($resultado/86400);
 $resultado=$resultado-(86400*$dia);
 $horas=intval($resultado/3600);
 $resultado=$resultado-(3600*$horas);
 $minutos=intval($resultado/60);
 $resultado=$resultado-(60*$minutos);
 $segundos=intval($resultado);
 

	
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$identificacion = $_POST['identificacion'];
$telefono = $_POST['telefono'];
$edad = $_POST['edad'];

$terminos = $_POST['terminos'];
$pagos = $_POST['pagos'];

$partido1do = $_POST['partido1do'];
$partido2do = $_POST['partido2do'];
$partido3do = $_POST['partido3do'];
$partido1s = $_POST['partido1s'];
$partido1 = $_POST['partido1'];
$partido2 = $_POST['partido2'];
$partido3 = $_POST['partido3'];
$partido4 = $_POST['partido4'];
$partido5 = $_POST['partido5'];
$partido6 = $_POST['partido6'];
$partido7 = $_POST['partido7'];
$partido8 = $_POST['partido8'];




if (!filter_var($mail, FILTER_VALIDATE_EMAIL)=== false && $nombre !="" && $identificacion !="" && $telefono !="" && $edad !="" && $terminos !="") {
	
				
	
$host = "localhost";
$usuario = "gogol";
$contraseña = "Af161951e";
$db = "gogol";
$conexion = new mysqli($host, $usuario, $contraseña, $db);

if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL. Error " . mysqli_connect_errno() . " : ". mysqli_connect_error() . PHP_EOL;
    die;
}

$conexion->set_charset("utf8");

// Version anterior PHP 5

//$conexion = mysql_connect($host, $usuario, $contraseña);
//mysql_set_charset('utf8');
//mysql_select_db("gogol", $conexion);
//$consulta = mysql_query("SELECT MAX(pin) as pin FROM czqmd_apuestas_de_valor LIMIT 1");

$consulta = $conexion->query("SELECT MAX(pin) as pin FROM czqmd_apuestas_de_valor LIMIT 1");


$rersultado = $consulta->fetch_array(MYSQLI_ASSOC);
 
// Si el codigo actual esta vacio o es 0, se convierte en 1.
// En caso contrario se le suma +1.
$codigo = (empty($rersultado['pin']) ? 1 : $rersultado['pin']+=1);

$insertar = "insert into czqmd_apuestas_de_valor(pin,nombre,email,identificacion,telefono,edad,terminos,pagos,partido1do,partido2do,partido3do,partido1s,partido1,partido2,partido3,partido4,partido5,partido6,partido7,partido8,fecha_apuesta) values('$codigo','$nombre','$mail','$identificacion','$telefono','$edad','$terminos','$pagos','$partido1do','$partido2do','$partido3do','$partido1s','$partido1','$partido2','$partido3','$partido4','$partido5','$partido6','$partido7','$partido8','$fecha_apuesta')";
$conexion->query($insertar);
mysqli_close($conexion);


//formato tu apuesta para enviar al email//

$partidocombinadas1=''. $partido1 .'<br /><br />';
		  
		  $partidocombinadas2=''. $partido2 .'<br /><br />';
		  
		  $partidocombinadas3=''. $partido3 .'<br /><br />';
		  
		  $partidocombinadas4=''. $partido4 .'<br /><br />';
		  
		  $partidocombinadas5=''. $partido5 .'<br /><br />';
		  
		  $partidocombinadas6=''. $partido6 .'<br /><br />';
		  
		  $partidocombinadas7=''. $partido7 .'<br /><br />';
		  
		  $partidocombinadas8=''. $partido8 .'<br /><br />';
		  
		  $partidosencilla1=''. $partido1s .'<br /><br />';
		  
		  $partidodoble1=''. $partido1do .'<br /><br />';
		  
		  $partidodoble2=''. $partido2do .'<br /><br />';
		  
		  $partidodoble3=''. $partido3do .'<br /><br />';


//formato tu apuesta sitio web//

$partidocombinadasw1='<label for="partido1"><span>'. $partido1 .'</span> 
     <input name="partido1" id="partido1" class="full-width res-padding has-border" readonly="readonly" disabled="disabled" value="'. $partido1 .'" type="text"></label><br>';
		  
		  $partidocombinadasw2='<label for="partido2"><span>'. $partido2 .'</span> 
     <input name="partido2" id="partido2" class="full-width res-padding has-border" readonly="readonly" disabled="disabled" value="'. $partido2 .'" type="text"></label><br>';
		  
		  $partidocombinadasw3='<label for="partido3"><span>'. $partido3 .'</span> 
     <input name="partido3" id="partido3" class="full-width res-padding has-border" readonly="readonly" disabled="disabled" value="'. $partido3 .'" type="text"></label><br>';
		  
		  $partidocombinadasw4='<label for="partido4"><span>'. $partido4 .'</span> 
     <input name="partido4" id="partido4" class="full-width res-padding has-border" readonly="readonly" disabled="disabled" value="'. $partido4 .'" type="text"></label><br>';
		  
		  $partidocombinadasw5='<label for="partido5"><span>'. $partido5 .'</span> 
     <input name="partido5" id="partido5" class="full-width res-padding has-border" readonly="readonly" disabled="disabled" value="'. $partido5 .'" type="text"></label><br>';
		  
		  $partidocombinadasw6='<label for="partido6"><span>'. $partido6 .'</span> 
     <input name="partido6" id="partido6" class="full-width res-padding has-border" readonly="readonly" disabled="disabled" value="'. $partido6 .'" type="text"></label><br>';
		  
		  $partidocombinadasw7='<label for="partido7"><span>'. $partido7 .'</span> 
     <input name="partido7" id="partido7" class="full-width res-padding has-border" readonly="readonly" disabled="disabled" value="'. $partido7 .'" type="text"></label><br>';
		  
		  $partidocombinadasw8='<label for="partido8"><span>'. $partido8 .'</span> 
     <input name="partido8" id="partido8" class="full-width res-padding has-border" readonly="readonly" disabled="disabled" value="'. $partido8 .'" type="text"></label><br>';
		  
		  $partidosencillaw1='<label for="partido1s"><span>'. $partido1s .'</span> 
     <input name="partido1s" id="partido1s" class="full-width res-padding has-border" readonly="readonly" disabled="disabled" value="'. $partido1s .'" type="text"></label><br>';
		  
		  $partidodoblew1='<label for="partido1do"><span>'. $partido1do .'</span> 
     <input name="partido1do" id="partido1do" class="full-width res-padding has-border" readonly="readonly" disabled="disabled" value="'. $partido1do .'" type="text"></label><br>';
		  
		  $partidodoblew2='<label for="partido2do"><span>'. $partido2do .'</span> 
     <input name="partido2do" id="partido2do" class="full-width res-padding has-border" readonly="readonly" disabled="disabled" value="'. $partido2do .'" type="text"></label><br>';
		  
		  $partidodoblew3='<label for="partido3do"><span>'. $partido3do .'</span> 
     <input name="partido3do" id="partido3do" class="full-width res-padding has-border" readonly="readonly" disabled="disabled" value="'. $partido3do .'" type="text"></label><br>';


//Mensaje al enviar la apuesta con valor de 6000 - 20000 - 50000//

$mensaje6000 .='
<div class="borrar_dato2">
<p class="msj2_apuesta_realizada"><strong>Se ha enviado la Programación exitosamente...</strong></p><br>

<p class="msj3_apuesta_realizada"><strong>Después de realizado el pago se notificará a través de email; el valor total a ganar.</strong></p><br><br>

<p class="msj1_apuesta_realizada"><strong style="color:#09C;">Importante:</strong> Recomendamos realizar el pago a través de  <strong style="color:#09C;">Vía Baloto</strong> para pagos de <strong style="color:#09C;">$6000</strong> en adelante o <strong style="color:#09C;">Efecty</strong> para pagos de <strong style="color:#09C;">$20.000</strong> en adelante, debido a su agilidad en el proceso, <strong style="color:#09C;">no realizar el pago con tarjeta de crédito</strong>, tenga en cuenta que puede tardar más de 48 horas en verificación y no podría participar en la Programación.</p>



<a>'.$boton6000.'</a><br><br>

							<strong style="font-size: 100%; line-height: 20px;">Apuesta Realizada: (No. #'.$codigo.')</strong><br><br>

<p class="apuesta_realizada">';


$mensaje20000 .='<div class="borrar_dato2"><p class="msj2_apuesta_realizada"><strong>Se ha enviado la Programación exitosamente...</strong></p><br>

<p class="msj3_apuesta_realizada"><strong>Después de realizado el pago se notificará a través de email; el valor total a ganar.</strong></p><br><br>

<p class="msj1_apuesta_realizada"><strong style="color:#09C;">Importante:</strong> Recomendamos realizar el pago a través de  <strong style="color:#09C;">Vía Baloto</strong> para pagos de <strong style="color:#09C;">$6000</strong> en adelante o <strong style="color:#09C;">Efecty</strong> para pagos de <strong style="color:#09C;">$20.000</strong> en adelante, debido a su agilidad en el proceso, <strong style="color:#09C;">no realizar el pago con tarjeta de crédito</strong>, tenga en cuenta que puede tardar más de 48 horas en verificación y no podría participar en la Programación.</p>

<a>'.$boton20000.'</a><br><br>
<strong style="font-size: 100%; line-height: 20px;">Apuesta Realizada: (No. #'.$codigo.')</strong><br><br>

<p class="apuesta_realizada">';

$mensaje50000 .='<div class="borrar_dato2"><p class="msj2_apuesta_realizada"><strong>Se ha enviado la Programación exitosamente...</strong></p><br>

<p class="msj3_apuesta_realizada"><strong>Después de realizado el pago se notificará a través de email; el valor total a ganar.</strong></p><br><br>

<p class="msj1_apuesta_realizada"><strong style="color:#09C;">Importante:</strong> Recomendamos realizar el pago a través de  <strong style="color:#09C;">Vía Baloto</strong> para pagos de <strong style="color:#09C;">$6000</strong> en adelante o <strong style="color:#09C;">Efecty</strong> para pagos de <strong style="color:#09C;">$20.000</strong> en adelante, debido a su agilidad en el proceso, <strong style="color:#09C;">no realizar el pago con tarjeta de crédito</strong>, tenga en cuenta que puede tardar más de 48 horas en verificación y no podría participar en la Programación.</p>

<a>'.$boton50000.'</a><br><br>
<strong style="font-size: 100%; line-height: 20px;">Apuesta Realizada: (No. #'.$codigo.')</strong><br><br>

<p class="apuesta_realizada">
';





$mailer = 'ayuda@gogolclub.com';

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-type:text/html;charset=UTF-8\r\n\r\n";

$header2 = 'From:  ' . $mailer . " \r\n";
$header2 .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header2 .= "Mime-Version: 1.0 \r\n";
$header2 .= "Content-type:text/html;charset=UTF-8\r\n\r\n";

$mensaje .= '<div class="align-center" id="fondo">
    <div id="apDiv1"><img src="http://cistelsa.com/images/logop.png" alt="CISTELSA" width="132" height="64" /></div>
    <h4><strong>Cupón de Apuesta</strong></h4>
                        
            <p>TUS DATOS</p>
            <label for="nombre">&nbsp;&nbsp;&nbsp; Nombre &nbsp;&nbsp;'. $nombre .'<em></em></label><br>
            
               <label for="email">&nbsp;&nbsp;&nbsp; Email &nbsp;&nbsp;'. $mail .'<em></em></label><br>
            
                       
            <label for="identificacion">&nbsp;&nbsp;&nbsp;No. Identificación &nbsp;&nbsp;'. $identificacion .'<em></em></label><br>
			
			<label for="telefono">&nbsp;&nbsp;&nbsp;No. de Contacto &nbsp;&nbsp;'. $telefono .'<em></em></label><br>
			
			<label for="edad">&nbsp;&nbsp;&nbsp;Confirmación 18 años o más &nbsp;&nbsp;'. $edad .'<em></em></label><br>
			
			<label for="terminos">&nbsp;&nbsp;&nbsp;Acepta Términos y Condiciones &nbsp;&nbsp;'. $terminos .'<em></em></label><br>
			
			<label for="pago">&nbsp;&nbsp;&nbsp;Valor Apostado &nbsp;&nbsp;'. $pagos .'<em></em></label><br>
			
			<label for="Fecha de Apuesta">&nbsp;&nbsp;&nbsp;Fecha de Apuesta &nbsp;&nbsp;'. date('F j, Y, g:i a', time()).'<em></em></label><br>
			
			
			
			
			<p>&nbsp;</p>
			
			<p>Apuesta Realizada:</p>

<p>';
			
					
			if ($partido1 == ""){ $mensaje .=" ";
             
      }
	  
	  else{
		 $mensaje .= "$partidocombinadas1";
		  
		  }
		  
	
	if ($partido2 == ""){ $mensaje .=" ";
             
      }
	  
	  else{
		 $mensaje .= "$partidocombinadas2";
		  
		  }
	
	
	
	
	if ($partido3 == ""){ $mensaje .=" ";
             
      }
	  
	  else{
		 $mensaje .= "$partidocombinadas3";
		  
		  }
	
	
	
	
	if ($partido4 == ""){ $mensaje .=" ";
             
      }
	  
	  else{
		 $mensaje .= "$partidocombinadas4";
		  
		  }
	
	
	if ($partido5 == ""){ $mensaje .=" ";
             
      }
	  
	  else{
		 $mensaje .= "$partidocombinadas5";
		  
		  }
	
	
	if ($partido6 == ""){ $mensaje .=" ";
             
      }
	  
	  else{
		 $mensaje .= "$partidocombinadas6";
		  
		  }
	
	
	if ($partido7 == ""){ $mensaje .=" ";
             
      }
	  
	  else{
		 $mensaje .= "$partidocombinadas7";
		  
		  }
	
		
	if ($partido8 == ""){ $mensaje .=" ";
             
      }
	  
	  else{
		 $mensaje .= "$partidocombinadas8";
		  
		  }
	
		
	if ($partido1s == ""){ $mensaje .=" ";
             
      }
	  
	  else{
		 $mensaje .= "$partidosencilla1";
		  
		  }
	
	
		
	if ($partido1do == ""){ $mensaje .=" ";
             
      }
	  
	  else{
		 $mensaje .= "$partidodoble1";
		  
		  }
	
		
	if ($partido2do == ""){ $mensaje .=" ";
             
      }
	  
	  else{
		 $mensaje .= "$partidodoble2";
		  
		  }
	
		
	if ($partido3do == ""){ $mensaje .=" ";
             
      }
	  
	  else{
		 $mensaje .= "$partidodoble3";
		  
		  }
	
	
	'


</p>
			
            
            
                            
                
      </div>';


mail($mailer, "Programa de Apuesta Realizada", $mensaje, $header);

 if ($partido1 == "")
 
 { $imputpartido1= "";
             
      }
	  
	  else{
		 $imputpartido1= $partidocombinadas1;
		  
		  }
		  
		  ;
 if ($partido2 == "")
 
 { $imputpartido2= "";
             
      }
	  
	  else{
		 $imputpartido2=$partidocombinadas2;
		  
		  }
		  ;
 if ($partido3 == "")
 
 { $imputpartido3= "";
             
      }
	  
	  else{
		 $imputpartido3= $partidocombinadas3;
		  
		  }
		  ;
 if ($partido4 == "")
 
 { $imputpartido4= "";
             
      }
	  
	  else{
		 $imputpartido4= $partidocombinadas4;
		  
		  }
		  
		  ;
 if ($partido5 == "")
 
 { $imputpartido5= "";
             
      }
	  
	  else{
		 $imputpartido5= $partidocombinadas5;
		  
		  }
		  
		  ;
 if ($partido6 == "")
 
 { $imputpartido6= "";
             
      }
	  
	  else{
		 $imputpartido6= $partidocombinadas6;
		  
		  }
		  
		  ;
 if ($partido7 == "")
 
 { $imputpartido7= "";
             
      }
	  
	  else{
		 $imputpartido7= $partidocombinadas7;
		  
		  }
		  
		  ;
 if ($partido8 == "")
 
 { $imputpartido8= "";
             
      }
	  
	  else{
		 $imputpartido8= $partidocombinadas8;
		  
		  }
		  
		  ;
 if ($partido1s == "")
 
 { $imputpartido1s= "";
             
      }
	  
	  else{
		 $imputpartido1s= $partidosencilla1;
		  
		  }
		  
		  ;
 if ($partido1do == "")
 
 { $imputpartido1do= "";
             
      }
	  
	  else{
		 $imputpartido1do= $partidodoble1;
		  
		  }
		  
		  ;
 if ($partido2do == "")
 
 { $imputpartido2do= "";
             
      }
	  
	  else{
		 $imputpartido2do= $partidodoble2;
		  
		  }
		  
		  ;
 if ($partido3do == "")
 
 { $imputpartido3do= "";
             
      }
	  
	  else{
		 $imputpartido3do= $partidodoble3;
		  
		  }
		  
		  
		  
		  ;
		  if ($pagos == "6000"){ $imputboton6000= $boton6000e;
             
      }
	  
	  else{
		 $imputboton6000= "";
		  
		  }
		  
		  if ($pagos == "20000"){ $imputboton20000= $boton20000e;
             
      }
	  
	  else{
		 $imputboton20000= "";
		  
		  }
		  
		  if ($pagos == "50000"){ $imputboton50000= $boton50000e;
             
      }
	  
	  else{
		 $imputboton50000= "";
		  
		  };
		  
		  if ($pagos == "6000"){ $valor6000e= $imagen6000;
             
      }
	  
	  else{
		 $valor6000e= "";
		  
		  };
		  
		   if ($pagos == "20000"){ $valor20000e= $imagen20000;
             
      }
	  
	  else{
		 $valor20000e= "";
		  
		  };
		  
		   if ($pagos == "50000"){ $valor50000e= $imagen50000;
             
      }
	  
	  else{
		 $valor50000e= "";
		  
		  };




$mensaje2 .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title></title>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<style type="text/css">
.ReadMsgBody{width: 100%; background-color: #f5f5f5; }.ExternalClass{width: 100%; background-color: #f5f5f5; }body{width: 100%; height: 100%; margin:0; padding:0; -webkit-font-smoothing: antialiased;}html{width: 100%; height: 100%;}@media only screen and (max-device-width: 480px) {.mobile_text_1 { font-family: Verdana, Geneva, sans-serif; font-size:9px; color:#FFF; text-align:left; }.mobile_text_2 { font-family:Arial, Helvetica, sans-serif; font-size:34px; color:#015591; font-weight:bold; }.mobile_text_3 { font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#434343; font-weight:bold; }}		</style>
	</head>
	<body leftmargin="0" marginheight="0" marginwidth="0" topmargin="0">
		<table align="center" bgcolor="#d3d3d3" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
			<tbody>
				<tr>
					<td height="100%" valign="top" width="100%">
						<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
							<tbody>
								<tr>
									<td>
										<table align="center" border="0" cellpadding="0" cellspacing="0" width="660">
											<tbody>
												<tr>
													<td width="30">
														&nbsp;</td>
													<td bgcolor="#FFFFFF" valign="top" width="600">
														<table bgcolor="#9bcd53" border="0" cellpadding="0" cellspacing="0" width="600">
															<tbody>
																<tr>
																	<td align="center" style="font-family: Verdana, Geneva, sans-serif; font-size:9px; color:#FFF; text-align:left;" valign="top">
																		<table align="center" border="0" cellpadding="0" cellspacing="0">
																			<tbody>
																				<tr>
																					<td align="center" valign="top">
																						&nbsp;</td>
																					<td align="left" valign="middle">
																						<section class="mobile_text_1"><span style="text-decoration:none; color:#FFF;">Somos una plataforma puente de apuestas online</span></section></td>
																					<td width="20">
																						&nbsp;</td>
																					<td align="center" valign="top">
																						&nbsp;</td>
																					<td align="left" valign="middle">
																						<section class="mobile_text_1"><a href="https://www.facebook.com/pages/Gogolclub/307729516095937" style="text-decoration:none; color:#FFF;">Estamos en facebook ingresa aqu&iacute; para seguirnos</a></section></td>
																				</tr>
																			</tbody>
																		</table>
																	</td>
																</tr>
															</tbody>
														</table>
														<table border="0" cellpadding="0" cellspacing="0" id="separador_01" width="600">
															<tbody>
																<tr>
																	<td height="15">
																		&nbsp;</td>
																</tr>
															</tbody>
														</table>
														<table align="center" border="0" cellpadding="0" cellspacing="0" width="580">
															<tbody>
																<tr>
																	<td align="center" valign="top" width="202">
																		<img src="http://gogolclub.com/images/logo.png" style="display: block; width: 179px; height: 50px;" /></td>
																	<td align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:34px; color:#015591; font-weight:bold; line-height:30px;" valign="middle">
																		<section class="mobile_text_2">Datos de tu Apuesta</section></td>
																</tr>
															</tbody>
														</table>
														<table border="0" cellpadding="0" cellspacing="0" id="separador_01" width="600">
															<tbody>
																<tr>
																	<td height="29">
																		&nbsp;</td>
																</tr>
															</tbody>
														</table>
														<table align="center" border="0" cellpadding="0" cellspacing="0" width="580">
															<tbody>
																<tr>
																	<td align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#434343; font-weight:bold;" valign="top">
																		<section class="mobile_text_3"><strong><span style="color:#ff6633;">Orden de Apuesta: <strong><span style="color:#696969;">#'.$codigo.'</span></strong><br />
																		Nombre: </span><span style="color:#696969;">'. $nombre .'</span><br />
																		<strong><span style="color:#ff6633;">Email: </span> <span style="color:#696969;">'. $mail .'</span><br />
																		<strong><span style="color:#ff6633;">No. de C.C.: </span><span style="color:#696969;">'. $identificacion .'</span><br />
																		<strong><span style="color:#ff6633;">No. de Contacto: </span><span style="color:#696969;">'. $telefono .'</span><br />
																		<strong><span style="color:#ff6633;">18 a&ntilde;os o m&aacute;s: </span><span style="color:#696969;">'. $edad .'</span><br />
																		<strong><span style="color:#ff6633;">Terminos y Condiciones: </span><span style="color:#696969;">'. $terminos .'</span><br />
																		<strong><span style="color:#ff6633;">Valor Apostado: </span><span style="color:#696969;">'. $pagos .'</span><br />
																		<strong><span style="color:#ff6633;">Fecha de Apuesta: </span><strong><span style="color:#696969;">'. date('F j, Y, g:i a', time()).'</span><br />
																		<strong><span style="color:#ff6633;">Pagar Antes de: </span><strong><span style="color:#000000;">'. $fecha_cierre.'</span><br />
																		<strong><span style="color:#ff6633;">Tiempo Restante de Pago: </span><strong><span style="color:#696969;">'. $dia.' D. - '. $horas.' H. - '. $minutos.' M.- '. $segundos.' S.<br />
																		<br />
																		Apuesta:</span><br />
																		<br />
																		<span style="color:#808080;"> '.$imputpartido1.''.$imputpartido2.''.$imputpartido3.''.$imputpartido4.''.$imputpartido5.''.$imputpartido6.''.$imputpartido7.''.$imputpartido8.''.$imputpartido1s.''.$imputpartido1do.''.$imputpartido2do.''.$imputpartido3do.'</span></section><br />
																		<strong>&nbsp;</strong></td>
																</tr>
															</tbody>
														</table>
														<table border="0" cellpadding="0" cellspacing="0" id="separador_01" width="600">
															<tbody>
																<tr>
																	<td height="15" style="text-align: center;">
'.$valor6000e.''.$valor20000e.''.$valor50000e.'																		 '.$imputboton6000.''.$imputboton20000.''.$imputboton50000.'
																		<div>
																			<span style="color:#696969;"><strong><span style="font-size: 10px;"><span style="font-family: arial,helvetica,sans-serif;">Recomendamos realizar el pago a trav&eacute;s de </span></span></strong></span><span style="color:#000000;"><strong><span style="font-size: 10px;"><span style="font-family: arial,helvetica,sans-serif;">V&iacute;a Baloto</span></span></strong></span><span style="color:#696969;"><strong><span style="font-size: 10px;"><span style="font-family: arial,helvetica,sans-serif;"> para pagos de</span></span></strong></span><span style="color:#000000;"><strong><span style="font-size: 10px;"><span style="font-family: arial,helvetica,sans-serif;"> $6000</span></span></strong></span><span style="color:#696969;"><strong><span style="font-size: 10px;"><span style="font-family: arial,helvetica,sans-serif;"> en adelante o</span></span></strong></span><span style="color:#000000;"><strong><span style="font-size: 10px;"><span style="font-family: arial,helvetica,sans-serif;"> Efecty </span></span></strong></span><span style="color:#696969;"><strong><span style="font-size: 10px;"><span style="font-family: arial,helvetica,sans-serif;">para pagos de </span></span></strong></span><span style="color:#000000;"><strong><span style="font-size: 10px;"><span style="font-family: arial,helvetica,sans-serif;">$20.000</span></span></strong></span><span style="color:#696969;"><strong><span style="font-size: 10px;"><span style="font-family: arial,helvetica,sans-serif;"> en adelante, debido a su agilidad en el proceso, </span></span></strong></span><span style="color:#000000;"><strong><span style="font-size: 10px;"><span style="font-family: arial,helvetica,sans-serif;">no realizar el pago con tarjeta de cr&eacute;dito</span></span></strong></span><span style="color:#696969;"><strong><span style="font-size: 10px;"><span style="font-family: arial,helvetica,sans-serif;">, tenga en cuenta que puede tardar m&aacute;s de 48 horas en verificaci&oacute;n y no podr&iacute;a participar en la Programaci&oacute;n, a&uacute;n as&iacute; si lo realiza con tarjeta de cr&eacute;dito, informarle al agente de Payu Latam encargado de la verificaci&oacute;n; que su pago corresponde a &quot;</span></span></strong></span><span style="color:#000000;"><strong><span style="font-size: 10px;"><span style="font-family: arial,helvetica,sans-serif;">PROGRAMACI&Oacute;N WEB</span></span></strong></span><span style="color:#696969;"><strong><span style="font-size: 10px;"><span style="font-family: arial,helvetica,sans-serif;">&quot; &uacute;nicamente. Esto para agilizar el proceso.</span></span></strong></span></div>
																	</td>
																</tr>
															</tbody>
														</table>
														<table border="0" cellpadding="0" cellspacing="0" width="600">
															<tbody>
																<tr>
																	<td align="center" valign="top" width="200">
																		<a href="https://www.facebook.com/pages/Gogolclub/307729516095937"><img alt="Síguenos en Facebook" src="http://gogolclub.com/bets/img/facebook_icono.jpg" style="display: block; border-width: 0px; border-style: solid; width: 200px; height: 201px;" /></a></td>
																	<td align="center" valign="top" width="200">
																		<a href="http://goo.gl/TfSm5c"><img alt="Aplicación Movil" src="http://gogolclub.com/bets/img/img_email.jpg" style="display: block; border-width: 0px; border-style: solid; width: 200px; height: 200px;" /></a></td>
																	<td align="center" valign="top" width="200">
																		<a href="http://goo.gl/TfSm5c"><img alt="Aplicación Facebook" src="http://gogolclub.com/bets/img/img_app_facebook.jpg" style="display: block; border-width: 0px; border-style: solid; width: 200px; height: 200px;" /></a></td>
																</tr>
															</tbody>
														</table>
														<table border="0" cellpadding="0" cellspacing="0" id="separador_01" width="600">
															<tbody>
																<tr>
																	<td height="7">
																		&nbsp;</td>
																</tr>
															</tbody>
														</table>
														<table bgcolor="#9bcd53" border="0" cellpadding="0" cellspacing="0" width="600">
															<tbody>
																<tr>
																	<td>
																		&nbsp;</td>
																</tr>
																<tr>
																	<td align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; color:#fff; font-weight:bold;" valign="middle">
																		&copy; GOGOLCLUB<br />
																		Todos los derechos reservados - 2015<br />
																		Centro de ayuda y soporte: ayuda@gogolclub.com<br />
																		Website:<a href="#" style="text-decoration:none; color:#FFF;"> www.gogolclub.com</a></td>
																</tr>
																<tr>
																	<td>
																		&nbsp;</td>
																</tr>
															</tbody>
														</table>
													</td>
													<td width="29">
														&nbsp;</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</body>
</html>';
			
			
		
mail($mail, "Apuesta Realizada - Realice Pago", $mensaje2, $header2);




			
			
			if ($partido1 == ""){ $mensaje6000 .=" ";
             
      }
	  
	  else{
		 $mensaje6000 .= "$partidocombinadasw1";
		  
		  }
		  
		
	if ($partido2 == ""){ $mensaje6000 .=" ";
             
      }
	  
	  else{
		 $mensaje6000 .= "$partidocombinadasw2";
		  
		  }
	
		
	if ($partido3 == ""){ $mensaje6000 .=" ";
             
      }
	  
	  else{
		 $mensaje6000 .= "$partidocombinadasw3";
		  
		  }
		
	if ($partido4 == ""){ $mensaje6000 .=" ";
             
      }
	  
	  else{
		 $mensaje6000 .= "$partidocombinadasw4";
		  
		  }
		
	if ($partido5 == ""){ $mensaje6000 .=" ";
             
      }
	  
	  else{
		 $mensaje6000 .= "$partidocombinadasw5";
		  
		  }
	
		
	if ($partido6 == ""){ $mensaje6000 .=" ";
             
      }
	  
	  else{
		 $mensaje6000 .= "$partidocombinadasw6";
		  
		  }
	
	
	if ($partido7 == ""){ $mensaje6000 .=" ";
             
      }
	  
	  else{
		 $mensaje6000 .= "$partidocombinadasw7";
		  
		  }
		
	if ($partido8 == ""){ $mensaje6000 .=" ";
             
      }
	  
	  else{
		 $mensaje6000 .= "$partidocombinadasw8";
		  
		  }
	
	
	if ($partido1s == ""){ $mensaje6000 .=" ";
             
      }
	  
	  else{
		 $mensaje6000 .= "$partidosencillaw1";
		  
		  }
	
	
		
	if ($partido1do == ""){ $mensaje6000 .=" ";
             
      }
	  
	  else{
		 $mensaje6000 .= "$partidodoblew1";
		  
		  }
	
		
	if ($partido2do == ""){ $mensaje6000 .=" ";
             
      }
	  
	  else{
		 $mensaje6000 .= "$partidodoblew2";
		  
		  }
	
	
	if ($partido3do == ""){ $mensaje6000 .=" ";
             
      }
	  
	  else{
		 $mensaje6000 .= "$partidodoblew3";
		  
		  }
	
	
	'



</p>    
 	</div> 								
								
';


			
			
			if ($partido1 == ""){ $mensaje20000 .=" ";
             
      }
	  
	  else{
		 $mensaje20000 .= "$partidocombinadasw1";
		  
		  }
		  
		
	if ($partido2 == ""){ $mensaje20000 .=" ";
             
      }
	  
	  else{
		 $mensaje20000 .= "$partidocombinadasw2";
		  
		  }
	
		
	if ($partido3 == ""){ $mensaje20000 .=" ";
             
      }
	  
	  else{
		 $mensaje20000 .= "$partidocombinadasw3";
		  
		  }
		
	if ($partido4 == ""){ $mensaje20000 .=" ";
             
      }
	  
	  else{
		 $mensaje20000 .= "$partidocombinadasw4";
		  
		  }
		
	if ($partido5 == ""){ $mensaje20000 .=" ";
             
      }
	  
	  else{
		 $mensaje20000 .= "$partidocombinadasw5";
		  
		  }
	
		
	if ($partido6 == ""){ $mensaje20000 .=" ";
             
      }
	  
	  else{
		 $mensaje20000 .= "$partidocombinadasw6";
		  
		  }
	
	
	if ($partido7 == ""){ $mensaje20000 .=" ";
             
      }
	  
	  else{
		 $mensaje20000 .= "$partidocombinadasw7";
		  
		  }
		
	if ($partido8 == ""){ $mensaje20000 .=" ";
             
      }
	  
	  else{
		 $mensaje20000 .= "$partidocombinadasw8";
		  
		  }
	
	
	if ($partido1s == ""){ $mensaje20000 .=" ";
             
      }
	  
	  else{
		 $mensaje20000 .= "$partidosencillaw1";
		  
		  }
	
	
		
	if ($partido1do == ""){ $mensaje20000 .=" ";
             
      }
	  
	  else{
		 $mensaje20000 .= "$partidodoblew1";
		  
		  }
	
		
	if ($partido2do == ""){ $mensaje20000 .=" ";
             
      }
	  
	  else{
		 $mensaje20000 .= "$partidodoblew2";
		  
		  }
	
	
	if ($partido3do == ""){ $mensaje20000 .=" ";
             
      }
	  
	  else{
		 $mensaje20000 .= "$partidodoblew3";
		  
		  }
	
	
	'
</p>    
 	</div> 								
								
';


			
			
			if ($partido1 == ""){ $mensaje50000 .=" ";
             
      }
	  
	  else{
		 $mensaje50000 .= "$partidocombinadasw1";
		  
		  }
		  
		
	if ($partido2 == ""){ $mensaje50000 .=" ";
             
      }
	  
	  else{
		 $mensaje50000 .= "$partidocombinadasw2";
		  
		  }
	
		
	if ($partido3 == ""){ $mensaje50000 .=" ";
             
      }
	  
	  else{
		 $mensaje50000 .= "$partidocombinadasw3";
		  
		  }
		
	if ($partido4 == ""){ $mensaje50000 .=" ";
             
      }
	  
	  else{
		 $mensaje50000 .= "$partidocombinadasw4";
		  
		  }
		
	if ($partido5 == ""){ $mensaje50000 .=" ";
             
      }
	  
	  else{
		 $mensaje50000 .= "$partidocombinadasw5";
		  
		  }
	
		
	if ($partido6 == ""){ $mensaje50000 .=" ";
             
      }
	  
	  else{
		 $mensaje50000 .= "$partidocombinadasw6";
		  
		  }
	
	
	if ($partido7 == ""){ $mensaje50000 .=" ";
             
      }
	  
	  else{
		 $mensaje50000 .= "$partidocombinadasw7";
		  
		  }
		
	if ($partido8 == ""){ $mensaje50000 .=" ";
             
      }
	  
	  else{
		 $mensaje50000 .= "$partidocombinadasw8";
		  
		  }
	
	
	if ($partido1s == ""){ $mensaje50000 .=" ";
             
      }
	  
	  else{
		 $mensaje50000 .= "$partidosencillaw1";
		  
		  }
	
	
		
	if ($partido1do == ""){ $mensaje50000 .=" ";
             
      }
	  
	  else{
		 $mensaje50000 .= "$partidodoblew1";
		  
		  }
	
		
	if ($partido2do == ""){ $mensaje50000 .=" ";
             
      }
	  
	  else{
		 $mensaje50000 .= "$partidodoblew2";
		  
		  }
	
	
	if ($partido3do == ""){ $mensaje50000 .=" ";
             
      }
	  
	  else{
		 $mensaje50000 .= "$partidodoblew3";
		  
		  }
	
	
	'


</p>    
 	</div> 								
								
';


     
	  if ($pagos == "6000") {
		  
		  	    
         echo "$mensaje6000";
             
      }else{
		  
		  echo " ";
		  
		  }
	  
	  
	  if ($pagos == "20000") {
      
 
              
            echo "$mensaje20000";
             
      }
	  
	  else{
		  
		  echo " ";
		  
		  }
	  
	  if ($pagos == "50000") {
      
 
              
            echo "$mensaje50000";
             
      }
	  else{
		  
		  echo " ";
		  
		  }
		  

  
}



	else{


       if ($nombre==""){

echo '<p class="msjerror_apuesta_realizada"><strong>Ingrese el Nombre Completo</strong></p><br>';
}


if ($identificacion==""){

echo '<p class="msjerror_apuesta_realizada"><strong>Ingrese número de cédula</strong></p><br>';
}


if ($telefono==""){

echo '<p class="msjerror_apuesta_realizada"><strong>Ingrese número de contacto. Eje. Tel. o Movil</strong></p><br>';
}

if ($edad==""){

echo '<p class="msjerror_apuesta_realizada"><strong>No ha aceptado que tiene 18 años o más</strong></p><br>';
}

if ($terminos==""){

echo '<p class="msjerror_apuesta_realizada"><strong>Por favor acepte los términos y condiciones de GogolClub</strong></p><br>';
}



if (!filter_var($mail, FILTER_VALIDATE_EMAIL)!== false) {
		
		echo '<p class="msjerror_apuesta_realizada"><strong>No ha ingresado el Email o '.$mail.' no tiene un formato válido.</strong></p><br>';
		
		}
 }

?>