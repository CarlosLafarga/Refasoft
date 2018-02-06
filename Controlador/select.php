<?php
session_start();

$sele     = $_POST['Proveedor'];
$Cantidad = $_POST['Cantidad'];

//$Precio=$_POST['Precio'];

$conexion   = mysqli_connect("localhost", "root", "", "refaccionaria");
$q12        = ("SELECT Calculo from proveedores where ID_PROVEEDOR=$seleccion");
$ejecutar_q = mysqli_query($conexion, $q12) or die("error al insertar");
$row        = mysqli_fetch_array($ejecutar_q);
$Cal        = $row['Calculo'];
$CN         = $precio * $Cal;
/*

$q=("INSERT INTO registro VALUES ('','$Cantidad','$seleccion','$pago','$total')");*/
$ejecutar_q = mysqli_query($conexion, $q) or die("error al insertar");

$query     = "SELECT Calculo from proveedores where ID_PROVEEDOR=$seleccion";
$resultado = mysqli_query($conexion, $query);
$row       = mysqli_fetch_assoc($resultado);
/*   $cantiactual=$row['CANTIDAD'];

$query2="UPDATE inventario SET  CANTIDAD=$Cantidadnueva where ID_PRODUCTO=$seleccion";
$resultado2=mysqli_query($conexion,$query2);*/

header("location: ../Vista/Venta.php");
echo "<br> Registro Insertado Correctamente! <br>";
