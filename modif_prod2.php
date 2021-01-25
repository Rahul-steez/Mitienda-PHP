<?php
	

	ModificarProducto($_POST['Id'], $_POST['name'], $_POST['Descripcón'], $_POST['Precio'], $_POST['Imagen'], $_POST['no']);

	function ModificarProducto($id_prod, $nom, $descrip, $precio, $imagen, $no){

        header("Content-Type: text/html;charset=utf-8");

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


		$sentencia="UPDATE productos SET Id='".$id_prod."', Name= '".$nom."', Descripción='".$descrip."', Precio='".$precio."', Imagen='".$imagen."' WHERE Id='".$no."' ";
		$con->query($sentencia) or die ("Error al modificar".mysqli_error($con));
	}
?>

<script type="text/javascript">
	alert("Producto Modificado exitosamente");
	window.location.href='Admin.php';
</script>