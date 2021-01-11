<div class="b8s-example">
    <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">INICIO</a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                
                <li class="active"><a href="cotizacion_inicia.php">Cotizaciones</a></li>
                <!-- ELEMENTOS INDIVIDUALES DEL MENÚ
                <li><a href="#">Cotizaciones</a></li>
                 -->
                 <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Proveedores<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="proveedor_registrar.php">Agregar un Proveedor</a></li>
                        <li class="divider"></li>
                    </ul>
                </li>
                 
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Refacciones<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="refacciones_seleccionar_marca.php">Agregar una refacci&oacute;n</a></li>
                        <li><a href="seleccionar_refaccion.php">Añadir detalles a una refacci&oacute;n</a></li>
                        <li class="divider"></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Sucursales<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="sucursal_registrar.php">Registrar Sucursal</a></li>
                        <li class="divider"></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Marcas<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="ver_marcas.php">Ver las Marcas</a></li>
                        <li class="divider"></li>
                    </ul>
                </li>
            
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
    </nav>
</div>