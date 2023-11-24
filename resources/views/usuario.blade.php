<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="shortcut icon" href="{{ asset ('img/logo.png') }}" type=" image/x-icon">

    @vite(['resources/css/usuario.css'])

    <title>ZonaGamer</title>
</head>

<body>

    <aside class="aside-container">
        <div class="sidebar">
            <div class="item">
                <i class="icon fa-solid fa-user"></i>
                <div class="text">Mi cuenta</div>
            </div>
            <div class="item">
                <i class="icon fa-solid fa-cart-flatbed"></i>
                <div class="text">Pedidos</div>
            </div>
            <div class="item">
                <i class="icon fa-solid fa-wallet"></i>
                <div class="text">Saldo</div>
            </div>
        </div>
    </aside>

    <header class="header-container">
        <div class="container-principal">
            <img src="{{asset ('img/logo.png')}}" alt="">
        </div>
    </header>

    <main>


    </main>



</body>

</html>