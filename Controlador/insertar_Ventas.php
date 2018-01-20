<?php

//include("../conect/conexion.php");
//$cn = Conectarse();
$link = mysqli_connect("localhost", "root", "", "refaccionaria");

if(isset($_POST["codigo"])){
  /*para insertar en tabla de ventas pero por unidad*/
    $codigo = $_POST["codigo"];
    $producto = $_POST["producto"];
    $cantidad = $_POST["cantidad"];
    $precios = $_POST["precios"];
    $total = $_POST['totals'];
    /*para insertar en tabla de ventas pero general*/
    $id = $_POST['id'];
    $total_input = $_POST['total_total'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $tipo_pago = $_POST['tipo_pago'];
    $tipo_cliente = $_POST['tipo_cliente'];
    $pago_con = $_POST['pago_con'];
    $nombre_cliente = $_POST['nombre_credito'];

    $resultado_cuenta = $pago_con - $total_input;



    $int_rand = rand(100000,1000000);
    date_default_timezone_set('America/Hermosillo');
    $hoy = date("Y-m-d H:i:s");

    $query = '';
    $update = '';

 for($count = 0; $count<count($codigo); $count++){


  $codigo_clean = mysqli_real_escape_string($link , $codigo[$count]);
  $producto_clean = mysqli_real_escape_string($link , $producto[$count]);
  $cantidad_clean = mysqli_real_escape_string($link , $cantidad[$count]);
  $precios_clean = mysqli_real_escape_string($link , $precios[$count]);
  $total_clean = mysqli_real_escape_string($link , $total[$count]);
  $random = mysqli_real_escape_string($link,$int_rand );
  $fecha = mysqli_real_escape_string($link, $hoy);
  

  if($codigo_clean != '' && $producto_clean != '' && $cantidad_clean != '' && $precios_clean != '' && $total_clean != ''){

   $query .= '
   INSERT INTO venta_articulos (no_tiket,codigo,descripcion,cantidad,precio,total,fecha_venta)
   VALUES("'.$random.'","'.$codigo_clean.'", "'.$producto_clean.'", "'.$cantidad_clean.'", "'.$precios_clean.'","'.$total_clean.'","'.$fecha.'"); 
   ';

   

   }

   }

   
   for($contador = 0; $contador<count($id); $contador++){
 
  $cantidad_clean2 = mysqli_real_escape_string($link , $cantidad[$contador]);
  $id_clean = mysqli_real_escape_string($link, $id[$contador]);

  if($cantidad_clean2 != '' && $id_clean != '' ){

   
   
   $update .= '
   UPDATE productos2 SET cantidad = cantidad -'.$cantidad_clean2.' WHERE Num_Producto = '.$id_clean.';
   ';

   }

   }



   $query2 = "INSERT INTO ventas(no_tiket,vendedor,venta_total,tipo_pago,cliente_credito,tipo_cliente,fecha_venta)VALUES('".$random."','".$nombre_usuario."','".$total_input."','".$tipo_pago."','".$nombre_cliente."','".$tipo_cliente."',NOW());";

 



 
  if($query != '' AND $query2 !='' AND  $update != ''){

  if(mysqli_query($link, $query2)){

    mysqli_close($link);

  }else{

    echo '4';

  }
  /*--------------------------------------------UPDATE -----------------------------------------------*/
$link = mysqli_connect("localhost", "root", "", "refaccionaria");
  if (mysqli_multi_query($link,$update)) {
    # code...
    mysqli_close($link);

  }else{

    echo "5";
  }
/*----------------------------------------------------------------------------------------------------*/
$link = mysqli_connect("localhost", "root", "", "refaccionaria");
  if(mysqli_multi_query($link, $query)){

   echo "1";
   
   mysqli_close($link);

  }else{

   echo "6";

  }

/*----------------------------------------------------------------------------------------------------*/

 }else{

  echo '7';

 }


/*----------------------------------------------------------------------------------------------------*/
}else{

  echo "8";
}

?>



