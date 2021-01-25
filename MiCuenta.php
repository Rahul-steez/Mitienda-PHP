<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Capture The Sound</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Capture The Sound</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
          </li>
  
  
          <a href="carrito.php?ni=<?php echo $_GET['ni'] ?>" class="btn btn-outline-info btn-sm pull-right">Shoping Cart</a>
    
          <a class="btn btn-outline-info btn-sm pull-right" href="logout.php">Log Out</a>

          <a class="btn btn-outline-info btn-sm pull-right" href="Micuenta.php?ni=<?php echo $_GET['ni'] ?>">Mi Cuenta</a>
  
            
          </a>
        </ul>
      </div>
    </div>
  </nav>

  <?php
  

  $consulta=Cambiardatoscuenta($_GET['ni']);

  function Cambiardatoscuenta($ni){

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
    }

    $sentencia="SELECT * FROM usuario WHERE nick='".$ni."' ";
    $consulta=mysqli_query($con, $sentencia);
    $filas = $consulta->fetch_assoc();
    return [
      $filas['nick'],
      $filas['password']
    ];
  }

  ?>

<div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar Datos de tu cuenta</h1> </span>
  		<br>
	  <form action="modif_datos.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <input type="hidden" name="ni" value="<?php echo $_GET['ni']?> ">
  		<label>Nick: </label>
  		<input type="text" id="name" name="name"; value="<?php echo $consulta[0] ?>" ><br>
  		
  		<label>Password: </label>
  		<input type="text" id="password" name="password" value="<?php echo $consulta[1] ?>"><br>
          
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>