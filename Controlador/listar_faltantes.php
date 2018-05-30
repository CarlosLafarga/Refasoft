<?PHP
include "../conect/conexion.php";
$cn = Conectarse();
date_default_timezone_set("America/Hermosillo");

//$fecha   = $_GET['fecha'];
//$cliente = $_GET['cliente'];
$fecha_hoy      = DATE("Y-m-d");
$fecha_anterior = dia_anterior($fecha_hoy);

//echo $fecha_anterior;

$select = "SELECT
venta_articulos.codigo,
venta_articulos.descripcion,
venta_articulos.unidad,
SUM(venta_articulos.cantidad) as cantidad,
productos2.proveedor,
venta_articulos.fecha_venta
FROM venta_articulos
LEFT JOIN ventas ON venta_articulos.no_tiket = ventas.no_tiket
LEFT JOIN productos2 ON venta_articulos.codigo = productos2.codigo
WHERE ventas.tipo_pago ='credito' AND DATE(venta_articulos.fecha_venta) = DATE(NOW())  group by venta_articulos.codigo; ";

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
