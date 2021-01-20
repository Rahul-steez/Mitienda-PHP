<?php
	
	//require_once __DIR__ . '/logout.php';
	
	header("Content-Type: text/html;charset=utf-8");
	if (isset($_POST["nick"]))
{
	
	$nick = $_POST["nick"];
	$password = $_POST["password"];
	
	//Parámetros de conexión, si utilizas Xammp la contraseña esta vacia si es usbwebserver  utiliza la contrasenya "usbw"
	$servidor="localhost";
	$usuario="root";
	$contraseña="";
	//$contraseña="usbw";
	$bd="tienda m07 rahul manwani";

	$con = mysqli_connect($servidor, $usuario, $contraseña, $bd) or die(mysql_error());
	
	if (!$con)
	{
		die("No se ha podido realizar la corrección ERROR:" . mysqli_connect_error() . "<br>");
	}
	else
	{
		mysqli_set_charset ($con, "utf8");
		echo "Se ha conectado a la base de datos"."<br>";
	}
	
	//////////////////////////////////////
	
	//Inserción de datos
	
	//Primero compruebo si el nick existe
	$instruccion = "select count(*) as cuantos from usuario where nick = '$nick'";
	$res = mysqli_query($con, $instruccion);
	$datos = mysqli_fetch_assoc($res);

	$sql = "CREATE table $nick (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		productos_id  INT(50) NOT NULL,
		cantidad INT(50) NOT NULL,
		FOREIGN KEY(productos_id) REFERENCES productos(id)
		)";
	
	if ($datos['cuantos'] == 0 && $con->query($sql) === TRUE)
	{
		$instruccion = "insert into usuario values ('$nick','$password')";
		$res = mysqli_query($con, $instruccion);
		if (!$res) 
		{
			die("No se ha pordido crear el usuario");
		}
		else{

			echo "la tabla alumnos ha sido creado";
			echo "Usuario creado";
			//me lleva al login para que pruebe mi contraseña
			echo "<script>alert('Usuario creado correctamente');</script>";
			include_once("login.html");
		}
	}
	else
	{
		echo "El nick $nick no está disponible";
	}

}
else 
{
	echo ("ERROR: No se puede introducir un nick en blanco");
}
?>