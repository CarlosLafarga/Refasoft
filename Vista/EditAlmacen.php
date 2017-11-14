<?php 
session_start();

if(!isset($_SESSION["nombre"])){ 
   header("location:../Vista/Login.php"); 
   exit();
   
} 

?> 

<?php 
	
	if(isset($_GET['id'])){

		$id = $_GET['id'];

	}

	include("../conect/conexion.php");
	$cn = Conectarse();
	$sql = "SELECT * FROM productos2 LEFT JOIN compras ON productos2.codigo = compras.codigo WHERE Num_Producto = '".$id."' ";
	
	$ejecutar  = mysql_query($sql,$cn) or die(mysql_error());

	   while ($reg = mysql_fetch_array($ejecutar)) {
                         
                          $codigo = $reg['codigo'];
                          $producto = $reg['Descripcion'];
                          $unidad = $reg['unidad']; 
                          $proveedor = $reg['Proveedor'];
                          $ppv = $reg['ppv'];
                          $cantidad = $reg['cantidad'];
                          $piso = $reg['Piso'];
                          $pasillo = $reg['Pasillo'];
                          $peldaño = $reg['Peldano'];
                          $estante = $reg['Estante'];
                          $factura = $reg['factura'];
                          $fechafac = $reg['fechafac'];
                         
      }

?>

<!DOCTYPE html>
<html>
<head>
	<title>EDITAR ALMACEN</title>
	<?PHP include("../Section/css.php");?>
    <?PHP include("../Section/js.php");?>
  
</head>
<body class="top-navigation">
  <div id="wrapper">
     <div id="page-wrapper" class="gray-bg">
          <?PHP include("../Section/menu.php");?>
          <?PHP include("../Section/FormEditAlmacen.php");?>          

</div>
</div>

</body>
<!--<?PHP #include("../Section/footer.php"); ?> -->

</html>

