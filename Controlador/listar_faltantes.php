<?PHP
include "../conect/conexion.php";
$cn = Conectarse();
date_default_timezone_set("America/Hermosillo");

$today = date("Y-m-d");

$anterior = dia_anterior($today);

$select = "SELECT codigo,descripcion,unidad,SUM(cantidad) as cantidad,ventas.tipo_pago,ventas.cliente_credito,venta_articulos.fecha_venta
FROM venta_articulos LEFT JOIN ventas ON venta_articulos.no_tiket = ventas.no_tiket
WHERE ventas.tipo_pago ='credito' AND DATE(venta_articulos.fecha_venta) = '$anterior' group by codigo; ";
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
