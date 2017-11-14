<?php

	$codigo=$_POST['codigo'];
	$producto=$_POST['producto'];
	$unidad=$_POST['unidad'];
	$proveedor=$_POST['proveedor'];
	$cantidad = $_POST['cantidad'];
	$piso = $_POST['piso'];
  	$pasillo = $_POST['pasillo'];
  	$estante = $_POST['estante'];
  	$peldaño = $_POST['peldaño'];
	$ppv=$_POST['ppv'];
	
	$factura = $_POST['factura'];
  	$fechafac = $_POST['fechafac'];

  	include("../conect/conexion.php");
	$cn = Conectarse();

  	if(isset($_GET['codigo'])){

		$codigo = $_GET['codigo'];

	}
  

		$q = ("UPDATE productos2 SET unidad='$unidad',producto='$producto',cantidad='$cantidad',piso='$piso',pasillo='$pasillo',estante='$estante',peldaño='$peldaño',Proveedor='$proveedor',ppv='$ppv' WHERE codigo='".$codigo."' ");

		$r=mysql_query($q,$cn) or die ("error al insertar");
		
		$qf=("UPDATE compras SET factura='$factura',codigo='$codigo',cantidad='$cantidad',fechafac='$fechafac',proveedor='$proveedor',ppv='$ppv' WHERE codigo='".$codigo."'");
		$resultado=mysql_query($qf,$cn) or die ("error al insertar");

	header("location: ../Vista/listar_prod.php");
	echo "<br> Registro Insertado Correctamente! <br>";


	?>
	

