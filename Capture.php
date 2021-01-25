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

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

    
        <div class="list-group">
          <a href="#" class="list-group-item">Category 1</a>
          <a href="#" class="list-group-item">Category 2</a>
          <a href="#" class="list-group-item">Category 3</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="coworking.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="capturecasa.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="noticias.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class='row'>
        <?php

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

        $instruccion ="SELECT * FROM productos";
        $resultado=mysqli_query($con, $instruccion); 

        $nick=$_GET['ni'];

        while($filas = $resultado->fetch_assoc()){

          echo  "<div class='col-lg-4 col-md-6 mb-4'>";
          echo  "<div class='card h-100'>";
          echo  "<a><img class='card-img-top' src='"; echo $filas ['Imagen']; echo "'></a>";
          echo  "<div class='card-body'>";
          echo  "<h4 class='card-title'>";
          echo  "<a href=''>"; echo $filas['Name']; echo "</a>";
          echo  "</h4>";
          echo  "<h5>"; echo $filas['Precio']; echo "€</h5>";
          echo  "<p class='card-text'>"; echo $filas['Descripción']; echo "</p>";
          echo  "</div>";
          echo  "<div class='card-footer'>";
          echo  "<a href='añadir_prod_carrito.php?no="; echo $filas['Id']; echo "&ni="; echo $_GET['ni']; echo "'' class='btn btn-info btn-lg'>";
          echo  "<span class='glyphicon glyphicon-shopping-cart'></span>  + Add to Cart";
          echo  "</a>";
          echo  "</div>";
          echo  "</div>";
          echo  "</div>";

        }
        ?>
  </div>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
