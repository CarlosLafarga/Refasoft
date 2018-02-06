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
               <div class="container">

                <div class="row">
                  <div class="col-md-6">
                      <div class="ibox">
                            <div class="ibox-title">
                            <span class="pull-right"></span>
                            <h5>Facturas Pendientes</h5>
                            </div>

                            <div class="ibox-content">
                               <div class="table-responsive">
                                <table  id="facturas_pen" class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th>No Factura</th>
                                    <th>Fecha Alta</th>
                                    <th>Total factura</th>
                                    <th>Proveedor</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>

                            </table>


                            </div>
                          </div>
                     </div>
                    </div>

                    <div class="col-md-6">
                      <div class="ibox">
                            <div class="ibox-title">
                            <span class="pull-right"></span>
                            <h5>Facturas por vencer</h5>
                            </div>

                            <div class="ibox-content">
                               <div class="table-responsive">
                                <table  id="facturas_por_ven" class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th>No Factura</th>
                                    <th>Fecha Alta</th>
                                    <th>Total factura</th>
                                    <th>Proveedor</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>

                            </table>


                            </div>
                          </div>
                     </div>
                    </div>


                  </div>

                  <div>
                    <div class="col-ms-12">
                      <div class="ibox">
                            <div class="ibox-title">
                            <span class="pull-right"></span>
                            <h5>Facturas Vencidas</h5>
                            </div>

                            <div class="ibox-content">
                               <div class="table-responsive">
                                <table  id="facturas_ven" class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th>No Factura</th>
                                    <th>Fecha Alta</th>
                                    <th>Total factura</th>
                                    <th>Proveedor</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>

                            </table>


                            </div>
                          </div>
                     </div>
                    </div>
                  </div>

               </div>
            </div>








          <?PHP include "../Section/footer.php";?>
      </div>
  </div>
</body>

<?PHP include "../Section/js_listar_fact.php";?>


</html>
