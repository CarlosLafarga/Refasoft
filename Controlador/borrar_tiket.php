<?PHP

include "../conect/conexion.php";
$cn = Conectarse();

if (isset($_POST['no_tiket'])) {

    $no_tiket      = $_POST['no_tiket'];
    $select        = "SELECT * FROM venta_articulos WHERE no_tiket = '" . $no_tiket . "';";
    $result_select = mysql_query($select, $cn) or die(mysql_error());
    while ($row = mysql_fetch_array($result_select)) {

        $codigo   = $row['codigo'];
        $cantidad = $row['cantidad'];

        $update3        = "UPDATE productos2 SET cantidad = cantidad + " . $cantidad . " WHERE codigo = '" . $codigo . "';";
        $result_updates = mysql_query($update3, $cn) or die(mysql_error());
    }

}

$update1 = "UPDATE venta_articulos SET cancelado = 1  WHERE no_tiket ='" . $no_tiket . "';";

$update2 = "UPDATE ventas SET cancelado = 1 WHERE no_tiket = '" . $no_tiket . "';";

$ejecutar1 = mysql_query($update1, $cn) or die(mysql_error());
$ejecutar2 = mysql_query($update2, $cn) or die(mysql_error());

if (!$ejecutar1 || !$ejecutar2) {

    echo "1";

} else {

    echo "2";
}
