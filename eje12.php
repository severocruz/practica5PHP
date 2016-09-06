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
		<li><a href="eje5.php">Ejercicio 5</a></li>
		<li><a href="eje6.php">Ejercicio 6</a></li>
		<li><a href="eje7.php">Ejercicio 7</a></li>
		<li><a href="eje8.php">Ejercicio 8</a></li>
		<li><a href="eje9.php">Ejercicio 9</a></li>
		<li><a href="eje10.php">Ejercicio 10</a></li>
		<li><a href="eje11.php">Ejercicio 11</a></li>
		<li><span class="elegido"><a href="eje12.php">Ejercicio 12</a></span></li>
  </UL>
</div>
  <div id="contenido"><p class="enunciado">Crear un simulador de lanzamiento de dos (2) y cinco (5) dados.</p>
	  <div class="cleare">
	  	<table cellspacing="20">
	  		<tr>
	  			<td style="background-color: black; color:white;">
	  			<form action="" method="POST">
	  				<h3>Lanzar 2 dados</h3>
	  				<input type="hidden" name="lanza" value="2">
	  				<input type="submit" name="enviar">
	  			</form></td>
	  			<td style="background-color: green;color:white;"><form action="" method="POST">
	  				 <h3>Lanzar 5 dados</h3>
	  				<input type="hidden" name="lanza" value="5">
	  				<input type="submit" name="enviar">
	  			</form></td>
	  		</tr>
	  	</table>
	  	  <?php
	  	  	if (isset($_POST["lanza"])) {

	  	  		if ($_POST["lanza"]==2)
	  	  		    $dados= array("img/dg1.png","img/dg2.png","img/dg3.png","img/dg4.png","img/dg5.png","img/dg6.png");
	  	  	    else
	  	  			$dados= array("img/dv1.png","img/dv2.png","img/dv3.png","img/dv4.png","img/dv5.png","img/dv6.png");

	  	  		  	for ($i=1 ; $i <= $_POST["lanza"] ; $i++) { 
	  	  		  		echo '<div class="casillaimg">';
	  	  		  		 echo '<img src="'.$dados[rand(0,5)].'" width=70 height=70>';
	  	  		  		 echo "</div>";
	  	  		  		
	  	  		  	}
	  	  		/*}
	  	  		*/
	  	  	}
	  	  ?>
	  </div>
  </div>
  <div id="pie">&copy; derechos reservados 2016 </div>
 </div>	

</body>
</html>