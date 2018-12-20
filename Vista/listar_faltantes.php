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
                                            <li class=""><a href="#tab-5" data-toggle="tab">FALTANTES x fecha</a></li>
                                            <li class=""><a href="#tab-2" data-toggle="tab">FALTANTES de martes a sabado</a></li>
                                            <li class=""><a href="#tab-3" data-toggle="tab">FALTANTES  lunes</a></li>
                                            <li class=""><a href="#tab-4" data-toggle="tab">LISTA productos Negativos</a></li>
                                           
                                        </ul>
                                    </div>
                                </div>

                                <div class="panel-body">

                                <div class="tab-content">


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
                                       <th>Cliente Credito</th>
                                       <th>Fecha Venta</th>
                                       <th>Proveedor</th>
                                        <th>Inventario</th>

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
                                     <h5>Productos Faltantes LUNES</h5>
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
                                       <th>Cliente Credito</th>
                                       <th>Fecha Venta</th>
                                       <th>Proveedor</th>
                                       <th>Inventario</th>
                                   </tr>
                                  </thead>

                                  </table>


                                 </div>
                                 </div>
                                 </div>

   <!--Panel numero 4 -->
                                 <div class="tab-pane" id="tab-4">
                                  <div class="ibox-title">
                                     <span class="pull-right"></span>
                                     <h5>Lista de Productos Negativos</h5>
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



                                 <!--Panel numero 5-->
                                  <div class="tab-pane active" id="tab-5">
                                  <div class="ibox-title">
                                     <span class="pull-right"></span>
                                     <h5>Productos Faltantes X DIA</h5>
                                  </div>

                                  <!-- LO DE LA FECHA -->
                                  <div class="row">
                                  <div class="col-lg-3">
                                 <label>De:</label>
                                 <div class="form-group" id="data_1">
                                 <div class="input-group date">
                                     <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                     <input type="text"  name="de" id="de" value = "<?php echo date('m/d/Y'); ?>" class="form-control" >
                                 </div>
                                 </div>
                                 </div>
                                 <div class="col-lg-3">
                                 <label>A:</label>
                                 <div class="form-group" id="data_1">
                                 <div class="input-group date">
                                     <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                     <input type="text"  name="a" id="a" value = "<?php echo date('m/d/Y'); ?>" class="form-control" >
                                 </div>
                                 </div>
                                 </div>

                                 <div class="col-lg-12">
                                 <button class="btn btn-primary" id="consultar" name="consultar">Consultar</button>
                               <!--   <button class="btn btn-info" id="imprimir" name="consultar">Imprimir</button> -->
                                 </div>
                                   </div>
                                 <!-- HATA AQUI LO DE LA FECHA -->

                                 <div class="ibox-content">
                                 <div class="table-responsive">
                                   <table  id="faltantes5" class="table table-striped table-bordered table-hover dataTables-example">
                                   <thead>
                                   <tr>

                                       <th>Codigo</th>
                                       <th>Unidad</th>
                                       <th>Descripcion</th>
                                       <th>Cantidad</th>
                                       <th>Cliente Credito</th>
                                       <th>Fecha Venta</th>
                                       <th>Proveedor</th>
                                       <th>Inventario</th>
                                   </tr>
                                  </thead>

                                  </table>


                                 </div>
                                 </div>
                                 </div>
                                 <!-- hasta aqui -->


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
