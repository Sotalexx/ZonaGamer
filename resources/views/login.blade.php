<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset ('img/logo.png') }}" type="image/x-icon">

    @vite(['resources/css/login.css'])

    <title>ZonaGamer</title>
</head>

  <body>
   <div class="container" id="container">
    <div class="form-container sign-up">
    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <form>
      <h1>Create Account</h1>
        
        <span>or use your email for registration</span>
        <input type="text" placeholder="Name">
        <input type="password" placeholder="Apellido">
        <input type="number" placeholder="Edad" id="edad"  />
        <div class="form-group">
          <center>
          <h6>Genero:</h6>
          </center>
        <div class="form-check form-check-inline">
         <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
         <label class="form-check-label" for="inlineCheckbox1">M</label>
      </div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">F</label>
</div>
   </div>
        <input type="file" placeholder="fotografia" accept="image/*" placeholder="Foto de perfil" >
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">
        <input type="text" placeholder="pais" >
        <input type="text" placeholder="direccion" >
        <button>Sign In</button>
      </form>
      </form>
    </div>
    <div class="form-container sign-in">
      <form>
        <h1>Sign In</h1>
        <div class="social-icons">
          <a href=""><i class="fa-brands fa-google"></i></a>
          <a href=""><i class="fa-brands fa-facebook"></i></a>
          <a href=""><i class="fa-brands fa-github"></i></a>
          <a href=""><i class="fa-brands fa-linkedin"></i></a>
        </div>
        <span>or use your email password</span>
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">
        <a href="#">Forget Your Password?</a>
        <button>Sign In</button>
      </form>
    </div>

    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-left">
          <h1>Welcome Back!</h1>
          <p>Enter your personal details to use all of site features</p>
          <button class="hidden" id="login">Sign In</button>
        </div>

        <div class="toggle-panel toggle-right">
          <h1>Hello Friend!</h1>
          <p>Register with your personal details to use all of site features</p>
          <button class="hidden" id="register">Sign Up</button>
       </div>

     
      </div>

     </div>
     @vite(['resources/js/login.js'])
 </body>

</html>
 