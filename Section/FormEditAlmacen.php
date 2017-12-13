               <div class="wrapper wrapper-content">
               <div class="container">
               <div class="row">
               <div class="col-md-12">

                     <div class="ibox">
                    <div class="ibox-title">
                        <span class="pull-right"></span>
                        <h5>Productos</h5>
                    </div>
                    <div class="ibox-content">
                     <form method="POST"  action="../Modelo/modificar.php" role="form">
                        <div class="col-sm-6">
                        <hr>
                        <center><h4>&nbsp;&nbsp;Producto</h4></center>
                        <hr> 
                           <div class="form-group">
                				<label>&nbsp;Codigo</label>
                				<input type="text" id="codigo" name="codigo" value="<?php echo $codigo; ?>" placeholder="Codigo" required="llenar campo" class="form-control">
            			   </div>
            			   <div class="form-group">
                				<label>&nbsp;Producto</label>
                				<input type="text" id="producto" name="Descripcion" placeholder="Producto" value="<?php echo $producto;?>" required="llenar campo" class="form-control">
            			   </div>
            			  <div class="form-group">
                        <label>&nbsp;unidad</label>
                        <select class="select2_demo_3 form-control" id="unidad" name="unidad" required="llenar campo">
                            <option value="<?php  echo $unidad; ?>"><?php  echo $unidad; ?></option>
                            <option value="Pieza">Pieza</option>
                            <option value="Metro">Metro</option>
                            <option value="Litro">Litro</option>
                            <option value="Juego">Juego</option>
                        </select>
                     </div>
                      <div class="form-group">
                        <label>&nbsp;Proveedor</label>
                        <select class="select2_demo_3 form-control" id="proveedor" name="Proveedor" required="llenar campo">
                            <option value="<?php  echo $proveedor; ?>"><?php  echo $proveedor; ?></option>
                            <option value="Pernor">Pernor</option>
                            <option value="Apymsa">Apymsa</option>
                            <option value="Serva">Serva</option>
                            <option value="Henlo">Henlo</option>
                            <option value="Dirco">Dirco</option>
                            <option value="Ciosa">Ciosa</option>
                        </select>
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
               					<input type="text" id="piso" name="Piso" placeholder="Piso" value="<?php  echo $piso; ?>" class="form-control">
                  			</div>
                  			<div class="form-group">
                				<label>&nbsp;Pasillo</label>
                				<input type="text" id="pasillo" name="Pasillo" placeholder="Pasillo" value="<?php echo $pasillo;?>"  class="form-control">
                  			</div>
                  			<div class="form-group">
                				<label>&nbsp;Estante</label>
                				<input type="text" id="estante" name="Estante" placeholder="Estante" value="<?php echo $estante; ?>" class="form-control">
                  			</div>
                  			<div class="form-group">
                			  <label>&nbsp;Peldaño</label>
                			  <input type="text" id="peldaño" name="Peldano" placeholder="Peldaño" value="<?php  echo $peldaño; ?>"  class="form-control">
                        </div>
                        <div class="form-group">
                        <label>&nbsp;Grupo</label>
                        <input type="text" id="Grupo" name="Grupo" placeholder="Grupo" value="<?php  echo $grupo; ?>"  class="form-control">
                        </div>
                    	
                        <div class="form-group">
                        <label>&nbsp;Factura</label>
                        <input type="text" readonly="factura" id="factura" name="factura" placeholder="Factura" value="<?php echo $factura; ?>"  class="form-control">
                        </div>
                        </div>     
                   
                        <div class="row">
         	   		        <div class="col-md-12">
                        <center>
                        <button type='submit' class='editar btn-sm btn-primary'><i class='fa fa-edit'></i>&nbsp;Editar</button>
                        </center>
              				  </div>  
              			    </div>

    	         	       </form> 
                       </div>
                      </div>

             </div>
             </div>
             </div>
             </div>
    	
     

