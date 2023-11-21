<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="shortcut icon" href="{{ asset ('img/logo.png') }}" type="image/x-icon">

       @vite(['resources/css/inicio.css'])

    <title>ZonaGamer</title>
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-light bg-gray">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" height="150px">
    </a>
    
    <form class="form-inline mx-auto ">
        <div class="search-container">
            <div class="search-icon"></div>
            <input class="search-input" type="text" placeholder="Buscar...">
         </div>
    </form>

    

    <div class=" collapse navbar-collapse justify-content-end mt-5 ">
        <ul class="navbar-nav ">

            <!--Carrito de compras-->
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa-solid fa-cart-shopping fa-xl"></i></a>
            </li>
            <!--Meencorazona-->
            <li class="nav-item text-white">
            <a class="nav-link text-white" href="#"><i class="fa-solid fa-heart fa-2xl" style="color: #ffffff;"></i></a>
            </li>

            <!--Personita de inicio de sesion-->
            <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('/login') }}"><i class="fa-solid fa-user fa-xl" style="color: #ffffff;"></i>Iniciar Sesión</a>
            </li>
            
            <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('/register') }}">Registrate</a>
            </li>
            
        </ul>
    </div>
</nav>
</header> 



<nav class="navbar2 navbar-expand-lg navbar-black">
    <div class="collapse navbar-collapse justify-content-center">
        <ul class="navbar-nav">

        <!--Espacio CATEGORIA-->
        <div class="dropdown m-1 p-1">
            <button class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 CATEGORIA
            </button>
            <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="#">Accion<a></li>
             <li><a class="dropdown-item" href="#">Aventura</a></li>
             <li><a class="dropdown-item" href="#">RPG</a></li>
            </ul>
        </div>

        <!--Espacio COLECCIONABLES-->
        <div class="dropdown m-1 p-1">
            <button class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 COLECCIONABLES
            </button>
            <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="#">Camisetas<a></li>
             <li><a class="dropdown-item" href="#">Funkos</a></li>
             <li><a class="dropdown-item" href="#">Peluches</a></li>
            </ul>
        </div>
           
            <!--Espacio NINTENDO-->
        <div class="dropdown m-1 p-1">
            <button class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 NINTENDO
            </button>
            <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="#">Todos los juegos<a></li>
             <li><a class="dropdown-item" href="#">Estrenos</a></li>
             <li><a class="dropdown-item" href="#">Pre venta</a></li>
            </ul>
        </div>
            

            <!--Espacio PS4-->
        <div class="dropdown m-1 p-1">
            <button class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 PS4
            </button>
            <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="#">Todos los juegos<a></li>
             <li><a class="dropdown-item" href="#">Estrenos</a></li>
             <li><a class="dropdown-item" href="#">Pre venta</a></li>
             </ul>
        </div>

            <!--Espacio PS5-->
        <div class="dropdown m-1 p-1">
            <button class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 PS5
            </button>
            <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="#">Todos los juegos<a></li>
             <li><a class="dropdown-item" href="#">Estrenos</a></li>
             <li><a class="dropdown-item" href="#">Pre venta</a></li>
             </ul>
        </div>

        <!--Espacio Pc-->
        <div class="dropdown m-1 p-1">
            <button class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 PC
            </button>
            <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="#">Todos los juegos<a></li>
             <li><a class="dropdown-item" href="#">Estrenos</a></li>
             <li><a class="dropdown-item" href="#">Pre venta</a></li>
             </ul>
        </div>

                <!--Espacio XBOX-->
        <div class="dropdown m-1 p-1">
            <button class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 XBOX
            </button>
            <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="#">Todos los juegos<a></li>
             <li><a class="dropdown-item" href="#">Estrenos</a></li>
             <li><a class="dropdown-item" href="#">Pre venta</a></li>
             </ul>
        </div>

                <!--Espacio XBOX-->
        <div class="dropdown m-1 p-1">
            <button class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 MEMBRESIAS
            </a>
            <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="#">Todos los juegos<a></li>
             <li><a class="dropdown-item" href="#">Estrenos</a></li>
             <li><a class="dropdown-item" href="#">Pre venta</a></li>
             </ul>
        </div>

        </ul>
    </div>
</nav>

<div class="promos container-fluid">
    <a href="">
     <img src="{{ asset('img/Banner-Grande.png') }}" alt="" >
    </a>

    <hr>

    <div class="retenedor">
    
     <a href="">
     <img src="{{ asset('img/Banner-Pequeno-13.png') }}" alt="" >
      </a>
   
      <a href="">
      <img src="{{ asset('img/Banner-Pequeno-14.png') }}" alt="" >
      </a>
     </div>

</div>

<br>

<main>
    
</main>

<aside>
<div id="mobile-filter">
<div class="filter">
    <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="false" aria-controls="mobile-filter">Filters<span class="fa fa-filter pl-1"></span></button>
</div>
    <div>
        <h6 class="p-1 border-bottom"></h6>
        <ul>
            <li><a href="#">Simulacion</a></li>
            <li><a href="#">Multijugador</a></li>
            <li><a href="#">Accion</a></li>
            <li><a href="#">Shooters</a></li>
            <li><a href="#"></a></li>
        </ul>
    </div>
    <div>
        <h6 class="p-1 border-bottom">Filtrado  </h6>
        <p class="mb-2">Precio (USD)</p>
        <input type="range" name="precio" id="precio-game" max="100" min="0">
        <p>$0</p><p>$100</p>
    </div>
    <div>
        <h6>Tipo</h6>
        <form class="ml-md-2">
            <div class="form-inline border rounded p-sm-2 my-2">
                <input type="radio" name="type" id="boring">
                <label for="boring" class="pl-1 pt-sm-0 pt-1">Estrenos</label>
            </div>
            <div class="form-inline border rounded p-sm-2 my-2">
                <input type="radio" name="type" id="ugly">
                <label for="ugly" class="pl-1 pt-sm-0 pt-1">Pre orden</label>
            </div>
            <div class="form-inline border rounded p-md-2 p-sm-1">
                <input type="radio" name="type" id="notugly">
                <label for="notugly" class="pl-1 pt-sm-0 pt-1">Tarjetas</label>
            </div>
        </form>
    </div>
</div>
</aside>


<!-- Carrusel centrado con información al lado derecho -->
<!--
<p class="text-center"> RECOMENDADOS</p>
<div class="container-s ">
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('img/image1.jpg') }}" class="d-block w-50" alt="Imagen 1 ">
                    <div class="carousel-caption d-none d-md-block">
                         <h5>First slide label</h5>
                         <p>Some representative placeholder content for the first slide.</p>
                     </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('img/image2.jpg') }}" class="d-block w-50" alt="Imagen 2">
                    <div class="carousel-caption d-none d-md-block">
                         <h5>First slide label</h5>
                         <p>Some representative placeholder content for the first slide.</p>
                     </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('img/image3.jpg') }}" class="d-block w-50" alt="Imagen 2">
                    <div class="carousel-caption d-none d-md-block">
                         <h5>First slide label</h5>
                         <p>Some representative placeholder content for the first slide.</p>
                     </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('img/image4.jpg') }}" class="d-block w-50" alt="Imagen 2">
                    <div class="carousel-caption d-none d-md-block">
                         <h5>First slide label</h5>
                         <p>Some representative placeholder content for the first slide.</p>
                     </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('img/image5.png') }}" class="d-block w-50" alt="Imagen 2">
                    <div class="carousel-caption d-none d-md-block">
                         <h5>First slide label</h5>
                         <p>Some representative placeholder content for the first slide.</p>
                     </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('img/image6.jpg') }}" class="d-block w-50" alt="Imagen 2">
                    <div class="carousel-caption d-none d-md-block">
                         <h5>First slide label</h5>
                         <p>Some representative placeholder content for the first slide.</p>
                     </div>
                </div>
            </div>
            
        </div>
        <a class="carousel-control-prev ml-n3" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>

-->
<!-- Footer -->
<footer class="text-light py-3 mt-5 text-center">
        <p>&copy; 2023 <img src="{{ asset('img/logo.png') }}" alt="Logo" height="80"></p>
        <p>
            <a href="#" class="text-light"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-light ml-3"><i class="fab fa-instagram"></i></a>
            <a href="tel:+123456789" class="text-light ml-3"><i class="fas fa-phone"></i></a>
        </p>
        <p><a href="#">Política de privacidad</a> | <a href="#">Términos y condiciones</a></p>
</footer>









<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
