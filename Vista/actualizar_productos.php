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
                                <h5>Lista de productos</h5>
                            </div>
                            <div class="ibox-content">

                                <div class="table-responsive">
                                <table  id="productos" class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Descripcion</th>
                                    <th>Cantidad</th>
                                    <th>Precio Proveedor</th>
                                    <th>Proveedor</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>

                            </table>


                            </div>
                          </div>
                      </div>
                    </div>

                    <!-- actualizar -->
                    <div class="col-md-6">
                         <div class="ibox">
                            <div class="ibox-title">
                                <span class="pull-right"></span>
                                <h5>Por actualizar</h5>
                            </div>
                            <div class="ibox-content">
                              <label>No factura:</label>
                              <input type="text" class="form-control" name="factura" id="factura">
                              <br>
                              <button class="btn-sm btn-primary" name="guardar" id="guardar">Guardar</button>
                              <button class="btn-sm btn-danger" name="guardar" id="guardar">Cancelar</button>
                              <br><br>

                                <div class="table-responsive">
                                <table  id="actualizar" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Descripcion</th>
                                    <th>Cantidad</th>
                                    <th>Precio Proveedor</th>
                                    <th>Precio Taller</th>
                                    <th>Precio Publico</th>
                                    <th>Proveedor</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody id="tablita">
                              </tbody>

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

      <?PHP include "../Section/js_act_prod.php";?>

</html>
