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
          <td >${product.product_image}</td>
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
$('#updateModal').modal('show');
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
