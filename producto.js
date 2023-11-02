document.addEventListener('DOMContentLoaded', function() {
    const botonesTalle = document.querySelectorAll('.talla');
  
    botonesTalle.forEach(function(boton) {
      boton.addEventListener('click', function() {
        botonesTalle.forEach(function(b) {
          b.classList.remove('seleccionado');
        });
        this.classList.add('seleccionado');
      });
    });
  });
  
  document.getElementById("agregarAlCarrito").addEventListener("click", function() {
    var cantidad = document.getElementById("cantidad").value;
    
    // Añadir el producto y cantidad al carrito (puedes implementar esta parte según tus necesidades)
    // Por ejemplo, podrías agregarlo a un arreglo o a una variable que mantenga un registro del carrito.
  
    // Luego, reseteamos el campo de cantidad a 1 para que esté listo para la próxima selección.
    document.getElementById("cantidad").value = 1;
  
    // Finalmente, deseleccionamos los botones de talle (como hicimos antes).
    var botonesTalle = document.querySelectorAll(".talla");
    botonesTalle.forEach(function(boton) {
      boton.classList.remove("seleccionado");
    });
  });
  