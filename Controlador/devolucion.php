<?PHP

include "../conect/conexion.php";
$cn = Conectarse();

if (isset($_POST['no_tiket'])) {

    $no_tiket       = $_POST['no_tiket'];
    $cantidad       = $_POST['cantidad'];
    $cantidad_input = $_POST['cantidad_input'];
    $precio         = $_POST['precio'];
    $codigo         = $_POST['codigo'];

    $precio_final = $cantidad * $precio;

    if ($cantidad_input == $cantidad) {

        $numero = 1;
    } else {
        $numero = 0;
    }

}

$update1 = "UPDATE productos2 SET cantidad = cantidad + " . $cantidad_input . " ,fecha_ult_devolucion = NOW() WHERE  codigo = '" . $codigo . "';";

$update2 = "UPDATE venta_articulos SET devolucion = " . $numero . " , cantidad = cantidad -'" . $cantidad_input . "',total = total -'" . $precio_final . "' WHERE no_tiket = '" . $no_tiket . "' AND codigo = '" . $codigo . "';";

$update3 = "UPDATE ventas SET venta_total = venta_total - " . $precio_final . ", devolucion = " . $cantidad_input . " WHERE no_tiket = '" . $no_tiket . "';";

$ejecutar1 = mysql_query($update1, $cn) or die(mysql_error());
$ejecutar2 = mysql_query($update2, $cn) or die(mysql_error());
$ejecutar3 = mysql_query($update3, $cn) or die(mysql_error());

if (!$ejecutar1 || !$ejecutar2 || !$ejecutar3) {

    echo "1";

} else {

    echo "2";
}
