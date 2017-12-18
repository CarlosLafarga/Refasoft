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
                    <div class="col-md-8">

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
                                    <th>Unidad</th>
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
                <div class="col-md-4">
                   <div class="ibox">
                            <div class="ibox-title">
                            <span class="pull-right">(<strong>5</strong>) items</span>
                            <h5>Productos en Venta</h5>
                            </div>
                        
                            <div class="ibox-content">
                              <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody id="tablita">
                                
                                </tbody>
                            </table>
                            

                            </div>
                     </div>
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Total Compra</h5>
                        </div>
                        <div class="ibox-content">
                            <span><h1>
                                Total
                            </h1></span>
                            <input type="text" readonly="" name="total" class="form-control"><br>
                            <label>Subtotal</label>
                            <input type="text" readonly="" name="subtotal" class="form-control"><br>
                            <label>Descuentos</label>
                            <input type="text" readonly="" name="descuentos" class="form-control"><br>
                            <label>Impuestos</label>
                            <input type="text" readonly="" name="impuestos" class="form-control">
                            <hr/>
                            <span class="text-muted small">
                                
                            </span>
                            <div class="m-t-sm">
                                <div class="btn-group">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> Pagar</a>
                                <a href="#" class="btn btn-white btn-sm"> Cancelar</a>
                                </div>
                            </div>
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

<?PHP include("../Section/jscaja.php");?>

</html>
