const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});


 // Agrega este código después de la definición del DOMContentLoaded
 document.getElementById('signin-button').addEventListener('click', function (event) {
    event.preventDefault(); // Evitar el envío predeterminado del formulario

    // Obtener valores de los campos
    var email = document.getElementById('username').value;  // Cambiado a 'username' según tu código HTML
    var password = document.getElementById('password').value;

    // Verificar las credenciales (esto es solo un ejemplo, debes usar un método seguro para verificar)
    if (email === 'admin@example.com' && password === '123lunes') {
        // Credenciales válidas, redirige a la página deseada
        window.location.href = '/seccionAdmin';

    } else {
        // Credenciales incorrectas, maneja según sea necesario (puedes mostrar un mensaje de error)
        alert('Credenciales incorrectas');
    }
});