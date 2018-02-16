<?php

$codigo    = $_POST['codigo'];
$factura   = $_POST['factura'];
$fechafac  = $_POST['fechafac'];
$cantidad  = $_POST['cantidad'];
$proveedor = $_POST['proveedor'];
$ppv       = $_POST['ppv'];

//evaluar COSTO NETO
if ($proveedor == 'Pernor') {
    $CN = $ppv * 0.64 * 1.16 * 0.89 * 0.95;
}
if ($proveedor == 'Apymsa') {
    $CN = $ppv * 1.16 * 0.9;
}
if ($proveedor == 'Serva') {
    $CN = $ppv * 1.16;
}
if ($proveedor == 'Henlo') {
    $CN = $ppv * 1.16;
}
if ($proveedor == 'Dirco') {
    $CN = $ppv * 1.16;
}
if ($proveedor == 'Ciosa') {
    $CN = $ppv * 1.16;
}
//evaluar PRECIO PB
if ($proveedor == 'Pernor') {
    $PB = $ppv * 1.24;
}
if ($proveedor == 'Apymsa') {
    $PB = $CN * 1.35;
}
if ($proveedor == 'Serva') {
    $PB = $CN * 1.8;
}
if ($proveedor == 'Henlo') {
    $PB = $CN * 2;
}
if ($proveedor == 'Dirco') {
    $PB = $CN * 1.7;
}
if ($proveedor == 'Ciosa') {
    $PB = $CN * 1.8;
}

//evaluar PRECIO TALLER
if ($proveedor == 'Pernor') {
    $PT = $PB / 1.25;
}
if ($proveedor == 'Apymsa') {
    $PT = $PB * 0.8;
}
if ($proveedor == 'Serva') {
    $PT = $PB * 0.8;
}
if ($proveedor == 'Henlo') {
    $PT = $PB * 0.8;
}
if ($proveedor == 'Dirco') {
    $PT = $PB * 0.8;
}
if ($proveedor == 'Ciosa') {
    $PT = $PB * 0.8;
}

include "../conect/conexion.php";
$cn = Conectarse();

if (isset($_GET['codigo'])) {

    $codigo = $_GET['codigo'];

}

if (!empty($codigo)) {

    $q = ("UPDATE productos2 SET cantidad='$cantidad', factura='$factura',proveedor='$proveedor' WHERE codigo='" . $codigo . "' ");

    $r = mysql_query($q, $cn) or die(mysql_error());

    $qf        = ("UPDATE compras SET factura_compra='$factura',cantidad_compra='$cantidad',proveedor_compra='$proveedor',ppv_compra='$ppv' WHERE codigo_compra='" . $codigo . "'");
    $resultado = mysql_query($qf, $cn) or die(mysql_error());

}

header("location: ../Vista/listar_comp.php");
