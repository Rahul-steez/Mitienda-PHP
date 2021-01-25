<?php
	

	ModificarProducto($_POST['ni'], $_POST['name'], $_POST['password']);

	function ModificarProducto($ni,$name,$password){

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


    $instruccion = "select count(*) as cuantos from usuario where nick = '$name'";
    $res = mysqli_query($con, $instruccion);
    $datos = mysqli_fetch_assoc($res);

    if ($datos['cuantos'] == 0){

      $consulta="RENAME TABLE $ni to $name";
      $con->query($consulta) or die ("Error al modificar".mysqli_error($con));
      $sentencia="UPDATE usuario SET nick='".$name."', password= '".$password."' WHERE nick='".$ni."' ";
      $con->query($sentencia) or die ("Error al modificar".mysqli_error($con));
    }
    else{


      echo "El nick $name no está disponible";
    }

		
        
	}
?>

<script type="text/javascript">
	alert(" Datos de cuenta Modificado exitosamente");
	window.location.href='login.html';
</script>