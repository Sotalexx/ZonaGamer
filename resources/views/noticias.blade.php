<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Página de Noticias</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset ('img/logo.png') }}" type="image/x-icon">

  @vite(['resources/css/noticias.css'])
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#"><img src="{{ asset ('img/logo.png') }}" alt="" height="100px">Zona Gamer</a>
  
  <form class="form-inline mx-auto ">
        <input class="form-controlBuscar m-3 p-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-secondary p-2" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/inicio') }}">Tienda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-heart"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{ url('/login') }}"><i class="fas fa-user"></i></a>
      </li>
    </ul>
  </div>
</nav>

<div class="noticias-container">
<div class="noticia">
    <img src="{{ asset ('img/noti1.jpg') }}" alt="Imagen Noticia " height="200px" width="500px">
    <div>
      <p><b>Nueve motivos por los que debes explorar la selva embarrada de Shadow of the Tomb Raider</b></p>
      <p>Menos estrés, más diversión <br>
      Tiene toda la belleza, con menos coste <br>
      Todo el contenido, menos coste <br>
      Tumbas de desafío. Montones de ellas  <br>
      Diversión en el desplazamiento <br>
      Muchos rompecabezas <br>
      Sigilo sencillo  <br>
      Un mundo abierto pero manejable <br>
      El paquete completo  <br>

      </p>
    </div>
  </div>

  <div class="noticia">
    <img src="{{ asset ('img/noti2.jpg') }}" alt="Imagen Noticia 3">
    <div>
      <p><b>Xbox Game Pass anuncia sus nuevos juegos para noviembre 2023</b></p>
      <p>Anvil (Nube, Consola y PC) <br>
        Battlefield 1943 (Consola) - EA Play <br>
        Battlefield: Bad Company (Consola) - EA Play <br>
        Battlefield: Bad Company 2 (Consola y PC) - EA Play <br>
        Disc Room (Nube, Consola y PC) <br>
        Eastward (Nube, Consola y PC) <br>
        Grid (Consola) - EA Play</p>
    </div>
  </div>

  <div class="noticia">
    <img src="{{ asset ('img/noti3.png') }}" alt="Imagen Noticia 4">
    <div>
      <p><b>Call of Duty Modern Warfare 3 ha logrado este gran récord a pesar de las críticas</b></p>
      <p>Un cruce de tiros contra Call of Duty Modern Warfare 3,  el cierre de la nueva trilogía reimaginada de la obra original de Infinity Ward, esta vez en manos de  <br>
       Sledgehammer Games. El título ha sido recibido de forma hostil por parte de ciertos miembros de la comunidad y de la crítica, si bien eso no ha evitado que  <br>
       los números acompañen. Al menos eso defiende Activision, que señala que el videojuego ha logrado reunir a un número masivo de jugadores. <br> <br>
       “Gracias por un lanzamiento histórico. En tan solo dos semanas, MWIII ha conseguido récords de participación dentro de la trilogía Modern Warfare 3″, han publicado en un comunicado.
        “Gracias por habernos inspirado y por haber pasado tanto tiempo con el título. Vuestro feedback y pasión nos hacen mejores continuamente”. </p>
    </div>
  </div>

  <div class="noticia">
    <img src="{{ asset ('img/noti5.jpg') }}" alt="Imagen Noticia 5">
    <div>
      <p><b>Todo lo que sabemos de The Last of Us Parte II Remastered para PS5</b></p>
      <p>Uno de los mejores juegos de PS4 y de la historia dará por fin el salto a PlayStation 5: The Last of Us Parte II Remastered es real y ya conocemos su fecha de salida. <br>
      The Last of Us Parte II Remastered saldrá el 19 de enero de 2024 en exclusiva para PlayStation 5. La versión definitiva de este premiado juego desarrollado por Naughty Dog dará el salto a la nueva generación y los fans de la saga podrán disfrutar de esta entrega con diferentes mejoras. La fecha elegida coincide con el primer aniversario del inicio de la serie de The Last of Us en HBO, que comenzó a emitirse el 15 de enero de 2023.
      </p>
    </div>
  </div>
</div>

</div>


<!-- Footer -->
<footer class="bg-dark text-light py-3 mt-5 text-center">
        <p>&copy; Zona Gamer 2023 <img src="{{ asset('img/logo.png') }}" alt="Logo" height="80"></p>
        <p>
            <a href="#" class="text-light"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-light ml-3"><i class="fab fa-instagram"></i></a>
            <a href="tel:+123456789" class="text-light ml-3"><i class="fas fa-phone"></i></a>
        </p>
        <p><a href="#">Política de privacidad</a> | <a href="#">Términos y condiciones</a></p>
</footer>


<!-- Agrega los scripts de Bootstrap y jQuery al final del cuerpo del documento -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
