<?php

	EliminarProducto($_GET['ni'],$_GET['id']);

	function EliminarProducto($ni, $id){

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
        $sentencia="DELETE FROM $ni WHERE productos_id='".$id."' ";
        $con->query($sentencia) or die ("Error al eliminar".mysqli_error($con));
		
    }
    
    echo "<td> <a href='Capture.php?ni=".$_GET['ni']."''><button type='button' class='btn btn-danger'>Seguir Comprando</button></a> </td>";
?>

<h1>Producto añadido exitosamente<h1>
<a href="Capture.php?ni=<?php echo $_GET['ni'] ?>Seguir Comprando</a>