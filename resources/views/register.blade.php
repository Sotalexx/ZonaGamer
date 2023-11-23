<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset ('img/logo.png') }}" type="image/x-icon">
    <title>ZonaGamer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    @vite(['resources/css/register.css'])
</head>

<body>

    <section class="h-100 gradient-form">
        <div class="fondo">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-8">
                        <div class="card rounded-3 text-black">
                            <div class="card-body p-md-5 mx-md-4">

                                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <p class="inicio">Crear una cuenta</p>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" id="nombre" class="form-control" />
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="apellido">Apellido</label>
                                            <input type="text" id="apellido" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="edad">Edad</label>
                                            <input type="number" id="edad" class="form-control" />
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="genero">Género</label>
                                            <select class="form-control" id="genero">
                                                <option value="masculino">Masculino</option>
                                                <option value="femenino">Femenino</option>
                                                <option value="otro">Otro</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="fotografia">Fotografía</label>
                                            <input type="file" id="fotografia" class="form-control" accept="image/*" />
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="correo">Correo</label>
                                            <input type="email" id="correo" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="contraseña">Contraseña</label>
                                            <input type="password" id="contraseña" class="form-control" />
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="usuario">Usuario</label>
                                            <input type="text" id="usuario" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="pais">País</label>
                                            <input type="text" id="pais" class="form-control" />
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="direccion">Dirección</label>
                                            <input type="text" id="direccion" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                            type="button">Registrarse</button>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">¿Ya tienes una cuenta?</p>
                                        <button type="button" class="btn btn-outline-danger">Iniciar</button>
                                    </div>


                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</body>

</html>