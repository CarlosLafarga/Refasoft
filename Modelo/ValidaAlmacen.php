<?php
session_start();


	
	$db="refaccionaria";
	$host="localhost";
	$pw="";
	$user="root";
	$con = mysqli_connect($host,$user,$pw,$db) or die("Error al conectar ".mysql_error());

	

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
	$CN=$_POST['CN'];
	$PB=$_POST['PB'];
	$PT=$_POST['PT'];
	$facturas = $_POST['facturas'];
	$factura = $_POST['factura'];
  	$fechafac = $_POST['fechafac'];

	
	if ($facturas === '1') {
		$q=("INSERT INTO productos VALUES ('',' $codigo',' $unidad',' $producto',' $cantidad',' $piso','$pasillo','$estante','$peldaño',' $PT',' $PB',' $proveedor',' $ppv',' $CN')");
		$r=mysqli_query($con,$q) or die ("error al insertar");
		
		$qf=("INSERT INTO compras VALUES ('$factura',' $codigo',' $cantidad',' $fechafac')");
		$resultado=mysqli_query($con,$qf) or die ("error al insertar");
	}else{
		$q=("INSERT INTO productos VALUES ('',' $codigo',' $unidad',' $producto',' $cantidad',' $piso','$pasillo','$estante','$peldaño',' $PT',' $PB',' $proveedor',' $ppv',' $CN')");
		$resultado=mysqli_query($con,$q) or die ("error al insertar");
	}
	
	
	
	header("location: ../Vista/almacen.php");
	echo "<br> Registro Insertado Correctamente! <br>";

?>