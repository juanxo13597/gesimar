<br><nav class="navbar navbar-expand-sm navbar-dark bg-primary rounded-top">
    <a class="navbar-brand" href="index.php">GESIMAR</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clientes</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="?pag=ver_clientes">Ver</a>
                    <a class="dropdown-item" href="?pag=agregar_clientes">Agregar</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Instalaciones</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="?pag=ver_instalaciones">Ver</a>
                    <a class="dropdown-item" href="?pag=agregar_instalaciones">Agregar</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Incidencias</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="?pag=ver_incidencias">Ver</a>
                    <a class="dropdown-item" href="?pag=agregar_incidencias">Agregar</a>
                </div>
            </li>

        </ul>
        <?=$menuadmin?>
        <ul class="navbar-nav ml-aut mt-2 mt-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$_SESSION['login']['username']?></a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="controllers/cerrar_sesion.php">Salir</a>
                </div>
            </li>
        </ul>
        

    </div>
</nav>