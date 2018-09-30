<?PHP
include "../conect/conexion.php";
$cn    = Conectarse();
$fecha = $_GET['fecha'];

$select = "SELECT venta_articulos.*,ventas.tipo_pago FROM venta_articulos LEFT JOIN ventas ON venta_articulos.no_tiket = ventas.no_tiket
WHERE DATE(venta_articulos.fecha_venta) =  '" . $fecha . "' AND tipo_pago ='credito'  AND ventas.cancelado != 1 AND venta_articulos.devolucion !=1 ORDER BY no_tiket ";

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
