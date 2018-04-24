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

              <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInUp">
                    <div class="ibox">
                        <div class="ibox-content">



                            <div class="row m-t-sm">
                                <div class="col-lg-12">
                                <div class="panel blank-panel">
                                <div class="panel-heading">
                                    <div class="panel-options">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab-1" data-toggle="tab">Prestamos</a></li>
                                            <li class=""><a href="#tab-2" data-toggle="tab">Pagos</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="panel-body">

                                <div class="tab-content">
                                <div class="tab-pane active" id="tab-1">
                                <!--PRESTAMO-->
                                <form id="prestamo">
                                <label>Nombre de la persona:</label>
                                <input type="text" id="nombre" name="nombre" class="form-control"><br>
                                <label>Monto:</label>
                                <input type="number" id="monto" name="monto" min="0" value="0" class="form-control"><br>
                                <label>Fecha:</label>
                                <input type="date" id="fecha" name="fecha"  class="form-control" value="<?php echo date("Y-m-d"); ?>"><br>
                                <label>Observaci&oacute;n:</label>
                                <textarea id="obs" class="form-control"></textarea><br>
                                </form>
                                <button id="aceptar1" class="btn btn-primary">Aceptar</button>
                                <button id="cancelar1" class="btn btn-danger">Cancelar</button>

                                </div>
                                <!---->
                                <div class="tab-pane" id="tab-2">



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
        </div>

            <?PHP include "../Section/footer.php";?>
         </div>
     </div>
</body>
<?PHP include "../Section/js_pago_abono.php";?>



</html>
