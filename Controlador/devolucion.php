<?PHP

include "../conect/conexion.php";
$cn = Conectarse();

if (isset($_POST['no_tiket'])) {

    $no_tiket = $_POST['no_tiket'];
    $cantidad = $_POST['cantidad'];
    $precio   = $_POST['precio'];
    $codigo   = $_POST['codigo'];

}

$update1 = "UPDATE productos2 SET cantidad = cantidad + " . $cantidad . " ,fecha_ult_devolucion = NOW() WHERE  codigo = " . $codigo . ";";

$update2 = "UPDATE venta_articulos SET cantidad = cantidad - " . $cantidad . ", total = total -" . $precio . ", devolucion = 1  WHERE no_tiket = " . $no_tiket . " AND codigo = " . $codigo . ";";

$update3 = "UPDATE ventas SET venta_total = venta_total - " . $precio . ", devolucion = 1 WHERE no_tiket = " . $no_tiket . ";";
