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

                      <!--TABLA DONDE APARECEN LOS PRODUCTOS
                      <div class="ibox">
                            <div class="ibox-title">
                                <span class="pull-right"></span>
                                <h5>Productos</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="table-responsive">
                                <table  id="productos" class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Codigo</th>
                                    <th>Descripcion</th>
                                    <th>Cantidad</th>
                                    <th>Precio Taller</th>
                                    <th>Precio Publico</th>
                                    <th>Proveedor</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                 
                            </table>
                            

                            </div>
                            </div>
                      </div>
                      TABLA DONDE APARECEN LOS PRODUCTOS-->
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
                  <!--fin de inputs con precio-->

                  <!--Inicio Tabla productos en venta
                   <div class="ibox">
                            <div class="ibox-title">
                                   <span class="pull-right">(<strong id="num_prod" value="0" >0</strong>) Articulos</span>
                                   <h5>Productos en Venta</h5>
                            </div>
                        
                              <div class="ibox-content">
                              <div class="table-responsive">
                              <table id="ventas" class="table table-bordered">
                              <thead>
                              <tr>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Total</th>
                                    <th>Eliminar</th>
                              </tr>
                              </thead>
                              <tbody id="tablita">
                              </tbody>
                              </table>
                            
                              </div>
                              </div>
                  </div>
                  fin de tabla productos en venta-->


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
