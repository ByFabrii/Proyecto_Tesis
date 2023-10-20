// Función para recargar la página y limpiar la URL
function reloadAndCleanURL() {
    // Elimina todos los mensajes y otros parámetros de la URL
    history.replaceState(null, document.title, window.location.pathname);

    // Recarga la página
    location.reload();
}

// Asigna el evento onclick al enlace de "Home"
document.getElementById('homeLink').addEventListener('click', reloadAndCleanURL);
