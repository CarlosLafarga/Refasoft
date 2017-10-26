
        <div class="row border-bottom white-bg">
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <i class="fa fa-reorder"></i>
                </button>
                <a href="../Vista/inicio.php" class="navbar-brand">Inspinia</a>
            </div>
            <div class="navbar-collapse collapse" id="navbar">
                <ul class="nav navbar-nav">
                    
                           

                        <li class="dropdown">
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Funciones <span class="caret"></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href=""><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Venta</a></li>
                            <li><a href="almacen.php"><i class="fa fa-cubes"></i>&nbsp;&nbsp;Almacen</a></li>
                            <li><a href="usuarios.php"><i class="fa fa-user-circle-o"></i>&nbsp;&nbsp;Usuarios</a></li>
                            
                        </ul>
                    </li>
                        

                </ul>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                       <b> Bienvenido:</b>&nbsp;&nbsp;<?php echo $_SESSION["nombre"];?>
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
        