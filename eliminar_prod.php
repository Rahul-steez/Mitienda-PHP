<?php


	EliminarProducto($_GET['no']);

	function EliminarProducto($no){

        header("Content-Type: text/html;charset=utf-8");

    //Parámetros de conexión
    $servidor="localhost";
    $usuario="root";
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
        $sentencia="DELETE FROM productos WHERE Id='".$no."' ";
        $con->query($sentencia) or die ("Error al eliminar".mysqli_error($con));
		
	}
?>

<script type="text/javascript">
	alert("Producto Eliminado exitosamente");
	window.location.href='Admin.php';
</script>