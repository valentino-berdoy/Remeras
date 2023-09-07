// Obtener referencias a elementos HTML
const botonAgregarAlCarrito = document.getElementById("agregarAlCarrito");
const contadorCarrito = document.getElementById("contadorCarrito");

// Inicializar el contador
let cantidadEnCarrito = 0;

// Agregar un evento al botón "Añadir al carrito"
botonAgregarAlCarrito.addEventListener("click", () => {
    // Incrementar la cantidad en el carrito
    cantidadEnCarrito++;
    
    // Actualizar el contador en la página
    contadorCarrito.textContent = cantidadEnCarrito;
});
