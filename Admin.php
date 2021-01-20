</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  </div>
  
  <div id="contenido">
  	<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
  			  <th>ID</th>
  			  <th>Nombre</th>
  			  <th>Descripción</th>
              <th>Precio</th>
              <th>Imagen</th>
  			<th> <a href="nuevo_prod1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>
  		
  		
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
            echo "Felicidades lerdo! te has conectado a la BD";
            
          }
        $instruccion="SELECT * FROM productos";
        $resultado=mysqli_query($con, $instruccion);


      while($filas = $resultado->fetch_assoc()){

          echo "<tr>";
          echo "<td>"; echo $filas['Id']; echo "</td>";
          echo "<td>"; echo $filas['Name']; echo "</td>";
          echo "<td>"; echo $filas['Descripción']; echo "</td>";
          echo "<td>"; echo $filas['Precio']; echo "</td>";
          echo "<td>"; echo $filas['Imagen']; echo "</td>";
          echo "<td>  <a href='modif_prod1.php?no=".$filas['Id']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
          echo "<td> <a href='eliminar_prod.php?no=".$filas['Id']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
        echo "</tr>";
      }

      ?>
  	</table>
  </div>
  
	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>