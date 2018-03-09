<!DOCTYPE html>
<html>

<head>

   <?PHP include "../Section/css.php";?>
   <?php
include "../conect/conexion.php";
if (isset($_GET['no_ticket'])) {

    $ticket = $_GET['no_ticket'];
}
$cn       = Conectarse();
$sql      = "SELECT * FROM ventas WHERE no_tiket = '" . $ticket . "';";
$ejecutar = mysql_query($sql, $cn);
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
                                    <h4>No. Ticket</h4>
                                    <h4 class="text-navy"><?PHP echo $_GET['no_ticket']; ?></h4>

                                    <address>
                                        <strong>Venta al publico</strong><br>

                                    </address>
                                    <p>
                                        <span><strong>Fecha de Compra:</strong>&nbsp;<?PHP echo $result['fecha_venta']; ?></span><br/>

                                    </p>
                                </div>
                            </div>

                            <div class="table-responsive m-t">
                                <table class="table invoice-table">
                                    <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio Unitario</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php

$sql      = "SELECT venta_articulos.*,ventas.venta_total FROM venta_articulos LEFT JOIN ventas ON venta_articulos.no_tiket = ventas.no_tiket WHERE venta_articulos.no_tiket = '" . $ticket . "' ";
$ejecutar = mysql_query($sql, $cn) or die(mysql_error());
while ($row = mysql_fetch_array($ejecutar)) {

    echo '<tr>';
    echo '<td><strong>' . $row['codigo'] . '</strong></td>';
    echo '<td>' . $row["descripcion"] . '</td>';
    echo '<td>' . $row['cantidad'] . '</td>';
    echo '<td>' . $row['precio'] . '</td>';
    echo '<td>' . $row['total'] . '</td>';
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
                                    <td>$<?PHP echo $result['venta_total']; ?></td>
                                </tr>
                                <tr>
                                    <td><strong>TOTAL :</strong></td>
                                    <td>$<?PHP echo $result['venta_total']; ?></td>
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