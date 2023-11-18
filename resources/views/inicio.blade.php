<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Terreneitor-Games</title>
 
</head>
<body>

<!-- Barra de Navegación Principal -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="logo.png" alt="Logo" style="max-height: 30px;">
    </a>
    <form class="form-inline my-2 my-lg-0 mr-auto">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
    <ul class="navbar-nav ml-auto">
    
        <li class="nav-item">
        <a class="nav-link" href="{{ url('/login') }}"><i class="fa-regular fa-user"></i>Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/register') }}">Registro</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i>Carrito</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Ayuda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Información</a>
        </li>
    </ul>
</nav>

<!-- Barra de Navegación de Categorías -->
<nav class="navbar navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#categoryNavbar"
            aria-controls="categoryNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"> CATEGORIAS</i>
    </button>
</nav>

</body>
</html>
