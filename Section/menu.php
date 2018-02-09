
        <div class="row border-bottom white-bg">
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <i class="fa fa-reorder"></i>
                </button>
                <a href="../Vista/inicio.php" class="navbar-brand">REFASOFT 1.0</a>
            </div>
            <div class="navbar-collapse collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <!--menu de almacen-->
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Almacen <span class="caret"></span></a>
                          <ul role="menu" class="dropdown-menu">
                            <li><a href="almacen.php"><i class="fa fa-cubes"></i>&nbsp;&nbsp;Agregar</a></li>
                            <li><a href="listar_prod.php"><i class="fa fa-cubes"></i>&nbsp;&nbsp;Lista Almacen</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                        <!--menu de usuarios-->
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Usuarios <span class="caret"></span></a>
                          <ul role="menu" class="dropdown-menu">
                            <li><a href="usuarios.php"><i class="fa fa-user-circle-o"></i>&nbsp;&nbsp;Agregar</a></li>
                            <li><a href="EditUsuario.php"><i class="fa fa-user-circle-o"></i>&nbsp;&nbsp;Editar</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                        <!--menu de facturas-->
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Compras <span class="caret"></span></a>
                          <ul role="menu" class="dropdown-menu">
                            <li><a href="listar_comp.php"><i class="fa fa-list-ul"></i>&nbsp;&nbsp;Lista Compras</a></li>
                            <li><a href="factura_nueva.php"><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;Factura nueva</a></li>
                            <li><a href="listar_factura.php"><i class="fa fa-list-ul"></i>&nbsp;&nbsp;Listado de Facturas</a></li>
                            <li><a href="actualizar_productos.php"><i class="fa fa-spinner"></i>&nbsp;&nbsp;Actualizar Productos</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                        <!--menu de punto de venta-->
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Punto Venta <span class="caret"></span></a>
                          <ul role="menu" class="dropdown-menu">
                            <li><a href="puntoventa.php"><i class="fa fa-calculator"></i>&nbsp;&nbsp;Caja</a></li>
                            <li><a href="corte_caja.php"><i class="fa fa-money"></i>&nbsp;&nbsp;Ventas</a></li>
                          </ul>
                        </li>


                </ul>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                       <b> Bienvenido:</b>&nbsp;&nbsp;<?php echo $_SESSION["nombre"]; ?>
                       <input type="text" hidden name="name" id="name" value="<?php echo $_SESSION["nombre"]; ?>">
                    </li>
                    <li>
                        <a href="../Controlador/Salir.php">
                            <i class="fa fa-sign-out"></i> Cerrar Sesion
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        </div>
