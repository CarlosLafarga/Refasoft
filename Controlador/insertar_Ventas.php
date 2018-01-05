<?php

include("../conect/conexion.php");
$cn = Conectarse();

if(isset($_POST["codigo"])){

    $codigo = $_POST["codigo"];
    $producto = $_POST["producto"];
    $cantidad = $_POST["cantidad"];
    $precios = $_POST["precios"];
    $total = $_POST['totals'];

    $query = '';

 for($count = 0; $count<count($codigo); $count++){


  $codigo_clean = mysql_real_escape_string($codigo[$count],$cn);
  $producto_clean = mysql_real_escape_string($producto[$count],$cn);
  $cantidad_clean = mysql_real_escape_string($cantidad[$count],$cn);
  $precios_clean = mysql_real_escape_string($precios[$count],$cn);
  $total_clean = mysql_real_escape_string($total[$count],$cn);

  if($codigo_clean != '' && $producto_clean != '' && $cantidad_clean != '' && $precios_clean != '' && $total_clean != ''){

   $query .= '
   INSERT INTO venta_articulos(no_tiket,codigo,descripcion,cantidad,precio,total,fecha_venta) 
   VALUES("RAND() * 1000","'.$codigo_clean.'", "'.$producto_clean.'", "'.$cantidad_clean.'", "'.$precios_clean.'","'.$total_clean.'","NOW()"); 
   ';
  }

 }

 

  if(mysqli_multi_query($cn,$query)){
    echo 'Item Data Inserted';
  }
  else
  {
    echo 'Error';
  }

 
}
?>