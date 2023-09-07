// Obtener referencias a elementos HTML
const botonAgregarAlCarrito = document.getElementById("agregarAlCarrito");
const contadorCarrito = document.getElementById("contadorCarrito");

// Recuperar la cantidad en el carrito desde localStorage
let cantidadEnCarrito = parseInt(localStorage.getItem('cantidadEnCarrito')) || 0;

// Inicializar el contador en la página
contadorCarrito.textContent = cantidadEnCarrito;

// Agregar un evento al botón "Añadir al carrito"
botonAgregarAlCarrito.addEventListener("click", () => {
    // Incrementar la cantidad en el carrito
    cantidadEnCarrito++;
    // Actualizar el contador en la página
    contadorCarrito.textContent = cantidadEnCarrito;

    // Guardar la cantidad en el carrito en localStorage
    localStorage.setItem('cantidadEnCarrito', cantidadEnCarrito);
});


console.log(cantidadEnCarrito);
