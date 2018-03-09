<!DOCTYPE html>
<html>

<head>

   <?PHP include "../Section/css.php";?>
   <?php
include "../conect/conexion.php";
if (isset($_GET['cliente'])) {

    $cliente = $_GET['cliente'];
    $de      = $_GET['de'];
    $a       = $_GET['a'];

}
$cn       = Conectarse();
$sql      = "SELECT SUM(venta_total) as total_suma FROM ventas WHERE cliente_credito = '" . $cliente . "' AND fecha_venta BETWEEN '" . $de . "' AND '" . $a . "' ORDER BY cliente_credito";
$ejecutar = mysql_query($sql, $cn) or die(mysql_error());
$result   = mysql_fetch_array($ejecutar);

?>
</head>

<body class="white-bg">
                <div class="wrapper wrapper-content p-xl">
                    <div class="ibox-content p-xl">
                            <div class="row">
                                <div class="col-sm-6">

                                    <address>
                                        <strong>Refaccionaría Rivera</strong><br>
                                        Boulevar Solidaridad 601<br>
                                        Choyal, 83130 Hermosillo, Son.<br>
                                        <p><b>Tel:</b> (662) 262-1129</p>
                                    </address>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <h4>Nombre Cliente:</h4>
                                    <h4 class="text-navy"><?PHP echo $_GET['cliente']; ?></h4>

                                    <address>
                                        <strong>Nota Credito</strong><br>

                                    </address>
                                    <p>
                                        <span><strong>Fecha de:</strong>&nbsp;<?PHP echo DATE($_GET['de']); ?> <strong>A</strong> <?PHP echo DATE($_GET['a']); ?> </span><br/>

                                    </p>
                                </div>
                            </div>

                            <div class="table-responsive m-t">
                                <table class="table invoice-table">
                                    <thead>
                                    <tr>
                                        <th>No Ticket</th>
                                        <th>Vendedor</th>
                                        <th>Codigo</th>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>Total</th>
                                        <th>Fecha Venta</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php

$sql      = "SELECT venta_articulos.no_tiket,venta_articulos.codigo,venta_articulos.descripcion,venta_articulos.cantidad,venta_articulos.precio,venta_articulos.total,venta_articulos.fecha_venta,ventas.vendedor FROM venta_articulos LEFT JOIN ventas ON venta_articulos.no_tiket = ventas.no_tiket WHERE ventas.cliente_credito = '" . $cliente . "' AND ventas.fecha_venta BETWEEN '" . $de . "' AND '" . $a . "' ORDER BY no_tiket DESC;";
$ejecutar = mysql_query($sql, $cn) or die(mysql_error());
while ($row = mysql_fetch_array($ejecutar)) {

    echo '<tr>';
    echo '<td><strong>' . $row['no_tiket'] . '</strong></td>';
    echo '<td>' . $row["vendedor"] . '</td>';
    echo '<td>' . $row['codigo'] . '</td>';
    echo '<td>' . $row['descripcion'] . '</td>';
    echo '<td>' . $row['cantidad'] . '</td>';
    echo '<td>' . $row['precio'] . '</td>';
    echo '<td>' . $row['total'] . '</td>';
    echo '<td>' . $row['fecha_venta'] . '</td>';
    echo '</tr>';

}
?>




                                    </tbody>
                                </table>
                            </div><!-- /table-responsive -->

                            <table class="table invoice-total">
                                <tbody>
                                <tr>
                                    <td><strong>Sub Total :</strong></td>
                                    <td>$<?PHP echo $result['total_suma']; ?></td>
                                </tr>
                                <tr>
                                    <td><strong>TOTAL :</strong></td>
                                    <td>$<?PHP echo $result['total_suma']; ?></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="well m-t"><strong>En partes eléctricas no hay garantía.</strong>

                            </div>
                        </div>

    </div>

   <?PHP @include "../Section/js_basico.php";?>

    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>