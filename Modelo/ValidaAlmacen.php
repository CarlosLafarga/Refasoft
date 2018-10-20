<?php
session_start();

$db   = "refaccionaria";
$host = "localhost";
$pw   = "";
$user = "root";
$con  = mysqli_connect($host, $user, $pw, $db) or die("Error al conectar " . mysql_error());

$codigo    = $_POST['codigo'];
$producto  = $_POST['producto'];
$unidad    = $_POST['unidad'];
$proveedor = $_POST['proveedor'];
$cantidad  = $_POST['cantidad'];
$piso      = $_POST['piso'];
$pasillo   = $_POST['pasillo'];
$estante   = $_POST['estante'];
$peldano   = $_POST['peldano'];
$ppv       = $_POST['ppv'];
$CN        = $_POST['CN'];
$PB        = $_POST['PB'];
$PT        = $_POST['PT'];

$factura  = $_POST['factura'];
$fechafac = $_POST['fechafac'];

//CHECAR ESTE IF
if (!empty($factura)) {

    $q = ("INSERT INTO productos2(codigo,unidad,Descripcion,cantidad,PT,PB,Proveedor,ppv,CN,Piso,Pasillo,Estante,Peldano,ult_factura) VALUES ('$codigo',' $unidad',' $producto',' $cantidad','$PT','$PB','$proveedor','$ppv','$CN','$piso','$pasillo','$estante','$peldano','$factura')");
    $r = mysqli_query($con, $q) or die("error al insertar");

    $qf        = ("INSERT INTO compras(factura_compra,codigo_compra,cantidad_compra,fechafac,Proveedor_compra,ppv_compra) VALUES ('$factura','$codigo','$cantidad','$fechafac','$proveedor','$ppv')");
    $resultado = mysqli_query($con, $qf) or die("error al insertar");

} else {

    $q = ("INSERT INTO productos2(codigo,unidad,Descripcion,cantidad,PT,PB,Proveedor,ppv,CN,Piso,Pasillo,Estante,Peldano) VALUES ('$codigo','$unidad',' $producto','$cantidad','$PT','$PB','$proveedor','$ppv','$CN','$piso','$pasillo','$estante','$peldano')");
    $r = mysqli_query($con, $q) or die("error al insertar2");
}

header("location: ../Vista/almacen.php");
echo "<br> Registro Insertado Correctamente! <br>";
