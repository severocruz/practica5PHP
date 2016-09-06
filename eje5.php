<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>practica 5</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
  <div id="contenedor">
  <div id="cabecera"><h1>PRACTICA 5 DE PHP</h1>
   <div>Nombre: Severo Cruz Nina</div>
   <div>Fecha de entrega: 07 de septiembre de 2016</div>
  </div>
  <div id="menu">
  	<UL>
		<li><a href="eje1.php">Ejercicio 1</a></li>
		<li><a href="eje2.php">Ejercicio 2</a></li>
		<li><a href="eje3.php">Ejercicio 3</a></li>
		<li><a href="eje4.php">Ejercicio 4</a></li>
		<li><span class="elegido"><a href="eje5.php">Ejercicio 5</a></span></li>
		<li><a href="eje6.php">Ejercicio 6</a></li>
		<li><a href="eje7.php">Ejercicio 7</a></li>
		<li><a href="eje8.php">Ejercicio 8</a></li>
		<li><a href="eje9.php">Ejercicio 9</a></li>
		<li><a href="eje10.php">Ejercicio 10</a></li>
		<li><a href="eje11.php">Ejercicio 11</a></li>
		<li><a href="eje12.php">Ejercicio 12</a></li>
  </UL>
</div>
  <div id="contenido"><p class="enunciado">Crear un programa que muestre las imágenes que contiene un directorio en cuatro columnas, además al pulsar sobre cualquier imagen debe mostrar la imagen en tamaño
real (En la carpeta puede existir cualquier número de imágenes)</p>
<p>Carpeta "img"</p>
<div class="cleare">
	<?php
     	if (is_dir("img")) {
     		if ($dir=opendir("img")) {
     			while (($archivo= readdir($dir))!=false) {
     			if ($archivo != '.' && $archivo != '..' && $archivo != '.htaccess') {
     				
     				echo '<div class="casillaimg">';
     				  echo '<a href="img/'.$archivo.'" target="_blank"><img src="img/'.$archivo.'" width=70 height=70></a>';
     				echo "</div>";	
     				
     				//echo "$archivo <br>";
     			}
     			}
     		}
     	}
	?>
</div>

</div>
  <div id="pie">&copy; derechos reservados 2016 </div>
 </div>	

</body>
</html>