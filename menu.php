        <nav class="navbar navbar-expand-md mb-4">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0 mt-2">
                        <li class="nav-item">
                            <a class="nav-link <?php echo $pg == "inicio" ? "active" : "" ?> px-4" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $pg == "Sobre_mi" ? "active" : "" ?>  px-4"href="Sobre_mi.php">Sobre mí </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $pg == "proyectos" ? "active" : "" ?>  px-4" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $pg == "contacto" ? "active" : "" ?> px-4" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-inline">
                        <a href="" class="btn btn-rojo">Descargar mi CV <i class="fas fa-download"></i></a>
                    </div>
                </div>
            </div>
        </nav>

        
        