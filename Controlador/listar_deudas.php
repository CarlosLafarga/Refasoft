<?php

include "../conect/conexion.php";
$cn         = Conectarse();
@$proveedor = $_GET['proveedor'];
@$tipo_fact = $_GET['tipo_fact'];

if ($tipo_fact == 1) {

    $select = "SELECT *  FROM deudas WHERE DATEDIFF(NOW(),fecha_alta)  <= 23  AND proveedor_a_pagar = '" . $proveedor . "';";

} elseif ($tipo_fact == 2) {

    $select = "SELECT *  FROM deudas WHERE DATEDIFF(NOW(),fecha_alta)  > 23  AND  DATEDIFF(NOW(),fecha_alta)  < 30 AND proveedor_a_pagar = '" . $proveedor . "';";

} elseif ($tipo_fact == 3) {

    $select = "SELECT *  FROM deudas WHERE DATEDIFF(NOW(),fecha_alta) > 30 AND proveedor_a_pagar = '" . $proveedor . "' ;";

} else {

    $select = "SELECT * FROM deudas";
}

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
