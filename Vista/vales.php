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
                                            <li class="active"><a href="#tab-1" data-toggle="tab">Vale chalio</a></li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="panel-body">

                                <div class="tab-content">
                                <div class="tab-pane active" id="tab-1">
                                  <div class="ibox-title">
                                     <span class="pull-right"></span>
                                     <h5>Productos Faltantes</h5>
                                  </div>



                                  <!-- LO DE LA FECHA -->
                                    <div class="ibox-content">
                                  <div class="row">
                                  <div class="col-lg-3">
                                 <label>Del:</label>
                                 <div class="form-group" id="data_1">
                                 <div class="input-group date">
                                     <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                     <input type="text"  name="de" id="de" value = "<?php echo date('m/d/Y'); ?>" class="form-control" >
                                 </div>
                                 </div>
                                 </div>
                                 

                                 <div class="col-lg-12">
                                 <button class="btn btn-primary" id="consultar_vale" name="consultar_vale">Consultar</button>
                               <!--   <button class="btn btn-info" id="imprimir" name="consultar">Imprimir</button> -->
                                 </div>
                                   </div>
                                   </div>
                                 <!-- HATA AQUI LO DE LA FECHA -->





                                 <div class="ibox-content">
                                 <div class="table-responsive">
                                   <table  id="vale_chalio" class="table table-striped table-bordered table-hover dataTables-example">
                                   <thead>
                                   <tr>
                                       <th>ID</th>
                                       <th>Cantidad</th>
                                       <th>Codigo</th>
                                       <th>Unidad</th>
                                       <th>Descripcion</th>
                                       <th>Precio</th>
                                       <th>Total</th>
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
