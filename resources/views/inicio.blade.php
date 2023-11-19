<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

       @vite(['resources/css/inicio.css'])

    <title>ZonaGamer</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-gray">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" height="80">
    </a>
    
    <form class="form-inline mx-auto ">
        <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-secondary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>

    

    <div class="collapse navbar-collapse justify-content-end ">
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa-solid fa-house"></i>Inicio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('/login') }}"><i class="fa-regular fa-user"></i>Iniciar Seccion</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('/register') }}">Registro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa-solid fa-cart-shopping"></i>Carrito</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"></li><i class="fa-regular fa-credit-card"></i>Pagar</a>
            
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Perfil</a>
            </li>
        </ul>
    </div>
</nav>
<hr class="separador">

<nav class="navbar navbar-expand-lg navbar-light bg-grey">
    <div class="collapse navbar-collapse justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa-solid fa-bars"></i>Categorías</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Juegos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Marcas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Prendas + Accesorios</a>
            </li>
        </ul>
    </div>
</nav>

<br>
<!-- Carrusel centrado con información al lado derecho -->
<p class="text-center">DESTACADOS</p>
<div class="container mt-4">
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
