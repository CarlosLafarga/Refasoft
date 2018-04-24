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
                  <label>Fecha:</label>
                    <input class="form-control" type="date" onchange="cambio(this.value)" name="fecha" id="fecha"><br>
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
                                    <th>No Ticket</th>
                                    <th>Venta total</th>
                                    <th>Vendedor</th>
                                    <th>Tipo de pago</th>
                                    <th>fecha_venta</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody id="txtHint">


                                </tbody>

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

<?PHP include "../Section/js_devoluciones.php";?>


</html>
