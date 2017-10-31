
            <div class="ibox-content m-b-sm border-bottom">
               <form method="POST"  action="../Modelo/ValidaAlmacen.php" role="form">
                <div class="row">
                    <CENTER><h2>NOTA DE REGISTRO</h2></CENTER><BR>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>&nbsp;Codigo</label>
                            <input type="text" id="codigo" disabled="disabled" name="codigo" value="<?php echo $codigo; ?>" placeholder="Codigo" required="llenar campo" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>&nbsp;Producto</label>
                            <input type="text" id="producto" name="producto" disabled="disabled" value="<?php echo $producto; ?>" placeholder="Producto" required="llenar campo" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>&nbsp;Unidad</label>
                            <input type="text" id="unidad" disabled="disabled" value="<?php echo $unidad; ?>" name="unidad" required="llenar campo" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>&nbsp;Proveedor</label>
                            <input type="text" id="proveedor" disabled="disabled" value="<?php echo $proveedor; ?>" name="proveedor" required="llenar campo" class="form-control">
                            </div>
                        </div>
                 
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>&nbsp;Precio Proveedor</label>
                            <input type="text" id="precio" name="ppv" disabled="disabled" value="<?php echo $ppv; ?>" placeholder="Precio Proveedor" required="llenar campo" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>&nbsp;Cantidad</label>
                            <input type="text" id="cantidad" name="cantidad" disabled="disabled" value="<?php echo $cantidad; ?>" placeholder="Cantidad" required="llenar campo" class="form-control">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>&nbsp;Costo Neto</label>
                            <input type="text" id="CN" value="<?php echo $CN; ?>" disabled="disabled" name="CN" required="llenar campo" class="form-control">
                            </div>
                        </div>
                 
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>&nbsp;Precio Publico</label>
                            <input type="text" id="PB" name="PB" value="<?php echo $PB; ?>" disabled="disabled" placeholder="Precio Publico" required="llenar campo" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>&nbsp;Precio Taller</label>
                            <input type="text" id="PT" name="PT" value="<?php echo $PT; ?>" disabled="disabled" placeholder="Precio Taller" required="llenar campo" class="form-control">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>&nbsp;Piso</label>
                        <input type="text" id="piso" name="piso" placeholder="Piso" disabled="disabled" value="<?php echo $piso; ?>"   class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-4">
                       <div class="form-group">
                         <label>&nbsp;Pasillo</label>
                         <input type="text" id="pasillo" name="pasillo" placeholder="Pasillo" disabled="disabled" value="<?php echo $pasillo; ?>"  class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>&nbsp;Estante</label>
                        <input type="text" id="estante" name="estante" placeholder="Estante" disabled="disabled" value="<?php echo $estante; ?>"  class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>&nbsp;Peldaño</label>
                        <input type="text" id="peldaño" name="peldaño" placeholder="Peldaño" disabled="disabled" value="<?php echo $peldaño; ?>" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>&nbsp;Factura</label>
                        <input type="text" id="factura" name="factura" placeholder="factura" disabled="disabled" value="<?php echo $factura; ?>" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>&nbsp;Fecha Factura</label>
                        <input type="text" id="fechafac" name="fechafac" disabled="disabled"  value="<?php echo $fechafac; ?>" class="form-control">
                      </div>
                    </div>
                  </div>
                  <br><CENTER><div class="row">
                    <div class="col-sm-6">
                       <div class="input-field col s12">
                          <input type="reset"  value="CORREGIR" name="atras"  onclick="history.back()" class="btn btn-primary" >
                       </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="input-field col s12">
                      <input TYPE="submit" NAME=OK VALUE="REGISTRAR"   onclick="EventoAlert()" class="btn btn-primary" >
                      <br><br>
                    </div>
                  </div>
                  </div></CENTER>
                </div>
              </form>
            </div>


