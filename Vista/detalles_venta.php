<?php
session_start();
date_default_timezone_set('America/Hermosillo');
$no_tiket = $_GET['no_tiket'];
$codigo   = $_GET['codigo'];
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
                <input type="hidden" name="no_tiket" id="no_tiket" value="<?PHP echo $no_tiket; ?>">
                <input type="hidden" name="codigo" id="codigo" value="<?PHP echo $codigo; ?>">

                <div class="ibox">
                            <div class="ibox-title">
                            <span class="pull-right"></span>
                            <h5>Detalles de la venta (<?PHP echo $no_tiket; ?>)</h5>
                            </div>

                            <div class="ibox-content">


                               <div class="table-responsive">

                                <table  id="detalles" class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th>No Ticket</th>
                                    <th>Codigo</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Cantidad a devolucion</th>
                                    <th>Precio</th>
                                    <th>Total</th>
                                    <th>Fecha Venta</th>
                                    <th>Accion</th>
                                </tr>
                                </thead>

                            </table>

                            <button class="btn btn-danger" onclick="history.back()" name="atras" id="atras" ><i class="fa fa-arrow-left"></i>&nbsp;Atras</button>

                            </div>
                          </div>
                     </div>



              </div>
            </div>









          <?PHP include "../Section/footer.php";?>
      </div>
  </div>
</body>
<?PHP include "../Section/js_detalles.php";?>




</html>
