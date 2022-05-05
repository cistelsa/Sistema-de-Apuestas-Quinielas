 <?php 
  error_reporting(E_ALL ^ E_NOTICE);
 //Ingresar fecha y hora de cierre apuesta//
 $fecha_cierre="2022-05-08 15:00:00" ;
 //Fecha y hora de Hoy//
 $fecha_apuesta= date('Y-m-d H:i:s', time());
 
 //Partidos de 1 a 8 de la combinada ingresar equipo local - No. de imagen escudo local - equipo visitante - No. de imagen escudo visitante - fecha y hora del partido//
 $valornuestropronostico6000="$162.000";
 $valornuestropronostico20000="$540.000";
 $valornuestropronostico50000="$1.350.000";
 
$partido1equipoL="Córdoba";
$partido1imgL="831";
$partido1equipoV="Real Madrid";
$partido1imgV="2107";
$partido1hora="20-01 11:00";

$partido2equipoL="Elché";
$partido2imgL="975";
$partido2equipoV="Barcelona";
$partido2imgV="429";
$partido2hora="20-01 13:00";

$partido3equipoL="A Madrid";
$partido3imgL="369";
$partido3equipoV="Rayo";
$partido3imgV="2080";
$partido3hora="20-01 15:00";


$partido4equipoL="R Sociedad";
$partido4imgL="2120";
$partido4equipoV="Eibar";
$partido4imgV="957";
$partido4hora="20-01 15:00";


$partido5equipoL="Villareal";
$partido5imgL="2716";
$partido5equipoV="Levante";
$partido5imgV="1547";
$partido5hora="20-01 15:00";


$partido6equipoL="Deportivo";
$partido6imgL="901";
$partido6equipoV="Granada";
$partido6imgV="4235";
$partido6hora="20-01 05:00";


$partido7equipoL="Athletic";
$partido7imgL="347";
$partido7equipoV="Málaga";
$partido7imgV="1617";
$partido7hora="20-01 12:00";


$partido8equipoL="Espanyol";
$partido8imgL="998";
$partido8equipoV="Almería";
$partido8imgV="183";
$partido8hora="20-01 14:00";

//Partido de la sencilla ingresar equipo local - No. de imagen escudo local - equipo visitante - No. de imagen escudo visitante - fecha y hora del partido//

$valornuestropronostico1s6000="$12.000";
 $valornuestropronosticoxs6000="$16.800";
 $valornuestropronostico2s6000="$19.200";
 
$valornuestropronostico1s20000="$40.000";
 $valornuestropronosticoxs20000="$56.000";
 $valornuestropronostico2s20000="$64.000";

$valornuestropronostico1s50000="$100.000";
 $valornuestropronosticoxs50000="$140.000";
 $valornuestropronostico2s50000="$160.000";

$partido1sequipoL="Valladolid";
$partido1simgL="6346";
$partido1sequipoV="CD Tropezón";
$partido1simgV="2538";
$partido1shora="20-01 08:45";

//Partidos de 1 a 3 de doble oportunidad ingresar equipo local - No. de imagen escudo local - equipo visitante - No. de imagen escudo visitante - fecha y hora del partido//


$valornuestropronosticodo6000="$20.000";
 $valornuestropronosticodo20000="$60.000";
 $valornuestropronosticodo50000="$150.000";


$partido1doequipoL="Hull City";
$partido1doimgL="1341";
$partido1doequipoV="Newcastle";
$partido1doimgV="1796";
$partido1dohora="20-01 06:45";

$partido2doequipoL="Stoke City";
$partido2doimgL="2429";
$partido2doequipoV="Queens Park";
$partido2doimgV="2044";
$partido2dohora="20-01 09:00";

$partido3doequipoL="Sunderland";
$partido3doimgL="2438";
$partido3doequipoV="Burnley";
$partido3doimgV="569";
$partido3dohora="20-01 09:00";

//Botones de Pago para Email de 6000 - 20000 - 50000//

$boton6000e= '
<form method="post"  target="_blank" action="https://gogolclub.com/bets/scripts/pago6000.php" accept-charset="UTF-8">
<input type="image" border="0" alt="" src="http://gogolclub.com/bets/img/pagar.jpg"/>
<input name="plataformapago6000" value="pagar6000" type="hidden"/>
</form>';

$boton20000e= '
<form method="post"  target="_blank" action="https://gogolclub.com/bets/scripts/pago20000.php" accept-charset="UTF-8">
<input type="image" border="0" alt="" src="http://gogolclub.com/bets/img/pagar.jpg"/>
<input name="plataformapago20000" value="pagar20000" type="hidden"/>
</form>';

$boton50000e= '
<form method="post"  target="_blank" action="https://gogolclub.com/bets/scripts/pago50000.php" accept-charset="UTF-8">
<input type="image" border="0" alt="" src="http://gogolclub.com/bets/img/pagar.jpg"/>
<input name="plataformapago50000" value="pagar50000" type="hidden"/>
</form>';




//Botones de Pago de 6000 - 20000 - 50000//

$boton6000= '
<form method="post"  target="_blank" action="scripts/pago6000.php" accept-charset="UTF-8">
<input type="image" border="0" alt="" src="http://www.payulatam.com/img_botones_herramientas/boton_pagar_pequeno.png"/>
<input name="plataformapago6000" value="pagar6000" type="hidden"/>
</form>';

$boton20000= '
<form method="post"  target="_blank" action="scripts/pago20000.php" accept-charset="UTF-8">
<input type="image" border="0" alt="" src="http://www.payulatam.com/img_botones_herramientas/boton_pagar_pequeno.png"/>
<input name="plataformapago20000" value="pagar20000" type="hidden"/>
</form>';

$boton50000= '
<form method="post"  target="_blank" action="scripts/pago50000.php" accept-charset="UTF-8">
<input type="image" border="0" alt="" src="http://www.payulatam.com/img_botones_herramientas/boton_pagar_pequeno.png"/>
<input name="plataformapago50000" value="pagar50000" type="hidden"/>
</form>';

//Botones de PAYU de 6000 - 20000 - 50000//

$payu6000= '
<form method="post" action="https://gateway.payulatam.com/ppp-web-gateway/pb.zul" accept-charset="UTF-8">
<input type="image" border="0" alt="" src="http://www.payulatam.com/img_botones_herramientas/boton_pagar_pequeno.png" onClick="this.form.urlOrigen.value = window.location.href;"/>
<input name="merchantId" type="hidden" value="501506"/>
<input name="accountId" type="hidden" value="502306"/>
<input name="description" type="hidden" value="Programacion Nivel 1"/>
<input name="referenceCode" type="hidden" value="PC"/>
<input name="amount" type="hidden" value="6000"/>
<input name="tax" type="hidden" value="0"/>
<input name="taxReturnBase" type="hidden" value="0"/>
<input name="shipmentValue" value="0" type="hidden"/>
<input name="currency" type="hidden" value="COP"/>
<input name="lng" type="hidden" value="es"/>
<input name="sourceUrl" id="urlOrigen" value="" type="hidden"/>
<input name="buttonType" value="SIMPLE" type="hidden"/>
<input name="signature" value="b68bd399cf1cbb7abfc9e8b1610465bc231f0ae25ea263dd1e7c6ffbb50c8168" type="hidden"/>
</form>';

$payu20000= '
<form method="post" action="https://gateway.payulatam.com/ppp-web-gateway/pb.zul" accept-charset="UTF-8">
<input type="image" border="0" alt="" src="http://www.payulatam.com/img_botones_herramientas/boton_pagar_pequeno.png" onClick="this.form.urlOrigen.value = window.location.href;"/>
<input name="merchantId" type="hidden" value="501506"/>
<input name="accountId" type="hidden" value="502306"/>
<input name="description" type="hidden" value="Programacion Nivel 2"/>
<input name="referenceCode" type="hidden" value="PS"/>
<input name="amount" type="hidden" value="20000"/>
<input name="tax" type="hidden" value="0"/>
<input name="taxReturnBase" type="hidden" value="0"/>
<input name="shipmentValue" value="0" type="hidden"/>
<input name="currency" type="hidden" value="COP"/>
<input name="lng" type="hidden" value="es"/>
<input name="sourceUrl" id="urlOrigen" value="" type="hidden"/>
<input name="buttonType" value="SIMPLE" type="hidden"/>
<input name="signature" value="ac14008b90eb6cef6c6e0af8853dd2f0b9d1fe834ba64612308c3d98e028c439" type="hidden"/>
</form>';

$payu50000= '
<form method="post" action="https://gateway.payulatam.com/ppp-web-gateway/pb.zul" accept-charset="UTF-8">
<input type="image" border="0" alt="" src="http://www.payulatam.com/img_botones_herramientas/boton_pagar_pequeno.png" onClick="this.form.urlOrigen.value = window.location.href;"/>
<input name="merchantId" type="hidden" value="501506"/>
<input name="accountId" type="hidden" value="502306"/>
<input name="description" type="hidden" value="Programacion Nivel 3"/>
<input name="referenceCode" type="hidden" value="PS"/>
<input name="amount" type="hidden" value="50000"/>
<input name="tax" type="hidden" value="0"/>
<input name="taxReturnBase" type="hidden" value="0"/>
<input name="shipmentValue" value="0" type="hidden"/>
<input name="currency" type="hidden" value="COP"/>
<input name="lng" type="hidden" value="es"/>
<input name="sourceUrl" id="urlOrigen" value="" type="hidden"/>
<input name="buttonType" value="SIMPLE" type="hidden"/>
<input name="signature" value="070cdeb30a27f64b98d80953814ee44280c26810a4f50411613ece3f2c8f6fc5" type="hidden"/>
</form>';





//imagen valor email para email//

$imagen6000='<img alt="" src="https://gogolclub.com/bets/img/pago_6000.jpg" style="width: 204px; height: 90px;" />';

$imagen20000='<img alt="" src="https://gogolclub.com/bets/img/pago_20000.jpg" style="width: 204px; height: 90px;" />';

$imagen50000='<img alt="" src="https://gogolclub.com/bets/img/pago_50000.jpg" style="width: 204px; height: 90px;" />';

?>


