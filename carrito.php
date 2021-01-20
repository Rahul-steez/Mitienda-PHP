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
                <a href="" class="btn btn-outline-info btn-sm pull-right">Continue shopping</a>
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

$prod="SELECT productos_id FROM $nick";
$instruccion ="SELECT * FROM productos where id = $prod";
$resultado=mysqli_query($con, $instruccion); 

while($filas = $resultado->mysqli_fetch_assoc()){
    
    
echo  "<a href=''>"; $_GET['ni']; echo "</a>";    
echo  "<div class='row'>";
echo  "<div class='col-12 col-sm-12 col-md-2 text-center'>";
echo  "<img class='img-responsive' src='"; echo $filas ['Imagen']; echo "'alt='prewiew' width='120' height='80'>";
echo  "</div>";
echo  "<div class='col-12 text-sm-center col-sm-12 text-md-left col-md-6'>";
echo  "<h4 class='product-name'><strong>"; echo $filas['Name']; echo"</strong></h4>";
echo  "<h4>";
echo  "<small>"; echo $filas['Descripción']; echo "</small>";
echo  "</h4>";
echo  "</div>";
echo  "<div class='col-12 col-sm-12 text-sm-center col-md-4 text-md-right row'>";
echo  "<div class='col-3 col-sm-3 col-md-6 text-md-right' style='padding-top: 5px'>";
echo  "<h6><strong>"; echo $filas['Precio']; echo "€<span class='text-muted'>x</span></strong></h6>";
echo  "</div>";
echo  "<div class='col-4 col-sm-4 col-md-4'>";
echo  "<div class='quantity'>";
echo  "<input type='button' value='+' class='plus'>";
echo  "<input type='number' step='1' max='99' min='1' value='1' title='Qty' class='qty'size='4'>";
echo  "<input type='button' value='-' class='minus'>";
echo  "</div>";
echo  "<div class='col-2 col-sm-2 col-md-2 text-right'>";
echo  "<button type='button' class='btn btn-outline-danger btn-xs'>";
echo  "<i class='fa fa-trash' aria-hidden='true'></i>";
echo  "</button>";
echo  "</div>";
echo  "</div>";
echo  "</div>";
echo  "</div>";
echo  "</hr>";
}
?>
                    </div>
                    <hr>
                    <!-- END PRODUCT -->
                    <!-- PRODUCT -->
                    <hr>
                <div class="pull-right">
                    <a href="" class="btn btn-outline-secondary pull-right">
                        Update shopping cart
                    </a>
                </div>
            </div>
            <div class="card-footer">
                <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="cupone code">
                        </div>
                        <div class="col-6">
                            <input type="submit" class="btn btn-default" value="Use cupone">
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin: 10px">
                    <a href="" class="btn btn-success pull-right">Checkout</a>
                    <div class="pull-right" style="margin: 5px">
                        Total price: <b>50.00€</b>
                    </div>
                </div>
            </div>
        </div>
</div>

</html>