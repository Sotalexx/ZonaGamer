<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset ('img/logo.png') }}" type="image/x-icon">
    @vite(['resources/css/login.css'])

    <title>ZonaGamer</title>
</head>
<body>
 


<main class="h-100 gradient-form" style="background-color: #27005D;" >
<i class="fa-solid fa-arrow-left fa-lg" style="color: #005b41;"></i>
  <div class="container py-5 h-100" >
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10" >
        <div class="card rounded-3 text-white" >
          <div class="row g-0" >
            <div class="col-lg-6" >
              <div class="card-body p-md-5 mx-md-4" >

                <form>
                  <div class="logos">

                  </div>
                  <p class="text-inicio ">Iniciar sesion</p>
                
                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example11" class="form-control"
                      placeholder="Usuario" />
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control"  placeholder="Contraseña" />
                    
                  </div>

                  <div class="acceder text-center pt-1 mb-5 pb-2">
                    <button class="acceso btn btn-primary btn-block fa-lg gradient-custom-2 mb-1 " type="button">Iniciar</button>
                    <br>
                    <a class="text-white" href="#!">¿Haz olvidado tu contraseña?</a>
                  </div>

                  <div class="new d-flex align-items-center justify-content-center pb-4">
                    <p class="user m-3">¿Nuevo usuario?</p>
                    <button type="button" class="user btn btn-outline-danger">Crear cuenta</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="muñeco col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <p class=" text-dibujo mb-4">¡Hola! ¡Me alegro de verte!</p4>
                
                <img src="{{ asset('img/saludo.png') }}" alt="Saludo" class="img-fluid mb-2" >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
</body>
</html>