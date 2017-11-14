

<BR><BR><div class="col-lg-12">
      <div class="ibox float-e-margins">
          <div class="ibox-title">
                <h5>EDITAR PRODUCTO</h5>
                <div class="ibox-tools">
                     <a class="collapse-link">
                         <i class="fa fa-chevron-up"></i>
                    </a>
                       <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                          <i class="fa fa-wrench"></i>
                      </a>
                      <ul class="dropdown-menu dropdown-user">
                          <li><a href="#">Config option 1</a>
                          </li>
                          <li><a href="#">Config option 2</a>
                          </li>
                      </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                     </a>
                </div>
            </div>
            <div class="ibox-content">
               <div class="row">
                   <div class="col-sm-6 b-r">
                    
                     <form method="POST"  action="../Modelo/modificar.php" role="form">
                   
                        <hr>
                        <center><h4>&nbsp;&nbsp;Producto</h4></center>
                        <hr> 
                           <div class="form-group">
                				<label>&nbsp;Codigo</label>
                				<input type="text" id="codigo" name="codigo" value="<?php echo $codigo; ?>" placeholder="Codigo" required="llenar campo" class="form-control">
            			   </div>
            			   <div class="form-group">
                				<label>&nbsp;Producto</label>
                				<input type="text" id="producto" name="producto" placeholder="Producto" value="<?php echo $producto;?>" required="llenar campo" class="form-control">
            			   </div>
            			  <div class="form-group">
                        <label>&nbsp;unidad</label>
                        <input type="text" id="unidad" name="unidad" placeholder="Unidad" value="<?php  echo $unidad; ?>" required="llenar campo" class="form-control">
                     </div>
        
            			   <div class="form-group">
                        <label>&nbsp;Proveedor</label>
                        <input type="text" id="proveedor" name="proveedor" placeholder="Proveedor" value="<?php  echo $proveedor; ?>" required="llenar campo" class="form-control">
                     </div>
                			<div class="form-group">
                				<label>&nbsp;Precio Proveedor</label>
                				<input type="text" id="precio" name="ppv" placeholder="Precio Proveedor" value="<?php  echo $ppv; ?>" required="llenar campo" class="form-control">
                				</div>
                			<div class="form-group">
                				<label>&nbsp;Cantidad</label>
                				<input type="text" id="cantidad" name="cantidad" placeholder="Cantidad" value="<?php echo $cantidad; ?>" required="llenar campo" class="form-control">
                		 	</div>
                 		  </div>
                 		
                        <div class="col-sm-6">
                        <hr>
                        <center><h4>&nbsp;&nbsp;Ubicacion</h4></center>
                        <hr>  
                        <div class="form-group">
                				<label>&nbsp;Piso</label>
               					<input type="text" id="piso" name="piso" placeholder="Piso" value="<?php  echo $piso; ?>" class="form-control">
                  			</div>
                  			<div class="form-group">
                				<label>&nbsp;Pasillo</label>
                				<input type="text" id="pasillo" name="pasillo" placeholder="Pasillo" value="<?php echo $pasillo;?>"  class="form-control">
                  			</div>
                  			<div class="form-group">
                				<label>&nbsp;Estante</label>
                				<input type="text" id="estante" name="estante" placeholder="Estante" value="<?php echo $estante; ?>" class="form-control">
                  			</div>
                  			<div class="form-group">
                			  <label>&nbsp;Peldaño</label>
                			  <input type="text" id="peldaño" name="peldaño" placeholder="Peldaño" value="<?php  echo $peldaño; ?>"  class="form-control">
                            </div>
                    	  <hr>
                    	  <center><h4>&nbsp;&nbsp;Datos de Factura</h4></center>
                        <hr>
                        <div class="form-inline">
                        <div class="form-group">
                				<label>&nbsp;Factura</label>
               					<input type="text" id="factura" name="factura" placeholder="Factura"  value="<?php  echo $factura; ?>"  class="form-control">
                  			</div>
                  			<div class="form-group">
                				<label>&nbsp;Fecha</label> 
                				<input type="text" id="fechafac" name="fechafac"  placeholder="Fecha Factura"  value="<?php  echo $fechafac; ?>"  class="form-control">
                  			</div>
                  		</div>
                         </div>    	
                    </div>
                    <hr>
         	   		  <center>
              		  <div class="row">
              			   <div class="input-field col s12">
              				    <input type="submit" value="Editar"  class="btn btn-primary" >
              			   </div>
              		  </div>
              		</center>
    		</form> 
    	</div>
     </div>
</div>

