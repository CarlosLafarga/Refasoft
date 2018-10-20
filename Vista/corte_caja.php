<?php
session_start();
date_default_timezone_set('America/Hermosillo');
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
               <div class="container" style="padding-right: 15px;padding-left: 0;margin-right: 0;margin-left: 0;">
                   <div class="row">
                   <div class="col-lg-3">
                   <label>Fecha:</label>
                   <div class="form-group" id="data_1">
                   <div class="input-group date">
                       <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                       <input type="text" onchange="corte(this);" name="fecha" id="fecha" value = "<?php echo date('m/d/Y'); ?>" class="form-control" >
                   </div>
                   </div>
                   </div>
                   </div><br>

                   <div id="txtHint">

                   </div>

                                                <div class="row m-t-sm">
                                <div class="col-lg-12">
                                <div class="panel blank-panel">
                                <div class="panel-heading">
                                    <div class="panel-options">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab-1" data-toggle="tab">Ventas efectivo y tarjeta</a></li>
                                            <li class=""><a href="#tab-2" data-toggle="tab">Ventas Credito</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="panel-body">

                                <div class="tab-content">
                                <div class="tab-pane active" id="tab-1">

                                 <div class="ibox">
                                 <div class="ibox-title">
                                 <span class="pull-right"></span>
                                 <h5>Ventas desglosadas</h5>
                                 </div>

                               <div class="ibox-content">
                               <div class="table-responsive">

                                <table  id="ventas" class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th>No Ticket</th>
                                    <th>Codigo</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Total</th>
                                    <th>Tipo pago</th>
                                    <th>Fecha Venta</th>
                                    <th width="15%">Acciones</th>
                                </tr>
                                </thead>

                                </table>


                                 </div>
                                 </div>
                                 </div>

                                </div>
                                <div class="tab-pane" id="tab-2">

                                 <div class="ibox">
                                 <div class="ibox-title">
                                 <span class="pull-right"></span>
                                 <h5>Ventas Credito</h5>
                                 </div>

                               <div class="ibox-content">
                               <div class="table-responsive">

                                <table  id="ventas_credito" class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th>No Ticket</th>
                                    <th>Codigo</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Total</th>
                                    <th>Tipo pago</th>
                                    <th>Fecha Venta</th>
                                    <th width="15%">Acciones</th>
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


              </div>
            </div>








          <?PHP include "../Section/footer.php";?>
      </div>
  </div>
</body>

<?PHP include "../Section/js_ventas.php";?>


</html>
