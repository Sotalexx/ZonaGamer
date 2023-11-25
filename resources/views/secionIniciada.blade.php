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
    @vite(['resources/js/products.js'])

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
        
        <div class="dropdown-center">
                <button class="boton-user btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fas fa-user"></i>
                </button>
                <ul class="nose dropdown-menu">

                    <li><a href="{{url ('/cuenta')}}"><button class="letras dropdown-item" type="button">Mis pedidos
                            </button></li></a>

                    <li><a href="{{url ('/cuenta')}}"><button class="letras dropdown-item" type="button">Mi
                                cuenta</button></li></a>

                    <li><a href="{{url ('/cuenta')}}"><button class="letras dropdown-item" type="button">Mi
                                saldo</button></li></a>
                    <hr>

                    <li>
                        <a href="{{url ('/cuenta')}}"><button class="letras dropdown-item" type="button">Cerrar
                                sesion</button></a>
                    </li>
                    
                </ul>
            </div>
        <a href="#"><i class="corazon fas fa-heart"></i></a>
        <a href="{{ url('/carrito') }}"><i class="carrito fas fa-shopping-cart"></i> <span id="cart-count" class="cart-count">0</span></a>
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
            <img src="{{ asset ('img/banner.jpg') }}" alt="">
        </div>
    </aside> <br><br>

    <h2 class=" text-light text-center" > DESTACADOS</h2>
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <div class="carousel-inner">
    <!-- Primera imagen -->
    <div class="carousel-item active">
      <img src="{{asset('img/image1.jpg')}}" class="d-block w-100" alt="Imagen 1">
      <div class="carousel-caption">
        <p>Con este título innovador y auténtico, <br>
                         te sentirás mucho más cerca del juego <br>
                          gracias a una experiencia futbolística más real que nunca</p>
      </div>
    </div>
    <!-- Segunda imagen -->
    <div class="carousel-item">
      <img src="{{asset('img/image2.jpg')}}" class="d-block w-100" alt="Imagen 2">
      <div class="carousel-caption">
        <p>nicia de la mejor manera con <br>
                         Call of Duty: Modern Warfare 3 
                        <br>un emocionante videojuego de disparos en primera persona </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/image5.png')}}" class="d-block w-100" alt="Imagen 2">
      <div class="carousel-caption">
        <p>Los Spider-Men Peter Parker y Miles Morales <br>
                        regresan para una nueva y emocionante aventura <br>
                         de la aclamada franquicia Marvel's Spider-Man </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/image6.jpg')}}" class="d-block w-100" alt="Imagen 2">
      <div class="carousel-caption">
        <p>Super Mario Bros. Wonder', <br>
                         una aventura con más personajes, <br>
                         más transformaciones y más maravillas que nunca</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/image3.jpg')}}" class="d-block w-100" alt="Imagen 2">
      <div class="carousel-caption">
        <p>Alan Wake II 
         <br> es un videojuego de horror de supervivencia</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/image4.jpg')}}" class="d-block w-100" alt="Imagen 2">
      <div class="carousel-caption">
        <p>Una aventura épica a través de la tierra y los cielos te espera en <br>
                          The Legend of Zelda™: Tears of the Kingdom <br>. 
                        La aventura es tuya para crearla en un mundo impulsado por tu imaginació</p>
      </div>
    </div>



  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>


    

   

  <!-------------------------------------------------------------------------->
  <div id="product-list" class="container mt-4" style ="background-color:#fcfdfa, height: 100%, width: 100%;">
       <h1 class="mb-4">Productos</h1>
       <div class="row" id="product-cards-container"></div>
  </div>
 <!-------------------------------------------------------------------------->



<!-- Footer -->

<footer class="footer text-light py-3 mt-5 text-center">
    <p>&copy; Zona Gamer 2023 <img src="{{ asset('img/logo.png') }}" alt="Logo" height="80"></p>
    <p>
        <a href="#" class="text-light"><i class="fab fa-facebook"></i></a>
        <a href="#" class="text-light ml-3"><i class="fab fa-instagram"></i></a>
        <a href="tel:+123456789" class="text-light ml-3"><i class="fas fa-phone"></i></a>
    </p>
    <p><a href="#">Política de privacidad</a> | <a href="{{ url('/terminos') }}">Términos y condiciones</a></p>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    
</body>
</html>