<?PHP
include "../conect/conexion.php";
$cn = Conectarse();
date_default_timezone_set("America/Hermosillo");

//$fecha   = $_GET['fecha'];
//$cliente = $_GET['cliente'];
$fecha_hoy      = DATE("Y-m-d");
$fecha_anterior = dia_anterior($fecha_hoy);

//echo $fecha_anterior;

$select = "SELECT * FROM productos2 WHERE cantidad < 0";

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

function dia_anterior($fecha)
{
    $sol = (strtotime($fecha) - 3600);
    return date('Y-m-d', $sol);
}
