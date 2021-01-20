<?php
    //require_once __DIR__ . '/db_config.php';
	
session_start();

$logueado=0;
	
header("Content-Type: text/html;charset=utf-8");

		
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
		echo "Se ha conectado a la base de datos" . "<br>";
	}
	
	$instruccion = "select count(*) as cuantos from usuario where nick = '$nick'";
	$resultado = mysqli_query($con, $instruccion);
		while ($fila = $resultado->fetch_assoc()) {
		$numero=$fila["cuantos"];
	}
	if($numero==0){
		$instruccion = "select count(*) as cuantos from administrador where nick = '$nick'";
		$resultado = mysqli_query($con, $instruccion);
		while ($fila = $resultado->fetch_assoc()) {
		$numero=$fila["cuantos"];

	}
		if($numero==0){
		echo "el usuario no existe";
	}

	else{
		$instruccion = "select password as cuantos from administrador where nick = '$nick'";
		$resultado = mysqli_query($con, $instruccion);
	
		while ($fila = $resultado->fetch_assoc()) {
			$password2=$fila["cuantos"];
		}		
		/////////////////
		if (!strcmp($password2 , $password) == 0){
				echo "Contraseña incorrecta de admin";
		}
		
		else{
			echo "Login OK";
			$_SESSION["nick_logueado"]=$nick;
			?> 
			<a href="Capture.php">Acceder al menu</a>´
			<br>
			<a href="Admin.php">Acceder al la Interfaz de Admin
			</a>
			<?php
			
			$logueado=1;
		}
		}
	}
	else{
	$instruccion = "select password as cuantos from usuario where nick = '$nick'";
	$resultado = mysqli_query($con, $instruccion);

	while ($fila = $resultado->fetch_assoc()) {
		$password2=$fila["cuantos"];
	}
	
	/////////////////

	if (!strcmp($password2 , $password) == 0){
			echo "Contraseña incorrecta";
	}
	
	else{
		echo "Login OK";
		$_SESSION["nick_logueado"]=$nick;
		echo "<td> <a href='Capture.php?ni=".$nick."''><button type='button' class='btn btn-danger'>Capture</button></a> </td>";
		
		$logueado=1;
	}
	}

?>