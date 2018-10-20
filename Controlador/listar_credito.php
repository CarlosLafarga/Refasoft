<?PHP
include "../conect/conexion.php";
$cn = Conectarse();

$cliente = $_GET['cliente'];
$de      = $_GET['de'];
$a       = $_GET['a'];

//$select = "SELECT * FROM ventas WHERE cliente_credito = '" . $cliente . "' AND fecha_venta BETWEEN '" . $de . "' AND '" . $a . "' ORDER BY no_tiket DESC ";

$select = "SELECT venta_articulos.Id,venta_articulos.no_tiket,venta_articulos.codigo,venta_articulos.descripcion,venta_articulos.cantidad,venta_articulos.precio,venta_articulos.total,venta_articulos.fecha_venta,ventas.vendedor,venta_articulos.unidad FROM venta_articulos LEFT JOIN ventas ON venta_articulos.no_tiket = ventas.no_tiket
	 WHERE ventas.cliente_credito = '" . $cliente . "' AND ventas.fecha_venta BETWEEN '" . $de . "' AND '" . $a . "' AND venta_articulos.cancelado != 1 AND venta_articulos.devolucion != 1  ORDER BY venta_articulos.Id;";
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
