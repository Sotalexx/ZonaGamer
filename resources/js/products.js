fetch("http://127.0.0.1:8000/api/products")
  .then((response) => response.json())
  .then((products) => {
    const cardContainer = document.getElementById("product-cards-container");

    // Limita la cantidad de productos a mostrar a 12
    const productsToShow = products.slice(0, 25);

    productsToShow.forEach((product, index) => {
      // Crea una nueva fila cada 4 productos
      if (index % 4 === 0) {
        const row = document.createElement("div");
        row.classList.add("row", "mb-4");
        cardContainer.appendChild(row);
      }

      // Crea una card para cada producto
      const card = document.createElement("div");

      card.classList.add("col-md-3");

      card.innerHTML = `
        <div class="card">
        <img src="${product.product_image}" class="card-img-top imagen-producto" alt="${product.product_name}">

          <div class="card-body d-flex flex-column">
            <h5 class="card-title">${product.product_name}</h5>
            <p class="card-text flex-grow-1">${product.description}</p>
            <p class="card-text">Precio: ${product.price}</p>
            <a href="#"><i class="corazon fas fa-heart"></i></a>
            <a href="#" class="btn btn-primary"><i class="fa-solid fa-cart-shopping p-3"></i>Añadir a carrito</a>
          </div>
        </div>
      `;

      // Agrega la card a la fila actual
      const currentRow = cardContainer.lastChild;
      currentRow.appendChild(card);


        // A event listener al botón "Añadir a carrito"
        const addToCartButton = card.querySelector('.btn.btn-primary');
        addToCartButton.addEventListener('click', updateCartCount);
    });
  })
  .catch((error) =>
    console.error("Error al obtener los productos:", error)
  );


// Agrega un contador para llevar el seguimiento de la cantidad en el carrito
let cartCount = 0;

// Función para actualizar el contador y mostrar la notificación
function updateCartCount() {
   event.preventDefault();
  cartCount++;
  document.getElementById("cart-count").textContent = cartCount;

  // Muestra una notificación (puedes personalizar esto según tus necesidades)
  alert(`Producto añadido al carrito. Cantidad en el carrito: ${cartCount}`);
}
