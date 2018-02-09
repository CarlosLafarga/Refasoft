<?PHP
include "../conect/conexion.php";
$cn    = Conectarse();
$fecha = $_GET['fecha'];

$select = "SELECT * FROM ventas WHERE DATE(fecha_venta) =  '" . DATE($fecha) . "'; ";
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
