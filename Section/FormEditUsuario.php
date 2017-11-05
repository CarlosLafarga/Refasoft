
<BR><BR><div class="col-md-12">
      <div class="ibox float-e-margins">
          <div class="ibox-title">
                <h5>EDITAR USUARIO</h5>
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
                   <div class="col-md-6 b-r">
                    <!-- FORM PARA EDITAR A LOS USUARIOS-->
                      <form method="POST"   role="form">
                      <div class="input-group">
                          <input type="text" required="llenar campo" placeholder="BUSCAR USUARIO" class="form-control">
                            <span class="input-group-btn">
                              <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </span>
                      </div>

            			   <div class="form-group">
                				<label for="contraseña">&nbsp;Contraseña</label>
                        <input type="password" name="contrasena" required="llenar campo" class="form-control">
            			   </div>
            			   <div class="form-group">
                				 <label for="">&nbsp;Tipo Usuario</label>
                         <select name="tipo" required="llenar campo" class="form-control">
                              <option value="">Tipo de usuario</option>
                              <option value="1">Administrador</option>
                              <option value="2">Usuario</option>
                        </select>
            			   </div>
                     <div class="form-group">
                            <label for="nombre">&nbsp;Nombre</label>
                            <input type="text" id="nombre" name="nombre" maxlength="30" class="form-control">
                     </div>
            			
                			<div class="form-group">
                				<label for="apellido">&nbsp;Apellidos</label>
                        <input type="text" name="apellido" maxlength="30" class="form-control">
                				</div>
                      </div>
                      
                      <div class="col-md-6">
                    
                      <div class="form-group">
                        <label for="domicilio">&nbsp;Domicilio</label>
                        <input type="text" name="domicilio" required="llenar campo" class="form-control">
                      </div>
                      <div class="form-group">
                				<label for="telefono">&nbsp;Telefono</label>
                        <input type="telephone" name="telefono"  required="llenar campo" class="form-control">
                  		</div>
                  		<div class="form-group">
                				<label for="email">&nbsp;Correo</label>
                        <input id="correo" type="email" name="correo" required="llenar campo" class="form-control">
                  		</div>
                  		<div class="form-group">
                				<label for="fecha">&nbsp;Fecha</label>
                        <input type="date"  name="fecha" class="form-control">
                  		</div>
                  	</div>
                  </div>
                     <hr>
                    <center>
                    <div class="row">
                       <div class="input-field col s12">
                          <input TYPE="submit" NAME=OK VALUE="EDITAR" class="btn btn-primary">
                       </div>
                    </div>
                  </center>
    		</form> 
    	</div>
    </div>
</div>
