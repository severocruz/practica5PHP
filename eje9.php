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
		<li><span class="elegido"><a href="eje9.php">Ejercicio 9</a></span></li>
		<li><a href="eje10.php">Ejercicio 10</a></li>
		<li><a href="eje11.php">Ejercicio 11</a></li>
		<li><a href="eje12.php">Ejercicio 12</a></li>
  </UL>
</div>
  <div id="contenido"><p class="enunciado">Crear un formulario de contacto que reciba los siguientes campos: nombre, apellidos, correo y comentario. Una vez que se pulse el botón enviar debe mostrar los datos recibidos.</p>
  <div class="cleare">
  	 <form action="" method="POST">
	  	 <table > 
	  	   	<tr>
	  	   		<td colspan="2"> <strong>Formulario de contacto</strong></h2></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Nombre:</strong></td>
	  	   		<td><input type="text" name="nombre" placeholder="Nombre" required="" style="width:150px;"></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Apellidos:</strong></td>
	  	   		<td><input type="text" name="apellidos" placeholder="Apellidos" required="" style="width:150px;"></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Correo:</strong></td>
	  	   		<td><input type="email" name="correo" placeholder="Correo electronico" required="" style="width:150px;"></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Cometario:</strong></td>
	  	   		<td><textarea name="comentario" placeholder="Tu comentario nos interesa" required="" style="width:100%; height:100%px"></textarea></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><input type="submit" name="enviar" value="enviar"></td>
	  	   	</tr>
	  	 </table>
  	 </form>
  	 <?php
        if (isset($_POST["nombre"])) {
        	echo "<p><strong>Nombre : </strong>".strtoupper($_POST['nombre'])." ".strtoupper($_POST['apellidos'])."</p>";
        	echo "<p><strong>Email : </strong>".$_POST['correo']."</p>";
        	echo "<p><strong>Comentario : </strong>".$_POST['comentario']."</p>";	
        }
  	 ?>
  	 </div>
  </div>
  <div id="pie">&copy; derechos reservados 2016 </div>
 </div>	

</body>
</html>