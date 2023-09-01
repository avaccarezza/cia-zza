
// Eliminar un proyecto desde etiqueta <a>
document.addEventListener('DOMContentLoaded', function() {
    // Selecciona el enlace por su ID
    const eliminarProyectoEnlace = document.getElementById('destroyProject');

    // Agrega un controlador de eventos para el clic en el enlace
    eliminarProyectoEnlace.addEventListener('click', function(event) {
        // Evita que el enlace realice su acción predeterminada (navegar a una URL)
        event.preventDefault();

        // Encuentra el formulario padre del enlace
        const formulario = eliminarProyectoEnlace.closest('form');

        // Envía el formulario
        formulario.submit();
    });
});


