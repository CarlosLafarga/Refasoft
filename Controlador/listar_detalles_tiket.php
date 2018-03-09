<?PHP
include "../conect/conexion.php";
$cn       = Conectarse();
$no_tiket = $_GET['no_tiket'];

$select = "SELECT * FROM venta_articulos WHERE no_tiket =  '" . $no_tiket . "' AND cantidad != 0; ";
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
