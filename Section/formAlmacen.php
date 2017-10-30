<center><h2>Almacen</h2></center>
<div class="col-md-3">
</div>
<div class="col-md-4">
<div class="ibox-content">
    <form method="POST"  action="../Controlador/calcular.php">
         
         	<div class="form-group">
            	<label>&nbsp;Codigo</label>
                <input type="text" id="codigo" name="codigo" placeholder="Codigo" required="llenar campo" class="form-control">
         	</div>
         	<div class="form-group">
                <label>&nbsp;Producto</label>
                <input type="text" id="producto" name="producto" placeholder="Producto" required="llenar campo" class="form-control">
            </div>
			<div class="form-group">
		 		<label>&nbsp;Unidad</label>
           		<select class="select2_demo_3 form-control" id="unidad" name="unidad" required="llenar campo">
                  <option value="">Seleccione Unidad</option>
                  <option value="Pieza">Pieza</option>
                  <option value="Metro">Metro</option>
                  <option value="Litro">Litro</option>
                  <option value="Juego">Juego</option>
           		</select>
         	</div>
     	
         	<div class="form-group">
		 		<label>&nbsp;Proveedor</label>
           		<select class="select2_demo_3 form-control" id="proveedor" name="proveedor" required="llenar campo">
                   <option value="">Seleccione Proveedor</option>
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
             	<input type="text" id="precio" name="ppv" placeholder="Precio Proveedor" required="llenar campo" class="form-control">
         		</div>
         	<div class="form-group">
            	<label>&nbsp;Cantidad</label>
             	<input type="text" id="cantidad" name="cantidad" placeholder="Cantidad" required="llenar campo" class="form-control">
         	</div>
         	
         	
         		<div class="form-group">
            	<label>&nbsp;Piso</label>
             	<input type="text" id="piso" name="piso" placeholder="Piso"  class="form-control">
         		</div>
         		<div class="form-group">
            	<label>&nbsp;Pasillo</label>
             	<input type="text" id="pasillo" name="pasillo" placeholder="Pasillo"  class="form-control">
         		</div>
         		<div class="form-group">
            	<label>&nbsp;Estante</label>
             	<input type="text" id="estante" name="estante" placeholder="Estante" class="form-control">
         		</div>
         		<div class="form-group">
            	<label>&nbsp;Peldaño</label>
             	<input type="text" id="peldaño" name="peldaño" placeholder="Peldaño"  class="form-control">
         		
				
         		
         	</div>
         	 <center> <div class="row">
            <div class="input-field col s12">
              <input type="submit" value="Visualizar" onclick="EventoAlert()" class="btn btn-primary" >
            </div>
          </div></center>
    </form>


 </div>
</div>