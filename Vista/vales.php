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

                                 <div class="ibox-content">
                                 <div class="table-responsive">
                                   <table  id="faltantes" class="table table-striped table-bordered table-hover dataTables-example">
                                   <thead>
                                   <tr>
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
