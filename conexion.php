<?php
	$servidor="localhost";
	$usuario="root";
	$contraseña="";
	//$contraseña="usbw";
	$bd="tienda m07 rahul manwani";

    $con = mysqli_connect($servidor, $usuario, $contraseña, $bd) or die(mysql_error());
    
?>