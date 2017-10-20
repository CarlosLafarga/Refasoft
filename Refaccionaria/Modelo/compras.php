<?php
session_start();


	
	$db="refaccionaria";
	$host="localhost";
	$pw="";
	$user="root";
	$con = mysqli_connect($host,$user,$pw,$db) or die("Error al conectar ".mysql_error());

	

	$factura=$_POST['factura'];
	$producto=$_POST['producto'];
	$cantidad = $_POST['cantidad'];
	$fechafac=$_POST['fechafac'];


	$qf=("INSERT INTO compras VALUES ('$factura',' $producto',' $cantidad',' $fechafac')");
	//echo $q;
	$r=mysqli_query($con,$qf) or die ("error al insertar");
	
	
	header("location: ../Vista/almacen.php");
	echo "<br> Registro Insertado Correctamente! <br>";

?>