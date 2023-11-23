<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="shortcut icon" href="{{ asset ('img/logo.png') }}" type=" image/x-icon">

    @vite(['resources/css/inicio.css'])

    <title>ZonaGamer</title>
</head>

<body>
    <!-- Contenedor padre del header-->
    <header class="header-container">

        <div class="logo-container">
            <a href="#"><img src="{{ asset ('img/logo.png') }}" alt=""></a>
            <h1>ZonaGamer</h1>
        </div>

        <!--Barra de busqueda-->

        <div class="barra-container">
            <input class="buscar" type="text" placeholder="Buscar">
            <div class="btn-barra">
                <i class="fas fa-search"></i>
            </div>
        </div>


        <!--Botones de interaccion-->
        <div class="btn-interaccion">
            <a class="text-decoration-none" href="{{ url('/login') }}">
                <h3 class="Meterse">Sign In</h3>
            </a>
            <a href="#"><i class="corazon fas fa-heart"></i></a>
            <a href=""><i class="fas fa-user"></i></a>
            <a href="{{ url('/carrito') }}"><i class="carrito fas fa-shopping-cart"></i></a>


        </div>



    </header>
    <!--Navbar-->
    <navbar class="menu navbar">
        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-desktop" style="color: #ffffff;"></i>
                PC
            </button>
            <ul class="dropdown-menu">
                <li><button class="dropdown-item" type="button">Steam</button></li>
                <li><button class="dropdown-item" type="button">Rockstar</button></li>
                <li><button class="dropdown-item" type="button">Epic</button></li>
            </ul>
        </div>
        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-brands fa-playstation" style="color: #ffffff;"></i>
                Playstation
            </button>
            <ul class="dropdown-menu">
                <li><button class="dropdown-item" type="button">Action</button></li>
                <li><button class="dropdown-item" type="button">Another action</button></li>
                <li><button class="dropdown-item" type="button">Something else here</button></li>
            </ul>
        </div>

        <div class="dropdown">
            <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-brands fa-xbox" style="color: #ffffff;"></i>
                Xbox
            </button>
            <ul class="dropdown-menu">
                <li><button class="dropdown-item" type="button">Action</button></li>
                <li><button class="dropdown-item" type="button">Another action</button></li>
                <li><button class="dropdown-item" type="button">Something else here</button></li>
            </ul>
        </div>

        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-gamepad" style="color: #ffffff;"></i>
                Nintendo
            </button>
            <ul class="dropdown-menu">
                <li><button class="dropdown-item" type="button">Action</button></li>
                <li><button class="dropdown-item" type="button">Another action</button></li>
                <li><button class="dropdown-item" type="button">Something else here</button></li>
            </ul>
        </div>
        </div>

        <div>
            <i class="fa-solid fa-newspaper" style="color: #ffffff;"></i>
            <a class="text-light text-decoration-none" href="{{ url('/noticias') }}">Noticias</a>
        </div>


    </navbar>

    <aside class="aside-container">
        <div class="banner-principal">
            <img src="{{ asset ('img/Banner-mamalon.jpg') }}" alt="">
        </div>
    </aside>

    <h2 class="tende">Tendencias</h2>

    <main class="main-container">


    </main>






    <!-- Footer -->
    <footer class="text-light py-3 mt-5 text-center">
        <p>&copy; Zona Gamer 2023 <img src="{{ asset('img/logo.png') }}" alt="Logo" height="80"></p>
        <p>
            <a href="#" class="text-light"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-light ml-3"><i class="fab fa-instagram"></i></a>
            <a href="tel:+123456789" class="text-light ml-3"><i class="fas fa-phone"></i></a>
        </p>
        <p><a href="#">Política de privacidad</a> | <a href="{{ url('/terminos') }}">Términos y condiciones</a></p>
    </footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>