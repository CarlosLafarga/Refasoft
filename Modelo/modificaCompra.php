<?php 

    $codigo=$_POST['codigo'];
	$factura = $_POST['factura'];
	$fechafac = $_POST['fechafac'];
	$cantidad = $_POST['cantidad'];
	$proveedor=$_POST['proveedor'];
	$ppv=$_POST['ppv'];
	
  	

  	include("../conect/conexion.php");
	$cn = Conectarse();

  	if(isset($_GET['factura'])){

		$factura = $_GET['factura'];
	}

	if (!empty($codigo)) {


		$qf=("UPDATE compras SET codigo_compra='$codigo',codigo_compra='$codigo',cantidad_compra='$cantidad',fechafac='$fechafac',proveedor_compra='$proveedor',ppv_compra='$ppv' WHERE factura_compra='".$factura."'");
		$resultado=mysql_query($qf,$cn) or die (mysql_error());
	}

	header("location: ../Vista/listar_comp.php");

 ?>