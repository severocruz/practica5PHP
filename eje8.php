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
		<li><span class="elegido"><a href="eje8.php">Ejercicio 8</a></span></li>
		<li><a href="eje9.php">Ejercicio 9</a></li>
		<li><a href="eje10.php">Ejercicio 10</a></li>
		<li><a href="eje11.php">Ejercicio 11</a></li>
		<li><a href="eje12.php">Ejercicio 12</a></li>
  </UL>
</div>
  <div id="contenido"><p class="enunciado">Realizar un programa que reciba una fecha en formato numérico y lo convierta a texto. (Ejemplo: 31/08/2016 => 31 de agosto de 2016</p>
  <div class="cleare">
  	 <form action="" method="POST">
	  	 <table > 
	  	   	<tr>
	  	   		<td colspan="2"> <strong>Mostrar fecha larga</strong></h2></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Fecha:</strong></td>
	  	   		<td><input type="date" name="fecha" style="width:150px;"></td>
	  	   	</tr>
	  	   	
	  	   	<tr>
	  	   		<td><input type="submit" name="enviar" value="enviar"></td>
	  	   	</tr>
	  	 </table>
  	 </form>
  	 <?php
  	 	$meses = array('01'=>'Enero','02'=>'Febrero','03'=>'Marzo','04'=>'Abril','05'=>'Mayo','06'=>'Junio','07'=>'Julio','08'=>'Agosto','09'=>'Septiembre','10'=>'Octubre','11'=>'Noviembre','12'=>'Diciembre');
  	 	if (isset($_POST["fecha"])) {
  	 		$fecha= strtotime($_POST["fecha"]);
  	 		//echo $fecha;
  	 		echo "<h3>".date("d",$fecha)." de ".$meses[date("m",$fecha)]." de ". date("Y",$fecha)."</h3>";
  	 		
  	 	}
  	 ?>
  </div>
  </div>
  <div id="pie">&copy; derechos reservados 2016 </div>
 </div>	

</body>
</html>