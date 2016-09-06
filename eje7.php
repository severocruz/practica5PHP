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
		<li><span class="elegido"><a href="eje7.php">Ejercicio 7</a></span></li>
		<li><a href="eje8.php">Ejercicio 8</a></li>
		<li><a href="eje9.php">Ejercicio 9</a></li>
		<li><a href="eje10.php">Ejercicio 10</a></li>
		<li><a href="eje11.php">Ejercicio 11</a></li>
		<li><a href="eje12.php">Ejercicio 12</a></li>
  </UL>
</div>
  <div id="contenido"><p class="enunciado">Programar un formulario que reciba tres números y determine cuál es el mayor, el del medio y el menor.</p>
  <div class="cleare">
  	 <form action="" method="POST">
	  	 <table > 
	  	   	<tr>
	  	   		<td colspan="2"> <strong>Ordenacion de numeros</strong></h2></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Primer Numero:</strong></td>
	  	   		<td><input type="number" name="pn" placeholder="1er #" style="width:40px;"></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Segundo Numero:</strong></td>
	  	   		<td><input type="number" name="sn" placeholder="2do #" style="width:40px;"></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Tercer Numero:</strong></td>
	  	   		<td><input type="number" name="tn" placeholder="3er #" style="width:40px;"></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><input type="submit" name="enviar" value="enviar"></td>
	  	   	</tr>
	  	 </table>
  	 </form>
  	 <?php
       if (isset($_POST["pn"]) && isset($_POST["sn"]) && isset($_POST["tn"]) ) {
       		$a=$_POST["pn"];
       		$b=$_POST["sn"];	
       		$c=$_POST["tn"];
       		if ($a > $b && $a > $c) {
	       			if ($b > $c) {
	       					echo "<strong>mayor: $a<br></strong>";
	       					echo "<strong>medio: $b<br></strong>";
	       					echo "<strong>menor: $c<br></strong>";
	       				}
	       				else{
	       				    echo "<strong>mayor: $a<br></strong>";
	       					echo "<strong>medio: $c<br></strong>";
	       					echo "<strong>menor: $b<br></strong>";	
	       				}	

       			}
       			else
       			{
       				if ($b > $a && $b > $c) {
							if ($a > $c) {
	       					echo "<strong>mayor: $b<br></strong>";
	       					echo "<strong>medio: $a<br></strong>";
	       					echo "<strong>menor: $c<br></strong>";
	       				}
	       				else{
	       				    echo "<strong>mayor: $b<br></strong>";
	       					echo "<strong>medio: $c<br></strong>";
	       					echo "<strong>menor: $a<br></strong>";	
	       				}		       					
	       			}
	       			else{
	       			   if ($c > $a && $c > $b) {
								if ($a > $b) {
			       					echo "<strong>mayor: $c<br></strong>";
			       					echo "<strong>medio: $a<br></strong>";
			       					echo "<strong>menor: $b<br></strong>";
			       				}
			       				else{
			       				    echo "<strong>mayor: $c<br></strong>";
			       					echo "<strong>medio: $b<br></strong>";
			       					echo "<strong>menor: $a<br></strong>";	
			       				}		       					
	       				}
	       				else{
	       					       echo "<strong>dos o mas numeros son iguales<br></strong>";
			 
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