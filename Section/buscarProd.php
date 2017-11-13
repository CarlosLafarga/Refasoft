              <form action="buscarProd.php" method="POST">
                        <div class="input-group">
                          <input type="text" id="busca" name="busca" required="llenar campo"  placeholder="NOMBRE DEL PRODUCTO" class="form-control">
                            <span class="input-group-btn">
                              <input type="submit" value="Buscar" name="buscar" class="btn btn-primary"><i class="fa fa-search"></i>
                            </span>
                       </div>
              </form>
                
                        
                      <?php 
                       include("../Controlador/conexionEditAlm.php");
                        $busca = $_POST['busca'];
                        
                        $busqueda = mysql_query("SELECT * FROM productos WHERE producto = '$busca';");
                        

                        while ($reg = mysql_fetch_array($busqueda)) {
                         
                          $codigo = $reg['codigo'];
                          $producto = $reg['producto'];
                          $unidad = $reg['unidad']; 
                          $proveedor = $reg['proveedor'];
                          $ppv = $reg['ppv'];
                          $cantidad = $reg['cantidad'];
                          $piso = $reg['piso'];
                          $pasillo = $reg['pasillo'];
                          $peldaño = $reg['peldaño'];
                          $estante = $reg['estante'];


                        }
                      ?>