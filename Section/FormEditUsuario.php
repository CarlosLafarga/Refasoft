
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
                      <form method="POST"  action=""  role="form">
                        <?php include("../Section/buscarUser.php"); ?>
                     
                         <div class="form-group">
                        <label for="usuario">&nbsp;Usuario</label>
                        <input type="text" name="text" value="<?php if(isset($_POST['buscar'])){ echo $usuario;} ?>" required="llenar campo" class="form-control">
                     </div>

            			   <div class="form-group">
                				<label for="contraseña">&nbsp;Contraseña</label>
                        <input type="text" name="contrasena" value="<?php  if(isset($_POST['buscar'])){ echo $contrasena;}  ?>" required="llenar campo" class="form-control">
            			   </div>
                     <div class="form-group">
                            <label for="nombre">&nbsp;Tipo</label>
                            <input type="text" id="tipo" name="tipo" value="<?php  if(isset($_POST['buscar'])){ echo $tipo;}  ?>" class="form-control">
                     </div>
            			  
                     <div class="form-group">
                            <label for="nombre">&nbsp;Nombre</label>
                            <input type="text" id="nombre" name="nombre" value="<?php if(isset($_POST['buscar'])){ echo $nombre;}  ?>" maxlength="30" class="form-control">
                     </div>
            			
                			<div class="form-group">
                				<label for="apellido">&nbsp;Apellidos</label>
                        <input type="text" name="apellido" value="<?php  if(isset($_POST['buscar'])){ echo $apellido;}  ?>" maxlength="30" class="form-control">
                				</div>
                      </div>
                      
                      <div class="col-md-6">
                    
                      <div class="form-group">
                        <label for="domicilio">&nbsp;Domicilio</label>
                        <input type="text" name="domicilio"  value="<?php  if(isset($_POST['buscar'])){ echo $domicilio;}  ?>" required="llenar campo" class="form-control">
                      </div>
                      <div class="form-group">
                				<label for="telefono">&nbsp;Telefono</label>
                        <input type="telephone" name="telefono" value="<?php  if(isset($_POST['buscar'])){ echo $telefono;}  ?>"  required="llenar campo" class="form-control">
                  		</div>
                  		<div class="form-group">
                				<label for="email">&nbsp;Correo</label>
                        <input id="correo" type="email" name="correo" value="<?php  if(isset($_POST['buscar'])){ echo $correo;}  ?>" required="llenar campo" class="form-control">
                  		</div>
                  		<div class="form-group">
                				<label for="fecha">&nbsp;Fecha</label>
                        <input type="text"  name="fecha" value="<?php  if(isset($_POST['buscar'])){ echo $fecha;}  ?>" class="form-control">
                  		</div>
                  	</div>
                  </div>
                     <hr>
                    <center>
                    <div class="row">
                       <div class="input-field col s12">
                          <input TYPE="submit" NAME="edit" VALUE="EDITAR" class="btn btn-primary"><br>
                       </div>
                    </div>
                  </center>
    		</form> 
    	</div>
    </div>
</div>
