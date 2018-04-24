<?PHP
include "../conect/conexion.php";
$cn    = Conectarse();
$fecha = $_GET['q'];

date_default_timezone_set('America/Hermosillo');
$hoy = date("Y-m-d H:i:s");

$select = "SELECT * FROM ventas WHERE DATE(fecha_venta) = " . DATE($fecha) . "";

$result        = mysql_query($select, $cn);
$reg_existente = mysql_num_rows($result);

echo $reg_existente;

while ($row_rpt = mysql_fetch_array($result)) {
    echo "< tr >
            < td > " . $row_rpt['no_tiket'] . " <  / td >
            < td > " . $row_rpt['venta_total'] . " <  / td >
            < td > " . $row_rpt['vendedor'] . " <  / td >
            < td > " . $row_rpt['tipo_pago'] . " <  / td >
            < td > " . $row_rpt['fecha_venta'] . " <  / td >
            < td > <button>Detalles</button> <  / td >
          < tr >";
}
