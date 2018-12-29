<?PHP
include "../conect/conexion.php";
$cn = Conectarse();



// $fecha_hoy      = DATE("Y-m-d");
// $fecha_anterior = dia_anterior($fecha_hoy);

$de      = $_GET['de'];


//echo $fecha_anterior;




$select = "SELECT venta_articulos.Id,cantidad,codigo,unidad,descripcion,precio,total from ventas,venta_articulos
WHERE  (cliente_credito like '%rosalio%') AND DATE(ventas.fecha_venta) BETWEEN '" . $de . "' AND '" . $de . "' and venta_articulos.no_tiket=ventas.no_tiket";






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

// function dia_anterior($fecha)
// {
//     $sol = (strtotime($fecha) - 3600);
//     return date('Y-m-d', $sol);
// }