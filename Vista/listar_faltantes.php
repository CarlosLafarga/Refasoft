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


                      <div class="ibox">


                          <div class="panel blank-panel">
                                <div class="panel-heading">
                                    <div class="panel-options">
                                        <ul class="nav nav-tabs">
                                            <li class=""><a href="#tab-1" data-toggle="tab">Faltantes De la tabla de productos</a></li>
                                            <li class=""><a href="#tab-2" data-toggle="tab">Faltantes de martes a sabado</a></li>
                                            <li class=""><a href="#tab-3" data-toggle="tab">Faltantes si es lunes</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="panel-body">

                                <div class="tab-content">
                                
                                  <!--Panel numero 1 -->
                                 <div class="tab-pane active" id="tab-1">
                                  <div class="ibox-title">
                                     <span class="pull-right"></span>
                                     <h5>Productos Faltantes</h5>
                                  </div>

                                 <div class="ibox-content">
                                 <div class="table-responsive">
                                   <table  id="faltantes2" class="table table-striped table-bordered table-hover dataTables-example">
                                   <thead>
                                   <tr>
                                       <th>Codigo</th>
                                       <th>Descripcion</th>
                                       <th>Unidad</th>
                                       <th>Cantidad a Comprar</th>
                                       <th>Proveedor</th>
                                       <th>Grupo</th>
                                       <th>Ultima Factura</th>

                                   </tr>
                                  </thead>

                                  </table>


                                 </div>
                                 </div>
                                 </div>
                                 <!--Panel numero 2-->
                                 <div class="tab-pane" id="tab-2">
                                  <div class="ibox-title">
                                     <span class="pull-right"></span>
                                     <h5>Productos Faltantes</h5>
                                  </div>

                                 <div class="ibox-content">
                                 <div class="table-responsive">
                                   <table  id="faltantes3" class="table table-striped table-bordered table-hover dataTables-example">
                                   <thead>
                                   <tr>
                                       <th>Codigo</th>
                                       <th>Unidad</th>
                                       <th>Descripcion</th>
                                       <th>Cantidad</th>
                                       <th>Inventario</th>
                                       <th>Cliente Credito</th>
                                       <th>Fecha Venta</th>
                                       <th>Proveedor</th>
                                       <th>Tipo Pago</th>

                                   </tr>
                                  </thead>

                                  </table>


                                 </div>
                                 </div>
                                 </div>

                                 <!--Panel numero 3-->
                                  <div class="tab-pane" id="tab-3">
                                  <div class="ibox-title">
                                     <span class="pull-right"></span>
                                     <h5>Productos Faltantes</h5>
                                  </div>

                                 <div class="ibox-content">
                                 <div class="table-responsive">
                                   <table  id="faltantes4" class="table table-striped table-bordered table-hover dataTables-example">
                                   <thead>
                                   <tr>
                                       
                                       <th>Codigo</th>
                                       <th>Unidad</th>
                                       <th>Descripcion</th>
                                       <th>Cantidad</th>
                                       <th>Inventario</th>
                                       <th>Cliente Credito</th>
                                       <th>Fecha Venta</th>
                                       <th>Proveedor</th>
                                       <th>Tipo Pago</th>

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

               </div>
            </div>








          <?PHP include "../Section/footer.php";?>
      </div>
  </div>
</body>

<?PHP include "../Section/js_faltantes.php";?>


</html>
