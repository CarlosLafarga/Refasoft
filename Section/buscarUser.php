            
            <form action="../Section/buscarUser.php" method="POST">
                        <label for="nombre">&nbsp;Nombre</label>
                        <div class="input-group">
                          <input type="text" id="busca" name="busca" required="llenar campo"  placeholder="NOMBRE DE PILA" class="form-control">
                            <span class="input-group-btn">
                              <input type="submit" value="Buscar" name="buscar" class="btn btn-primary"><i class="fa fa-search"></i>
                            </span>
                       </div>
              </form>
                
                        
                      <?php 
                       include("../Controlador/conexionEdit.php");
                        
                        if(isset($_POST['buscar'])){

                          $busca = $_POST['busca'];
                        }else{

                          $busca = '';
                        }
                        
                        $registro = mysql_query("SELECT * FROM usuario WHERE Nombre = '$busca';");

                        while ($reg = mysql_fetch_array($registro)) {
                         
                          $usuario = $reg['Usuario'];
                          $contrasena = $reg['Contrasena'];
                          $tipo = $reg['Tipo'];
                          $nombre = $reg['Nombre'];
                          $apellido = $reg['Apellido'];
                          $domicilio = $reg['Domicilio'];
                          $telefono = $reg['Telefono'];
                          $correo = $reg['Correo'];
                          $fecha= $reg['fecha'];
                        

                        }
                      ?>