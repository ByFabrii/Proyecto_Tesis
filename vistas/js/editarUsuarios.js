// Controlador de eventos para cargar el formulario de edición
document.addEventListener("DOMContentLoaded", function() {
    const editUserLinks = document.querySelectorAll(".editar-usuario");
    const editUserModal = document.getElementById("usuariosModal");
    const modalContent = editUserModal.querySelector(".modal-body");

    editUserLinks.forEach(function(link) {
        link.addEventListener("click", function(e) {
            e.preventDefault();
            const userId = link.getAttribute("data-id");
            fetch("updateUsers.php?id=" + userId)
                .then(response => response.text())
                .then(data => {
                    modalContent.innerHTML = data;
                    editUserModal.classList.add("show");
                })
                .catch(error => {
                    alert("Error al cargar el formulario de edición.");
                });
        });
    });
});