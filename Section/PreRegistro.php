
        <div class="ibox-content m-b-sm border-bottom">
               <form method="POST"  action="../Modelo/ValidaAlmacen.php">
                <div class="row">
                    <CENTER><h2> PRE-REGISTRO</h2></CENTER><BR>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>&nbsp;Codigo</label>
                            <input type="text" id="codigo" readonly="ver" name="codigo" value="<?php echo $codigo; ?>"  placeholder="Codigo" required="llenar campo" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>&nbsp;Producto</label>
                            <input type="text" id="producto" name="producto" readonly="ver" value="<?php echo $producto; ?>" placeholder="Producto" required="llenar campo" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>&nbsp;Unidad</label>
                            <input type="text" id="unidad" readonly="ver" value="<?php echo $unidad; ?>" name="unidad" required="llenar campo" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>&nbsp;Proveedor</label>
                            <input type="text" id="proveedor" readonly="ver" value="<?php echo $proveedor; ?>" name="proveedor" required="llenar campo" class="form-control">
                            </div>
                        </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>&nbsp;Precio Proveedor</label>
                            <input type="text" id="precio" name="ppv" readonly="ver" value="<?php echo $ppv; ?>" placeholder="Precio Proveedor" required="llenar campo" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>&nbsp;Cantidad</label>
                            <input type="text" id="cantidad" name="cantidad" readonly="ver" value="<?php echo $cantidad; ?>" placeholder="Cantidad" required="llenar campo" class="form-control">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>&nbsp;Costo Neto</label>
                            <input type="text" id="CN" value="<?php echo $CN; ?>" readonly="ver" name="CN" required="llenar campo" class="form-control">
                            </div>
                        </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>&nbsp;Precio Publico</label>
                            <input type="text" id="PB" name="PB" value="<?php echo $PB; ?>" readonly="ver" placeholder="Precio Publico" required="llenar campo" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>&nbsp;Precio Taller</label>
                            <input type="text" id="PT" name="PT" value="<?php echo $PT; ?>" readonly="ver" placeholder="Precio Taller" required="llenar campo" class="form-control">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>&nbsp;Piso</label>
                        <input type="text" id="piso" name="piso" placeholder="Piso" readonly="ver" value="<?php echo $piso; ?>"   class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-4">
                       <div class="form-group">
                         <label>&nbsp;Pasillo</label>
                         <input type="text" id="pasillo" name="pasillo" placeholder="Pasillo" readonly="ver" value="<?php echo $pasillo; ?>"  class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>&nbsp;Estante</label>
                        <input type="text" id="estante" name="estante" placeholder="Estante" readonly="ver" value="<?php echo $estante; ?>"  class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>&nbsp;Peldaño</label>
                        <input type="text" id="peldaño" name="peldaño" placeholder="Peldaño" readonly="ver" value="<?php echo $peldaño; ?>" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>&nbsp;Factura</label>
                        <input type="text" id="factura" name="factura" placeholder="Factura" readonly="ver" value="<?php echo $factura; ?>" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>&nbsp;Fecha Factura</label>
                        <input type="text" id="fechafac" name="fechafac" readonly="ver" value="<?php echo $fechafac; ?>" class="form-control">
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



