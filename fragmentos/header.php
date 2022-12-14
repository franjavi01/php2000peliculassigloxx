<body id="cuerpo">
    <img src="./assets/cabecera.jpg" class="container-fluid" alt="cabecera">
    <nav class="menu-principal navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#opciones">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="opciones">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">
                            <img src="./assets/logo.webp" alt="Logo" width="30px" height="30px" class="d-inline-block align-text-center">
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </a>
                    <ul class="dropdown-menu">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
                        </form>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="decadas.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Décadas</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Años del cine mudo</a></li>
                        <li><a class="dropdown-item" href="#">Años 30</a></li>
                        <li><a class="dropdown-item" href="#">Años 40</a></li>
                        <li><a class="dropdown-item" href="#">Años 50</a></li>
                        <li><a class="dropdown-item" href="#">Años 60</a></li>
                        <li><a class="dropdown-item" href="#">Años 70</a></li>
                        <li><a class="dropdown-item" href="#">Años 80</a></li>
                        <li><a class="dropdown-item" href="#">Siglo XXI</a></li>
                    </ul>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="biografias.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Biografías</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Directores</a></li>
                        <li><a class="dropdown-item" href="#">Actores</a></li>
                        <li><a class="dropdown-item" href="#">Actrices</a></li>
                        <li><a class="dropdown-item" href="#">Otras Biografías</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sagas.php">Sagas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://2000cancionessigloxx.com/">2000 canciones siglo XX</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://tienda.2000peliculassigloxx.com/">Tienda AMAZON</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                <li class="nav-item">
                    <?php include 'fragmentos/noche.php' ?>
                </li>
            </ul>

        </div>

    </nav>