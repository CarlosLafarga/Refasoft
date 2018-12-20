<?PHP
include "../conect/conexion.php";
$cn = Conectarse();
date_default_timezone_set("America/Hermosillo");

//$fecha   = $_GET['fecha'];
//$cliente = $_GET['cliente'];
$fecha_hoy      = DATE("Y-m-d");
$fecha_anterior = dia_anterior($fecha_hoy);

//echo $fecha_anterior;

$select = "SELECT  venta_articulos.codigo, venta_articulos.unidad, venta_articulos.descripcion, venta_articulos.cantidad, tipo_pago,cliente_credito,ventas.fecha_venta,Proveedor,productos2.cantidad AS inventario
FROM venta_articulos LEFT JOIN ventas ON venta_articulos.no_tiket = ventas.no_tiket
LEFT JOIN productos2 ON venta_articulos.codigo = productos2.codigo
WHERE
( ( ventas.fecha_venta = date_sub(DATE(now()),interval 1 day)  and
ventas.cliente_credito not like 'rosalio%'  )   or
( ( ventas.fecha_venta = DATE(NOW())) and
ventas.cliente_credito like 'rosalio%'   )   )
and venta_articulos.cancelado=0 and venta_articulos.devolucion=0
order by codigo,Proveedor";

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
