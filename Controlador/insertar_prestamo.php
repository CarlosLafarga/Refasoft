<?php
include "../conect/conexion.php";
$cn = Conectarse();

if (isset($_POST['nombre'])) {

    $nombre = $_POST['nombre'];
    $monto  = $_POST['monto'];
    $fecha  = $_POST['fecha'];
    $obs    = $_POST['obs'];

}

$sql = "INSERT INTO prestamos(nombre,monto,fecha,obs)
        VALUES('" . $nombre . "','" . $monto . "','" . $fecha . "','" . $obs . "');";

$ejecutar = mysql_query($sql, $cn) or die(mysql_error());

if ($ejecutar) {

    echo "1";

} else {

    echo "2";

}
