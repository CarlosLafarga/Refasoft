
<div class="col-lg-12">
      <div class="ibox float-e-margins">
          <div class="ibox-title">
                <h5>AGREGAR PRODUCTO</h5>
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
                        <hr>
                        <center><h4>&nbsp;&nbsp;Producto</h4></center>
                        <hr>
                       <form method="POST"  action="../Controlador/calcular.php" role="form">
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
                            <option value="permor">permor</option>
                            <option value="Apymsa">Apymsa</option>
                            <option value="serva">serva</option>
                            <option value="Dirco">Dirco</option>
                            <option value="ciosa">Ciosa</option>
                            <option value="BDH">BDH</option>
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
                      </div>

                        <div class="col-sm-6">
                        <hr>
                        <center><h4>&nbsp;&nbsp;Ubicacion</h4></center>
                        <hr>
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
                        <hr>
                        <center><h4>&nbsp;&nbsp;Datos de Factura</h4></center>
                        <hr>
                        <div class="form-inline">
                        <div class="form-group">
                        <label>&nbsp;Factura</label>
                        <input type="text" id="factura" name="factura" placeholder="Factura"  class="form-control">
                        </div>
                        <div class="form-group">
                        <label>&nbsp;Fecha</label>
                        <input type="date" id="fechafac" name="fechafac"  class="form-control">
                        </div>
                      </div>
                         </div>
                    </div>
                    <hr>
                  <center>
                    <div class="row">
                       <div class="input-field col s12">
                          <input type="submit" value="Visualizar" onclick="EventoAlert()" class="btn btn-primary" >
                       </div>
                    </div>
                  </center>
        </form>
      </div>
     </div>
</div>
