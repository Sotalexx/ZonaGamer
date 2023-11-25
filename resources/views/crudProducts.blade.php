<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="shortcut icon" href="{{ asset ('img/logo.png') }}" type=" image/x-icon">

    @vite(['resources/css/inicio.css'])
    @vite(['resources/css/crudProducts.css'])
   
    <title>ZonaGamer</title>
</head>

<body>
    <!-- Contenedor padre del header-->
    <header class="header-container">

        <div class="logo-container">
            <a href="#"><img src="{{ asset ('img/logo.png') }}" alt=""></a>
            <h1>ZonaGamer</h1>
        </div>


       <h1>ADMINISTADOR</h1>


<!--Botones de interaccion-->
<div class="btn-interaccion">
    <a class="text-decoration-none" href="{{ url('/inicio') }}">
        <h3 class="Meterse">Logut</h3>
    </a>

    
    </header>
    <navbar class="menu navbar">
    <div>
        <a class="text-light text-decoration-none" href="{{ url('/crudProducts') }}">Administrar Productos</a>
        <a class="text-light text-decoration-none" href="{{ url('/crudProducts') }}">Administrar Usuaarios</a>
        </div>



    </navbar>
    </head>

    <body>
        <div id="product-list">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre del Producto</th>
                        <th>Categoría</th>
                        <th>Imagen</th>
                        <th>Proveedor</th>
                        <th>Stock</th>
                        <th>Costo</th>
                        <th>Precio</th>
                        <th>Descripción</th>
                        <th>Fecha de Creación</th>
                        <th>Fecha de Actualización</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody id="product-table-body">
                    <!-- Aquí se insertarán los datos de los productos -->
                </tbody>
            </table>
        </div>

        <script>
            // Hacer la solicitud a la API y mostrar los datos en la tabla
            fetch("http://127.0.0.1:8000/api/products")
                .then((response) => response.json())
                .then((products) => {
                    const tableBody =
                        document.getElementById("product-table-body");

                    products.forEach((product) => {
                        const row = document.createElement("tr");
                        row.innerHTML = `
                        <td>${product.id}</td>
                        <td>${product.product_name}</td>
                        <td>${product.category}</td>
                        <td>${product.product_image}</td>
                        <td>${product.supplier}</td>
                        <td>${product.stock}</td>
                        <td>${product.cost}</td>
                        <td>${product.price}</td>
                        <td>${product.description}</td>
                        <td>${product.created_at}</td>
                        <td>${product.updated_at}</td>
                        <td><button type="button" class="btn btn-primary" onclick="toggleCard()">Actualizar</button></td>
                        <td><button>Eliminar</button></td>
                        
                    `;
                        tableBody.appendChild(row);
                    });
                })
                .catch((error) =>
                    console.error("Error al obtener los productos:", error)
                )

                

                

                // Evento clic para el botón "Actualizar" en cada fila
    document.getElementById("product-table-body").addEventListener("click", function (event) {
        if (event.target.tagName === "BUTTON" && event.target.innerText === "Actualizar") {
            // Obtener la información del producto de la fila
            const row = event.target.parentNode.parentNode;
            const productId = row.children[0].innerText;
            const productName = row.children[1].innerText;
            const category = row.children[2].innerText;
            const productImage = row.children[3].innerText;
            const supplier = row.children[4].innerText;
            const stock = row.children[5].innerText;
            const cost = row.children[6].innerText;
            const price = row.children[7].innerText;
            const description = row.children[8].innerText;

            // Llenar la tarjeta de actualización con la información del producto
            document.getElementById("productId").value = productId;
            document.getElementById("productName").value = productName;
            document.getElementById("category").value = category;
            document.getElementById("productImage").value = productImage;
            document.getElementById("supplier").value = supplier;
            document.getElementById("stock").value = stock;
            document.getElementById("cost").value = cost;
            document.getElementById("price").value = price;
            document.getElementById("description").value = description;

           
            // Mostrar la tarjeta de actualización
            document.getElementById("updateCard").classList.remove("d-none");
        }

        
            function updateProduct() {
                // Obtener los valores de los campos del formulario
                var productId = document.getElementById("productId").value;
                var productName = document.getElementById("productName").value;
                var category = document.getElementById("category").value;
                var productImage =
                    document.getElementById("productImage").value;
                var supplier = document.getElementById("supplier").value;
                var stock = document.getElementById("stock").value;
                var cost = document.getElementById("cost").value;
                var price = document.getElementById("price").value;
                var description = document.getElementById("description").value;

                // Construir el objeto de datos a enviar al servidor
                var data = {
                    product_name: productName,
                    category: category,
                    product_image: productImage,
                    supplier: supplier,
                    stock: stock,
                    cost: cost,
                    price: price,
                    description: description,
                };

                // Enviar la solicitud al servidor para actualizar el producto
                fetch(`http://127.0.0.1:8000/api/product/update/${productId}`, {
                    method: "PUT", // o 'POST' dependiendo de tu API
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify(data),
                })
                    .then((response) => response.json())
                    .then((data) => {
                        console.log("Success:", data);
                        alert("Producto actualizado exitosamente");
                    })
                    .catch((error) => {
                        console.error("Error:", error);
                        alert("Hubo un error al actualizar el producto");
                    });
            }

        

        
        
    });

    function toggleCard() {
        var card = document.querySelector('.card');
        card.classList.toggle('overlay-card');
    }

    // If you want to close the card on a second click, you can add this event listener
    document.querySelector('.card').addEventListener('click', function (e) {
        if (e.target.classList.contains('overlay-card')) {
            toggleCard();
        }
    });

    

    

  
        </script>

        

<div class="container mt-5">
    <div class="card d-none" id="updateCard">
        <div class="card-header">
            <h1 class="card-title">Actualizar Producto</h1>
        </div>
        <div class="card-body">
            <form id="updateForm">
                <div class="form-group">
                    <label for="productId">ID del Producto:</label>
                    <input type="text" class="form-control" id="productId" required />
                </div>

                <div class="form-group">
                    <label for="productName">Nombre del Producto:</label>
                    <input type="text" class="form-control" id="productName" required />
                </div>

                <div class="form-group">
                    <label for="category">Categoría:</label>
                    <input type="text" class="form-control" id="category" required />
                </div>

                <div class="form-group">
                    <label for="productImage">Imagen del Producto:</label>
                    <input type="text" id="productImage" required /><br />
                </div>

                <div class="form-group">
                    <label for="supplier">Proveedor:</label>
                    <input type="text" class="form-control" id="supplier" required />
                </div>

                <div class="form-group">
                    <label for="stock">Stock:</label>
                    <input type="number" class="form-control" id="stock" required />
                </div>

                <div class="form-group">
                    <label for="cost">Costo:</label>
                    <input type="text" class="form-control" id="cost" required />
                </div>

                <div class="form-group">
                    <label for="price">Precio:</label>
                    <input type="text" class="form-control" id="price" required />
                </div>

                <div class="form-group">
                    <label for="description">Descripción:</label>
                    <textarea class="form-control" id="description" rows="4" required></textarea>
                </div>

                <td><button type="button" class="btn btn-warning" onclick="updateProduc()">Actualizar</button></td>
            </form>
        </div>
    </div>
</div>

  


  



    
</body>
  <!-- Footer -->
  <footer class="footer text-light py-3 mt-5 text-center">
        <p>&copy; Zona Gamer 2023 <img src="{{ asset('img/logo.png') }}" alt="Logo" height="80"></p>
        <p>
            <a href="#" class="text-light"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-light ml-3"><i class="fab fa-instagram"></i></a>
            <a href="tel:+123456789" class="text-light ml-3"><i class="fas fa-phone"></i></a>
        </p>
        <p><a href="#">Política de privacidad</a> | <a href="{{ url('/terminos') }}">Términos y condiciones</a></p>
    </footer>

</html>