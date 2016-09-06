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
		<li><span class="elegido"><a href="eje2.php">Ejercicio 2</a></span></li>
		<li><a href="eje3.php">Ejercicio 3</a></li>
		<li><a href="eje4.php">Ejercicio 4</a></li>
		<li><a href="eje5.php">Ejercicio 5</a></li>
		<li><a href="eje6.php">Ejercicio 6</a></li>
		<li><a href="eje7.php">Ejercicio 7</a></li>
		<li><a href="eje8.php">Ejercicio 8</a></li>
		<li><a href="eje9.php">Ejercicio 9</a></li>
		<li><a href="eje10.php">Ejercicio 10</a></li>
		<li><a href="eje11.php">Ejercicio 11</a></li>
		<li><a href="eje12.php">Ejercicio 12</a></li>
  </UL>
</div>
  <div id="contenido"><p class="enunciado">Crear la misma tabla pero colorear las filas alternando el fondo con amarillo y blanco.
El tamaño debe estar definido como constante usando la función define</p>
<?php
define("tam",10);
$c=1;
?>
<div class="cleare">
  	<table border="1">
<?php for ($i=1; $i <= tam ; $i++) { 
	if ($i%2==0) {
	  echo '<tr class="filacolor">';
	}
	else
	{
	   echo '<tr class="fila">';	
	}
	for ($j=1; $j <=tam ; $j++) { 
  		echo "<td>$c</td>";# code...
  		$c++;
	}
	echo "</tr>";
}
 ?>
</table>
  </div>
  </div>
  <div id="pie">&copy; derechos reservados 2016 </div>
 </div>	

</body>
</html>