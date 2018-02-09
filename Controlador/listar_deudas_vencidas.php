<?php

include "../conect/conexion.php";
$cn = Conectarse();

$select = "SELECT *  FROM deudas WHERE DATEDIFF(NOW(),fecha_alta) > 30 ;";
$result = mysql_query($select, $cn);

if (!$result) {

    die(mysql_error());

} else {
    $arreglo["data"] = [];
    while ($data = mysql_fetch_assoc($result)) {

        $arreglo["data"][] = $data;

    }
    echo json_encode($arreglo);
}
mysql_free_result($result);
mysql_close($cn);
