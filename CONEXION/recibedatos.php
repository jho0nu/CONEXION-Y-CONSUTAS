<?php

$nombre=$_POST['nombre'];

$edad=$_POST['edad'];

$puerto="localhost";

$usuario="root";

$contraseña="";

$conexion=mysqli_connect($puerto,$usuario,$contraseña,"pruebabase");

if ($conexion) {

	echo("conexion exitosa");
} else {
	echo("conexion fallida");
}

mysqli_select_db($conexion,"pruebabase");

$insertar="insert into datos(nombre,edad) values('$nombre','$edad')";

mysqli_query($conexion,$insertar);

echo "se han enviado los datos";

?>





<html>

	<title>envio a base</title>

	<body>

		<form name="formulario" type="submit" action="recibedatos.php" method="post">

			nombre: <input type="text" id="nombre" name="nombre"><br>

			edad: <input type="text" id="edad" name="edad"><br>

			<input type="submit" id="enviar" name="enviar" value="enviar datos">

		</form>

	</body>

</html>