const carrito = document.getElementById('carrito')
const contadorProductos = document.getElementById('contador-productos')

let lista = []
let valortotal = 0


// Función para abrir el modal
function abrirCarro() {
    var modal = document.getElementById("listaDeproductos");
    modal.style.display = "block"; // Muestra el modal
    console.log("abierto");
}

// Función para cerrar el modal
function cerrarCarro() {
    var modal = document.getElementById("listaDeproductos");
    modal.style.display = "none"; // Oculta el modal
}

// Cerrar el modal si se hace clic fuera del contenido
window.onclick = function(event) {
    var modal = document.getElementById("listaDeproductos");
    if (event.target == modal) {
        modal.style.display = "none"; // Oculta el modal si se hace clic fuera de él
    }
}