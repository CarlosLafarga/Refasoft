<?php 
session_start();

if(!isset($_SESSION["nombre"])){ 
   header("location:../Vista/login.php"); 
   exit();
   
}
?>
<!DOCTYPE html>
<html>
<head>
	 <title>. : RefaSoft : .</title>
	 <?PHP include("../Section/css.php");?>

</head>
<body class="top-navigation">
  <div id="wrapper">
     <div id="page-wrapper" class="gray-bg">
          <?PHP include("../Section/menu.php");?>

          
            <div class="wrapper wrapper-content">
               <div class="container">
                   
                      <div class="ibox">
                            <div class="ibox-title">
                            <span class="pull-right"></span>
                            <h5>Datos Compras</h5>
                            </div>
                        
                            <div class="ibox-content">
                               <div class="table-responsive">
                                <table  id="compras" class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Factura</th>
                                    <th>Codigo</th>
                                    <th>Cantidad</th>
                                    <th>Fecha</th>
                                    <th>Proveedor</th>
                                    <th>Precio Proveedor</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                 
                            </table>
                            

                            </div>
                          </div>
                     </div>

               </div>
            </div>



     
   



          <?PHP include("../Section/footer.php"); ?>
      </div>
  </div>
</body>

<?PHP include("../Section/js.php");?>


</html>
