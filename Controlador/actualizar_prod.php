<?php


//include("../conect/conexion.php");
//$cn = Conectarse();
$link = mysqli_connect("localhost", "root", "", "refaccionaria");

if(isset($_POST["id"])){
  /*para insertar en tabla de ventas pero por unidad*/
    $id = $_POST['id'];
    $codigo = $_POST["codigo"];
    $producto = $_POST["producto"];
    $cantidad = $_POST["cantidad"];
    $precio_proveedor = $_POST["precio_prove"];
    $precio_taller = $_POST['precio_taller'];
    $precio_publico = $_POST['precio_publico'];
    $factura = $_POST['factura'];
    $proveedor = $_POST['proveedor'];
    /*para insertar en tabla de ventas pero general*/
    
    
    date_default_timezone_set('America/Hermosillo');
    $hoy = date("Y-m-d H:i:s");

    $query = '';
    $update = '';

 for($count = 0; $count<count($codigo); $count++){


  $id_clean = mysqli_real_escape_string($link , $id[$count]);
  $codigo_clean = mysqli_real_escape_string($link , $codigo[$count]);
  $producto_clean = mysqli_real_escape_string($link , $producto[$count]);
  $cantidad_clean = mysqli_real_escape_string($link , $cantidad[$count]);
  $precio_proveedor_clean = mysqli_real_escape_string($link , $precio_proveedor[$count]);
  $proveedor_clean = mysqli_real_escape_string($link , $proveedor[$count]);
  $factura_clean = mysqli_real_escape_string($link,$factura );
  $fecha = mysqli_real_escape_string($link, $hoy);
  

  if($codigo_clean != '' && $producto_clean != '' && $cantidad_clean != '' && $precio_proveedor_clean != '' && $proveedor_clean != '' && $factura_clean !=''){

   $query .= '
   INSERT INTO compras (factura_compra,codigo_compra,cantidad_compra,fechafac,Proveedor_compra,ppv_compra)
   VALUES("'.$factura_clean.'","'.$codigo_clean.'","'.$cantidad_clean.'", "'.$fecha.'","'.$proveedor_clean.'","'.$precio_proveedor_clean.'"); 
   ';

   

   }

   }

   
   for($contador = 0; $contador<count($id); $contador++){
 
       $cantidad_clean2 = mysqli_real_escape_string($link , $cantidad[$contador]);
       $id_clean = mysqli_real_escape_string($link, $id[$contador]);
       $precio_proveedor_clean2 = mysqli_real_escape_string($link, $precio_proveedor[$contador]);
       $precio_taller_clean2 = mysqli_real_escape_string($link, $precio_taller[$contador]);
       $precio_publico_clean2 = mysqli_real_escape_string($link, $precio_publico[$contador]);


    if($cantidad_clean2 != '' && $id_clean != '' && $precio_proveedor_clean2 != '' && $precio_taller_clean2 !='' && $precio_publico_clean2 !=''  ){

   
   
   $update .= '
   UPDATE productos2 SET cantidad = cantidad +'.$cantidad_clean2.',PT = '.$precio_taller_clean2.',PB = '.$precio_publico_clean2.',ppv = '.$precio_proveedor_clean2.' WHERE Num_Producto = '.$id_clean.';
   ';

   }

   }





 
  if($query != '' AND  $update != ''){

 
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




