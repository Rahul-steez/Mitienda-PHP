<?php

	NuevoProducto($_POST['Id'], $_POST['name'], $_POST['Descripcón'], $_POST['Precio'], $_POST['Imagen']);

	function NuevoProducto($id, $name, $descripcion, $precio, $imagen){

        //Parámetros de conexión
    $servidor="localhost";
    $usuario="root";
    //$contraseña="usbw";
    $contraseña="";
    $bd="tienda m07 rahul manwani";

    //realizamos la conexión
    $con=mysqli_connect($servidor,$usuario,$contraseña,$bd);
    if(!$con)
    {
      die("Con se ha podido realizar la conexión: ". mysqli_connect_error() . "<br>");
    }
    else
    {
      mysqli_set_charset($con,"utf8");
      echo "Felicidades lerdo! te has conectado a la BD"; 
    }

		$sentencia="INSERT INTO productos (Id, Name, Descripción, Precio, Imagen) VALUES ('".$id."', '".$name."', '".$descripcion."', '".$precio."', '".$imagen."')";
		$con->query($sentencia) or die ("Error al Ingresar valores".mysqli_error($con));
	}
?>

<script type="text/javascript">
	alert("Producto Ingresado exitosamente");
	window.location.href='Admin.php';
</script>

