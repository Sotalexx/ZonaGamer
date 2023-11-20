<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    @vite(['resources/css/login.css'])

    <title>Login</title>
</head>
<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <form>
                  <p>Por favor, ingrese a su cuenta</p>

                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example11" class="form-control"
                      placeholder="usuario o correo" />
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control"  
                    placeholder="contraseña" />
                    
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class=" btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Acceder</button>
                    <a class="text-muted" href="#!">¿Has olvidado tu contraseña?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">¿Nuevo usuario?</p>
                    <button type="button" class="btn btn-outline-danger">Crear cuenta</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">¡Hola! ¡Me alegro de verte!</h4>
                <img src="{{ asset('img/saludo.png') }}" alt="Saludo" class="img-fluid mb-3" >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>