<?PHP
include "../conect/conexion.php";
$cn    = Conectarse();
$fecha = $_GET['fecha'];

$efectivo = "SELECT SUM(venta_total) FROM ventas WHERE tipo_pago = 'efectivo' AND DATE(fecha_venta) = '" . DATE($fecha) . "' AND cancelado != 1 ;";
$tarjeta  = "SELECT SUM(venta_total) FROM ventas WHERE tipo_pago = 'tarjeta' AND DATE(fecha_venta) = '" . DATE($fecha) . "' AND cancelado != 1;";
$credito  = "SELECT SUM(venta_total) FROM ventas WHERE tipo_pago = 'credito' AND DATE(fecha_venta) = '" . DATE($fecha) . "' AND cancelado != 1;";
$total    = "SELECT SUM(venta_total) FROM ventas WHERE tipo_pago != 'credito' AND DATE(fecha_venta) = '" . DATE($fecha) . "' AND cancelado != 1;";

$chkda        = "SELECT SUM(total) FROM venta_articulos WHERE codigo = 'chkda' AND DATE(fecha_venta) ='" . DATE($fecha) . "';";
$prestamo     = "SELECT SUM(monto) FROM prestamos WHERE  DATE(fecha) ='" . DATE($fecha) . "';";
$pagos_abonos = "SELECT SUM(monto) FROM pagos_abonos WHERE  DATE(fecha) ='" . DATE($fecha) . "';";

$resultado_efectivo = mysql_query($efectivo, $cn) or die(mysql_error());
$resultado_tarjeta  = mysql_query($tarjeta, $cn) or die(mysql_error());
$resultado_credito  = mysql_query($credito, $cn) or die(mysql_error());
$resultado_total    = mysql_query($total, $cn) or die(mysql_error());
$resultado_chkda    = mysql_query($chkda, $cn) or die(mysql_error());
$resultado_prestamo = mysql_query($prestamo, $cn) or die(mysql_error());
$resultado_pagos    = mysql_query($pagos_abonos, $cn) or die(mysql_error());

$resultado_efectivo = mysql_result($resultado_efectivo, 0);
$resultado_tarjeta  = mysql_result($resultado_tarjeta, 0);
$resultado_credito  = mysql_result($resultado_credito, 0);
$resultado_chkda    = mysql_result($resultado_chkda, 0);
$resultado_prestamo = mysql_result($resultado_prestamo, 0);
$resultado_pagos    = mysql_result($resultado_pagos, 0);

if ($resultado_efectivo == 0) {$resultado_efectivo = 0;} else { $resultado_efectivo;}
if ($resultado_tarjeta == 0) {$resultado_tarjeta = 0;} else { $resultado_tarjeta;}
if ($resultado_credito == 0) {$resultado_credito = 0;} else { $resultado_credito;}
if ($resultado_efectivo == 0) {$resultado_efectivo = 0;} else { $resultado_efectivo;}
if ($resultado_chkda == 0) {$resultado_chkda = 0;} else { $resultado_chkda;}
if ($resultado_prestamo == 0) {$resultado_prestamo = 0;} else { $resultado_prestamo;}
if ($resultado_pagos == 0) {$resultado_pagos = 0;} else { $resultado_pagos;}

$total_efectivo = ($resultado_efectivo + $resultado_chkda + $resultado_pagos) - $resultado_prestamo;
$total_venta    = $resultado_efectivo + $resultado_tarjeta + $resultado_pagos + $resultado_chkda;

echo '<div class="row">
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">' . DATE($fecha) . '</span>
                                <h5>EFECTIVO</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">$' . $resultado_efectivo . '</h1>
                                <div class="stat-percent font-bold text-info"></div>
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
                                <div class="stat-percent font-bold text-info"></div>
                                <small>Total</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">' . DATE($fecha) . '</span>
                                <h5>CHECADAS</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">$' . $resultado_chkda . '</h1>
                                <div class="stat-percent font-bold text-info"></div>
                                <small>Total</small>
                            </div>
                        </div>
                    </div>

            <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">' . DATE($fecha) . '</span>
                                <h5>PRESTAMOS DEL DIA</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">$' . $resultado_prestamo . '</h1>
                                <div class="stat-percent font-bold text-info"></div>
                                <small>Total</small>
                            </div>
                        </div>
            </div>
            <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">' . DATE($fecha) . '</span>
                                <h5>PAGOS O ABONOS</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">$' . $resultado_pagos . '</h1>
                                <div class="stat-percent font-bold text-info"></div>
                                <small>Total</small>
                            </div>
                        </div>
            </div>

            <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">' . DATE($fecha) . '</span>
                                <h5>EFECTIVO EN CAJA</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">$' . $total_efectivo . '</h1>
                                <div class="stat-percent font-bold text-info"></div>
                                <small>Total</small>
                            </div>
                        </div>
            </div>
             <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">' . DATE($fecha) . '</span>
                                <h5>VENTA TOTAL</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">$' . $total_venta . '</h1>
                                <div class="stat-percent font-bold text-info"></div>
                                <small>Total</small>
                            </div>
                        </div>
            </div>
        </div>';
