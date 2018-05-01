<?php
include "../conect/conexion.php";
$cn = Conectarse();

if (isset($_POST['nombre'])) {

    $nombre    = $_POST['nombre'];
    $tipo_pago = $_POST['tipo_pago'];
    $monto     = $_POST['monto'];
    $fecha     = $_POST['fecha'];
    $obs       = $_POST['obs'];

}

$sql = "INSERT INTO pagos_abonos(nombre,tipo_pago,monto,fecha,obs)
        VALUES('" . $nombre . "','" . $tipo_pago . "','" . $monto . "','" . $fecha . "','" . $obs . "');";

$ejecutar = mysql_query($sql, $cn) or die(mysql_error());

if ($ejecutar) {

    echo "1";

} else {

    echo "2";

}
