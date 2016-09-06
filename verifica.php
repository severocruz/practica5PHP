<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>practica 5</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

  <div id="contenedor">
  <div id="cabecera">
	<?php
		session_start();
		if(md5($_POST['tmptxt']) != $_SESSION['key'])
		{
		//echo("Error: Nos has introducido el codigo correcto");
		header('Location: eje10.php');
		}else{
		echo '<h1>BIENVENIDO '.strtoupper($_POST["usuario"]).' ¡¡¡Felicidades no eres un Robot o no lo pareces!!!</h1>';
		}
	?>   
  </div>
  <div id="contenido"><p class="enunciado">Práctica de manejo del lenguaje php de la <br>materia <i>Tecnologias emergentes I </i></p></div>
  <div id="pie">&copy; derechos reservados 2016 </div>
 </div>	

</body>
</html>

<?php 

/*session_start(); 

// Configuracion  
$conf['mailDestinatario'] = 'correo@dominio.es';  
$conf['mailAsunto'] = 'Buzon';  
$conf['url_error'] = 'eje10.php';  
$conf['url_ok'] = 'http://www.dominio.es/---cambiar por la página de ok---'; 

###################################################################### 
# codigo de verificacion 
###################################################################### 

// Validar argumentos y captcha 
if(!$_POST) { 
  header('Location: '.$conf['url_error']); 
  exit; 
} 

if ($_SESSION['tmptxt'] != $_POST['tmptxt']) {  
  header('Location: '.$conf['url_error']);  
  exit;  
} 

// Limpiar input de usuario 
foreach($_POST as $id=>$value) { 
  $var[$id] = strip_tags(trim($value)); 
} 

// Definir cuerpo del email 
foreach($var as $id=>$value) { 
  $mailCuerpo .= "$id : $value\r\n"; 
} 

// Enviar correo 
if(mail($conf['mailDestinatario'], $conf['mailAsunto'], $mailCuerpo)) { 
  header('Location: '.$conf['url_ok']); 
} else { 
  header('Location: '.$conf['url_error']); 
} 
*/


?>