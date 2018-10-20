<?php
session_start();

if (!isset($_SESSION["nombre"])) {
    header("location:../Vista/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>. : RefaSoft : .</title>
   <?PHP include "../Section/css.php";?>

</head>
<body class="top-navigation">
  <div id="wrapper">
     <div id="page-wrapper" class="gray-bg">
          <?PHP include "../Section/menu.php";?>


            <div class="wrapper wrapper-content">
               <div class="container" style=" width: 1370px; padding-right: 0;padding-left: 0;margin-right: 0;margin-left: 0;">
                    <div class="row">
                    <div class="col-md-6">

                      <!--TABLA DONDE APARECEN LOS PRODUCTOS-->
                      <div class="ibox">
                            <div class="ibox-title">
                                <span class="pull-right"></span>
                                <h5>Productos</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="table-responsive">
                                <table  id="productos" class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>COD</th>
                                    <th>PROD</th>
                                    <th>CANT</th>
                                    <th>PT</th>
                                    <th>PB</th>
                                    <th>PROV</th>
                                    <th>Acc</th>
                                </tr>
                                </thead>

                            </table>


                            </div>
                            </div>
                      </div>
                      <!--TABLA DONDE APARECEN LOS PRODUCTOS-->
                      </div>
                <!--TOTAL CAJA-->
                <div class="col-md-6">
                     <!--Inicio panel de total acumulado-->
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Total Compra</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="col-md-12">
                            <span><h1>Total</h1></span>
                            <input type="text" style = "font-size: 30px; text-align:right" readonly id="total" name="total"
                            value="0" class="form-control"><br>
                            </div>

                            <div class="col-md-6">
                            <label>Tipo de pago</label>
                            <select name="pago" id="pago" class="form-control" onChange="mostrar(this);">
                            <option value="efectivo">Efectivo</option>
                            <option value="tarjeta">Pago con Tarjeta</option>
                            <option value="credito">Credito</option>
                            </select>
                            <br>
                            </div>

                            <div class="col-md-6">
                            <label>Tipo Precio</label>
                            <select name="precio" id="tipo_cliente" class="form-control">
                            <option value="precio_taller">Precio Taller</option>
                            <option value="precio_publico">Precio Publico</option>
                            </select>
                            <br>
                            </div>
                            <div class="col-md-6">
                            <label>Pago con </label>
                            <input type="number" name="pago_con" class="form-control" id="pagocon" >
                            <br>
                            </div>
                            <div class="col-md-6" style="display: none;" id="clientediv">
                            <label>Cliente</label>
                            <select id="clientes" class="form-control" ></select>
                            <br>
                            </div>
                            <hr/>
                            <span class="text-muted small">
                            </span>
                            <div class="col-md-12">

                                <div class="btn-group">
                                <a href="#" id="save" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i>&nbsp;Pagar</a>
                                <a href="#" id="cancelar" class="btn btn-danger btn-sm"><i class="fa fa-times"></i>&nbsp;Cancelar</a>

                                </div>
                            </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            </div>
                    </div>
                  <!--fin de inputs con precio-->

                  <!--Inicio Tabla productos en venta.-->
                   <div class="ibox">
                            <div class="ibox-title">
                                   <span class="pull-right">(<strong id="num_prod" value="0" >0</strong>) Articulos</span>
                                   <h5>Productos en Venta</h5>
                            </div>

                              <div class="ibox-content">
                              <div class="table-responsive">
                              <table id="ventas" class="table table-bordered">
                              <thead>
                              <tr>
                                    <th width="">prod</th>
                                    <th width="">uni</th>
                                    <th width="">cant</th>
                                    <th width="">precio</th>
                                    <th width="">Total</th>
                                    <th width="">Acc</th>
                              </tr>
                              </thead>
                              <tbody id="tablita">
                              </tbody>
                              </table>

                              </div>
                              </div>
                  </div>
                  <!--fin de tabla productos en venta-->


                  </div>


                </div>
                </div>
                </div>








          <?PHP include "../Section/footer.php";?>
      </div>
      </div>
      </body>

      <?PHP include "../Section/js_caja.php";?>

</html>
