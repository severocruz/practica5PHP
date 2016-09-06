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
		<li><span class="elegido"><a href="eje11.php">Ejercicio 11</a></span></li>
		<li><a href="eje12.php">Ejercicio 12</a></li>
  </UL>
</div>
  <div id="contenido"><p class="enunciado">Crear un formulario que reciba los nombres de seis (6) equipos y un botón que al pulsar genere un fixture de partidos.</p>
  	<div class="cleare">
  	 <form action="" method="POST">
	  	 <table > 
	  	   	<tr>
	  	   		<td colspan="2"> <strong>Fixture de equipos</strong></h2></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Equipo 1:</strong></td>
	  	   		<td><input type="text" name="pe" placeholder="1er equipo" required="" style="width:100px;"></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Equipo 2:</strong></td>
	  	   		<td><input type="text" name="se" placeholder="2do equipo" required="" style="width:100px;"></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Equipo 3:</strong></td>
	  	   		<td><input type="text" name="te" placeholder="3er equipo" required="" style="width:100px;"></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Equipo 4:</strong></td>
	  	   		<td><input type="text" name="ce" placeholder="4to equipo" required="" style="width:100px;"></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Equipo 5:</strong></td>
	  	   		<td><input type="text" name="qe" placeholder="5to equipo" required="" style="width:100px;"></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Equipo 6:</strong></td>
	  	   		<td><input type="text" name="sxe" placeholder="6to equipo" required="" style="width:100px;"></td>
	  	   	</tr>

	  	   	<tr>
	  	   		<td><input type="submit" name="enviar" value="enviar"></td>
	  	   	</tr>
	  	 </table>
  	 </form>
  	 <?php
  	 	function llenararray($max)
  	 	{
  	 		$switch=0;
  	 		$numero=0;
  	 		$arr = array(-1,-1,-1,-1,-1,-1);
  	 		for ($i=0; $i <=$max-1 ; $i++) { 
  	 			$c=0;
  	 			$numero=rand(0,5);
  	 			while ($c<=$i) { 
  	 			  if ($numero==$arr[$c]) {
  	 			  		$c=0;
  	 			  		$numero=rand(0,5);
  	 			  	}
  	 			  	else{
  	 			  		$c++;
  	 			  	
  	 			  	}	
  	 			}
  	 			$arr[$i]=$numero;
  	 		}
  	 			return $arr;
  	 	}
  	 	
  	 	if (isset($_POST["pe"]) && isset($_POST["se"]) && isset($_POST["te"]) && isset($_POST["ce"]) && isset($_POST["qe"]) && isset($_POST["sxe"])) {
	  			echo "<h2>Fixture de Partidos</h2>";
	  	 	$arr= llenararray(6);
	  	 	$arreq = array($_POST["pe"],$_POST["se"],$_POST["te"],$_POST["ce"],$_POST["qe"],$_POST["sxe"]);
	  	 	 	echo "<h5>-".strtoupper($arreq[$arr[0]])."- vs -".strtoupper($arreq[$arr[1]])."-<h5>";	
	  	 		echo "<h5>-".strtoupper($arreq[$arr[2]])."- vs -".strtoupper($arreq[$arr[3]])."-<h5>";	
	  	 		echo "<h5>-".strtoupper($arreq[$arr[4]])."- vs -".strtoupper($arreq[$arr[5]])."-<h5>";	
  	 	}

  	 	
  	 ?>
  </div>
  <div id="pie">&copy; derechos reservados 2016 </div>
 </div>	

</body>
</html>