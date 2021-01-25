<!DOCTYPE html>
<html lang="en">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://use.fontawesome.com/c560c025cf.js"></script>
<div class="container">
   <div class="card shopping-cart">
            <div class="card-header bg-dark text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Shipping cart of <?php echo $_GET['ni'] ?>
                <a href="Capture.php?ni=<?php echo $_GET['ni'] ?>" class="btn btn-outline-info btn-sm pull-right">Continue shopping</a>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
                    <!-- PRODUCT -->
                    <div class="row">
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

    $nick=$_GET['ni'];

    $query="SELECT carr.cantidad, prod.Name, prod.Descripción, prod.Precio, prod.Imagen, prod.Id
            FROM $nick carr
            INNER JOIN productos prod ON carr.productos_id = prod.Id";

    $consulta=$con->query($query);

    while($fila = $consulta->fetch_assoc()){

        echo  "<a href=''>"; $_GET['ni']; echo "</a>";    
        echo  "<div class='row'>";
        echo  "<div class='col-12 col-sm-12 col-md-2 text-center'>";
        echo  "<img class='img-responsive' src='"; echo $fila ['Imagen']; echo "'alt='prewiew' width='120' height='80'>";
        echo  "</div>";
        echo  "<div class='col-12 text-sm-center col-sm-12 text-md-left col-md-6'>";
        echo  "<h4 class='product-name'><strong>"; echo $fila['Name']; echo"</strong></h4>";
        echo  "<h4>";
        echo  "<small>"; echo $fila['Descripción']; echo "</small>";
        echo  "</h4>";
        echo  "</div>";
        echo  "<div class='col-12 col-sm-12 text-sm-center col-md-4 text-md-right row'>";
        echo  "<div class='col-3 col-sm-3 col-md-6 text-md-right' style='padding-top: 5px'>";
        echo  "<h6><strong>"; echo $fila['Precio']; echo "€<span class='text-muted'>x</span></strong></h6>";
        echo  "</div>";
        echo  "<div class='col-4 col-sm-4 col-md-4'>";
        echo  "<div class='quantity'>";
        echo  "</div>";
        echo  "<div class='col-2 col-sm-2 col-md-2 text-right'>";
        echo  "<a href='eliminar_carrprod.php?ni="; echo $_GET['ni']; echo "&id="; echo $fila['Id']; echo "'' class='btn btn-info btn-lg'>";
        echo  "<i class='fa fa-trash' aria-hidden='true'></i>";
        echo  "</div>";
        echo  "</div>";
        echo  "</div>";
        echo  "</div>";
        echo  "</hr>";

    }
?>
