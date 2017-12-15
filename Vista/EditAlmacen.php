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
	$sql = "SELECT productos2.codigo as codigoprod,productos2.*,compras.* FROM productos2 LEFT JOIN compras ON productos2.codigo = compras.codigo_compra WHERE Num_Producto = '".$id."' ";  
	
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
                          $grupo = $reg['Grupo'];
                          $factura = $reg['factura_compra'];
                          
                         
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



<?PHP include("../Section/footer.php"); ?>
</div>

</div>

</body>
 

</html>

