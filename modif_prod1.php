<?php
  

  $consulta=ConsultarProducto($_GET['no']);

  function ConsultarProducto($no_prod){

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

    $sentencia="SELECT * FROM productos WHERE Id='".$no_prod."' ";
    $resultado=mysqli_query($con, $sentencia);
    $filas = $resultado->fetch_assoc();
    return [
      $filas['Id'],
      $filas['Name'],
      $filas['Descripción'],
      $filas['Precio'],
      $filas['Imagen']
    ];

  }


?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Producto</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="todo">
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar Producto</h1> </span>
  		<br>
	  <form action="modif_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <input type="hidden" name="no" value="<?php echo $_GET['no']?> ">
  		<label>Id Producto: </label>
  		<input type="text" id="Id" name="Id"; value="<?php echo $consulta[0] ?>" ><br>
  		
  		<label>Producto: </label>
  		<input type="text" id="name" name="name" value="<?php echo $consulta[1] ?>"><br>
  		
  		<label>Descripcion: </label>
  		<textarea style="border-radius: 10px;" rows="3" cols="50" name="Descripcón"> <?php echo $consulta[2] ?> </textarea><br>
          
        <label>Precio: </label>
        <input type="text" id="Precio" name="Precio" value="<?php echo $consulta[3] ?>"><br> 

        <label>Imagen: </label>
        <input type="text" id="Imagen" name="Imagen" value="<?php echo $consulta[4] ?>"><br>  
          
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>

</div>


</body>
</html>