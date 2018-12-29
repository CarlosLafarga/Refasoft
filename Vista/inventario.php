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
               <div class="container" style=" width: 1270px; padding-right: 0;padding-left: 0;margin-right: 0;margin-left: 0;">
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
                                <table  id="inventario" class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>COD</th>
                                    <th>PROD</th>
                                    <th>CANT</th>
                                    <th>Inv actual</th>
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
                            <h5>Inventario</h5>
                        </div>
                        <div class="ibox-content">
                          <div class="row">
                            <div class="col-md-12">



                           

                          



                            
                                <BR>
                                <div class="col-md-12">

                                <a href="#" id="save" class="btn btn-primary btn-sm"><i class='fa fa-arrow-circle-right'></i>&nbsp;Actualizar</a>
                                <a href="#" id="cancelar" class="btn btn-danger btn-sm"><i class="fa fa-times"></i>&nbsp;Cancelar</a>
                                <br><br>
                                </div>

                                </div>
                            </div>
                        </div><!--fin del div content-->
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
                                  
                                    <th width="">Inventario Actual</th>
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

      <?PHP include "../Section/js_inventario.php";?>

</html>
