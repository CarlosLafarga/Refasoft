<?php

	$codigo=$_POST['codigo'];
	$producto=$_POST['producto'];
	$unidad=$_POST['unidad'];
	$proveedor=$_POST['proveedor'];
	$cantidad = $_POST['cantidad'];
	$piso = $_POST['piso'];
  	$pasillo = $_POST['pasillo'];
  	$estante = $_POST['estante'];
  	$peldano = $_POST['peldano'];
	$ppv=$_POST['ppv'];
	$grupo = $_POST['Grupo'];
  	

  	include("../conect/conexion.php");
	$cn = Conectarse();

  	if(isset($_GET['codigo'])){

		$codigo = $_GET['codigo'];

	}
  

		#$q = ("UPDATE productos2 SET unidad='$unidad',producto='$producto',cantidad='$cantidad',piso='$piso',Pasillo='$pasillo',Estante='$estante',Peldano='$peldano',Proveedor='$proveedor',ppv='$ppv' WHERE codigo='".$codigo."' ");

		#$r=mysql_query($q,$cn) or die (mysql_error());
		
		#$qf=("UPDATE compras SET factura_compra='$factura',codigo_compra='$codigo',cantidad_compra='$cantidad',fechafac='$fechafac',proveedor_compra='$proveedor',ppv_compra='$ppv' WHERE codigo_compra='".$codigo."'");
		#$resultado=mysql_query($qf,$cn) or die (mysql_error());

/*
		if (!empty($factura)) {

		$q = ("UPDATE productos2 SET unidad='$unidad',producto='$producto',cantidad='$cantidad',piso='$piso',Pasillo='$pasillo',Estante='$estante',Peldano='$peldano',Proveedor='$proveedor',ppv='$ppv' WHERE codigo='".$codigo."' ");

		$r=mysql_query($q,$cn) or die (mysql_error());
		
		$qf=("UPDATE compras SET factura_compra='$factura',codigo_compra='$codigo',cantidad_compra='$cantidad',fechafac='$fechafac',proveedor_compra='$proveedor',ppv_compra='$ppv' WHERE codigo_compra='".$codigo."'");
		$resultado=mysql_query($qf,$cn) or die (mysql_error());

	}else{*/

		$q = ("UPDATE productos2 SET unidad='$unidad',producto='$producto',cantidad='$cantidad',piso='$piso',Pasillo='$pasillo',Estante='$estante',Peldano='$peldano',Proveedor='$proveedor',ppv='$ppv', Grupo='$grupo' WHERE codigo='".$codigo."' ");

		$r=mysql_query($q,$cn) or die (mysql_error());
	//}


	header("location: ../Vista/listar_prod.php");
	echo "<br> Registro Insertado Correctamente! <br>";


	?>
	

