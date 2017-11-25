

<BR><BR><div class="col-lg-8">
      <div class="ibox float-e-margins">
          <div class="ibox-title">
                <h5>EDITAR COMPRAS</h5>
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
               <div  class="row">
                   <div class="col-sd-9">
                    
                     <form method="POST"  action="../Modelo/modificar.php" role="form">
                   
                        
                        <center><h4>&nbsp;&nbsp;Datos de Compras</h4></center>
                        <hr>
                    <div class="row">
                    
                    <div class="col-md-4">
                        <div class="form-group">
                        <label>&nbsp;Factura</label>
                        <input type="text" id="factura" name="factura" placeholder="Factura" value="<?php echo $factura;?>"  class="form-control">
                     </div> 
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label>&nbsp;Codigo</label>
                        <input type="text" id="codigo" name="codigo" value="<?php echo $codigo; ?>" placeholder="Codigo"  class="form-control">
                     </div>
                    </div>
                    <div class="col-md-4">
                     <div class="form-group">
                        <label>&nbsp;Cantidad</label>
                        <input type="text" id="cantidad" name="cantidad" placeholder="Cantidad" value="<?php echo $cantidad; ?>"  class="form-control">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label>&nbsp;Fecha</label>
                        <input type="text" id="fecha" name="fecha" placeholder="Fecha" value="<?php echo $fechafac; ?>"  class="form-control">
                      </div>
                        </div>
                 
                    <div class="col-md-4">
                     <div class="form-group">
                        <label>&nbsp;Proveedor</label>
                        <input type="text" id="proveedor" name="proveedor" placeholder="Proveedor" value="<?php  echo $proveedor; ?>"  class="form-control">
                     </div>
                    </div>
                    <div class="col-md-4">
                       <div class="form-group">
                        <label>&nbsp;Precio Proveedor</label>
                        <input type="text" id="precio" name="ppv" placeholder="Precio Proveedor" value="<?php  echo $ppv; ?>"  class="form-control">
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


