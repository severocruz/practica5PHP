<?php
//Inicio de sesión
session_start();
//Creación de cadena aleatoria
$md5 = md5(microtime() * mktime());
/*
No necesitamos 32 caracteres (generados anteriormente) y por lo tanto reducimos a 5
*/
$string = substr($md5,0,5);
?>
<?php
/*
Creamos una imagen partiendo de una de fondo (debemos subir una imagen de fondo al servidor)
*/
$captcha = imagecreatefrompng("img/captcha.png");
/*
Configuramos los colores usados para generan las lineas (formato RGB)
*/
$black = imagecolorallocate($captcha, 0, 0, 0);
$line = imagecolorallocate($captcha,233,239,239);
/*
Añadimos algunas lineas a nuestra imagen para dificultar la tarea a los robots
*/
imageline($captcha,0,0,39,29,$line);
imageline($captcha,40,0,64,29,$line);
?>
<?php
/*
Ahora escribimos la cadena generada aleatoriamente en la imagen
*/
imagestring($captcha, 5, 12, 11, $string, $black);
/*
Encriptamos y almacenamos el valor en una variable de sesion
*/
$_SESSION['key'] = md5($string);
/*
Devolvemos la imagen para mostrarla
*/
header("Content-type: image/png");
imagepng($captcha);
?>
