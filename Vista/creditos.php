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
                   <div class="col-lg-12">
                   <label>Cliente:</label>
                   <select id="clientes" class="form-control">

                   </select><br>
                   </div>


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
                   <button class="btn btn-info" id="imprimir" name="consultar">Imprimir</button>
                   </div>
                   </div><br>


                    <div class="ibox">
                            <div class="ibox-title">
                            <span class="pull-right"></span>
                            <h5>Ventas</h5>
                            </div>

                            <div class="ibox-content">


                               <div class="table-responsive">

                                <table  id="ventas" class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th >ID</th>
                                    <th>Cantidad</th>
                                    <th width="10px">Codigo</th>
                                    <th>Unidad</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Total</th>
                                    <th>Fecha Venta</th>
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

<?PHP include "../Section/js_creditos.php";?>


</html>
