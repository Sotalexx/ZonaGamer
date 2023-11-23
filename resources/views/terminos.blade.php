<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Terminos y Condiciones</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset ('img/logo.png') }}" type="image/x-icon">

  @vite(['resources/css/terminos.css'])
</head>
<body>

<header class="header-container">

     <div class="logo-container">
    <a href="{{url('/inicio')}}"><img src="{{ asset ('img/logo.png') }}" alt=""></a>
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
        <a href="#"><i class="corazon fas fa-heart"></i></a>
        <a href="#"><i class="carrito fas fa-shopping-cart"></i></a>
        <a href=""><i class="fas fa-user"></i></a>
        <a href="{{ url('/login') }}"><h3>Sign In</h3></a>
    </div>

 
 </header>


<br>
<div class="terminos-container">
<h1><b>Términos y Condiciones de Zona Gamer</b></h1> <br>

<h3>1. Aceptación de los Términos:</h3>

<p>Al acceder y utilizar el sitio web de Zona Gamer, el usuario acepta automáticamente los siguientes términos y condiciones.</p> <br>

<h3>2. Productos y Servicios:</h3>
<p>Zona Gamer ofrece una variedad de productos relacionados con videojuegos de diferentes marcas
    Los precios están indicados en la moneda local y pueden estar sujetos a cambios sin previo aviso.</p> <br>

<h3>3. Proceso de Compra:</h3>
 <p>La realización de un pedido implica la aceptación de los términos y condiciones establecidos.</p> <br>

<h3>4. Envíos y Entregas:</h3>

    <p>Zona Gamer se compromete a realizar envíos en el menor tiempo posible y a proporcionar información clara sobre costos de envío y plazos de entrega. 
    El usuario es responsable de proporcionar información de envío precisa. </p><br> 

<h3>5. Política de Devoluciones:</h3>

    <p>Se aceptarán devoluciones según la política detallada.
    Zona Gamer se reserva el derecho de evaluar cada caso de devolución de manera individual.</p><br>

<h3>6. Privacidad y Seguridad:</h3>

    <p>La información del usuario se recopila y utiliza de acuerdo con nuestra Política de Privacidad.
    Se implementan medidas de seguridad para proteger la información del usuario durante las transacciones. </p> <br>

<h3>7. Uso Adecuado del Sitio:</h3>

    <p>Los usuarios se comprometen a utilizar el sitio de manera ética y legal.
    Se prohíbe la reproducción no autorizada de contenido y el uso indebido del sitio. </p><br>

<h3>8. Actualizaciones y Cambios:</h3>

    <p>Zona Gamer se reserva el derecho de realizar cambios en los términos y condiciones sin previo aviso.
    Los cambios entrarán en vigencia inmediatamente después de su publicación en el sitio.</p> <br>

<h3>9. Limitación de Responsabilidad:</h3>

   <p>Zona Gamer no se hace responsable de pérdidas, daños o problemas resultantes del uso del sitio o de los productos adquiridos.</p> <br>

<h3>10. Ley Aplicable:</h3>
<p>Estos términos y condiciones están sujetos a las leyes de [país] y cualquier disputa se resolverá en los tribunales de [ciudad].</p> <br>

<h3>11. Contacto:</h3>
<p>Para consultas, comentarios o asistencia, puedes contactarnos a través de la información proporcionada en la sección de "Contacto" en el sitio web.</p> <br><br>
</div>

<!-- Footer -->
<footer class="text-light py-3 mt-5 text-center">
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
