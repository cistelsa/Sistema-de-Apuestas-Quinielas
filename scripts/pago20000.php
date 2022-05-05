 <?php 
 error_reporting(E_ALL ^ E_NOTICE);
  require_once '../variables.php';
 
$tipodepago= $_POST['plataformapago20000'];
 
if($tipodepago=="pagar20000"){
	
	echo '<!doctype html>
<html lang="es" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="../img/favicon.ico?v=2">
	<link rel="icon" sizes="16x16 32x32" href="../img/favicon.ico?v=2">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="../css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="../css/style.css"> <!-- Resource style -->
	<script src="../js/modernizr.js"></script> <!-- Modernizr -->
    <script src="../js/relojpago.js"></script>
    
     	
	<title>Proceso de Pago | GogolClub</title>
    
           
</head>
<body onLoad="ConteoRegresivo()">


<header>

	<h1>Proceso de Pago</h1>	
</header>



<section class="cd-section">
<div class="textoinicio"><p><strong>Procesando pago...</strong> En instantes se redireccionará a la plataforma de pagos Payu Latam...</p>
<p><strong>Proceso certificado SSL</strong> protección de datos y pagos.</p>
<p><strong>Una plataforma Cistelsa</strong></p> </div>
	'.$payu20000.'
    
</section> <!-- .cd-section -->

<div id="contador"></div>
	
<script src="../js/jquery-2.1.1.js"></script>
<script src="../js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>';
	
	
	
	
	}
 
 else{
	 
	 echo 'Error en acceso directo';
	 
	 }
 
 
 ?>