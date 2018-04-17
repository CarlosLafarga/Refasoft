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
               <div class="container">
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
            </div>








          <?PHP include "../Section/footer.php";?>
      </div>
  </div>
</body>

<?PHP include "../Section/js_ventas.php";?>


</html>
