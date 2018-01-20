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
                    <div class="row">
                    <div class="col-md-7">

                      
                      </div>
                <!--TOTAL CAJA-->
                <div class="col-md-12">
                     <!--Inicio panel de total acumulado-->
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Datos Factura</h5>
                        </div>
                        <div class="ibox-content">
                          <form id="formFactura">
                            <div class="col-md-12">
                            <span><h1>No.Factura</h1></span>
                            <input type="text" style = "font-size: 30px;"  id="Factura" name="Factura" 
                            value="" class="form-control"><br>
                            </div>

                            <div class="col-md-4">
                            <label>Fecha:</label>
                            <div class="form-group" id="data_1">
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="fecha" id="fecha" class="form-control" >
                                </div>
                            </div>
                            <br>
                            </div>

                            <div class="col-md-4">
                            <label>Total Factura</label>
                            <input type="number" class="form-control" name="total" id="total">
                            <br>
                            </div>
                            
                            <div class="col-md-4" >
                            <label>Proveedor</label>
                            <input type="text" placeholder="PROVEEDOR"  name="proveedor" id="proveedor" class="typeahead_2 form-control" />
                            <br>
                            </div>
                            <hr/>
                            <span class="text-muted small">
                            </span>
                            <div class="col-md-12">
                              
                              <div class="btn-group">
                              <a href="#" id="save" class="btn btn-primary btn-sm"><i class="fa fa-save"></i>&nbsp;Guardar</a>
                              <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i>&nbsp;Cancelar</a>
                              </div>

                            </form>
                            </div><br><br><br><br><br><br><br><br><br><br><br><br>
                            </div>
                    </div>
                 

                  </div>


                </div>
                </div>
                </div>



     
   



          <?PHP include("../Section/footer.php"); ?>
      </div>
      </div>
      </body>

      <?PHP include("../Section/js_factura.php");?>

</html>
