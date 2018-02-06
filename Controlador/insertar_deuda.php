<?php
include "../conect/conexion.php";
$cn = Conectarse();

if (isset($_POST['factura'])) {

    $factura   = $_POST['factura'];
    $fecha     = $_POST['fecha'];
    $total     = $_POST['total'];
    $proveedor = $_POST['proveedor'];

}

$sql = "INSERT INTO deudas(no_factura,fecha_alta,total_de_factura,proveedor_a_pagar)
        VALUES('" . $factura . "','" . $fecha . "','" . $total . "','" . $proveedor . "');";

$ejecutar = mysql_query($sql, $cn) or die(mysql_error());

if ($ejecutar) {

    echo "1";

} else {

    echo "2";

}
