<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="shortcut icon" href="./assets/logo.webp" type="image/x-icon">
    <title>2000 películas siglo xx</title>
</head>

<body id="cuerpo">
    <img src="./assets/cabecera.jpg" class="container-fluid" alt="cabecera">
    <nav class="menu-principal navbar navbar-dark bg-primary">
        <ul class="nav">
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
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
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
            <button class="diaBtn">
    <div class="form-check" onclick="dia()">
      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
      <label class="form-check-label" for="flexRadioDefault1">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill" viewBox="0 0 16 16">
          <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </svg>
      </label>
    </div>
</button>
<button class="nocheBtn">
    <div class="form-check" onclick="noche()">

      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
      <label class="form-check-label" for="flexRadioDefault2">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
          <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
        </svg>
      </label>

    </div>
  </button>
        </ul>
    </nav>
