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
  $sql = "SELECT* from compras WHERE id_compra = '".$id."' ";  
  
  $ejecutar  = mysql_query($sql,$cn) or die(mysql_error());

     while ($reg = mysql_fetch_array($ejecutar)) {
                          
                          $factura = $reg['factura_compra'];
                          $codigo = $reg['codigo_compra'];
                          $cantidad = $reg['cantidad_compra'];
                          $fechafac = $reg['fechafac']; 
                          $proveedor = $reg['Proveedor_compra'];
                          $ppv = $reg['ppv_compra'];
                          
                         
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
          <?PHP include("../Section/FormEditCompra.php");?>          

</div>
</div>

</body>
<?PHP include("../Section/footer.php"); ?>

</html>

