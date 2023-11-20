<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
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
        <input class="form-controlBuscar m-3 p-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-secondary p-2" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>

    

    <div class="collapse navbar-collapse justify-content-end mt-5 ">
        <ul class="navbar-nav ">

            <!--Carrito de compras-->
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </li>
            <!--Meencorazona-->
            <li class="nav-item text-white">
            <i class="fa-regular fa-heart" style="height: 100px;"></i>
            </li>

            <!--Personita de inicio de sesion-->
            <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('/login') }}"><i class="fa-regular fa-user"></i>Log in</a>
            </li>
            
            <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('/register') }}">Register</a>
            </li>
            
        </ul>
    </div>
</nav>
</header> 



<nav class="navbar2 navbar-expand-lg navbar-light bg-grey">
    <div class="collapse navbar-collapse justify-content-center">
        <ul class="navbar-nav">
           
            <!--Espacio NINTENDO-->
        <div class="dropdown m-3 p-2">
            <button class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 NINTENDO
            </button>
            <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="#">TODOS LOS JUEGOS/<a></li>
             <li><a class="dropdown-item" href="#">DIOMIO</a></li>
             <li><a class="dropdown-item" href="#">ME WA MORIR</a></li>
            </ul>
        </div>
            

            <!--Espacio PS4-->
        <div class="dropdown m-3 p-2">
            <button class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 PS4
            </button>
            <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="#">TODOS LOS JUEGOS/<a></li>
             <li><a class="dropdown-item" href="#">Another action</a></li>
             <li><a class="dropdown-item" href="#">Something else here</a></li>
             </ul>
        </div>

            <!--Espacio PS5-->
        <div class="dropdown m-3 p-2">
            <button class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 PS5
            </button>
            <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="#">TODOS LOS JUEGOS/<a></li>
             <li><a class="dropdown-item" href="#">Another action</a></li>
             <li><a class="dropdown-item" href="#">Something else here</a></li>
             </ul>
        </div>

                <!--Espacio XBOX-->
        <div class="dropdown m-3 p-2">
            <button class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 XBOX
            </button>
            <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="#">TODOS LOS JUEGOS/<a></li>
             <li><a class="dropdown-item" href="#">Another action</a></li>
             <li><a class="dropdown-item" href="#">Something else here</a></li>
             </ul>
        </div>

                <!--Espacio XBOX-->
        <div class="dropdown m-3 p-2">
            <button class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 MEMBRESIAS
            </a>
            <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="#">TODOS LOS JUEGOS/<a></li>
             <li><a class="dropdown-item" href="#">Another action</a></li>
             <li><a class="dropdown-item" href="#">Something else here</a></li>
             </ul>
        </div>

        </ul>
    </div>
</nav>

<div class="container-m ">
    <a href="">
     <img src="{{ asset('img/Banner-Grande.png') }}" alt="" style="width: 1345px;">
    </a>

    <hr>

    <div class="retenedor">
    <div class="contenedor container-m">
    <a href="">
     <img src="{{ asset('img/Banner-Pequeno-13.png') }}" alt="" style="width: 500px;">
    </a>
   <div class="contenedor2 container-m">
    <a href="">
     <img src="{{ asset('img/Banner-Pequeno-14.png') }}" alt="" style="width: 500px;">
    </a>
    </div>
    </div>
    </div>

</div>

<br>
<!-- Carrusel centrado con información al lado derecho -->
<p class="text-center">RECOMENDADOS</p>
<div class="container-m">
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('img/image1.jpg') }}" class="d-block w-50" alt="Imagen 1 ">
                    <div class="ml-4">
                        <p>Con este título innovador y auténtico, <br>
                         te sentirás mucho más cerca del juego <br>
                          gracias a una experiencia futbolística más real que nunca</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('img/image2.jpg') }}" class="d-block w-50" alt="Imagen 2">
                    <div class="ml-4">
                        <p>Inicia de la mejor manera con <br>
                         Call of Duty: Modern Warfare 3 
                        <br>un emocionante videojuego de disparos en primera persona </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('img/image3.jpg') }}" class="d-block w-50" alt="Imagen 2">
                    <div class="ml-4">
                        
                        <p>Alan Wake II 
                           <br> es un videojuego de horror de supervivencia </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('img/image4.jpg') }}" class="d-block w-50" alt="Imagen 2">
                    <div class="ml-4">
                        <p>Una aventura épica a través de la tierra y los cielos te espera en <br>
                          The Legend of Zelda™: Tears of the Kingdom <br>. 
                        La aventura es tuya para crearla en un mundo impulsado por tu imaginación</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('img/image5.png') }}" class="d-block w-50" alt="Imagen 2">
                    <div class="ml-4">
                        <p>Los Spider-Men Peter Parker y Miles Morales <br>
                        regresan para una nueva y emocionante aventura <br>
                         de la aclamada franquicia Marvel's Spider-Man </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('img/image6.jpg') }}" class="d-block w-50" alt="Imagen 2">
                    <div class="ml-4">
                        <p>Super Mario Bros. Wonder', <br>
                         una aventura con más personajes, <br>
                         más transformaciones y más maravillas que nunca</p>
                    </div>
                </div>
            </div>
            <!-- Agrega más imágenes -->
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



<!-- Footer -->
<footer class="bg-dark text-light py-3 mt-5 text-center">
        <p>&copy; 2023 <img src="{{ asset('img/logo.png') }}" alt="Logo" height="80"></p>
        <p>
            <a href="#" class="text-light"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-light ml-3"><i class="fab fa-instagram"></i></a>
            <a href="tel:+123456789" class="text-light ml-3"><i class="fas fa-phone"></i></a>
        </p>
        <p><a href="#">Política de privacidad</a> | <a href="#">Términos y condiciones</a></p>
</footer>









<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
