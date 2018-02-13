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
                    <div class="col-md-4">
                      <label>Tipo de factura.</label>
                      <select onchange="filtrar(this);" name="tipo_fact" id="tipo_fact" class="form-control">
                        <option value="1">En tiempo</option>
                        <option value="2">Por vencer</option>
                        <option value="3">Vencidas</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <label>Proveedor</label>
                      <select id="proveedor" class="form-control" onchange="filtrar(this);">

                      </select>
                    </div>
                </div><br>

                  <div class="row">
                  <div class="col-md-12">
                      <div class="ibox">
                            <div class="ibox-title">
                            <span class="pull-right"></span>
                            <h5>Facturas </h5>
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
                  </div>



                </div>



               </div>









          <?PHP include "../Section/footer.php";?>
      </div>
  </div>
</body>

<?PHP include "../Section/js_listar_fact.php";?>


</html>
