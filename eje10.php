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
		<li><span class="elegido"><a href="eje10.php">Ejercicio 10</a></span></li>
		<li><a href="eje11.php">Ejercicio 11</a></li>
		<li><a href="eje12.php">Ejercicio 12</a></li>
  </UL>
</div>
  <div id="contenido"><p class="enunciado">Crear un formulario de identificación de usuario que reciba usuario, contraseña, captcha
y un botón Enviar, en caso correcto mostrar una página dándole la bienvenida, en caso
contrario volver a mostrar el formulario.</p>
	<div class="cleare">
		<form action="verifica.php" method="POST">
	  	 <table > 
	  	   	<tr>
	  	   		<td colspan="2"> <strong>Ordenacion de numeros</strong></h2></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Usuario:</strong></td>
	  	   		<td><input type="text" name="usuario" placeholder="Usuario" required="" ></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><strong>Contraseña:</strong></td>
	  	   		<td><input type="password" name="clave" placeholder="Contraseña" required=""></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td><img src="captcha.php" width="100" height="30"></td>
	  	   		<td><input type="text" name="tmptxt" required=""></td>
	  	   	</tr>
	  	   	<tr>
	  	   		<td colspan="2"><input type="submit" name="enviar" value="enviar"></td>
	  	   	</tr>
	  	 </table>
  	 </form>
	</div>
</div>
  <div id="pie">&copy; derechos reservados 2016 </div>
 </div>	

</body>
</html>