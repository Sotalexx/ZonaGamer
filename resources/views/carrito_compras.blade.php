<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <title>ZonaGamer</title>
    @vite(['resources/css/carrito.css'])
</head>

<body>

    <header class="header-container">

        <div class="logo-container">
            <a href="#"><img src="{{ asset ('img/logo.png') }}" alt=""></a>
            <h1>ZonaGamer</h1>
        </div>
    </header>

    <main class="main-container">


        <div class="cesta-container">
            <h2 class="titulo2">CESTA</h2>
        </div>

        <div class="resumen-container">
            <h2 class="titulo2">RESUMEN</h2>
        </div>
    </main>

</body>

</html>