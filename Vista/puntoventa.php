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

                      <!--TABLA DONDE APARECEN LOS PRODUCTOS-->
                      <div class="ibox">
                            <div class="ibox-title">
                                <span class="pull-right"></span>
                                <h5>Productos</h5>
                            </div>
                            <div class="ibox-content">
                               <!-- <form name="" >
                                 <div class="input-group">
                                  <input type="text" id="producto" name="producto" placeholder="" maxlength="30" autocomplete="off" onKeyUp="buscar();" class="form-control">
                                  <select id="producto" data-placeholder="Choose a Country..." class="chosen-select"  tabindex="2">
                                    <option>Seleccionar Producto</option>
                                  </select>
                                   <span class="input-group-btn">
                                    <button type="button" name="agregar" id="agregar" class="btn btn-primary">Agregar</button>
                                    </span>
                                  </div>
                                </form>

                                <div id="resultadoBusqueda">
                                  
                                </div>-->
                                <div class="table-responsive">
                                <table  id="productos" class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Codigo</th>
                                    <th>Descripcion</th>
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

                      <!--TABLA DONDE APARECEN LOS PRODUCTOS-->
                      

                </div>
                <!--TOTAL CAJA-->
                <div class="col-md-5">
                  

                     <!--Inicio panel de total acumulado-->
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Total Compra</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="col-md-12">
                            <span><h1>Total</h1></span>
                            <input type="text" style = "font-size: 30px; align-content: left; background-color: #050404; color:#6AE70F; text-align:right" readonly="" id="total" name="total"  value="0" class="form-control"><br>
                            </div>
                            <div class="col-md-4">
                            <label>Subtotal</label>
                            <input type="text" readonly="" id="subtotal" name="subtotal"  value="0"class="form-control"><br>
                            </div>
                            <div class="col-md-4">
                            <label>Descuentos</label>
                            <input type="text" readonly="" id="descuento" name="descuentos"  value="0"class="form-control"><br>
                            </div>
                            <div class="col-md-4">
                            <label>Impuestos</label>
                            <input type="text" readonly="" id="impuesto" name="impuestos" value="0" class="form-control"><br>
                            </div>
                            <hr/>
                            <span class="text-muted small">
                                
                            </span>

                            <div class="col-md-12">
                                <div class="btn-group">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> Pagar</a>
                                <a href="#" class="btn btn-white btn-sm"> Cancelar</a>
                                </div>
                            </div><br><br><br><br><br><br><br><br><br>
                        </div>
                    </div>
                  <!--fin de inputs con precio-->

                  <!--Inicio Tabla productos en venta.-->
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
                     <!--fin de tabla productos en venta-->


                  </div>


                </div>
               </div>
            </div>



     
   



          <?PHP include("../Section/footer.php"); ?>
      </div>
  </div>
</body>

<?PHP include("../Section/jscaja.php");?>

</html>
