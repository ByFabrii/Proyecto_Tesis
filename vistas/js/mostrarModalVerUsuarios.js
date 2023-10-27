$(document).ready(function() {
    // Verifica si el parámetro "showModal" está presente en la URL
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('showModal') === '1') {
        // Abre el modal con los usuarios aquí
        $('#VerusuariosModal').modal('show');
    } else if(urlParams.get('showModal') === '2') {
        // Abre el modal con los usuarios aquí
        $('#editarUsuarioModal').modal('show');
    } else if(urlParams.get('showModal') === '3') {
        // Abre el modal con los usuarios aquí
        $('#VerEstacionesModal').modal('show');
    }
});
 
