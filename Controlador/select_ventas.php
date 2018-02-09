<?PHP
include "../conect/conexion.php";
$cn    = Conectarse();
$fecha = $_GET['fecha'];

$efectivo = "SELECT SUM(venta_total) FROM ventas WHERE tipo_pago = 'efectivo' AND DATE(fecha_venta) = '" . DATE($fecha) . "' ;";
$tarjeta  = "SELECT SUM(venta_total) FROM ventas WHERE tipo_pago = 'tarjeta' AND DATE(fecha_venta) = '" . DATE($fecha) . "';";
$credito  = "SELECT SUM(venta_total) FROM ventas WHERE tipo_pago = 'credito' AND DATE(fecha_venta) = '" . DATE($fecha) . "';";
$total    = "SELECT SUM(venta_total) FROM ventas WHERE DATE(fecha_venta) = '" . DATE($fecha) . "';";

$resultado_efectivo = mysql_query($efectivo, $cn) or die(mysql_error());
$resultado_tarjeta  = mysql_query($tarjeta, $cn) or die(mysql_error());
$resultado_credito  = mysql_query($credito, $cn) or die(mysql_error());
$resultado_total    = mysql_query($total, $cn) or die(mysql_error());

$resultado_efectivo = mysql_result($resultado_efectivo, 0);
$resultado_tarjeta  = mysql_result($resultado_tarjeta, 0);
$resultado_credito  = mysql_result($resultado_credito, 0);
$resultado_total    = mysql_result($resultado_total, 0);

if ($resultado_total == 0) {

    $porcentaje1 = 0;
    $porcentaje2 = 0;
    $porcentaje3 = 0;
    $porcentaje4 = 0;

} else {

    $porcentaje1 = ($resultado_efectivo * 100) / $resultado_total;
    $porcentaje2 = ($resultado_tarjeta * 100) / $resultado_total;
    $porcentaje3 = ($resultado_credito * 100) / $resultado_total;
    $porcentaje4 = ($resultado_total * 100) / $resultado_total;

}

echo '<div class="row">
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">' . DATE($fecha) . '</span>
                                <h5>EFECTIVO</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">$' . $resultado_efectivo . '</h1>
                                <div class="stat-percent font-bold text-info">' . round($porcentaje1) . '% <i class="fa fa-level-up"></i></div>
                                <small>Total</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">' . DATE($fecha) . '</span>
                                <h5>TARJETA</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">$' . $resultado_tarjeta . '</h1>
                                <div class="stat-percent font-bold text-info">' . round($porcentaje2) . '% <i class="fa fa-level-up"></i></div>
                                <small>Total</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">' . DATE($fecha) . '</span>
                                <h5>CREDITO</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">$' . $resultado_credito . '</h1>
                                <div class="stat-percent font-bold text-info">' . round($porcentaje3) . '% <i class="fa fa-level-up"></i></div>
                                <small>Total</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">' . DATE($fecha) . '</span>
                                <h5>TOTAL</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">$' . $resultado_total . '</h1>
                                <div class="stat-percent font-bold text-info">' . $porcentaje4 . '% <i class="fa fa-level-up"></i></div>
                                <small>Total</small>
                            </div>
                        </div>
            </div>
        </div>';
