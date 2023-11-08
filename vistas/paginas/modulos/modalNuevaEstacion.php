<?php
    include "../../../modelo/conexion.php";
?>

<!-- Modal -->

<?php
    include "../../../modelo/consultas/consultaEstaciones.php";
?>
<div class="modal fade" id="estacionesModal" tabindex="-1" aria-labelledby="estacionesModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-1 text-center" id="estacionesModalLabel">Registro de estaciones</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="">
                <form action ="../login/register_estacion.php" method = "POST">
                    <div class="username">
                        <input type="text" name ="nombre" required>
                        <label>Nombre</label>
                    </div>
                    <div class="username">
                        <input type="text" name ="longitud" required>
                        <label>longitud</label>
                    </div>
                    <div class="username">
                        <input type="text" name ="latitud" required>
                        <label>Latitud</label>
                    </div>
                    <input type="submit" value="Crear" class="btn btn-primary fs-1">
                </form>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
    </div>
  </div>
</div>