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
      <form>
        <h1>Create Account</h1>
        <div class="social-icons">
          <a href=""><i class="fa-brands fa-google"></i></a>
          <a href=""><i class="fa-brands fa-facebook"></i></a>
          <a href=""><i class="fa-brands fa-github"></i></a>
          <a href=""><i class="fa-brands fa-linkedin"></i></a>
        </div>
        <span>or use your email for registration</span>
        <input type="text" placeholder="Name">
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">
        <button>Sign In</button>
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
 